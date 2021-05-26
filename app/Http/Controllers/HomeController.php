<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;

use Session;

class HomeController extends Controller
{
    public function home(){

        return view('website.pages.home');
    }
    public function about(){

        return view('website.pages.about');
    }
    public function login(){

        return view('website.pages.login');
    }
    public function loginstore(Request $request){
       $email =  $request->email;
       $password = $request->password;
       
       //Query
      $user= User::where('email','=',$email)
            ->where('password','=',$password)
            ->first();

            if($user){
                $name = $user->name;
                $role = $user->role;
                Session::put('username', $name);
                Session::put('userrole', $role);
                return redirect()->to('/dashboard');
               
            }
            else 
            {
                return redirect()->to('/login')->with('err_msg','invalid'); 
            }
    }
    public function register(){

        return view('website.pages.register');
    }
    public function dashboard(){

        return view('website.pages.dashboard');
    }
    public function logout(){
        Session::forget(['username', 'userrole']);
        return redirect()->to('/login');
    }

    public function userlist(){
        $userlist= User::all();
        return view('website.pages.userlist', compact('userlist'));
    }
    public function storeuser(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $Role = $request->Role;
        $age = $request->age;
 
        //insert database
        $obj = new User();  //employee
 
        $obj->name =$name;
        $obj->email =$email;
        $obj->password =$password;
        $obj->role =$Role;
        $obj->age =$age;


 
        //insert data
 
        if($obj->save()){

            echo 'successfull';
            //return redirect()->to('employeelist');
        }
     }


     public function edit($id){
        //  $user = User::where('id','=', $id)->get();
        $user = User::find($id);
          return view('website.pages.edit', compact('user'));
      }

      public function update($id, Request $request){
      
        $obj = User::find($id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->role = $request->Role;
        $obj->age = $request->age;

        if ($obj->save()){
            return redirect()->to('userlist');
        }

    }
    public function delete($id){
        $obj = User::find($id);
        if ($obj->delete()){
            return redirect()->to('userlist');
        }
      }

      public function addservice(){

        return view('website.pages.addservice');
    }

    public function storeservice(Request $request){
        $name = $request->name;
        $price = $request->price;
 
        //insert database
        $obj = new Service();  
 
        $obj->name =$name;
        $obj->price =$price;


 
        //insert data
 
        if($obj->save()){

            echo 'successfull';
            //return redirect()->to('employeelist');
        }
     }
     public function servicelist(){
       $servicelist= Service::all();
        return view('website.pages.servicelist', compact('servicelist'));
    }


    public function welcome(){

        return view('welcome');
    }
    public function branches(){

        return view('website.pages.branches');
    }

    public function appointment(){

        return view('website.pages.appointment');
    }
    public function storeappointment(Request $request){
        $validatied=$request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'gander'=> 'required',
            'date_of_birth'=> 'required',
            'test'=> 'required',
            'name'=> 'required',
        ]);


            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $gander = $request->gander;
            $date_of_birth = $request->date_of_birth;
            $test = $request->test;
            $message = $request->message;
    
            //insert database
            $obj = new Appointment();  //employee
    
            $obj->name =$name;
            $obj->email =$email;
            $obj->phone =$phone;
            $obj->gender =$gander;
            $obj->date_of_birth =$date_of_birth;
            $obj->test =$test;
            $obj->message =$message;

    
            //insert data
    
            if($obj->save()){
                return redirect()->to('example2');
            }
     }


}
