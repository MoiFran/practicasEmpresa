@extends('layouts.app-master')

@section('content')
<div class="bg-light p-3 mt-5 ">
    @auth
    <h1><span style="font-weight: bold;">{{auth()->user()->username}}</span>  </h1>
    <p class="lead mt-5">  Role 2 view .</p>
   
    @endauth

    @guest
    <h1>Welcome User</h1>
    <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
    @endguest
</div>
@endsection
