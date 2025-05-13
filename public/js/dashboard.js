document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("menu-toggle");
    const closeBtn = document.querySelector(".close-sidebar");
    const sidebar = document.getElementById("sidebar");

    toggleBtn.addEventListener("click", function () {
      sidebar.classList.add("show");
    });

    closeBtn.addEventListener("click", function () {
      sidebar.classList.remove("show");
    });
  });

  const waInput = document.getElementById('waInput');
  const waLink = document.getElementById('waLink');

  waInput.addEventListener('input', function () {
    const phone = waInput.value.replace(/\D/g, '');
    waLink.textContent = `https://wa.me/${phone}`;
  });
