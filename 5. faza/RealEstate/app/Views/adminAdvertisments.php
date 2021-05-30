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
        <main>
        <section class="glass">
            <div class='uredi'>
                <div class="imgcontainer">
                  <img src="/assets/images/admin.png" alt="Avatar" class="avatar">
                </div>
                <ul class='lista'>
                    <h1 class='lista-naslov'>Oglasi</h1>
                    <div class='box-container l'>
                        <input class='search' type='text' placeholder="Unesite oglas/korisnika/adresu">
                        <button class='polje'>Traži</button>
                    </div>
                    <li>
                        <span>1</span>
                        <span>Oglas 1</span>
                        <span>Olja Bećković</span>
                        <button class='dugmeukloni' onclick='ukloni(this)'>Ukloni oglas</button>
                    </li>
                    <li>
                        <span>2</span>
                        <span>Oglas 2</span>
                        <span>Svetozar Marović</span>
                        <button class='dugmeukloni' onclick='ukloni(this)'>Ukloni oglas</button>
                    </li>
                    <li>
                        <span>3</span>
                        <span>Oglas 3</span>
                        <span>Olja Bećković</span>
                        <button class='dugmeukloni' onclick='ukloni(this)'>Ukloni oglas</button>
                    </li>
                    <li>
                        <span>4</span>
                        <span>Oglas 4</span>
                        <span>Svetozar Marović</span>
                        <button class='dugmeukloni' onclick='ukloni(this)'>Ukloni oglas</button>
                    </li>
                    <li>
                        <span>5</span>
                        <span>Oglas 5</span>
                        <span>Mlađan Dinkić</span>
                        <button class='dugmeukloni' onclick='ukloni(this)'>Ukloni oglas</button>
                    </li>
                </ul>
            </div>
        </section>
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>