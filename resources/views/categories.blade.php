@extends('layouts.masterLayout')
@section('content')

        <div class="jumbotron" style="background-color:#e6f7f7">
            <div class="container">
              <h1 class="display-3" style="text-align: center;">All categories</h1>
            </div>
        </div>

        <div class="container bootstrap snippets bootdey">

        <div class="row" style="text-align: center">
            <!-- posts -->
            <div>
            <div class="panel blog-container mt-4 " style="align-items: center;">

              @foreach($categories as $cat)
                  <div class="panel-body mb-3">
                    
                    <h4><a href="{{route('category', $cat)}}">{{$cat->name}}</a></h4>
                    
                    
                    <small class="m-top-sm m-bottom-sm">{{$cat->content}}</small>
                   
                    <div class="image-wrapper">
                      <a class="image-wrapper image-zoom cboxElement" href="#">
                        <img style=" height: 250px;width: 700px;" src="{{$cat->image}}" alt="Photo of Blog">
                        <div ></div> 
                      </a>
                    </div>
                  </div>
                </div> 
                @endforeach
            </div>
              
        </div>
            
        @endsection
