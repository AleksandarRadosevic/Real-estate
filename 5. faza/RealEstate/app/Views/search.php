<!-- Autor:Emilija Petrovic 2017/0644-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/styleSearch.css">
    <script src='/assets/javascript.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Prototip</title>
    
</head>
<body>
  <nav>
    <div class="logo"><h4><a href='../index.html'>Success</a></h4></div>
     <ul class="nav-links" >
       <li><a href='../index.html' class="btn" style="background-color: rgb(33, 74, 255);">Početna stranica</a href></li>
       <li><a href='pretraga.html' class="btn" style="background-color: rgb(33, 74, 255);">Pretraga</a href></li>
       <li><a href='#'class="btn" style="background-color: rgb(33, 74, 255);">Oglasi</a href></li>
       <li><a href='#'class="btn" style="background-color: rgb(33, 74, 255);">O nama</a href></li>
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
      <main>
      

      <section class="glassem">
      <br><br>
       
      <h3>Pretraga</h3>

        
           <br>
           <br>
           <form method="get">
          <div class="sr">
          <label style="padding-right: 4%;">
               Cena
            </label>

            od
            <input class="searchTextField" type='number' name='priceFrom'  autocomplete="off">
            do
            <input class="searchTextField" type='number' name='priceTo' autocomplete="off">              
            <br>
            <br>
            <br>
            <br>
          <label id="kolona2">
              Lokacija
          </label>
          <div class="dropdown" style="margin-left: 4%;">
            <button type="button" class="btn btn-primary dropdown-toggle dropbutton" onclick="btnToggle()">
            Izaberi lokaciju
            </button>
            <div id="Dropdown" class="dropdown-menu" style="padding-left:1%; padding-right: 28%;"> 
              <div class="dropdown-item"> <label>
              <input id="checbox1" type="checkbox" name="Prikazi sve"> Prikazi sve
            </label></div>
            <?php foreach($municipalities->getResult() as $temp){?>
                <div class="dropdown-item" style="margin-right:0%; padding-right: 0%;"><label>
              <input type="checkbox" name="<?php echo $temp->City.' '.$temp->Name;?>"> <?php echo $temp->City.', '.$temp->Name;?>
            </label>
        
             </div>
            <?php }?>
            </div>
            </div>
  
          <br>
          <br>
          <br>
          <br>
          <br>
 
          <label>
              Kvadratura
            </label>
            &nbsp;
            od
            <input class="searchTextField" type='number' name='sizeFrom' autocomplete="off">
            do
            <input class="searchTextField" type='number' name='sizeTo' autocomplete="off">   
          <br>
          <br>
          <br>
          <br>
          <label id="kolona22">
             Tip
            </label>

            <div class="dropdown" style="margin-left: 7%;">
              <button type="button" class="btn btn-primary dropbutton drType" onclick="btnToggleType()">
              Izaberi tip
              </button>
              <div id="DropdownType" class="dropdown-menu">
              <div class="dropdown-item" > <label>
                <input type="checkbox" name="Prikazi sve" value=" ">  Prikazi sve
              </label>             
              </div>                
                 <?php foreach($municipalities->getResult() as $temp){?>
                <div class="dropdown-item" style="margin-right:0%; padding-right: 0%;"><label>
              <input type="checkbox" name="<?php echo $temp->City.' '.$temp->Name;?>"> <?php echo $temp->City.', '.$temp->Name;?>
            </label>
        
             </div>
            <?php }?>
             </div>
                
        
          <br>
          <br>
          <br>
          <br>
          <br>
       
          <button class="btn btn-success searchButton" type="submit">Pretraga<img id="lupa" src="/assets/images/lupa.png" alt="Lupa"></button>
       
          </form>
      </section>
      <div class="circle1"></div>
      <div class="circle2"></div>
      </main>
    
  </div>
</body>
</html>
