<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Panel</title>
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>


    <div class="container">
        <!-- Start Of Side Bar -->
        <aside>
            <!-- Top Area Start WIth Logo -->
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                    <h2>Dostea<span class="danger">n</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <!-- Top Area End WIth Logo -->

            <!-- Side Bar Start -->
            <div class="sidebar">
                <a href="index"  class="">
                    <i class="fas fa-th-large"></i>
                    <h3>Dashboard</h3>
                </a>

                <a href="add-dish" class="active">
                    <i class="fas fa-drafting-compass"></i>
                    <h3>Add Dish</h3>
                </a>

                
                <a href="change-password">
                    <i class="fa fa-lock"></i>
                    <h3>Change Password</h3>
                    <!-- <span class="order-count">20</span> -->
                </a>

                
                <a href="add-img">
                    <i class="fas fa-id-card-alt"></i>
                    <h3>Add Image</h3>
                </a>
                

                <a href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <h3>Logout</h3>
                </a>

            </div>
            <!-- Side Bar End -->
        </aside>
        <!-- End Of Side Bar -->

        <!-- Main-Section Start -->

        <main class="form">
            <h1>Update Dish</h1>
            <form action="">
                <div class="inputBox">
                    <input type="text" name="" placeholder="Name">
                    <input type="text" name="" placeholder="Price">
                </div>
                <div class="inputBox">
                    <input type="text" name="" placeholder="Ingrident">
                    <input type="text" name="" placeholder="Type">
                    <!-- <select name="" id="type-dish">
                        <option value="Mocktails"></option>
                        <option value="Shakes"></option>
                        <option value="Tea"></option>
                        <option value="Soups"></option>
                        <option value="Hot-Cofee"></option>
                        <option value="Beverages"></option>
                        <option value="Fries"></option>
                        <option value="Bread"></option>
                        <option value="Lebanese"></option>
                        <option value="Wrap"></option>
                        <option value="Sandwhich"></option>
                        <option value="Buns"></option>
                        <option value="Pizza"></option>
                        <option value="Pasta"></option>
                        <option value="Baked Dish"></option>
                        <option value="Rice"></option>
                        <option value="Noodels"></option>
                        <option value="Chinese Gravy"></option>
                        <option value="Maggie"></option>
                        <option value="Indian Curry"></option>
                        <option value="Indian Bread"></option>
                        <option value="Samosa"></option>
                        <option value="Salad"></option>
                        <option value="Dessert"></option>
                        <option value="Accomplishment"></option>
                    </select> -->
                </div>
                <div class="inputBox">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Write Description Of Dish"></textarea>
                </div>
                <input type="file" name="" id="file_image" > 
                <label for="file_image" class="fas fa-image" id=""></label>
                <img src="images/" alt="not-selected" id="preview_img">
                <br>
                <input type="submit" name="" id="" value="Add" class="btn">
            </form>
            <!-- Recent Order End -->
        </main>
        <!-- Main-Section End -->

    </div>

    <script src="js/previewImg.js"></script>
    <script src="js/index.js"></script>
</body>
</html>