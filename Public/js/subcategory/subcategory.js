/**
 * Agrega sub categoria
 */

$(document).on("click", "#btnSubCategory", function () {
  let valCategory = $("#categoryList").find("option:selected").val();
  let nameSubCategory = $("#txtSubCategory").val();
  console.log(valCategory);
  $.ajax({
    type: "POST",
    url: "./subcategory/save",
    data: { category: valCategory, subCategory: nameSubCategory },
    dataType: "json",
    success: function (response) {
      switch (response) {
        case "blanco":
          $("#alert_err").css("display", "block");
          setTimeout(function () {
            $("#alert_err").css("display", "none");
          }, 800);
          break;
        case true:
          setTimeout(function () {
            location.reload();
          }, 500);
          break;
      }
    },
  });
  $("#txtSubCategory").val("");
});

/**
 * Luis Enrique Cruz
 * #Función actualizar
 *
 */

$(document).on("click", "#btn-updateSubCat", function () {
  let fila = $(this).closest("#table-Subcat");
  let upSubCat = {
    id_sub: fila.find("td:eq(0)").text(),
    subCatName: fila.find("td:eq(2)").text(),
  };

  $("#extSubCat").val(upSubCat["subCatName"]);
  $("#titleIdSub").html(`<span id="id_sub">${upSubCat["id_sub"]}</span>`);
});

$(document).on("click", "#btn_updateSub", function () {
  let dataSend = {
    id_cat: $("#categoryListModal").find("option:selected").val(),
    id_subCat: $("#id_sub").text(),
    newName: $("#extSubCat").val(),
  };

  $.ajax({
    type: "POST",
    url: "./subcategory/update",
    data: dataSend,
    dataType: "json",
    success: function (response) {
      if (response == "exists") {
        $("#alert_existe").css("display", "block");
        setTimeout(function () {
          $("#alert_existe").css("display", "none");
        }, 800);
      } else if (response == "add") {
        setTimeout(function () {
          location.reload();
        }, 500);
      }
    },
  });
});

$(document).on("click", "#btn-deleteSubCat", function () {
  let fila = $(this).closest("#table-Subcat");
  $("#delete-subcat").html(
    `
    <p class="text-center fs-6 fw-normal">ID Sub Categoria: <span id="id_cat")
      .text()}"> ${fila.find("td:eq(0)").text()} </span> </p>
    <p class="text-center fs-6 fw-normal">${fila.find("td:eq(2)").text()}</p>
    `
  );
});


$(document).on("click", "#conf-deletesub", function () {
  $.ajax({
    type: "POST",
    url: "./subcategory/delete",
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