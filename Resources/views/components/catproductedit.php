 <div class="title-section">
   <h2>Editar articulo</h2>
 </div>
 <div class="container-section pl-2">
   <div class="row">
     <div class="col-12">
       <a href="./articulos">
         <i class="fa-solid fa-arrow-left"></i> <span>Regresar</span>
       </a>
     </div>
   </div>
   <div class="row mt-2">
     <div class="col-12">
       <h5>
         <i class="fa-solid fa-tag"></i> Producto: <?= $param['nombre_product'] ?>
       </h5>
     </div>
   </div>
   <div class="row mt-2">
     <div class="container-fluid d-flex gap-4">
       <div class="col-3 img-product-container">

         <img src="<?= $param['img1'] != '' ? APP['baseurl'] .  $param['img1'] : APP['baseurl'] . '/Public/img/products/no_picture.png';  ?>" alt="product_img" />

       </div>
       <div class="col-3 img-product-container">

         <img src="<?= $param['img2'] != '' ? APP['baseurl'] .  $param['img2'] : APP['baseurl'] . '/Public/img/products/no_picture.png';  ?>" alt="product_img" />

       </div>
       <div class="col-3 img-product-container">

         <img src="<?= $param['img3'] != '' ? APP['baseurl'] .  $param['img3'] : APP['baseurl'] . '/Public/img/products/no_picture.png';  ?>" alt="product_img" />

       </div>
     </div>
   </div>
   <div class="row mt-2">
     <div class="container-fluid d-flex gap-4">
       <div class="col-3">
         <p>ID: <span> <?= $param['id_product'] ?> </span></p>
         <p>SKU:<span> <?= $param['sku'] ?> </span></p>
         <p>
           Descripción:<span> <?= $param['description'] ?> </span>
         </p>
       </div>
       <div class="col-3">
         <p>Titulo: <span> <?= $param['nombre_product'] ?> </span></p>
         <p>Categoria:<span> <?= $param['nombre_cat'] ?> </span></p>
         <p>Sub Categoria:<span> <?= $param['nombre_Subcat'] ?> </span></p>
         <p>Marca:<span> <?= $param['nombre_marca'] ?> </span></p>
       </div>
       <div class="col-3">
         <p>Costo: <span>$ <?= $param['costo'] ?> </span></p>
         <p>Preci Publico:<span> $ <?= $param['precio'] ?> </span></p>
       </div>
     </div>
   </div>
 </div>