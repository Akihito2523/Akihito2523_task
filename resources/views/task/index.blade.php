<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task index</title>
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <div class="tasklist">
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            <form action="/tasks/{{ $task->id }}" id="form_recipe" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" id="btn" class="block"
                    onclick="if(!confirm('削除しますか？')){return false};">
            </form>
        </div>
    @endforeach

    <hr>

    <h1>新規論文投稿</h1>

    {{-- エラーメッセージの表示 --}}
    @if ($errors->any())
        <div class="error">
            <p>{{ count($errors) }}件のエラーがあります。</p>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/tasks" method="post">
        @csrf

        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="body">内容</label>
            <textarea name="body" class="body" id="body"></textarea>
        </div>

        <input type="submit" class="submit" value="Create Task">
    </form>
</body>

</html>
