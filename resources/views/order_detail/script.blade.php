<script>
    $(function() {
        const orderedList = [];

        $('.btn-add').on('click', function() {
            const name = $(this).closest('.card-body').find('.card-title').text();
            const price = Number($(this).closest('.card-body').find('h3').text());
            const id = $(this).closest('.card-body').find('.id_product').val();

            const index = orderedList.findIndex(list => list.id == id);

            if (index === -1) {
                orderedList.push({
                    id,
                    name,
                    qty: 1,
                    price
                });
                $('#tbl-cart tbody').append(`
                <tr id="row-${id}">
                    <td>${name}</td>
                    <td class="qty">1</td>
                    <td class="price">${price}</td>
                </tr>
            `);
            } else {
                orderedList[index].qty++;
                $(`#row-${id}`).find('.qty').text(orderedList[index].qty);
            }
        });

        // ✅ Tombol save ke session
        $(document).on('click', '#btn-save', function() {
            $.ajax({
                url: "{{ route('order.save') }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cart: orderedList
                },
                success: function(res) {
                    alert(res.message);
                    window.location.href = "{{ route('order.detail') }}";
                }
            });
        });
    });
</script>
