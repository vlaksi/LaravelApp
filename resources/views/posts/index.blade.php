@extends('layouts.app')


@section('content')
    <div class="fixed-background">                                
        <div class="darkPosts">                                      <!-- Kako bi slika u pozadini bila pokrivena prozirnom crnom(custom je css ) -->
            <div class="container">                            
                <!-- <br><br><br><br> -->
                @include('inc.messages')
                <h1>Svi objavljeni postovi</h1>
        
                @if (count($posts) > 0 )                        <!-- ako ima postova -->
                    @foreach ($posts as $post)                  <!-- prolazimo kroz svaki post -->
                        <div class="card card-body bg-light">

                            <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3> 
                            <!-- svaki post ima svoj id i znaci moze da ima svoju posebnu stranicu --> 

                            <small>Napisano: {{ $post->created_at }} od strane : {{$post->user->name}}</small>
                        </div>
                    @endforeach
                    {{$posts->links()}}                     <!-- omogucava nam paginate(ogranicavanje broja postova po strani)-->
                @else
                    <p>Nema ni jedan post za sada,ali nadamo se skorijem naletu inspiracije :D </p>
                @endif
                <br><br><br><br><br><br>
            </div> <!-- END containter -->
        </div><!-- END  Dark2 -->
        

        <div class="fixed-wrap">
            <div class="fixed">

            </div>
        </div>
        
    </div> <!-- END Fixed-Background -->
    
    


@endsection

