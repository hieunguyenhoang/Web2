<?php 
  include "connect.php";

  session_start();
  if(isset($_SESSION['mySession'])) {
    $tendangnhap = $_SESSION['mySession'];
  }

  // Phần phân trang
  $start = 0;

  // đặt số lượng dòng để hiện trên một trang
  $rows_per_page = 8;

  // lấy tổng số côt
  $records = $conn->query("select * from sanpham");
  $nr_of_rows = $records->num_rows;

  // tính nr của pages
  $pages = ceil($nr_of_rows / $rows_per_page);

  // if the user clicks on the paginition buttons we set a new starting point
  if(isset($_GET['page-nr'])) {
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows_per_page;
  }

  if(isset($_GET['loaisp'])) {
    $loaisp = $_GET['loaisp'];
    $result = $conn->query("select * from sanpham where loaisp = '$loaisp' limit ".$start.", ".$rows_per_page."");
  } 
  elseif(isset($_POST['search'])) {
    $timten = $_POST['search'];
    $result = $conn->query("SELECT * from sanpham where tensp like '%".$timten."%' limit ".$start.", ".$rows_per_page."");
  }
  elseif(isset($_POST['search_advance'])) {
    $tensanpham  = $_POST['tensanpham'];
    $loaisanpham = $_POST['loaisanpham'];
    $giatu       = $_POST['giatu'];
    $giaden      = $_POST['giaden'];

    // truy vấn tìm kiếm sản phẩm nâng cao kết hợp nhiều điều kiện cùng một lúc
    $result = $conn->query("SELECT * from sanpham     
    where tensp like '%".$timten."%'
    and loaisp='$loaisanpham'
    and giaban between '$giatu' and '$giaden'
    limit ".$start.", ".$rows_per_page."");
  }
  else {
    $result = $conn->query("select * from sanpham limit ".$start.", ".$rows_per_page."");
  }
?>

<!DOCTYPE html>
<html>
<head>  
    <meta name="viewport" content="width=device-width,  initial-scale=1,maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="images/LOGO.webp">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cửa Hàng</title>
</head>

<!-- của phần phân trang -->
<?php 
  if(isset($_GET['page-nr'])) {
    $id = $_GET['page-nr'];
  } else {
    $id = 1;
  }
?>

<body id="<?php echo $id?>">
  <!-- header -->
<section id="header">
  <a href="index-user.php">
    <img src="images/LOGO.webp" class="logo" alt="" >
  </a>
  <div>
  <ul id="icons">  
    <li id="menu"><a href="index-user.php" class="choose" ><span>Trang Chủ</span></a></li>
    <li id="menu"><a href="brand-user.php" class="choose"><span>Nhãn Hàng</span></a></li>       
    <li id="menu" ><a class="act-on" href="shop-user.php" class="choose" ><span class="act-on">Cửa Hàng</span></a></li>    
    <div class="group" id="search">
      <!-- tìm kiếm sản phẩm cơ bản -->
      <form action="shop-user.php" method="post">
        <input id="search-item" type="text" placeholder="Tìm kiếm sản phẩm" name="search" class="input" onkeyup="search()"  tabindex="1">
      </form>
      <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
        <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
      </svg>
    </div> 
      <li id="menu" >
        <a href="giohang-user.php" id="cart-icon">
        <div class="cart-follow-icon">
          <!-- shopping cart icon -->
          <i class="fa-solid fa-cart-shopping add-cart"></i>
          <span id="count-cart-add" style="  font-size: 14px; color:white; font-weight: 500; margin: 0; letter-spacing: 1px;">
          !</span>
        </div>
        </a>
      </li>
     
      
      <li id="menu" id="lg-bag"> <a onclick="toggleMenu()" id="userlogin"><i class="fa-solid fa-circle-user"></i></a>
      </li>
    
      <a id="close"><i class="fa-solid fa-x"></i></a>
   </ul>
   </ul>
  </div>

  <div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
      <div class="user-info"> 
        <!-- Cần sửa chỗ này -->
        <h2><?php echo $tendangnhap?></h2>  
      </div>
      <hr>
      <a href="user.php" class="sub-menu-index-link">
        <p>> Tài khoản</p>  
      </a> 
      <a href="history.php" class="sub-menu-index-link">
        <p>> Lịch sử mua hàng</p> 
      </a>
      <a href="logout.php" class="sub-menu-index-link">
        <p onclick="return confirm('Bạn có muốn đăng xuất không ?');">> Đăng xuất</p> 
      </a> 
    </div>
  </div>
</section>


    <!-- Phân loại sản phẩm -->
<section id="product11" class="section-p11" class="shop container" >
  <div  id="filter-buttons" style="padding-top: 150px;">       
    <!-- php code -->
    <a href="shop-user.php?loaisp=bút">
        <button class="btn" id="btnfil">Bút</button>
      </a>
      <a href="shop-user.php?loaisp=tập">
        <button class="btn" id="btnfil" >Tập</button>
      </a>
      <a href="shop-user.php?loaisp=giấy note">
        <button class="btn" id="btnfil" >Giấy Note</button>
      </a>
      <a href="shop-user.php?loaisp=thước kẻ">
        <button class="btn" id="btnfil">Thước Kẻ</button>   
      </a>
    <div>
      <a href="shop-user.php">
       <button id="btn-ad-search" class="btn">Tất cả</button>
      </a>
    </div>
    <div>
      <button class="btn searchLink" id="btnfil">Tìm kiếm</button>
      <div class="searchDiv" style="display: none;">
      <!-- form tìm kiếm nâng cao -->
        <form action="shop.php" method="post" style="display: flex; flex-direction: column; align-items: flex-start;">
            <div>
                <label for="" style="font-size: 18px;">Tên sản phẩm: </label>
                <input type="text" name="tensanpham" style="border: 1px solid black; padding: 10px;" placeholder="Nhập tên sản phẩm">
            </div>

            <div>
                <label for="" style="font-size: 18px;">Loại sản phẩm:</label>
                <select name="loaisanpham" style="font-size: 18px;">
                    <option>Chọn</option>
                    <option>bút</option>
                    <option>tập</option>
                    <option>giấy note</option>
                    <option>thước kẻ</option>
                </select>
            </div>

            <div>
                <label for="" style="font-size: 18px;">Khoảng giá</label>
                    <div style="font-size: 18px;">
                        Từ: <input type="number" name="giatu" style="border: 1px solid black;">
                        Đến: <input type="number" name="giaden" style="border: 1px solid black;">
                    </div>
            </div>
            <input type="submit" name="search_advance" value="Tìm kiếm" style="margin-top: 20px; padding: 10px 15px;">
        </form>
    </div>
</div>
  </div>
    <div id="overlay"></div>

<!-- Hiển thị sản phẩm -->
<div class="pro-container1" id="product-list" style="position: relative;">
      <?php 
        // truy vấn lấy sản phẩn trong bảng sanpham
        $select_products = mysqli_query($conn, "select * from sanpham");
        if(mysqli_num_rows($select_products)>0) {
          // while($fetch_product = mysqli_fetch_assoc($select_products)) {
          while($fetch_product = $result->fetch_assoc()) {
            ?>
            <div class="pro1 pepsi product-box">
              <form action="giohang-user.php" method="post" enctype="multipart/form-data">
                <a href="product-detail-user.php?id=<?php echo $fetch_product['manh']?>&tensp=<?php echo $fetch_product['tensp']?>">
                 <img  src="images/<?php echo $fetch_product['hinhanh']?>" class="product-img" alt="">
                </a>           
                <h5 class="product-title"><?php echo $fetch_product['tensp']?></h5>
                <h2 style="display: none;"><?php echo $fetch_product['tensp']?></h2>
                <h4 class="product-price"><?php echo $fetch_product['giaban']?>vnđ</h4>

                <!-- lấy thông tin sản phẩm để làm giỏ hàng -->
                <input type="hidden" name="product_id" value="<?php echo $fetch_product['masp']?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['tensp']?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['giaban']?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['hinhanh']?>">
                <button type="submit" class="add-cart" id="cart-plus" name="add_to_cart">Thêm vào giỏ hàng</button>
              </form>
            </div> 
        <?php
          }
          ?>
<!-- Phần phân trang -->
  <!-- displaying the page info text -->
  <div class="page-info">
    <?php 
      if(!isset($_GET['page-nr'])) {
          $page = 1;
      } else {
          $page = $_GET['page-nr'];
      }
    ?>
  </div>
  
  <!-- displaying the pagination buttons -->
  <div class="pagination" style="position: absolute; bottom: 0; display: flex;">
    <!-- Tới trang đầu tiên -->
    <a href="?page-nr=1" style="padding: 0 15px;">Trang đầu</a>

    <!-- Tới trang trước -->
    <?php 
      if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
          ?>
          <a href="?page-nr=<?php echo $_GET['page-nr'] - 1?>" style="padding: 0 15px;">Trang trước</a>            
          <?php
      } else {
          ?>
          <a href="" style="padding: 0 15px;">Trang trước</a>
          <?php
      }
    ?>

        <!-- Output the page numbers -->
        <div class="page-numbers">
            <?php 
                for($counter=1; $counter <= $pages; $counter++) {
                    ?>
                    <a href="?page-nr=<?php echo $counter?>" style="padding: 0 15px;"><?php echo $counter?></a>
                    <?php
                }
            ?>
        </div>

        <!-- Go to the next page -->
        <?php 
            if(!isset($_GET['page-nr'])) {
                ?>
                <a href="?page-nr=2" style="padding: 0 15px;">Trang sau</a>
                <?php
            }else {
                if($_GET['page-nr'] >= $pages) {
                    ?>
                    <a href="" style="padding: 0 15px;">Trang cuối</a>
                    <?php
                } else {
                    ?>
                    <a href="?page-nr=<?php echo $_GET['page-nr'] + 1?>" style="padding: 0 15px;">Trang sau</a>
                    <?php
                }
            }
        ?>


        <!-- Go to the last page -->
        <a href="?page-nr=<?php echo $pages?>" style="padding: 0 15px;">Trang cuối</a>
          <?php
        } else {
          echo "Ko có sản phẩm nào";
        }
    ?>
</div> 

  </div>
</div>
</section>
    <!-- footer -->
    <?php include "footer.php"?>
 
</body>
</html>

<!-- script của phân trang -->
<script>
    let links = document.querySelectorAll('.page-numbers > a');
    let bodyId = parseInt(document.body.id) - 1;
    links[bodyId].classList.add("active");
</script>

<script>
  var searchLinks = document.querySelectorAll(".searchLink");
  searchLinks.forEach(function(searchLink) {
    searchLink.addEventListener("click", function(event){
        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a

        var searchDiv = searchLink.nextElementSibling; // Lấy phần tử kế tiếp của thẻ a, tức là khối div tương ứng
        if (searchDiv.style.display === "none") {
            searchDiv.style.display = "block";
        } else {
            searchDiv.style.display = "none";
        }
    });
  });
</script>