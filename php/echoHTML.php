<?php
session_start();

// Thêm topnav vào trang
function addTopNav()
{
    echo '
	<div class="top-nav group">
        <section>
            <div class="social-top-nav">
                <a class="fa fa-facebook"></a>
                <a class="fa fa-twitter"></a>
                <a class="fa fa-google"></a>
                <a class="fa fa-youtube"></a>
            </div> <!-- End Social Topnav -->

            <ul class="top-nav-quicklink flexContain">
                <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href=""><i class="fa fa-newspaper-o"></i> Tin tức</a></li>
                <li><a href=""><i class="fa fa-handshake-o"></i> Tuyển dụng</a></li>
                <li><a href=""><i class="fa fa-info-circle"></i> Giới thiệu</a></li>
                <li><a href=""><i class="fa fa-wrench"></i> Bảo hành</a></li>
                <li><a href=""><i class="fa fa-phone"></i> Liên hệ</a></li>
            </ul> <!-- End Quick link -->
        </section><!-- End Section -->
    </div><!-- End Top Nav  -->';
}

// Thêm header
function addHeader()
{
    echo '        
	<div class="header group">
        <div class="smallmenu" id="openmenu" onclick="smallmenu(1)">≡</div>
        <div style="display: none;" class="smallmenu" id="closemenu" onclick="smallmenu(0)">×</div>
        <div class="logo">
            <a href="index.php">
                <img src="img/logoimg.png" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header">
                <form class="input-search" method="get" action="index.php">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </form> <!-- End Form search -->
                <div class="tags" style="display:none;">
                    <strong>Từ khóa: </strong>
                </div>
            </div> <!-- End Search header -->

            <div class="tools-member">
                <div class="member">
                    <a onclick="checkTaiKhoan()" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                    <div class="menuMember hide">
                        <a href="nguoidung.php">Trang người dùng</a>
                        <a onclick="checkDangXuat();">Đăng xuất</a>
                    </div>
                </div> <!-- End Member -->

                <div class="cart">
                    <a href="giohang.php">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div>  -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div> <!-- End Header -->';
}

// thêm home
function addHome()
{
    echo '
    <div class="option-promo">
			<ul class="option-list">
				<li class="option-item">
					<a href="">
						<img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/dien-thoai-120x120-7.png" alt="">
						<span>Điện Thoại Giá Sốc</span>
					</a>
				</li>
				<li class="option-item">
					<a href="">
						<img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/Group-8-120x120-3.png" alt="">
						<span>Phụ kiện rẻ ngất ngư</span>
					</a>
				</li>
				<li class="option-item">
					<a href="">
						<img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/icon-TGDDD-90x90-1.png" alt="">
						<span>Giảm đến 50%</span>
					</a>
				</li>
				<li class="option-item">
					<a href="">
						<img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn//content/Frame-46604--1--120x120-2.png" alt="">
						<span>
                    Galaxy S23 Series Giảm Sốc
                </span>
					</a>
				</li>
			</ul>
		</div>
    <div class="smallbanner" style="width: 100%;"></div>

    <div class="companysFilter">
        <button class="companysButton" onclick="setCompanysMenu()">
            <p>Hãng</p>
            <div id="iconOpenMenu">▷</div>
            <div id="iconCloseMenu" style="display: none;">▽</div>
        </button>
    </div>

    <div class="timNangCao" ">
        
        
        <div>
            <input type="text" class="js-range-slider" id="demoSlider">
        </div>

    </div> <!-- End khung chọn bộ lọc -->

    <div class="choosedFilter flexContain"></div> <!-- Những bộ lọc đã chọn -->
    <hr>

    <!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->
    <div class="contain-products" style="display:none">
    <div class="filterName">
        <div id="divSoLuongSanPham"></div>
        <input type="text" placeholder="Lọc trong trang theo tên..." onkeyup="filterProductsName(this)">
        <div class="loader" style="display: none"></div>
    </div> <!-- End FilterName -->

    <ul id="products" class="homeproduct group flexContain">
        <div id="khongCoSanPham">
            <i class="fa fa-times-circle"></i>
            Không có sản phẩm nào
        </div> <!-- End Khong co san pham -->
    </ul><!-- End products -->

    <div class="pagination"></div>
    </div>

    <!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->
    <div class="contain-khungSanPham"></div>';
}

