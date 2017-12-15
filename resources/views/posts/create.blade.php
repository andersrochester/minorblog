@extends('main')

@section('title', 'Skapa ny post')

@section('content')

	<div class="wrapper">
      <div class="form__create">
        <h2 class="form__title">Skapa en ny post</h2>
		<hr>
        
        {!! Form::open(array('route' => 'posts.store')) !!}
        
          {{ Form::label('rubrik', 'Rubrik:') }}
          {{ Form::text('rubrik', null) }}
          <br>
          {{ Form::label('slug', 'Slug:') }}
          {{ Form::text('slug', null) }}
          <br>

          <!--författare -->
          {{ Form::label('forfattare', 'Författare:') }}
          {{ Form::text('forfattare', 'Anders Rochester') }}

          <br>
          <!--ingress -->
          {{ Form::label('status', 'Status:') }}
          {{ Form::text('status', 'utkast') }}

          <br>
          <!--ingress -->
          {{ Form::label('ingress', 'Ingress:') }}
          <br>
          {{ Form::textarea('ingress', 'Gör dig omaket att skriva en liten ingress...') }}

          <br>
          <!--innehåll -->
          {{ Form::label('innehall', 'Innehåll:') }}
          <br>
          {{ Form::textarea('innehall', null) }}

          <br>
          {{ Form::submit('Create Post') }}

        {!! Form::close() !!}

      </div>
    </div>
@endsection
