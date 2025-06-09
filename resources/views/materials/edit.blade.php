@extends('layouts.layout')

@section('title','Редактирование материала')

@section('content')


    <a href="{{ route('materials.index') }}" class="btn">Назад</a>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('materials.update', $material->id)}}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        <div class="">
            <p>Наименование материала</p>
            <input type="text" name="name" value="{{ $material->name }}">
        </div>
        <div class="">
            <p>Тип материала</p>
            <select name="material_type_id">
                @foreach($materialTypes as $materialType)
                    <option value="{{ $materialType->id }}"
                        {{ old('material_type_id', $material->material_type_id) == $materialType->id ? 'selected' : '' }}>
                        {{ $materialType->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="">
            <p>Цена единицы материала</p>
            <input type="number" min="0" step="0.01" name="price" value="{{ $material->price }}">
        </div>
        <div class="">
            <p>Количество на складе</p>
            <input type="number" min="0" step="1" name="quantity" value="{{ $material->quantity }}">
        </div>
        <div class="">
            <p>Минимальное количество</p>
            <input type="number" min="0" step="1" name="quantityM" value="{{ $material->quantityM }}">
        </div>
        <div class="">
            <p>Количество в упаковке</p>
            <input type="number" min="0" step="0.01" name="quantityP" value="{{ $material->quantityP }}">
        </div>
        <div class="">
            <p>Единица измерения</p>
            <select name="unit_id">
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}"
                        {{ old('unit_id', $material->unit_id) == $unit->id ? 'selected' : '' }}>
                        {{ $unit->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="">
            <button type="submit" class="btn">Сохранить</button>
        </div>
    </form>

@endsection
