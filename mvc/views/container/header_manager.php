<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/manager.css">
    <link rel="stylesheet" href="./public/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Oswald:wght@500;700&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/cpn_sanpham.css">
    <link rel="stylesheet" href="./public/css/cpn_addsp.css">
    <title>Manager</title>
</head>

<body>

    <div class="container">

        <div class="container-left" id="menu-left" style="background: #fff;">
            <button><i class="ti-close" onclick="b()" style="height:80px;width:80px"></i></button>
            <div class="center">
                <div class="logo">
                    <img src="./public/img/logo/logo.png" alt="" style="width:100%">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#"> <img src="./public/img/icon/home.png" alt="" style="width:10%"> Trang Chủ</a></li>
                        <li><a href="index.php?page=cpn_sanpham"><img src="./public/img/icon/cosmetics.png" alt="" style="width:12%"> Quản lý Sản phẩm</a></li>
                        <li><a href="#"> <img src="./public/img/icon/type-2.png" alt="" style="width:12%"> Quản lý loại sản phẩm</a></li>
                        <li><a href="#"> <img src="./public/img/icon/bill.png" alt="" style="width:12%"> Quản lý Đơn hàng</a></li>
                        <li><a href="#"> <img src="./public/img/icon/guest-list.png" alt="" style="width:12%"> Quản lý Khách Hàng</a></li>
                        <li><a href="#"> <img src="./public/img/icon/employee.png" alt="" style="width:12%"> Quản lý Nhân viên</a></li>
                        <li><a href="#"><img src="./public/img/icon/analytics.png" alt="" style="width:12%"> Thống Kê</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-right" style="background:#FFF">
            <div class="header-right" style="background:#FFF">
                <div class="button_display">
                    <div class="button_left">
                        <img src="./public/img/icon/mail.jpg" alt="" style="width:30px;margin-left:30px">
                        <img src="./public/img/icon/bell.jpg" alt="" style="width:30px;margin-left:10px">
                    </div>
                    <div class="button_right">
                        <button onclick="a()"><i class="ti-menu" style="height:80px;width:80px"></i></button>
                    </div>
                </div>
                <div class="user">
                    <div class="user-left">
                        <ul>
                            <li>
                                <a href="#">Hello Admin
                                    <ul class="sub-menu">
                                        <li><a href="#" style="color:#64C5B1;"><button style="background: none;border:none"><i class="ti-reload" style="width:2px;color:black"></i></button> Đổi mật khẩu</a></li>
                                        <li><a href="#" style="color:#64C5B1;"> <img src="./public/img/icon/log-out.png" alt="" style="width:10%"> Đăng xuất</a></li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-right">
                        <img src="./public/img/icon/user.png" alt="" style="width:50px">
                    </div>
                </div>
            </div>
        </div>