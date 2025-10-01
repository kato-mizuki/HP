const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");

hamburger.addEventListener("click", () => {
  navMenu.classList.toggle("show");
});


window.addEventListener("DOMContentLoaded", () => {

  // ページ内リンククリック処理
  document.querySelectorAll('a.nav-item').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.dataset.target;

      if (window.location.pathname.endsWith(link.getAttribute('href'))) {
            // 同ページ内スクロール → URL は変更しない
            const el = document.getElementById(targetId);
            if (el) el.scrollIntoView({ block: "start", behavior: "smooth" });
      } else {
            // 他ページジャンプ
            sessionStorage.setItem("scrollToJump", targetId);
            window.location.href = link.getAttribute('href');
      }
    });
  });

  // 遷移先ページで
  window.addEventListener("load", () => {
    const scrollId = sessionStorage.getItem("scrollToJump");
    if (!scrollId) return;

    const el = document.getElementById(scrollId);
    if (el) el.scrollIntoView({ block: "start" }); // smooth なしで即ジャンプ

    sessionStorage.removeItem("scrollToJump");
  });
});
