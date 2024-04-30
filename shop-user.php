<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>   
    <meta name="viewport" content="width=device-width, initial-scale=1,  initial-scale=1,maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="images/LOGO.webp">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cửa hàng</title>
</head>
<body>
  <!-- header -->
  <section id="header">
    <a href="index-user.php">
  <img src="images/LOGO.webp" class="logo" alt="" >
   </a>
  <div>
   <ul id="icons">
    
  <li id="menu"><a href="index-user.php"  class="choose" ><span>Trang chủ</span></a></li>
          <li id="menu"><a href="brand-user.php" class="choose"><span>Nhãn Hàng</span></a></li>
         
          <li id="menu" ><a class="act-on" href="shop-user.php" class="choose" ><span class="act-on">Cửa Hàng</span></a></li>
          <!-- <li id="menu"><a href="contact-user.html" class="choose"><span>Contact</span></a></li> -->
    
      <div class="group" id="search">
      <input id="search-item" type="text" placeholder="Tìm kiếm sản phẩm" name="text" class="input" onkeyup="search()" >
    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
      <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
  </svg>
  </div> 
      <li id="menu" ><a id="cart-icon">  <div class="cart-follow-icon">
        <i class="fa-solid fa-cart-shopping add-cart"></i>
        <span id="count-cart-add" style="  font-size: 14px; color:white; font-weight: 500; margin: 0; letter-spacing: 1px;">0</span>
      </div></a>
      </li>
      <li id="menu" id="lg-bag"> <a onclick="toggleMenu()" id="userlogin"><i class="fa-solid fa-circle-user"></i></a>
      </li>
   
      <a  id="close"><i class="fa-solid fa-x"></i></a>
   </ul>
  </div>
  <div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
  <div class="user-info">
  
  <h2>Chào ngày mới <3</h2>
  </div>
  <hr>
  <a href="user.html" class="sub-menu-index-link">
    <i class="fa-solid fa-circle-user"></i>
    <p>> Tài khoản</p>
  
  </a>
  
  <a href="history.html" class="sub-menu-index-link">
    <i class="fa-solid fa-clock-rotate-left"></i>
    <p>> Lịch sử mua hàng</p>
  
  </a>
  
  <a href="login.html" class="sub-menu-index-link">
    <i class="fa-solid fa-door-open"></i>
    <p>> Đăng xuất</p>
  
  </a>
  
    </div>
  </div>
  <div id="mobile"> 
  
    <a id="cart-icon1">
      <div class="cart-follow-icon">
        <i class="fa-solid fa-cart-shopping add-cart"></i>
        <span id="count-cart-add1" style="  font-size: 14px; color:white; font-weight: 500; margin: 0; letter-spacing: 1px;">0</span>
      </div>
    </a>
    <a id="glass-search" onclick="showbar()" ><i class="fa-solid fa-magnifying-glass"></i> </a>
    <a onclick="toggleMenu()" id="userlogin"><i class="fa-solid fa-circle-user"></i></a>
  
  
  <i id="bar" class="fa-solid fa-bars" style="color: #000000;"></i>
  
  </div>
  <div class="search-bars">
    <input type="text" placeholder="SEARCH...">
    <i class="fa-solid fa-xmark" id="xmark" onclick="closebar()"></i>
    </div>
  

   </section>


   <div class="cart">
    <h2 class="cart-title">Giỏ hàng</h2>


    <div class="cart-content">
      <div class="simply-cart">
        <img src="images/Tình AE.jpg">
      </div>

    </div>


    <div class="total">
        <div class="total-title">Tổng tiền</div>
        <div class="total-price">vnđ</div>
    </div>

    <button type="button" class="btn-buy">Thanh toán</button>

    <i class="fa-solid fa-x" id="cart-close"></i>
</div>
  
 <section id="product11" class="section-p11" class="shop container">


  <div  id="filter-buttons" style="margin-top: 150px;">
       
     
    <button class="btn" id="btnfil">Bút</button>
    <button class="btn" id="btnfil" >Tập</button>
    <button class="btn" id="btnfil" >Giấy Note</button>
    <button class="btn" id="btnfil">Thước Kẻ</button>
    
 
 
<div>
   <button id="btn-ad-search" class="btn">Tìm kiếm <i class="fa-solid fa-magnifying-glass"></i></button>
