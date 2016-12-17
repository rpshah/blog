@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron text-center">
              <h1>Conact Me</h1>
              <div class="well"></div>
              <p>
                Lorem ipsum....</br>
                Call me on {{ $mobile }} or drop a mail at {{ $email }}</br></br>
                <a class="btn btn-primary" href="#" role="button">Learn more</a>
              </p>
            </div>
        </div>
    </div>
</div>
@endsection
