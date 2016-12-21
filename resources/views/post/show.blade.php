@extends('layouts.app')
 
@section('title', $post->title)

@section('content')

  @php
    use Carbon\Carbon;  
  @endphp

<div class="container">
    <div class="row word-wrap-element">
        <div class="col-md-8">
        <div class="page-header">
          <h1 class="text-uppercase text-primary">
            {{ $post->title }}
          </h1>          
        </div>

        <div style="text-align: justify;">
            {!! $post->body !!}
        </div>

        </div> <!-- End of .col-md-8 -->
        
        <div class="col-md-4">
          
          <div class="panel panel-primary">
            
            <div class="panel-body">
              
              <dl class="dl-horizontal">
                <dt>Created On</dt>
                <dd>{{ Carbon::parse($post->created_at)->toFormattedDateString() }}</dd>
                <dt>Last Updated</dt>
                <dd>{{ Carbon::parse($post->updated_at)->diffForHumans(Carbon::now()) }}</dd>
              </dl>

              <div class="row">
                <div class="col-md-6">
                  <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
                </div>
                <div class="col-md-6">
                  <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" name="deleteButton" class="btn btn-danger btn-block" value="Delete">
                  </form>
                </div>
              </div>
            </div>

          </div>
          
        </div> <!-- End of .col-md-4 -->   
    </div> <!-- End of .row -->

    <hr>

</div>
@endsection
