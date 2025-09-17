<?php namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\TakeModel;

class Mahasiswa extends BaseController
{
    public function dashboard()
    {
       $pagedata = 
        [
            'title'=>'dashboard',
            'content'=>view('mahasiswa/displayDashboard')
        ];

        return view('displayTemplate',$pagedata);
    }

    public function courses()
    {
        $courseModel = new CourseModel();
        $courses['course'] = $courseModel->findAll();        
        $pagedata = 
        [
            'title'=>'courses',
            'content'=>view('mahasiswa/displayDaftarCourse',$courses)
        ];

        return view('displayTemplate',$pagedata);
    }

    public function enroll($courseId)
    {
        $courseModel = new CourseModel();
        $course = $courseModel->find($courseId);  // cari berdasarkan courses_id
        if (!$course) 
            {
            return redirect()->to('/mahasiswa/courses')->with('error', 'Course tidak ditemukan!');
        }

        $takeModel = new TakeModel();
        $takeModel->insert([
            'student_id' => session()->get('id'),
            'courses_name' => $course['courses_name'],
            'enroll_date' => date('Y-m-d')
        ]);

        return redirect()->to('/mahasiswa/mycourses')->with('success', 'Berhasil enroll course!');
    }

    public function myCourses()
    {
        $takemodel = new TakeModel();
        $data['enroll'] = $takemodel->where('student_id', session()->get('id'))->findAll();

        $pagedata = 
        [
            'title'=>'yang sudah di enroll',
            'content'=>view('mahasiswa/displayMyCourse',$data)
        ];

        return view('displayTemplate',$pagedata);
    }
}
