<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    // Show the form for creating homework
    public function create()
    {
        return view('homework.create');
    }

    // Store the homework data in the database
    public function store(Request $request)
    {
        $request->validate([
            'homework_id' => 'required|unique:homeworks',
            'description' => 'required',
            'due_date' => 'required|date',
            'subject_name' => 'required',
            'class_id' => 'required',
        ]);

        Homework::create([
            'homework_id' => $request->homework_id,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'subject_name' => $request->subject_name,
            'class_id' => $request->class_id,
        ]);

        return redirect()->route('homework.create')->with('success', 'Homework assigned successfully');
    }
}
