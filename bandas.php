<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Archivos de Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
   <!-- Archivos de CSS propietarios -->
   <link rel="stylesheet" href="css/normilize.css">
   <link rel="stylesheet" href="css/styles.css">

    <title>Bandas</title>
</head>
<body class="bg-light">
    <?php
        include("header.html");
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Bandas</h1>
            </div>
        </div>
        
        <div class="row border shadow mb-5">
            <div class="col-sm-12 col-lg-4 p-0 rounded-sm mx-auto d-block">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    
                    <div class="carousel-inner rounded-sm h-50">
                        <div class="carousel-item active rounded-sm">
                            <img src="img/bandas/img-banda-01.jpg" class="d-block w-100 rounded-sm" alt="...">
                        </div>

                        <div class="carousel-item rounded-sm">
                            <img src="img/bandas/img-banda-02.jpg" class="d-block w-100 rounded-sm" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="img/bandas/img-banda-03.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev flecha-left" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next flecha-right" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-12 col-lg-2 d-flex justify-content-around d-lg-block mt-2">
                <img src="img/bandas/img-banda-01.jpg" class="img-thumbnail mb-2 mr-0 w-25 d-lg-block" alt="">
                <img src="img/bandas/img-banda-02.jpg" class="img-thumbnail mb-2 w-25 d-lg-block" alt="">
                <img src="img/bandas/img-banda-03.jpg" class="img-thumbnail mb-2 w-25 d-lg-block" alt="">
            </div>

            <div class="col-sm-12 col-lg-6 align-self-lg-center">
                <div class="row d-flex ">
                    <div class="col-12 ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit quasi dolor! Quam modi corrupti recusandae, quo velit repellendus nisi voluptate illo illum, non optio qui. Sit dicta provident minima.</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-primary btn-lg mb-2">Compralo Ahora!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
        include("footer.html");
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>