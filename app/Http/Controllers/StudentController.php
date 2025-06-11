<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use PDF;
use Session;


class StudentController extends Controller
{
     public function index(Request $request) {
    //$students = Student::all();
    //$students = Student::paginate(5);
    /*$students = Student::latest()->paginate(5);
    return view('students.index', compact('students'));*/

    $perPage = $request->has('per_page') ? (int)$request->get('per_page') : 3;
    $students = Student::paginate($perPage);
    return view('students.index', compact('students'));
        
    }

    public function create() {
        return view('students.create');
    }

    public function get_card() {
        return view('students.get_card');
    }

    public function search_card(Request $request) {

        // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $students = Student::query()
        ->where('student_id', 'LIKE', "%{$search}%")
        ->get();
    // Return the search view with the resluts compacted
 
    return view('students.get_card', compact('students'));
    }

    public function download_card($id)
    {

        $student = Student::findOrFail($id);

         $data = [
            
            'student' => $student
        ]; 
              
        $pdf = PDF::loadView('students.card', $data);
       
        return $pdf->download('itsolutionstuff.pdf');
        //return view('students.card',['student'=>$student]);
    }

    public function store(Request $request){
        $request->validate([
            'student_name'=> 'required',
            'student_father_name'=> 'required',
            'gender'=> 'required|in:Male,Female' ,
            'class_section'=> 'required',
            'dob'=> 'required',
            'blood_group'=> 'required',
            'mobile'=> 'required',
            'contact_address'=> 'required', 
            'student_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $student = new Student();
        $student->student_id = $request->student_id;
        $student->student_name = $request->student_name;
        $student->student_father_name = $request->student_father_name;
        $student->gender = $request->gender;
        $student->class_section = $request->class_section;
        $student->dob =  date('y-m-d', strtotime($request->dob));
        $student->blood_group = $request->blood_group;
        $student->mobile = $request->mobile;
        $student->contact_address = $request->contact_address;

        $student->save();

        if ($request->hasFile('student_image')) {
            $student_image = $request->file('student_image');
            $StudentimageName = time() . '.' . $student_image->getClientOriginalExtension();
            $student_image->move(public_path('uploads/students'), $StudentimageName);

            $student->student_image = $StudentimageName;
            $student->save();
        }

        Session::flash('success_msg', 'Student created successfully');

        return redirect()->route('students.index');
    }

    public function card($id){
        $student = Student::findOrFail($id);
        return view('students.card',['student'=>$student]);
    }

    public function detail($id){
        $student = Student::findOrFail($id);
        return view('students.detail',['student'=>$student]);
    }

    public function edit($id){
        $student = Student::findOrFail($id);
        return view('students.edit',['student'=>$student]);
    }



    


    public function update($id,Request $request){
        
        $student = Student::findOrFail($id);

        $request->validate([
            'student_name'=> 'required',
            'student_father_name'=> 'required',
            'gender'=> 'required|in:Male,Female' ,
            'class_section'=> 'required',
            'dob'=> 'required',
            'blood_group'=> 'required',
            'mobile'=> 'required',
            'contact_address'=> 'required', 
            'student_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           
        ]);

        $student->student_name = $request->student_name;
         $student->student_id = $request->student_id;
        $student->student_name = $request->student_name;
        $student->student_father_name = $request->student_father_name;
        $student->gender = $request->gender;
        $student->class_section = $request->class_section;
        $student->dob =  date('y-m-d', strtotime($request->dob));
        $student->blood_group = $request->blood_group;
        $student->mobile = $request->mobile;
        $student->contact_address = $request->contact_address;

        $student->update();

         if ($request->hasFile('student_image')) {
            // Delete old image if it exists
            if ($student->student_image) {
                File::delete(public_path('uploads/students/' . $student->student_image));
            }

            // Save the new image
            $student_image = $request->file('student_image');
            $StudentimageName = time() . '.' . $student_image->getClientOriginalExtension();
            $student_image->move(public_path('uploads/students'), $StudentimageName);

            $student->student_image = $StudentimageName;
            $student->update();
        }

      
        return redirect()->route('students.index')->with('update_msg', 'Student update successfully');
    }


    public function delete($id){
        $student = Student::findOrFail($id);

        if ($student->student_image) {
            File::delete(public_path('uploads/students/' . $student->student_image));
        }

        $student->delete();
        return redirect()->route('students.index')->with('delete_msg', 'Student deleted successfully');
       
    }



}


