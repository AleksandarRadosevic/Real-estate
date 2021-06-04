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
       <li><a href='../index.html' class="btn" style="background-color: rgb(33, 74, 255);">Početna stranica</a href></li>
       <li><a href='pretraga.html' class="btn" style="background-color: rgb(33, 74, 255);">Pretraga</a href></li>
       <li><a href='#'class="btn" style="background-color: rgb(33, 74, 255);">Oglasi</a href></li>
       <li><a href='#'class="btn" style="background-color: rgb(33, 74, 255);">O nama</a href></li>
       <li><a href='login' class='btn btn-success'>Prijavite se</a href></li>
       <li><a href='register' class='btn btn-danger'>Registrujte se</a></a href></li>
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

<h1 class=naslov>Azuriranje</h1>

            <form class='uredi' enctype="multipart/form-data" name='logovanje' id='forma'action="" method="post">

<div id='content' width=100%>
    <table>
        <tr>
            <td ><h2 class=podnaslov>Azurirajte podatke :</h2> 
            
        </tr>
        <tr>
            <td>Naslov </td>
            <td>
                
              
                <input type='text' name="naslov" minlength="3" placeholder="<?php echo $topic; ?>"  >
            </td>
        </tr>
        <tr>
            <td>Cena u evrima:</td>
            <td>
              <input type="number" name="cena" placeholder="<?php echo $price; ?>"   />
            </td>
        </tr>
        <tr>
            <td>Tip nekretnine:</td>
            <td>
                <label for='muski'>Stan</label>
                <input id="stan" value="stan" type='radio' name='tipNekretnine'<?php echo ($type=='stan' ? 'checked' : '');?>>
                <input type='radio'  value="kuca" id="kuca" name='tipNekretnine' <?php echo ($type=='kuca' ? 'checked' : '');?>>Kuća
            </td>
        </tr>
        <tr>
            <td>Vrsta usluge:</td>
            <td>
                <label>Prodaja</label>
                <input id='prodaja'  value="prodaja" type='radio' name='vrstaUsluge' <?php echo ($purpose=='prodaja' ? 'checked' : '');?>>
                <input type='radio' value="izdavanje" name='vrstaUsluge' id='izdavanje' <?php echo ($purpose=='izdavanje' ? 'checked' : '');?>>Izdavanje
            </td>
        </tr>
        <tr>
            
            <td>Mesto:</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"  >
                    Izaberi lokaciju
                    </button>
                    <div class="dropdown-menu" >
                    <div class="dropdown-item"><label>
                      <input type="radio" name="Beograd" value='1' <?php echo ($idplace=='1' ? 'checked' : '');?> > Beograd, Cukarica
                    </label>
                   </div>
                   <div class="dropdown-item"> <label>
                    <input type="radio" name="Beograd" value='2'<?php echo ($idplace=='2' ? 'checked' : '');?>> Beograd, Novi Beograd
                  </label></div>
                  <div class="dropdown-item" ><label>
                    <input type="radio" name="Beograd" value='3'<?php echo ($idplace=='3' ? 'checked' : '');?>> Beograd, Palilula
                  </label></div>
                  <div class="dropdown-item"><label>
                    <input type="radio" name="Beograd" value='4'<?php echo ($idplace=='4' ? 'checked' : '');?> > Beograd, Rakovica
                  </label>
                 </div>
                 <div class="dropdown-item"> <label>
                  <input type="radio" name="Beograd" value='5' <?php echo ($idplace=='5' ? 'checked' : '');?>> Beograd, Savski venac
                </label></div>
                <div class="dropdown-item" ><label>
                  <input type="radio" name="Beograd" value='6'<?php echo ($idplace=='6' ? 'checked' : '');?>>   Beograd, Stari grad
                </label></div>
                <div class="dropdown-item"><label>
                  <input type="radio" name="Beograd" value='7'<?php echo ($idplace=='7' ? 'checked' : '');?>> Beograd, Vozdovac
                </label>
               </div>
               <div class="dropdown-item"> <label>
                <input type="radio" name="Beograd" value='8'<?php echo ($idplace=='8' ? 'checked' : '');?>> Beograd, Vracar
              </label></div>
              <div class="dropdown-item" ><label>
                <input type="radio" name="Beograd" value='9'<?php echo ($idplace=='9' ? 'checked' : '');?>> Beograd, Zemun
              </label></div>
              <div class="dropdown-item"><label>
                <input type="radio" name="Beograd" value='10'<?php echo ($idplace=='10' ? 'checked' : '');?>> Beograd, Zvezdara
              </label>
             </div>
             <div class="dropdown-item"> <label>
              <input type="radio" name="Beograd" value='11'<?php echo ($idplace=='11' ? 'checked' : '');?>> Beograd, Barajevo
            </label></div>
            <div class="dropdown-item" ><label>
              <input type="radio" name="Beograd" value='12'<?php echo ($idplace=='12' ? 'checked' : '');?>> Beograd, Grocka
            </label></div>
            <div class="dropdown-item"><label>
              <input type="radio" name="Beograd" value='13'<?php echo ($idplace=='13' ? 'checked' : '');?>> Beograd, Lazarevac
            </label>
           </div>
           <div class="dropdown-item"><label>
            <input type="radio" name="Beograd" value='14'<?php echo ($idplace=='14' ? 'checked' : '');?>> Beograd, Mladenovac
          </label>
         </div>
         <div class="dropdown-item"> <label>
          <input type="radio" name="Beograd" value='15'<?php echo ($idplace=='15' ? 'checked' : '');?>> Beograd, Obrenovac
        </label></div>
        <div class="dropdown-item" ><label>
          <input type="radio" name="Beograd" value='16'<?php echo ($idplace=='16' ? 'checked' : '');?>> Beograd, Sopot
        </label></div>
        <div class="dropdown-item"><label>
          <input type="radio" name="Beograd" value='17'<?php echo ($idplace=='17' ? 'checked' : '');?>> Beograd, Surcin
        </label>
        </div>
                    </div>
                   </div>
            </td>
        </tr>

        <tr>
            <td>Adresa:</td>
            <td>
                <input type='text' name="adresa"  minlength="3" placeholder="<?php echo $address; ?>" >
            </td>
        </tr>


        <tr>
            <td>Kvadratura u m2 </td>
            <td>
		<input type="number" placeholder="<?php echo $size ?>" name="kvadratura"  />       
            </td>
        </tr>


        
        
      
       
    
                                              
        <tr>
            <td>Dodatno:</td>
            <td>
                <input type='checkbox' value="Potkrovlje" name='check_list[]' <?php {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '1') {
            echo "checked";
        }                                       
       
    }
    }                   ?>> Potkrovlje
                <input type='checkbox' value="Uknjizen" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '2') {
            echo "checked";
        }
       
    }
    }                   ?>> Uknjizen
                <input type='checkbox' value="Hitna prodaja" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '3') {
            echo "checked";
        }
       
    }
    }                   ?>> Hitna prodaja
                <input type='checkbox' value="Garaza" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '4') {
            echo "checked";
        }
       
    }
    }                   ?>> Garaza
                <input type='checkbox' value="Lift" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '5') {
            echo "checked";
        }
       
    }
    }                   ?>> Lift
                <input type='checkbox' value="Terasa" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '6') {
            echo "checked";
        }
       
    }
    }                   ?>> Terasa
                <input type='checkbox' value="Podrum" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '7') {
            echo "checked";
        }
       
    }
    }                   ?> > Podrum
                <input type='checkbox'  value="Penthouse" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '8') {
            echo "checked";
        }
       
    }
    }                   ?>> Penthouse
                <br>
                 <input type='checkbox' value="Nova gradnja" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '9') {
            echo "checked";
        }
       
    }
    }                   ?>> Nova gradnja
                <input type='checkbox' value="Stara gradnja" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '10') {
            echo "checked";
        }
       
    }
    }                   ?>> Stara gradnja
                <input type='checkbox' value="Izvorno stanje" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '11') {
            echo "checked";
        }
       
    }
    }                   ?>> Izvorno stanje
                <input type='checkbox'  value="Renovirano"name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '12') {
            echo "checked";
        }
       
    }
    }                   ?>> Renovirano
                <input type='checkbox' value="Lux"  name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '13') {
            echo "checked";
        }
       
    }
    }                   ?> > Lux
                <input type='checkbox' value="Za renvoranje" name='check_list[]' <?php  {
    foreach ($result as $key => $value) {
        if ($value['IdTag'] == '14') {
            echo "checked";
        }
       
    }
    }                   ?>> Za renvoranje
                
            </td>
        </tr>


      
        


        <tr>
            <td>Opis:</td>
            <td>
                <textarea rows='5' name="komentar" placeholder="<?php echo $description ?>" cols='40'></textarea>
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
      window.location.href =  "http://localhost:8080/"

</script>
        <tr>
            <td>Odustani</td>
            <td>
				 
                
           <button type="button" onclick="goBackToMain()"class="btn-danger" >Nazad</button>
            </td>
        </tr>
        
        
        
   
        
        
        
         <tr>
            <td>Ažuriraj oglas</td>
            <td>
             
               
			
                            <button type='submit'  class="btn-success" >Azuriraj </button> 
                                    
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