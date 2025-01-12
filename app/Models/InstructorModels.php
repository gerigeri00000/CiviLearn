<?php

namespace App\Models;

use CodeIgniter\Model;

class InstructorModels extends Model
{
    protected $table = 'InstructorProfile';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'role',
        'rating',
        'students_count',
        'email',
        'phone',
        'about',
        'courses_available',
        'courses_completed',
        'profile_picture'
    ];
}
