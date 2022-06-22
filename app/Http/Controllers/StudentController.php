<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    Public function index()
    {
        $data= ['data1'=>Student::all()];
        return view('index',$data);

}
public function create()
{
    return view('create');
}
public function store()
{
    $student=new Student();
    $student->name=request('fname');
    $student->age=request('age');
    $student->mark=request('mark');
    $student->save();
    return redirect('/');
}
public function edit($id)
{
    $data= ['data1'=>Student::find($id)];
    return view('edit');
}
public function update($id)
{
    $data=Student::find($id);
    $data->name=request('fname');
    $data->age=request('age');
    $data->mark=request('mark');
    $data->save();
   
    return $id;
}
public function destroy($id)
{
    $data=Student::find($id);
    $data->delete();
    return redirect('/');
}

}
