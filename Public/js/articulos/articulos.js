$(document).on("click", "#detailsProduct", function(){
    let fill = $(this).closest("#listCatalogo");

    let id_product = fill.find("td:eq(0)").text();
    
    $.ajax({
        type: "POST",
        url: "./articulos/showDetails",
        data: {"id_product":id_product},
        dataType: "json",
        success: function (response) {
            //window.location.href = "./articulos/catproductdetails";
            $("#newview").html(response);
        }
    });
});

$(document).on("click", "#editProduct", function () {
  let fill = $(this).closest("#listCatalogo");

  let id_product = fill.find("td:eq(0)").text();

  $.ajax({
    type: "POST",
    url: "./articulos/upViewProduct",
    data: { id_product: id_product },
    dataType: "json",
    success: function (response) {
      //window.location.href = "./articulos/catproductdetails";
      $("#newview").html(response);
    },
  });
});

