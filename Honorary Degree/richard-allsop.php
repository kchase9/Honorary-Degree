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
    <title>Richard Allsop</title>
</head>
<body>
<!-- Main Content Section -->
    <div class="rec">

        
    <div class="intro w-100" style="background-image: url('img\Dr Richard Allsopp.jpg');">
        <div class="container">
            <div class="col-lg-6 col-md-12 ">
                <div class="align-items-start d-flex mb-3 flex-column">
                    <h1 class="p-3">Richard Allsop</h1>
                    <h2 class="p-3">Doctorate of Letters</h2>
                    <h3 class="p-3">Date: 11th November, 2023</h3>
                    <p class="p-3">Dr. Richard Allsopp was a prominent Guyanese linguist and lexicographer, renowned for his Dictionary of Caribbean English Usage (1996), which documents Caribbean dialects and expressions. Through his Caribbean Lexicography Project, Allsopp validated Caribbean English as a legitimate linguistic form, enriched by African, European, and indigenous influences. He held various influential positions at the University of the West Indies, shaping Caribbean education and promoting regional linguistic identity globally.
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
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img\Dr Richard Allsopp.jpg" class="d-block">
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