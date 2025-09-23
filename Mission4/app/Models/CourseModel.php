<?php namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'courses_id';
    protected $allowedFields = ['courses_id', 'courses_name', 'credits'];
}
