
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/styleShowUser.css">
    <script src='/assets/javascript.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Pregled profila</title>
    
</head>
<body>
    <nav>
        <div class="logo"><h4><a  href='../index.html'>Success</a></h4></div>
        
        <div class="logo"id="logo2">
               <a href='Pregled.html' id="myProf"><div class="btn btn-success">Moj profil</div></a href>&nbsp;
               <a href='Registereduser/logout' ><div class="btn btn-danger">Odjavi se</div></a href>
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
   
    <div class="main-body">
    
        
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/assets/images/avatar.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo $user['Username']?></h4>
                      <h5><i>Registrovani korisnik</i></h5>
                      <p class="text-muted font-size-sm">Beograd, Palilula</p>
                      
                    </div>
                  </div>
                </div>
              </div>
   
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ime i prezime</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $user['Name'].' '.$user['Surname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email adresa</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $user['Email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Broj telefona</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php 
                       if ($user['Phone']!=null)
                       echo $user['Phone'];
                       echo '/';?>
                    </div>
                  </div>
            
                 
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="register.html" style="width: 100%; ">Izmeni podatke</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="advertisments.html" style="width: 100%; ">Pogledaj svoje oglase kao gost</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="dodajOglas.html" style="width: 100%; ">Dodaj novi oglas</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="azurirajObrisi.html" style="width:100%; ">Ažuriraj oglas</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="omiljeno.html" style="width: 100%;">Omiljeno</a>
                    </div>
                  </div>
                </div>
              </div>

      


            </div>
          </div>

        </div>
    </div>
</div>
 
        </main>
    </div>
</body>
</html>