  <div class="col-md-4">
                <aside class="right-sidebar">
<!--
                    <div class="search-widget">
                        <div class="input-group">
                          <input type="text" class="form-control input-lg" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div> /input-group 
                    </div>
-->


<!--
                    <div class="widget">
                       
                        <div class="widget-body">
                            <img src="/img/300x250.gif" />
                        </div>
                    </div>
-->


                    <div class="widget">

                        <div class="widget-heading">
                            <h4>Popular Yabs</h4>
                        </div>
                        
                        <div class="widget-body">
                        
                            <ul class="popular-posts">
<!--                              display popular posts-->
                               @foreach ($popularPosts as $post)
                            <li>
                            <div class="popularPosts">
                               @if($post->thumbnail)
                                <div class="post-image">
                                        <a href="{{ route('blog.post', $post->id) }}">
                                            <img src="/img/{{ $post->thumbnail }}" />
                                        </a>
                                </div>
                                <div class="post-body" >
                                <h6><a href="{{ route('blog.post', $post->id) }}"> {{ $post->body }}</a></h6>
                                       
                                </div>
                                @else
                                <div class="post-body" >
                                <h6><a href="{{ route('blog.post', $post->id) }}"> {{ $post->body }}</a></h6>
                                       
                                </div>
                                @endif
                                
                            </div>
                            </li>
                                 @endforeach
                            </ul>
                            
                        </div>
                      
                    </div>

<!--
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Codeigniter</a></li>
                                <li><a href="#">Yii</a></li>
                                <li><a href="#">Laravel</a></li>
                                <li><a href="#">Ruby on Rails</a></li>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">Vue Js</a></li>
                                <li><a href="#">React Js</a></li>
                            </ul>
                        </div>
                    </div>
-->
                </aside>
            </div>