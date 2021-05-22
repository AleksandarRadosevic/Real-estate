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
        <div class="logo"><h4><a href='/index.html'>Success</a></h4></div>
        <ul class="nav-links">
          <li><a href='/index.html'>Početna stranica</a href></li>
          <li><a href='/assetspretraga.html'>Pretraga</a href></li>
          <li><a href='#'>Oglasi</a href></li>
          <li><a href='#'>O nama</a href></li>
          <li><a href='/assets/login.html' class='login'>Prijavite se</a href></li>
          <li><a href='Guest/register' class='button register'>Registrujte se</a></a href></li>
        </ul>
                
        <div class="hidden-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="containter">
        <main>
        <section class="glass">
            <form class='uredi' name='registracija' id='forma' action="" method="post">
                <div class="imgcontainer">
                  <img src="/assets/images/avatar.png" alt="Avatar" class="avatar">
                </div>
                  <div class='section'>
                      <input type='text' name='username' id='username' autocomplete="off" required value="<?= set_value('username')?>" >
                    <label for='username' class='label-name'>
                        <span class='content-name'>Korisničko ime</span>
                    </label>
                  </div>
                  <div class='section'>
                    <input type='password' name='password' id='password' autocomplete="off" required value="<?= set_value('password')?>" >
                    <label for='password' class='label-name'>
                        <span class='content-name'>Lozinka</span>
                    </label>
                  </div>
                  <div class='section'>
                      <input type='password' name='passagain' id='passagain' autocomplete="off" required value="<?= set_value('passagain') ?>" >
                    <label for='passagain' class='label-name'>
                        <span class='content-name'>Ponovite lozniku</span>
                    </label>
                  </div>
                  <div class='section'>
                      <input type='text' name='name' id='name' autocomplete="off" required value="<?= set_value('name')?>">
                    <label for='lastname' class='label-name'>
                        <span class='content-name'>Ime</span>
                    </label>
                  </div>
                  <div class='section'>
                    <input type='text' name='surname' id='surname' autocomplete="off" required value="<?= set_value('surname')?>">
                    <label for='lastname' class='label-name'>
                        <span class='content-name'>Prezime</span>
                    </label>
                  </div>
                  <div class='section'>
                    <input type="text" name='email' id="email" autocomplete="off" required value="<?= set_value('email')?>">
                    <label for='email' class='label-name'>
                        <span class='content-name'>Email</span>
                    </label>
                  </div>
                  <div class='section'>
                    <input type="text" name='phone' id="phone" autocomplete="off" required value="<?= set_value('phone')?>">
                    <label for='phone' class='label-name'>
                        <span class='content-name'>Kontakt telefon</span>
                    </label>
                  </div>
                  <div class='section'>
                    <input type='text' name='nameAgency' id='nameAgency' autocomplete="off" value="<?= set_value('nameAgency')?>">
                    <label for='nameAgency' class='label-name agencija'>
                        <span class='content-name'>Naziv agencije (opciono)</span>
                    </label>
                  </div>
                  <div class='type'>
                    <input type="radio" id="regular" name="type" value="regular" checked>
                    <label for="regular">Običan korisnik</label>
                    <input type="radio" id="privileged" name="type" value="privileged">
                    <label for="privileged">Privilegovani korisnik</label>
                    <input type="radio" id="agency" name="type" value="agency">
                    <label for="agency">Agencija za nekretnine</label>
                  </div>
                <button type='submit' class='registerbutton' onclick="registrujse()">Registrujte se</button>
              </form>
        </section>
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>