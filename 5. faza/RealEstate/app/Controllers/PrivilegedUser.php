<?php

namespace App\Controllers;
use App\Models\adModel;
use App\Models\TagModel;
use App\Models\hasTagModel;
use App\Models\UserModel;
use App\Models\PrivilegedUserModel;
class Privilegeduser extends BaseController
{
	public function index()
	{
                $user=$this->session->get('User');
                if ($user['Type']!='privileged'){                   
                return redirect()->to(site_url('Home'));
                }
                echo view('PrivilegedProfile',['user'=>$user]);
	}
        
        
    
        public function addAdvertisement(){
            $data=[];
            
            helper(['form']);
            $user=$this->session->get('User');
                if ($user['Type']!='privileged'){                   
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
                                . "window.location='/Privilegeduser'</script>";
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
                                
                $user['Temp']=$idad;    
                $this->session->set('User',$user);
		return redirect()->to('upload');
            
            
            
            //validation for 
            
              }
            
            
            echo view('addAdvertisement.php');
          
        }

        public function upload()
       {
                $user=$this->session->get('User');
                if ($user['Type']!='privileged'){                   
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
                                . "window.location='/Privilegeduser'</script>";
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
           $id=$user['Temp'];               
  
            
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
                if ($user['Type']!='privileged'){                   
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
                                . "window.location='/Privilegeduser'</script>";
                    }
                }
$updateId=$user['Temp'];
$id=$user['Temp'];
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
 
                    $result = $hastag->where('IdAd', $updateId)
                   ->findAll();
                    
                    
           
            if ($this->request->getMethod()=='post' && ($_POST['tipNekretnine'])){
            //validation for user
           
                 $db = mysqli_connect("localhost", "root", "", "realestate");
// Check connection
                if ($db->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                    }
                
                
                
                $idoglasa=$updateId;
            
                $advertisments=new adModel();
		
                
               $red=$advertisments->where('Id',$updateId)->first();
                
                $type1=$_POST["tipNekretnine"];
                $type2=$_POST["vrstaUsluge"];
               
                $mesto = $_POST['Beograd'];  
       
                
            

                
              
             
            
           if($this->request->getVar('cena')!=null)
           {
               $price=$this->request->getVar('cena');
                     
               $sql = "UPDATE advertisement SET 
                Price = '".$price."'
           
                  WHERE Id='$updateId'";
               mysqli_query($db, $sql);
               
           }
           
               if($this->request->getVar('naslov')!=null)
               {
                 $topic=$this->request->getVar('naslov');
                 
                  $sql = "UPDATE advertisement SET 
                Topic = '".$topic."' WHERE Id='$updateId'";
               mysqli_query($db, $sql);
               
               }
              if($this->request->getVar('kvadratura')!=null)
              {
                  $size=$this->request->getVar('kvadratura');
                 
                  $sql = "UPDATE advertisement SET 
                Size = '".$size."' WHERE Id='$updateId'";
               mysqli_query($db, $sql);
                  
              }
              if($this->request->getVar('adresa')!=null)
              {
                  $address=$this->request->getVar('adresa');
                 
                 $sql = "UPDATE advertisement SET 
                 Address = '".$address."' WHERE Id='$updateId'";
                 mysqli_query($db, $sql);
                  
              }
              
                if($this->request->getVar('komentar')!=null)
              {
                  $description=$this->request->getVar('komentar');
                 
                 $sql = "UPDATE advertisement SET 
                 Description = '".$description."' WHERE Id='$updateId'";
                 mysqli_query($db, $sql);
                  
              }
              
              
              
                 
                 $sql = "UPDATE advertisement SET 
                 IdPlace = '".$mesto."' WHERE Id='$updateId'";
                 mysqli_query($db, $sql);
                 
                 
                 
                 $sql = "UPDATE advertisement SET 
                 Purpose = '".$type2."' WHERE Id='$updateId'";
                 mysqli_query($db, $sql);
                 
                 
                 $sql = "UPDATE advertisement SET 
                 RealEstateType = '". $type1."' WHERE Id='$updateId'";
                 mysqli_query($db, $sql);
                 
                 
                 $sql="DELETE FROM hastag WHERE IdAd='$updateId' ";
                 
                
                  mysqli_query($db, $sql);
                 
              

                            $idad=$updateId;
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
     
        public function advertisements(){
            $user=$this->session->get('User');
                if ($user['Type']!='privileged'){                   
                return redirect()->to(site_url('Home'));
                }
                    $sql="select * from advertisement where IdOwner=".$user['Id'];
                    $db = \Config\Database::connect();
                    $values=$db->query($sql);
                    $numberOfRows=count($values->getResult());
                    echo view('userAdvertisements',['values'=>$values,'numberOfRows'=>$numberOfRows]);
                  
        }
        
        public function changeAdvertisements() {
            $user=$this->session->get('User');
                if ($user['Type']!='privileged'){                   
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
                                . "window.location='/Privilegeduser'</script>";
                    }
                }
                if ($this->request->getMethod()=="post"){
            $ad=new \App\Models\adModel();
            $ads=$ad->where('IdOwner',$user['Id'])->findAll();
            foreach ($ads as $temp){
                if (isset($_POST['BDId'.$temp['Id']])){    
                    
                    //delete images from folder if exists                   
                    $dirname="assets/userImages/Advertisement".$temp['Id'];
                    if (file_exists($dirname)){
                    array_map('unlink', glob("$dirname/*.*"));
                    rmdir($dirname);
                    }
                    $ad->where('Id',$temp['Id'])->delete();      
                    $sqlforTags="Delete from hasTag where IdAd=".$temp['Id'];
                    $sqlForPictures="Delete from image where IdAd=".$temp['Id'];
                    $sqlComments="Delete from comment where IdAd=".$temp['Id'];
                    $sqlFavorites="Delete from favorites where IdAd=".$temp['Id'];
                    $db = \Config\Database::connect();
                    $db->query($sqlforTags);
                    $db->query($sqlFavorites);
                    $db->query($sqlForPictures);
                    $db->query($sqlComments);         
                    break;
                }
                else if (isset($_POST['BAId'.$temp['Id']])){
                    $user['Temp']=$temp['Id'];
                    $this->session->set('User',$user);
                    return redirect()->to(site_url('Privilegeduser/updateAdvertisement'));
                }
            }
            return redirect()->to(site_url('Privilegeduser/advertisements'));
                }
                
        }
           public function izmena(){
        $data=[];
        helper(['form']);
        $user=$this->session->get('User');
        
        if($this->request->getMethod()=='post'){
            $data1=[
                    'Id'=>$user['Id'],
                    'Username'=>$_POST['korime'],
                    'Password'=>$_POST['lozinka'],
                    'Email'=>$_POST['email'],
                    'Phone'=>$_POST['tel'],
                    ];
            $data2=[
                'Id'=>$user['Id'],
                'Name'=>$_POST['ime'],
                'Surname'=>$_POST['prezime']
            ];
                $noviuser=[
                    'Id'=>$user['Id'],
                    'Username'=>$_POST['korime'],
                    'Email'=>$_POST['email'],
                    'Phone'=>$_POST['tel'],
                    'Name'=>$_POST['ime'],
                    'Surname'=>$_POST['prezime'],
                    'Type'=>$user['Type'],
                    'Temp'=>''
                ];
                $user=$noviuser;
                $db = \Config\Database::connect();
                $id=$user['Id'];
                $username=$user['Username'];
                $password=$data1['Password'];
                $email=$user['Email'];
                $phone=$user['Phone'];
                $name=$user['Name'];
                $surname=$user['Surname'];
                $sqlUpdate="Update user set Username='$username', Password='$password',Email='$email',Phone='$phone' where Id=$id";
                $sqlUpdate2="Update privilegeduser set Name='$name', Surname='$surname' where Id=$id";
                $db->query($sqlUpdate);
                $db->query($sqlUpdate2);
                $this->session->set('User',$user);
                return redirect()->to(site_url('Privilegeduser'));
            }
        
        echo view('izmena.php',['User'=>$user]);
}
        public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
