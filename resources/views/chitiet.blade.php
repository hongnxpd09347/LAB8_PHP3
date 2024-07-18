@extends('layouts')
@section('title')
    {{$tin->tieuDe}}
@endsection
@section('content')
    <h2>{{$tin->tieuDe}}</h2>
    <h3>{{$tin->tomTat}}</h3>
    <div id="noiDung">
        {!! $tin->noiDung !!}
    </div>
@endsection