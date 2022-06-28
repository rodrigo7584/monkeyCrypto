<?php
include "../config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./img/logo-caveira.png" />
    <link rel="shortcut icon" href="./img/logo-caveira.png" type="image/x-icon" />
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
    <link rel="stylesheet" href="../css/style.css" />
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
        <img src="../img/banana.svg" alt="" />
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
              <img src="../img/logo-caveira.png" alt="" />
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
              class="container collapse navbar-collapse justify-content-end"
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
                  <img class="icone-idioma" src="../img/icone-globo.svg" alt="">
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
                      ><img class="desativado" src="../img/appStore.svg" alt=""
                    /></a>
                    <a class="nav-link" href="#"
                      ><img class="desativado" src="../img/playStore.svg" alt=""
                    /></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>