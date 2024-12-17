@extends('layout.header')
@section('title', 'Главная')
@section('content')

@error('message')
<script>alert("{{$message}}");</script>
@enderror

<div class="premiere">
    <div class="headline c2 r1">Афиша</div>
    <div class="c2-5 r2 block_premieres">
        <div class="pr_back">
            <div class="r1 c2 pr_date">
                <div>14 декабря, 19:30</div>
            </div>
            <div class="r1 c4 pr_age">
                <div>12+</div>
            </div>
            <div class="r3 c2-all pr_name">Театр. Музыка. Любовь.</div>
            <div class="r4 c2-all pr_desc">Концерт в честь 105-летия Загира Исмагилова</div>
        </div>
        <div class="pr_back">
            <div class="r1 c2 pr_date">
                <div>14 декабря, 19:30</div>
            </div>
            <div class="r1 c4 pr_age">
                <div>12+</div>
            </div>
            <div class="r3 c2-all pr_name">Театр. Музыка. Любовь.</div>
            <div class="r4 c2-all pr_desc">Концерт в честь 105-летия Загира Исмагилова</div>
        </div>
        <div class="pr_back">
            <div class="r1 c2 pr_date">
                <div>14 декабря, 19:30</div>
            </div>
            <div class="r1 c4 pr_age">
                <div>12+</div>
            </div>
            <div class="r3 c2-all pr_name">Театр. Музыка. Любовь.</div>
            <div class="r4 c2-all pr_desc">Концерт в честь 105-летия Загира Исмагилова</div>
        </div>
    </div>
</div>

<div class="line_more">
    <button>Смотреть еще</button>
</div>

@endsection