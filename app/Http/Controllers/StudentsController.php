<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Resources\Student as StudentResource;

class StudentsController extends Controller
{
    public function create(Request $request)
    {
        $student = new Student();
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');

        $student->save();
        return new StudentResource($student);
        // return response()->json($student);
    }
    public function show()
    {
        $students = Student::all();
        return StudentResource::collection($students);
        
        //return response()->json($students);
    }
    
    public function showById($id)
    {
        $student = Student::find($id);
        if($student)
        {
            return new StudentResource($student);
        }else
        {
            return response()->json(['Error' => 'Invalid Id: '.$id.''], 404);
        }
        //BEFORE
        //$student = Student::find($id);
        //$student = Student::where('id', $id)->firstOrFail();
        
        //return response()->json($student);
    }

    public function update(Request $request, $id)
     { 
        $student= Student::find($id);
        if($student)
        {
            $student->fname = $request->input('fname');
            $student->lname = $request->input('lname');
            $student->email = $request->input('email');
            $student->password = $request->input('password');
            $student->save();
            return new StudentResource($student);

            // return response()->json($student);
        }else {
            return response()->json(['Error' => 'Invalid Id: '.$id.''], 404);
        }
     }

     public function destroy($id)
     {
        $student = Student::find($id);
        if($student)
        {
            $student->delete();
            return response()->json('student removed successfully');

        }else {
            return response()->json(['Error' => 'Invalid Id: '.$id.''], 404);
        }
     }
}  