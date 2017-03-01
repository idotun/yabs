    @extends ('layouts.main')

    @section('content')    
    <div class="container">
        <div class="row">
           @foreach ($posts as $post)
            <div class="col-md-3">
                <article class="post-item">
                   
                    <div class="post-item-image">
                        <a href="post.html">
                            <img src="img/{{ $post->thumbnail }}" alt="">
                        </a>
                    </div>
                    <div class="post-item-body" id="post-item-body">
                        <div class="padding-10">
                           <p><b><a href="post.html">{{ $post->body }}</a></b></p>
                           
                        </div>
                    </div>
                    
                    
                </article>
            </div>
            @endforeach
           
<!--
                <nav>
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                </nav>
-->
           
        </div>
</div>
    @endsection

    