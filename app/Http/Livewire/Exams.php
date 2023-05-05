<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\Courses;
use App\Models\Stages;
use App\Models\StudentEnroleCourse;
use Livewire\Component;
use PhpOffice\PHP;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Exams extends Component
{
    public $Stage, $activeAcademicYear;
    public $studentCoursesEnrolments, $activeCourses;
    public $currentPage = 1;

    public function render()
    {
        return view('livewire.exams');
    }
    public function mount($stage_id)
    {
        $this->Stage = Stages::find($stage_id);
        $this->activeCourses = $this->Stage->activeCourses->sortBy('id');
        $this->activeAcademicYear = AcademicYears::where('is_active', 1)->first();
        $sapratesheet = new IOFactory();
    }
    public function changePage($page_id)
    {
        $this->currentPage = $page_id;
    }
}
