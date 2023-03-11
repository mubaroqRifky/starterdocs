<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(Request $request, $value)
    {
        $hashed_random_password = Hash::make($value);
        return $hashed_random_password;
    }

    public function show($id)
    {
        $name = Student::find($id)->teacher;

        return view('example', compact(('name')));
    }
}
