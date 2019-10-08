@extends('layouts.app')
<!-- Stranica prikazuje sve postove -->

@section('kod')
    <div class="fixed-background">                                
        <div class="darkPosts">                                      <!-- Kako bi slika u pozadini bila pokrivena prozirnom crnom(custom je css ) -->
            <div class="container">                            
                <h1> {{ $post->title }}</h1>
                <div>
                    {!!$post->body!!}                                <!-- Kako bi parsiralo tj i onaj ko pravi clanak mogao da prosledi html kod -->
                </div>
                <hr> 
                <small>Napisano: {{ $post->created_at }}</small>

                <a href="/posts" class="btn btn-primary btn-lg">Go Back</a>

                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg">Edit</a>
                
                <!-- Kako bi obrisali post,moramo imati ovu formu -->
                {!! Form::open( [ 'action' => ['PostsController@destroy' , $post->id], 'method' => 'POST' , 'class' => 'float-right'])!!}
                <!-- destroj fj-a ce unistiti nas post,sa prosledjenim id-em -->
                    {{Form::hidden('_method','DELETE') }}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
                
                <br><br><br><br><br><br>
            </div> <!-- END containter -->
        </div><!-- END  Dark2 -->
        

        <div class="fixed-wrap">
            <div class="fixed">

            </div>
        </div>
        
    </div> <!-- END Fixed-Background -->
    
    


@endsection

