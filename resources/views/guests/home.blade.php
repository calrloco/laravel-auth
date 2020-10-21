@extends('layouts.app')
@section('content')
<div class="display-4 p-5 text-center">

   <p class="text-capitalize">bevenuto nel  blog</p> 
</div>
@guest
<p class="lead text-center text-uppercase">Guest</p>
@else
<div class="container">
    <div class="row justify-content-center">
     <p class="lead text-uppercase">Bentornato {{ Auth::user()->name }}</p>
     </div>
</div>
@endguest
@endsection