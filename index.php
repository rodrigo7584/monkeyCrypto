<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="img/logo-caveira.png" />
    <link rel="shortcut icon" href="img/logo-caveira.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.css"
      integrity="sha512-rEnjEH5u8xKS8NLcXC4nuZwT89x+tMB19ddbolNGE7DTl6o3JEo11kHAwryLlALFnxdONjO4xVpjunLWdiZR1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Montserrat:wght@800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <title>Ape Island Game</title>
  </head>
  <body>
    <div id="loader">
      <div class="circulo">
        <img src="./img/banana.svg" alt="" />
      </div>

      <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <section class="topo">
      <span class="video-topo"></span>
      <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand logo" href="index.php">
              <img class="mostrar-991" src="./img/logo-caveira.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <div class="icone-menu-mobile">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </button>
            <div
              class="collapse navbar-collapse justify-content-center"
              id="navbarNavDropdown"
            >
              <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="#characters">characters</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gameplay">gameplay</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Whitepaper
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://ape-island.gitbook.io/ape-island-game-pt/"
                        >Action</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://ape-island.gitbook.io/ape-island-game-in/"
                        >Another action</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item sumir-991">
                  <a class="nav-link" href="index.php#topo">
                    <img class="logo" src="./img/logo-caveira.png" alt="" />
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#team">team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#checklist">checklist</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tokenomics">tokenomics</a>
                </li>
                <li class="nav-item">
                  <div class="stores sumir-991 desativado">
                    <a class="nav-link" href="#"
                      ><img class="desativado" src="./img/appStore.svg" alt=""
                    /></a>
                    <a class="nav-link" href="#"
                      ><img class="desativado" src="./img/playStore.svg" alt=""
                    /></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="container">
        <div class="row row-conteudo-topo">
          <div class="conteudo">
            <!-- <a href="#">
              <span class="btn-play">play</span>
            </a> -->
            <h1>
              THE AGE OF THE APES <br />
              IS BEGINNING AND IT <br />
              COMES FULL OF REWARDS.
            </h1>
            <!-- <h2>
              Os macacos chegaram e o que eles mais querem é aventura e muitas
              bananas.
            </h2> -->
            <p>
              Choose your character, explore the archipelago to collect bananas
              in daily tasks and get more and more profit.
            </p>
            <h3>TOKEN PRE-SALE: 16.09.22</h3>
            <div class="social">
              <a href="https://discord.gg/d7vtqmYg3s" target="_blank"
                ><img src="./img/icone-discord.svg" alt=""
              /></a>
              <a href="https://t.me/apeislandgameann" target="_blank"
                ><img src="./img/icone-telegram.svg" alt=""
              /></a>
              <a href="https://twitter.com/apeislandgame" target="_blank"
                ><img src="./img/icone-twitter.svg" alt=""
              /></a>
            </div>
            <div class="stores mostrar-991 desativado">
              <a href="#"><img src="./img/appStore.svg" alt="" /></a>
              <a href="#"><img src="./img/playStore.svg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="cipo">
      <img src="./img/cipo.svg" alt="" />
    </div>
    <section id="characters" class="characters">
      <video muted autoplay loop class="bg_video">
        <source src="./videos/characters.mp4" type="video/mp4" />
      </video>
      <div class="container height-full">
        <div class="row height-full">
          <div class="conteudo">
            <h2>characters</h2>
            <div class="caroussel caroussel-characters">
              <div class="btn-voltar controle">
                <img src="./img/botao-voltar.png" alt="" />
              </div>
              <div class="lista">
                <div class="box">
                  <div class="placa">
                    <p>Steeve Brain</p>
                  </div>
                  <div class="char">
                    <img src="./img/Monkey_Nerd2.png" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="placa">
                    <p>Joey Beats</p>
                  </div>
                  <div class="char">
                    <img src="./img/Monkey_Raper2.png" alt="" />
                  </div>
                </div>
                <div class="box">
                  <div class="placa">
                    <p>Big Mike</p>
                  </div>
                  <div class="char">
                    <img id="mike" src="./img/Monkey_Gamer.png" alt="" />
                  </div>
                </div>
                <!-- <div class="box">
                  <div class="placa">
                    <p>Joey Beats</p>
                  </div>
                  <div class="char">
                    <img src="./img/Monkey_Raper2.png" alt="" />
                  </div>
                </div> -->
              </div>
              <div class="btn-avancar controle">
                <img src="./img/botao-avancar.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="gameplay" class="gameplay roadmap">
      <span class="video-gameplay"></span>
      <div class="container">
        <div class="row">
          <div class="conteudoGameplay">
            <h2>gameplay</h2>
            <div class="caroussel caroussel-gameplay">
              <div class="btn-voltar controle">
                <img src="./img/botao-voltar.png" alt="" />
              </div>
              <div class="conteudoCaroussel">
                <div class="video">
                  <video muted autoplay loop controls>
                    <source src="./videos/gameplay02.mp4" type="video/mp4" />
                  </video>
                </div>
                <!-- <div class="video">
                  <video muted autoplay loop controls>
                    <source src="./videos/gameplay.mp4" type="video/mp4" />
                  </video>
                </div> -->
              </div>
              <div class="btn-avancar controle">
                <img src="./img/botao-avancar.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="checklist" class="container-fluid">
        <div class="row">
          <div class="conteudoRoadmap">
            <img src="./img/cursor-arrow.svg" alt="" class="mouse" />
            <h2>checklist</h2>
            <img
              onclick="checklistModal.show()"
              class="mapa"
              src="./img/map.svg"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div
      class="modal fade"
      id="checklistModal"
      tabindex="-1"
      aria-labelledby="checklistModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <img
            class="btn-fechar"
            src="./img/close.svg"
            onclick="checklistModal.hide()"
          />
          <ul>
            <li class="checked">Business model development </li>
            <li class="checked">Financial ecosystem development </li>
            <li class="checked">Game script </li>
            <li>Start of disclosures</li>
            <li>Community support team recruitment</li>
            <li>Demo version </li>
            <li>Token pre-sale </li>
            <li>Tokens distribution</li>
            <li>Coinmarketcap/Coingecko Listings</li>
            <li>Mystery Box Sale </li>
            <li>Public sale of tokens</li>
            <li>Game launch - PC version (campaign mode)</li>
            <li>Mobile version (android) </li>
            <li>New characters </li>
            <li>Release of new game modes (PvP, Time Trial, Co-op) </li>
            <li>Leaderboard/Ranking Release </li>
            <li>Shopping</li>
            <li>Mobile version (iOS)</li>
          </ul>
        </div>
      </div>
    </div>
    <section id="team" class="team">
      <span class="video-team"></span>
      <div class="container height-full">
        <div class="row height-full">
          <div class="conteudo">
            <h2>Team</h2>
            <div class="caroussel caroussel-team">
              <div class="btn-voltar controle">
                <img src="./img/botao-voltar.png" alt="" />
              </div>
              <div class="cartoes">
                <div class="cartao">
                  <div class="foto">
                    <img src="./img/monkey-nerd-face.png" alt="" />
                  </div>
                  <div class="info">
                    <div class="nome">
                      <h6>Hernan González</h6>
                    </div>
                    <div class="descricao">
                      <p>COO</p>
                    </div>
                  </div>
                </div>
                <div class="cartao">
                  <div class="foto">
                    <img src="./img/monkey-raper-face.png" alt="" />
                  </div>
                  <div class="info">
                    <div class="nome">
                      <h6>Thiago O.</h6>
                    </div>
                    <div class="descricao">
                      <p>CEO</p>
                    </div>
                  </div>
                </div>
                <div class="cartao">
                  <div class="foto">
                    <img src="./img/monkey-gamer-face.png" alt="" />
                  </div>
                  <div class="info">
                    <div class="nome">
                      <h6>Jacob Davis</h6>
                    </div>
                    <div class="descricao">
                      <p>Developer</p>
                    </div>
                  </div>
                </div>
                <!-- <div class="cartao">
                  <div class="foto">
                    <img src="./img/monkey-raper-face.png" alt="" />
                  </div>
                  <div class="info">
                    <div class="nome">
                      <h6>Joey Beats</h6>
                    </div>
                    <div class="descricao">
                      <p>Developer</p>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="btn-avancar controle">
                <img src="./img/botao-avancar.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="tokenomics" class="tokenomics">
      <video muted autoplay loop class="bg_video">
        <source src="./videos/tokenomics.mp4" type="video/mp4" />
      </video>
      <div class="container height-full">
        <div class="row height-full">
          <div class="conteudo height-full">
            <h2>tokenomics</h2>
            <div class="itens advisor">
              <div class="titulo">
                <p>advisor</p>
              </div>
              <div class="porcentagem">
                <p>2%</p>
              </div>
              <div class="numero">
                <p>1,600,000</p>
              </div>
            </div>
            <div class="itens burn">
              <div class="titulo">
                <p>burn</p>
              </div>
              <div class="porcentagem">
                <p>2%</p>
              </div>
              <div class="numero">
                <p>1,600,000</p>
              </div>
            </div>
            <div class="itens airdrop">
              <div class="titulo">
                <p>airdrop</p>
              </div>
              <div class="porcentagem">
                <p>2%</p>
              </div>
              <div class="numero">
                <p>1,600,000</p>
              </div>
            </div>
            <div class="itens game-incentives">
              <div class="titulo">
                <p>
                  game <br />
                  incentives
                </p>
              </div>
              <div class="porcentagem">
                <p>71%</p>
              </div>
              <div class="numero">
                <p>56,800,000</p>
              </div>
            </div>
            <div class="itens devs">
              <div class="titulo">
                <p>devs</p>
              </div>
              <div class="porcentagem">
                <p>8%</p>
              </div>
              <div class="numero">
                <p>6,400,000</p>
              </div>
            </div>
            <div class="itens liquidity">
              <div class="titulo">
                <p>liquidity</p>
              </div>
              <div class="porcentagem">
                <p>3%</p>
              </div>
              <div class="numero">
                <p>2,400,000</p>
              </div>
            </div>
            <div class="itens market">
              <div class="titulo">
                <p>market</p>
              </div>
              <div class="porcentagem">
                <p>4%</p>
              </div>
              <div class="numero">
                <p>3,200,000</p>
              </div>
            </div>
            <div class="itens presale">
              <div class="titulo">
                <p>Pre sale</p>
              </div>
              <div class="porcentagem">
                <p>8%</p>
              </div>
              <div class="numero">
                <p>6,400,000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="rodape">
      <video muted autoplay loop class="bg_video">
        <source src="./videos/rodape.mp4" type="video/mp4" />
      </video>
      <div class="container">
        <div class="row">
          <div class="conteudo">
            <div class="coluna">
              <img class="logo" src="./img/logo-caveira.png" alt="" />
              <div class="social">
                <a href="https://discord.gg/d7vtqmYg3s" target="_blank"
                  ><img src="./img/icone-discord.svg" alt=""
                /></a>
                <a href="https://t.me/apeislandgameann" target="_blank"
                  ><img src="./img/icone-telegram.svg" alt=""
                /></a>
                <a href="https://twitter.com/apeislandgame" target="_blank"
                  ><img src="./img/icone-twitter.svg" alt=""
                /></a>
              </div>
            </div>
            <div class="coluna">
              <ul class="submenu">
                <li><a href="#characters">CHARACTERS</a></li>
                <li><a href="#gameplay">GAMEPLAY</a></li>
                <li><a href="#checklist">CHECKLIST</a></li>
              </ul>
            </div>
            <div class="coluna">
              <ul class="submenu">
                <li><a href="#team">TEAM</a></li>
                <li><a href="#tokenomics">TOKENOMICS</a></li>
              </ul>
            </div>
            <div class="coluna">
              <h5>Contact us</h5>
              <form action="enviar.php" method="post">
                <input type="text" placeholder="name" name="nome" />
                <input type="text" placeholder="email" name="email" />
                <textarea placeholder="message..." name="mensagem"></textarea>
                <button>send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!-- 
        MODAL DO FORMULARIO DE CONTATO
        !-->
        <div class="modal fade modal-resposta-contato">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Mensagem enviada</h3>
            </div>
          </div>
        </div>
        <!-- 
        FIM MODAL DO FORMULARIO DE CONTATO
        !-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.js"
      integrity="sha512-gAcB+wjrzbVlvnKqeqTSDTU6e7bPOiFCAe/bnJ8KXc99HFB7ApCoLMsk0+x3cBXh6+Vbt4gTf10DcJmKMUistA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./js/script.js"></script>
  </body>
</html>
