<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"><p></p>
    <a href="<?php echo base_url(); ?>articulos/frmGuardar" class="btn btn-outline-primary">Agregar</a><p></p>
    <script type="text/javascript">
      $(document).ready(function (){
        $('#entradafilter').keyup(function () {
					var rex = new RegExp($(this).val(), 'i');
					$('.contenidobusqueda tr').hide();
					$('.contenidobusqueda tr').filter(function () {
						return rex.test($(this).text());
					}).show();
  			})
      });
    </script>
    <div class="input-group"> <span class="input-group-addon"></span>
        <input type="text" id="entradafilter" class="form-control" placeholder="Escribe el nombre de un archivo para iniciar la busqueda" required /><br><br>
			</div>
    <table class="table border">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Categoria</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Imagen</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody class="contenidobusqueda">
        <?php foreach ($articulos as $articulo):?>
          <tr>
            <td><?= $articulo->codigo;?></td>
            <td><?= $articulo->categoria;?></td>
            <td><?= $articulo->descripcion;?></td>
            <td><?= $articulo->precio;?></td>
            <td><img src="<?= "rutaimg/" . $articulo->imagen;?>" width="100px" height="100px"></td>
            <td>
              <a href="<?php echo base_url()?>articulos/frmActualizar/<?php echo $articulo->codigo;?>/<?php echo $articulo->id ?>/<?php echo str_replace(" ","%20",$articulo->categoria) ?>" class="btn btn-outline-warning"><span class="fas fa-pen"></span></a>
              <a href="<?php echo base_url()?>articulos/eliminar/<?php echo $articulo->codigo;?>/<?php echo $articulo->imagen ?>" class="btn btn-outline-danger"><span class="fas fa-trash"></span></a>
            </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>
