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
    <title>Tc Run</title>
</head>
<body>

  <?php
    include("header.html");
  ?>

  <div class="col-lg-12 col-11 rounded-sm mx-auto d-block">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          
          <div class="carousel-inner rounded-sm h-60">
            <div class="carousel-item active rounded-sm">
              <img src="img/carrusel/relojes.jpg" class="d-block w-100 rounded-sm h-60" alt="...">
            </div>
            <div class="carousel-item rounded-sm">
              <img src="img/carrusel/relojes.jpg" class="d-block w-100 rounded-sm h-60" alt="...">
            </div>
          </div>
          <!--  <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
          </div> -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  </div>

    
  <div class="container">
    <div class="row">
      <div class="col-6 mt-1">
        <img src="img/Imagen -4.png" class="img-fluid" alt="audifonos">
      </div>
    
      <div class="col-6 d-flex flex-wrap align-content-center">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore eius modi incidunt provident est harum possimus cum totam, voluptatum ipsum. <a href="error404.php">Aquí</a></p>
      </div>
    </div>  
  </div>
  

  <div class="container">
    <div class="row">
      <div class="col-6 d-flex align-content-end">
        <p class=" d-flex flex-wrap align-content-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet distinctio assumenda deserunt cumque ratione eos. Iste nisi non sit vel aliquam. <a class="" href="error404.php">Aquí</a></p>
      </div>
    
      <div class="col-6">
          <img src="img/Imagen -5.png" class="img-fluid d-flex align-content-end" alt="bandas">
      </div>
    </div>
  </div>
  
  <?php
    include("footer.html");
  ?>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>