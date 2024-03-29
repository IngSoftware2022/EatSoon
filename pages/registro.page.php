
<!--
    <div class=" bg-warning">
        <a class="btn btn-warning bi bi-arrow-left-circle-fill border-bottom  p-2.5" href="index.php"> &nbsp Volver</a>


    </div>
    
<div class="bg-warning">
    <button  id ="botton" class="col-12 btn btn-warning d-flex " >
        <span href="index.php" class="bi bi-arrow-left-circle-fill"> Volver </span>         
    </button>
    
    <a href="index.php" class=" btn d-flex" > <span class="bi bi-arrow-left-circle-fill"> Volver </span>  </a>
    
</div>
-->
    
<div class="pt-4 bg-dark ">
<a class="btn btn-warning bi bi-arrow-left-circle-fill border-bottom  p-2.5" href="index.php"> &nbsp Volver</a>
    <h2 style="text-align:center; color: rgb(218, 165, 32);" class="bi bi-clipboard-plus" > &nbsp Registra tu Producto</h2>
    <div class="row">
    </div>
        <div style="text-align:center" class="col-lg-12">
            <img src="<?php echo RUTA ?>/assets/img/pngwing.com.png" class="mt-2; img-fluid; " style="color: white ;"  width="15%" /> 
        </div> 
    </div>
</div>


<section class=" d-flex justify-content-center align-items-center bg-dark">

<div class="mt-3 card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">     
    <div class="mb-1">
        <?php //Este es el formulario donde se captura los datos que el usuario introduce de la H3?>
        <?php if (isset($_GET['m'])) {
        ?>
        <div class="alert alert-success" role="alert">
        <?php echo($_GET['m'])?>
        </div>
        <?php }?>
        <form id = "registroProducto" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="nombre_producto"><i class="bi bi-bag-check-fill"></i> &nbsp Nombre del producto <span class="text-danger">*</span></label>
                <input type="text" maxlength ="40" class="form-control" name="nombre_producto" id="nombre_producto"  placeholder= "Ingrese nombre del producto"  
                oninput="this.value = this.value.replace(/[^a-z A-Z 0-9]/,'')" required>
                <div class="text-danger"></div> 
            </div>
            <div class=" bg-dark mt-3"></div>
            <div class="mb-4">
                <label for="cantidad"><i class="bi bi-cart-plus-fill"></i> &nbsp Cantidad <span class="text-danger">*</span></label>
                <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "2" name="cantidad" class="form-control" id="cantidad" 
                placeholder= "Unidades"  min="1" max="99" pattern="^[0-9]+"   oninput="this.value = this.value.replace(/[^a-z A-Z] /,'-'); required>
               <div class="number-danger "></div> 
            </div>
            <div class="mb-4">
                <label for="precio_producto"><i class="bi bi-cash-coin"></i> &nbsp Precio <span class="text-danger">*</span></label>
                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "3" step="0.01" name="precio_producto" class="form-control" id="precio"  
                placeholder= ".Bs"  min="1" max="500"  pattern="^[0-9]+" required>
                <div class="number-danger "></div> 
                
            </div>

            <div class="mb-4">
                <?php
                 date_default_timezone_set("America/Asuncion");
                     $fechamin = date("Y-m-d");
                    
                     $fechamax = date("Y-m-d",strtotime($fechamin."+ 30 day")); 
        
                ?>

                <label for="fecha_caducidad"><i class="bi bi-calendar2-day-fill"></i> &nbsp Fecha de vencimiento <span class="text-danger">*</span></label>
                <input type="date" name="fecha_caducidad" min="<?=$fechamin;?>" max="<?=$fechamax;?>"  class="form-control" id="fecha_caducidad" required>
                <div class="date-danger"></div> 
            </div>
            
            <div class="mb-4">
                <label for="imagen"><i class="custom-file-upload bi bi-image-fill"></i> &nbsp Imagen del producto <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="imagen" id="archivoInput"  onchange="return validarExt()" required></input>
                <div id ="visorArchivo" class="image-danger"></div>  
            </div> 

            <div class="mb-4">
                <label for="desc_producto"> <i class="bi bi-question-square-fill" ></i> &nbsp Información adicional</label>
                <textarea name="desc_producto" id="desc_producto" class="form-control" onchange="toggleButton()" placeholder="inf.." maxlength="150"></textarea>
                <div class="mensaje text-danger"></div>
                <p class="text-muted mb-2">(*)campos obligatorios</p>
            </div> 
                                            
            <div class="mb-2">
                <button id ="botton" class=" col-12 btn btn-warning d-flex justify-content-between ">
                    <span> &nbsp Publicar </span><i id="icono" class="bi bi-check-lg "></i>
                    
                </button>
            </div>
            <div class="mb-2" >
            <button type="button" id ="bottonDescartar" class="col-12 btn btn-dark d-flex justify-content-between" onclick="fntdescartar(1)">
                    <span>&nbsp Descartar </span><i id="iconoDescartar" class="bi bi-x-lg"></i>  
                </button>
        </div>  
    </div>
    
</div>

</section>

<div>
    <div style="text-align:center" class="bg-dark col-lg-12 ">
        <img class="  img-fluid; bi bi-clipboard" style="color: white ;"  width="10%" /> 
    </div> 
</div>