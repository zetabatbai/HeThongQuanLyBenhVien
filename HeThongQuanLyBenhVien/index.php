<?php
include_once('health_care/include/connect.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Thông tin được gửi thành công');</script>";
echo "<script>window.location.href ='index.php'</script>";

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống dịch vụ chăm sóc sức khỏe</title>
    <!--bootstrap css link cdn-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">

    
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
   <!-- link toi css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <!-- ####################### Header starts ##################################### -->
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                   <div class="col-lg-2 col-md=3 col-sm-12" style="color: #000;font-weight: bold;font-size: 20px;  margin-top: 1% !important;">HỆ THỐNG DỊCH VỤ CHĂM SÓC SỨC KHỎE<!--!important:ghi đè TẤT CẢ các quy tắc tạo kiểu trước đó cho thuộc tính cụ thể trên thành phần đó!-->
                    <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a> <!--data-toggle="collapse": thu gọn-->
                   </div>
                   <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item"> <!--d-none d-md-block: ẩn phẩn tử - Chỉ ẩn trên md -->z
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#services">Dịch vụ</a></li>
                        <li><a href="#about_us">Về chúng tôi</a></li>
                        <li><a href="#contact_us">Liên hệ</a></li>
                        <li><a href="#logins">Đăng nhập</a></li>
                    </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block appoint">
                    <a class="btn btn-success" href="health_care/user-login.php">Đặt lịch hẹn</a>
                   </div>
                </div>
            </div>
        </div>
    </header>
        <!-- slider start -->
        <div class="slider-detail">
            <div id="carouselExampleIndicatorsz" class="carousel slide" data-ride="carousel"> <!--data-ride="carousel: Băng truyền-->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>



                <div class="carousel-inner">
                    <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/slider_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Hệ thống dịch vụ chăm sóc sức khỏe</h5>
            
                         
                    
                    </div>
                    </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider_3.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Hệ thống dịch vụ chăm sóc sức khỏe</h5>
                    </div>
                </div>
            </div>


            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Trước</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Sau</span>
            </a>
            </div>
        </div>


        <!--###################### #Login ####################### -->

        <section id="logins" class="our-blog container-fluid"> <!--container-fluid:   width: 100% -->
        <div class="container">
        <div class="inner-title"> <!--inner-title: Cuộn nội dung dài-->

                <h2>Đăng nhập</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Đăng nhập cho bệnh nhân</h6>
                                <a href="health_care/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">bấm vào đây</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Đăng nhập cho bác sĩ</h6>
                                <a href="health_care/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">bấm vào đây</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Đăng nhập cho quản trị viên</h6>
                    
                                <a href="health_care/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">bấm vào đây</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  

    <!-- ################# Một số khoa chính#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Các khoa chính</h2>
                <p>Một số khoa chính trong hệ thống quản lý dịch vụ chăm sóc sức khỏe</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Khoa Tim mạch</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Khoa Chỉnh hình</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Nhà thần kinh học</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Đường ống dược phẩm</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Đội ngũ dược phẩm</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>Phương pháp điều trị chất lượng cao</h5>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ################ Giới thiệu về chúng tôi  ####################### -->
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>Về bệnh viện của chúng tôi</h3>
<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' "); //truy vấn đến database
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
            </div>
        </div>
    </section>


    <!--  ************************* Liên lạc ************************** -->


    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Mẫu liên lạc</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Tên</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="nhập địa chỉ email" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Số điện thoại</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Nhập số điện thoại" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Nhập tin nhắn</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="nhập tin nhắn" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Gửi tin nhắn</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>


     <!-- ################# Chân trang #######################--->

     <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Liên kết hữu ích</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">Về chúng tôi</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Dịch vụ</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Đăng nhập</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Liên hệ</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Liên hệ với chúng tôi</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo $row['PageDescription'];?> <br>
                        Số điện thoại: <?php  echo $row['MobileNumber'];?> <br>
                        Email: <a href="mailto:<?php  echo $row['Email'];?>" class=""><?php  echo $row['Email'];?></a><br>
                        Thời gian: <?php  echo $row['OpenningTime'];?>
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>




    
   
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>
</html>