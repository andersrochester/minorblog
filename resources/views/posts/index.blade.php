@extends('main')

@section('title', 'Alla poster')

@section('content')

	<table>
		<thead>
			<th>#</th>
			<th>Rubrik</th>
			<th>ingress</th>
			<th>Skapad</th>
			<th></th>
		</thead>
	<tbody>
		<!-- loopa igenom alla poster -->			
		@foreach ($posts as $post)
			<tr>	
				<th>{{ $post->id }}</th>
				<td class="table__post">{{ $post->rubrik }}</td>
				<td class="table__post">{{ substr(strip_tags($post->ingress), 0, 50) }}{{ strlen(strip_tags($post->ingress)) > 50 ? "..." : "" }}</td>
				<td class="table__post">{{ date('M j, Y', strtotime($post->created_at)) }}</td>
				<td class="table__post"><a href="{{ route('posts.show', $post->id) }}" class="button button__blue">Mer</a> <a href="{{ route('posts.edit', $post->id) }}" class="button button__green">Ändra</a></td>
			</tr>

		@endforeach

	</tbody>
</table>

@stop
