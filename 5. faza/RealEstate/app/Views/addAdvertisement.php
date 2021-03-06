<!-- Danilo Vucinic 2018/0297-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/styleOglas.css">
    <script src='/assets/javascript.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Prototip</title>
</head>

<body>
    <nav>
        <div class="logo"><h4><a  href='/Home'>Success</a></h4></div>
        <ul class="nav-links">
            <li><a href='/Home'>Početna stranica</a></li>
            <li><a href='/Guest/search'>Pretraga</a></li>
            <li><a href='/Guest/Ads'>Oglasi</a></li>
                <?php
                if ($User['Type']=='agency'){
                   echo"<li><a href='/Agency' class='login'>Moj profil</a href></li>";
                   echo"<li><a href='/Agency/logout' class='button register'>Odjavi se</a></a href></li>";
                }
                else if ($User['Type']=='privileged'){
                    echo "<li><a href='/Privilegeduser' id='myProf' class='login'>Moj profil</a></li>";
                    echo "<li><a href='/Privilegeduser/logout'class='button register'>Odjavi se</a></li>";
                }
                ?>   
        </ul>
                
        <div class="hidden-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <!--<nav>
        <div class="logo"><h4><a  href='/Home'>Success</a></h4></div>       
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
                ?>

               </div>
        <div class="hidden-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>-->
    <div id="containter">
        <main>
        <section class="glass" style="background-image:url('/assets/images/dodavanjeOglasa.jpg');  background-repeat: no-repeat; background-size: cover !important;">

        <h2 style="font-family: 'Poppins', sans-serif; text-align: center;">Dodavanje oglasa</h2>
        <form class='uredi' enctype="multipart/form-data" name='logovanje' id='forma' method="post">

