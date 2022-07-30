<!DOCTYPE html>
<html lang="en">

    <?php
    include 'head.php';
    ?>

<body>
<script src="../public/js/jquery1-1.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="../public/js/jquery-3.1.1.min.js"><\/script>')</script>

    <section>
    <?php
    include 'nav.php';
    ?>
    </section>

    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script>

    <script src="../public/js/bootbox.min.js"></script>
    <script src="../public/js/bootstrap-select.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script> 

    <div class="content-wrapper mt-5">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border mt-4">
                          <h1 class="box-title">PRODUCTS<button class="btn btn-success ml-3" id="btnagregar1" onclick="mostrarform1(true)">
                          <i class="fa fa-plus-circle"></i>Add</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros1">
                        <table id="tbllistado1" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Tipo</th>
                            <th>Foto</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                    </div>

                    <div class="panel-body" style="height: 400px;" id="formularioregistros1">
                        <form name="formulario1" id="formulario1" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" class="form-control" name="id_prod" id="id_prod">
                            <input type="input" class="form-control" name="nombre" id="nombre" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descripcion:</label>
                            <input type="input" class="form-control" name="descripcion" id="descripcion" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Precio:</label>
                            <input type="input" class="form-control" name="precio" id="precio" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo:</label>
                            <input type="input" class="form-control" name="tipo" id="tipo" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Foto:</label>
                            <input type="file" class="form-control" name="foto" id="foto" >
                            <input type="hidden" name="foto" id="foto">
                            <img src="../public/images/products/" width="150px" height="120px" id="ia5">
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar1"><i class="fa fa-save"></i>Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform1()" type="button"><i class="fa fa-arrow-circle-left"></i>Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->

    <?php
    require 'footer.php';
    ?>

  <!--Fin-Contenido-->
<script type="text/javascript" src="scripts/productos.js"></script>
</body>
</html>