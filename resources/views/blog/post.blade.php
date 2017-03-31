 @extends ('layouts.main')

    @section('content')    
    <div class="container">
        <div class="row">
           <div class="col-md-8">
                <article class="post-item post-detail">
                   @if(!$post->image)
                    <div class="post-item-body">
                        <div class="padding-10">
                            {!! $post->body_html !!}
                            
                        </div>
                    </div>
                    @else
                    <div class="post-item-body">
                        <div class="padding-10">
                            {!! $post->body_html !!}
                            
                        </div>
                    </div>
                     <div class="post-item-image" id="post-item-image">
                            @if($post->video)
                            
                            <iframe width="100%" height="315" src="{{$post->video}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
                            
                            
                            @else
                
                            <img src="/img/{{$post->image}}" alt="">
                            
                            @endif
                    
                    </div>
                    @endif
                   
                   
                    



            <div class="post-meta padding-10 clearfix">
        
                   <div class="facebook-share">
                        <a class="btn btn-primary btn-responsive" href="javascript:fbShare('http://justincron.com', 'Fb Share', 'Facebook share popup', '', 520, 350)"><i class="fa fa-facebook fa-lg"></i> Share on Facebook</a>
                   </div>
                   <div class="twitter-share">
                         <a class="btn btn-info btn-responsive tweet " title="Justin Cron" href="http://justincron.com" target="_blank"><i class="fa fa-twitter fa-lg"></i> Share on Twitter</a>
                   </div>
            </div>

             </article>
<!--comments-->
            </div>
          @include('layouts.sidebar')
        </div>
    </div>
    @endsection
   