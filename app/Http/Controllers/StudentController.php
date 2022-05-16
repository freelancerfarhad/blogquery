<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::paginate(8);
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rolse=[
            'firstname'=>'required|min:3|max:8',
            'lastname'=>'required|min:3|max:8',
            'email'=>'required|email|unique:students',
            'phone'=>'required|numeric',
            'date_of_birth'=>'required',
            'username'=>'required|alpha_num|unique:students'
        ];
        // custom massage 
        // $mass=[
        //     'firstname.required'=>'love ouy'
        // ];
        $validated = $request->validate($rolse);
        Student::create([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'date_of_birth'=>$request->input('date_of_birth'),
            'username'=>$request->input('username')
        ]);
        // Student::create($request->all());
        // Student::create($request->except('_token'));

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {
        $datas=Student::find($id);
        return view('students.edit',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student,$id)
    {
        $student=Student::find($id);
   
        // $rolse=[
        //     'firstname'=>'required|min:3|max:8',
        //     'lastname'=>'required|min:3|max:8',
        //     'email'=>['required,email,unique:students,id,{$id}'],
        //     'phone'=>'required|numeric',
        //     'date_of_birth'=>'required',
        //     'username'=>'required|alpha_num'
        // ];
    
        // $validated = $request->validate($rolse);

            $firstname=$request->input('firstname');
            $lastname=$request->input('lastname');
            $email=$request->input('email');
            $phone=$request->input('phone');
            $date_of_birth=$request->input('date_of_birth');
            $username=$request->input('username');

             $student->firstname=$firstname;
             $student->lastname=$lastname;
             $student->email=$email;
             $student->phone=$phone;
             $student->date_of_birth=$date_of_birth;
             $student->username=$username;

             $student->update([
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'email'=>$email,
                'phone'=>$phone,
                'date_of_birth'=>$date_of_birth,
                'username'=>$username
    
            ]);
        
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id)
    {
        $student=Student::find($id);
        $student->delete();
        return back();
    }
}
