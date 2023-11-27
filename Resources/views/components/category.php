<?php
require APP_ROOT . 'Resources/views/shared/header.php';
?>

<main id="container-main">
    <?php
    require APP_ROOT . 'Resources/views/shared/navbar.php';
    ?>
    <section class="container">
        <div class="title-section">
            <h2>Categorías</h2>
        </div>
        <div class="container-section">
            <div class="row p-4">
                <div class="col-6">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID:</th>
                                <th>Categoria</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($param as $category) : ?>
                                <tr id="table-cat">
                                    <td> <?= $category['id_cat'] ?> </td>
                                    <td> <?= $category['nombre_cat'] ?> </td>
                                    <td>
                                        <div class="group-btn">
                                            <button id="btn-updateCat" type="button" class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#modalEditCat">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                            <button id="btn-deleteCat" class="btn btn-delete" data-bs-toggle="modal" data-bs-target="#modalDeleteCat">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <div class="p-3">
                        <div class="row">
                            <div class="col">
                                <input id="newCategory" type="text" class="form-control shadow-none" placeholder="Ingresa la categoría" autocomplete="off">
                                <div id="alert_err" class="alert_ms alert-danger mt-1 text-center" role="alert">
                                    campo vacío!
                                </div>
                                <div id="alert_existe" class="alert_ms alert-danger mt-1 text-center" role="alert">
                                    Ya existe esta categoría!
                                </div>

                            </div>
                            <div class="col">
                                <button id="btn_guardCat" type="button" class="btn btn-success">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<!-- modals sections -->
<!-- update modal -->
<div class="modal fade" id="modalEditCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Editar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="update-cat" class="modal-body">

            </div>
            <div id="alert_err-update" class="alert_ms alert-danger mt-1 text-center" role="alert">
                campo vacío!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-delete" data-bs-dismiss="modal">Cerrar</button>
                <button id="conf-update" type="button" class="btn btn-confirm"> <i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!-- #borrar modal -->
<div class="modal fade" id="modalDeleteCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Eliminar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="delete-cat" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-delete" data-bs-dismiss="modal">Cerrar</button>
                <button id="conf-delete" type="button" class="btn btn-confirm"> <i class="fa-solid fa-arrows-rotate"></i> Eliminar</button>
            </div>
        </div>
    </div>
</div>

<?php
require APP_ROOT . 'Resources/views/shared/footer.php';
?>