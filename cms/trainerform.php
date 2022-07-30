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
                            <h1 class="box-title">Trainers<button class="btn btn-success ml-3" id="btnagregar2" onclick="mostrarform2(true)">
                            <i class="fa fa-plus-circle"></i>Add</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros2">
                        <table id="tbllistado2" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Instagram</th>
                            <th>YouTube</th>
                            <th>Email</th>
                            <th>Foto</th>
                            
                            </thead>
                            <tbody>                            
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>

                    <div class="panel-body" style="height: 400px;" id="formularioregistros2">
                        <form name="formulario2" id="formulario2" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" class="form-control" name="id_trainer" id="id_trainer">
                            <input type="input" class="form-control" name="nombre" id="nombre" >
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Instagram:</label>
                            <input type="input" class="form-control" name="instagram" id="instagram" >
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>YouTube:</label>
                            <input type="input" class="form-control" name="youtube_channel" id="youtube_channel" >
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email:</label>
                            <input type="input" class="form-control" name="email" id="email" >
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Foto:</label>
                            <input type="file" class="form-control" name="foto" id="foto" >
                            <input type="hidden" name="ia5" id="ia5">
                            <img src="../public/images/products/" width="150px" height="120px" id="ia5">
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar2"><i class="fa fa-save"></i>Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform2()" type="button"><i class="fa fa-arrow-circle-left"></i>Cancelar</button>
                        </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

    </div><!-- /.content-wrapper -->

    <div>
    <?php
    require 'footer.php';
    ?>
    </div>

<!--Fin-Contenido-->
<script type="text/javascript" src="scripts/trainers.js"></script>
</body>
</html>