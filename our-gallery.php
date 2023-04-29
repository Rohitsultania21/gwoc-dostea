<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>

<?php require_once 'header.php'; ?>

    <div class="gl-container">
        <div class="img-container">
            <div class="image"><img src="images/img1.jpg" alt=""></div>
            <div class="image"><img src="images/img2.jpg" alt=""></div>
            <div class="image"><img src="images/img3.jpg" alt=""></div>
            <div class="image"><img src="images/img4.jpg" alt=""></div>
            <div class="image"><img src="images/img5.jpg" alt=""></div>
            <div class="image"><img src="images/IMG-20230112-WA0093.jpg" alt=""></div>
        </div>
        <div class="popup-img">
            <span>&times;</span>
            <img src="images/img1.jpg" alt="">
        </div>
    </div>

<script>
    document.querySelectorAll('.img-container img').forEach(image =>{
        image.onclick = () =>{
            document.querySelector('.popup-img').style.display='block';
            document.querySelector('.popup-img img').src = image.getAttribute('src');
        }
         document.querySelector('.popup-img span').onclick = () =>{
            document.querySelector('.popup-img').style.display='none';
         }
    });
</script>
</body>
</html>