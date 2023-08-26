<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class Students extends BaseController
{
    public function index(){
       //list the students
        $studentsModel = new StudentsModel();

        $students = $studentsModel
        ->findAll();
        $data = [
            'students' => $students,
            'sn' => 1
        ];

        return view('students/list', $data);
    }

    public function showstudentform(){
        return view('students/createstudent');
    }

    public function savestudent(){
        // $studentName = $this->request->getPost('student_name'); // $_POST['student_name']

        $postData = $this->request->getPost();

        $studentsModel = new StudentsModel();

        $studentsModel->insert($postData);

        return redirect()->to('students')->with('message', 'Students has been created successfully');

    }

    public function deletestudent($id){

        $studentsModel = new StudentsModel();

        $studentsModel->delete($id);

        return redirect()->to('students');

    }

    public function editstudent($id){
        //get student record
        $studentsModel = new StudentsModel();

        $student = $studentsModel->find($id);

        $data = [
            'student' => $student
        ];

        //return the view for edit
        return view('students/editstudent', $data);

    }

    public function updatestudent($id){
        $postData = $this->request->getPost();

        $studentsModel = new StudentsModel();

        $studentsModel->update($id, $postData);

        return redirect()->to('students');
    }
}
