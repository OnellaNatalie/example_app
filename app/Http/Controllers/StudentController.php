<?php

namespace App\Http\Controllers;
 use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
      public function add_student(Request $request){
        $first_name = $request->first_name;
        $last_name = $request->last_name;        
        $student = Student::create(['first_name'=>$first_name,'last_name'=>$last_name]);
      

        return response($student);
    }   
     public function delete_student(Request $request){

        $student_id = $request->id;
     
        $delete_student = Student::destroy($student_id);
         
        return response($delete_student);

    }
      public function allStudent(){

        $student = Student::all();

        return response([ 'student' => $student]);
    }
     public function get_student($id)
    {
        $student = Student::where('id',$id)->get();


        return response([ 'student' => $student]);
    }
}
