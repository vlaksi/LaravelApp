@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Kreiraj clanak </a>
                    <h3>Tvoji objavljeni clanci </h3>
                    @if (count($posts) > 0 )
                        <table class="table table-striped">
                            <tr>
                                <th>Naslov</th>
                                <th></th>                                           <!-- edit i delete butn su ova dva prazna -->
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </a></td>                                           <!-- edit i delete butn su ova dva prazna -->
                                <td>

                                    <!-- Kako bi obrisali post,moramo imati ovu formu -->
                                    {!! Form::open( [ 'action' => ['PostsController@destroy' , $post->id], 'method' => 'POST' , 'class' => 'float-right'])!!}
                                    <!-- destroj fj-a ce unistiti nas post,sa prosledjenim id-em -->
                                        {{Form::hidden('_method','DELETE') }}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Nemas trenutno objavljenih clanaka </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