</div>
 

</div>

<div id="overlay"></div>
<!-- tìm kiếm nâng cao -->
<div id="advan-search-container">
    <h1>Tìm kiếm sản phẩm</h1>
    <i class="fa-solid fa-x" id="x-icon-close"></i>
    <hr style="margin: 20px 0;">
  <form >
  <div>
    <label>> Tên:</label>
    <input placeholder="Nhập tên sản phẩm">
  </div>

  <div>
    <label>> Giá tiền từ:</label>
    <input placeholder="Tổi thiểu" style="margin-bottom: 10px;">
  <label>> đến</label>
    <input placeholder="Tối đa">
  </div>

  <hr style="margin: 20px 0;  border: 1px solid #ccc;">

  <div>
    <label>> Loại</label>
  <select>
    <option>Bút bi, bút chì</option>
    <option>Tập ô li</option>
    <option>Giấy note</option>
    <option>Thước kẻ</option>
  </select>
</div>

<div>
  <label>> Nhãn hàng</label>
<select>
  <option>Thiên long</option>
  <option>Điểm 10</option>
  <option>Colorkit</option>
  <option>flex-office</option>
  <option>Bizner</option>
</select>
</div>

<hr style="margin: 20px 0;  border: 1px solid #ccc;">

<div>
  <button id="btn-apply-ad-search" style="border-radius: 5px; background-color: blue;">Ok</button>
</div>

</form>
</div>


