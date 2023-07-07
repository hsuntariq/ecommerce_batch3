<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot />
    <title>Your Item</title>
</head>

<body>
    <x-nav />
    <div class="container">
        <h1 class="display-1 fw-bold text-center">
            Your Product
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $item->image) }}" alt="">
            </div>
            <div class="col-lg-6">
                <form action="/add-to-cart" method="POST">
                    @csrf
                    <h1> Name:{{ $item->name }}</h1>
                    <input type="hidden" name="product_name" value="{{ $item->name }}" id="">
                    <h4>Price:{{ $item->price }}</h4>
                    <input type="hidden" name="product_price" value="{{ $item->price }}" id="">
                    <input type="hidden" name="product_image" value="{{ $item->image }}">
                    <button type="submit" class="btn w-100 my-2" style="background-color: #FED44D">Add To Cart</button>
                </form>
                <button class="btn w-100 my-2" style="background-color: hotpink">CheckOut</button>
            </div>
        </div>
    </div>
</body>

</html>
