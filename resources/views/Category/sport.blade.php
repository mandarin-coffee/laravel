@extends('layouts.index')

@section('content')
    <h3>Новости спорта</h3>
    <div>
        @if(isset($news) && !empty($news) && is_array($news))
            @foreach($news as $n)
                <div>
                    <h2><a href="#">{{$n['title']}}</a></h2>
                    <p>{{$n['text']}}</p>
                </div>
            @endforeach
        @endif
    </div>
@stop
