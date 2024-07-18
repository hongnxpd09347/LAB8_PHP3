@extends('layouts')
@section('title')
    Tin trong loại {{$idLT}}
@endsection
@section('content')
    <h1>{{ $loaitin_arr->ten }}</h1>
    @foreach ($listtin as $t)
    <div class="row">
        <h3>
            <a href="{{ url('/tin',[$t->id]) }}">
            {{$t->tieuDe}}
            </a>
        </h3>        
        <p>{{$t->tomTat}}</p>
    </div>
    @endforeach
@endsection