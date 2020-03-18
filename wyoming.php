<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyoming</title>

    <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
	<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/wyoming.css">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">  
    
    <script type='text/javascript' src='unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js'></script>


</head>

<body>

    <?php
    include 'navbar.php';
    include 'banner.php';
    include 'histoire.php';
    include 'gallery.php';
    include 'activites.php';
    include 'carrousel.php';
    include 'footer.php';
     ?>

    

</body>

<script type="text/javascript">

    jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery();

    });
    
</script>

    <script>
        window.onscroll = function () {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
        
    </script>
    

</body>

</html>