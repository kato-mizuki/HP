const container = document.querySelector('.Container');
const boxContainer = document.querySelector('.Box-Container');
const leftArrow = document.querySelector('.Arrow.left');
const rightArrow = document.querySelector('.Arrow.right');
const scrollAmount = 300; // 1クリックごとの移動量（Boxの幅に合わせる）

const images = [
  "img/back1.jpeg",
  "img/back2.jpeg",
  "img/back3.jpeg",
];

let index = 0;
const intervalTime = 3000; // 3秒ごとに切り替え

function changeBackground() {
  const section = document.getElementById("slideshow");
  if (!section) return;

  section.style.backgroundImage = `url(${images[index]})`;
  index = (index + 1) % images.length;
}

// 初期背景表示
window.addEventListener("DOMContentLoaded", () => {
  changeBackground();
  setInterval(changeBackground, intervalTime);
});

// キャッチコピーのサイズ
function fitText(el) {
  const parentWidth = el.parentElement.offsetWidth;
  let fontSize = 100; // 最大フォントサイズ（px）
  el.style.fontSize = fontSize + "px";

  while (el.scrollWidth > parentWidth && fontSize > 10) {
    fontSize--;
    el.style.fontSize = fontSize + "px";
  }
}

window.addEventListener("load", () => {
  const el = document.querySelector(".catchcopy");
  fitText(el);
});

window.addEventListener("resize", () => {
  const el = document.querySelector(".catchcopy");
  fitText(el);
});
// //Boxの設定
// document.addEventListener("DOMContentLoaded", () => {
//   const boxContainer = document.querySelector(".Box-Container");
//   const boxes = document.querySelectorAll(".Box");
//   const leftArrow = document.querySelector(".Arrow.left");
//   const rightArrow = document.querySelector(".Arrow.right");

//   // 1つのBox幅を取得
//   const scrollAmount = boxes[0].offsetWidth;
//   // Boxを複製してループ感を出す
//   boxContainer.innerHTML += boxContainer.innerHTML;

//   let currentScrollAmount = scrollAmount; // 最初は1枚目を表示
//   const totalWidth = boxContainer.scrollWidth;
//   const halfWidth = totalWidth / 2; // 元のBox群の幅

//   // 初期位置セット
//   boxContainer.style.transform = `translateX(-${currentScrollAmount}px)`;

//   function moveSlide(direction = "right") {
//     if (direction === "right") {
//       currentScrollAmount += scrollAmount;
//       if (currentScrollAmount >= halfWidth) {
//         // 半分進んだら瞬時に戻す
//         boxContainer.style.transition = "none";
//         currentScrollAmount = 0;
//         boxContainer.style.transform = `translateX(0)`;
//         requestAnimationFrame(() => {
//           requestAnimationFrame(() => {
//             boxContainer.style.transition = "transform 0.5s ease";
//             currentScrollAmount = scrollAmount;
//             boxContainer.style.transform = `translateX(-${currentScrollAmount}px)`;
//           });
//         });
//         return;
//       }
//     } else {
//       currentScrollAmount -= scrollAmount;
//       if (currentScrollAmount < 0) {
//         // 左に行きすぎたら末尾へジャンプ
//         boxContainer.style.transition = "none";
//         currentScrollAmount = halfWidth - scrollAmount;
//         boxContainer.style.transform = `translateX(-${currentScrollAmount}px)`;
//         requestAnimationFrame(() => {
//           requestAnimationFrame(() => {
//             boxContainer.style.transition = "transform 0.5s ease";
//             currentScrollAmount -= scrollAmount;
//             boxContainer.style.transform = `translateX(-${currentScrollAmount}px)`;
//           });
//         });
//         return;
//       }
//     }

//     boxContainer.style.transition = "transform 0.5s ease";
//     boxContainer.style.transform = `translateX(-${currentScrollAmount}px)`;
//   }

//   // 自動スライド
//   setInterval(() => moveSlide("right"), 5000);  //5秒ごとにスライド

//   // クリック操作
//   rightArrow.addEventListener("click", () => moveSlide("right"));
//   leftArrow.addEventListener("click", () => moveSlide("left"));
// });

