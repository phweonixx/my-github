@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="container">
        <h2>Добро пожаловать!</h2>
        <p>Этот сайт позволяет писать и сохранять PHP-код.</p>
        <a href="{{ route('code.create') }}">Создать новый код</a>
    </div>
@endsection
