 @extends('main')
 
 @section('title', 'Home') 
 @section('content')
                <div class="title m-b-md">
                    En liten blog
				</div>
            <div class="wrapper">

                @foreach($posts as $post)

                    <div class="post">
                        <h3 class="rubrik">{{ $post->rubrik }}</h3>
                        <p>{{ substr(strip_tags($post->innehall), 0, 300) }}{{ strlen(strip_tags($post->innehall)) > 300 ? "..." : "" }}</p>
				<a href="{{ route('posts.show', $post->id) }}" class="button button__blue">läs mer</a>
                    </div>

                @endforeach

            </div>

 @endsection 
