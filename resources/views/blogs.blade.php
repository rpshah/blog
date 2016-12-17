@extends('layouts.app')

@section('title', 'My Blogs')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center">
              <h1>Welcome to User's Blogging Page </h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat..</p>
              <a class="btn btn-primary" href="#" role="button">Latest Post</a>
              <a class="btn btn-primary" href="#" role="button">Popular Post</a>
            </div>
        </div>
    </div> <!-- End of .row -->

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                                
                    <div class="media">
                      <div class="media-left media-top">
                        <a href="#">
                          <img class="media-object" src="..." alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h3 class="media-heading">Media heading</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-primary" href="#" role="button">Read More...</a>
                      </div>
                    </div>
                </div> <!-- End of .col-md-6 -->

                <div class="col-md-6">
                                
                    <div class="media">
                      <div class="media-left media-top">
                        <a href="#">
                          <img class="media-object" src="..." alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h3 class="media-heading">Media heading</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-primary" href="#" role="button">Read More...</a>
                      </div>
                    </div>
                </div> <!-- End of .col-md-6 -->

            </div>  <!-- End of inner-row -->    

            <hr>

            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                                
                    <div class="media">
                      <div class="media-left media-top">
                        <a href="#">
                          <img class="media-object" src="..." alt="Photo here">
                        </a>
                      </div>
                      <div class="media-body">
                        <h3 class="media-heading">Media heading</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-primary" href="#" role="button">Read More...</a>
                      </div>
                    </div>
                </div> <!-- End of .col-md-10 -->
            </div>  <!-- End of inner-row -->    

            <hr>

            <div class="row">
                <div class="col-md-6">
                                
                    <div class="media">
                      <div class="media-left media-top">
                        <a href="#">
                          <img class="media-object" src="..." alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h3 class="media-heading">Media heading</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-primary" href="#" role="button">Read More...</a>
                      </div>
                    </div>
                </div> <!-- End of .col-md-6 -->

                <div class="col-md-6">
                                
                    <div class="media">
                      <div class="media-left media-top">
                        <a href="#">
                          <img class="media-object" src="..." alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h3 class="media-heading">Media heading</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="btn btn-primary" href="#" role="button">Read More...</a>
                      </div>
                    </div>
                </div> <!-- End of .col-md-6 -->

            </div>  <!-- End of inner-row -->    

            <hr>

        </div>  <!-- End of col-md-9 -->
        
        <div class="col-md-2 col-md-offset-1">
            <h3 class="text-primary text-center">Sidebar</h3>
            <hr>
        </div>
    </div>

</div>
@endsection
