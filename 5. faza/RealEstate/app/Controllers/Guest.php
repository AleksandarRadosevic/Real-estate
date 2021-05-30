<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RegisteredUserModel;
use App\Models\PrivilegedUserModel;
use App\Models\AgencyModel;

class Guest extends BaseController
{
	public function index()
	{
		echo view('../../public/index.html');
	}
       
        
        public function register(){
                       
            helper(['form']);
            
            if ($this->request->getMethod()=='post'){
            //validation for user                     
                $user=new UserModel();  
                
                $values=[
                    'Username'=>$this->request->getVar('username'),
                    'Password'=>$this->request->getVar('password'),
                    'Email'=>$this->request->getVar('email'),
                    'PasswordAgain'=>$this->request->getVar('passagain'),
                    'Phone'=>$this->request->getVar('phone')
                ];   
                //add user
                if($user->validate($values)==false){
                return view('register', ['errors' => $user->errors()]);
            }
                
                //id will be changed after insert in user table
                $id=-1;
                $type=$_POST["type"];
                
              //value for insert in other  table
               $userOtherTable=null;
               
               
              //check if regular privileged or agency
                    if ($type=="regular"){
                    $data=[
                        'Id'=>$id,
                        'Name'=>$this->request->getVar('name'),
                        'Surname'=>$this->request->getVar('surname')
                    ];
                $userOtherTable=new RegisteredUserModel();
                }
    
                else if ($type=="privileged"){
                    $data=[
                        'Id'=>$id,
                        'Name'=>$this->request->getVar('name'),
                        'Surname'=>$this->request->getVar('surname'),
                        'Phone'=>$this->request->getVar('phone')
                    ];
                $userOtherTable=new PrivilegedUserModel();
                }
                       
                else {
                    $v=0;
                    $data=[
                        'Id'=>$id,
                        'Name'=>$this->request->getVar('nameAgency'),
                        'Phone'=>$this->request->getVar('phone'),
                        'AverageMark'=>$v
                    ];
                $userOtherTable=new AgencyModel();
                }
                
                                
                if ($userOtherTable->validate($data)==false)
                    return view('register', ['errors' => $userOtherTable->errors()]);
 
                //values are correct and can be inserted
                $user->save($values);
                $data['Id']=$user->getInsertID();
                $userOtherTable->save($data);
      
                //$session=session();
                //$session->setFlashdata('success', 'Successful Registration');
                
                $this->session->set('User',$user);
		return redirect()->to('User');
            
              }
            
            
            echo view('register.php');
          
        }
        
        public function login(){
        
            //$data=[];
            helper(['form']);
        
            if ($this->request->getMethod()=='post'){
                
			$model = new UserModel();
			$user = $model->where('username', $this->request->getVar('username'))->first();
                            if ($user==null){
                                echo 'Korisnik ne postoji';
                                return ;
                            }
                            if ($user['Password']!=$this->request->getVar('password'))
                            {
                                echo 'Pogresna sifra';
                                return;
                            }
                                //check user type
                                $agency=new AgencyModel();
                                $isAgency=$agency->where('Id',$user['Id'])->first();
                                
                                $registered=new RegisteredUserModel();
                                $isRegistered=$registered->where('Id',$user['Id'])->first();
                                
                                $privileged=new PrivilegedUserModel();
                                $isPrivileged=$privileged->where('Id',$user['Id'])->first();
                                
                                $validationData=[];
                        
                                
                        
                        if($isRegistered!=null){
                             $validationData=[
                                'Id'=>$user['Id'],
                                'Name'=>$isRegistered['Name'],
                                'Surname'=>$isRegistered['Surname']
                            ];
                             
                        $this->session->set('User',$validationData);
                        return redirect()->to(site_url('RegisteredUser'));
                        }       
                                                                                      
                        else if ($isPrivileged!=null)
                        {
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Name'=>$isPrivileged['Name'],
                                'Surname'=>$isPrivileged['Surname']
                            ];
                        $this->session->set('User',$validationData);
                        return redirect()->to(site_url('PrivilegedUser'));
                        }
                        
                        else if ($isAgency!=null){
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Name'=>$isAgency['Name'],
                                'AverageMark' => $isAgency['AverageMark'],                                 
                            ];
                        }
                                              
			$this->session->set('User',$validationData);
                        return redirect()->to(site_url('Agency'));
                        
            }
             echo view('login.php');  
        }
<<<<<<< HEAD
=======
        
        
	public function addAdvertisement(){
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
                
                
             
               
                
              

                
                $session= session();
                $session->setFlashdata('success', 'Successful Registration');
		return redirect()->to('/');
            
            
            
            //validation for 
            
              }
            
            
            echo view('addAdvertisement.php');
          
        }
		
>>>>>>> 7571f10953d7f040f1e2f431b052a68ff3013f0c
		
}


	

