@extends('layouts.app')

@section('content')
    <div class="container">
        @role('admin')
        <p> user is admin</p>
        @endrole

        @role('member')
        <p> user is member</p>
        @endrole

        @permission('create.users')
        <p>user can create users</p>
        @endpermission

        @permission('edit.posts')
        <p>user can edit posts</p>
        @endpermission

    </div>
@endsection