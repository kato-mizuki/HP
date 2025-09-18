<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
    <title>TOP</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  @include('header')

  <!-- ファーストビュー -->
  <section class="section01" id="slideshow">
    <h1 class="catchcopy">
      <strong>
        大切な資産を守る、最初の第一歩。<br>
        管理・活用・必要なら売却まで、ワンストップでご相談ください
      </strong>
    </h1><br><br>

    <div class="bottom-area">
      <div class="sabucopi">
        <div class="image">
          <img src="{{ asset('img/title.png') }}" alt="称号" class="degree">
          <p class="degree-text">
            宅地建物取引士や認定空き家再生診断士、<br>
            空き家管理士など経験豊富な有資格者が対応
          </p>
        </div>
        <img src="{{ asset('img/icon_business_man04.png') }}" alt="顔写真" class="businessman">
        <div class="introduce">
          <p>
            宅地建物取引士 ○○ ○○<br>
            ○○市・△△市に密着<br>
            ご相談実績 多数
          </p>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <button id="backToTop">⬆</button>
  <!-- 追従ボタン -->
  <div class="fixed-btn">
   <a href="#" 
      class="jump-link"
      data-target="jump5">お問い合わせ ✉</a>
  </div>
  <!-- 問題提起(5大リスク -->
  <a id="jump1"></a>
  <section class="section02">
    <h1>そのままにしていませんか？空き家や相続した家のリスク</h1>
    <br>
    <div class="empathy">
      <div class="image">
        <img src="{{ asset('img/house_boroboro.png') }}" alt="空き家" class="akiya">
      </div>
      <div class="question">
        <p>✅ 固定資産税だけかかっていませんか？</p> 
        <p>✅ 老朽化して費用やトラブルに繋がることも… </p>  
        <p>✅ 誰も教えてくれません。あなたの家は大丈夫ですか？</p>
      </div>
      <br>
      <br>
    </div>
    <hr>
  </section>

  <!-- 解決策の提示 -->
  <section class="section03">
    <h1>そのお悩み私たちが解決します！</h1>
    <div class="solution-points">
      <div class="point">
        <img src="{{ asset ('img/akiyakanri.png') }}" alt="税金対策">
        <h3>固定資産税の負担を軽減</h3>
        <p>不要な出費を抑える最適な解決策をご提案します。</p>
      </div>
      <div class="point">
        <img src="{{ asset('img/katuyou.png') }}" alt="管理サービス">
        <h3>老朽化リスクを予防</h3>
        <p>空き家の管理や修繕で、トラブルを未然に防ぎます。</p>
      </div>
      <div class="point">
        <img src="{{ asset ('img/baikyaku.png') }}" alt="売却サポート">
        <h3>売却までトータルサポート</h3>
        <p>地域密着の不動産ネットワークでスムーズに売却へ。</p>
      </div>
    </div>
    <br>
    <div class="kaitetubtn">
      <a href="#" 
        class="jump-link" 
        data-target="jump2">プラン内容を見る</a>
    </div>
    <br>
    <hr>
  </section>

  <!--  企業の強み、他社との比較 -->
  <section class="section04">
    <h1>不動産の売却から相続・管理まで、ワンストップで一気に解決！</h1>
    <h2>誰も住まなくなった実家…どうすればいい？</h2>
    <p class="lead">空き家のお悩みを、喜一がワンストップで解決した実例をご紹介します。</p>

    <div class="case-grid">
      <div class="case-item">
        <img class="before-img" src="{{ asset('img/shinpai_woman.png') }}" alt="Beforeイメージ">
        <!-- パターン1 -->
        <div class="case-card">
          <div class="before">
            <h3>Before</h3>
            <p>「実家が空き家になったけど、何が正解かわからず不安…」</p>
          </div>
          <div class="arrow">→</div>
          <div class="after">
            <h3>After</h3>
            <p><strong>0円〜管理スタートで安心!</strong><br>
            さらに、わからないことも相談できて心強い。</p>
          </div>
          
        </div>  
        <img class="after-img" src="{{ asset('img/pose_kandou_woman.png') }}" alt="Afterイメージ">
      </div>
      <!-- パターン2 -->
      <div class="case-item">
        <img class="before-img" src="{{ asset('img/shinpai_ojisan.png') }}" alt="Beforeイメージ">
        <div class="case-card">
          <div class="before">
            <h3>Before</h3>
            <p>「古い家だから売れないと思っていた…」</p>
          </div>
          <div class="arrow">→</div>
          <div class="after">
            <h3>After</h3>
            <p><strong>予想以上に早期売却！</strong><br>
            固定資産税の負担から解放。</p>
          </div>
        </div>
        <img class="after-img" src="{{ asset('img/money_zaisan.png') }}" alt="Afterイメージ">
      </div>
      <!-- パターン3 -->
      <div class="case-item">
       <img class="before-img" src="{{ asset('img/shinpai_man.png') }}" alt="Beforeイメージ">
        <div class="case-card">
          <div class="before">
            <h3>Before</h3>
            <p>「使い道がなく、ただ放置していた…」</p>
          </div>
          <div class="arrow">→</div>
          <div class="after">
            <h3>After</h3>
            <p><strong>賃貸需要を発見！</strong><br>
            リノベーションで収益化に成功。</p>
          </div>
        </div>
        <img class="after-img" src="{{ asset('img/money_futoppara.png') }}" alt="Afterイメージ">
      </div>
    </div>

    <div class="cta">
      <p>あなたの空き家も、ワンストップで解決できます。</p>
    </div>
  </section>

  <a id="jump2"></a>
  <!-- プラン内容 -->
  <section class="section06">
    <br>
    <br>
    <h1>プラン内容</h1>
    <br>
    <div class="center06-container">
      <div class="Container">
        <div class="Box-Container">
          <div class="Box"></div>
          <div class="Box"></div>
          <div class="Box"></div>
          <div class="Box"></div>
          <div class="Box"></div>
          <div class="Box"></div>
          <!-- 必要な数の.Box要素を追加 -->
        </div>
      <div class="Arrow left"><</div>
      <div class="Arrow right">></div>
    </div>
    <br>
    <br>
    <div class="pln-btn">
      <a href="#" 
        class="jump-link" 
        data-target="jump5">お問い合わせ ✉</a>
    </div>
  </div>
    <br>
    <hr>
    <br>
  </section>
    <a id="jump3"></a>
    
  <!-- ご利用までの流れ -->
  <section class="section07">
    <h1>ご利用までの流れ</h1>
    <hr>
    <br>
    <div class="center07-container">
      <img src="{{ asset ('img/2025-08-12 104439.png') }}" alt="ご利用までの流れ" class="step">
    </div>
    <ul class="step-box">
      <li class="step-item">お問い合わせ<br><br>本ページから、ご相談内容、お客様情報をご入力の上、お問い合わせください。</li>
      <li class="step-item">お打ち合わせ<br><br>本ページから、ご入力いただいた情報から最適な管理プランをご提案いたします。</li>
      <li class="step-item">ご契約<br><br>ご選択いただいたプランを基に、正式なお手続きを進めます。</li>
      <li class="step-item">お支払い<br><br>初月のみ先払い、その後は毎月のお支払いとなります。</li>
      <li class="step-item">サービス開始<br><br>お支払いが確認でき次第、サービスを開始いたします。</li>
    </ul>
    <br>
    <hr>
    <br>
  </section>

  <!-- お客様の声・事業に対する思いなど -->
    <section class="section08">
      <h2>信頼の理由</h2>
      <ul class="proof-list">
        <li>
          <img class="book" src="{{ asset('img/book_tate.png') }}" alt="本">
          管理・売買・仲介など100件以上の実績
        </li><hr>
        <li>
          宅建士 / 空き家再生診断士（予定） / 空き家相談士（予定）
          <img class="tango" src="{{ asset('img/anki_card.png') }}" alt="単語帳">
        </li><hr>
        <li>
          <img class="furusatonouzei" src="{{ asset('img/furusato_nouzei.png') }}" alt="ふるさと納税">
          名古屋市ふるさと納税にも出品予定
        </li><hr>
        <li>
          税理士・弁護士・司法書士・建築会社と提携
          <img class="aksyu" src="{{ asset ('img/business_akusyu.png') }}" alt="握手">
        </li><hr>
      </ul>
    </section>
    <a id="jump4"></a>

  <!-- FAQ -->
  <section class="section09">
    <br>
    <div class="boder">
      <div style="border-top: 3px dotted #E9E3DD; margin: 20px 0;"></div>
    </div>
    <div class="FAQ-inner1">
      <h1>FAQ</h1>
    <div class="FAQ-inner2">
      <details class="q1">
        <summary>相談すると必ず契約しないといけないのですか？</summary>
        <p>いいえ、ご相談だけでも大歓迎です。無理な勧誘や契約の強制は一切ありませんので、安心してご相談ください。</p>
      </details>
      <details class="q1">
        <summary>遠方に住んでいても依頼できますか？</summary>
        <p>はい、可能です。電話・メール・オンライン面談などで対応できるほか、必要に応じて現地確認も弊社が代行いたします。</p>
      </details>
      <details class="q1">
        <summary>どうして0円でサービスを提供できるのですか？</summary>
        <p>売却や管理のご契約をいただいた際に、仲介手数料や管理費用などから収益を得る仕組みになっているため、ご相談や初期費用を無料にできています。</p>
      </details>
      <details class="q1">
        <summary>空き家の管理だけでもお願いできますか？</summary>
        <p>はい、売却や活用の予定がなくても管理のみで承ります。定期巡回や簡易清掃など、ご希望に応じたプランをご用意しています。</p>
      </details>
      <details class="q1">
        <summary>相続についての相談もできますか？</summary>
        <p>可能です。相続に詳しい専門家（司法書士・税理士）とも連携しておりますので、登記や税金に関するご相談もワンストップで対応いたします。</p>
      </details>
      <details class="q1">
        <summary>土地や建物の活用方法についても提案してもらえますか？</summary>
        <p>はい。賃貸・駐車場・リフォーム活用など、多角的な視点から最適な活用方法をご提案いたします。</p>
      </details>
    </div>
      <br>
      <br>
      <br>
    </div>
    <div class="boder">
      <div style="border-top: 3px dotted #E9E3DD; margin: 20px 0;"></div>
    </div>
    <br>
  </section>
<br>
  <!-- クロージング -->
  <section class="section10">
    <div class="wrap">
      <h2 id="closing-title">空き家のお悩み、そのままにしていませんか?</h2>
      <p class="lead">
        固定資産税や防犯リスクなど、空き家を放置していると大きな負担になることもあります。<br>
        早めのご相談が、安心と資産を守る第一歩です。
      </p>
      <p class="lead">
        地元・名古屋に根ざした不動産会社として、管理から売却・活用まできめ細かくサポート。<br>
        遠方にお住まいの方も安心してお任せいただけます。
      </p>
      <div class="cta">
        <h3>「相談だけ」でも大歓迎です</h3>
        <p>契約の有無にかかわらず、まずはお気軽にご相談ください。<br>
        あなたの状況に合わせた解決方法をご提案いたします。</p>
      </div>
    </div>
  </section>
  <hr>

  <a id="jump5">ここはjump5というidがついた場所です</a>

  <!-- お問い合わせ -->
  <section class="section11">
    <h1>お問い合わせ</h1>
    <div class="center09-container">
      <img src="{{ asset('img/2025-08-12 145539.png') }}" class="お問い合わせ"> 
    </div>
    <p class="click"><u>各項目を入力後、ページ下部の「確認画面へ」ボタンをクリックしてください。</u></p>
    <br>
    <div class="information">
      <form method="POST" action="{{ route('contact.confirm') }}" id ="contactForm">
        @csrf
        <h4 class="rows">ご相談内容をお聞かせください。</h4>
        <div class="user-info1">
            <div class="user-info1">
              <p class="label">| お問い合わせ項目 |</p>
              <!-- エラーメッセージ表示用の領域 -->
              <div class="checkbox">
                <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
                <p id="inquiryError" class="error">&nbsp;</p>
                <input type="checkbox" id="inq1" name="inquiry[]" value="空き家の管理に関するご相談">
                <label for="inq1">例: 空き家の管理に関するご相談</label><br>
                <input type="checkbox" id="inq2" name="inquiry[]" value="空き家の売却に関するご相談">
                <label for="inq2">例: 空き家の売却に関するご相談</label><br>
                <input type="checkbox" id="inq3" name="inquiry[]" value="その他">
                <label for="inq3">例: その他</label>
              </div>
              <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
              <p id="commentError" class="error">&nbsp;</p>
              <textarea name="comment" minlength="11"
                placeholder="11文字以上で入力してください。ご相談内容を入力してください" 
                cols="40" rows="8">{{ old('comment') }}</textarea>
            </div>
        </div>
        <br>
        <hr>
        
        <!-- フォーム -->
        <div class="user-info2">
          <h3>お客様情報を入力ください。</h3>
          <h4>お客様情報</h4>
          <div class="text">
            <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
            <p id="nameError" class="error">&nbsp;</p> 
            <label for="name">| お名前 |<span style="color:red;">*必須</span></label><br>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="例：山田太郎">
            
            <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
            <p id="furiganaError" class="error">&nbsp;</p>
            <label for="furigana">| フリガナ |<span style="color:red;">*必須</span></label><br>
            <input type="text" name="furigana" value="{{ old('furigana') }}" placeholder="例：ヤマダタロウ">

            <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
            <p id="emailError" class="error">&nbsp;</p>
            <label for="email">| メールアドレス |<span style="color:red;">*必須</span></label><br>
            <input type="text" name="email" value="{{ old('email') }}" placeholder="例：xxxx@xx.xx"><br><br>

            <label for="tel">| 電話番号 |</label><br>
            <input type="text" name="tel" maxlength="11" pattern="\d{10,11}" placeholder="例：09012345678" value="{{ old('tel') }}"><br><br>

            <h4>お客様の物件情報</h4>
            <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
            <p id="postcodeError" class="error">&nbsp;</p>
            <label for="postcode">| 郵便番号 |<span style="color:red;">*必須</span></label><br>
            <input type="text" id="postcode" name="postcode" placeholder="入力してください。例123-456" value="{{ old('postcode') }}" >
            <div class="add">※郵便番号を入力すると住所の一部が自動で入力されます。</div>
            <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
            <p id="prefError" class="error">&nbsp;</p>
            <label for="pref">| 都道府県 |</label><br>
            <select name="pref" id="pref">
              <option value="">選択してください</option>
              @php
                $prefs = ["北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県",
                          "埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県",
                          "岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県",
                          "鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県",
                          "福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"];
              @endphp
                  @foreach($prefs as $p)
                      <option value="{{ $p }}" {{ old('pref') === $p ? 'selected' : '' }}>{{ $p }}</option>
                  @endforeach
            </select>

            <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
            <p id="addressError" class="error">&nbsp;</p>
            <label for="address">| 町域番地 |</label><br>
            <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="入力してください"><br><br>

            <label for="building">| 建物名・部屋番号 |</label><br>
            <input type="text" name="building" value="{{ old('building') }}" placeholder="入力してください"><br><br>
          </div> 
            <div class="privacy-policy">
            <div class="privacy-policy__item">
              <h2 class="privacy-policy__item__title">個人情報の取り扱いについて</h2>
              <p class="privacy-policy__item__title">第1条（個人情報）</p>
              <p class="privacy-policy__item__desc">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
            </div>
            <div class="privacy-policy__item">
              <p class="privacy-policy__item__title">第1条（個人情報）</p>
            <p class="privacy-policy__item__desc">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
            </div>
            <div class="privacy-policy__item">
              <p class="privacy-policy__item__title">第1条（個人情報）</p>
              <p class="privacy-policy__item__desc">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
            </div>
            <div class="privacy-policy__item">
              <p class="privacy-policy__item__title">第1条（個人情報）</p>
              <p class="privacy-policy__item__desc">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
            </div>
            <div class="privacy-policy__item">
              <p class="privacy-policy__item__title">第1条（個人情報）</p>
              <p class="privacy-policy__item__desc">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
            </div>
          </div>
          <div class="agree">【個人情報の取り扱いについて】にご同意いただける場合は、「同意する」にチェックを入れ、<br>「入力内容の確認」ボタンを押して確認画面へお進みください。</div>
          <!-- エラーメッセージが「ある・ない」で高さが変わらないように設定 -->
          <p id="programmingError" class="error">&nbsp;</p>
          <input type="checkbox" name="programming" value="同意"> 上記に同意した上で問い合わせます。
            <br><br>
            <div class="information-btn">
              <button type="submit" style="color:#E9E3DD;">入力した内容を確認する</button>
            </div>
        </form>
      </div>
    </div>
  </section>
  <br><br><br>
  
  <script src="{{ asset('js/java.js') }}"></script>
  @include('footer')
  </body>
</html>
