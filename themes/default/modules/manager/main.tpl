<!-- BEGIN: main -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế giới di động</title>
    // <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Thang.css">
    <link rel="stylesheet" href="css/Hoang.css">
    <link rel="stylesheet" href="css/Chinh.css">
    // <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Phần của Thắng -->

    <!-- Thanh quang cao tren -->
    <div class="header-top-bar">
        <div id="topdemo" class="carousel slide" data-bs-ride="carousel">

            <!-- khối silde -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/anhduan1.webp" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/images/anhbanner2.webp" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/images/anhbanner3.webp" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/images/anhbanner4.webp" alt="">
                </div>
            </div>

            <!-- nút di chuyển  -->
            <button class="carousel-control-prev" type="button" data-bs-target="#topdemo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#topdemo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="header">
        <nav>
            <ul>
                <li id="logo">
                </li>
                <li id="adress-form"><a href="#">
                        <p>Xem giá tồn kho tại: <b>Đà nẵng</b></p><i class='bx bxs-down-arrow'></i>
                    </a>
                </li>
                <li>
                    <form action=""><input type="text" placeholder="Bạn tìm gì ..."><i class='bx bx-search'></i></form>
                </li>
                <li><a href="#">Tài khoản & Đơn hàng</a></li>
                <li class="shopping">
                    <i class='bx bx-cart'></i>
                    <span class="quantity">0</span>
                    <p class="giohang">Giỏ hàng</p>
                </li>
                <li>
                    <div class="list-items">
                        <div><a href="#">24h<br>Công nghệ</a></div>
                        <div id="hoidap" style="line-height: 30px;"><a href="#">Hỏi đáp</a></div>
                        <div style="line-height: 30px;"><a href="#">Game App</a></div>
                    </div>
                </li>
                <div class="adress-form">
                    <div class="adress-form-content">
                        <h2>Chọn địa chỉ nhận hàng <span id="adress-close">X Đóng</span></h2>
                        <form action="">
                            <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
                            <select name="" id="">
                                <option value="#">--Chọn địa điểm</option>
                                <option value="#">Đà nẵng</option>
                            </select>
                            <select name="" id="">
                                <option value="#">--Chọn Quận\Huyện</option>
                                <option value="#">Đà nẵng</option>
                            </select>
                            <select name="" id="">
                                <option value="#">--Chọn Phường\Xã</option>
                                <option value="#">Đà nẵng</option>
                            </select>
                            <input type="text" placeholder="Số nhà, Tên đường">
                            <button>Xác nhận</button>
                        </form>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="header-main">
            <ul>
                <li><a href="#"><i class='bx bx-mobile-alt'></i><span>Điện thoại</span></a></li>
                <li><a href="#"><i class='bx bx-laptop'></i><span>Laptop</span></a></li>
                <li><a href="#"><i class='bx bx-tab'></i><span>Tablet</span></a></li>
                <li><a href="#"><i class='bx bx-headphone'></i><span>Phụ kiện<i
                                class='bx bxs-down-arrow'></i></span></a>
                    <div class="submenu">
                        <ul>
                            <li>
                                <p>Phụ kiện di động</p>
                            </li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                        </ul>
                        <ul>
                            <li>
                                <p>Phụ kiện laptop</p>
                            </li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                        </ul>
                        <ul>
                            <li>
                                <p>Thiết bị nhà thông minh</p>
                            </li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="#"><i class='bx bxs-watch-alt'></i><span>Smartwatch</span></a></li>
                <li><a href="#"><i class='bx bxs-watch'></i><span>Đồng hồ</span></a></li>
                <li><a href="#"><i class='bx bx-mobile'></i><span>Máy cũ giá rẻ</span></a></li>
                <li><a href="#"><box-icon name='desktop'></box-icon><span>PC, Máy in</span><i
                            class='bx bxs-down-arrow'></i></a>
                    <div class="submenu">
                        <ul>
                            <li><a href="#">Máy in</a></li>
                            <li><a href="#">Mực in</a></li>
                            <li><a href="#">Phụ kiện máy tính</a></li>
                            <li><a href="#">Máy tính để bàn</a></li>
                            <li><a href="#">Phần mềm</a></li>
                            <li><a href="#">Màn hình máy tính</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#"><span>Thẻ cào, Sim</span></a></li>
                <li><a href="#"><span>Dịch vụ tiện ích</span><i class='bx bxs-down-arrow'></i></a>
                    <div class="submenu" style="left: unset; right: 0;">
                        <ul>
                            <li>
                                <p>Thanh toán hoá đơn</p>
                            </li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                        </ul>
                        <ul>
                            <li>
                                <p>Tài chính bảo hiểm</p>
                            </li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                        </ul>
                        <ul>
                            <li>
                                <p>Tiện ích viễn thông</p>
                            </li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                            <li><a href="#">Phụ kiện A</a></li>
                            <li><a href="#">Phụ kiện B</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Phần của Hoàng -->
    <div class="khoitong1">
        <div class="tong1">
            
        </div>
        <div class="tong2">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!--nút silde -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                </div>

                <!-- khối silde -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/anh1.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh2.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh3.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh4.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh5.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh6.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh7.png" alt="" class="d-block" style="width:1000px" height="300px">

                    </div>
                    <div class="carousel-item">
                        <img src="/images/anh8.png" alt="" class="d-block" style="width:1000px" height="300px">
                    </div>

                </div>

                <!-- nút di chuyển  -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <div class="tong2phai">
                <a href="#"><img style="padding-bottom: 10px;" src="/images/anh9.png" alt=""></a>
                <a href="#"><img src="/images/anh10.png" alt=""></a>
            </div>
        </div>
        <div class="tong3">
            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa-solid fa-filter"></i>
                    Bộ lọc</button>

            </div>
            <div class="dropdown">
                <button class="dropbtn">Hãng</button>
                <div class="dropdown-content">

                    <div class="bodershow">
                        <a href=""><img src="/images/anhmenu/anh1.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh2.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh3.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh4.jpg " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh5.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh6.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh7.jpg " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh8.jpg " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh9.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh10.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh11.jpg " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh12.jpg " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh13.jpg " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh14.jpg " alt=""></a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Giá</button>
                <div class="dropdown-content">

                    <div class="bodershow1">
                        <a href="">Dưới 1 triệu</a>
                        <a href="">Từ 1 - 2 triệu</a>
                        <a href="">Từ 2 - 4 triệu</a>
                        <a href="">Từ 4 - 7 triệu</a>
                        <a href="">Từ 7 - 10 triệu</a>
                        <a href="">Từ 10 - 15 triệu</a>
                        <a href="">Trên 15 triệu</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Định vị trẻ em</button>
                <div class="dropdown-content">

                    <div class="bodershow2">
                        <a href=""><img src="/images/anhmenu/anh15.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh16.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh17.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh18.png " alt=""></a>
                        <a href=""><img src="/images/anhmenu/anh19.png " alt=""></a>

                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Môn thể thao</button>
                <div class="dropdown-content">
                    <div class="bodershow1">
                        <a href="">Chạy bộ</a>
                        <a href="">Bơi lội</a>
                        <a href="">Đạp xe</a>
                        <a href="">Ba môn phối hợp</a>
                        <a href="">Yoga</a>
                        <a href="">Bóng đá</a>
                        <a href="">Golf</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Mặt đồng hồ</button>
                <div class="dropdown-content">
                    <div class="bodershow3">
                        <a href="">Dưới 40 mm</a>
                        <a href="">40 - 42 mm</a>
                        <a href="">42 - 45 mm</a>
                        <a href="">Trêm 45 mm</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Thời lượng pin</button>
                <div class="dropdown-content">
                    <div class="bodershow4">
                        <a href="">Dưới 2 ngày</a>
                        <a href="">Từ 2 - 5 ngày</a>
                        <a href="">Từ 5 - 7 ngày</a>
                        <a href="">Từ 7 - 14 ngày</a>
                        <a href="">Trên 14 ngày</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Kháng nước</button>
                <div class="dropdown-content">

                    <div class="bodershow4">
                        <a href="">IP64 / 2 ATM (Rửa tay)</a>
                        <a href="">IP67 / 3 ATM (Đi mưa)</a>
                        <a href="">IP68 / 5 ATM (Tắm)</a>
                        <a href="">5 ATM ISO 22810:210(Bơi)</a>
                        <a href="">10ATM(Lặn)</a>

                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Theo dõi sức khỏe</button>
                <div class="dropdown-content">

                    <div class="bodershow4">
                        <a href="">Đo lượng tiêu thụ oxy tối đa(VO2 max)</a>
                        <a href="">Đo nồng độ oxy trong máu(SpO2)</a>
                        <a href="">Đo huyết áp</a>
                        <a href="">Tính quãng đường chạy</a>
                        <a href="">Tính lượng calories tiêu thụ</a>
                        <a href="">Theo dõi giấc ngủ</a>
                        <a href="">Đo nhịp tim</a>
                        <a href="">Đếm số bước chân</a>

                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Tiện ích</button>
                <div class="dropdown-content">

                    <div class="bodershow4">
                        <a href="">Hỗ trợ eSIM</a>
                        <a href="">Hỗ trợ SIM 4G/LTE</a>
                        <a href="">Nghe gọi ngay trên đồng hồ</a>
                        <a href="">Sạc bằng pin mặt trời</a>
                        <a href="">Nghe nhạc</a>
                        <a href="">Kết nối bluetooth với tai nghe</a>

                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Màu</button>
                <div class="dropdown-content">

                    <div class="bodershow4">
                        <a href=""><i class="fa-solid fa-droplet" style="color: black;"></i> Đen</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: gray;"></i> Xám</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: white;"></i> Đỏ</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: red;"></i> Đỏ</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: greenyellow;"></i> Xanh lá</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: blue;"></i> Xanh dương</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: yellow;"></i> Vàng</a>
                        <a href=""><i class="fa-solid fa-droplet" style="color: orange;"></i> Cam</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tong4">
            <b>8 Đồng hồ thông minh</b>
            <a href="#"><input type="checkbox" name="" id="">Giao Nhanh</a>
            <a href="#"><input type="checkbox" name="" id="">Giảm giá</a>
            <a href="#"><input type="checkbox" name="" id="">Góp 0% - 1%</a>
            <a href="#"><input type="checkbox" name="" id="">Đặc biệt tại thế giới di động</a>
            <a href="#"><input type="checkbox" name="" id="">Mới</a>

        </div>
    </div>
    <!-- Phần chính -->
    <div class="content-main">
        <div class="grid-container">
            <!-- Danh sách các sản phẩm -->
        </div>
    </div>
    <!-- Giỏ hàng -->
    <div class="card1">
        <h1>Giỏ hàng</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Đóng</div>
            <a href="card_product.html" class="button1">Đến trang đặt hàng <i class="fa-solid fa-angles-right"
                    style="color: #005eff;"></i></a>
        </div>
    </div>
    <div class="khoitong2">
        <hr>
        <div class="khoitong2tren">
            <div class="khoi21">
                <a href="#">Tích điểm Quà tặng VIP</a>
                <a href="#">Lịch sử mua hàng</a>
                <a href="#">Tìm hiểu về mua trả góp</a>
                <a href="#">Chính sách bảo hành</a>
                <a href="#">Xem thêm</a>
            </div>
            <div class="khoi22">
                <a href="#">Giới thiệu công ty (MWG.vn)</a>
                <a href="#">Tuyển dụng</a>
                <a href="#">Gửi góp ý, khiếu nại</a>
                <a href="#">Tìm siêu thị (3.361 shop)</a>
                <a href="#">Xem bản mobile</a>
            </div>
            <div class="khoi23">
                <b>Tổng đài hỗ trợ (Miễn phí gọi)</b>
                <p>Khiếu nại: <a href="#">1800.1062</a> (8:00 - 21:30)</p>
                <p>Bảo hành: <a href="#">1800.1064</a> (8:00 - 21:00)</p>
            </div>
            <div class="khoi24">
                <div class="khoi24tren">
                    <div>
                        <a href="#"><i class="fa-brands fa-facebook" style="color: #4166b0;"> </i>3918.3k Fan </a>
                        <a href="#"><i class="fa-brands fa-youtube" style="color: #fe0200;"></i> 862k Đăng ký </a>
                        <a href="#"><img src="/images/anhzl.webp" alt=""> Zalo TGDĐ</a>
                    </div>
                    <div class="anhdautu">
                        <a href="#"><img src="/images/anh241.png" alt=""></a>
                        <a href="#"><img src="/images/anh242.png" alt=""></a>
                        <a href="#"><img src="/images/anh243.png" alt=""></a>
                        <a href="#"><img src="/images/anh244.png" alt=""></a>

                    </div>
                </div>
                <div class="khoi24duoi">
                    <b>Website cùng tập đoàn</b>
                    <div class="anhtapdoan">
                        <a href="#"><img src="/images/anh245.png" alt=""></a>
                        <a href="#"><img src="/images/anh246.png" alt=""></a>
                        <a href="#"><img src="/images/anh247.png" alt=""></a>
                        <a href="#"><img src="/images/anh248.png" alt=""></a>
                        <a href="#"><img src="/images/anh249.png" alt=""></a>
                        <a href="#"><img src="/images/anh2450.png" alt=""></a>
                        <a href="#"><img src="/images/anh2451.png" alt=""></a>
                        <a href="#"><img src="/images/anh2452.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="khoitong2duoi">
        <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007.
            GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
            Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ: Lô
            T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email:
            cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Email: Tot.huynhvan@thegioididong.com.
            <a href="#">Xem chính sách sử dụng</a>
        </p>
    </div>
    <script src="js/Thegioididong.js"></script>
</body>

</html>

<!-- END: main -->
