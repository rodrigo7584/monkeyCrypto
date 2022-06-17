<?php
include "config.php";
?>
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
  <body class="body-press">
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
    <section class="press">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand logo" href="index.php">
              <img src="./img/logo-caveira.png" alt="" />
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
              class="collapse navbar-collapse justify-content-end"
              id="navbarNavDropdown"
            >
              <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="index.php#characters"><?php echo $lang['menu_item_1']?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#gameplay"><?php echo $lang['menu_item_2']?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#team"><?php echo $lang['menu_item_4']?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#tokenomics"><?php echo $lang['menu_item_6']?></a>
                </li>
                <li class="nav-item dropdown menu-idioma">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                  <img class="icone-idioma" src="./img/icone-globo.svg" alt="">
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <li>
                      <a
                        class="dropdown-item"
                        href="index.php?lang=pt"
                        >PT</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="index.php?lang=en"
                        >EN</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <div class="stores  desativado">
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
      <div class="container container-press">
        <div class="row">
          <div class="col-12">
            <h2><?php echo $lang['press_titulo']?></h2>
            <div class="box-caroussel">
              <div class="placa"><h3><?php echo $lang['caroucel_youtube_titulo']?></h3></div>
              <div class="caroussel caroussel-youtube">
                <div class="btn-voltar controle">
                  <img src="./img/botao-voltar.png" alt="" />
                </div>
                <div class="youtubers">
                                   
                </div>
                <div class="btn-avancar controle">
                  <img src="./img/botao-avancar.png" alt="" />
                </div>
                <div role="tablist" class="dots"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="modais-youtubers">

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="box-caroussel">
              <img src="./img/totem-coruja.png" alt="" class="detalhe-coruja">
              <div class="placa"><h3><?php echo $lang['caroucel_news_titulo']?></h3></div>
              <div class="caroussel caroussel-news">
                <div class="btn-voltar controle">
                  <img src="./img/botao-voltar.png" alt="" />
                </div>
                <div class="news">
                  <?php foreach ($lista_equipe as $pessoa_equipe) : ?>
                    <a target="_blank" href="<?php echo $pessoa_equipe->link ?>">
                      <div class="box">
                        <img
                          class="foto"
                          src="./img/press/<?php echo $pessoa_equipe->thumb ?>"
                          alt=""
                        />
                        <div class="texto-news">
                          <h6><?php echo $pessoa_equipe->titulo ?></h6>
                          <p><?php echo $pessoa_equipe->chamada ?></p>
                        </div>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
                <div class="btn-avancar controle">
                  <img src="./img/botao-avancar.png" alt="" />
                </div>
                <div role="tablist" class="dots"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="communities">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="placa">
             <h3><?php echo $lang['communities_titulo']?></h3> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="box-communities">
              <a target="_blank" href="https://t.me/bananaLobby">
                <img src="./img/press/comunidade-1.png" alt="">
              </a>
              <a target="_blank" href="https://t.me/GameFiVietnamCommunity">
                <img src="./img/press/comunidade-2.png" alt="">
              </a>
              <a target="_blank" href="https://t.me/CryptoTiTans0">
                <img src="./img/press/comunidade-4.jpg" alt="">
              </a>
              <a target="_blank" href="https://t.me/MundoNFTLatam">
                <img src="./img/press/comunidade-5.jpg" alt="">
              </a>
              <a target="_blank" href="https://t.me/virtualcapital2022">
                <img src="./img/press/comunidade-6.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="rodape rodape-press">
      <div class="container">
        <div class="row">
          <div class="conteudo">
            <div class="coluna">
              <img class="logo" src="./img/logo-caveira.png" alt="" />
              <div class="social">
                <a href="https://www.instagram.com/apeislandgame/" target="_blank"
                  ><img src="./img/icone-instagram.svg" alt=""
                /></a>
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
                <li><a href="#characters"><?php echo $lang['menu_item_1']?></a></li>
                <li><a href="#gameplay"><?php echo $lang['menu_item_2']?></a></li>
                <li><a href="#checklist"><?php echo $lang['menu_item_5']?></a></li>
              </ul>
            </div>
            <div class="coluna">
              <ul class="submenu">
                <li><a href="#team"><?php echo $lang['menu_item_4']?></a></li>
                <li><a href="#tokenomics"><?php echo $lang['menu_item_6']?></a></li>
                <li><a href="press.php"><?php echo $lang['menu_item_7']?></a></li>
              </ul>
            </div>
            <div class="coluna">
              <h5><?php echo $lang['contato']?></h5>
              <form action="enviar.php" method="post">
                <input type="text" placeholder="<?php echo $lang['placeholder_1']?>" name="nome" />
                <input type="text" placeholder="email" name="email" />
                <textarea placeholder="message..." name="mensagem"></textarea>
                <button><?php echo $lang['enviar']?></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.js"
      integrity="sha512-gAcB+wjrzbVlvnKqeqTSDTU6e7bPOiFCAe/bnJ8KXc99HFB7ApCoLMsk0+x3cBXh6+Vbt4gTf10DcJmKMUistA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./js/press.js"></script>
    </script>
  </body>
</html>
