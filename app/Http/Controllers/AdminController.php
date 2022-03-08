<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        // $users=User::all();
        // $users=User::latest()->paginate(7);
        $users=User::paginate(7);
        return view("admin.adminhome",['users'=>$users]);
    }
    public function edituser($id)
    {
        $edituser=User::find($id);
        return view("admin.edituser",['edituser'=>$edituser]) ;
    }
    public function editUpdateUser($id){
        $validation=request()->validate([
            'username'=>'required',
            'email'=>'required',
            'isAdmin'=>'required',
            'isApproved'=>'required',
        ]);
        if($validation){
            $editUpdateUser=User::find($id);
            // return $editUpdateUser;
            $editUpdateUser->name=$validation["username"];
            $editUpdateUser->email=$validation["email"];
            $editUpdateUser->isAdmin=$validation["isAdmin"];
            $editUpdateUser->isApproved=$validation["isApproved"];
            // return $editUpdateUser;
            $editUpdateUser->update();
            return redirect()->route('userhome')->with('message','User Updated');
        }else{
            return back()->withErrors($validation);
        }
    }
    function deleteUser($id)
    {
        $deleteUser=User::find($id);
        $deleteUser->delete();
        return back()->with('message','Delete Success');
    }
}