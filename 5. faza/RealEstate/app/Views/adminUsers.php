<!-- Autor:Luka Juskovic 2017/0674-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/style.css">
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
           <li><a href='../Guest/login' class='btn btn-success'>Prijavite se</a href></li>
           <li><a href='../Guest/register' class='btn btn-danger'>Registrujte se</a></a href></li> 
         </ul>
    
         <div class="hidden-menu" style="margin:0px !important; padding:0 !important;">
             <div class="line1"></div>
             <div class="line2"></div>
             <div class="line3"></div>
         </div>
     </nav>
    <div class="containter">
        <main>
        <section class="glass">
            <div class='uredi'>
                <div class="imgcontainer">
                  <img src="/assets/images/admin.png" alt="Avatar" class="avatar">
                </div>
             
                <form style="width:100%;" method="post">
                    <ul class='lista'>
                    <h1 class='lista-naslov'>Agencije</h1>
                    <div class='box-container l'>
                        <input class='search'type='text' placeholder="Unesite korisnika">
                        <button class='polje'>Traži</button>
                    </div>
                <?php if (! empty($usersA)) : ?>
                <?php foreach ($usersA as $field => $data) : ?>
                      <li>
                        <span><?= $data['Name'] ?></span>
                        <input type="hidden" name="agencyId" value="<?php echo $data['Id']; ?>"> 
                        <input type="submit" name="actionAgency" value="Promeni privilegije" class="dugme2"/>
                        <input type="submit" name="actionAgency" value="Ukloni korisnika" class="dugmeukloni">

                    </li>          
                <?php endforeach ?>
                <?php endif ?>                                   
                </ul>    
                    <br>
                <ul class='lista'>
                    <h1 class='lista-naslov'>Privilegovani korisnici</h1>
                    <div class='box-container l'>
                        <input class='search'type='text' placeholder="Unesite korisnika">
                        <button class='polje'>Traži</button>
                    </div>
                <?php if (! empty($usersP)) : ?>
                <?php foreach ($usersP as $field => $data) : ?>
                      <li>
                        <span><?= $data['Name']?> <?= $data['Surname'] ?>
                        </span>
                        <input type="hidden" name="privilegedId" value="<?php echo $data['Id']; ?>"> 
                        <input type="submit" name="actionPrivileged" value="Promeni privilegije" class="dugme2"/>
                        <input type="submit" name="actionPrivileged" value="Ukloni korisnika" class="dugmeukloni">
                    </li>          
                <?php endforeach ?>
                <?php endif ?>                                   
                </ul> 
                    <br>
  
                    <form style="width:100%;" method="post">
                    <ul class='lista'>
                    <h1 class='lista-naslov'>Registrovani korisnici</h1>
                    <div class='box-container l'>
                        <input class='search'type='text' placeholder="Unesite korisnika">
                        <button class='polje'>Traži</button>
                    </div>
                <?php if (! empty($usersR)) : ?>
                <?php foreach ($usersR as $field => $data) : ?>
                      <li>
                        <span><?= $data['Name']?> <?= $data['Surname'] ?>
                        </span>
                        <input type="hidden" name="registeredId" value="<?php echo $data['Id']; ?>"> 
                        <input type="submit" name="actionRegistered" value="Promeni privilegije" class="dugme2"/>
                        <input type="submit" name="actionRegistered" value="Ukloni korisnika" class="dugmeukloni">
                    </li>          
                <?php endforeach ?>
                <?php endif ?>                                   
                </ul>  
                </form>
            </div>
        </section>
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>