<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Bican\Roles\Models\Permission;
use Bican\Roles\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class RoleController
 * @package App\Http\Controllers
 */
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $adminRole = Role::create([
//            'name' => 'Admin',
//            'slug' => 'admin',
//            'description' => '', // optional
//            'level' => 8, // optional, set to 1 by default
//        ]);
//
//        $memberRole = Role::create([
//            'name' => 'Member',
//            'slug' => 'member',
//            'level' => 2, // optional, set to 1 by default
//        ]);
//
//        $createUsersPermission = Permission::create([
//            'name' => 'Create users',
//            'slug' => 'create.users',
//            'description' => '', // optional
//        ]);
//
//        $deleteUsersPermission = Permission::create([
//            'name' => 'Delete users',
//            'slug' => 'delete.users',
//        ]);
//
//        $editPostsPermission = Permission::create([
//            'name' => 'Edit posts',
//            'slug' => 'edit.posts',
//        ]);
//
//        $adminRole->attachPermission($createUsersPermission); // permission attached to a role
//        $adminRole->attachPermission($deleteUsersPermission); // permission attached to a role
//        $adminRole->attachPermission($editPostsPermission); // permission attached to a role
//        $memberRole->attachPermission($editPostsPermission); // permission attached to a role
//
//
////        if (Auth::check())
////        {
////            $user = Auth::user();
//////            dd($user->name);
////        }
//
//        $user = User::find(1);
//
//        $user->attachRole($adminRole); // you can pass whole object, or just an id
//
//        $user = User::find(2);
//
//        $user->attachRole($memberRole); // you can pass whole object, or just an id


        if (Auth::check())
        {
            $user = Auth::user();
//            return json_encode($user->getRoles());
            return json_encode($user->rolePermissions()->get());
//            return json_encode($user->userPermissions()->get());
//            return json_encode($user->getPermissions());



//            return json_encode( Role::where('slug', 'like', '%')->get(['*']));
//            return json_encode( Role::where('slug', '=', 'admin')->get(['*']));
//            return json_encode( Role::where('slug', '=', 'admin')->get());
//            return json_encode( $user->getRoles()->first()->users()->get());
//            return json_encode( $user->getRoles()->get());
            return json_encode( $user->getRoles()->first()->permissions()->get());
//            return json_encode( Role::get());

//        return view('roles.index');
        }
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
