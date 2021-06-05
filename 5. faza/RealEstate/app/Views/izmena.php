

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/styleIzmena.css">
    <script src='/assets/javascript.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Prototip</title>
</head>
<body>
    <nav>
        <div class="logo"><h4><a  href='../index.html'>Success</a></h4></div>
        
        <div class="logo"id="logo2">
                <?php
                if ($User['Type']=='privileged'){
                    echo "<a href='/Privilegeduser' id='myProf'><div class='btn btn-success'>Moj profil</div></a href>&nbsp";
                    echo "<a href='/Privilegeduser/logout'><div class='btn btn-danger'>Odjavi se</div></a href>";
                }
                else if ($User['Type']=='agency'){
                    echo "<a href='/Agency' id='myProf'><div class='btn btn-success'>Moj profil</div></a href>&nbsp";
                    echo "<a href='/Agency/logout'><div class='btn btn-danger'>Odjavi se</div></a href>";
                }
                else if ($User['Type']=='registered'){
                    echo "<a href='/Registereduser' id='myProf'><div class='btn btn-success'>Moj profil</div></a href>&nbsp";
                    echo "<a href='/Registereduser/logout'><div class='btn btn-danger'>Odjavi se</div></a href>";
                }
                ?>

               </div>


        <div class="hidden-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="containter">
        <main>
        <section class="glass">
            <form method='POST' action=''>
            <div class='uredi'>
                <ul class='izmena'>
                    <h1 class='izmena-naslov'>Vaši podaci</h1>
                    <li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Korisničko ime</span>
                       <input class='izmena_input' value='<?php echo $User['Username'];?>' name="korime" minlength="3" maxlength="20"/>
                      </label>
                    </li>
                    <li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Lozinka</span>
                       <input class='izmena_input' name="lozinka" required minlength="3" maxlength="20"/>
                      </label>
                    </li>
                    <?php 
                    if ($User['Type']!='agency'){
                    echo "<li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Ime</span>
                       <input class='izmena_input' value='".$User['Name'] ."'name='ime' minlength='3' maxlength='20' />
                      </label>
                    </li>
                    <li>";
                        }
                    ?>
                    <?php 
                    if ($User['Type']!='agency'){
                    echo "<li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Prezime</span>
                       <input class='izmena_input' value='".$User['Surname'] ."'name='prezime' minlength='3' maxlength='20'/>
                      </label>
                    </li>
                    <li>";
                        }
                    ?>
                    <li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Email</span>
                       <input class='izmena_input' value='<?php echo $User['Email'];?>' name="email" maxlength='50'/>
                      </label>
                    </li>
                    <li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Kontakt telefon</span>
                       <input class='izmena_input' value='<?php echo $User['Phone'];?>' name="tel" maxlength='11'/>
                      </label>
                    </li>
                    <?php 
                    if ($User['Type']=='agency'){
                    echo "<li>
                      <label class='izmena_label'>
                       <span class='izmena_span'>Naziv agencije</span>
                       <input class='izmena_input' value='".$User['Name'] ."'name='agencija' minlength='3' maxlength='20'/>
                      </label>
                    </li>
                    <li>";
                        }
                    ?>
                    <button type='submit' class='izmeni_dugme'>Sačuvaj izmene</button>
                </ul>
            </div>
            </form>
        </section>
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>