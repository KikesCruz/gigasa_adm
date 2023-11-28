<?php
require APP_ROOT . 'Resources/views/shared/header.php';
?>

<main id="container-main">
    <?php
    require APP_ROOT . 'Resources/views/shared/navbar.php';
    ?>
    <section class="container">
        <div class="title-section">
            <h2>Articulos del catalogo</h2>
        </div>
        <div class="container-section">
            <table id="list_inventario" class="table align-middle table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID Producto:</th>
                        <th>SKU</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Sub Categoría</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($param as $product) : ?>
                        <tr>
                            <td> <?= $product['id_product'] ?> </td>
                            <td> <?= $product['sku'] ?> </td>
                            <td> <?= $product['nombre_product'] ?> </td>
                            <td> <?= $product['id_catSub'] ?> </td>
                            <td> <?= $product['id_catSub'] ?> </td>
                            <td> <?= $product['status_product'] ?> </td>
                            <td class="align-top">
                                <div class="dropdown">
                                    <button class="d-flex align-items-center dropdown-toggle btn btn-warning" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ver
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="#">Editar</a>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Profile</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Sign
                                                out</a>
                                        </li>
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