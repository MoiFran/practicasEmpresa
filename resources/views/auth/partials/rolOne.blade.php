@extends('layouts.app-master')
@section('content')
@auth
<div class="bg-warning p-3 mt-5 ">
    <h1><span style="font-weight: bold;">{{auth()->user()->username}}</span>  </h1>
    <p class="lead mt-5">  Role 1 view .</p>
</div>
   
    @endauth

    @guest
    <div class="bg-secondary p-3 mt-5 ">

        <h1>Welcome User</h1>
        <p class="lead">Please login to view the restricted data.</p>
    </div>
    @endguest
@endsection
