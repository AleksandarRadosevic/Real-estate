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
            $data=[];
            
            helper(['form']);
            
            if ($this->request->getMethod()=='post'){
            //validation for user
            $rules=[
                'username'=>'required|min_length[3]|max_length[30]',
                'lastname'=>'required|min_length[3]|max_length[30]',
                'password'=>'required|min_length[3]|max_length[30]',
                'passagain'=>'matches[password]',
                'email'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            ];
            
            if ($this->validate($rules)){
                $data['validation']=$this->validator;
            }
            else {
                $user=new UserModel();                
                $values=[
                    'Username'=>$this->request->getVar('username'),
                    'Password'=>$this->request->getVar('password'),
                    'Email'=>$this->request->getVar('email'),
                    'Phone'=>$this->request->getVar('phone')
                ];   
                //add user
                $user->save($values);
                
                
             
                $id=$user->getInsertID();
                $type=$_POST["type"];
                
              //check if regular privileged or agency
                    if ($type=="regular"){
                    $regular=[
                        'IdR'=>$id,
                        'Name'=>$this->request->getVar('name'),
                        'Surname'=>$this->request->getVar('surname')
                    ];
                $registered=new RegisteredUserModel();
                $registered->save($regular);
                }
                
                else if ($type=="privileged"){
                    $data=[
                        'IdP'=>$id,
                        'Name'=>$this->request->getVar('name'),
                        'Surname'=>$this->request->getVar('surname')
                    ];
                $privileged=new PrivilegedUserModel();
                $privileged->save($data);
                }
                
                
                else {
                    $v=0;
                    $data=[
                        'IdA'=>$id,
                        'Name'=>$this->request->getVar('name'),
                        'AverageMark'=>$v
                    ];
                $agency=new AgencyModel();
                $agency->save($data);
                }

                
                $session= session();
                $session->setFlashdata('success', 'Successful Registration');
		return redirect()->to('/');
            }
            
            
            //validation for 
            
              }
            
            
            echo view('register.php');
          
        }
        
        public function login(){
        
            $data=[];
            helper(['form']);
        
            if ($this->request->getMethod()=='post'){
                
			$model = new UserModel();
			$user = $model->where('username', $this->request->getVar('username'))->first();
                            if ($user==null){
                                
                                //check if admin wants to login
                                $adminModel=new AdminModel();
                                $admin=$adminModel->where('Username',$this->request->getVar('username'))->first();
                                
                                if ($admin==null)
                                {                          
                                $errors=['usernameLogin' => 'Uneti korisnik ne postoji'];
                                return view('login', ['errors' => $errors]);
                                }
                                
                                else if ($admin['Password']==$this->request->getVar('password')){
                                    $validationData=[
                                        'Id'=>$admin['Id'],
                                        'Username'=>$admin['Username'],
                                        'Type'=>'admin'
                                    ];
                                    $this->session->set('Admin',$validationData);
                                    return redirect()->to(site_url('Admin'));
                                }
                                else {
                                    $errors=['passwordLogin' => 'Uneta je pogresna sifra'];
                                    return view('login', ['errors' => $errors]);
                                }                              
                            }                          
                            if ($user['Password']!=$this->request->getVar('password'))
                            {
                                $errors=['passwordLogin' => 'Pogresna sifra'];
                                return view('login', ['errors' => $errors]);
                            }
                                //check user type
                                $agency=new AgencyModel();
                                $isAgency=$agency->where('username', $this->request->getVar('username'))->first();
                                
                                $registered=new RegisteredUserModel();
                                $isRegistered=$isRegistered->where('username', $this->request->getVar('username'))->first();
                                
                                $privileged=new PrivilegedUserModel();
                                $isPrivileged=$isPrivileged->where('username', $this->request->getVar('username'))->first();
                                
                                $validationData=[];
                        
                        if ($isRegistered!=null){
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Name'=>$isRegistered['Name'],
                                'Surname'=>$isRegistered['Surname'],
                                'Type'=>'registered'
                            ];
                         
                        $this->session->set('User',$validationData);
                        return redirect()->to(site_url('Registereduser'));
                        }       
                                                                                      
                        else if ($isPrivileged!=null)
                        {
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Email' => $user['Email'],
                                'Name'=>$isPrivileged['Name'],
                                'Surname'=>$isPrivileged['Surname'],
                                'Type'=>'privileged'
                            ];
                
                        $this->session->set('User',$validationData);
                        return redirect()->to(site_url('Privilegeduser'));
                        }
                        
                        else if ($isAgency!=null){
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Name'=>$isAgency['Name'],
                                'AverageMark' => $isAgency['AverageMark'],
                                'Type'=>'agency'];
                        $this->session->set('Agency',$validationData);
                        return redirect()->to(site_url('Privilegeduser'));
                        }
                
				return redirect()->to('/');
                        
            }
        }      /*
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
             echo view('login.php');
        }
        */
		
}


	

