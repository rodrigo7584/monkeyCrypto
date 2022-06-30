window.addEventListener('load', function () {
  for (let i = 0; i < slides.length; i++) {
    slider.innerHTML += `
    <div class="slide">${slides[i].nome}
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#${slides[i].nome}">
        Modal ${slides[i].nome}
      </button>
    </div>
    `
    criarModal(slides[i].nome)
  }

  new Glider(document.querySelector('.glider'), {
    slidesToShow: 5,
    slidesToScroll: 5,
    dots: '.dots',
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    }
  })
})
function criarModal(nome) {
  modais.innerHTML += `
  <div class="modal fade" id="${nome}" tabindex="-1" aria-labelledby="${nome}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ${nome}
          <div id="${nome}"></div>
          <button onclick="${nome}.stopVideo()">teste</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  `
}

const retorno = document.querySelector('h1.text-center')
const slider = document.querySelector('.glider')
const modais = document.querySelector('.modais')
const slides = [
  {
    nome: 'rodrigo'
  },
  {
    nome: 'alexia'
  },
  {
    nome: 'erick'
  },
  {
    nome: 'eddy'
  },
  {
    nome: 'lu'
  },
  {
    nome: 'marcia'
  },
  {
    nome: 'helio'
  },
  {
    name: 'video'
  }
]

// let options = {
//   root: null,
//   rootMargin: '0px',
//   threshold: 1.0
// }
// let callback = (entries, observer) => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       entry.target.play()
//     } else {
//       entry.target.pause()
//     }
//   })
// }
// let observer = new IntersectionObserver(callback, options)
// observer.observe(document.querySelector('#myvideo'))
// const videos = document.querySelectorAll('.myvideo')
// const videosObserver = []
// videos.forEach(function (item, i) {
//   videosObserver[i] = new IntersectionObserver(callback, options)
//   videosObserver[i].observe(item)
// })

// $(document).ready(function () {
//   // Video 1
//   var vid = document.getElementById('teste')
//   $('#trailer').on('shown.bs.modal', function () {
//     vid.play()
//   })
//   $('#trailer').on('hidden.bs.modal', function () {
//     vid.pause()
//   })
// })
