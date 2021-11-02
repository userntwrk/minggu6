<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    protected $table = "courses";

    public function student()
    {
      return $this->belongsToMany(Student::class, 'course_id');
    }
}
