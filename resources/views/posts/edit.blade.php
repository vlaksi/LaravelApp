@extends('layouts.app')
<!-- /posts/create -->

@section('content')
    <div class="fixed-background">                                
        <div class="darkPosts">                                      <!-- Kako bi slika u pozadini bila pokrivena prozirnom crnom(custom je css ) -->
            <div class="container">  
                @include('inc.messages')                             <!-- Ukljucujem poruke o greskama ili uspesnom kreiranju posta -->                          
                <!-- <br><br><br><br> -->
                <h1>Kreiraj clanak</h1>

                <!-- dajemo mogucnost menjanja naziva posta -->
                {!! Form::open( ['action' => ['PostsController@update',$post->id] , 'method' => 'POST' ] ) !!}
                <!-- dodao da je u pitanju niz i dodao $post->id kako bi znao koji je post u pitanju -->
                    <div class="form-group">
                        {{Form::label('title','Naslov') }}            <!--prvi je polje objekta request, drugi parametar je sta ce da pise -->
                        {{Form::text('title',$post->title,[ 'class' => 'form-control' , 'placeholder' => 'Ukucaj naslov teksta' ]  ) }}
                    </div>
                <!-- DEO ZA BODY,kako bi mogao da se postavi neki clanak -->
                    <div class="form-group">
                        {{Form::label('body','Telo') }}            <!-- drugi parametar je sta ce da pise -->
                        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor', 'class' => 'form-control' , 'placeholder' => 'Ovde se kuca clanak tj. teksta' ]  ) }}
                    </div>
                    {{ Form::hidden('_method','PUT') }}            <!-- posto method u formu ne moze biti PUT,ali uz pomoc hiddena moze ovako-->
                    {{ Form::submit('Objavi',[ 'class' => 'btn btn-primary' ] ) }} 
                    <!-- Kada se klikne 'Objavi' salje se request fji update -->
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