// Thêm chi tiết sản phẩm
function addChiTietSanPham()
{
    echo '
    <div class="chitietSanpham" style="min-height: 85vh">
        <h1>Điện thoại </h1>
        <div class="rowdetail group">
            <div class="picture">
                <img src="">
            </div>
            <div class="price_sale">
                <div class="area_price"> </div>
                <div class="ship" style="display: none;">
                    <i class="fa fa-clock-o"></i>
                    <div>NHẬN HÀNG TRONG 1 GIỜ</div>
                </div>
                <div class="area_promo">
                    <strong>khuyến mãi</strong>
                    <div class="promo">
                        <i class="fa fa-check-circle"></i>
                        <div id="detailPromo"> </div>
                    </div>
                </div>
                
                <div class="area_order">
                    <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
                    <a class="buy_now" onclick="themVaoGioHang(maProduct, nameProduct);">
                        <h3><i class="fa fa-plus"></i> Thêm vào giỏ hàng</h3>
                    </a>
                </div>
            </div>
            
            
            <div class="info_product">
            <h1>Chi tiết sản phẩm</h1>
                <h2>Thông số kỹ thuật</h2>
                <ul class="info">

                </ul>
            </div>
        </div>
        <hr>
        <div class="comment-area">
            <div class="guiBinhLuan">
                <div class="stars">
                    <form action="">
                        <input class="star star-5" id="star-5" value="5" type="radio" name="star"/>
                        <label class="star star-5" for="star-5" title="Tuyệt vời"></label>

                        <input class="star star-4" id="star-4" value="4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4" title="Tốt"></label>

                        <input class="star star-3" id="star-3" value="3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3" title="Tạm"></label>

                        <input class="star star-2" id="star-2" value="2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2" title="Khá"></label>

                        <input class="star star-1" id="star-1" value="1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1" title="Tệ"></label>
                    </form>
                </div>
                <textarea maxlength="250" id="inpBinhLuan" placeholder="Viết suy nghĩ của bạn vào đây..."></textarea>
                <input id="btnBinhLuan" type="button" onclick="checkGuiBinhLuan()" value="GỬI BÌNH LUẬN">
            </div>
            <!-- <h2>Bình luận</h2> -->
            <div class="container-comment">
                <div class="rating"></div>
                <div class="comment-content">
                </div>
            </div>
        </div>
    </div>';
}

// Thêm footer
function addFooter()
{
    echo '
    
    <div class="footer-main" style="display: flex;
    width: 1200px;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;
    padding: 15px 0;">

        <ul style="list-style: none;" class="footer-about" >
            <li class="footer-item" style="font-size: 20px; font-weight: bold; margin: 10px 0px;"><a>Về chúng tôi</a></li>
            <li class="footer-item " style="margin: 10px 0px;><a href="${pageContext.request.contextPath}/view/client/introduce">Giới thiệu về chúng tôi</a></li>
            <li class="footer-item " style="margin: 10px 0px;><a href="${pageContext.request.contextPath}/view/client/security">Chính sách bảo mật</a></li>
            <li class="footer-item " style="margin: 10px 0px;><a href="${pageContext.request.contextPath}/view/client/contact">Liên hệ</a></li>
        </ul>
        <div class="footer-support">
            <li style="font-size: 20px; font-weight: bold;list-style: none; margin: 10px 0px;" class="footer-item"><a href="#">Hỗ trợ khách hàng</a></li>
            <li style="list-style: none; margin: 10px 0px;" class="footer-item"><a href="#">Hướng dẫn đặt hàng</a></li>
            <li style="list-style: none; margin: 10px 0px;" class="footer-item"><a href="#">Hướng dẫn thanh toán</a></li>
            <li style="list-style: none; margin: 10px 0px;" class="footer-item"><a href="#">Hệ thống cửa hàng</a></li>
        </div>
        <div style="font-size: 20px; font-weight: bold;list-style: none; margin: 10px 0px;" class="footer-subscribe">
            
            <p>Subscribe</p>
            <div class="footer-subscribe-link">
                <input type="text" name="subscribe" style="padding: 5px 7px;
                border-radius: 10px;
                border: none;
                margin: 7px 0;
            }">
               
            </div>
            <p>Nhập email của bạn tại đây</p>

        </div>
        <div class="footer-support" style="width:25%;">
            <iframe style="width:100%; height:auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.126561572459!2d106.71226721557215!3d10.801617492304494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVFAuSENNIC0gSFVURUNI!5e0!3m2!1svi!2s!4v1680718783101!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>   
    </div>
    <div style="    text-align: center;
    font-size: 17px;
    padding: 10px;" class="footer-bottom">
        <div class="footer-design">
            <p>@CopyRight Hutech 2023</p>
        </div>
        
    </div>';
}

