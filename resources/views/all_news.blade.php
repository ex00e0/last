@extends('layout.header')
@section('title', 'Главная')
@section('content')

@error('message')
<script>alert("{{$message}}");</script>
@enderror

<div class="news">
    <div class="headline c2 r1">Новости театра</div>
    <div class="c2-5 r2 block_news">
        <div>
            <img class="c1 r1 new_img" src="{{asset('images/Rectangle 153.jpg')}}">
            <div class="c1 r3 new_name">Академия вокального искусства Аскара Абдразакова</div>
            <div class="c1 r3 new_date">09.12.2022</div>
            <div class="c1 r4 new_desc">Завершилась первая сессия проекта «Академия вокального искусства Аскара Абдразакова». Слушателей ждали четыре насыщенных знаниями и эмоциями дня.</div>
        </div>
        <div>
            <img class="c1 r1 new_img" src="{{asset('images/Rectangle 153.jpg')}}">
            <div class="c1 r3 new_name">Академия вокального искусства Аскара Абдразакова</div>
            <div class="c1 r3 new_date">09.12.2022</div>
            <div class="c1 r4 new_desc">Завершилась первая сессия проекта «Академия вокального искусства Аскара Абдразакова». Слушателей ждали четыре насыщенных знаниями и эмоциями дня.</div>
        </div>
        <div>
            <img class="c1 r1 new_img" src="{{asset('images/Rectangle 153.jpg')}}">
            <div class="c1 r3 new_name">Академия вокального искусства Аскара Абдразакова</div>
            <div class="c1 r3 new_date">09.12.2022</div>
            <div class="c1 r4 new_desc">Завершилась первая сессия проекта «Академия вокального искусства Аскара Абдразакова». Слушателей ждали четыре насыщенных знаниями и эмоциями дня.</div>
        </div>
        <div>
            <img class="c1 r1 new_img" src="{{asset('images/Rectangle 153.jpg')}}">
            <div class="c1 r3 new_name">Академия вокального искусства Аскара Абдразакова</div>
            <div class="c1 r3 new_date">09.12.2022</div>
            <div class="c1 r4 new_desc">Завершилась первая сессия проекта «Академия вокального искусства Аскара Абдразакова». Слушателей ждали четыре насыщенных знаниями и эмоциями дня.</div>
        </div>
    </div>
</div>

<div class="line_more">
    <button>Смотреть еще</button>
</div>

@endsection