<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
    <title>お問い合わせ確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  @include('header')

  <!-- 入力内容確認 -->
  <section class="section11">
    <h1>入力内容確認</h1>

      @if ($errors->any())
          <div class="error">
              <h2>入力に問題があります：</h2>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>

              {{-- 修正するボタン --}}
              <form method="post" action="{{ route('edit') }}">
                  {{-- 入力値をセッションではなく old() で戻す --}}
                  <div class="edit-btn">
                    <button type="submit" style="color:#E9E3DD;">修正する</button>
                  </div>
              </form>
          </div>
      @else
          <p>お問い合わせ内容：</p>
          <ul>
              @php
                  $all_options = [
                      '空き家の管理に関するご相談',
                      '空き家の売却に関するご相談',
                      'その他'
                  ];
              @endphp
              @foreach ($all_options as $option)
                  <li>
                      <label>
                          <input type="checkbox" name="inquiry[]" value="{{ $option }}"
                                @if (!empty($data['inquiry']) && in_array($option, $data['inquiry'])) checked @endif
                                disabled>
                          {{ $option }}
                      </label>
                  </li>
              @endforeach
          </ul>

          <p>{{ nl2br(e($data['comment'])) }}</p>
          <p>お名前：{{ $data['name'] }}</p>
          <p>フリガナ：{{ $data['furigana'] }}</p>
          <p>メールアドレス：{{ $data['email'] }}</p>
          <p>電話番号：{{ $data['tel'] ?? '' }}</p>
          <p>郵便番号：{{ $data['postcode'] }}</p>
          <p>都道府県：{{ $data['pref'] ?? '（未入力）' }}</p>
          <p>町域番地：{{ $data['address'] }}</p>
          <p>建物名・部屋番号：{{ $data['building'] ?? '' }}</p>

          <div class="edit">
              {{-- 修正ボタン --}}
              <form method="post" action="{{ route('edit') }}">
                @csrf
                  <div class="edit-btn">
                    <button type="submit" style="color:#E9E3DD;">修正する</button>
                  </div>
              </form>

              <br>

              {{-- 送信ボタン --}}
              <form method="post" action="{{ route('contact.send') }}">
                  @csrf
                  {{-- セッションで保持しているデータはコントローラー側で使用するため、hiddenは不要 --}}
                  <div class="edit-btn">
                    <button type="submit" style="color:#E9E3DD;">この内容で送信</button>
                  </div>
              </form>
          </div>
      @endif
  </section>
  <br><br>

  @include ('footer')
</body>
</html>
