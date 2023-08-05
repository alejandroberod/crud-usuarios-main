<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=companies&m=create" class="btn btn-primary">Crear nuevo compañia</a>
                          <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>NIT</th>
                                        <th>DIRECCION</th>
                                        <th>TELEFONO</th>
                                        <th>LOGO</th>
                                        <th width="260">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<10;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Coca Cola</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td><img width="70px"   class="mx-auto" src="data:image/png;base64,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" alt=""></td>
                                        <td>
                                            <a href="?c=companies&m=show" class="btn btn-sm btn-info">Detalles</a>
                                            <a href="?c=companies&m=edit" class="btn btn-sm btn-warning">Editar</a>
                                            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
                          <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>