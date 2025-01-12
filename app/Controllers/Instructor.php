<?php

namespace App\Controllers;

use App\Models\InstructorModels;
use App\Models\SkillModels;
use App\Models\InstructorSkillModels;

class Instructor extends BaseController
{

    public function index(): string
    {
        $instructorModel = new InstructorModels();
        $data['items2'] = $instructorModel->findAll();
        // dd($data['items']);
        return view('instructor_view', $data);
    }

    public function detail($id)
    {
        $instructorModel = new InstructorModels();
        $skillModel = new SkillModels();
        $instructorSkillModel = new InstructorSkillModels();

        // Ambil data Instructor
        $instructor = $instructorModel->find($id);

        // Ambil data Skills dan Proficiency
        $db = \Config\Database::connect();
        $query = $db->query("
            SELECT s.name AS skill_name, ins.proficiency
            FROM InstructorSkills ins
            JOIN Skills s ON ins.skill_id = s.id
            WHERE ins.instructor_id = ?
        ", [$id]);
        $skills = $query->getResultArray();

        $builder = $db->table('courses');
        // $id adalah parameter input
        $builder->where('id_instructor', $id)
            ->join('instructorprofile', 'courses.id_instructor = instructorprofile.id');
        $query = $builder->get();
        $courses = $query->getResultArray();

        // Gabungkan data
        $data = [
            'instructor' => $instructor,
            'skills' => $skills,
            'courses' => $courses
        ];

        return view('instructor_profile', $data);
    }
}
