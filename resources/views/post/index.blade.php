@extends('layouts.app')

@section('title', 'All Blogs By User')
 
@section('content')

  @php
    use Carbon\Carbon;  
  @endphp

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
              <h1>List of Posts <small>Made by User</small></h1>
            </div>
        </div>
        <div class="col-md-4">
          <div class="page-header">
            <a href="{{ route('post.create') }}" class="btn btn-primary btn-block btn-lg">Create New Post</a>
          </div>
        </div>
    </div> <!-- End of .row -->

    <div class="row">
        <div class="col-md-12">
          
        <table class="table table-hover">
          <thead>
            <th>#</th>
            <th>Title</th>
            <th>Created On</th>
            <th>Last Updated</th>
            <th></th>
          </thead>

          <tbody>
            @forelse ($posts as $post)
              <tr>
                <td>{{ $post->id }}{{-- $loop->index + 1 --}}</td>
                <td>{{ substr($post->title, 0, 50) }}{{ strlen($post->title) > 50 ? "..." : "" }}</td>
                <td>{{ Carbon::parse($post->created_at)->toFormattedDateString() }}</td>
                <td>{{ Carbon::parse($post->updated_at)->diffForHumans(Carbon::now()) }}</td>
                <td><a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-sm">View</a><a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
              </tr> 
             @empty
             	<tr>
             		<td colspan="5"><span class="lead text-info">No Posts Yet Created!</span></td>
             	</tr> 
            @endforelse
          </tbody>

        </table>

        </div>
    </div>

</div>
@endsection
