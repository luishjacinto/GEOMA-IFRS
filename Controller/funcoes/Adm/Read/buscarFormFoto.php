<?php

function buscarFormFoto($id){
    $foto = buscarGaleria($id);

    $form = '<div id="ref1" class="div-img"><img id="img1" class="img-galeria" src="'.$foto['caminho'].'"/></div>
    <form method="POST" action="atualizar_foto?'.$foto['id'].'" enctype="multipart/form-data">
        <div class="form-group">
            <label for="legenda">Legenda</label>
            <input type="text" class="form-control" value="'.$foto['legenda'].'" name="legenda" placeholder="Insira a legenda da Foto" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form><br>
    <br>
    <a href="deletar_foto?'.$foto['id'].'"><button type="button" class="btn btn-primary">Deletar</button></a>';

    return $form;
}

?>
