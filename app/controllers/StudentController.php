<?php

namespace Vokuro\Controllers;

use Vokuro\Models\Student;

class StudentController extends ControllerBase {

    public function indexAction() {
        $students = Student::find();  //select* from student
        $this->view->students = $students;
    }

}
