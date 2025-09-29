<!DOCTYPE html>
<html lang="ja">
  <body>
    <!-- ナビゲーション -->
    <section class="section00">
      <nav id="header">
        <a href="/" class="logo"><img src="{{ asset('img/1289_color.png') }}"></a>

        <!-- ハンバーガーメニュー -->
        <div class="hamburger" id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <ul class="nav" id="nav-menu">
          <li><a href="/" class="nav-item jump-link" data-target="jump1">サービス案内</a></li>
          <li><a href="/" class="nav-item jump-link" data-target="jump2">プラン内容</a></li>
          <li><a href="/" class="nav-item jump-link" data-target="jump3">ご利用までの流れ</a></li>
          <li><a href="/" class="nav-item jump-link" data-target="jump4">FAQ</a></li>
          <li><a href="/" class="nav-item jump-link" data-target="jump5">お問い合わせ</a></li>
        </ul>
      </nav>

    </section>
    
    <script src="{{ asset('js/header.js') }}"></script>
  </body>
</html>