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
        $courses['coursesJson'] = json_encode($courseModel->findAll());        
        $pagedata = 
        [
            'title'=>'courses',
            'content'=>view('mahasiswa/displayDaftarCourse',$courses)
        ];

        return view('displayTemplate',$pagedata);
    }

    public function enroll()
    {
        $courseModel = new CourseModel();
        $takeModel = new TakeModel();

        // Ambil data yang dikirim dari form (biasanya berupa array dari checkbox)
        $selectedCourses = $this->request->getPost('selected_courses');

        if (empty($selectedCourses)) {
            return redirect()->to('/mahasiswa/courses')->with('error', 'Tidak ada course yang dipilih!');
        }

        foreach ($selectedCourses as $courseId) {
            $course = $courseModel->find($courseId);

            if ($course) {
                $takeModel->insert([
                    'student_id' => session()->get('id'),
                    'courses_name' => $course['courses_name'],
                    'enroll_date' => date('Y-m-d')
                ]);
            }
        }

        return redirect()->to('/mahasiswa/mycourses')->with('success', 'Berhasil enroll course yang dipilih!');
    }

    public function myCourses()
    {
        $takemodel = new TakeModel();
        $data['myCoursesData'] = json_encode($takemodel->where('student_id', session()->get('id'))->findAll());

        $pagedata = 
        [
            'title'=>'yang sudah di enroll',
            'content'=>view('mahasiswa/displayMyCourse',$data)
        ];

        return view('displayTemplate',$pagedata);
    }
}