<div class="pro-container1" id="product-list" >
  <!-- 1 -->
  <div class="pro1 pepsi" class="product-box" >
    <a href="product1-user.html">
    <img  src="images/butbi1.png" class="product-img" alt=""></a>
  
        
      <h5 class="product-title">Bút bi thiên long</h5>
      <h2 style="display: none;">Bút bi thiên long</h2>
      <h4 class="product-price">5.000vnđ</h4>
       
    
      
  
   
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
  
    </div> 
  <!-- 2 -->
    <div class="pro1 pepsi" class="product-box">
      <a href="product2-user.html">
      <img class="product-img" src="images/butbi2.png" alt=""></a>
     
      <h5 class="product-title">Bút bi thiên long</h5>
      <h2 style="display: none;">Bút bi thiên long</h2>
       <h4 class="product-price">5.000vnđ</h4>
          
       <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 3 -->
      <div class="pro1 coca" class="product-box">
        <a href="product3-user.html">
        <img class="product-img" src="images/butchigo2.png" alt=""></a>
       
          <h5 class="product-title">Bút chì gỗ B2 </h5>
          <h2 style="display: none;">Bút chì gỗ B2</h2>
          <h4 class="product-price">12.000vnđ</h4>
          <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
        </div> 
  
  <!-- 4 -->
    <div class="pro1 coca" class="product-box">
      <a href="product4-user.html">
      <img class="product-img" src="images/butchigot3.jpg" alt=""></a>
        <h5 class="product-title">Bút chì hoạt họa</h5>
        <h2 style="display: none;">Bút chì hoạt họa</h2>
        <h4 class="product-price">10.000vnđ</h4>
      
        <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
      </div> 
  
  <!-- 5 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/tap1-1.jpg" alt=""></a>
  
      <h5 class="product-title">Tập ô li russia</h5>
      <h2 style="display: none;">Tập ô li russia</h2>
      <h4 class="product-price">12.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 6 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/tap1-2.jpg" alt=""></a>
  
      <h5 class="product-title">Tập ô li india</h5>
      <h2 style="display: none;">Tập ô li india</h2>
      <h4 class="product-price">11.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 7 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/tap1-3.jpg" alt=""></a>
  
      <h5 class="product-title">Tập ô li trắng điểm 10</h2>
      <h4 class="product-price">14.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 8 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/tap2-2.jpg" alt=""></a>
   
      <h5 class="product-title">Tập trăm trang italy</h5>
      <h2 style="display: none;">Tập trăm trang italy</h2>
      <h4 class="product-price">12.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 9 -->
  <div class="pro1 fanta" class="product-box">
    <a href="#">
    <img class="product-img" src="images/note2-2.jpg" alt=""></a>
  
      <h5 class="product-title">Giấy note trong trắng</h5>
      <h2 style="display: none;">Giấy note trong trắng</h2>
      <h4 class="product-price">22.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 10 -->
  <div class="pro1 fanta" class="product-box">
    <a href="#">
    <img class="product-img" src="images/note3-1.jpg" alt=""></a>
  
      <h5 class="product-title">Giấy note cơ bản</h5>
      <h2 style="display: none;">Giấy note cơ bản</h2>
      <h4 class="product-price">15.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 11 -->
  <div class="pro1 fanta" class="product-box">
    <a href="#">
    <img class="product-img" src="images/note3-2.jpg" alt=""></a>
  
      <h5 class="product-title">Combo giấy note cơ bản</h5>
      <h2 style="display: none;">Combo giấy note cơ bản</h2>
      <h4 class="product-price">50.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 12 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/note2-1.jpg" alt=""></a>
  
      <h5 class="product-title">Giấy note trong suốt</h5>
      <h2 style="display: none;">Giấy note trong suốt</h2>
      <h4 class="product-price">17.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 13 -->
     <div class="pro1" class="product-box">
       <a href="#">
       <img class="product-img" src="images/sản phẩm 7.jpg" alt=""></a>
    
         <h5 class="product-title">Thước kẻ thiên long</h5>
         <h2 style="display: none;">Thước kẻ thiên long</h2>
         <h4 class="product-price">8.000vnđ</h4>
         <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
       </div> 
  <!-- 14 -->
     <div class="pro1" class="product-box">
       <a href="#">
       <img class="product-img" src="images/sản phẩm 16 - 1.jpeg" alt=""></a>
    
         <h5 class="product-title">Thước kẻ hoạt họa</h5>
         <h2 style="display: none;">Thước kẻ hoạt họa</h2>
         <h4 class="product-price">11.000vnđ</h4>
         <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
       </div> 
  <!-- 15 -->
    <div class="pro1" class="product-box">
      <a href="#">
      <img class="product-img" src="images/sản phẩm 16 - 2.jpeg" alt=""></a>
    
        <h5 class="product-title">Thước kẻ hoạt họa</h5>
        <h2 style="display: none;">Thước kẻ hoạt họa</h2> 
        <h4 class="product-price">12.000vnđ</h4>
        <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
      </div> 
  <!-- 16 -->
      <div class="pro1" class="product-box">
        <a href="#">
        <img class="product-img" src="images/sản phẩm 16.jpeg" alt=""></a>
      
          <h5 class="product-title">Thước kẻ hoạt hình</h5>
          <h2 style="display: none;">Thước kẻ hoạt hình</h2>
          <h4 class="product-price">13.000vnđ</h4>
          <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
        </div> 
   <!-- 17 -->
  <div class="pro1 coca" class="product-box">
    <a href="#">
    <img class="product-img" src="images/butchigot1.jpg" alt=""></a>
  
      <h5 class="product-title">Bút chì gỗ</h5>
      <h2 style="display: none;">Bút chì gỗ</h2>
      <h4 class="product-price">7.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 18 -->
    <div class="pro1 fanta" class="product-box">
      <a href="#">
      <img class="product-img" src="images/butchigot3.jpg" alt=""></a>
    
        <h5 class="product-title">Bút chì gỗ</h5>
        <h2 style="display: none;">Bút chì gỗ</h2>
        <h4 class="product-price">8.000vnđ</h4>
        <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
      </div> 
  <!-- 19 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/butchigotp2.jpg" alt=""></a>
   
      <h5 class="product-title">Bút chì ngòi</h5>
      <h2 style="display: none;">Bút chì ngòi</h2>
      <h4 class="product-price">10.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
  </div> 
  <!-- 20 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/butchigot3.jpg" alt=""></a>
  
      <h5 class="product-title">Bút chì doramon</h5>
      <h2 style="display: none;">Bút chì doramon</h2>
      <h4 class="product-price">9.000vnđ</h4>
      
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 21 -->
    <div class="pro1 pepsi" class="product-box">
      <a href="#">
      <img class="product-img" src="images/note4-1.jpg" alt=""></a>
      
        <h5 class="product-title">Giấy note ô li</h5>
        <h2 style="display: none;">Giấy note ô li</h2>
        <h4 class="product-price">20.000vnđ</h4>
        <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
      </div> 
  <!-- 22 -->
    <div class="pro1 pepsi" class="product-box">
      <a href="#">
      <img class="product-img" src="images/note4-2.jpg" alt=""></a>
    
        <h5 class="product-title">Giấy note mịn</h5>
        <h2 style="display: none;">Giấy note mịn</h2>
        <h4 class="product-price">26.000vnđ</h4>
        <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
      </div> 
  <!-- 23 -->
    <div class="pro1 coca" class="product-box">
      <a href="#">
      <img class="product-img" src="images/note4-3.jpg" alt=""></a>
     
        <h5 class="product-title">Quyển hướng dẫn </h5>
        <h2 style="display: none;">Quyển hướng dẫn</h2>
        <h4 class="product-price">3.000vnđ</h4>
    <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
      </div> 
  
  <!-- 24 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/note5-1.jpg" alt=""></a>
  
      <h5 class="product-title">Giấy note văn phòng</h5>
      <h2 style="display: none;">Giấy note văn phòng</h2>
      <h4 class="product-price">19.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
    </div> 
  <!-- 25 -->
  <div class="pro1" class="product-box">
    <a href="#">
    <img class="product-img" src="images/note4.jpg" alt=""></a>
      <h5 class="product-title">Giấy note văn phòng</h5>
      <h2 style="display: none;">Giấy note văn phòng</h2>
      <h4 class="product-price">19.000vnđ</h4>
      <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>                                                     
  </div>
  <!-- 26 -->
