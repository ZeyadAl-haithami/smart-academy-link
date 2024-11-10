<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch all students from the database
        $students = students::all();

        // Pass the students data to the view
        return view('students.index', compact('students'));
    }
}
