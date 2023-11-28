<?php
require APP_ROOT . 'Resources/views/shared/header.php';
?>

<main id="container-main">
    <?php
    require APP_ROOT . 'Resources/views/shared/navbar.php';
    ?>
    <section class="container">
        <div class="title-section">
            <h2>Sub Categorías</h2>
        </div>
        <div class="container-section">
            <div class="row p-4">
                <div class="col-6">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID:</th>
                                <th>Categoria</th>
                                <th>Sub Categoria</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($param['subcat'] as $category) : ?>
                                <tr id="table-Subcat">
                                    <td> <?= $category['id_catSub'] ?> </td>
                                    <td> <?= $category['nombre_cat'] ?> </td>
                                    <td> <?= $category['nombre_SubCat'] ?> </td>
                                    <td>
                                        <div class="group-btn">
                                            <button id="btn-updateSubCat" type="button" class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#modalEditSubCat">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                            <button id="btn-deleteSubCat" class="btn btn-delete" data-bs-toggle="modal" data-bs-target="#modalDeleteSubCat">
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
                    <div class="p-1">
                        <div class="row">
                            <div class="col">
                                <select id="categoryList" class="form-select shadow-none" aria-label="Default select example">
                                    <option selected=''>Categorías</option>

                                    <?php foreach ($param['cat'] as $cat) : ?>
                                        <option value="<?= $cat['id_cat'] ?>"><?= $cat['nombre_cat'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <div class="col">
                                <input id="txtSubCategory" type="text" class="form-control shadow-none" placeholder="Ingresa la categoría">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button id="btnSubCategory" type="button" class="btn btn-success">Guardar</button>
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
<div class="modal fade" id="modalEditSubCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Editar Sub. Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="conf_updateSub" class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center fs-6 fw-bold"> ID de sub categoria: <span id="titleIdSub"></span> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <select id="categoryListModal" class="form-select shadow-none" aria-label="Default select example">
                            <option value="" selected disabled hidden>Categorías</option>

                            <?php foreach ($param['cat'] as $cat) : ?>
                                <option value="<?= $cat['id_cat'] ?>"><?= $cat['nombre_cat'] ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="col-6">
                        <input id="extSubCat" class="form-control shadow-none" type="text">
                    </div>
                </div>
            </div>
            <div id="alert_err-update" class="alert_ms alert-danger mt-1 text-center" role="alert">
                campo vacío!
            </div>
            <div id="alert_existe" class="alert_ms alert-danger mt-1 text-center" role="alert">
                Ya existe esta sub categoría!
            </div>
            <div class="modal-footer">
                <button id="deleteSub" type="button" class="btn btn-delete" data-bs-dismiss="modal">Cerrar</button>
                <button id="btn_updateSub" type="button" class="btn btn-confirm"> <i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!-- #borrar modal -->
<div class="modal fade" id="modalDeleteSubCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Eliminar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="delete-subcat" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-delete" data-bs-dismiss="modal">Cerrar</button>
                <button id="conf-deletesub" type="button" class="btn btn-confirm"> <i class="fa-solid fa-arrows-rotate"></i> Eliminar</button>
            </div>
        </div>
    </div>
</div>

<?php
require APP_ROOT . 'Resources/views/shared/footer.php';
?>