<div class="pro1" class="product-box">
  <a href="#">
  <img class="product-img" src="images/note4-1.jpg" alt=""></a>
    <h5 class="product-title">Giấy note văn phòng</h5>
    <h2 style="display: none;">Giấy note văn phòng</h2>
    <h4 class="product-price">19.000vnđ</h4>
    <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
</div> 
<!-- 27 -->
<div class="pro1" class="product-box">
  <a href="#">
  <img class="product-img" src="images/note4-2.jpg" alt=""></a>
  <h5 class="product-title">Giấy note văn phòng</h5>
  <h2 style="display: none;">Giấy note văn phòng</h2>
  <h4 class="product-price">19.000vnđ</h4>
  <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
</div> 
<!-- 28 -->
<div class="pro1" class="product-box">
  <a href="#">
  <img class="product-img" src="images/note4-3.jpg" alt=""></a>
  <h5 class="product-title">Giấy note văn phòng</h5>
  <h2 style="display: none;">Giấy note văn phòng</h2>
  <h4 class="product-price">19.000vnđ</h4>
  <button class="add-cart" id="cart-plus">Thêm vào giỏ hàng</button>
</div> 

<div id="containerpage">
  <div class="pages">

<ul class="listPage">
  <li class="activi"></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>

  </div>
</div>
</section>
<?php include "footer.php";?>
</body>

<script>
  const bar = document.getElementById('bar');
  const icon = document.getElementById('icons');
 
  if(bar){
    bar.addEventListener('click',() =>{
  icon.classList.add('active');
    })}
 
  const icons = document.getElementById("icons");
const dong = document.getElementById("close");
const barmenu = document.getElementById('bar');
dong.addEventListener("click", function() {

icons.style.right = "-300px";
});
barmenu.addEventListener("click", function() {

icons.style.right = "0"; 

htmlElement.style.overflowY = 'scroll';
searchbars.classList.remove("active25");
      searchbars.style.opacity="0";
      searchbars.style.pointerEvents = 'none';
      overlay.style.display = 'none';
      subMenu.classList.remove("open-menu");
  
});


window.addEventListener("resize", function() {

  if (window.innerWidth >= 1136) {
    overlay.style.display = 'none';
    cart.classList.remove("act");
    icons.style.right="-300px";
      searchbars.classList.remove("active25");
      searchbars.style.opacity="0";
      searchbars.style.pointerEvents = 'none';
    icons.classList.remove('active');
    htmlElement.style.overflowY = "scroll";
  }
 else{
  icons.style.right="-300px";
 }
  }
);
   </script>


<script>
  var htmlElement = document.querySelector('html');
const searchbars=document.querySelector(".search-bars");
  const glasssearch=document.getElementById("glass-search");
