<?php

namespace App\Models;

use CodeIgniter\Model;

class InstructorSkillModels extends Model
{
    protected $table = 'InstructorSkills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['instructor_id', 'skill_id', 'proficiency'];
}
