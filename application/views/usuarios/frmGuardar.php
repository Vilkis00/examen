<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table">
      <form action="<?php echo base_url();?>usuarios/guardar" method="POST">
        <tr>
          <th>Usuario</th>
          <td><input class="form-control" type="text" name="username" value=""></td>
        </tr>
        <tr>
          <th>Contraseña</th>
          <td><input class="form-control" type="text" name="password" value=""></td>
        </tr>
        <tr>
          <td><button type="submit" name="" class="btn btn-primary">Guardar</button></td>
        </tr>
      </form>
    </table>
  </div>
</div>
