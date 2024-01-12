<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>


   <!-- Header Main Section Start -->
   <section class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-location">
                    <a href="#"><span><i class='bx bx-map'></i></span> Location</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-languges">
                    <select name="" id="">
                        <option value="">Select Language</option>
                        <option value="English">English</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Scots">Scots</option>
                        <option value="Welsh">Welsh</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
   </section>
   <header class="header-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-logo">
                    <img src="images/logo.png" alt="">
                    <div class="header-logo-txt">
                        <h3>AI Financial</h3>
                        <h4>Tax Advisory Services</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-btns">
                    <a href="#" >Login</a>
                    <a href="#" class="themebtn">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
   </header>
   <section class="header-end">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="header-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQS</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   </section>
   <!-- Header Main Section End -->