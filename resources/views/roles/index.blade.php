@extends('layouts.app')

@section('content')
    <div class="container">
        @role('admin')
        <p>This is visible to users with the admin role. Gets translated to
            \Entrust::role('admin')</p>
        @endrole

        @permission('manage-admins')
        <p>This is visible to users with the given permissions. Gets translated to
            \Entrust::can('manage-admins'). </p>
        @endpermission

        @ability('admin,owner', 'create-post,edit-user')
        <p>This is visible to users with the given abilities. Gets translated to
            \Entrust::ability('admin,owner', 'create-post,edit-user')</p>
        @endability

    </div>
@endsection