<div style="width:100%;" >
    <table>
 <tr>
            <td ><h3 style="font-family: 'Poppins', sans-serif; text-align: center;">Vaši podaci :</h3>          
        </tr>
        <tr>
            <td>Naslov </td>
            <td>
                <input type='text' name="naslov" minlength="3" required style="border-radius: 5px;">
            </td>
        </tr>
        <tr>     
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Cena u evrima:</td>
            <td>
            <input type="number" name="cena" required style="border-radius: 5px;" />
            </td>
        </tr>
        <tr><td> &nbsp;</td></tr>
        <tr>
            <td>Tip nekretnine:</td>
            <td>
                <label for='muski'>Stan</label>
                <input id="stan" value="stan" type='radio' name='tipNekretnine'>
                <input type='radio'  value="kuca" id="kuca" name='tipNekretnine' checked>Kuća
            </td>
        </tr>
        <tr>
            <td>Vrsta usluge:</td>
            <td>
                <label>Prodaja</label>
                <input id='prodaja' value="prodaja" type='radio' name='vrstaUsluge'>
                <input type='radio' value="izdavanje" name='vrstaUsluge' id='izdavanje' checked>Izdavanje
            </td>
        </tr>
        <tr>
            <td>Lokacija:</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="width:60%;">
                    Izaberi lokaciju
                    </button>
                    <div class="dropdown-menu">
                    <div class="dropdown-item"><label>
                      <input type="radio" name="Beograd" value='1' checked > Beograd, Cukarica
                    </label>
                   </div>
                   <div class="dropdown-item"> <label>
                    <input type="radio" name="Beograd" value='2'> Beograd, Novi Beograd
                  </label></div>
                  <div class="dropdown-item" ><label>
                    <input type="radio" name="Beograd" value='3'> Beograd, Palilula
                  </label></div>
                  <div class="dropdown-item"><label>
                    <input type="radio" name="Beograd" value='4' > Beograd, Rakovica
                  </label>
                 </div>
                 <div class="dropdown-item"> <label>
                  <input type="radio" name="Beograd" value='5' > Beograd, Savski venac
                </label></div>
                <div class="dropdown-item" ><label>
                  <input type="radio" name="Beograd" value='6'>   Beograd, Stari grad
                </label></div>
                <div class="dropdown-item"><label>
                  <input type="radio" name="Beograd" value='7'> Beograd, Vozdovac
                </label>
               </div>
               <div class="dropdown-item"> <label>
                <input type="radio" name="Beograd" value='8'> Beograd, Vracar
              </label></div>
              <div class="dropdown-item" ><label>
                <input type="radio" name="Beograd" value='9'> Beograd, Zemun
              </label></div>
              <div class="dropdown-item"><label>
                <input type="radio" name="Beograd" value='10'> Beograd, Zvezdara
              </label>
             </div>
             <div class="dropdown-item"> <label>
              <input type="radio" name="Beograd" value='11'> Beograd, Barajevo
            </label></div>
            <div class="dropdown-item" ><label>
              <input type="radio" name="Beograd" value='12'> Beograd, Grocka
            </label></div>
            <div class="dropdown-item"><label>
              <input type="radio" name="Beograd" value='13'> Beograd, Lazarevac
            </label>
           </div>
           <div class="dropdown-item"><label>
            <input type="radio" name="Beograd" value='14'> Beograd, Mladenovac
          </label>
         </div>
         <div class="dropdown-item"> <label>
          <input type="radio" name="Beograd" value='15'> Beograd, Obrenovac
        </label></div>
        <div class="dropdown-item" ><label>
          <input type="radio" name="Beograd" value='16'> Beograd, Sopot
        </label></div>
        <div class="dropdown-item"><label>
          <input type="radio" name="Beograd" value='17'> Beograd, Surcin
        </label>
        </div>
        </div>
        </div>
            </td>
        </tr>
        <tr><td> &nbsp;</td></tr>
        <tr>
            <td>Adresa:</td>
            <td>
                <input type='text' name="adresa"  minlength="3" placeholder="" required style="border-radius: 5px;">
            </td>
        </tr>
        <tr><td> &nbsp;</td></tr>
        <tr>
            <td>Kvadratura u m2 </td>
            <td>
		<input type="number" name="kvadratura" required style="border-radius: 5px;"/>            </td>
        </tr>
        <tr>
            <td>Dodatno:</td>
            <td>
                <table>
                    <tr>
                        <td><input type='checkbox' value="Uknjizen" name='check_list[]' checked> Uknjižen</td>
                        <td><input type='checkbox' value="Potkrovlje" name='check_list[]'> Potkrovlje</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' value="Hitna prodaja" name='check_list[]' > Hitna prodaja</td>
                        <td><input type='checkbox' value="Garaza" name='check_list[]'> Garaza</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' value="Lift" name='check_list[]' checked> Lift</td>
                        <td><input type='checkbox' value="Terasa" name='check_list[]'> Terasa</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' value="Podrum" name='check_list[]' checked> Podrum</td>
                        <td><input type='checkbox'  value="Penthouse" name='check_list[]'> Penthouse</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' value="Nova gradnja" name='check_list[]' > Nova gradnja</td>
                        <td><input type='checkbox' value="Stara gradnja" name='check_list[]'> Stara gradnja</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' value="Izvorno stanje" name='check_list[]' checked> Izvorno stanje</td>
                        <td><input type='checkbox'  value="Renovirano"name='check_list[]'> Renovirano</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' value="Lux"  name='check_list[]' checked> Lux</td>
                        <td><input type='checkbox' value="Za renoviranje" name='check_list[]'> Za renoviranje</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>Opis:</td>
            <td>
                <textarea rows='5' name="komentar" cols='40'></textarea>
            </td>
        </tr>

  </form>
        
<script>
function goBackToMain() {
            window.location.href = "http://localhost:8080/"
        }
        
        
       

</script>
<script>
    function goToPictureAdding()
      window.location.href =  http://localhost:8080/AddAd/upload

</script>
        <tr>
            <td>Odustani</td>
            <td>   
                <?php
                if ($User['Type']=='privileged'){
                    echo "<a href='/Privilegeduser'><button type='button'class='btn-danger' style='width: 60%;'>Nazad</button></a>";
                }
                else if ($User['Type']=='agency'){
                    echo "<a href='/Agency'><button type='button'class='btn-danger' style='width: 60%;'>Nazad</button></a>";
                }
                ?>              
            </td>
        </tr>
         <tr>
            <td>Postavi oglas</td>
            <td>
            <button type='submit'  class="btn-success" style="width: 60%;">Postavi </button>                              
            </td>
        </tr>
    </table>
</div>
</div>
        </section>    
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>