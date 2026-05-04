let posisi = 0;

// Perbaikan fungsi di file JS
function ubahAlign() {
  const container = document.querySelector(".main-container"); // Targetkan pembungkus luar

  if (posisi === 0) {
    container.style.justifyContent = "center";
    posisi = 1;
  } 
  else if (posisi === 1) {
    container.style.justifyContent = "flex-end";
    posisi = 2;
  } 
  else {
    container.style.justifyContent = "flex-start";
    posisi = 0;
  }
}

let warnaBerubah = false;

function ubahBackground() {
  // Mengarahkan ke class .card yang ada di HTML
  const boxes = document.querySelectorAll(".card");

  boxes.forEach(function(box) {
    if (!warnaBerubah) {
      box.style.backgroundColor = "grey"; // Gunakan backgroundColor untuk CSS
    } else {
      box.style.backgroundColor = ""; // Kembali ke warna asal di CSS
    }
  });

  warnaBerubah = !warnaBerubah;
}