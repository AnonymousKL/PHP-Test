<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> 
    <title>Detail</title>
</head>
<body>
<div class="wrap">
    <div class="navbar-detail">
        <div class="logo logo-detail"><a href="#">LOGO</a></div>
        <p class="right"><a href="#" style="color: black">Product</a></p>
    </div>
    <div class="image-left">
        <img class="big-image"src="{{ asset('img/family-2.jpg') }}" >
        <ul class="small-image">
            <li>
                <img src="{{ asset('img/family-2.jpg') }}">
            </li>
            <li>
                <img src="{{ asset('img/family-2.jpg') }}">
            </li>
        </ul>
    </div>
    <div class="infor-right">
        <p class="product-name-dt">PRODUCT 1</p>
        <p class="cat-dt">Category 1</p>
        <p class="price">$100.00</p>
        <hr class="line line-dt">
        <div class="cart">
            <span>- 1 +</span>
            <button class="btn-cart"><a href="#">Add to cart</a></button>
        </div>
    </div>
    <div class="similar-product">
        <p>Similar Products</p>
        <hr class="line line-similar">
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
</div>
</body>
</html>