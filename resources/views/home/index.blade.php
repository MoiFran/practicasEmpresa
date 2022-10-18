@extends('layouts.app-master')

@section('content')
<div class="bg-light p-3 mt-5 ">
    @auth
    <h1> Welcome <span style="font-weight: bold; ">{{auth()->user()->username}}</span>  </h1>
    <p class="lead mt-5">  Your authenticated .</p>

    <a href="{{ route('auth.partials.rolOne') }}" class="btn btn-warning"">Rol 1</a>
     <a href="/rol2" class="btn btn-info"">Rol 2</a>
  
     
    @endauth

    @guest
    <h1>Welcome User</h1>
    <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
    @endguest
</div>
@endsection