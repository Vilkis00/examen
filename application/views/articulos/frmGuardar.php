<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table">
      <form action="<?php echo base_url();?>articulos/guardar" method="POST">
        <tr>
          <th>Categoria</th>
          <td><input class="form-control" type="text" name="categoria" value=""></td>
        </tr>
        <tr>
        <tr>
          <th>Descripcion</th>
          <td><input class="form-control" type="text" name="descripcion" value=""></td>
        </tr>
        <tr>
          <th>Precio</th>
          <td><input class="form-control" type="text" name="precio" value=""></td>
        </tr>
        <tr>
          <td><button type="submit" name="" class="btn btn-primary">Guardar</button></td>
        </tr>
      </form>
    </table>
  </div>
</div>
