<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student_teacher.create', [
            'students' => Student::all(),
            'teachers' => Teacher::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        StudentTeacher::create($request->all());

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentTeacher $studentTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentTeacher $studentTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentTeacher $studentTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentTeacher $studentTeacher)
    {
        //
    }
}