function showbar(){
      searchbars.classList.add('active25');
      searchbars.style.pointerEvents = 'all';
      htmlElement.style.overflow = 'hidden';
      searchbars.style.opacity="1";
      overlay.style.display='block';
      overlay.style.zIndex = '98';
      subMenu.classList.remove("open-menu");
  }
  function closebar(){

      searchbars.classList.remove('active25');
      htmlElement.style.overflowY = 'scroll';
      searchbars.style.opacity="0";
      searchbars.style.pointerEvents = 'none';
      overlay.style.display='none';
  }
  </script>

<script>
 
//Phan trang//
  let thisPage=1;
  let limit= 12;

  let list = document.querySelectorAll('.pro-container1 .pro1');
  function loadItem(){
  
    let beginGet= limit * (thisPage -1);
    let endGet = limit * thisPage-1;
    list.forEach((item, key)=>{
if(key >= beginGet && key <= endGet){
  item.classList.remove('mat');

}else{
  item.classList.add('mat');
}
    })
    listPage();
  }
  loadItem();

  const bBanner1 = document.querySelector('#product11');
  function listPage(){
   let count = Math.ceil(list.length/limit); 
   document.querySelector('.listPage').innerHTML ='';
   
   if(thisPage != 1) {
      let prev = document.createElement('li');
      prev.innerHTML = '<i class="fa fa-chevron-left"></i>'; // Thay thế bằng biểu tượng
      prev.setAttribute('onclick', "changePage(" + (thisPage -1)+ ")");
      document.querySelector('.listPage').appendChild(prev);
      prev.addEventListener('click', function() {
  window.scrollTo(0, bBanner1.offsetTop);
});
   }

   for(i=1;i<= count;i++){
      let newPage = document.createElement('li');
      newPage.innerHTML = i;
      if(i == thisPage){
         newPage.classList.add('activi');
      }
      newPage.setAttribute('onclick', "changePage("+ i +")");
      newPage.addEventListener('click', function() {

  window.scrollTo(0, bBanner1.offsetTop);
});
      document.querySelector('.listPage').appendChild(newPage);
   } 

   if(thisPage!= count){
      let next = document.createElement('li');
      next.innerHTML = '<i class="fa fa-chevron-right"></i>'; // Thay thế bằng biểu tượng
      next.setAttribute('onclick', "changePage(" + (thisPage+1)+")");
      document.querySelector('.listPage').appendChild(next);
     next.addEventListener('click', function() {

  window.scrollTo(0, bBanner1.offsetTop);
});
   }
} 

  function changePage(i){
thisPage=i;
loadItem();
  }

 
  const search = () => {

const searchbox = document.getElementById("search-item").value.toUpperCase();
const storeitems = document.getElementById("product-list");
const product = document.querySelectorAll(".pro1");
const pname = document.getElementsByTagName("h5");
const ptype = document.getElementsByTagName("h2");
const pprice = document.getElementsByTagName("h4");


const searchTerms = searchbox.split(" ");

for (var i = 0; i < pname.length; i++) {
  let match = product[i].getElementsByTagName("h5")[0];
  let matchType = product[i].getElementsByTagName("h2")[0];
  let matchPrice = product[i].getElementsByTagName("h4")[0];
  let matches = 0;
  for (const searchTerm of searchTerms) {
    if (
      match.textContent.toUpperCase().indexOf(searchTerm) > -1
    
    ) {
      matches++;
    }
  }

  if (matches === searchTerms.length) {
   
    product[i].style.display = "";


  } else {
    product[i].style.display = "none";

     
  }

}
limit=25;
    thisPage=1;
      loadItem();
      window.scrollTo(0, bBanner1.offsetTop);
};

const searchbox = document.getElementById("search-item");

searchbox.addEventListener("keyup", (event) => {
  document.getElementById("min-price").value = "";
  document.getElementById("max-price").value = "";
  document.getElementById("product-name").value = "";
  document.getElementById("product-type").selectedIndex = 0;
const searchTerm = searchbox.value.trim();
if (searchTerm === "") {
  limit = 12;
  loadItem();
}
});
 


</script>

<script>
  const cartIcon=document.querySelector("#cart-icon");
const cart=document.querySelector(".cart");
const closeCart=document.querySelector("#cart-close");
const cartIcon1=document.querySelector("#cart-icon1");

