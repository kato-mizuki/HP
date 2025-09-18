{{-- resources/views/emails/contact.blade.php --}}

<p>以下の内容でお問い合わせがありました。</p>

<ul>
    <li><strong>名前:</strong> {{ $data['name'] }}</li>
    <li><strong>フリガナ:</strong> {{ $data['furigana'] }}</li>
    <li><strong>メールアドレス:</strong> {{ $data['email'] }}</li>
    <li><strong>電話番号:</strong> {{ $data['tel'] ?? '未入力' }}</li>
    <li><strong>郵便番号:</strong> {{ $data['postcode'] ?? '未入力' }}</li>
    <li><strong>都道府県:</strong> {{ $data['pref'] ?? '未入力' }}</li>
    <li><strong>住所:</strong> {{ $data['address'] ?? '未入力' }}</li>
    <li><strong>建物名:</strong> {{ $data['building'] ?? '未入力' }}</li>
    <li><strong>お問い合わせ項目:</strong> {{ implode(', ', $data['inquiry'] ?? []) }}</li>
</ul>

<p><strong>ご相談内容:</strong></p>
<p>{!! nl2br(e($data['comment'])) !!}</p>
