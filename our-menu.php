<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our-menu</title>
    <link rel="stylesheet" href="css/our-menu.css">
    <link rel="stylesheet" href="css/home.css">
    <style>
        @media (max-width:450px){
            #back-img{
                left: 20%;
            }
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php require_once 'header.php'; ?>
<h1 class="heading"> <span>Our menu</span> </h1>
    <div class="menu-container">
        <img src="images/logo.png" alt="" id="back-img" style="box-sizing: border-box;
    position: fixed;
    top: 30%;
    left:35%;
    z-index: 1000;
    opacity: 0.1;
    height: 300px;
    width: 300px;
    animation-name: animate;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    transition: all .1s linear">
    <div class="menu"data-aos="fade-right" data-aos-duration="2000">
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
        <div class="menu-column" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
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
       <div class="menu-column" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
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
        
    </div>
 
</div>

    <!-- Animation On Scroll Start -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Animation On Scroll end -->
</body>
</html>