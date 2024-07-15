// public/js/infinite-scroll.js
$(document).ready(function () {
    let page = 1;

    function loadProducts(page) {
        $.ajax({
            url: `/api/products?page=${page}`,
            type: 'GET',
            beforeSend: function () {
                $('#loading').removeClass('hidden');
            },
            success: function (response) {
                $('#loading').addClass('hidden');
                response.data.forEach(product => {
                    $('#product-list').append(`
                        <div class="bg-white p-4 rounded shadow">
                            <h2 class="text-xl font-semibold">${product.name}</h2>
                            <p>${product.description}</p>
                            <p class="text-lg font-bold">$${product.price}</p>
                        </div>
                    `);
                });

                if (response.next_page_url) {
                    $(window).on('scroll', onScroll);
                } else {
                    $(window).off('scroll', onScroll);
                }
            }
        });
    }

    function onScroll() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            $(window).off('scroll', onScroll);
            loadProducts(++page);
        }
    }

    loadProducts(page);
    $(window).on('scroll', onScroll);
});
