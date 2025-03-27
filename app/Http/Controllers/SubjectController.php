<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->orderBy('name')->get();
        return view('subjects.index', compact('subjects'));
    }

    public function show($id)
    {
        $subject = Subject::with('teacher')->findOrFail($id);
        return view('subjects.show', compact('subject'));
    }
}
