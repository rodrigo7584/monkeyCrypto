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
                  <a class="nav-link" href="#characters"><?php echo $lang['menu_item_1']?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gameplay"><?php echo $lang['menu_item_2']?></a>
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
                  <?php echo $lang['menu_item_3']?>
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://ape-island.gitbook.io/ape-island-game-pt/"
                        ><?php echo $lang['menu_item_3_sub_1']?></a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://ape-island.gitbook.io/ape-island-game-in/"
                        ><?php echo $lang['menu_item_3_sub_2']?></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#team"><?php echo $lang['menu_item_4']?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#checklist"><?php echo $lang['menu_item_5']?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tokenomics"><?php echo $lang['menu_item_6']?></a>
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