<!DOCTYPE html>
<html lang="ja">
    <body>
    <!-- フッター -->
        <section class="section12">
            <footer>
                <div class="center10-container1">
                    <!-- ロゴ -->
                    <img src="{{asset('img/1289_color.png') }}" class="logo2" >

                    <!-- フッター情報リスト -->
                    <ul class="footer-information">
                        <li class="information-item">営業時間<br>xx:xx ~ xx:xx</li>
                        <li class="information-item">所在地<br>xxxxxxxxxxxxx</li>
                        <li class="information-item">TEL <i class="fa-solid fa-phone"></i><br>xxx-xxx-xxxx</li>
                        <li class="information-item">Mail✉<br>xxx-xxx-xxxx</li>
                        <!-- TOPボタンもliにする -->
                        <li class="information-item top-btn">
                            <a href="{{route('top')}}" id="page-top">TOP</a>
                        </li>
                    </ul>
                    <!-- SNSアイコン -->
                    <div class="sns">
                        <ul class="sns-ikon">
                            <li class="sns-links">
                                <a href="https://www.instagram.com/ki_i_chi_official/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.tiktok.com/@kiichi.corp_official" target="_blank">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                                <a href="https://x.com/kiichibiz6x" target="_blank">
                                    <i class="fa-brands fa-square-x-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <small class="p-footer__copyLight">© 2025 All Rights Reserved.</small>
        </section>
    </body>
</html>