cartIcon.addEventListener('click',()=>{
  cart.classList.add("act");
  overlay.style.display = 'block';
  overlay.style.zIndex = '100';
  searchbars.classList.remove('active25');
      htmlElement.style.overflowY = 'scroll';
      searchbars.style.opacity="0";
      searchbars.style.pointerEvents = 'none';
      icons.style.right = "-300px";
      subMenu.classList.remove("open-menu");
});
cartIcon1.addEventListener('click',()=>{
  cart.classList.add("act");
 
  overlay.style.display = 'block';
  overlay.style.zIndex = '100';
  searchbars.classList.remove('active25');
      htmlElement.style.overflowY = 'scroll';
      searchbars.style.opacity="0";
      searchbars.style.pointerEvents = 'none';
      icons.style.right = "-300px";
      subMenu.classList.remove("open-menu");
});
closeCart.addEventListener('click',()=>{
  cart.classList.remove("act");
  htmlElement.style.overflowY = 'scroll';
  overlay.style.display = 'none';
});

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", start);
} else {
  start();
}

// =============== START ====================
function start() {
  addEvents();
}

// ============= UPDATE & RERENDER ===========
function update() {
  addEvents();
  updateTotal();
  checkCartEmpty();
}


function addEvents() {
  // Remove items from cart
  let cartRemove_btns = document.querySelectorAll(".cart-remove");
  console.log(cartRemove_btns);


  cartRemove_btns.forEach((btn) => {
    btn.addEventListener("click", handle_removeCartItem);

  });

  // Change item quantity
  let cartQuantity_inputs = document.querySelectorAll(".cart-quantity");
  cartQuantity_inputs.forEach((input) => {
    input.addEventListener("change", handle_changeItemQuantity);
  });

  // Add item to cart
  let addCart_btns = document.querySelectorAll(".add-cart");
  addCart_btns.forEach((btn) => {
    btn.addEventListener("click", handle_addCartItem);
  });

  // Buy Order
  const buy_btn = document.querySelector(".btn-buy");
  buy_btn.addEventListener("click", handle_buyOrder);

}

// ============= HANDLE EVENTS FUNCTIONS =============
let itemsAdded = [];

function handle_addCartItem() {
  let product = this.parentElement;
  let title = product.querySelector(".product-title").innerHTML;
  let price = product.querySelector(".product-price").innerHTML;
  let imgSrc = product.querySelector(".product-img").src;
  console.log(title, price, imgSrc);

  let newToAdd = {
    title,
    price,
    imgSrc,
  };

  // handle item is already exist
  if (itemsAdded.find((el) => el.title == newToAdd.title)) {
    alert("Sản phẩm này đã tồn tại rồi!");
    
    return;
  } else {
    countCartAdd1.innerHTML="!";
  
  countCartAdd.innerHTML="!";
    itemsAdded.push(newToAdd);
  }

  // Add product to cart
  let cartBoxElement = CartBoxComponent(title, price, imgSrc);
  let newNode = document.createElement("div");
  newNode.innerHTML = cartBoxElement;
  const cartContent = cart.querySelector(".cart-content");
  cartContent.appendChild(newNode);

  update();
}

function handle_removeCartItem() {
  // Decrement each count-cart-add span by 1
  const countCartAdd1 = document.querySelector("#count-cart-add1");
  const countCartAdd = document.querySelector("#count-cart-add");
  if (itemsAdded.length === 0) {
    countCartAdd1.innerHTML = "0";
    countCartAdd.innerHTML = "0";
    return;
  }

  // Remove the cart item from the page
  this.parentElement.remove();

  // Update the cart
  itemsAdded = itemsAdded.filter(
    (el) =>
      el.title != this.parentElement.querySelector(".cart-product-title")
        .innerHTML
  );
  updateCartCount();
  update();
}

function handle_changeItemQuantity() {
  if (isNaN(this.value) || this.value < 1) {
    this.value = 1;
  }
  this.value = Math.floor(this.value); // to keep it integer

  update();
}
function checkCartEmpty() {
  const simplyCart = document.querySelector(".simply-cart");

  if (itemsAdded.length > 0) {
    simplyCart.style.display = "none";
  } else {
    simplyCart.style.display = "flex";
  }
}
function updateCartCount() {

  const countCartAdd1 = document.querySelector("#count-cart-add1");
  const countCartAdd = document.querySelector("#count-cart-add");

  if (itemsAdded.length > 0) {
    countCartAdd1.innerHTML = "!";
    countCartAdd.innerHTML = "!";
  } else {
    countCartAdd1.innerHTML = "0";
    countCartAdd.innerHTML = "0";
  }
}

