<?php namespace App\Models;

use CodeIgniter\Model;

class TakeModel extends Model
{
    protected $table = 'takes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['enroll_date', 'student_id', 'courses_name'];
}
