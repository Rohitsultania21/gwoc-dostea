<?php
    require_once 'includes/config.php';
    $review = mysqli_query($db,"SELECT * FROM `review` ORDER BY `date`");
    $gallary = mysqli_query($db,"SELECT * FROM `gallery`");
    $menu = mysqli_query($db,"SELECT * FROM `menu`");

    $review_count = mysqli_num_rows($review);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/our-menu.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js"></script>

</head>
<body>
    <!-- Header section start -->
    <header class="header">
    <a href="" class="logo">
        <img src="images/logo.png" alt="logo">
    </a>
    <div class="menu-list">
        <ul>
            <li><a href="home#home">Home</a></li>
            <li><a href="our-menu">Our Menu</a></li>
            <li><a href="our-gallery">Gallery</a></li>
            <li><a href="review">Review</a></li>
            <li><a href="home#upi">UPI</a></li>
        </ul>
    </div>
    <div class="side-icon">
        <ul>
        <li><a href="https://goo.gl/maps/4DRxAjMt4u8FbW1p6" target="_blank"><i class="fa-solid fa-location-dot"></i></a></li>
            <li><a href="tel:+91 9377778726"><i class="fa-solid fa-phone"></i></a></li>
            <li><a href="login"><i class="fa-solid fa-right-to-bracket"></i></a></li>
            <li id="menu-bar"><i class="fa-solid fa-bars-progress" id="times"></i></li>
        </ul>
    </div>
    </header>
    <!-- Header Section End -->
    <!-- rotater start -->
        <p class="rotater">
            <a href="">
                <marquee behavior="alternate" width="500px" scrollamount="3" /><i class="fa-solid fa-burger"></i> &nbsp;&nbsp;Hello,Guys here is our special dish &nbsp;&nbsp;<i class="fa-solid fa-wine-glass"></i></marquee>
            </a>
        </p>
    <!-- rotater end -->
    <!-- slider start -->
    <section class="home" id="home"  data-aos="zoom-in" data-aos-duration="2000" >

        <div class="row">
    
            <div class="content" data-aos="zoom-out" data-aos-duration="3000">
                <h3 class="typing"> Welcome Dostea'n Aur <span> Dosto Ke Saath </span></h3>
                <p>Known for its hot but mild chai which gives an exotic taste and it’s exquisite hot chocolate served in a crispy biscuit cup.</p>
                <a href="#" class="btn">order now</a>
            </div>
    
            <div class="swiper dish-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide" data-aos="zoom-in" data-aos-duration="1000"><img src="images/img1.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/img2.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/img3.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/img4.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/img5.jpg" alt=""></a>
                </div>
                <!-- <img src="images/stand.png" class="stand" alt=""> -->
            </div>
    
        </div>
    
    </section>
    <!-- slider end -->
  <!-- about us start -->
  <h1 class="heading"> <span>About us</span> </h1>
  <section class="about"  data-aos="fade-left" data-aos-duration="2000">

      <div class="content">
          <h3>How we started...</h3>
          <h1>Back in 2020</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora quaerat at fuga dolorum natus velit.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium earum commodi reiciendis, consequuntur dolorum id ipsum temporibus molestias aliquid. Quasi unde porro magni, quo officia sapiente tempora harum adipisci.
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur deserunt dolorem totam nisi, dolore, facilis quo dicta corporis consectetur id nulla laudantium unde expedita dolores, iusto illo cupiditate animi in.</p>
          <!-- <a href="#" class="btn">connect with us now</a> -->
      </div>
  

  
  </section>
