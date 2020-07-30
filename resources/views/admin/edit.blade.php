<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
    <ul class="navbar-nav">
    <li class=""><h2><a href="{{url('admin')}}">Dashboard</a></h2><li>
    <li><h3><a href="{{url('/')}}">Về trang chủ</a></h3></li>
    </ul>
</nav>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Product title</th>
            <th>Price</th>
            <th>Category</th>
            <th>Image</th>
            <th>Description</th>  
        </tr>
    </thead>
    <tbody>
        <form action="{{ url('admin',['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <tr>
            <td><input type="text" name="title" value="{{$product->prd_title}}" required></td>
                <td><input type="text" name="price" value="{{$product->prd_price}}" required></td>
                <td><input type="text" name="cat" value="{{$product->category}}"required placeholder="1, 2, 3, 4"></td>
                <td><input type="file" name="image" required></td>
                <td><input type="text" name="description" value="{{$product->prd_des}}" required></td>
                <td><button type="submit">Lưu</button></td>
            </tr>
        </form>
    </tbody>
</table>


    </div>
</body>
</html>