<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>タスク一詳細</h1>
    <p class="detail">[タイトル]</p>
    <p class="detail">{{ $task->title }}</p>
    <p class="detail">[内容]</p>
    <p class="detail">{{ $task->body }}</p>

    <a href="/tasks" class="block edit">一覧へ戻る</a>
    <a href="/tasks/{{ $task->id }}/edit" class="block edit">編集する</a>
    <form action="/tasks/{{ $task->id }}" id="form_recipe" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" id="btn" class="block edit"
            onclick="if(!confirm('削除しますか？')){return false};">
    </form>
</body>

</html>
