
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Bank Management System</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo_transparent.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/logo_transparent.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    

</head>
<body class="bank_management">

    <!-- LOADER -->
    

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
            <div class="side-top">
                <div class="logo-sidebar">
                    <a href="index.php"><img src="images/logo2.png" alt="image"></a>
                </div>
                <ul class="sidebar-nav">
                    <li><a class="active" href="adminbank.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="news.php">News</a></li>
                </ul>
            </div>
        </div>
        
        <!-- End Sidebar-wrapper -->

        <div class="container">
    <form class="well form-horizontal" method="post" action="process_register_branch.php" enctype="multipart/form-data">
    <fieldset>
        <legend><h3>
        Register New Branch
            </h3></legend>
        
       <!-- <div class="form-group">
        <label class="col-md-4 control-label">Branch ID</label>
            <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                <input type="number" name="branch_id" class= "form-control" required>
                </div>
            </div>

        </div>
    -->
        <div class="form-group">
        <label class="col-md-4 control-label">Location</label>
            <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="location" class= "form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label">Number of employees</label>
            <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="number" name="no_of_employees" class= "form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label">Branch Photo</label>
            <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                <input type="file" name="branch_pic" id="branch_pic" class= "form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label">
            </label>
            <div class="col=md-4">
            <button type="submit" class="btn btn-warning">Register<span class="glyphicon glyphicon-send"></span></button>
            </div>
        </div>
        </fieldset>    
        </form>
    </div>


<script src="js/jquery1.js"></script>
<script src="js/bootstrap1.js"></script>

            
            
 <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>
