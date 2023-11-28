/**
 * Luis Enrique Cruz
 *  # Fncion que guarda marcas
 */

$(document).on("click", "#btn_addBrand", function () {
  $.ajax({
    type: "POST",
    url: "./brands/addBrand",
    data: { newBrand: $("#newBrand").val() },
    dataType: "json",
    success: function (response) {
      switch (response) {
        case "empty":
          $("#alert_err").css("display", "block");
          setTimeout(function () {
            $("#alert_err").css("display", "none");
          }, 800);
          break;
        case "exists":
          $("#alert_existe").css("display", "block");
          setTimeout(function () {
            $("#alert_existe").css("display", "none");
          }, 800);
          break;
        case "add":
          setTimeout(function () {
            location.reload();
          }, 500);
          break;
      }
    },
  });
  $("#newBrand").val('');
});
