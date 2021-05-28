 <?php namespace App\Controllers;

use App\Models\adModel;


class addAd extends BaseController
 
 
 public function addAdvertisement(){
            $data=[];
            
            helper(['form']);
            
            if ($this->request->getMethod()=='post'){
            //validation for user
            $rules=[
			
			/*
			
                'username'=>'required|min_length[3]|max_length[30]',
                'lastname'=>'required|min_length[3]|max_length[30]',
                'password'=>'required|min_length[3]|max_length[30]',
                'passagain'=>'matches[password]',
                'email'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
				
				*/
            ];
            
            if ($this->validate($rules)){
                $data['validation']=$this->validator;
            }
            else {
                $user=new adModel();
                $type1=$_POST["pol1"];
                $type2=$_POST["pol2"];

                $values=[
                    'IdOwner'=>$this->request->getVar('cena'),
                    'IdAd'=>$this->request->getVar('cena'),
                    'TimePosted'=>$this->request->getVar('email'),
                    'Price'=>$this->request->getVar('cena'),
					'Topic'=>$this->request->getVar('naslov'),
					'IdType'=>type1,
					'Size'=>$this->request->getVar('kvadratura'),
					'Address'=>$this->request->getVar('adresa'),
					'IdPlace'=>$this->request->getVar('phone'),
					'Description'=>$this->request->getVar('komentar')
					
                ];   
                //add user
                $user->save($values);
                
                
             
               
                
              

                
                $session= session();
                $session->setFlashdata('success', 'Successful Registration');
		return redirect()->to('/');
            }
            
            
            //validation for 
            
              }
            
            
            echo view('addAdvertisement.php');
          
        }
}