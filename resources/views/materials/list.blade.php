@extends('layouts.layout')

@section('title','Список')

@section('content')

    <div class="container mt-4">
        <div class="">
            <h2>Продукция с использованием "{{--{{ $material->name }}--}}"</h2>
        </div>

       {{-- @if ($products->isEmpty())
            <p class="">Этот материал нигде не используется.</p>
        @else
            <table class="">
                <thead class="">
                <tr>
                    <th>Наименование продукции</th>
                    <th>Необходимое количество материала</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $mp)
                    <tr>
                        <td>{{ $mp->product->name }}</td>
                        <td>{{ $mp->quantity }} {{ $material->unit->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif--}}
    </div>


@endsection
