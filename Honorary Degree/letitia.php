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


    <title>Letitia Wright</title>
</head>
<body>
    <div class="rec">

    <div class="intro w-100" style="background-image: url('img/letitia-wright.jpg');">
        <div class="container">
            <div class="col-lg-6 col-md-12 ">
                <div class="align-items-start d-flex mb-3 flex-column">
                    <h1 class="p-3">Letitia Wright</h1>
                    <h2 class="p-3">Doctorate of Letters</h2>
                    <h3 class="p-3">Date: 1st February, 2023</h3>
                    <p class="p-3">Letitia Wright is a British actress born in Guyana and celebrated for her role as Shuri in Black Panther. Leaving Guyana at age 7, Wright expressed profound gratitude for the recognition, reflecting on her Guyanese upbringing and her family’s struggles to build a better future. She highlighted the values of humility, patience, and faith as guiding forces in her journey through numerous challenges in the acting world, attributing her success to perseverance and belief. During her visit, Wright also received the Key to the City of Georgetown, a symbolic honor that she pledged to uphold with dignity. The ceremony further celebrated her roots, with the president presenting her with a framed copy of her Guyanese birth certificate and her parents’ marriage certificate, deepening her connection to her homeland.
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
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
                        <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="11" aria-label="Slide 12"></button>
  
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Extra Ordinary Convocation 2023_Edited91.jpg" class="d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited95.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited95(1).jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited96.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited102.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited115.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited129.jpg" class="d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited130.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited132.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited141.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited141(1).jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Extra Ordinary Convocation 2023_Edited144.jpg" class="d-block w-100">
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