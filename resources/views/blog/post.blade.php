 @extends ('layouts.main')

    @section('content')    
    <div class="container">
        <div class="row">
           <div class="col-md-8">
                <article class="post-item post-detail">
                   

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>

<!--
                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
-->

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium molestiae, eveniet dignissimos totam recusandae nesciunt architecto consequatur sit ratione, labore asperiores ipsa molestias voluptatibus! Expedita eveniet est officia impedit recusandae.</p>
                            
                        </div>
                    </div>
                     <div class="post-item-image">
                        <a href="#">
                            <img src="/img/igbo.jpg" alt="">
                        </a>
                    </div>
                </article>

<!--
                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img alt="Author 1" src="/img/author.jpg" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Masaru Edo</a></h4>
                        <div class="post-author-count">
                          <a href="#">
                              <i class="fa fa-clone"></i>
                              90 posts
                          </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad aut sunt cum, mollitia excepturi neque sint magnam minus aliquam, voluptatem, labore quis praesentium eum quae dolorum temporibus consequuntur! Non.</p>
                      </div>
                    </div>
                </article>
-->
<!--comments-->

            </div>
          @include('layouts.sidebar')
        </div>
    </div>
    @endsection