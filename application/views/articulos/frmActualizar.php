<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table">
      <form action="<?php echo base_url();?>articulos/actualizar" method="POST">
        <tr>
          <th>Codigo</th>
          <td><input readonly="" class="form-control" type="text" name="codigo" value="<?= $articulos->codigo ?>"></td>
        </tr>
        <tr>
          <th>Categoria</th>
          <td><input class="form-control" type="text" name="categoria" value="<?= $articulos->categoria ?>"></td>
        </tr>
        <tr>
        <tr>
          <th>Descripcion</th>
          <td><input class="form-control" type="text" name="descripcion" value="<?= $articulos->descripcion ?>"></td>
        </tr>
        <tr>
          <th>Precio</th>
          <td><input class="form-control" type="text" name="precio" value="<?= $articulos->precio ?>"></td>
        </tr>
        <tr>
          <td><button type="submit" name="" class="btn btn-primary">Actualizar</button></td>
        </tr>
      </form>
    </table>
  </div>
</div>
