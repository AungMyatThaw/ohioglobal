// 🔹 Translations (keep your existing translations object)
const translations = {
  en: {
    nav: {
      home: "Home",
      about: "About",
      activity: "Activity",
      service: "Service",
      contact: "Contact",
    },
    activities: {
      title: "Activity Gallery",
      description:
        "A glimpse into our past events and activities, showcasing our team and community spirit.",
    },
    caption: { title: "Our companies' Links:" },
  },
  jp: {
    nav: {
      home: "ホーム",
      about: "会社概要",
      activity: "活動",
      service: "サービス",
      contact: "お問い合わせ",
    },
    activities: {
      title: "活動ギャラリー",
      description:
        "私たちの過去のイベントや活動の様子をご紹介します。チームやコミュニティの雰囲気をご覧ください。",
    },
    caption: { title: "私たちの提携企業" },
  },
};

// 🔹 Get stored language or default to English
let currentLang = localStorage.getItem("language") || "en";

// 🔹 Helper to safely set textContent
function safeSetText(id, text) {
  const el = document.getElementById(id);
  if (el) el.textContent = text;
}

// 🔹 Apply language translations
function setLanguage(lang) {
  currentLang = lang;
  localStorage.setItem("language", lang);

  const t = translations[lang];

  // Nav
  safeSetText("nav-home", t.nav.home);
  safeSetText("nav-about", t.nav.about);
  safeSetText("nav-activity", t.nav.activity);
  safeSetText("nav-service", t.nav.service);
  safeSetText("nav-contact", t.nav.contact);

  // Activities Section
  safeSetText("activities-title", t.activities.title);
  safeSetText("activities-description", t.activities.description);

  // Footer
  safeSetText("footer-home", t.nav.home);
  safeSetText("footer-about", t.nav.about);
  safeSetText("footer-activity", t.nav.activity);
  safeSetText("footer-service", t.nav.service);
  safeSetText("footer-contact", t.nav.contact);

  safeSetText("caption-title", t.caption.title);

  // Update active button
  document
    .querySelectorAll(".lang-btn")
    .forEach((btn) => btn.classList.remove("active"));
  if (lang === "en") {
    const ukBtn = document.querySelector('img[alt="UK Flag"]')?.parentElement;
    if (ukBtn) ukBtn.classList.add("active");
  } else if (lang === "jp") {
    const jpBtn = document.querySelector('img[alt="JP Flag"]')?.parentElement;
    if (jpBtn) jpBtn.classList.add("active");
  }
}

// 🔹 Language button click events (replace inline onclick)
document.querySelectorAll(".lang-btn img").forEach((img) => {
  img.addEventListener("click", (e) => {
    const lang = e.target.alt === "UK Flag" ? "en" : "jp";
    setLanguage(lang);
  });
});

// 🔹 Photo gallery filtering
// function showPhotos(year) {
//   // Remove active from all buttons
//   document
//     .querySelectorAll(".year-btn")
//     .forEach((btn) => btn.classList.remove("active"));

//   // Add active to clicked button
//   const clickedBtn = document.querySelector(
//     `.year-btn[onclick="showPhotos('${year}')"]`
//   );
//   if (clickedBtn) clickedBtn.classList.add("active");

//   // Hide all photo groups
//   document
//     .querySelectorAll(".year-group")
//     .forEach((group) => (group.style.display = "none"));

//   // Show selected group
//   const selectedGroup = document.getElementById(`year-${year}`);
//   if (selectedGroup) selectedGroup.style.display = "grid"; // or "flex" if you prefer
// }

// 🔹 Lightbox
function showLightbox(imgSrc) {
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  if (lightbox && lightboxImg) {
    lightboxImg.src = imgSrc;
    lightbox.style.display = "flex";
  }
}

function closeLightbox() {
  const lightbox = document.getElementById("lightbox");
  if (lightbox) lightbox.style.display = "none";
}

// 🔹 Scroll to top
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// 🔹 Initialize on page load
document.addEventListener("DOMContentLoaded", () => {
  setLanguage(currentLang); // Apply stored language

  // Optional: if you want the first year photos to show by default
  const firstYearBtn = document.querySelector(".year-btn");
  if (firstYearBtn) firstYearBtn.click();
});
