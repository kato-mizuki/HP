window.addEventListener("DOMContentLoaded", () => {

  // ページ内リンククリック処理
  document.querySelectorAll('a.nav-item').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.dataset.target;

      if (window.location.pathname.endsWith(link.getAttribute('href'))) {
            // 同ページ内スクロール → URL は変更しない
            const el = document.getElementById(targetId);
            if (el) el.scrollIntoView({ behavior: "smooth", block: "start" });
      } else {
            // 他ページジャンプ
            sessionStorage.setItem("scrollToJump", targetId);
            window.location.href = link.getAttribute('href');
      }
    });
  });

  // 他ページからのスクロール
  const scrollId = sessionStorage.getItem("scrollToJump");
  if (scrollId) {
    // 1秒後にスクロールさせる方法（body全体が読み込まれた後）
    setTimeout(() => {
      const el = document.getElementById(scrollId);
      if (el) el.scrollIntoView({ behavior: "smooth", block: "start" });
      sessionStorage.removeItem("scrollToJump");
    }, 50); // 50ms 程度の遅延でほぼ確実に要素取得可能
  }
});
