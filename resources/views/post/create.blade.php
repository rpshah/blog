@extends('layouts.app')
 
@section('title', 'New Post')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title text-center">What will be in this POST?</h1>
              </div>
              <div class="panel-body">
                
                <form class="form-horizontal" role="form" method="POST" action="{{ route('post.store') }}">
                   @include('post.cuPartialForm', ["submitButton" => "Create Post"])
                </form>
              </div>
            </div> <!-- End of .panel -->

        </div>
    </div>
</div>
@endsection
