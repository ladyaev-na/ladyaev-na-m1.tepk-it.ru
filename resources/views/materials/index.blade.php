@extends('layouts.layout')

@section('title','Материалы')

@section('content')

    <a href="/" class="btn">Назад</a>
    <a href="{{ route('materials.create') }}" class="btn">
        Создать материал
    </a>

    @foreach($materials as $material)

        <a href="{{route('materials.edit', $material->id)}}">
            <div class="border">
                <div class="flex">
                    {{ $material->materialType->name }}
                    |
                    {{ $material->name }}
                    <div class="left">
                        {{$sumMaterialProducts[$material->id]}}
                    </div>
                </div>
                <div class="">Минимальное количество: {{ $material->quantity }}</div>
                <div class="">Количество на складе: {{ $material->quantityM }}</div>
                <div class="flex">
                    Цена:
                    {{ $material->price }}
                    /
                    {{$material->unit->name}}
                    |
                    {{$material->quantityP}}
                </div>
            </div>
            <a href="{{ route('materials.list') }}" class="list">
                Список
            </a>
        </a>
    @endforeach

@endsection

<style>
    .border{
        background-color: #BFD6F6;
        border: 1px solid black;
        padding: 15px;
        margin: 5px auto;
        max-width: 700px;
    }
    .flex{
        display: flex;
    }
    .left{
        margin-left: auto;
    }
    .list{
        margin: 0 50%;
    }
</style>
