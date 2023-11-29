<?php
require APP_ROOT . 'Resources/views/shared/header.php';
?>

<main id="container-main">
    <?php
    require APP_ROOT . 'Resources/views/shared/navbar.php';
    ?>
    <section id="newview" class="container">
        <div class="title-section">
            <h2>Articulos del catalogo</h2>
        </div>
        <div  class="container-section">
            <table class="table align-middle table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID Producto:</th>
                        <th>SKU</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Sub Categoría</th>
                        <th>Marca</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($param as $product) : ?>
                        <tr id="listCatalogo">
                            <td> <?= $product['id_product'] ?> </td>
                            <td> <?= $product['sku'] ?> </td>
                            <td> <?= $product['nombre_product'] ?> </td>
                            <td> <?= $product['nombre_cat'] ?> </td>
                            <td> <?= $product['nombre_Subcat'] ?> </td>
                            <td> <?= $product['nombre_marca'] ?> </td>
                            <td>
                                <?= $product['status_product'] == 1 ?
                                    ' <span
                                class="badge bg-success rounded-pill d-inline">Activo</span>' :
                                    ' <span
                                class="badge bg-secondary rounded-pill d-inline">Inactivo</span>';


                                ?> </td>
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