@extends('layouts.index')

@section('content')
    <h3>Сайт новостей - Site</h3>
<a href="{{route('admin.news')}}">Список новостей</a><br>
<a href="{{route('category.news')}}">Посмотреть категории новостей</a><br>
<a href="{{route('add.news')}}>">Перейти на страницу добавления новости</a>
@stop

{{--@section('content')--}}
{{--    @if(isset($news) && !empty($news) && is_array($news))--}}
{{--    @foreach($news as $n)--}}
{{--        <div>--}}
{{--            <h2><a href="<?=route('admin.news.edit', ['id' => $n['id']])?>"><?=$n['title']?></a></h2>--}}
{{--            <p><?=$n['text']?></p>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--    @endif--}}
{{--@stop--}}
