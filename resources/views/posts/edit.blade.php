@extends('main')

@section('title', 'Ändra blog-posten')

@section('content')
	<div class="wrapper">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <h2> {{ Form::label('rubrik', 'Rubrik:') }}</h2>
        <h2>{{ Form::text('rubrik', null) }}</h2>
            {{ Form::label('innehall', 'Innehåll:') }}
        <p> {{ Form::textarea('innehall', null) }} </p>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
                        <!--{{ method_field('PATCH') }}-->
                        {{ Form::submit('Save Changes') }}
					</div>
				</div>	
        {!! Form::close() !!} 
    </div>

@stop
