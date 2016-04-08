@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($restoranns, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.restoranns.update', $restoranns->id))) !!}

<div class="form-group">
    {!! Form::label('nama', 'Nama*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('nama', old('nama',$restoranns->nama), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('telepon', 'No Telepon', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('telepon', old('telepon',$restoranns->telepon), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('lokasi', 'Lokasi', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('lokasi', old('lokasi',$restoranns->lokasi), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('deskripsi', old('deskripsi',$restoranns->deskripsi), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tax', 'Tax', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('tax', old('tax',$restoranns->tax), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('rate', 'Rate', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('rate', old('rate',$restoranns->rate), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route('admin.restoranns.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection