<?php

namespace App\Controllers;
use App\Models\adModel;
use App\Models\TagModel;
use App\Models\hasTagModel;

class Registereduser extends BaseController
{
	public function index()
	{
                $user=$this->session->get('User');
		echo view('RegisteredProfile',['user'=>$user]);
	}
            
    
     public function addAdvertisement(){
            $data=[];
            
            helper(['form']);
            
            if ($this->request->getMethod()=='post'){
            //validation for user
           
            
           
                $user=new adModel();
		//$id=$user->getInsertID();
                
                $type1=$_POST["tipNekretnine"];
                $type2=$_POST["vrstaUsluge"];
               
            $mesto = $_POST['Beograd'];  
       
              
               
               

                $values=[
                    'IdOwner'=>$this->request->getVar('cena'),

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
                $user->save($values);
                
                            $idad= $user->getInsertID();

                
                            
                            
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
                                
                                
         
               
           
            
                
                $session= session();
                $session->setFlashdata('success', 'Successful Registration');
		return redirect()->to('http://localhost:8080/AddAd/upload');

                //validation for       
              }
            echo view('addAdvertisement.php');
          
        }
               
       public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
