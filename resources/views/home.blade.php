@extends('layouts.masterLayout')
@section('content')

        <div class="jumbotron" style="background-color:#e6f7f7">
            <div class="container" >
              <h1 class="display-3">Noticies del mon</h1>
              <p>Les noticies que <b>TU</b> vols</p>
            </div>
        </div>

        <div class="container bootstrap snippets bootdey">

        <div class="row">
            <!-- posts -->
        <div class="col-md-8">

              @foreach($posts as $post)
                <div class="panel blog-container mt-4 ">
                  <div class="panel-body">
                    
                    <h4><a href="{{route('post',$post)}}">{{$post->title}}</a></h4>
                    <small class="text-muted">By <span><strong> {{$post->author->name}}</strong></span> |  {{ date_format($post->created_at,"l m-d-Y") }}</small>
                    
                    <p class="m-top-sm m-bottom-sm">
                      {{$post->content}}  
                    </p>
                   
                    <div class="image-wrapper">
                      <a class="image-wrapper image-zoom cboxElement" href="#">
                        <img style=" height: 250px;width: 700px;" src="{{$post->image}}" alt="Photo of Blog">
                        <div ></div> 
                      </a>
                    </div>
                  </div>
                </div> 
                @endforeach
              
        </div>
            
            <div class="col-md-4 mt-4">
                <h4 class="headline text-muted">
                  POST AMB MES COMENTARIS
                  <span class="line"></span>
                </h4>
                @foreach($postMoreComments as $pop)
                <div class="media popular-post mb-3">
                  <div class="media-body ml-2">
                    <a classs="pull-left" href="{{route('post', $pop->id)}}">{{$pop->title}}</a>
                  </div>
                </div>  
                @endforeach

                
                           
            </div>
          </div>
@endsection