<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> 
    <title>Products</title>
</head>
<body>
<div class="wrap">
    <div class="navbar">
        <div class="logo"><a href="{{ URL::to('/') }}">LOGO</a></div>
    </div>
    <div class="header">
        <span class="title-2 product-title">PRODUCTS</span>
    </div>
    <div class="categories">
        <ul>
            <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 1</a></li>
        </ul>
    </div>
    <div class="products">
        <ul class="product-ul">
            <li>
                <a href="#">
                    <img src="img/family-2.jpg" width="200" height="200">
                    <p class="product-name">Product 1</p>
                    <p class="product-des">Product long description</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="img/family-2.jpg" width="200" height="200">
                    <p class="product-name">Product 1</p>
                    <p class="product-des">Product long description</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="img/family-2.jpg" width="200" height="200">
                    <p class="product-name">Product 1</p>
                    <p class="product-des">Product long description</p>
                </a>
            </li>
            
        </ul>
    </div>
    <div class="footer">
        <p class="copyright">Copyright by AnhNhat </p>
    </div>
</div>
</body>
</html>