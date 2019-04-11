<!DOCTYPE html>
<title>Galeria</title>
<div class="container-fluid" style="padding: 5% 5% 5% 5%;">
  <h2 class="text-center titulo-padrao">GALERIA</h2>
  <hr class="divisoria">

  <div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="View/Imagens/im1.jpg" alt="Los Angeles" width="1200" height="450">
        <div class="carousel-caption">
          <h3>Exemplo</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="View/Imagens/im2.jpg" alt="Chicago" width="1200" height="450">
        <div class="carousel-caption">
          <h3>Exemplo</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="View/Imagens/im3.jpg" alt="New York" width="1200" height="450">
        <div class="carousel-caption">
          <h3>Exemplo</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>