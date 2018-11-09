<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"><p></p>
    <a href="<?php echo base_url(); ?>articulos/frmGuardar" class="btn btn-outline-primary">Agregar</a><p></p>
    <table class="table border">
      <tr>
        <th>Codigo</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Opciones</th>
      </tr>
      <?php foreach ($articulos as $articulo):?>
        <tr>
          <td><?= $articulo->codigo;?></td>
          <td><?= $articulo->categoria;?></td>
          <td><?= $articulo->descripcion;?></td>
          <td><?= $articulo->precio;?></td>
          <td>
            <a href="<?php echo base_url()?>articulos/frmActualizar/<?php echo $articulo->codigo;?>" class="btn btn-outline-warning"><span class="fas fa-pen"></span></a>
            <a href="<?php echo base_url()?>articulos/eliminar/<?php echo $articulo->codigo;?>" class="btn btn-outline-danger"><span class="fas fa-trash"></span></a>
          </td>
        </tr>
      <?php endforeach;?>
    </table>
  </div>
</div>
