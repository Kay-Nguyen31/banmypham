<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/trangchu.css">
    <link rel="stylesheet" href="./public/css/chitietsp.css">
</head>
<body>
    <!---------------------------- header ------------------------------------->
    <div class="header">
        <div class="header-content">
            <div class="item-timkiem">
                <input class="ip-timkiem" type="text" placeholder="Tìm kiếm..." />
                <input class="bt-timkiem" type="button" value="Tìm kiếm">
            </div>
            <div class="item-logo">
                <img src="./public/img/home/logo.png" alt="">
            </div>
            <div class="item-dndk">
                <a href="#" class="dangnhap">Đăng nhập</a>
                <a href="#" class="dangki">Đăng kí</a>
            </div>
        </div>
    </div>
    <!---------------------------- end-header ------------------------------------->
    <!---------------------------- menu ------------------------------------->
    <nav>
        <ul class="menu" id="menu-reponsive">
            <li><a href="#" title="">Trang chủ</a></li>
            <li><a href="#" title="">Giới thiệu</a></li>
            <li><a href="#" title="">Loại sản phẩm</a>
                <!-- menu con sổ xuống cấp 1 -->
                <ul>
                    <li><a href="#" title="">Son môi</a></li>
                    <li><a href="#" title="">Kem nền</a></li>
                    <li>
                        <a href="#" title="">Sữa rữa mặt</a>
                    </li>
                    <li><a href="#" title="">Phấn phũ</a></li>
                </ul>
            </li>
            <li><a href="#" title="Liện hệ">Liên hệ</a></li>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">WEB</a>
        </ul>
    </nav>
    <!-- ------------------------------end-menu--------------------------------- -->
</body>
</html>