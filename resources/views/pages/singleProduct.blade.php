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
    <div class="container">
        <h1 class="display-1 fw-bold text-center">
            Your Product
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $item->image) }}" alt="">
            </div>
            <div class="col-lg-6">
                <h1> Name:{{ $item->name }}</h1>
                <h4>Price:{{ $item->price }}</h4>
            </div>
        </div>
    </div>
</body>

</html>
