<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styleAds.css">
    <script src='/assets/javascript.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Prototip</title>
    
</head>
<body>
  <nav>
 
    
    <div class="logo"><h4><a href='../index.html'>Success</a></h4></div>
     <ul class="nav-links" >
       <li><a href='../index.html' class="btn" style="background-color: rgb(33, 74, 255);">Početna stranica</a href></li>
       <li><a href='pretraga.html' class="btn" style="background-color: rgb(33, 74, 255);">Pretraga</a href></li>
       <li><a href='pregledSvihOglasa.html'class="btn" style="background-color: rgb(33, 74, 255);">Oglasi</a href></li>
       <li><a href='#'class="btn" style="background-color: rgb(33, 74, 255);">O nama</a href></li>
       <li><a href='login.html' class='btn btn-success'>Prijavite se</a href></li>
       <li><a href='register.html' class='btn btn-danger'>Registrujte se</a></a href></li> 
     </ul>

     <div class="hidden-menu" style="margin:0px !important; padding:0 !important;">
         <div class="line1"></div>
         <div class="line2"></div>
         <div class="line3"></div>
     </div>
 </nav>
 
    <div class="containter">
     <main style="margin-top:0% !important;">
    
       <section class="glass">
        <h2 style="color:black; margin-top: 5%; margin-left: 5%;"> Luksuzna kuća u NS</h2>
      
          
     <!--   <div class="slidershow middle" style="width: 45%; height: 40%; margin-left: -15%;">

          <div class="slides">
            <input type="radio" name="r" id="r1" checked="">
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
              <img src="images/novisad.jpg" alt="">
            </div>
            <div class="slide">
              <img src="images/slikaZaProjekat1.jpg" alt="">
            </div>
            <div class="slide">
              <img src="images/slikaZaProjekat2.jpg" alt="">
            </div>
            <div class="slide">
              <img src="images/slikaZaProjekat3.jpg" alt="">
            </div>
            <div class="slide">
              <img src="images/slikaZaProjekat4.jpg" alt="">
            </div>
          </div>
    
          <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
          </div>
        </div>
      --> <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 50%; margin-left:5%">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/slikaZaProjekat1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/slikaZaProjekat1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/slikaZaProjekat3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="col-xl-5 col-md-12">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Cena</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                220 000e
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Kvadratura</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                300m2
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Tip nekretnine</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Kuća
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Lokacija</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Petrovaradin, Novi Sad
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Broj telefona</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                +381 641234567
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email adresa</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                marko_markovic@gmail.com
              </div>
            </div>
            </div>
          </div>
          </div>
          </div>
          <div class="row gutters-sm" style="margin-left: 2%; margin-right:2% ;">
            <div class="col-md-12 ">
              <div class="card">
                <div class="card-body">
                  
                      <h4>Cetvorosobna kuca u Novom Sadu, opstina Petrovaradin</h4>
                      
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat reprehenderit obcaecati neque quae fuga odio ab ducimus ullam aperiam accusamus facilis expedita fugit, provident itaque, magni doloremque rerum numquam repudiandae.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
   
            </div>
            </div>
       </section>
     </main>
   </div>
 </body>
</html>
          