<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
    <title>送信確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('header')
    <br><br><br><br>
    <section class="section11">
        @if ($mailSent)
            <h1>送信完了</h1>
            <div class="comment">
                <p>お問い合わせありがとうございました。メールの送信が完了しました。</p>
            </div>
        @else
            <h1>送信失敗</h1>
            <div class="comment">
                <p>メールの送信に失敗しました。お手数ですが再度お試しください。</p>
                @isset($errorMessage)
                    <p style="color:red;">エラー: {{ $errorMessage }}</p>
                @endisset
            </div>
        @endif
    </section>
    <br><br><br><br>
    @include('footer')
    <script src="{{ asset('java.js') }}"></script>
</body>
</html>