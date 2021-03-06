@extends('layouts.backend.main')

@section('title', 'YABS | Add New Post')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Add New Post</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
              {!! Form::model($post, [
                        'method' => 'POST',
                        'route' => 'blog.store',
                        'files' => TRUE
                    ])!!}
             @include('backend.blog.form')
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

            @include('backend.blog.script')
