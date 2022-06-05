// // Graph
// var ctx = document.getElementById("myChart");

// var myChart = new Chart(ctx, {
//     type: "line",
//     data: {
//         labels: [
//             "Sunday",
//             "Monday",
//             "Tuesday",
//             "Wednesday",
//             "Thursday",
//             "Friday",
//             "Saturday",
//         ],
//         datasets: [{
//             data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
//             lineTension: 0,
//             backgroundColor: "transparent",
//             borderColor: "#007bff",
//             borderWidth: 4,
//             pointBackgroundColor: "#007bff",
//         }, ],
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: false,
//                 },
//             }, ],
//         },
//         legend: {
//             display: false,
//         },
//     },
// });

function add_to_cart(id, buy, url) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var product_id = id;
    var amount = document.getElementById('amount' + id).value;
    var quantity = document.getElementById('quantity' + id).value;

    quantity
    if (Number(amount) < Number(quantity)) {
        document.getElementById('error' + id).innerHTML = 'Quantity can not be Greater Than the Amount (' + amount + ')';
    } else {

        $.ajax({
            url: "/add-to-cart",
            method: "POST",
            data: {
                'quantity': quantity,
                'product_id': product_id,
            },
            success: function(response) {
                cartload()
                if (buy == 1) {
                    window.location.href = url;
                }
            },
        });
    }
}

$(document).ready(function() {
    cartload();
});

function cartload() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/load-cart-data',
        method: "GET",
        success: function(response) {
            $('.basket-item-count').html('');
            var parsed = jQuery.parseJSON(response)
            var value = parsed; //Single Data Viewing
            $('.basket-item-count').append($('<span class="badge badge-pill red">' + value['totalcart'] + '</span>'));
        }
    });
}

$(document).ready(function() {

    $('.increment-btn').click(function(e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 1000) {
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function(e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

});

// Update Cart Data
$(document).ready(function() {

    $('.changeQuantity').click(function(e) {
        e.preventDefault();

        var quantity = $(this).closest(".cartpage").find('.qty-input').val();
        var product_id = $(this).closest(".cartpage").find('.product_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            'quantity': quantity,
            'product_id': product_id,
        };

        $.ajax({
            url: '/update-to-cart',
            type: 'POST',
            data: data,
            success: function(response) {
                window.location.reload();
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
            }
        });
    });

});

// Delete Cart Data
$(document).ready(function() {

    $('.delete_cart_data').click(function(e) {
        e.preventDefault();

        var product_id = $(this).closest(".cartpage").find('.product_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            "product_id": product_id,
        };

        // $(this).closest(".cartpage").remove();

        $.ajax({
            url: '/delete-from-cart',
            type: 'DELETE',
            data: data,
            success: function(response) {
                window.location.reload();
            }
        });
    });

});

// Clear Cart Data
$(document).ready(function() {

    $('.clear_cart').click(function(e) {
        e.preventDefault();

        $.ajax({
            url: '/clear-cart',
            type: 'GET',
            success: function(response) {
                window.location.reload();
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
            }
        });

    });

});