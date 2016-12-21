@extends('layouts.app')
 
@section('title', 'Edit Post')

@section('content')

@php
  use Carbon\Carbon;  
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title text-center">Did you missed something in this POST?</h1>
              </div>
              <div class="panel-body">
                
                <form class="form-horizontal" role="form" method="POST" action="{{ route('post.update', $post->id) }}">
                  {{ method_field('PUT') }}
                  @include('post.cuPartialForm', ["submitButton" => "Update Post"])
                </form>

              </div>

              <div class="panel-footer">
                <span class="lead">This post was created on {{ Carbon::parse($post->created_at)->toFormattedDateString() }} And Last Updated {{ Carbon::parse($post->updated_at)->diffForHumans(Carbon::now()) }}</span>
              </div>

            </div> <!-- End of .panel -->

        </div>
    </div>
</div>
@endsection
