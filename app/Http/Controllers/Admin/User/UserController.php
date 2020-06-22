<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index(){
    	$users = User::all();
        return view('admin.user.index', ['users' => $users]);	
    }
   function edit($id){
      $user=User::find($id);
      return view("admin/user/edit",['user'=>$user]);
    }
    function destroy($id){
        $user=User::find($id)->delete();
  	return redirect('admin/user/');
   }
   function update($id, Request $request){
      $name = $request->input('name');
    //   $phone= $request->input('phone');
      $email = $request->input('email');
      $type = $request->input('type');
     $user=User::find($id);
     $user->name=$name;
     $user->email=$email;
     $user->type=$type;
     $user->save();
      return redirect('/admin/user/');
    }
}
