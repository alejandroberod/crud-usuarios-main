<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=products&m=create" class="btn btn-primary">Crear nuevo Producto</a>
                        <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>PRECIO</th>
                                        <th>DESCRIPCION</th>
                                        <th>IMAGEN</th>
                                        <th width="260">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<10;$i++){   ?>
                                    <tr>
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>Gaseosa</td>
                                        <td>$ 2000</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga alias maxime illum recusandae doloribus aperiam.</td>
                                        <td><img width="70px" class="mx-auto"
                                        src="https://lavaquita.co/cdn/shop/products/supermercados_la_vaquita_supervaquita_gaseosa_coca_cola_10_oz_bebidas_liquidas_1024x1024.jpg?v=1620489361"
                                        alt="img"></td>
                                        <td>
                                            <a href="?c=products&m=show" class="btn btn-sm btn-info">Detalles</a>
                                            <a href="?c=products&m=edit" class="btn btn-sm btn-warning">Editar</a>
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