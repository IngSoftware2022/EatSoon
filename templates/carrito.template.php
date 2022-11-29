<!-- modal carrito, pero mejor si es offcanvas -->
<?php
?>
<div class="modal fade" id="demo">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" style="color:white;">Mi Carrito</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <Table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Accion</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($enCarrito as $carito) : ?>
                            <tr>
                                <th scope="row"><?php echo ($carito['carrito_id']); ?></th>
                                <td><img src="<?php echo RUTA . '/storage/' . $producto['imagen'] ?>" width="30" /> <?php echo ($carito['nombre_producto']); ?></td>
                                <td><?php echo ($carito['cantidad']); ?></td>
                                <td>
                                    <form action="" method="post">
                                        <button type="submit" style="color:white;background: goldenrod;">-</button>
                                    </form>
                                    <form action="" method="post">
                                        <button type="submit" style="color:white;background: goldenrod;">+</button>
                                    </form>
                                </td>
                                <td><?php echo ((int)$carito['cantidad'] * (float)$carito['precio_producto']); ?></td>
                                <td>
                                    <form action="" method="post">
                                        <button type="submit" class="bi bi-trash"></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </Table>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <tr>
                    <td><button type="button" class="btn btn-danger link-light" data-bs-dismiss="modal" style="padding: .25rem 1rem;
                    border-radius: 4px; color: white; font-weight: bold; text-align: center;">Vaciar Todo</button></td>

                    <p class="link-light">Total Productos: 3</p>

                    <p class="link-light">Total: (cantidad)Bs.</p>

                    <td><button type="button" class="btn btn-success link-light" data-bs-dismiss="modal" style="padding: .25rem 1rem;border-radius: 4px; color: white; font-weight: bold;
                    text-align: center;">Comprar</button></td>
                </tr>
            </div>
        </div>
    </div>
</div>

<!-- fin cuerpo modal -->