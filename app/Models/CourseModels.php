<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModels extends Model
{
    protected $table = 'courses'; // Database table name
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['title', 'instructor', 'lesson_count', 'duration', 'students_count', 'rating', 'reviews_count', 'level', 'price', 'original_price', 'image_url', 'is_free']; // Fields allowed for insert/update
    // protected $useTimestamps = true; // Automatically manage created_at and updated_at
}
