document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            navLinks.forEach(nav => nav.classList.remove('active')); // Hapus semua active
            this.classList.add('active'); // Tambah active ke yang diklik
        });
    });
});

  // document.addEventListener('DOMContentLoaded', function () {
  //     const swiper = new Swiper('.mySwiper', {
  //       slidesPerView: 4,
  //       slidesPerGroup: 1,
  //       spaceBetween: 15,
  //       loop: true,
  //       autoplay: {
  //         delay: 2500,
  //         disableOnInteraction: false
  //       },
  //       pagination: {
  //         el: '.swiper-pagination',
  //         clickable: true
  //       },
  //       speed: 600
  //     });
  //   });

  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.mySwiper', {
      slidesPerView: 4,
      slidesPerGroup: 1,
      spaceBetween: 15,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      speed: 600,
  
      // ✅ Tambahkan breakpoints untuk responsif
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 12
        },
        768: {
          slidesPerView: 3
        },
        992: {
          slidesPerView: 4
        }
      }
    });
  });
  

