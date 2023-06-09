<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SantaCruizin'</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-film mr-2"></i>
                Beaches
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.php">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/gasparpage.jpg"></div>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Wawie's Beach Resort</h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <a href="img/beachresort/wawies1.jpg"><img src="img/beachresort/wawies1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                         Beach Resort? no problem, please choose the best beach resort for you.
                    </p>          
                    <p>
                        Please support us by making a <a href="#" target="_parent" rel="sponsored"> Gcash donation</a>
                    </p>       
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">Details</h3>
                        <p>Location: Maniwaya, Sta. Cruz, Marinduqe</p>
                        <p>Photo Credit: Gian Russel Photography  and Dominic Leonida Photography</p>
                    </div>
                    <div class="mb-4 d-flex flex-wrap">
                <div class="mr-4 mb-2">
                    <span class="tm-text-gray-dark"></span><span class="tm-text-primary">How is it for you?</span>
                </div>
                
                <br>
                <style>
  /* Hide the default button styles */

  .like-button,
  .dislike-button {
    background: none;
    border: none;
    cursor: pointer;
  }

  /* Define the styles for the like and dislike icons */
  .like-button i,
  .dislike-button i {
    color: black;
  }

  /* Define the styles for the selected (checked) like button */
  .like-button input[type="radio"]:checked + i {
    color: blue;
  }
</style>

<!-- Example HTML for the like and dislike buttons -->
<div class="d-flex align-items-center">
  <label class="like-button mr-3">
    <input type="radio" name="like-dislike" />
    <i class="far fa-thumbs-up"></i>
  </label>
  <label class="dislike-button">
    <input type="radio" name="like-dislike" />
    <i class="far fa-thumbs-down"></i>
  </label>
</div>

        </div>
    </div>
</div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <a href="img/beachresort/wawies.jpg"><img src="img/beachresort/wawies.jpg" alt="Image" class="img-fluid"></a>                 
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">00/00/0000</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <a href="img/beachresort/wawies2.jpg"><img src="img/beachresort/wawies2.jpg" alt="Image" class="img-fluid"></a>                 
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">00/00/0000</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <a href="img/beachresort/wawies3.jpg"><img src="img/beachresort/wawies3.jpg" alt="Image" class="img-fluid"></a>                 
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">00/00/0000</span>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

    <section class="reviews bg-gray">
    <div class="container"><br>
        <h2 class="text-center">Leave us a Review</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="review-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="review">Review:</label>
                            <textarea name="review" id="review" rows="5" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                        <p></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .bg-gray {
        background-color: #f2f2f2;
    }
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reviewText = $_POST["review"];

    $reviewsFile = 'reviews.xml';

    // Load the existing XML file or create a new one
    if (file_exists($reviewsFile)) {
        $reviews = simplexml_load_file($reviewsFile);
    } else {
        $reviews = new SimpleXMLElement('<reviews></reviews>');
    }

    $review = $reviews->addChild('review');
    $review->addChild('reviewText', $reviewText);

    $reviews->asXML($reviewsFile);

    echo '<div style="text-align: center; background-color: lightgreen; padding: 10px;">Thank you for your review!</div>';
}
?>
<br>

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About SantaCruizin'</h3>
                    <p>SantaCruizin' is a free website that was made to highlight the many beautiful places in Santa Cruz, Marinduque. It was only a photograph, but every image on this website has links to details about the spot where it was taken, making SantaCruizin' a gallery that may help you find places in Santa Cruz.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2023 SantaCruizin'. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="#" class="tm-text-gray" rel="sponsored" target="_parent">Ramon.pogi</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>