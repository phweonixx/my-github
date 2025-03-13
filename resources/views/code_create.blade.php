@extends('layouts.app')

@section('title', 'Новый код')

@section('content')
    <div class="container">
        <h2>Создать новый код:</h2>

        <form action="{{ route('code.store') }}" method="POST">
            @csrf
            <label for="title">Название:</label>
            <input type="text" id="title" name="title" required>

            <br><br>

            <label for="code">Код:</label>
            <!-- Скрытое поле для кода -->
            <input type="hidden" id="code" name="code" required>

            <div id="editor" style="height: 300px;"></div>

            <button type="submit">Сохранить</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.37.1/min/vs/loader.js"></script>

    <script>
        require.config({
            paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.37.1/min/vs' }
        });

        require(['vs/editor/editor.main'], function () {
            var editor = monaco.editor.create(document.getElementById('editor'), {
                value: "",
                language: 'php',
                theme: 'vs-dark',
                automaticLayout: true
            });

            // Добавляем обработчик для формы, чтобы перед отправкой данные попадали в скрытое поле
            let form = document.querySelector("form");
            form.addEventListener("submit", function () {
                // Передаем данные из Monaco Editor в скрытое поле
                let codeInput = document.getElementById('code');
                codeInput.value = editor.getValue();
            });
        });
    </script>
@endsection
