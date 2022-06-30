<?php include 'header.php'?>
<div class="container container-press">
  <div class="row">
    <div class="col-12">
      <h2><?php echo $lang['press_titulo']?></h2>
      <div class="box-caroussel">
        <div class="placa">
          <h3>
            <?php echo $lang['caroucel_youtube_titulo']?>
          </h3>
        </div>
        <div class="caroussel caroussel-youtube">
          <div class="btn-voltar controle">
            <img src="../img/botao-voltar.png" alt="" />
          </div>
          <div class="youtubers">
            <?php foreach ($lista_youtubers as $youtuber) : ?>
              <div 
                class="box" 
                data-bs-toggle="modal" 
                data-bs-target="#<?php echo $youtuber->id ?>"
              >
                <img
                  class="foto"
                  src="./img/<?php echo $youtuber->thumb ?>.jpg"
                  alt=""
                />
                <h6><?php echo $youtuber->nome ?></h6>
                <p>@<?php echo $youtuber->nome ?></p>
              </div>
            <?php endforeach; ?>              
          </div>
          <div class="btn-avancar controle">
            <img src="../img/botao-avancar.png" alt="" />
          </div>
          <div role="tablist" class="dots"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="modais-youtubers">
        <?php foreach ($lista_youtubers as $youtuber) : ?>
        <!-- Modal -->
          <div
            class="modal fade youtuberModal"
            id="<?php echo $youtuber->id ?>"
            tabindex="-1"
            aria-labelledby="<?php echo $youtuber->id ?>"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <img
                  class="btn-fechar fechar-<?php echo $youtuber->id ?>"
                  src="../img/close-branco.svg"
                  data-bs-dismiss="modal"
                />
                <div class="cabecalho">
                  <img
                    class="foto"
                    src="./img/<?php echo $youtuber->thumb ?>.jpg"
                    alt=""
                  />
                  <div class="dados-influencer">
                    <h6><?php echo $youtuber->nome ?></h6>
                    <p>@<?php echo $youtuber->nome ?></p>
                  </div>
                </div>
                <div class="conteudo">
                <vm-player playsinline>
                  <vm-youtube video-id="<?php echo $youtuber->video ?>"></vm-youtube>
                  <vm-default-ui></vm-default-ui>
                </vm-player>
                </div>
              </div>
            </div>
          </div>
        <!-- fim modal youtuber -->
        <?php endforeach; ?>   
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
        <img src="../img/totem-coruja.png" alt="" class="detalhe-coruja">
        <div class="placa"><h3><?php echo $lang['caroucel_news_titulo']?></h3></div>
        <div class="caroussel caroussel-news">
          <div class="btn-voltar controle">
            <img src="../img/botao-voltar.png" alt="" />
          </div>
          <div class="news">
            <?php foreach ($lista_materias as $materia) : ?>
              <a target="_blank" href="<?php echo $materia->link ?>">
                <div class="box">
                  <img
                    class="foto"
                    src="./img/<?php echo $materia->thumb ?>"
                    alt=""
                  />
                  <div class="texto-news">
                    <h6><?php echo $materia->titulo ?></h6>
                    <p><?php echo $materia->chamada ?></p>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
          <div class="btn-avancar controle">
            <img src="../img/botao-avancar.png" alt="" />
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
          <img src="./img/comunidade-1.png" alt="">
        </a>
        <a target="_blank" href="https://t.me/GameFiVietnamCommunity">
          <img src="./img/comunidade-2.png" alt="">
        </a>
        <a target="_blank" href="https://t.me/CryptoTiTans0">
          <img src="./img/comunidade-4.jpg" alt="">
        </a>
        <a target="_blank" href="https://t.me/MundoNFTLatam">
          <img src="./img/comunidade-5.jpg" alt="">
        </a>
        <a target="_blank" href="https://t.me/virtualcapital2022">
          <img src="./img/comunidade-6.jpg" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
</section>
<?php include 'footer.php'?>