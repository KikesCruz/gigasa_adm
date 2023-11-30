<?php
require APP_ROOT . 'Resources/views/shared/header.php';
?>

<main id="container-main">
    <?php
    require APP_ROOT . 'Resources/views/shared/navbar.php';
    ?>
    <section id="newview" class="container">
        <div class="title-section">
            <h2>Stock Ecommer</h2>
        </div>
        <div class="container-section">
            <table class="table align-middle table-striped table-hover">
                <thead>
                    <tr>
                    
                        <th>SKU</th>
                        <th>Articulo</th>
                        <th>Categoría</th>
                        <th>Sub Categoría</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Valor Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($param as $inventory) : ?>
                        <tr id="listCatalogo">
                     
                            <td> <?= $inventory['sku'] ?> </td>
                            <td> <?= $inventory['nombre_product'] ?> </td>
                            <td> <?= $inventory['nombre_cat'] ?> </td>
                            <td> <?= $inventory['nombre_Subcat'] ?> </td>
                            <td> <?= $inventory['nombre_marca'] ?> </td>
                            <td> $ <?= $inventory['precio'] ?> </td>
                            <td>  <?= $inventory['stock'] ?> </td>
                            <td> $ <?= $inventory['total_stock'] ?> </td>
                            <td class="align-top">
                                <div class="dropdown">
                                    <button class="d-flex align-items-center dropdown-toggle btn btn-warning" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ver
                                    </button>
                                    <ul class="dropdown-menu  text-small shadow" aria-labelledby="dropdownUser1">
                                        <li id="detailsProduct" class="dropdown-item item-menu">Detalles</li>
                                        <li id="editProduct" class="dropdown-item item-menu">Editar</li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>


<?php
require APP_ROOT . 'Resources/views/shared/footer.php';
?>