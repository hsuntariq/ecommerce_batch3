<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot />
    <title>Document</title>
</head>

<body>
    <x-nav />
    <div class="container">
        <h1 class="display-1 text-center">
            Your Products
        </h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Item Quantity</th>
                <th>Item image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_price }}</td>
                    <td>4</td>
                    <td>{{ $item->product_image }}</td>

                    <td>
                        <button class="btn btn-info">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-danger ">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
