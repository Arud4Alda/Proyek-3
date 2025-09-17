<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\CourseModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        $pagedata = [
            'title'   => 'Dashboard Admin',
            'content' => view('admin/displayDashboard')
        ];
        return view('displayTemplate',$pagedata);
    }

    // ---------------- Mahasiswa ----------------

    public function mahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('students')
            ->select('students.student_id, students.entry_year, users.username, users.full_name')
            ->join('users', 'users.user_id = students.student_id');
        $data['mahasiswa'] = $builder->get()->getResultArray();

        $pagedata = [
            'title'   => 'Daftar Mahasiswa',
            'content' => view('admin/displayDaftarMahasiswa',$data)
        ];
        return view('displayTemplate',$pagedata);
    }

    public function tambahMahasiswa()
    {
        $pagedata = [
            'title'=>'Tambah Mahasiswa',
            'content'=>view('admin/formMahasiswa')
        ];
        return view('displayTemplate',$pagedata);
    }

    public function simpanMahasiswa()
    {
        $userModel = new UserModel();
        $studentModel = new StudentModel();
        $studentId = $this->request->getPost('student_id');

        $userModel->insert([
           'user_id'   => $studentId,
            'username'  => $this->request->getPost('username'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'full_name' => $this->request->getPost('full_name'),
            'role'      => $this->request->getPost('role')
        ]);

        $studentModel->insert([
            'student_id' => $studentId,
            'entry_year' => $this->request->getPost('entry_year')
        ]);

        return redirect()->to('admin/mahasiswa');
    }

    public function editMahasiswa($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('students')
            ->select('students.student_id, students.entry_year, users.username, users.full_name')
            ->join('users', 'users.user_id = students.student_id')
            ->where('students.student_id', $id);
        $data['mahasiswa'] = $builder->get()->getRowArray();

        $pagedata = [
            'title'=>'Edit Mahasiswa',
            'content'=>view('admin/formEditMahasiswa',$data)
        ];
        return view('displayTemplate',$pagedata);
    }

    public function updateMahasiswa($id)
    {
        $userModel = new UserModel();
        $studentModel = new StudentModel();

        $updateUser = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];
        if ($this->request->getPost('password')) {
            $updateUser['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }
        $userModel->update($id, $updateUser);

        $studentModel->update($id, [
            'entry_year' => $this->request->getPost('entry_year')
        ]);

        return redirect()->to('/admin/mahasiswa');
    }

    public function hapusMahasiswa($id)
    {
        $userModel = new UserModel();
        $studentModel = new StudentModel();

        $studentModel->delete($id);
        $userModel->delete($id);

        return redirect()->to('/admin/mahasiswa');
    }

    // ---------------- Course ----------------

    public function course()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        $pagedata = [
            'title'=>'Daftar Course',
            'content'=>view('admin/displayDaftarCourse',$data)
        ];
        return view('displayTemplate',$pagedata);
    }

    public function tambahCourse()
    {
        $pagedata = [
            'title'=>'Tambah Course',
            'content'=>view('admin/formCourse')
        ];
        return view('displayTemplate',$pagedata);
    }

    public function simpanCourse()
    {
        $courseModel = new CourseModel();
        $courseModel->insert([
            'courses_id' => $this->request->getPost('courses_id'),
            'courses_name' => $this->request->getPost('courses_name'),
            'credits'     => $this->request->getPost('credits')
        ]);
        return redirect()->to('/admin/course');
    }

    public function editCourse($id)
    {
        $courseModel = new CourseModel();
        $data['course'] = $courseModel->find($id);

        $pagedata = [
            'title'=>'Edit Course',
            'content'=>view('admin/formEditCourse',$data)
        ];
        return view('displayTemplate',$pagedata);
    }

    public function updateCourse($id)
    {
        $courseModel = new CourseModel();
        $courseModel->update($id, [
            'courses_name' => $this->request->getPost('courses_name'),
            'credits'     => $this->request->getPost('credits')
        ]);
        return redirect()->to('/admin/course');
    }

    public function hapusCourse($id)
    {
        $courseModel = new CourseModel();
        $courseModel->delete($id);

        return redirect()->to('/admin/course');
    }
}
