const btnMenuMobile = document.querySelector('.navbar-toggler')
const iconeMobile = document.querySelector('.icone-menu-mobile')
btnMenuMobile.addEventListener('click', function () {
  iconeMobile.classList.toggle('ativo')
})

const carousselGameplay = document.querySelector('.conteudoCaroussel')
//É mobile first então vai mostrar 1 slide com a menor resolução
new Glider(carousselGameplay, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  arrows: {
    prev: '.caroussel-gameplay .btn-voltar',
    next: '.caroussel-gameplay .btn-avancar'
  },
  scrollLock: true
})
const carousselCharacters = document.querySelector('section.characters .lista')
new Glider(carousselCharacters, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-characters .btn-voltar',
    next: '.caroussel-characters .btn-avancar'
  },
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4
      }
    }
  ]
})
const carousselTeam = document.querySelector('section.team .cartoes')
new Glider(carousselTeam, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-team .btn-voltar',
    next: '.caroussel-team .btn-avancar'
  },
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4
      }
    }
  ]
})

const resolucao = window.outerWidth
const topo = document.querySelector('.video-topo')
const gameplay = document.querySelector('.video-gameplay')
const team = document.querySelector('.video-team')

if (resolucao >= 768) {
  topo.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/topo.mp4" type="video/mp4" />
  </video>
  `
  gameplay.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/gameplayRoadmap.mp4" type="video/mp4" />
  </video>
  `
  team.innerHTML = `
  <video muted autoplay loop class="bg_video">
        <source src="./videos/team.mp4" type="video/mp4" />
      </video>
  `
} else if (resolucao >= 576 && resolucao <= 767) {
  topo.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/topo.mp4" type="video/mp4" />
  </video>
  `
  gameplay.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/576/gameplayRoadmap.mp4" type="video/mp4" />
  </video>
  `
  team.innerHTML = `
  <video muted autoplay loop class="bg_video">
        <source src="./videos/576/team.mp4" type="video/mp4" />
      </video>
  `
} else if (resolucao >= 401 && resolucao <= 575) {
  topo.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/401/topo.mp4" type="video/mp4" />
  </video>
  `
  gameplay.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/401/gameplayRoadmap.mp4" type="video/mp4" />
  </video>
      `
  team.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/401/team.mp4" type="video/mp4" />
  </video>
  `
} else if (resolucao <= 400) {
  topo.innerHTML = `
  <video muted autoplay loop class="bg_video">
    <source src="./videos/401/topo.mp4" type="video/mp4" />
  </video>
  `
  gameplay.innerHTML = `
    <video muted autoplay loop class="bg_video">
      <source src="./videos/401/gameplayRoadmap.mp4" type="video/mp4" />
    </video>
    `
  team.innerHTML = `
    <video muted autoplay loop class="bg_video">
      <source src="./videos/401/team.mp4" type="video/mp4" />
    </video>
    `
}

// window.onload = function fundos() {
//   if (resolucao >= 768) {
//     bg768.forEach(function (video) {
//       video.classList.add('mostrar')
//       video.classList.remove('esconder')
//     })
//   } else if (resolucao >= 576 && resolucao <= 767) {
//     bg576.forEach(function (video) {
//       video.classList.add('mostrar')
//       video.classList.remove('esconder')
//     })
//   } else if (resolucao >= 401 && resolucao <= 575) {
//     bg401.forEach(function (video) {
//       video.classList.add('mostrar')
//       video.classList.remove('esconder')
//     })
//   } else if (resolucao <= 400) {
//     bg360.forEach(function (video) {
//       video.classList.add('mostrar')
//       video.classList.remove('esconder')
//     })
//   }
// }

// https://desenvolvimentoparaweb.com/javascript/gliderjs-slider-carousel/
