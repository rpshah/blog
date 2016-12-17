@extends('layouts.app')
 
@section('title', 'About Me')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="active">You are here : {{ $currentRoute }}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron text-center">
              <h1>About Me</h1>
              <div class="well"></div>
              <p>
                Lorem ipsum....</br>
                Coder,Developer,Learner,Fun loving student of LDCE,Ahm.</br></br>
                <a class="btn btn-primary" href="#" role="button">Learn more</a>
              </p>
            </div>
        </div>
    </div>
</div>
@endsection
