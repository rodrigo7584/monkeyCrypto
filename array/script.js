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
  }
]
