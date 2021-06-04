<?php

namespace App\Controllers;
use App\Models\adModel;
use App\Models\TagModel;
use App\Models\hasTagModel;
class Agency extends BaseController
{
	public function index()
	{
                $user=$this->session->get('User');
                if ($user['Type']!='agency'){                   
                return redirect()->to(site_url('Home'));
                }
                $user=$this->session->get('User');
		echo view('AgencyProfile',['user'=>$user]);
	}
        
    public function addAdvertisement(){
            $data=[];           
            helper(['form']);
            
            
             $user=$this->session->get('User');
                if ($user['Type']!='agency'){                   
                return redirect()->to(site_url('Home'));
                }
                
                else {
                    //check if adding advertisements is prohibited
                    
                    $sql="Select * from prohibition where IdA=1 And IdU=".$user['Id'];
                    $db = \Config\Database::connect();
                    $p=$db->query($sql);
                    if (sizeof($p->getResult())>0){
                        $message="Zabranjeno dodavanje oglasa!";
                        echo "<script>alert('$message');"
                                . "window.location='/Agency'</script>";
                    }
                }
              
            if ($this->request->getMethod()=='post'){
            //validation for user
               
                $advertisment=new adModel();
		//$id=$user->getInsertID();
                
                $type1=$_POST["tipNekretnine"];
                $type2=$_POST["vrstaUsluge"];
               
                $mesto = $_POST['Beograd'];  
       
              
               $owner=$this->session->get('User');
               

                $values=[
                    'IdOwner'=>$owner['Id'],
                    'Price'=>$this->request->getVar('cena'),
					'Topic'=>$this->request->getVar('naslov'),
					'Size'=>$this->request->getVar('kvadratura'),
					'Address'=>$this->request->getVar('adresa'),
					'IdPlace'=> $mesto,
					'Description'=>$this->request->getVar('komentar'),
                                        'Purpose'=>$type2,
                                        'RealEstateType'=>$type1
					
                ];   
                //add user
                            $advertisment->save($values);               
                            $idad= $advertisment->getInsertID();
                            if(!empty($_POST['check_list']))
                            {
                                foreach($_POST['check_list'] as $check)
                               {
                                     $model=new TagModel();
                                     $red=$model->where('Name',$check)->first();
                                     $idtag=$red['IdTag'];
                   
                                     $values=['IdAd'=>$idad, 'IdTag'=>$idtag];
                                     $model1=new hasTagModel();
                                     $model1->save($values);
                                }
                                }
                                
                                
		return redirect()->to('upload');
            
            
            
            //validation for 
            
              }
            
            
            echo view('addAdvertisement.php');
          
        }
               

 
       public function upload()
       {
                $user=$this->session->get('User');
                if ($user['Type']!='agency'){                   
                return redirect()->to(site_url('Home'));
                }
                 else {
                    //check if adding advertisements is prohibited
                    
                    $sql="Select * from prohibition where IdA=1 And IdU=".$user['Id'];
                    $db = \Config\Database::connect();
                    $p=$db->query($sql);
                    if (sizeof($p->getResult())>0){
                        $message="Zabranjeno dodavanje slika!";
                        echo "<script>alert('$message');"
                                . "window.location='/Agency'</script>";
                    }
                }
                
         // If upload button is clicked ...
        if (isset($_POST['upload'])) {
      
            $msg = "";
    $db = mysqli_connect("localhost", "root", "", "realestate");        
    $sql = "SELECT Id 
    FROM advertisement 
    WHERE Id=(
    SELECT max(Id) FROM advertisement
    )";
    
           $result=mysqli_query($db, $sql);
           $niz= mysqli_fetch_array($result);
           $id=$niz["Id"];               
  
            
    $pathToFolder="assets/userImages/Advertisement".$id;
    
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
     
    if (!file_exists($pathToFolder))
         mkdir($pathToFolder);

        $folder=$pathToFolder."/".$filename;         
 
        $sql = "INSERT INTO image (filename,IdAd) VALUES ('$filename', '$id')";
        
        // Execute query
        mysqli_query($db, $sql);
  
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
 
 
		//return redirect()->to('/');
 
            //validation for             
              }
            
             echo view('addPicture.php',['user'=>$this->session->get('User')]);
          
      
  }