<!-- about us end -->
    <!-- our menu start -->
    <h1 class="heading"> <span>Our menu</span> </h1>
    <div class="menu-container" data-aos="fade-right" data-aos-duration="2000" >
        <div class="menu">
            <div class="menu-column"  data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
                 <h4>Type-1</h4>
                 <div class="single-menu">
                    <img src="images/img1.jpg" alt="">
                    <div class="menu-content">
                        <h5>food title <span>&#8377; 50</span></h5>
                        <p>ingridients</p>
                    </div>
                 </div>
                 <div class="single-menu">
                    <img src="images/img1.jpg" alt="">
                    <div class="menu-content">
                        <h5>food title <span>&#8377; 50</span></h5>
                        <p>ingridients</p>
                    </div>
                 </div>
                 <div class="single-menu">
                    <img src="images/img1.jpg" alt="">
                    <div class="menu-content">
                        <h5>food title <span>&#8377; 50</span></h5>
                        <p>ingridients</p>
                    </div>
                 </div>
                 <div class="single-menu">
                    <img src="images/img1.jpg" alt="">
                    <div class="menu-content">
                        <h5>food title <span>&#8377; 50</span></h5>
                        <p>ingridients</p>
                    </div>
                 </div>
            </div>
            <div class="menu-column"  data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
                <h4>Type-2</h4>
                <div class="single-menu">
                   <img src="images/img1.jpg" alt="">
                   <div class="menu-content">
                       <h5>food title <span>&#8377; 50</span></h5>
                       <p>ingridients</p>
                   </div>
                </div>
                <div class="single-menu">
                   <img src="images/img1.jpg" alt="">
                   <div class="menu-content">
                       <h5>food title <span>&#8377; 50</span></h5>
                       <p>ingridients</p>
                   </div>
                </div>
                <div class="single-menu">
                   <img src="images/img1.jpg" alt="">
                   <div class="menu-content">
                       <h5>food title <span>&#8377; 50</span></h5>
                       <p>ingridients</p>
                   </div>
                </div>
                <div class="single-menu">
                   <img src="images/img1.jpg" alt="">
                   <div class="menu-content">
                       <h5>food title <span>&#8377; 50</span></h5>
                       <p>ingridients</p>
                   </div>
                </div>
           </div>
           <div class="menu-column" data-aos="fade-down" data-aos-duration="3000" data-aos-easing="ease-in-out">
            <h4>Type-3</h4>
            <div class="single-menu">
               <img src="images/img1.jpg" alt="">
               <div class="menu-content">
                   <h5>food title <span>&#8377; 50</span></h5>
                   <p>ingridients</p>
               </div>
            </div>
            <div class="single-menu">
               <img src="images/img1.jpg" alt="">
               <div class="menu-content">
                   <h5>food title <span>&#8377; 50</span></h5>
                   <p>ingridients</p>
               </div>
            </div>
            <div class="single-menu">
               <img src="images/img1.jpg" alt="">
               <div class="menu-content">
                   <h5>food title <span>&#8377; 50</span></h5>
                   <p>ingridients</p>
               </div>
            </div>
            <div class="single-menu">
               <img src="images/img1.jpg" alt="">
               <div class="menu-content">
                   <h5>food title <span>&#8377; 50</span></h5>
                   <p>ingridients</p>
               </div>
            </div>
       </div>
       <a href="" class="full-view">View Full menu</a>
        </div>

        <div class="popup-img-menu">
            <span>&times;</span>
            <img src="images/img1.jpg" alt="">
        </div>
    </div>
    <!-- our menu end -->
        <!-- Pay using upi start -->
       <section class="upi" id="upi" data-aos="fade-up">
        <h1 class="heading"> <span>Pay Using UPI</span> </h1>
        <div class="upi-container" data-aos="fade-left" data-aos-duration="2000">
            <div class="upi-img">
                <img src="images/qr.svg" alt="">
            </div>
            <a href="upi://pay?pn=Dostean&pa=q871865527@ybl&cu=+91" class="btn">Pay Now</a>
        </div>
       </section>
        <!-- pay using upi end -->
    <!-- Gallery start -->
    <h1 class="heading"> <span>Gallery</span> </h1>
    <div class="gl-container" data-aos="fade-down-right">
        <div class="img-container">
            <?php $i=0;
            while($gal_res = mysqli_fetch_array($gallary)){ ?>
            <div class="image" data-aos="fade" data-aos-duration="1000"><img src="admin/gal-img/<?php echo $gal_res['images']; ?>" alt=""></div>
            <?php $i++; } ?>
        </div>
        <a href="" class="full-view" style="left: 45%; margin: 2rem auto;" id="all-images">View All Images</a>
        <div class="popup-img">
            <span>&times;</span>
            <img src="images/img1.jpg" alt="">
        </div>
    </div>
    <!-- Gallery end -->
    <!-- Review section start -->
    <h1 class="heading" > <span>Customer review</span> </h1>
    <section class="reviews" id="reviews" data-aos="fade-left" data-aos-duration="2000">

        <div class="swiper reviews-slider">
    
            <div class="swiper-wrapper">
            <?php while($review_res = mysqli_fetch_array($review)){ ?>
                <div class="swiper-slide box">
                    <img src="images/foodie.png" alt="">
                    <h3><?php echo $review_res['name'] ?></h3>
                    <p><?php echo $review_res['descrption'] ?></p>
                    <div class="stars">

                        <?php for($i = 0;$i<$review_res['rating'];$i++) {?>
                        <i class="fas fa-star"></i>
                        <?php } ?>
                    </div>
                    <p><?php echo $review_res['date']; ?></p>
                </div>
                <?php } ?>
            </div>
            <div class="full-view" id="my-exp">
                <!-- Give Your Experience -->
                <a href="review" style="color:#f5f5f5;">Give Your Feedback</a>
            </div>
    
        </div>
        
    </section>
    <!-- Review section end -->
    <!-- Map Include Start-->
    <section class="upi" style="background: none;" data-aos="fade-right" data-aos-duration="2000">
        <h1 class="heading"> <span>How You Can Reach</span> </h1>
        <div class="upi-container" data-aos="fade-left" data-aos-duration="2000">
            <div class="upi-img">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.7864117687295!2d72.77658501485665!3d21.16089668592701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04da5cd96a645%3A0x570d0a5bf2f181a2!2sDostean%20Cafe%20%26%20restro!5e0!3m2!1sen!2sin!4v1673954604689!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <a href="https://goo.gl/maps/4DRxAjMt4u8FbW1p6" target="_blank" class="btn">Open In Map</a>
        </div>
       </section>
    <!--  Map Include End-->
    <!-- Footer Start -->
    <?php require_once 'footer.php'; ?>
    <!-- Footer End -->
      

    <!-- Animation On Scroll Start -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Animation On Scroll end -->

</body>
<script src="js/index.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    
var swiper = new Swiper(".dish-slider", {
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
  });
  var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
var typed = new Typed(".typing",{
        strings:["The Biscuit Cup Cafe",],
        typeSpeed:600,
        BackSpeed:400,
        loop:true
    })
</script>
</html>