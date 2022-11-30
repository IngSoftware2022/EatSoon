<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        (function($) {
            $('#buscador').keyup(function() {
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.wrap .tarjeta-rest').hide();
                $('.wrap .tarjeta-rest').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
</script>
<main>
    <div style="background-image: url('<?= RUTA ?>/assets/img/fondo tabla.jpeg');background-size: cover;height: 90vh;background-position: center;background-repeat: no-repeat;width: 100%;">
        <div class="container ">
            <div class="row ">
                <h1 class="mb-5 mt-5 text-white">Lista de solicitud de pedidos</h1>
                <div>
                    <div class="card mb-4" style="background-color: #f8b318;font-size: x-large;padding: 10px;box-shadow: 1px 1px 1px #382804;">
                        <table>
                            <tr>
                                <th>
                                    <h5>Pedido</h5>
                                </th>
                                <th>
                                    <h5>#0000</h5>
                                </th>
                                <th>
                                    <h5>Usuario:</h5>
                                </th>
                                <th>
                                    <h5></h5>
                                </th>
                                <th>
                                    <h5>Fecha:</h5>
                                </th>
                                <th>
                                    <h5></h5>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <div class="card mb-4" style="background-color: #f8b318;font-size: x-large;padding: 10px;box-shadow: 1px 1px 1px #382804;">
                        <table>
                            <tr>
                                <th>
                                    <h5>Pedido</h5>
                                </th>
                                <th>
                                    <h5>#0000</h5>
                                </th>
                                <th>
                                    <h5>Usuario:</h5>
                                </th>
                                <th>
                                    <h5></h5>
                                </th>
                                <th>
                                    <h5>Fecha:</h5>
                                </th>
                                <th>
                                    <h5></h5>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <a data-bs-toggle="modal" data-bs-target="#pedido1">
                        <div class="card mb-4" style="background-color: #f8b318;font-size: x-large;padding: 10px;box-shadow: 1px 1px 1px #382804;">
                            <table>
                                <tr>
                                    <th>
                                        <h5>Pedido</h5>
                                    </th>
                                    <th>
                                        <h5>#0000</h5>
                                    </th>
                                    <th>
                                        <h5>Usuario:</h5>
                                    </th>
                                    <th>
                                        <h5></h5>
                                    </th>
                                    <th>
                                        <h5>Fecha:</h5>
                                    </th>
                                    <th>
                                        <h5></h5>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </a>

                    <!-- código modal -->
                    <div class="modal fade" id="pedido1">
                        <div class="modal-dialog modal-lg" style="    transform: translate(0, 100%);
    min-height: 15rem;
    min-width: 71%;
    margin: auto;">
                            <div class="modal-content bg-dark">
                                <div class="modal-body">
                                    <div class="row justify-content-center text-white">
                                        <h1>Información sobre el Pedido</h1>
                                        <div class="col-5">
                                        <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <div><h5>Pedido #0000</h5></div>
                                                    <div><h5>Usuario:</h5></div>
                                                    <div><h5>Fecha:</h5></div>
                                                    <img src="<?= RUTA ?>/assets/img/bien amarillo.jpeg" width="100" alt="">
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <table>
                                                        <tr>
                                                            <th class="ml-2 mr-2">
                                                                <h4><b>Item</b></h4>
                                                            </th>
                                                            <th class="ml-2 mr-2">
                                                                <h4><b>Cantidad</b></h4>
                                                            </th>
                                                            <th class="ml-2 mr-2">
                                                                <h4><b>Total</b></h4>
                                                            </th>
                                                        </tr>
                                                        <tbody>
                                                            <tr>
                                                                <td class="ml-2 mr-2">
                                                                    <h5>Leche</h5>
                                                                </td>
                                                                <td class="ml-2 mr-2 text-center">
                                                                    <h5>3</h5>
                                                                </td>
                                                                <td class="ml-2 mr-2">
                                                                    <h5>15 Bs</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ml-2 mr-2">
                                                                    <h5>Pan</h5>
                                                                </td>
                                                                <td class="ml-2 mr-2 text-center">
                                                                    <h5>3</h5>
                                                                </td>
                                                                <td class="ml-2 mr-2">
                                                                    <h5>15 Bs</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ml-2 mr-2">
                                                                    <h5>Sopa</h5>
                                                                </td>
                                                                <td class="ml-2 mr-2 text-center">
                                                                    <h5>3</h5>
                                                                </td>
                                                                <td class="ml-2 mr-2">
                                                                    <h5>15 Bs</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <hr>
                                                    <div>
                                                        <table>
                                                            <tr>
                                                                <th>
                                                                    <h5>Total productos:</h5>
                                                                </th>
                                                                <th>
                                                                    <h5>9</h5>
                                                                </th>
                                                                <th>
                                                                    <h5>45 Bs</h5>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin código modal -->
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center pt-4 m-0">
                <li class="page-item">
                    <?php //if($pagina>1):
                    ?>
                    <a class="page-link " href="pedidos.php?page=<?php echo $pagina - 1 ?>" aria-label="Previous" id="pag-anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php //endif;
                    ?>
                </li>


                <?php for ($i = 1; $i <= $numPaginas; $i++) : ?>
                    <?php if ($i <= 5) : ?>
                        <li class="page-item"><a class="page-link" href="pedidos.php?page=<?php echo $i ?>" id="pag-uno"><?php echo $i ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>



                <?php  //if($pagina<$numPaginas):
                ?>
                <li class="page-item"><a class="page-link " href="pedidos.php?page=<?php echo $pagina + 1 ?>" aria-label="Next" id="pag-siguiente">
                        <span aria-hidden="true">&raquo;</span>
                    </a></li>
                <?php //endif;
                ?>

            </ul>
        </nav>
    </div>
</main>
<footer class="bg-dark">
    <div style="height: 6vh;"></div>
</footer>