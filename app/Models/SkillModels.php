<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModels extends Model
{
    protected $table = 'Skills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
}
