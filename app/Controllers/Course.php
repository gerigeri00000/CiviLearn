<?php

namespace App\Controllers;

use App\Models\CourseModels;

class Course extends BaseController
{

    public function index(): string
    {
        $courseModels = new CourseModels();
        $data['items'] = $courseModels->findAll();
        // dd($data['items']);
        return view('courses_view', $data);
    }

    public function detail($id)
    {
        $courseModels = new CourseModels();
        $data['items'] = $courseModels->find($id);
        if (!$data['items']) {
            // Handle if no data found
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Record not found');
        }
        return view('course_detail', $data);
    }
}
