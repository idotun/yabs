    @extends ('layouts.main')

    @section('content')    
    <div class="container">
        <div class="row">
           @foreach ($posts as $post)
            <div class="col-md-3">
                <article class="post-item">
                   
                    <div class="post-item-image">
                        <a href="{{ route('blog.post', $post->id) }}">
                            <img src="img/{{ $post->thumbnail }}" alt="">
                        </a>
                    </div>
                    <div class="post-item-body" id="post-item-body">
                        <div class="padding-10">
                           <p><b><a href="{{ route('blog.post', $post->id) }}">{{ $post->body }}</a></b></p>
                           
                        </div>
                    </div>
                    
                    
                </article>
            </div>
            @endforeach
           
                
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav>
                   {{$posts -> links()}}
                </nav>
            </div>
        </div>
 </div>
    @endsection

    