// Thêm contain Taikhoan
function addContainTaiKhoan()
{
    echo '
	<div class="containTaikhoan">
    <span class="close" onclick="showTaiKhoan(false);">&times;</span> 
        <div class=" taikhoan">
            <div class="tab-content">
                <div id="login">
            <h1>Đăng nhập</h1>
                    
                    <!-- <form onsubmit="return logIn(this);"> -->
                    <form action="" method="post" name="formDangNhap" onsubmit="return checkDangNhap();">
                        <div class="field-wrap">
                            <label>
                                Tên đăng nhập
                            </label>
                            <input name="username" type="text" id="username" required autocomplete="off" />
                        </div> <!-- /user name -->
                        <div class="field-wrap">
                            <label>
                                Mật khẩu
                            </label>
                            <input name="pass" type="password" id="pass" required autocomplete="off" />
                        </div> <!-- pass -->
                         style="list-style: none;" class="">
                            <li class="tab">
                                    <span style="color: #fff;
                                font-size: 16px;
                                float: right;
                                margin: 10px 0;">Bạn chưa có tài khoản <a href="#signup"> Đăng ký</a></span>
                            </li>
                        </ul>
                        
                        
                        <button type="submit" class="button button-block" />Đăng nhập</button>
                    </form> 
                </div> <!-- /log in -->
                <div id="signup">
                    <h1>Đăng kí Tài Khoản</h1>
                    <!-- <form onsubmit="return signUp(this);"> -->
                    <form action="" method="post" name="formDangKy" onsubmit="return checkDangKy();">
                            <div class="field-wrap">
                                <label>
                                    Họ
                                </label>
                                <input name="ho" type="text" id="ho" required autocomplete="off" />
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Tên
                                </label>
                                <input name="ten" id="ten" type="text" required autocomplete="off" />
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Điện thoại
                                </label>
                                <input name="sdt" id="sdt" type="text" pattern="\d*" minlength="10" maxlength="12" required autocomplete="off" />
                            </div> <!-- /sdt -->
                            <div class="field-wrap">
                                <label>
                                    Email
                                </label>
                                <input name="email" id="email" type="email" required autocomplete="off" />
                        </div>
                        <div class="field-wrap">
                            <label>
                                Địa chỉ
                            </label>
                            <input name="diachi" id="diachi" type="text" required autocomplete="off" />
                        </div> <!-- /user name -->
                        <div class="field-wrap">
                            <label>
                                Tên đăng nhập
                            </label>
                            <input name="newUser" id="newUser" type="text" required autocomplete="off" />
                        </div> <!-- /user name -->
                        <div class="field-wrap">
                            <label>
                                Mật khẩu
                            </label>
                            <input name="newPass" id="newPass" type="password" required autocomplete="off" />
                        </div> <!-- /pass -->
                        <button type="submit" class="button button-block" />Tạo tài khoản</button>
                    </form> <!-- /form -->
                </div> <!-- /sign up -->
            </div><!-- tab-content -->
        </div> <!-- /taikhoan -->
    </div>
';
}

// Thêm plc (phần giới thiệu trước footer)
