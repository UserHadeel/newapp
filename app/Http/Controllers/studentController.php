<?php

   namespace App\Http\Controllers;
   use App\Models\Student;
   use Illuminate\Http\Request;
   use Illuminate\Http\RedirectResponse;
   use Illuminate\View\View;

   class StudentController extends Controller
   {
    public function create() : View
    {
      return view('student');
    }
    public function store(Request $request) : RedirectResponse
    {

        Student::create([
           "name" => $request->name,
           "email" => $request->email,
           "birthdate" => $request->birthdate,
           "collage" => $request->collage,
           "department" => $request->department,
          ]);
             return redirect("/create");
        }}
