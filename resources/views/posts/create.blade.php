@extends('layouts.app')


@section('kod')
    <div class="fixed-background">                                
        <div class="darkPosts">                                      <!-- Kako bi slika u pozadini bila pokrivena prozirnom crnom(custom je css ) -->
            <div class="container">                            
                <!-- <br><br><br><br> -->
                <h1>Kreiraj clanak</h1>

                <!-- dajemo mogucnost davanja naziva novog posta -->
                {!! Form::open( ['action' => 'PostsController@store' , 'method' => 'POST' ] ) !!}
                    <div class="form-group">
                        {{Form::label('title','Naslov') }}            <!-- drugi parametar je sta ce da pise -->
                        {{Form::text('title','',[ 'class' => 'form-control' , 'placeholder' => 'Ukucaj naslov teksta' ]  ) }}
                    </div>
                <!-- DEO ZA BODY,kako bi mogao da se postavi neki clanak -->
                    <div class="form-group">
                        {{Form::label('body','Telo') }}            <!-- drugi parametar je sta ce da pise -->
                        {{Form::textarea('body','',[ 'class' => 'form-control' , 'placeholder' => 'Ovde se kuca clanak tj. teksta' ]  ) }}
                    </div>
                    {{ Form::submit('Objavi',[ 'class' => 'btn btn-primary' ] ) }} 
                    <!-- Kada se klikne 'Objavi' salje se request fji store -->
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

