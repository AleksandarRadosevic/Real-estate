<?php

namespace App\Controllers;
use App\Models\adModel;
use App\Models\TagModel;
use App\Models\hasTagModel;
class Privilegeduser extends BaseController
{
	public function index()
	{
                $user=$this->session->get('User');
                echo view('PrivilegedProfile',['user'=>$user]);
	}
        
            
    
    public function addAdvertisement(){
            $data=[];
            
            helper(['form']);
            
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
 
         // If upload button is clicked ...
        if (isset($_POST['upload'])) {
      
            $msg = "";
          
            
            
          
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "C:/image/".$filename;
         
        $db = mysqli_connect("localhost", "root", "", "realestate");

$sql = "SELECT Id 
FROM advertisement 
WHERE Id=(
    SELECT max(Id) FROM advertisement
    )";
           $result=    mysqli_query($db, $sql);
           $niz= mysqli_fetch_array($result);
           $id=$niz["Id"];
    
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
            
             echo view('addPicture.php');
          
      
  }
 // $result = mysqli_query($db, "SELECT * FROM image");
		
		
	public function updateAdvertisement(){
            $data=[];
            
            helper(['form']);
            
            if ($this->request->getMethod()=='post'){
            //validation for user
           
            
           
                $user=new adModel();
				$id=$user->getInsertID();
                $type=$_POST["tipNekretnine"];
               

                $values=[
                    'IdOwner'=>$this->request->getVar('cena'),
                    'IdAd'=>444,
                    'TimePosted'=>$this->request->getVar('cena'),
                    'Price'=>$this->request->getVar('cena'),
					'Topic'=>$this->request->getVar('naslov'),
					'IdType'=>$type,
					'Size'=>$this->request->getVar('kvadratura'),
					'Address'=>$this->request->getVar('adresa'),
					'IdPlace'=>$id,
					'Description'=>$this->request->getVar('komentar')
					
                ];   
                //add user
                $user->save($values);
                
                
                
		return redirect()->to('/');
            
            
            
            //validation for 
            
              }
            
            
            echo view('updateAdvertisement.php');
          
        }
        
   
        public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
