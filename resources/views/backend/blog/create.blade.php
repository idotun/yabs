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
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                    {!! Form::model($post, [
                        'method' => 'POST',
                        'route' => 'blog.store',
                        'files' => TRUE
                    ])!!}
                    
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}" >
                        {!! Form::label('body') !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    @if($errors->has('body'))
                        <span class="help-block">
                            {{ $errors->first('body') }}
                        </span>
                    @endif
                    <div class="form-group {{ $errors->has('video') ? 'has-error' : ''}}" >
                        {!! Form::label('video') !!}
                        {!! Form::text('video', null, ['class' => 'form-control']) !!}
                    </div>
                   
                    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}" >
                        {!! Form::label('image') !!}
                        {!! Form::file('image', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    @if($errors->has('image'))
                        <span class="help-block">
                            {{ $errors->first('image') }}
                        </span>
                    @endif
                  
                    
                    <hr>
                    
                    {!! Form::submit('Create new post', ['class' => 'btn btn-primary']) !!}
                    
                    {!! Form::close() !!}
                    
              </div>
              <!-- /.box-body -->
              
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
        
        var simplemde = new SimpleMDE({ element: $("#body")[0] });
     
    </script>
@endsection
