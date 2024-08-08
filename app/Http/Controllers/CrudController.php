<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\File;

class CrudController extends controller
{
    public function index()
    {
        $users = Crud::get();
        return view('users.index',compact('users'));
    }

    public function register(){
        return view('users.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|regex:/^[A-Z]+$/i',
            'lastName' => 'required|regex:/^[A-Z]+$/i',
            'username' => 'required|unique:cruds,username',
            'emailid' => 'required|email|unique:cruds,emailid',
            'mobileNo' => 'required|regex:/^\d+$/|max:10',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password',
            'image' => 'nullable|mimes:jpge,jpg,png|max:2048',
            'dob' => 'required|date|before:today|after:1900-01-01'
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/Crud/';
            $file->move($path, $filename);
        }

        Crud::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'username' => $request->username,
            'emailid' => $request->emailid,
            'mobileNo' => $request->mobileNo,
            'password' => bcrypt($request->password),
            'confirmPassword' => bcrypt($request->confirmPassword),
            'image' => $path.$filename,
            'dob' => $request->dob
        ]);

        return redirect('users/register')->with('success', 'User registered successfully!');
    }

    public function edit(int $id){
        $users = Crud::findOrFail($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, int $id){

        $request->validate([
            'firstName' => 'required|regex:/^[A-Z]+$/i',
            'lastName' => 'required|regex:/^[A-Z]+$/i',
            'username' => 'required',
            'emailid' => 'required|email',
            'mobileNo' => 'required|regex:/^\d+$/|max:10',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:2048',
            'dob' => 'required|date|before:today|after:1900-01-01'
        ]);

        $crud = Crud::findOrFail($id);

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/Crud/';
            $file->move($path, $filename);

            $oldImagePath = $crud->image;
    
            if(File::exists($oldImagePath)){
                File::delete($oldImagePath);
            }
            $crud->image = $path.$filename;
        }

        $crud->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'username' => $request->username,
            'emailid' => $request->emailid,
            'mobileNo' => $request->mobileNo,
            'image' => $crud->image,
            'dob' => $request->dob
        ]);

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function delete(int $id){
        $users = Crud::findOrFail($id);
        $users->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');

    }
}
