<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnroleCourse extends Model
{
    use HasFactory;
    /**
     * Get the student that owns the StudentEnroleCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
    /**
     * Get the stage that owns the StudentEnroleCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stage()
    {
        return $this->belongsTo(Stages::class, 'stage_id', 'id');
    }
    /**
     * Get the academic_year that owns the StudentEnroleCourse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function academic_year()
    {
        return $this->belongsTo(AcademicYears::class, 'academic_year_id', 'id');
    }
}
