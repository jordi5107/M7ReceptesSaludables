
@extends('layouts.masterLayout')
@section('content')
      <main role="main">

        <div class="jumbotron">
            <div class="container">
              <p>Categoria</p>
              <h1 class="display-3">{{$category}}</h1>
            </div>
        </div>

        <div class="container bootstrap snippets bootdey">

        <div class="row">
            <!-- posts -->
        <div class="col-md-8">
                @if (is_string($recipes))
                <div class="panel blog-container mt-4">
                  <div class="panel-body">
                    <h2>No hi ha receptes en aquesta categoria</h2>
                  </div>
                </div>
                @else
                @foreach($recipes as $recipe)
                  <div class="panel blog-container mt-4">
                    <div class="panel-body">
                      
                      
                      <h4><a href="{{route('recipe',$recipe)}}">{{$recipe->title}}</a></h4>
                      <small class="text-muted">By <strong> {{$recipe->author->name}}</strong></small>
                      
                      <p class="m-top-sm m-bottom-sm">
                        {{$recipe->description}}
                      </p>
                      <div class="image-wrapper">
                          <img style=" height: 250px;width: 700px;" src="{{$recipe->image}}" alt="Photo of Blog">
                      </div>
                    </div>
                  </div>  
                @endforeach
             @endif
        </div>
            

          <!-- /.blog-sidebar -->
      </div>
@endsection
