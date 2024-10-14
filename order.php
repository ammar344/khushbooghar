<?php 
include_once('connection.php');
$productId = $_GET['productId'];
$selectProduct = "SELECT * FROM products WHERE id = '$productId'";
$selectQuery = mysqli_query($conn, $selectProduct);

$row = mysqli_fetch_assoc($selectQuery);

if(isset($_REQUEST['order'])){
    $productId = $_REQUEST['productId'];
    $productName = $_REQUEST['productName'];
    $productPrice = $_REQUEST['productPrice'];
    $quantity = $_REQUEST['quantity'];
    $costumerName = $_REQUEST['name'];
    $customerPhone = $_REQUEST['phoneNumber'];
    $shippingAddress = $_REQUEST['address'];
    $status = 'Pending';
    $totalAmount = $productPrice * $quantity;
    $insert = "INSERT INTO orders (productId, productName, quantity, totalAmount, customerName, customerPhone, shippingAddress, status) VALUES ('$productId', '$productName', '$quantity', '$totalAmount', '$costumerName', '$customerPhone', '$shippingAddress', '$status')"; 
    $insertQuery = mysqli_query($conn, $insert);
    if($insertQuery){
        header('Location: products.php');
    }else{
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Khusboo Ghar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php">Home</a>
                    <a href="products.php">Products</a>
                    <a href="about.php">About</a>
                    <a href="client.php">Client</a>
                    <a href="contact.php">Contact</a>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
            </nav>
        </div>
    </div>
    <!-- header section end -->
    <!-- order section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="line"></div>
                <h1 class="heading">Contact Us</h1>

            </div>
            <?php
        // show data in card from database
        if ($row) {
            $proId = $row['id'];
          $imagePath = "./123/adminsite/products/" . $row['image'];
          $pName = $row['product_name'];
          $pPrice = $row['price'];
          $pDescription = $row['description'];
        ?>
            <div class="col-md-5">
                <img src="<?php echo $imagePath; ?>" alt="<?php echo $pName; ?>" alt="" style="height: 400px;">
            </div>
            <div class="col-md-7 product_details">
                <h2 class="">
                    <?php echo $pName; ?>
                </h2>
                <p class="clr m-0 p-0">Rs.
                    <?php echo $pPrice; ?>
                </p>
                <p class="m-0 pt-3">
                    <?php echo $pDescription; ?>
                </p>
                <p class="m-0 pt-3 clr"><b>Availability:</b> In Stock</p>
                <form action="" method="get" class="pt-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 m-0 p-0">
                                <label>Quantity:</label>
                                <input type="text" value="1" name="quantity" class="quantity">
                            </div>
                            <div class="col-md-6 ml-0 pl-0 mt-4">
                                <fieldset>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter your Name">
                                </fieldset>
                            </div>
                            <div class="col-md-6 ml-0 pl-0 mt-4">
                                <fieldset>
                                    <input type="text" name="phoneNumber" class="form-control" id="name"
                                        placeholder="Enter your Phone no.">
                                </fieldset>
                            </div>
                            <div class="col-md-12 ml-0 pl-0 mt-4">
                                <fieldset>
                                    <textarea type="text" name="address" class="form-control" id="name"
                                        placeholder="Enter your shipping address" cols="50" rows="5"></textarea>
                                </fieldset>
                            </div>
                            <input type="hidden" name="productId" Value="<?php echo $proId?>">
                            <input type="hidden" name="productName" Value="<?php echo $pName?>">
                            <input type="hidden" name="productPrice" Value="<?php echo $pPrice?>">
                            <div class="col-md-6 mt-3 ml-0 pl-0">
                                <button class="btn order" name="order">Order</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- footer section start -->
    <div class="footer_section layout_padding mt-4">
        <div class="container">
            <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="address_text">Contact Us</h3>
                        <div class="address_bt">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span
                                            class="padding_left10">Address : Samanabad Faisalabad</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call
                                            : 03230070599</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope" aria-hidden="true"></i><span
                                            class="padding_left10">Email : saadrajpoot1st@gmail.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- <div class="footer_logo_1"><a href="index.php"><img src="images/footer-logo.png"></a></div> -->
                        <p class="dummy_text"> It captures the essence of fleeting moments, turning them into timeless
                            stories told through the language of scent.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="main">
                            <h3 class="address_text">About Products</h3>
                            <p class="ipsum_text">Perfume is the art that whispers to the soul, leaving a trace of
                                elegance and memory with every breath.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social_icon">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>