<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Categories</title>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class=""><h2><a href="{{url('admin')}}">Dashboard</a></h2><li>
            @foreach($categories as $category)
            <li class="nav-item">
                <a class="nav-link" href="#">{{ $category->cat_name }}</a>
            </li>
            @endforeach
            <li><a href="{{url('/')}}">Về trang chủ</a></li>
        </ul>
    </nav>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Product title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>  
        </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
            <tr>
                <td>{{ $product->prd_title }}</td>
                <td>{{ $product->prd_price }}</td>
                <td>{{ $product->prd_img }}</td>
                <td>{{ $product->prd_des }}</td>
                <td><button><a href="{{ url('admin',['id' => $product->id]) }}">Sửa</a></button></td> 
                 <td>
                 <form action="{{url('admin',['id' => $product->id])}}" method="post">
                 {{ csrf_field() }}
                 @method('DELETE')
                 <button type="submit">Xóa</button>
                 <form>
                 </td>
                <td><button><a href="{{route('admin.create')}}">Thêm</a></button></td>
            </tr>
    @endforeach
    </tbody>
</table>


    </div>
</body>
</html>