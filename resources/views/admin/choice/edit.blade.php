@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Edit Choice
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['choices.update',$choice->id],'method'=>'put']) !!}
            <div class="form-group @if($errors->has('name')) has-error @endif">
                {!! Form::label('Name') !!}
                {!! Form::text('name', $choice->name, ['class'=>'form-control','placeholder'=>'Name']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {!! $errors->first('name')!!}
                    </span>
                @endif
            </div>

            {!! Form::submit('Update', ['class'=>'btn btn-sm btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection