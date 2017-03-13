@extends('layouts.backend.main')

@section('title', 'YABS | Blog Index')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Display All Blog Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <table class="table table-bordered">
                       <thead>
                           <tr>
                               <td width="70px">Action</td>
                               <td>Body</td>
                               <td>Thumbnail</td>
                               <td width="90px">Date</td>
                            
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($posts as $post)
                           <tr>
                               <td>
                                   <a href="{{ route('blog.edit', $post->id)}}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                   </a>
                                   <a href="{{ route('blog.destroy', $post->id)}}" class="btn btn-xs btn-danger">
                                      <i class="fa fa-times"></i>
                                   </a>
                               </td>
                               <td>{{$post->body}}</td>
                               <td><img height="90px" width="90px" src="/img/{{$post->thumbnail}}"/></td>
                               <td><abbr title="{{ $post->dateFormatted(true)}}"> 
                                        {{ $post->dateFormatted()}}
                                   </abbr>
                               </td>
                            
                           </tr>
                           @endforeach
                       </tbody>
                        
                    </table>
                    
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                 <div class="pull-left">
                  {{$posts -> links()}}
                  </div>
                  <div class="pull-right">
                    <?php $postCount = $posts->count() ?>
                    
                     <small>
                         {{ $postCount }} {{ str_plural('Item', $postCount) }}
                     </small>
                  </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
