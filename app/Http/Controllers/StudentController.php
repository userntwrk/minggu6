<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('kelas')->get();
        return view('student.index',['student' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('student.create',['kelas'=>$kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->department = $request->department;
        $student->phone_number = $request->phone_number;
        $kelas = new Kelas;
        $kelas->id = $request->Kelas;
        $student->kelas()->associate($kelas);
        $student->save();
        // if true, redirect to index
        return redirect('/students')->with('warning', 'Data Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $student = Student::find($id);
      return view('student.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Student::find($id);
      $kelas = Kelas::all();
      return view('student.edit',['student'=>$student], ['kelas'=>$kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->department = $request->department;
        $student->phone_number = $request->phone_number;

        $kelas = new Kelas;
        $kelas->id = $request->Kelas;

        $student->kelas()->associate($kelas);
        $student->save();

        return redirect('/studentss')->with('status', 'Data Updates!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students')->with('warning', 'Data Deleted!');
    }


    public function search($id)
    {
        $student = $request->get('id');
        $hasil = Student::where('nama', 'LIKE', '%' . $student . '%')->paginate(10);

        return view('student.index', compact('hasil', 'student'));
    }
}
