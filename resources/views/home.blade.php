@extends('layouts.masterLayout')
@section('content')

        <div class="container bootstrap snippets bootdey">

        <div class="row">
            <!-- posts -->
        <div class="col-md-8">

              @foreach($recipes as $recipe)
                <div class="panel blog-container mt-4 ">
                  <div class="panel-body">
                    
                    <h2 ><a style="color:black" href="{{route('recipe', $recipe->id)}}">{{$recipe->title}}</a></h2>
                    <small class="text-muted">By <span><strong> {{$recipe->author->name}}</strong></span> |  {{ date_format($recipe->created_at,"l m-d-Y") }}</small>
                    
                    <p class="m-top-sm m-bottom-sm">
                      {{$recipe->content}}  
                    </p>
                   
                    <div class="image-wrapper">
                        <img style=" height: 250px;width: 700px;" src="{{$recipe->image}}" alt="Photo of Blog">
                    </div>
                  </div>
                </div> 
                @endforeach
              
        </div>
            
            <div class="col-md-4 mt-4">
                <h4 class="headline text-muted">
                  RECEPTES AMB MES COMENTARIS
                  <span class="line"></span>
                </h4>
                @foreach($recipeMoreComments as $pop)
                <div class="media popular-post mb-3">
                  <div class="media-body ml-2">
                    <a classs="pull-left" href="{{route('recipe', $pop->id)}}">{{$pop->title}}</a>
                  </div>
                </div>  
                @endforeach

                
                           
            </div>
          </div>
@endsection