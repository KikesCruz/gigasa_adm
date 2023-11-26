/**
 * Luis enrique cruz
 * #Funcion guardar categorias
 */
$(document).on("click", "#btn_guardCat", function () {
  $.ajax({
    type: "POST",
    url: "./category/save",
    data: { newCategory: $("#newCategory").val() },
    dataType: "json",
    success: function (response) {
      switch (response) {
        case "blanco":
          $("#alert_err").css("display", "block");
          setTimeout(function () {
            $("#alert_err").css("display", "none");
          }, 800);
          break;
        case "existe":
          $("#alert_existe").css("display", "block");
          setTimeout(function () {
            $("#alert_existe").css("display", "none");
          }, 800);
          break;
        case "agregar":
          setTimeout(function () {
            location.reload();
          }, 500);
          break;
      }
    },
  });

  $("#newCategory").val("");
});

/**
 * Luis enrique cruz
 * #Funcion eliminar
 */
$(document).on("click", "#btn-deleteCat", function () {
  let fila = $(this).closest("#table-cat");
  let itemExtrac = `<span id="id_cat" class="text-center fs-6 fw-normal" > ${fila
    .find("td:eq(0)")
    .text()}</span>  <span> | ${fila.find("td:eq(1)").text()}  </span>`;
  $("#delete-cat").html(itemExtrac);
});

$(document).on("click", "#conf-delete", function () {
  $.ajax({
    type: "POST",
    url: "./category/delete",
    data: { id_cat: $("#id_cat").text() },
    dataType: "json",
    success: function (response) {
      console.log(response);
      setTimeout(function () {
        location.reload();
      }, 500);
    },
  });
});

/**
 * Luis enrique cruz
 * #Funcion actualizar
 */

$(document).on("click", "#btn-updateCat", function () {
  let fila = $(this).closest("#table-cat");
  let itemExtrac = `
    <p  class="text-center fs-6 fw-bold" > ID de categoria: <span id="id_cat"> ${fila
      .find("td:eq(0)")
      .text()}</span></p>
    <input id="nombre_cat" type="text" class="form-control shadow-none" value="${fila
      .find("td:eq(1)")
      .text()}">
    `;
  $("#update-cat").html(itemExtrac);
});

$(document).on("click", "#conf-update", function () {
  if ($("#nombre_cat").val() == "" || $("#nombre_cat").val() == " ") {
    $("#alert_err-update").css("display", "block");
    setTimeout(function () {
      $("#alert_err-update").css("display", "none");
    }, 3000);
  } else {
    $.ajax({
      type: "POST",
      url: "./category/update",
      data: { id_cat: $("#id_cat").text(), name_cat: $("#nombre_cat").val() },
      dataType: "json",
      success: function (response) {
        if (response == false) {
          $("#alert_err-update").css("display", "block");
          setTimeout(function () {
            $("#alert_err-update").css("display", "none");
          }, 3000);
        } else {
          setTimeout(function () {
            location.reload();
          }, 500);
        }
      },
    });
  }
});
