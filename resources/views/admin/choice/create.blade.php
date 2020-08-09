@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Create Choice
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>'choices.store']) !!}
            <div class="form-group @if($errors->has('name')) has-error @endif">
                {!! Form::label('Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Name',]) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {!! $errors->first('name')!!}
                    </span>
                @endif
            </div>

            {!! Form::submit('Create', ['class'=>'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection