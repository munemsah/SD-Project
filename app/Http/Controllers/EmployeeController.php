<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employeelist(){
       $employeelist= Employee::all();
        return view('employee.employeelist', compact('employeelist'));
    }
    public function employeereg(){
        return view('employee.employeereg');
    }

    public function store(Request $request){
       $name = $request->name;
       $email = $request->email;
       $password = $request->password;
       $gander = $request->gander;
       $Is_Active = $request->Is_Active;
       $date_of_birth = $request->date_of_birth;
       $Role = $request->Role;

       //insert database
       $obj = new Employee();  //employee

       $obj->name =$name;
       $obj->email =$email;
       $obj->password =$password;
       $obj->gender =$gander;
       $obj->is_active =$Is_Active;
       $obj->date_of_birth =$date_of_birth;
       $obj->role =$Role;

       //insert data

       if($obj->save()){
           return redirect()->to('employeelist');
       }
    }

    public function edit($id){
      //  $employee = Employee::where('id','=', $id)->get();
      $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update($id, Request $request){
      
        $obj = Employee::find($id);
        $obj->name = $request->name;
        $obj->email = $request->email;
       

        $obj->date_of_birth = $request->date_of_birth;
        $obj->role = $request->Role;

        if ($obj->save()){
            return redirect()->to('employeelist');
        }

    }

    public function delete($id){
        $obj = Employee::find($id);
        if ($obj->delete()){
            return redirect()->to('employeelist');
        }
      }
}
