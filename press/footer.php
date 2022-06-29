<section class="rodape rodape-press">
      <div class="container">
        <div class="row">
          <div class="conteudo">
            <div class="coluna">
              <img class="logo" src="../img/logo-caveira.png" alt="" />
              <div class="social">
                <a href="https://www.instagram.com/apeislandgame/" target="_blank"
                  ><img src="../img/icone-instagram.svg" alt=""
                /></a>
                <a href="https://discord.gg/d7vtqmYg3s" target="_blank"
                  ><img src="../img/icone-discord.svg" alt=""
                /></a>
                <a href="https://t.me/apeislandgameann" target="_blank"
                  ><img src="../img/icone-telegram.svg" alt=""
                /></a>
                <a href="https://twitter.com/apeislandgame" target="_blank"
                  ><img src="../img/icone-twitter.svg" alt=""
                /></a>
              </div>
            </div>
            <div class="coluna">
              <ul class="submenu">
                <li><a href="../index.php#characters"><?php echo $lang['menu_item_1']?></a></li>
                <li><a href="../index.php#gameplay"><?php echo $lang['menu_item_2']?></a></li>
                <li><a href="../index.php#checklist"><?php echo $lang['menu_item_5']?></a></li>
              </ul>
            </div>
            <div class="coluna">
              <ul class="submenu">
                <li><a href="../index.php#team"><?php echo $lang['menu_item_4']?></a></li>
                <li><a href="../index.php#tokenomics"><?php echo $lang['menu_item_6']?></a></li>
                <li><a href="./index.php"><?php echo $lang['menu_item_7']?></a></li>
              </ul>
            </div>
            <div class="coluna">
              <h5><?php echo $lang['contato']?></h5>
              <form action="../enviar.php" method="post">
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
