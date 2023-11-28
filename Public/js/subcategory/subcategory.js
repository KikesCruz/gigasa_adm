/**
 * Agrega sub categoria
 */

$(document).on("click", "#btnSubCategory", function () {
  let valCategory = $("#categoryList").find("option:selected").val();
  let nameSubCategory = $("#txtSubCategory").val();

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
