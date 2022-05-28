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
                <li><a href="#characters"><?php echo $lang['menu_item_1']?></a></li>
                <li><a href="#gameplay"><?php echo $lang['menu_item_2']?></a></li>
                <li><a href="#checklist"><?php echo $lang['menu_item_5']?></a></li>
              </ul>
            </div>
            <div class="coluna">
              <ul class="submenu">
                <li><a href="#team"><?php echo $lang['menu_item_4']?></a></li>
                <li><a href="#tokenomics"><?php echo $lang['menu_item_6']?></a></li>
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