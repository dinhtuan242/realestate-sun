@extends('backend.layouts.master')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
                {{ $err }}<br>
            @endforeach
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {!! Form::open(['route' => ['district.edit', $district->id], 'method' => 'post']) !!}
        {!! Form::label('name', trans('province.name') , ['class' => 'label']) !!}
        {!! Form::text('name', $district->name, ['class' => 'input', 'placeholder' => trans('province.name')]) !!}<br/>
        {!! Form::label('provinces_id', trans('province.province')) !!}
        {!! Form::select('provinces_id', $provinces->pluck('name', 'id'), $district->provinces_id, ['placeholder' => trans('province.choose')]) !!}
        {!! Form::submit(trans('message.Submit')) !!}
    {!! Form::close() !!}
@endsection
