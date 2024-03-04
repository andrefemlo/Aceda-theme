// AOS init
AOS.init({
  duration: 1000,
  once: true,
});

// Menu de navegação
window.addEventListener("scroll", function () {
  let header = document.querySelector("header");
  let scrollPosition = window.scrollY;
  let screenWidth = window.innerWidth;

  if (scrollPosition > 8) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});


// Menu mobile;
function openMobileSidebar() {
  var item = document.querySelector('#navigation');
  item.setAttribute('style', 'display: flex;');
}
function closeMobileSidebar() {
  var item = document.querySelector('#navigation');
  item.removeAttribute('style', 'display: flex;');
}

// Submenu Mobile
function openSubmenu() {
  // Selecione o elemento do menu
  var menu = document.querySelector('#navigation .menu');

  // Selecione todos os elementos 'menu-item-has-children'
  var hasSubmenus = document.querySelectorAll('#navigation .menu-item-has-children');

  // Itere sobre cada elemento 'menu-item-has-children'
  hasSubmenus.forEach(function (hasSubmenu) {
    // Adicione um evento de clique a cada elemento
    hasSubmenu.addEventListener('click', function () {
      // Selecione o submenu dentro do elemento clicado
      var submenu = this.querySelector('.sub-menu');

      // Verifique se o submenu existe
      if (submenu) {
        // Alternar a visibilidade do submenu ao clicar no 'menu-item-has-children'
        if (submenu.style.display === 'block') {
          submenu.style.display = 'none';
        } else {
          submenu.style.display = 'block';
        }
      }
    });
  });
}
openSubmenu();


// SwiperJS Template
let swiper = new Swiper('.swiper-posts', {
  slidesPerView: 3,
  lazy: true,
  loop: true,
  // centeredSlides: true,
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
  pagination: {
    el: '.swiper-pagination-posts',
    clickable: true,
  },
  autoplay: {
    delay: 4000,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 32,
    },
    1140: {
      slidesPerView: 4,
      spaceBetween: 32,
    },
  },  
});
let swiperCursos = new Swiper('.swiper-cursos', {
  slidesPerView: 3,
  lazy: true,
  loop: true,
  // centeredSlides: true,
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
  pagination: {
    el: '.swiper-pagination-cursos',
    clickable: true,
  },
  autoplay: {
    delay: 4000,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 32,
    },
    1140: {
      slidesPerView: 4,
      spaceBetween: 32,
    },
  },  
});



// // Acordeão
// document.addEventListener("DOMContentLoaded", function () {
//   var accordion = document.querySelectorAll(".accordion");

//   accordion.forEach((el) => {
//     var accordionItems = el.querySelectorAll(".accordion-item");

//     accordionItems.forEach(function (item) {
//       var header = item.querySelector(".accordion-header");

//       header.addEventListener("click", function () {
//         var currentActiveItem = item.classList.contains("active");

//         accordionItems.forEach(function (el) {
//           el.classList.remove("active");
//         });

//         if (!currentActiveItem) {
//           item.classList.add("active");
//         }
//       });
//     });
//   });
// });


// function displayFileName(){

//   var $input    = document.getElementById('arquivo'),
//   $fileName = document.getElementById('file');
  
//   $input.addEventListener('change', function(){
//     $fileName.textContent = this.value;
//   });
// }
// displayFileName();
