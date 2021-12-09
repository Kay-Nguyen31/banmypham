<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/giohang.css">
    <link rel="stylesheet" href="./public/themify-icons/themify-icons.css">
</head>

<body>
    <div class="container">
        <div class="giohang">
            <div class="title">
                <h2>Giỏ hàng</h2>
            </div>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Thông tin sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
                <tr>
                    <td><img src="./public/img/home/laroche.png"></td>
                    <td class="tensp">Laroche-posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin 400ml (IP01)</td>
                    <td>401,250đ</td>
                    <td><input type="number" id="quantity" value="1" name="quantity" min="1" max="5"></td>
                    <td>401,250đ</td>
                    <td><button><i class="ti-close"></i></button></td>
                </tr>
            </table>
            <div class="btn">
                <button>Mua tiếp</button>
                <button>Cập nhật giỏ hàng</button>
            </div>
        </div>
        <div class="donhang">
            <div class="title">
                <h2>Đơn hàng</h2>
            </div>
            <div class="bill">
                <div class="price">
                    <h3 class="tongtien">Tổng tiền</h3>
                    <h3>374,000đ</h3>
                </div>
                <button>Thanh toán</button>
            </div>
        </div>
    </div>
</body>

</html>