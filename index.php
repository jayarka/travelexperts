<!-- Author: Jonathan Arca
    This is the index page. It shows a Bootstrap carousel and the packages currently available.
-->

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
    
    <link rel="stylesheet" type="text/css" href="packages.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>
        #carouselText {
            position: absolute;
            top: 0;
            padding-left: 200px;
            z-index: 3;
            color: white;
        }
    </style>
    <title>Travel Experts</title>

	</head>
<body>
    <!-- Head includes login and site nav -->
    <?php include 'header.php';?>

    <!-- Bootstrap carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://media.tdc.travel/tdc_media/tmp/new/1513631972.2000.big-banner-nl.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://media.tdc.travel/tdc_media/tmp/new/1554132629.2000.big-banner-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://media.tdc.travel/tdc_media/tmp/new/1554145574.2000.big-banner-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div id="carouselText">
                <br><br><br><br><br><br>
                <h1 class="display-4">Travel Experts</h1>
                <p class="lead">Save big on summer packages.</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br>
    <!-- package -->
    <?php include 'packages.php';?>

    <!-- footer -->
    <?php include 'footer.php';?>
</body>
</html>