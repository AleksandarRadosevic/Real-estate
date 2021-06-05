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
       <li><a href='search' class="btn" style="background-color: rgb(33, 74, 255);">Pretraga</a href></li>
       <li><a href='Ads'class="btn" style="background-color: rgb(33, 74, 255);">Oglasi</a href></li>
       <li><a href='login' class='btn btn-success'>Prijavite se</a href></li>
       <li><a href='register' class='btn btn-danger'>Registrujte se</a></a href></li> 
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
           <div class="row" style="margin-top:4%;">
               <div class="col">
        <h2 style="color:black;margin-left: 8%;"><?php echo $ad['Topic']; ?></h2>
        </div>
        <div class="col text-right">
            <div class="btn btn-success" style="margin-right:7%;"> Dodaj u omiljene</div></div>
          </div>
           <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 50%; margin-left:5%">
        <ol class="carousel-indicators">
            <?php $j=0;
        foreach ($pictures as $pic){
        if ($j==0){
            echo'<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';           
        }
        else {
            echo'<li data-target="#carouselExampleIndicators" data-slide-to="$j"></li>';
        }
        $j=$j+1; } ?>         
        </ol>
        <div class="carousel-inner">
            <?php $i=0;
            if (sizeof($pictures)==0){
                echo "<div class='carousel-item active'><img class='d-block w-100' src='/assets/images/noImage5.png'></div>";
            
            }
            foreach($pictures as $image){
                if ($i==0){?>
                <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/userImages/Advertisement<?php echo $ad['Id'].'/'.$image['filename'];?>">
                </div>             
               <?php $i=1;}
             else { ?>
                 <div class="carousel-item">
                <img class="d-block w-100" src="/assets/userImages/Advertisement<?php echo $ad['Id'].'/'.$image['filename'];?>"></div>   
                            <?php }}?>
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
               <?php echo $ad['Price'];?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Kvadratura</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $ad['Size'];?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Tip nekretnine</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $ad['RealEstateType'];?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Lokacija</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                 <?php echo $place['City'].','.$place['Name']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Broj telefona</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $owner['Phone']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email adresa</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $owner['Email']; ?>
              </div>
            </div>
            </div>
          </div>
          </div>
          </div>
            <div class="row gutters-sm" style="margin-left: 2%; margin-right:2% ; padding-top: 1%; ">
                <div class="col-md-12 ">
                    <div class="card">
                    <div class="card-body" >
                    <h6>Dodatne informacije</h6>
               <?php 
               foreach($tags as $tag){
                   $temp=new App\Models\TagModel();
                   $nameTag=$temp->where('IdTag',$tag['IdTag'])->find();
                   echo '<input type="checkbox" checked/>'.$nameTag['Name'].'$nbsp;$nbsp;';
               } 
               ?>
               
           </div>
          <div class="row gutters-sm" style="margin-left: 2%; margin-right:2% ;">
            <div class="col-md-12 ">
              <div class="card">
                <div class="card-body">
                  
                      <h4><?php echo $ad['Topic']; ?></h4>
                      
                      <p><?php echo $ad['Description']; ?></p>
                      
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
          