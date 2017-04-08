@extends('layouts.backend.main')

@section('title', 'YABS | Edit Post')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Edit Post</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
              {!! Form::model($post, [
                        'method' => 'PUT',
                        'route' => ['blog.update', $post->id],
                        'files' => TRUE,
                        'id' => 'post-form'
                    ])!!}
             @include('backend.blog.form')
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

            @include('backend.blog.script')
