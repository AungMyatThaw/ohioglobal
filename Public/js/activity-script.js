const translations = {
  en: {
    nav: {
      home: "Home",
      about: "About",
      activity: "Activity",
      service: "Service",
      contact: "Contact"
    },
    activities: {
      title: "Activity Gallery",
      description: "A glimpse into our past events and activities, showcasing our team and community spirit."
    },
    caption: {
      title: "Our companies' Links:",

    }
  },
  jp: {
    nav: {
      home: "ホーム",
      about: "会社概要",
      activity: "活動",
      service: "サービス",
      contact: "お問い合わせ"
    },
    activities: {
      title: "活動ギャラリー",
      description: "私たちの過去のイベントや活動の様子をご紹介します。チームやコミュニティの雰囲気をご覧ください。"
    },
    caption: {
      title: "私たちの提携企業",

    }
  }
};


let currentLang = localStorage.getItem("language") || 'en';

function setLanguage(lang) {
  currentLang = lang;
  localStorage.setItem("language", lang);

  const t = translations[lang];

  // Nav
  document.getElementById("nav-home").textContent = t.nav.home;
  document.getElementById("nav-about").textContent = t.nav.about;
  document.getElementById("nav-activity").textContent = t.nav.activity;
  document.getElementById("nav-service").textContent = t.nav.service;
  document.getElementById("nav-contact").textContent = t.nav.contact;

  // Activities Section
  document.getElementById("activities-title").textContent = t.activities.title;
  document.getElementById("activities-description").textContent = t.activities.description;
  // Footer
  document.getElementById("footer-home").textContent = t.nav.home;
  document.getElementById("footer-about").textContent = t.nav.about;
  document.getElementById("footer-activity").textContent = t.nav.activity;
  document.getElementById("footer-service").textContent = t.nav.service;
  document.getElementById("footer-contact").textContent = t.nav.contact;

  document.getElementById("caption-title").textContent = t.caption.title;






  // Update active button
  document.querySelectorAll('.lang-btn').forEach(btn => btn.classList.remove('active'));
  if (lang === 'en') {
    document.querySelector('img[alt="UK Flag"]').parentElement.classList.add('active');
  } else if (lang === 'jp') {
    document.querySelector('img[alt="JP Flag"]').parentElement.classList.add('active');
  }
}


// function showPhotos(year) {
//   const allGroups = document.querySelectorAll('.year-group');
//   allGroups.forEach(group => {
//     group.style.display = 'none';
//   });

//   const selectedGroup = document.getElementById(`year-${year}`);
//   if (selectedGroup) {
//     selectedGroup.style.display = 'flex';
//   }
// }
function showPhotos(year) {
  // 🔹 Remove 'active' from all buttons
  document.querySelectorAll('.year-btn').forEach(btn => btn.classList.remove('active'));

  // 🔹 Add 'active' to the clicked button
  const clickedBtn = document.querySelector(`.year-btn[onclick="showPhotos('${year}')"]`);
  if (clickedBtn) {
    clickedBtn.classList.add('active');
  }

  // 🔹 Hide all photo groups
  const allGroups = document.querySelectorAll('.year-group');
  allGroups.forEach(group => {
    group.style.display = 'none';
  });

  // 🔹 Show the selected group
  const selectedGroup = document.getElementById(`year-${year}`);
  if (selectedGroup) {
    selectedGroup.style.display = 'grid'; // Or 'grid' if preferred
  }
}

///lightbox
function showLightbox(imgSrc) {
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightbox-img');
  lightboxImg.src = imgSrc;
  lightbox.style.display = 'flex';
}

function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
}
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}



// function showPhotos(year) {
//   fetch(`fetch.php?year=${year}`)
//     .then(response => response.json())
//     .then(data => {
//       const gallery = document.getElementById('gallery');
//       gallery.innerHTML = ''; // clear previous

//       if (data.length === 0) {
//         gallery.textContent = 'No photos found.';
//         return;
//       }

//       data.forEach(photo => {
//         const img = document.createElement('img');
//         // Adjust this path to where your images are stored relative to gallery.php
//         img.src = `/ohioglobal/gallery/${photo.year}/${photo.month}/${photo.filename}`;
//         img.alt = photo.original_name;
//         img.style.width = '200px';  // optional styling
//         img.style.margin = '5px';

//         gallery.appendChild(img);
//       });
//     })
//     .catch(err => {
//       console.error('Error fetching photos:', err);
//     });
// }



