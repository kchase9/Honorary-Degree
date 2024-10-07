<?php
    include_once("header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Rohan Kanhai</title>
</head>
<body>
    <div class="rec">
    <div class="intro w-100" style="background-image: url('img/rohan-kanhai.png');">
        <div class="container">
            <div class="col-lg-6 col-md-12 ">
                <div class="align-items-start d-flex mb-3 flex-column">
                    <h1 class="p-3">Rohan Kanhai</h1>
                    <h2 class="p-3">Honorary Doctorate in Sports and Civic Engagement</h2>
                    <h3 class="p-3">Date: 18th Novemeber, 2023</h3>
                    <p class="p-3">Rohan Kanhai, a former West Indian cricketer from Port Mourant, British Guiana, is celebrated as one of the finest batsmen in cricket history, known for his skillful and versatile play in both Test and county cricket. Making his Test debut in 1957 against England, Kanhai joined a team of legends, including Sonny Ramadhin, Clyde Walcott, and Garfield Sobers, and played a pivotal role in West Indies cricket from 1954-55 to 1973-74. Initially a wicketkeeper, he evolved into a middle-order batsman and achieved notable milestones, scoring over 1,000 runs in a season ten times with Warwickshire, peaking with 1,894 runs at an average of 57.39 in 1970. He set a world record with a 465-run partnership with John Jameson in 1974 and scored 15 Test centuries, including a memorable 256 against India and 213 against Pakistan, maintaining a Test average of 47.53. Kanhai captained the West Indies in the 1972-73 series against Australia and the 1973 tour to England before ending his Test career. He also played a key role in the first-ever World Cup Final in 1975, scoring 55 runs to help the West Indies secure victory. Kanhai’s legacy endures as a testament to his enduring impact on cricket in the Caribbean and his remarkable performances on the international stage.
                    </p>
                    <div class="">
                        <a class="btn" href="index.php"><i class="fa-solid fa-house" style="background-color:none;"></i>  Home</a>
                        <a href="#h-gal" class="btn">See More</a>
                    </div>
                </div>
                
            </div>

            
        </div>
    
    </div>
    
    <div class="container">
        <div id="gallery">
            <div class="text-lg-end">
                <h2 id="h-gal">Gallery</h2>
                <hr>
            </div>
        </div>

        <!--  Image Gallery, adapted from Bootstrap -->

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-self-center">
                <div id="img-carousel" class="carousel slide">
                    <div class="carousel-indicators">
                        <!-- Those buttons below -->
                    <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Rohan Kanhi.jpeg" class="d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Rohan-Kanhaii copy.jpg" class="d-block">
                        </div>
                    </div>
                    <!--  Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#img-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#img-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        
            

    </div>
    </div>
    
</body>

</html>