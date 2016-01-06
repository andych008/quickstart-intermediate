<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $admin = new Role();
//        $admin->name         = 'admin';
//        $admin->display_name = 'User Administrator'; // optional
//        $admin->description  = 'User is allowed to manage and edit other users'; // optional
//        $admin->save();

//        $admin = Role::create([
//            'name' => 'admin',
//            'display_name' => 'User Administrator',
//            'description' => 'User is allowed to manage and edit other users', // optional
//        ]);
//
//        dd($admin->name);


//        $user = User::find(1);
//        $user->attachRole(1);


//        $per = Permission::create([
//            'name' => 'management',
//            'display_name' => 'management all users\' data',
//        ]);
//        dd($per->name);


//        $admin = Role::find(1);
//        $admin->attachPermission(Permission::findorFail(1));

//        dd(User::find(1)->hasRole('admin'));
//        dd(User::find(1)->hasRole(['owner', 'admin']));
//        dd(User::find(1)->can('management'));
//        dd(User::find(1)->can('managemen*'));//验证不一致

//        dd(User::find(1)->ability(array('admin', 'owner'), array('management2')));//验证不一致


        return view('roles.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
