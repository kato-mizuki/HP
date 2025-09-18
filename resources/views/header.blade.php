<!DOCTYPE html>
<html lang="ja">
  <body>
    <!-- ナビゲーション -->
    <section class="section00">
      <nav id="header">
        <a href="/" class="logo"><img src="{{ asset('img/1289_color.png') }}"></a>
        <ul class="nav">
          <li>
            <a href="/" 
              class="nav-item jump-link" 
              data-target="jump1"
              data-scroll="jump1">サービス案内
            </a>
          </li>
          <li>
            <a href="/" 
              class="nav-item jump-link" 
              data-target="jump2"
              data-scroll="jump2">プラン内容
            </a>
          </li>
          <li>
            <a href="/" 
              class="nav-item jump-link" 
              data-target="jump3"
              data-scroll="jump3">ご利用までの流れ
            </a>
          </li>
          <li>
            <a href="/" 
              class="nav-item jump-link" 
              data-target="jump4"
              data-scroll="jump4">FAQ
            </a>
          </li>
          <li>
            <a href="/" 
              class="nav-item jump-link" 
              data-target="jump5"
              data-scroll="jump5">お問い合わせ
            </a>
          </li>
        </ul>
      </nav>
    </section>
    
    <script src="{{ asset('js/header.js') }}"></script>
  </body>
</html>