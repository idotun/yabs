 @extends ('layouts.main')

    @section('content')    
    <div class="container">
        <div class="row">
           <div class="col-md-8">
                <article class="post-item post-detail">
                   

                    <div class="post-item-body">
                        <div class="padding-10">
                            {!! $post->body_html !!}
                            
                        </div>
                    </div>
                     <div class="post-item-image">
                
                            <img src="/img/{{$post->image}}" alt="">
                    
                    </div>
                   
                    


            <div class="container  post-meta padding-10 clearfix">
               <div class="row">
                   <div class="col-md-6">
                        <a class="btn btn-primary btn-lg" href="javascript:fbShare('http://justincron.com', 'Fb Share', 'Facebook share popup', '', 520, 350)"><i class="fa fa-facebook fa-lg"></i> Share on Facebook</a>
                   </div>
                   <div class="col-md-6">
                         <a class="btn btn-info btn-lg tweet" title="Justin Cron" href="http://justincron.com" target="_blank"><i class="fa fa-twitter fa-lg"></i> Share on Twitter</a>
                   </div>
               </div>
           
            </div>
             </article>
<!--comments-->
            </div>
          @include('layouts.sidebar')
        </div>
    </div>
    @endsection