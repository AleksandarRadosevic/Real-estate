<!-- Autor:Luka Juskovic 2017/0674-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styleAdminUsers.css">
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
                        <div class="dropdown" style="margin-left: auto;">
                        <button type="button" name="actionAgency" value="Promeni privilegije" class="dugme2 dropdown-toggle"  data-toggle="dropdown" style="width:100%;"/>
                        Promeni privilegije</button>
                        <div class="dropdown-menu">                       
                        <div class="dropdown-item"> <label>
                        <input id="checbox1" type="checkbox" name="Prikazi sve">Pgadsgdasgadsgds
                        </label></div>
                    
                   
                        </div>
                        </div>
                        <input type="submit" name="actionAgency" value="Ukloni korisnika" class="adminButton dugmeukloni">

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
                        <input type="submit" name="actionPrivileged" value="Promeni privilegije" class="adminButton dugme2"/>
                        <input type="submit" name="actionPrivileged" value="Ukloni korisnika" class="adminButton dugmeukloni">
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
                        <input type="submit" name="actionRegistered" value="Promeni privilegije" class="adminButton dugme2"/>
                        <input type="submit" name="actionRegistered" value="Ukloni korisnika" class="adminButton dugmeukloni">
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