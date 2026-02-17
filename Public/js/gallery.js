function showPhotos(year) {
  fetch(`fetch_photos.php?year=${year}`)
    .then((response) => response.json())
    .then((data) => {
      const gallery = document.getElementById("gallery");
      gallery.innerHTML = ""; // clear previous
      gallery.classList.add("year-group");
      

      if (data.length === 0) {
        gallery.textContent = "No photos found.";
        return;
      }

      const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];

      data.forEach((photo) => {
        const figure = document.createElement("figure");

        const img = document.createElement("img");
        img.classList.add("shadow-effect");
        img.src = `/one-sided/Resources/gallery/uploads/${photo.year}/${photo.month}/${photo.filename}`;
        img.alt = photo.original_name;
        img.onclick = () => showLightbox(img.src); // 👈 attach the click event

        const caption = document.createElement("figcaption");
        const monthIndex = parseInt(photo.month, 10) - 1;
        caption.textContent = `${monthNames[monthIndex]} - ${photo.year}`;

        figure.appendChild(img);
        figure.appendChild(caption);
        gallery.appendChild(figure);
      });
    })
    .catch((err) => {
      console.error("Error fetching photos:", err);
    });
}

fetch("get_years.php")
  .then((res) => res.json())
  .then((years) => {
    const container = document.getElementById("year-buttons");
    container.innerHTML = "";

    let before2025Shown = false;

    years.forEach((year) => {
      if (year < 2025 && !before2025Shown) {
        const beforeBtn = document.createElement("button");
        beforeBtn.textContent = "2024 & Before";
        beforeBtn.classList.add("year-btn", "shadow-btn");
        beforeBtn.onclick = () => {
          setActive(beforeBtn);
          showPhotos("before2025");
        };
        container.appendChild(beforeBtn);
        before2025Shown = true;
      }

      if (year >= 2025) {
        const btn = document.createElement("button");
        btn.textContent = year;
        btn.classList.add("year-btn");
        btn.onclick = () => {
          setActive(btn);
          showPhotos(year);
        };
        container.appendChild(btn);
      }
    });

    const latestBtn = container.querySelector(".year-btn");
    if (latestBtn) {
      latestBtn.classList.add("active");
      showPhotos(
        latestBtn.textContent === "2024 & Before"
          ? "before2025"
          : latestBtn.textContent
      );
    }
  });

function setActive(button) {
  document
    .querySelectorAll(".year-btn")
    .forEach((btn) => btn.classList.remove("active"));
  button.classList.add("active");
}

let currentPhotoPath = "";

function showLightbox(photoSrc) {
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");

  lightboxImg.src = photoSrc;
  currentPhotoPath = photoSrc;

  lightbox.classList.add("show");
  lightbox.style.display = "flex";
}

function closeLightbox() {
  const lightbox = document.getElementById("lightbox");
  lightbox.classList.remove("show");
  lightbox.style.display = "none";
  document.getElementById("lightbox-img").src = "";
}

document
  .getElementById("trash-icon")
  .addEventListener("click", deleteZoomedPhoto);

document.getElementById("lightbox").addEventListener("click", function (event) {
  const img = document.getElementById("lightbox-img");
  const trash = document.getElementById("trash-icon");

  if (event.target !== img && event.target !== trash) {
    closeLightbox();
  }
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    closeLightbox();
  }
});

function deleteZoomedPhoto(event) {
  event.stopPropagation();

  const img = document.getElementById("lightbox-img");

  function getPhotoRelativePath(fullSrc) {
    const parts = fullSrc.split("/one-sided/Resources/gallery/uploads/");
    if (parts.length > 1) {
      return "one-sided/Resources/gallery/uploads/" + parts[1];
    }
    return null;
  }

  const relativePath = getPhotoRelativePath(img.src);

  if (!relativePath) {
    alert("Could not determine image path.");
    return;
  }

  fetch("delete_photos.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ filenames: [relativePath] }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.deleted && data.deleted.length > 0) {
        alert("Image deleted successfully.");
        closeLightbox();

        const domSrc = "/" + relativePath;
        const imgSelector = `img[src="${domSrc}"]`;
        const imgElement = document.querySelector(imgSelector);

        if (imgElement) {
          const figure = imgElement.closest("figure");
          if (figure) {
            figure.style.transition = "opacity 0.4s ease";
            figure.style.opacity = 0;
            setTimeout(() => figure.remove(), 400);
          }
        }
      } else {
        alert("Delete failed: " + JSON.stringify(data.errors));
      }
    })
    .catch((err) => {
      console.error(err);
      alert("Error deleting image.");
    });
}

document.getElementById("uploadForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Stop default form submission

  const form = this;
  const formData = new FormData(form);

  // Extract year and month from yearMonth input
  const yearMonth = document.getElementById("yearMonth").value;
  const [year, month] = yearMonth.split("-");
  document.getElementById("hiddenYear").value = year;
  document.getElementById("hiddenMonth").value = month;

//   fetch("upload.php", {
//     method: "POST",
//     body: formData,
//   })
//     .then((res) => res.json())
//     .then((data) => {
//       const header = document.querySelector("#uploadModal .modal-header");

//       if (data.success) {
//         // Change header to green
//         header.classList.remove("bg-danger");
//         header.classList.add("bg-success");

//         // Show message (optional)
//         header.querySelector(".modal-title").textContent = "Upload Successful ✅";
//         location.reload();

//         // ✅ Close modal after delay
//         setTimeout(() => {
//           const modalEl = document.getElementById("uploadModal");
//           const modal = bootstrap.Modal.getInstance(modalEl);
//           if (modal) {
//             modal.hide();
//           }

//           // Optional: Reset form
//           form.reset();
//           header.classList.remove("bg-success");
//           header.querySelector(".modal-title").textContent = "Upload Image";
//         }, 1500);
//       } else {
//         // Change header to red
//         header.classList.remove("bg-success");
//         header.classList.add("bg-danger");
//         header.querySelector(".modal-title").textContent = "Upload Failed ❌";
//       }
//     })
//     .catch((error) => {
//       console.error("Upload error:", error);
//     });
// });

fetch("upload.php", {
  method: "POST",
  body: formData,
})
  .then((res) => res.json())
  .then((data) => {
    const header = document.querySelector("#uploadModal .modal-header");

    if (data.success) {
      // Change header to green
      header.classList.remove("bg-danger");
      header.classList.add("bg-success");

      // Show success message
      header.querySelector(".modal-title").textContent = "Upload Successful ✅";

      // ✅ Close modal, reset form, THEN reload
      setTimeout(() => {
        const modalEl = document.getElementById("uploadModal");
        const modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) {
          modal.hide();
        }

        // Optional: Reset form
        form.reset();
        header.classList.remove("bg-success");
        header.querySelector(".modal-title").textContent = "Upload Image";

        // ✅ Finally reload
        location.reload();
      }, 1500); // Delay to show success message
    } else {
      // Change header to red
      header.classList.remove("bg-success");
      header.classList.add("bg-danger");
      header.querySelector(".modal-title").textContent = "Upload Failed ❌";
    }
  })
  .catch((error) => {
    console.error("Upload error:", error);
  });
})
