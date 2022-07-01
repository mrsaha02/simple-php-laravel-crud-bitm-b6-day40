<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $result;
    protected $student;
    protected $subjects;

    public function add ()
    {
        return view('admin.student.add');
    }
    public function newStudent (Request $request)
    {

//        foreach ($request->subjects as $subject)
//        {
//            $this->result .= $subject.', ';
//        }
//        return $this->result = implode(', ' $request->subjects);

//        return $request;

        Student::newStudent($request);
        return redirect()->back()->with('message', 'Student Data saved successfully');
    }
    public function dashboard()
    {
        return view('admin.home.dashboard',[
            'students'=>Student::all(),
        ]);
    }

    public function edit ($id)
    {
        $this->student=Student::find($id);
        $this->subjects = explode(', ', $this->student->subjects);
        return view('admin.student.edit', [
            'student' => $this->student,
            'subjects' => $this->subjects,
        ]);
    }
    public function update (Request $request, $id)
    {
        Student::updateStudent ($request, $id);
        return redirect('/dashboard')->with('message','Data updated sucessfully.');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        if (file_exists($this->student->image))
        {
            unlink($this->student->image);
        }
        $this->student->delete();
        return redirect()->back()->with('message','Student Info Deleted Successfully!');
    }
}

