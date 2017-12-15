@extends('main')

@section('title', 'Aktuell post')

@section('content')	
	<div class="wrapper">
		<h2>{{ $post->rubrik }} </h2>
        <hr>
        <p> {{ $post->ingress }} </p>
        <br>
        <p> {{ $post->innehall }} </p>
     	<div class="button">
	    	{!! Html::linkRoute('posts.edit', 'Ändra', array($post->id)) !!}
	    </div>
       <br>
		<p class="info"> <hr>
            Posten skapad av: {{ $post->forfattare }} <br>
            Datum: {{ $post->created_at }}
        </p>

    <div class="button">

        {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
        
        {!! Form::submit('Delete') !!}
        {!! Form::close() !!}
	</div>

	
  
    </div>
@endsection