function handle_buyOrder() {
  if (itemsAdded.length <= 0) {
    alert("Chưa có đơn hàng nào để đặt! \nHãy đặt một đơn hàng đầu tiên.");
  
    return;
  }
  
  
  const payment=document.querySelector('.containers');
  const cartContent = cart.querySelector(".cart-content");
const buybutton=document.querySelector('.btn-buy');
window.location.href="pay.html";
simplyCart.style.display = "none";

   itemsAdded = [];
 update();
  }
  const buybutton=document.querySelector('.btn-buy');
buybutton.addEventListener("click", () => {
 
  window.scrollTo(0, bBanner1.offsetTop);
});
 
// =========== UPDATE & RERENDER FUNCTIONS =========
function updateTotal() {
  let cartBoxes = document.querySelectorAll(".cart-box");
  const totalElement = cart.querySelector(".total-price");
  let total = 0;
  cartBoxes.forEach((cartBox) => {
    let priceElement = cartBox.querySelector(".cart-price");
    let price = parseFloat(priceElement.innerHTML.replace("vnđ", ""));
    let quantity = cartBox.querySelector(".cart-quantity").value;
    total += price * quantity;
  });


  total = total.toFixed(2);


  totalElement.innerHTML =  total + "vnđ";
}

// ============= HTML COMPONENTS =============
function CartBoxComponent(title, price, imgSrc) {
  return `
    <div class="cart-box">
        <img src=${imgSrc} alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title}</div>
            <div class="cart-price">${price}</div>
            <input type="number" value="1" class="cart-quantity">
        </div>
        <!-- REMOVE CART  -->
        <i class='bx bx-trash cart-remove' id="remove-counter"></i>
    </div>`;
}

</script>

<script>
  let subMenu = document.getElementById("subMenu");
  function toggleMenu(){
    subMenu.classList.toggle("open-menu");
    overlay.style.display = 'none';
htmlElement.style.overflowY = 'scroll';
searchbars.classList.remove("active25");
searchbars.style.opacity="0";
      searchbars.style.pointerEvents = 'none';
  }
    </script>

<script>
 const countCartAdd1 = document.getElementById("count-cart-add1");
countCartAdd1.textContent = 0;
const countCartAdd = document.getElementById("count-cart-add");
countCartAdd.textContent = 0;


  
  </script>




 <script>
  let slider = document.querySelector('.slidersss .listsss');
let items = document.querySelectorAll('.slidersss .listsss .itemsss');
let next = document.getElementById('nextsss');
let prev = document.getElementById('prevsss');
let dots = document.querySelectorAll('.slidersss .dotsss li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}

function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    let last_active_dot = document.querySelector('.slidersss .dotsss li.activesss');
    last_active_dot.classList.remove('activesss');
    dots[active].classList.add('activesss');

    clearInterval(refreshInterval);
   

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};


</script>




<script>
  document.getElementById('btn-ad-search').addEventListener('click', function() {
    toggleSearchBox();
  });
  
  document.getElementById('overlay').addEventListener('click', function() {
    hideOverlayAndSearchBox();
    closebar();
  });
  document.getElementById('x-icon-close').addEventListener('click', function() {
    hideOverlayAndSearchBox();
  
  });
  function toggleSearchBox() {
    var overlay = document.getElementById('overlay');
    var searchBox = document.getElementById('advan-search-container');
    var currentTransform = window.getComputedStyle(searchBox).getPropertyValue('transform');
  
    if (currentTransform === 'matrix(1, 0, 0, 1, 0, 0)') {
      searchBox.style.transform = 'translateX(-320px)';
      overlay.style.display = 'none';
      htmlElement.style.overflowY = 'scroll';
    } else {
      searchBox.style.transform = 'translateX(0)';
      overlay.style.display = 'block';
      htmlElement.style.overflow = 'hidden';
    }
  }
  
  function hideOverlayAndSearchBox() {
    var overlay = document.getElementById('overlay');
    var searchBox = document.getElementById('advan-search-container');
    cart.classList.remove("act");
    searchBox.style.transform = 'translateX(-320px)';
    overlay.style.display = 'none';
    htmlElement.style.overflowY = 'scroll';
  }
  
</script>
