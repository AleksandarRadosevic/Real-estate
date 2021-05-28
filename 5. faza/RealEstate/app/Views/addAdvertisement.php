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
    <script src='javascript.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Prototip</title>
</head>
<body>
    <nav>
        <div class="logo"><h4><a href='../index.html'>Success</a></h4></div>
        <ul class="nav-links">
          <li><a href='../index.html'>Početna stranica</a href></li>
          <li><a href='pretraga.html'>Pretraga</a href></li>
          <li><a href='#'>Oglasi</a href></li>
          <li><a href='#'>O nama</a href></li>
          <li><a href='login.html' class='login'>Prijavite se</a href></li>
          <li><a href='register.html' class='button register'>Registrujte se</a></a href></li>
        </ul>
                
        <div class="hidden-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div id="containter">
        <main>
        <section class="glass">

<h1 class=naslov>Dodavanje oglasa</h1>

            <form class='uredi' name='logovanje' id='forma'action="" method="post">

<div id='content' width=100%>
    <table>
        <tr>
            <td ><h2 class=podnaslov>Vaši podaci :</h2> 
            
        </tr>
        <tr>
            <td>Naslov </td>
            <td>
                <input type='text' name="naslov" minlength="3" placeholder="" required>
            </td>
        </tr>
        <tr>
            <td>Cena u evrima:</td>
            <td>
              <input type="number" name="cena"  required />
            </td>
        </tr>
        <tr>
            <td>Tip nekretnine:</td>
            <td>
                <label for='muski'>Stan</label>
                <input id="stan" value="1" type='radio' name='tipNekretnine'>
                <input type='radio'  value="2" id="kuca" name='tipNekretnine' checked>Kuća
            </td>
        </tr>
        <tr>
            <td>Vrsta usluge:</td>
            <td>
                <label>Prodaja</label>
                <input id='prodaja' value="1" type='radio' name='vrstaUsluge'>
                <input type='radio' value="2" name='vrstaUsluge' id='izdavanje' checked>Izdavanje
            </td>
        </tr>
        <tr>
            <td>Mesto:</td>
            <td>
                <input type='text' name="mesto"  minlength="3" placeholder="" required>
            </td>
        </tr>

        <tr>
            <td>Adresa:</td>
            <td>
                <input type='text' name="adresa"  minlength="3" placeholder="" required>
            </td>
        </tr>


        <tr>
            <td>Kvadratura u m2 </td>
            <td>
		<input type="number" name="kvadratura" required />            </td>
        </tr>


        <tr>
            <td>Oglašivac:</td>
            <td>
                <select multiple size='3'>
                    <option selected>Agencija</option>
                    <option>Vlasnik</option>
                    <option>Investitor</option>
                    <option>Banka</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tip objekta:</td>
            <td>
                <select multiple size='2'>
                    <option selected>Nova Gradnja</option>
                    <option>Stara Gradnja</option>
                </select>
            </td>
        </tr>


        <tr>
            <td>Stanje:</td>
            <td>
                <select multiple size='4'>
                    <option selected>Izvorno</option>
                    <option>Renovirano</option>
                    <option>Lux</option>
                    <option>Za renoviranje</option>
                </select>
            </td>
        </tr>




        <tr>
            <td>Dodatno:</td>
            <td>
                <input type='checkbox' name='uknjizen' checked> Uknjizen
                <input type='checkbox' name='potkrovlje'> Potkrovlje
                <input type='checkbox' name='uknjizen' > Hitna prodaja
                <input type='checkbox' name='potkrovlje'> Garaza
                <input type='checkbox' name='uknjizen' checked> Lift
                <input type='checkbox' name='potkrovlje'> Terasa
                <input type='checkbox' name='podrum' checked> Podrum
                <input type='checkbox' name='penthaouse'> Penthouse
            </td>
        </tr>


      



        <tr>
            <td>Dodatan komentar:</td>
            <td>
                <textarea rows='5' name="komentar" cols='40'></textarea>
            </td>
        </tr>


        <tr>
            <td>Dodaj Slike</td>
            <td>
				 <button type='submit' class="btn btn-info" >Dodaj </button>
                
            </td>
        </tr>


        <tr>
            <td>Odustani</td>
            <td>
				 <button type='submit' class="btn btn-danger" >Nazad </button>
                
            </td>
        </tr>


        <tr>
            <td><h2 class=podnaslov>Postavi oglas</h2></td>
            <td>
               
				 <button type='submit' class="btn btn-success" >Postavi </button>
                
            </td>
        </tr>
    </table>
	</form>
    <img src='/assets/images/zaProjekat.jpg'>

</div>














        </section>
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>