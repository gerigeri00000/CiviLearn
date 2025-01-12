<?php

namespace App\Controllers;

use App\Models\CourseModels;
use App\Models\InstructorModels;


class Home extends BaseController
{
    public function index(): string
    {
        $courseModels = new CourseModels();
        $instructorModel = new InstructorModels();

        // Query Join
        $db = \Config\Database::connect();

        $builder = $db->table('courses');
        $builder->join('instructorprofile', 'courses.id_instructor = instructorprofile.id');
        $query = $builder->get();

        $result = $query->getResultArray();


        // $data['items'] = $courseModels->findAll();
        $data['items'] = $result;
        $data['items2'] = $instructorModel->findAll();
        // dd($data['items']);
        // dd($data['items']);
        return view('home_view', $data);
    }
}
