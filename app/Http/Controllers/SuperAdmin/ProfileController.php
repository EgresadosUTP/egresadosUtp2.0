<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        //
        $user = User::find(1);  //returns God user 
        
        return view('superadmin.profile.index')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */


    public function edit(User $user)
    {   
        //
        $user = User::find(1);  //returns God user 
        return view('superadmin.profile.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user)
    {
        //Actualizar los datos ingresados por el SuperAdmin
        // dd($request);
        $user->email = $request->email ;     
        $user->password = $request->password ;     
        $user->name = 'superAdmin';     
        $user->update( $request->all());   
        return redirect()->route('superadmin.profile.index');
    }

}
