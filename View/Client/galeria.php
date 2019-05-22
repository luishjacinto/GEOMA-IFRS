<!DOCTYPE html>
<title>Galeria</title>
<?php include('View/Client/header.php'); ?>
<div class="container-fluid" style="padding: 5% 5% 5% 5%;">
  <h2 class="text-center titulo-padrao">GALERIA</h2>
  <hr class="divisoria">
  <?php echo $data ?>
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImagem" class="max" src="">
      </div>
      <div class="modal-footer">
        <span id="legendaImagem"></span>
      </div>
    </div>
  </div>
</div>

<?php include('View/Client/footer.php'); ?>