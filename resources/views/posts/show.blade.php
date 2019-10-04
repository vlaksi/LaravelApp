@extends('layouts.app')


@section('kod')
    <div class="fixed-background">                                
        <div class="darkPosts">                                      <!-- Kako bi slika u pozadini bila pokrivena prozirnom crnom(custom je css ) -->
            <div class="container">                            
                <h1> {{ $post->title }}</h1>
                <div>
                    {{$post->body}}
                </div>
                <hr> 
                <small>Napisano: {{ $post->created_at }}</small>

                <a href="/posts" class="btn btn-primary btn-lg">Go Back</a>

                <br><br><br><br><br><br>
            </div> <!-- END containter -->
        </div><!-- END  Dark2 -->
        

        <div class="fixed-wrap">
            <div class="fixed">

            </div>
        </div>
        
    </div> <!-- END Fixed-Background -->
    
    


@endsection

