@extends('layouts.general')

@section('title')Магазин@endsection

@section('content')

<div id="user_id">
    <p>Добро пожаловать, {{$name}}</p>
    <form method="post" action="{{route('quit')}}">
        @csrf
        <button type="submit">Выйти</button>
    </form>
</div>

<div id="search">
    <form method="get" action="{{route('search-shop')}}" id="search-form">
        @csrf
        <div class="inp_row">
            <label id="lbl">Наименование</label>
            <input type="text" name="name" placeholder="Наименование..."
                   autocomplete="off" value="{{$name === null ? old('name') : $name}}"/>
        </div>
        <div class="inp_row">
            <label id="lbl">Категория</label>
            <input type="text" name="category" placeholder="Категория..."
                   autocomplete="off" value="{{$category === null ? old('category') : $category}}"/>
        </div>
        <div class="inp_row">
            <label id="lbl">Группа</label>
            <input type="text" name="group" placeholder="Группа..."
                   autocomplete="off" value="{{$group === null ? old('group') : $group}}"/>
        </div>
        <div class="inp_row">
            <label id="lbl">Свойство 1</label>
            <input type="text" name="prop_1" placeholder="Свойство 1..."
                   autocomplete="off" value="{{$prop_1 === null ? old('prop_1') : $prop_1}}"/>
        </div>
        <div class="inp_row">
            <label id="lbl">Свойство 2</label>
            <input type="text" name="prop_2" placeholder="Свойство 2..."
                   autocomplete="off" value="{{$prop_2 === null ? old('prop_2') : $prop_2}}"/>
        </div>
        <div class="inp_row">
            <label id="lbl">Цена</label>
            <input type="text" name="price" placeholder="Цена..."
                   autocomplete="off" value="{{$price === null ? old('price') : $price}}"/>
        </div>
        <div id="btn-search">
            <button type="submit" name="submit" id="btn_ent">Поиск</button>
        </div>

    </form>
</div>

@if(Request::is('/shop/search'))
    <div id="searchresults">
        <p>Результаты поиска:</p>
    </div>
    @endif

<div id="products">

    @foreach($products as $product)
        <div id="product">
            <div id="name">
                <h3>{{$product->name}}</h3>
            </div>
            <div id="category">
                <p>Категория:{{$product->category}}</p>
            </div>
            <div id="group">
                <p> Группа:{{$product->group}}</p>
            </div>
            <div id="prop_1">
                <p>Свойство 1:{{$product->prop_1}}</p>
            </div>
            <div id="prop_2">
                <p>Свойство 2:{{$product->prop_2}}</p>
            </div>
            <div id="price">
                <p>Цена:{{$product->price}}</p>
            </div>
        </div>
    @endforeach

</div>

{{$products->render()}}

    @endsection
