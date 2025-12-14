<script>
    $(function() {
        const orderedList = [];

        $('.btn-add').on('click', function() {
            const card = $(this).closest('.card-body');
            const name = card.find('.card-title').text();
            const price = Number(card.find('h3').text()); // harga satuan dari DB
            const id = card.find('.id_product').val();

            const index = orderedList.findIndex(item => item.id == id);

            if (index === -1) {
                // Produk baru
                orderedList.push({
                    id,
                    name,
                    qty: 1,
                    price,
                    total: price
                });

                $('#tbl-cart tbody').append(`
                <tr id="row-${id}">
                    <td>${name}</td>
                    <td class="qty">1</td>
                    <td class="total">${price}</td>
                </tr>
            `);
            } else {
                // Produk sudah ada → tambah qty dan total
                orderedList[index].qty++;
                orderedList[index].total = orderedList[index].qty * orderedList[index].price;

                // update tampilan
                const row = $(`#row-${id}`);
                row.find('.qty').text(orderedList[index].qty);
                row.find('.total').text(orderedList[index].total);
            }

            console.log(orderedList);
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
                    window.location.href = "{{ route('order.detail', ['id' => '__ID__']) }}"
                        .replace('__ID__', res.id);
                }
            });
        });
    });
</script>
