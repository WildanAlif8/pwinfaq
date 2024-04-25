<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;


class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        confirmDelete('Delete user', 'Are you sure you want to delete?');
        return view('auth.admin.user', compact('users'));
    }

    public function userStore(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        $validate['password'] = bcrypt($validate['password']);
        $user = User::create($validate);
        if($user){
            Alert::success('Success', 'Create user successfully!');
        }else{
            Alert::error('Failed', 'Create user failed!');
        }
        return redirect()->route('admin-user');
    }

    public function userUpdate(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        $user = User::findOrFail($id)->update($validate);
        if($user){
            Alert::success('Success', 'Create user successfully!');
        }else{
            Alert::error('Failed', 'Create user failed!');
        }
        return redirect()->route('admin-user');
    }

    public function userDelete($id)
    {
        $user = User::findOrFail($id)->delete();
        if($user){
            Alert::success('Success', 'Delete user successfully!');
        }else {
            Alert::error('Failed', 'Delete user failed!');
        }
        return redirect()->route('admin-user');
    }
}
