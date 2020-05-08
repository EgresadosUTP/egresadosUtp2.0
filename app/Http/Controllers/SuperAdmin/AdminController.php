<?php

namespace App\Http\Controllers\SuperAdmin;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roleName = 'admin';// variable para definir los usuarios que tengan rol admin

        $users =User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->get();
        return view('superadmin.admins.index')->with('users', $users);
    }
    
    public function create(){
        return view('superadmin.admins.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $adminRole = Role::where('name', 'admin')->first();
        
        User::create($this->validateUser())->roles()->attach($adminRole);
        
        $roleName = 'admin';// variable para definir los usuarios que tengan rol admin        
        $users =User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->get();
        
        return redirect(route('superadmin.admins.index'))->with('users', $users);
    }
    
    protected function validateUser(){
        return request()->validate([
            'name'=>'required|max:100',
            'lastName'=>'required|max:100',
            'email'=>'required|max:100',
            'phone'=>'required|max:100',
            'address'=>'required|max:200',
            'password'=>'required|max:200'
            ]);
        }
        
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Administrator  $administrator
         * @return \Illuminate\Http\Response
         */
        public function edit(User $user)
        {
            //
            return view('superadmin.admins.edit')->with('user', $user);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->update( $request->all()->validateUser());

        $roleName = 'admin';// variable para definir los usuarios que tengan rol admin        
        $users =User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->get();
        
        return redirect(route('superadmin.admins.index'))->with('users', $users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
