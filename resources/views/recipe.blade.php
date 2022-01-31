
@extends('layouts.masterLayout')
@section('content')

        <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            
            <div class="blog-post mt-5">
              
              <h1 class="pb-3 font-italic">{{$recipe->title}}</h1>
              
              <div class="image-wrapper mb-3">
                <a class="image-wrapper image-zoom cboxElement" href="#">
                  <img style=" height: 600px;width: 856px;" src="{{$recipe->image}}" alt="Photo of Blog">
                  <div class="image-overlay"></div> 
                </a>
              </div>

              <p class="blog-post-meta">{{date_format($recipe->created_at,"l m-d-Y")}} </p>
  
              <hr>
              <span>By {{$recipe->author->name}}</span>
              <p class="mt-4">{{$recipe->description}}</p>

              <h2 class="mb-2 border-bottom">Ingredients</h2>

              <ul>
              @foreach($ingredients as $ingredient)
              <li>{{$ingredient}}</li>

              @endforeach
              </ul>

              <h2 class="mb-2 border-bottom">Com fer {{$recipe->title}}</h2>

              <span>Temps total <b>{{$recipe->prepTime}}</b></span>

              @foreach($steps as $step)
                  <h3 class="border-bottom">{{$step['name']}}</h3>
                  <p>{{$step['text']}}</p>
              @endforeach
            </div>
            <div class="d-flex flex-column comment-section">
                  <h3>Comentaris</h3>
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
                        <input type="hidden" name="recipeId" value="{{$recipe->id}}">
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
  
          <aside class="col-md-4 blog-sidebar" style="margin-top:4em">
            <div class="p-3 mb-3 bg-light rounded">
              <h4 class="font-italic">About</h4>
              <p class="mb-0">Un portal <em>propi</em> de receptes. Vols anunciar-te en aquest espai? Contacta amb nosaltres.</p>
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
<script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Recipe",
            "name": "{{$recipe->title}}",
            "image": [
                "http://m7receptessaludables.test{{$recipe->image}}",
            ],
            "author": {
                "@type": "Person",
                "name": "Jordi Molina"
            },
            "datePublished": "{{$recipe->created_at}}",
            "description": "{{$recipe->description}}",
            "prepTime": "{{$recipe->prepTime}}",
            "keywords": "receptes, catalunya, rapides",
            "recipeYield": "10",
            "recipeCategory": "{{$recipe->category->name}}",
            "recipeCuisine": "European",
            "recipeIngredient": [
              @foreach($ingredients as $ingredient)
                "{{$ingredient}}",
              @endforeach
            ],
            "recipeInstructions": [
              @foreach($steps as $step)
              {
                    "@type": "HowToStep",
                    "name": "{{$step['name']}}",
                    "text": "{{$step['text']}}",
                    "url": "https://example.com/party-coffee-cake#{{$step['step']}}",
                },
              @endforeach
            ],
        }
    </script>
