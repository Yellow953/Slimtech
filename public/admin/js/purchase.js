$(document).ready(function () {
    // Add product btn
    $(".add-product-btn").on("click", function (e) {
      e.preventDefault();
      var name = $(this).data("name");
      var id = $(this).data("id");
      var price = parseFloat($(this).data("price")).toLocaleString(undefined, {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
      });
      
      $(this).removeClass("btn-success").addClass("btn-default disabled");
  
      var html = `
        <tr>
          <td>${name}</td>
          <td>
            <input type="number" name="products[${id}][quantity]" data-price="${price}" class="form-control" min="1" value="1">
          </td>
          <td class="product-price">${price}</td>
          <td>
            <button class="btn btn-danger btn-sm remove-product-btn" data-id="${id}">
              <span class="fa fa-trash"></span>
            </button>
          </td>
        </tr>`;
  
      $(".purchase-list").append(html);
  
      // Calculate total price
      calculateTotal();
    });
  
    // Remove product btn
    $("body").on("click", ".remove-product-btn", function (e) {
      e.preventDefault();
      var id = $(this).data("id");
      $(this).closest("tr").remove();
      $("#product-" + id).removeClass("btn-default disabled").addClass("btn-success");
      calculateTotal();
    });
  
    // Update the total price based on quantity, months, or type changes
    $("body").on("keyup change", ".form-control[name$='[quantity]']", function () {
      updateProductPrice($(this));
      calculateTotal();
    });
});
  
function updateProductPrice(input) {
    var unitPrice;

    unitPrice = parseFloat(input.closest("tr").find("[name$='[quantity]']").data('price')) || 0;
    
    var quantity = Number(input.closest("tr").find("[name$='[quantity]']").val()) || 0;

    var totalPrice = (quantity * unitPrice).toLocaleString(undefined, {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    });
  
    input.closest("tr").find(".product-price").html(totalPrice);
}
  
function calculateTotal() {
    var price = 0;
  
    $(".purchase-list .product-price").each(function () {
      price += parseFloat($(this).html().replace(/,/g, ""));
    });
  
    // Update the total price input field
    $(".total-price").val(price.toLocaleString(undefined, {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    }));
  
    // Check if price > 0
    if (price > 0) {
      $("#form-btn").removeClass("disabled");
    } else {
      $("#form-btn").addClass("disabled");
    }
}
 