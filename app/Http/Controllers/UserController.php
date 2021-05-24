<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeuser(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $age = $request->age;
        $Role = $request->Role;
 
        //insert database
        $obj = new User();  //users
 
        $obj->name =$name;
        $obj->email =$email;
        $obj->password =$password;
        $obj->age =$age;
        $obj->role =$Role;
 
        //insert data
 
        if($obj->save()){

            echo 'successfull';
            //return redirect()->to('employeelist');
        }
     }
     public function edit($id){
        //  $employee = Employee::where('id','=', $id)->get();
        $user = User::find($id);
          return view('employee.edit', compact('employee'));
      }
}