//　バリデート設定
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");

  form.addEventListener("submit", function (e) {
    let firstErrorEl = null; // 最初のエラー要素を記録

    // --- お問い合わせチェックボックスのバリデーション文言設定 ---
    const inquiryCheckboxes = document.querySelectorAll('input[name="inquiry[]"]');
    const inquiryError = document.getElementById("inquiryError");
    let inquiryChecked = false;
    inquiryCheckboxes.forEach(cb => { if (cb.checked) inquiryChecked = true; });
    if (!inquiryChecked) {
      inquiryError.textContent = "お問い合わせ項目を選択してください。";
      if (!firstErrorEl) firstErrorEl = inquiryError;
    } else {
      inquiryError.textContent = ""; // エラークリア
    }

    // --- お問い合わせ内容のバリデーション文言設定 ---
    const textarea = document.querySelector('textarea[name="comment"]');
    const commentError = document.getElementById("commentError");
    const commentValue = textarea.value.trim();
    if (commentValue.length === 0 || commentValue.length < 10) {
      commentError.textContent = "ご相談内容を入力してください。※10文字以上";
      if (!firstErrorEl) firstErrorEl = commentError;
    } else {
      commentError.textContent = "";
    }

    // --- |お名前|のバリデーション文言設定 ---
    const inputName = document.querySelector('input[name="name"]');
    const nameError = document.getElementById("nameError");
    if (inputName.value.trim().length === 0) {
      nameError.textContent = "| お名前 |を入力してください。";
      if (!firstErrorEl) firstErrorEl = nameError;
    } else {
      nameError.textContent = "";
    }

    // --- |フリガナ|のバリデーション文言設定 ---
    const inputFurigana = document.querySelector('input[name="furigana"]');
    const furiganaError = document.getElementById("furiganaError");
    if (inputFurigana.value.trim().length === 0) {
      furiganaError.textContent = "| フリガナ |を入力してください。";
      if (!firstErrorEl) firstErrorEl = furiganaError;
    } else {
      furiganaError.textContent = "";
    }

    // --- |メールアドレス|のバリデーション文言設定 ---
    const inputEmail = document.querySelector('input[name="email"]');
    const emailError = document.getElementById("emailError");
    const emailValue = inputEmail.value.trim();
    if (emailValue.length === 0) {
      emailError.textContent = "| メールアドレス |を入力してください。";
      if (!firstErrorEl) firstErrorEl = emailError;
    } else {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailValue)) {
        emailError.textContent = "メール形式で入力してください。";
        if (!firstErrorEl) firstErrorEl = emailError;
      } else {
        emailError.textContent = "";
      }
    }

    // --- |郵便番号|のバリデーション文言設定 ---
    const inputPostcode = document.querySelector('input[name="postcode"]');
    const postcodeError = document.getElementById("postcodeError");
    if (inputPostcode.value.trim().length === 0) {
      postcodeError.textContent = "| 郵便番号 |を入力してください。";
      if (!firstErrorEl) firstErrorEl = postcodeError;
    } else {
      postcodeError.textContent = "";
    }

    // --- |都道府県|のバリデーション文言設定 ---
    const inputPref = document.querySelector('select[name="pref"]');
    const prefError = document.getElementById("prefError");
    if (inputPref.value.trim().length === 0) {
      prefError.textContent = "| 都道府県 |を入力してください。";
      if (!firstErrorEl) firstErrorEl = prefError;
    } else {
      prefError.textContent = "";
    }

    // --- |町域番地|のバリデーション文言設定 ---
    const inputAddress = document.querySelector('input[name="address"]');
    const addressError = document.getElementById("addressError");
    if (inputAddress.value.trim().length === 0) {
      addressError.textContent = "| 町域番地 |を入力してください。";
      if (!firstErrorEl) firstErrorEl = addressError;
    } else {
      addressError.textContent = "";
    }

    // --- 同意チェックボックスのバリデーション ---
    const agreeCheckbox = document.querySelector('input[name="programming"]');
    const agreeError = document.getElementById("programmingError");
    if (!agreeCheckbox.checked) {
      agreeError.textContent = "「個人情報の取り扱いについて」をご確認後、チェックしてください。";
      if (!firstErrorEl) firstErrorEl = agreeError;
    } else {
      agreeError.textContent = "";
    }

    // --- エラーがあれば送信中止＆一番上のエラーまでスクロール＆フォーカス ---
    if (firstErrorEl) {
      e.preventDefault();
      firstErrorEl.scrollIntoView({ behavior: "smooth", block: "center" });
      firstErrorEl.focus();
    }
  });
});

//郵便番号検索
document.getElementById("postcode").addEventListener("blur", function() {
  // ハイフンをすべて削除
  const postcode = this.value.replace(/-/g, "");
  
  // 郵便番号が7桁でなければ終了
  if (postcode.length !== 7) return;

  fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${postcode}`)
    .then(res => res.json())
    .then(data => {
      if (data.results) {
        const result = data.results[0];
        document.getElementById("pref").value = result.address1;
        document.getElementById("address").value = result.address2 + result.address3;
      } else {
        alert("郵便番号に該当する住所が見つかりません。");
      }
    })
    .catch(() => {
      alert("住所取得に失敗しました。ネット環境を確認してください。");
    });
});

// ===== backToTop ボタン =====
// スクロールしたらボタン表示するために定義する
const backToTop = document.getElementById('backToTop');
// スクロールしたらボタン表示
window.addEventListener('scroll', () => {
  if (window.scrollY > 200) {
    backToTop.style.display = 'block';
  } else {
    backToTop.style.display = 'none';
  }
});

// クリックで上部に戻る
backToTop.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // スムーズスクロール
  });
});

// リンク処理
window.addEventListener("DOMContentLoaded", () => {

  // ページ内リンククリック処理
  document.querySelectorAll('a.jump-link').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.dataset.target;
            // 同ページ内スクロール → URL は変更しない
            const el = document.getElementById(targetId);
            if (el) el.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash === "#jump5") {
        // まずスクロールさせる（ブラウザ標準挙動を待つ）
        setTimeout(() => {
            history.replaceState(null, null, window.location.pathname);
        }, 100); // 0.1秒待ってから消す
    }
});
