<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public $academicYear, $newStudent, $SearchOption, $StudentsList;
    protected $rules = [
        'newStudent.name' => 'required',
        'newStudent.gender' => 'required',
        'newStudent.birth_date' => 'required',
        'newStudent.gov' => 'required',
        'newStudent.address' => 'required',
        'newStudent.study_type' => 'required',
        'newStudent.is_parallel' => 'required',
        'SearchOption' => ''
        //'newStudent.acceptance_year' => 'required',
    ];
    public function render()
    {
        return view('livewire.students');
    }
    public function mount()
    {
        $this->academicYear = AcademicYears::where('is_active', 1)->first();
        $this->newStudent = new Student();
        $this->SearchOption = 1;
        $this->StudentsList = Student::where('status', $this->SearchOption)->get();
    }
    public function saveStudent()
    {
        $this->validate();
        $this->newStudent->save();
        $this->newStudent = new Student();
    }
    public function selectStudent($student_id)
    {
        $this->newStudent = Students::find($student_id);
    }
    public function updated($propertyName)
    {
        if ($propertyName == 'SearchOption') {
            $this->StudentsList = Student::where('status', $this->SearchOption)->get();
        }
    }
}
