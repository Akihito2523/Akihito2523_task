<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task edit</title>
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>投稿論文編集</h1>

    {{-- エラーメッセージの表示 --}}
    @if ($errors->any())
        <div class="error">
            <p>{{ count($errors) }}件のエラーがあります。</p>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/tasks/{{ $task->id }}" method="post">
        {{-- updateメソッドに移動する --}}
        @csrf
        @method('PATCH')
        <div>
            <label for="title">論文タイトル</label>
            <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}">
        </div>

        <div>
            <label for="body">本文</label>
            <textarea name="body" class="body" id="body">{{ old('body', $task->body) }}</textarea>
        </div>

        <input type="submit" class="submit" value="更新">
        <a href="/tasks/{{ $task->id }}" class="submit">詳細に戻る</a>
    </form>
</body>

</html>
