<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mua Đàn Guitar Trực Tuyến Giá Tốt
    </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/formLogin.css">
    <link rel="stylesheet" href="./css/newProduct1.css">
    <link rel="stylesheet" href="./css/product-category.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./js/lightslider.js"></script>
    <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #user_login form{
                width: 200px;
                margin: 40px auto;
            }
            #user_login form input{
                margin: 5px 0;
            }
    </style>
</head>
<body>
    <?php
        session_start();
        include 'db.php';
        include 'cate.php';
        $error = false;
        if(isset($_POST["dangki"])) {
            $user_name1 = $_POST["user_name1"];
            $user_pass1 = $_POST["user_pass1"];
            
            if($user_name1 == "" || $user_pass1 == "") {
            echo "bạn vui lòng nhập đầy đủ thông tin";
            }else{
            $sql = "INSERT INTO `tbl_user`(`user_name`,`user_pass`) VALUES ('$user_name1','$user_pass1')";
            if(mysqli_query($connect,$sql)){
                $message = "Thêm thành công";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }else{
                $result = mysqli_query($connect, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($connect), E_USER_ERROR);
            }
        }
    }else
        if(isset($_POST["dangnhap"])){
            $user_name = $_POST["user_name"];
            $user_pass = $_POST["user_pass"];
            if($user_name == "" || $user_pass == ""){
                echo "Khong duoc de trong";
            }else{
                $sql = "Select * from `tbl_user` where user_name = '$user_name' and user_pass='$user_pass'";
                $query = mysqli_query($connect,$sql);
                $num_rows = mysqli_num_rows($query);
                if($num_rows == 0){
                    echo "Thong tin sai";
                }else{
                    while($data = mysqli_fetch_array($query)){
                        $_SESSION['current_user'] = $data;
                    }
                }
            }
        }
    ?>
        <?php 
        if (empty($_SESSION['current_user'])) { 
        ?>
            <header>
            <div class="header-left">
        <a href="index.php"><img src="./img/Logo-White-e1543120531648.png" alt=""></a>
            <div class="sp">
                <div class="dropdown">
                    <a href="./product-category.php" style="text-decoration: none; color: whitesmoke;">Đàn Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate1)) : ?>
                            <a href='./product-category.php?=<?= $row['cate_id'] ?>'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown" >
                    <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;"> Nhạc Cụ Khác</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate2)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;">Phụ Kiện Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate3)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;">Tự học Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate4)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;">Hỗ Trợ Khách Hàng</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate5)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
            <div class="header-right">
            <div class="header-right_item">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                    ĐĂNG NHẬP / ĐĂNG KÝ
                </button>
            </div>
            <div class="header-right_item">
                <a href="./cart.php" style="color: whitesmoke;"> <i class="fas fa-shopping-bag"></i> </a>
            </div>
            <div class="header-right_item" onclick="openNav()">
                <i class="fas fa-search"></i>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <input type="text" placeholder="Tìm kiếm..." id="id_text" style="outline: none;">
                    <button type="submit"><i class="fas fa-search" style="color: whitesmoke;"></i></button>
                </div>
            </div>

            </div>
            </header>
            
                <!-- ================ MAIN ================== -->
        <div class="login-social">
            <div class="login-social_cnt">
                <p>Đăng nhập bằng Facebook/Google</p>
                <button>  <i class="fab fa-facebook"></i> </button> 
                <button> <i class="fab fa-google"></i> </button> 
            </div>
            </div>
    
            <div class="container">
                <div class="big-wrap">
                    <div class="login">
                        <form action="./register.php" method="Post" autocomplete="off">
                            <h1>ĐĂNG NHẬP</h1>
                                <label for="email"><b>Email đăng nhập *</b></label>
                                <input type="text" placeholder="Enter Email" name="user_name" required>

                                <label for="psw"><b>Mật khẩu *</b></label>
                                <input type="password" placeholder="Enter Password" name="user_pass" required>
                    <div class="clearfix">
                        <button type="submit" name="dangnhap" class="btn">Sign In</button>
                    </div>
                </form>
            </div>
            <div class="vertical">
            </div>
            <div class="register">
                <form action="./register.php" method="POST">
                    <h1>ĐĂNG KÍ</h1>

                    <label for="email"><b>Email đăng kí *</b></label>
                    <input type="text" placeholder="Enter Name" name="user_name1" required>

                    <label for="psw"><b>Mật khẩu *</b></label>
                    <input type="password" placeholder="Enter Password" name="user_pass1" required>

                    <p>Bằng cách tạo một tài khoản, bạn đồng ý với <a href="#" style="color:dodgerblue">Điều khoản & Quyền riêng tư của chúng tôi.</a>.
                    </p>

                    <div class="clearfix">
                        <button type="submit" name="dangki" class="btn">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============= END MAIN =================  -->

    <footer>
        <div class="container">
            <div class="footer-item">
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Hỗ trợ khách hàng</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <a href="">Hướng dẫn đặt hàng trực tuyến</a> <br>
                        <a href="">FAQ - Câu hỏi thường gặp</a> <br>
                        <a href="">Hướng dẫn mua đàn guitar cho người <br> mới tập</a>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <a href="">Đàn Guitar Acoustic</a> <br>
                        <a href="">Đàn Guitar Epiphone DR-100</a> <br>
                        <a href="">Capo Guitar Giá Rẻ</a> <br>
                        <a href="">Dây Đàn Guitar</a>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Kết nối với guitar station</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <div class="tooltip">
                            <div class="fb">
                                <button><i class="fab fa-facebook-f"></i></button>
                            </div>
                            <span class="tooltiptext">Theo dõi Guitar Station trên Facebook</span>
                        </div>
                        <div class="tooltip">
                            <div class="mail">
                                <button><i class="far fa-envelope"></i></button>
                            </div>
                            <span class="tooltiptext1">Gửi Email cho chúng tôi</span>
                        </div>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Địa chỉ liên hệ</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <p>75Đ Mai Lão Bạng, phường 13, quận <br> Tân Bình, TP.HCM.</p>
                        <p>Làm việc kể cả Thứ 7 - Chủ Nhật</p>
                        <p>Hotline: 093 471 0592</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <script src="./js/index.js"></script>
        <script src="./js/product.js"></script>
        <script src="./js/formLogin.js"></script>
        <script>
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <?php
    } 
    else {
        $currentUser = $_SESSION['current_user'];
        if($currentUser['user_mode'] == 1){
            header('Location: ./admin/homepage.php');
        }else{
            header('Location: ./index.php');
        }
    } 
?>
</body>
</html>