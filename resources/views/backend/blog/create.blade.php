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
                        
                    </div>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://placehold.it/200x150&text=No+Image" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image', null, ['class' => 'form-control']) !!}</span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
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
