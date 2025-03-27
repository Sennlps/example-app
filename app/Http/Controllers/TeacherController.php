<?php
namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Show all teachers
    public function index()
    {
        $teachers = Teacher::all(); // Get all teachers
        return view('teachers.index', compact('teachers'));
    }

    // Show the form for creating a new teacher
    public function create()
    {
        return view('teachers.create');
    }

    // Store the newly created teacher
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'hobbies' => 'nullable|string|max:255',
        ]);

        Teacher::create([
            'name' => $request->name,
            'hobbies' => $request->hobbies,
        ]);

        return redirect()->route('teachers.index'); // Redirect to the list of teachers
    }
}
?>