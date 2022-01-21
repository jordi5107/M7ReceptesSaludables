
@extends('layouts.masterLayout')
@section('content')

        <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            
            <div class="blog-post">
              
              <h2 class="pb-3 mb-4 font-italic border-bottom">{{$recipe->title}}</h2>
              
              <p class="blog-post-meta">{{date_format($recipe->created_at,"l m-d-Y")}} by {{$recipe->author->name}}</p>
  
              <hr>
              <div class="image-wrapper mb-3">
                <a class="image-wrapper image-zoom cboxElement" href="#">
                  <img style=" height: 250px;width: 700px;" src="{{$post->image}}" alt="Photo of Blog">
                  <div class="image-overlay"></div> 
                </a>
              </div>

              <p>{{$recipe->content}}</p>
             

            </div>
            <div class="d-flex flex-column comment-section">
                  <h3>Comments</h3>
                <div class="bg-white p-2">

                  @foreach($recipe->comments as $comment)
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$comment->user->name}}</span>
                        <span class="date text-black-50">Shared publicly  {{date_format($comment->created_at,"l m-d-Y")}}
                          @if (Auth::check() && Auth::User()->current_team_id == 1) <a href="{{ route('delete comment', $comment->id) }}"><i class="bi bi-trash-fill"></a></i>@endif
                        </span> 
                        </div>
                        
                    </div>

                    <div class="mt-2">
                        <p class="comment-text">{{$comment->comment}}</p>
                    </div>
                  @endforeach

                </div>
                @if(Auth::check())
                <div class=" p-2">
                  
                  <form action="{{route('write comment')}}" method="POST" >
                    @csrf
                    <div class="d-flex flex-row align-items-start">
                        <img class="rounded-circle" src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" width="40">
                        <input type="hidden" name="postId" value="{{$recipe->id}}">
                        <textarea class="form-control ml-1 shadow-none textarea" name="comentari"></textarea>
                  
                    </div>
                    <div class="mt-2 text-right">
                      <button class="btn btn-primary btn-sm shadow-none" type="submit">Recipe comment</button>
                    </div>
                    </form>
                </div>
                @endif
            </div>
           
          </div>
  
          <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
              <h4 class="font-italic">About</h4>
              <p class="mb-0">Un portal <em>propi</em> de noticies. Vols anunciar-te en aquest espai? Contacta amb nosaltres.</p>
            </div>
  
            <div class="p-3">
              <h4 class="font-italic">Categories</h4>
              <ol class="list-unstyled mb-0">
                @foreach($categories as $cat)
                <li><a href="{{route('category', $cat->id)}}">{{$cat->name}}</a></li>
                @endforeach
              </ol>
            </div>
  
          </aside><!-- /.blog-sidebar -->
  
        </div><!-- /.row -->
@endsection

