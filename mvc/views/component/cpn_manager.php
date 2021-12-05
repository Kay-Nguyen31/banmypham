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
                    <li><a href="#"><img src="./public/img/icon/cosmetics.png" alt="" style="width:12%"> Quản lý Sản phẩm</a></li>
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


    <div class="content" style="margin-top: 60px;">
        <div class="wrapper">
            <div class="item">
                <img src="./public/img/icon/credit.png" alt="" style="width:10%">
                <span> Tiền bán hàng</span>
                <p style="margin-left: 15px;"> 120.000.000.000 Vnđ</p>
            </div>
            <div class="item">
                <img src="./public/img/icon/carts.png" alt="" style="width:10%">
                <span> Tổng đơn hàng</span>
                <p style="margin-left: 15px;"> 120/đơn</p>
            </div>
            <div class="item">
                <img src="./public/img/icon/file.png" alt="" style="width:10%">
                <span> đơn hàng chờ xác nhận</span>
                <p style="margin-left: 15px;"> 5/đơn</p>
            </div>
        </div>
    </div>

    <div class="content_thongtin" style="margin-top: 60px;">
        <div class="wrapper_thongtin">
            <div class="item_thongtin">
                <div class="title_content">
                    <span style="font-size: 25px;"> <i class="ti-control-forward"></i> hoạt động</span>
                </div>
                <div class="thongtin">
                    <table>
                        <tr>
                            <td style="width:70%;">Tiền bán hàng</td>
                            <td>120.000.000</td>
                        </tr>
                        <tr>
                            <td style="width: 70%">Số đơn hàng</td>
                            <td>120/đơn</td>
                        </tr>
                        <td style="width:70%">Số sản phẩm</td>
                        <td>5/đơn</td>
                        </tr>
                    </table>
                </div>
         
            </div>
            <div class="item_thongtin">
                <div class="title_content">
                    <span style="font-size: 25px;"> <i class="ti-layout-media-overlay"></i> thông tin sản phẩm</span>
                </div>
                <div class="thongtin">
                    <table>
                        <tr>
                            <td style="width:70%;">Tổng sản phẩm đang bán</td>
                            <td>100/sản phẩm</td>
                        </tr>
                        <tr>
                            <td style="width:70%">Tổng các loại sản phẩm</td>
                            <td>10/loại</td>
                        </tr>
                        <td style="width:70%">Sản phẩm có số lượt mua nhiều </td>
                        <td>Kem đen da</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>











<script>
    function a() {
        document.getElementById('menu-left').style.display = "block";
    }

    function b() {
        document.getElementById('menu-left').style.display = "none";
    }
</script>