	public function updateAdvertisement(){
                 $user=$this->session->get('User');
                 if ($user['Type']!='agency'){                   
                return redirect()->to(site_url('Home'));
                }
                 else {
                    //check if adding advertisements is prohibited
                    
                    $sql="Select * from prohibition where IdA=1 And IdU=".$user['Id'];
                    $db = \Config\Database::connect();
                    $p=$db->query($sql);
                    if (sizeof($p->getResult())>0){
                        $message="Zabranjeno azuriranje oglasa!";
                        echo "<script>alert('$message');"
                                . "window.location='/Agency'</script>";
                    }
                }

$id=2;
$advertisment=new adModel();
$data=$advertisment->find($id);
       
       
        
 $price = $data['Price'];
 $size=$data['Size'];
 $topic=$data['Topic'];
 $address=$data['Address'];
 $idplace=$data['IdPlace'];
 $description=$data['Description'];
 $purpose=$data['Purpose'];
 $type=$data['RealEstateType'];
 
 /*
 
 $mysqli_connection = new mysqli("localhost", "root", "", "realestate");
$result = $mysqli_connection->query("SELECT IdTag FROM hastag where IdAd='2'");
$mysqli_connection->close();
 */
 

$db = mysqli_connect("localhost", "root", "", "realestate");
// Check connection
                if ($db->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                    }

                    
                    
                    
                    $hastag=new hasTagModel();
                    
                  //  $sql="SELECT * FROM hastag where IdAd='2'";
                   // $resultt= mysqli_query($db, $sql);
 
$result = $hastag->where('IdAd', 2)
                   ->findAll();

            if ($this->request->getMethod()=='post'){
            //validation for user
           
                 $db = mysqli_connect("localhost", "root", "", "realestate");
// Check connection
                if ($db->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                    }
                
                
                
                $idoglasa=2;
            
                $advertisments=new adModel();
		
                
               $red=$advertisments->where('Id','2')->first();
                
                $type1=$_POST["tipNekretnine"];
                $type2=$_POST["vrstaUsluge"];
               
                $mesto = $_POST['Beograd'];  
       
                
            

                
              
             
            
           if($this->request->getVar('cena')!=null)
           {
               $price=$this->request->getVar('cena');
                     
               $sql = "UPDATE advertisement SET 
                Price = '".$price."'
           
                  WHERE Id='2'";
               mysqli_query($db, $sql);
               
           }
           
               if($this->request->getVar('naslov')!=null)
               {
                 $topic=$this->request->getVar('naslov');
                 
                  $sql = "UPDATE advertisement SET 
                Topic = '".$topic."' WHERE Id='2'";
               mysqli_query($db, $sql);
               
               }
              if($this->request->getVar('kvadratura')!=null)
              {
                  $size=$this->request->getVar('kvadratura');
                 
                  $sql = "UPDATE advertisement SET 
                Size = '".$size."' WHERE Id='2'";
               mysqli_query($db, $sql);
                  
              }
              if($this->request->getVar('adresa')!=null)
              {
                  $address=$this->request->getVar('adresa');
                 
                 $sql = "UPDATE advertisement SET 
                 Address = '".$address."' WHERE Id='2'";
                 mysqli_query($db, $sql);
                  
              }
              
                if($this->request->getVar('komentar')!=null)
              {
                  $description=$this->request->getVar('komentar');
                 
                 $sql = "UPDATE advertisement SET 
                 Description = '".$description."' WHERE Id='2'";
                 mysqli_query($db, $sql);
                  
              }
              
              
              
                 
                 $sql = "UPDATE advertisement SET 
                 IdPlace = '".$mesto."' WHERE Id='2'";
                 mysqli_query($db, $sql);
                 
                 
                 
                 $sql = "UPDATE advertisement SET 
                 Purpose = '".$type2."' WHERE Id='2'";
                 mysqli_query($db, $sql);
                 
                 
                 $sql = "UPDATE advertisement SET 
                 RealEstateType = '". $type1."' WHERE Id='2'";
                 mysqli_query($db, $sql);
                 
                 
                 $sql="DELETE FROM hastag WHERE IdAd='2' ";
                 
                
                  mysqli_query($db, $sql);
                 
              

                            $idad= '2';
                            if(!empty($_POST['check_list']))
                            {
                                foreach($_POST['check_list'] as $check)
                               {
                                     $model=new TagModel();
                                     $red=$model->where('Name',$check)->first();
                                     $idtag=$red['IdTag'];
                   
                                     $values=['IdAd'=>$idad, 'IdTag'=>$idtag];
                                     $model1=new hasTagModel();
                                     $model1->save($values);
                                }
                                }
                                
                
                
               
                                
                                
		return redirect()->to('http://localhost:8080/');
            
            
            
            //validation for 
            
              }
              
           
            
             return view('updateAdvertisement', ['price' => $price,
                'topic'=>$topic,
                'size'=>$size,
                'address'=>$address,
                'idplace'=>$idplace,
                'description'=>$description,
                'purpose'=>$purpose,
                 'result'=>$result,
                'type'=>$type]);
            echo view('updateAdvertisement.php');
           
          
            
          
             
        }
     
        public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
