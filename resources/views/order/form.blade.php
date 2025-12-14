
    <br>
    <h2>Order Food Area!</h2>
    <hr>
    @foreach ($categories as $category)
        <br>
        <h3 style="margin-bottom: 10px">{{ $category->name }}</h3>
        <div class="row row-cols-1 row-cols-md-2 g-2 item-product">
            @foreach ($category->product as $product)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <input type="hidden" name="id_product" class="id_product" value="{{ $product->id }}"><br>
                            <h3>{{ $product->price }}</h3>
                            <button class="btn-add btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach