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
  }
]

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script')

tag.src = 'https://www.youtube.com/iframe_api'
var firstScriptTag = document.getElementsByTagName('script')[0]
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player
function onYouTubeIframeAPIReady() {
  player = new YT.Player('rodrigo', {
    height: '360',
    width: '640',
    videoId: 'M7lc1UVf-VE',
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange
    }
  })
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo()
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000)
    done = true
  }
}
function stopVideo() {
  player.stopVideo()
}
