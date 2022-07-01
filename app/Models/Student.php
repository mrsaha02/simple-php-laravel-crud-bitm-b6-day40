<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected static $student;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function newStudent ($request)
    {
        self::$image= $request->file('image');

        Student::imageUpload(self::$image);


        self::$student= new Student();
        self::$student->name            =$request->name;
        self::$student->email            =$request->email;
        self::$student->phone            =$request->phone;
        self::$student->address            =$request->address;
        self::$student->district            =$request->district;
        self::$student->gender            =$request->gender;
        self::$student->dob            =$request->dob;
        self::$student->image            =self::$imageUrl;
        self::$student->subjects            =implode(', ', $request->subjects);
        self::$student->save();

    }
    public static function updateStudent ($request, $id)
    {
        self::$student= Student::find($id);
        self::$image= $request->file('image');

        Student::imageUpload(self::$image, self::$student);

        self::$student->name            =$request->name;
        self::$student->email            =$request->email;
        self::$student->phone            =$request->phone;
        self::$student->address            =$request->address;
        self::$student->district            =$request->district;
        self::$student->gender            =$request->gender;
        self::$student->dob            =$request->dob;
        self::$student->image            =self::$imageUrl;
        self::$student->subjects            =implode(', ', $request->subjects);
        self::$student->save();
    }
    public static function imageUpload ($image, $student=null)
    {
        if ($image)
        {
            if (isset($student))
            {
                if (file_exists(self::$student->image))
                {
                    unlink(self::$student->image);
                }
            }

            self::$imageName= time().rand(10,1000).'.'.$image->getClientOriginalName();
            self::$imageDirectory = 'assets/img/';
            $image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl=self::$imageDirectory.self::$imageName;
        }else {
            self::$imageUrl = $student->image;
        }
        return self::$imageUrl;
    }
}
