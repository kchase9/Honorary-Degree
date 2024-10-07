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
    <title>Madame Desireee Bernard</title>
</head>
<body>
    <div class="rec">
    <div class="intro w-100" style="background-image: url('img/madame-bernard.png');">
        <div class="container">
            <div class="col-lg-6 col-md-12 ">
                <div class="align-items-start d-flex mb-3 flex-column">
                    <h1 class="p-3">Madame Desiree Bernard</h1>
                    <h2 class="p-3">Doctorate of Laws</h2>
                    <h3 class="p-3">Date: 2007</h3>
                    <p class="p-3">Hon. Madam Justice Desiree Bernard is a trailblazing legal figure in the Caribbean judiciary, renowned for her pioneering achievements and advocacy for gender equality. Beginning her career in 1963 after earning her Bachelor of Laws from the University of London, she became Guyana’s first female judge in the High Court in 1980. Her historic career milestones include being appointed the first female Justice of Appeal in 1992, Chief Justice in 1996, Chancellor of the Judiciary in 2001, and the first female judge on the Caribbean Court of Justice in 2005. Beyond her judicial accomplishments, Justice Bernard has made significant contributions to gender equality and human rights, serving on bodies such as the United Nations CEDAW and the International Federation of Women Lawyers. She co-founded the Caribbean Women’s Association and the Georgetown Toastmistress Club, advancing women’s rights and leadership. Honored with awards like the Order of Roraima of Guyana and the CARICOM Triennial Award for Women, Justice Bernard is celebrated as a pioneer in law and a champion of women’s rights in the Caribbean.</p>
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
  
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Hon Madame Desiree Bernard Honorary Doctorate of Laws9.jpg" class="d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Hon Madame Desiree Bernard Honorary Doctorate of Laws11.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Hon Madame Desiree Bernard Honorary Doctorate of Laws12.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/Hon Madame Desiree Bernard Honorary Doctorate of Laws13.jpg" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/Hon Madame Desiree Bernard Honorary Doctorate of Laws17.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Hon Madame Desiree Bernard Honorary Doctorate of Laws54.jpg" class="d-block w-100">
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