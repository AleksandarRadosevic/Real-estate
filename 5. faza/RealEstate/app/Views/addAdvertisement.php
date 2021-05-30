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

            <form class='uredi' enctype="multipart/form-data" name='logovanje' id='forma'action="" method="post">

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
            <td>Dodatno:</td>
            <td>
                <input type='checkbox' value="Uknjizen" name='check_list[]' checked> Uknjizen
                <input type='checkbox' value="Potkrovlje" name='check_list[]'> Potkrovlje
                <input type='checkbox' value="Hitna prodaja" name='check_list[]' > Hitna prodaja
                <input type='checkbox' value="Garaza" name='check_list[]'> Garaza
                <input type='checkbox' value="Lift" name='check_list[]' checked> Lift
                <input type='checkbox' value="Terasa" name='check_list[]'> Terasa
                <input type='checkbox' value="Podrum" name='check_list[]' checked> Podrum
                <input type='checkbox'  value="Penthouse" name='check_list[]'> Penthouse
                <br>
                 <input type='checkbox' value="Nova gradnja" name='check_list[]' > Nova gradnja
                <input type='checkbox' value="Stara gradnja" name='check_list[]'> Stara gradnja
                <input type='checkbox' value="Izvorno stanje" name='check_list[]' checked> Izvorno stanje
                <input type='checkbox'  value="Renovirano"name='check_list[]'> Renovirano
                <input type='checkbox' value="Lux"  name='check_list[]' checked> Lux
                <input type='checkbox' value="Za renvoranje" name='check_list[]'> Za renvoranje
                
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
				 
                
           <button type="button" onclick="goBackToMain()"class="btn-danger" >Nazad</button>
            </td>
        </tr>
        
        
        
   
        
        
        
         <tr>
            <td><h2 class=podnaslov>Postavi oglas</h2></td>
            <td>
             
               
			
                            <button type='submit'  class="btn-success" >Postavi </button> 
                                    
            </td>
        </tr>
        
        

       
       


        
   

       
    </table>
    
     
	
    <img src='/assets/images/zaProjekat.jpg'>

</div>

               

    

        </div>











        </section>
        
        <div class="circle1"></div>
        <div class="circle2"></div>
        </main>
    </div>
</body>
</html>