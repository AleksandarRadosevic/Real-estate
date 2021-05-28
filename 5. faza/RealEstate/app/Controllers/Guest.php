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
                'username'=>'required|min_length[3]|max_length[20]|is_unique[user.username]',
                'name'=>'required|min_length[3]|max_length[20]',
                'lastname'=>'required|min_length[3]|max_length[20]',
                'password'=>'required|min_length[3]|max_length[20]',
                'passagain'=>'matches[password]',
                'email'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            ];
            
            if ($this->validate($rules)){
                
                $data['validation']=$this->validator;
                echo 'Neuspeh';
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
                        'Id'=>$id,
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

               $session=session();
                $session->setFlashdata('successSecond', 'Successful Registration Second');
		return redirect()->to('/');
            }
            
            
            //validation for 
            
              }
            
            
            echo view('register.php');
          
        }
        
        public function login(){
        /*
            $data=[];
            helper(['form']);
        
            if ($this->request->getMethod()=='post'){
                
			$model = new UserModel();
			$user = $model->where('username', $this->request->getVar('username'))->first();
                            if ($user==null){
                                echo 'Greska';
                                return ;
                            }
                                //check user type
                                $agency=new AgencyModel();
                                $isAgency=$agency->where('username', $this->request->getVar('username'))->first();
                                
                                $registered=new RegisteredUserModel();
                                $isRegistered=$isRegistered->where('username', $this->request->getVar('username'))->first();
                                
                                $privileged=new PrivilegedUserModel();
                                $isPrivileged=$isPrivileged->where('username', $this->request->getVar('username'))->first();
                                
                                $validationData=[];
                        
                        if ($isAgency!=null){
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Email' => $user['Email'],
                                'Name'=>   $isAgency['Name']
                            ];
                        }
                        
                        else if ($isPrivileged!=null)
                        {
                            $validationData=[
                                'Id'=>$user['Id'],
                                'Email' => $user['Email'],
                                'Name'=>$isPrivileged['Name'],
                                'Surname'=>$isPrivileged['Surname']
                            ];
                        }
                        
                        else {
                             $validationData=[
                               'Id'=>$user['Id'],
                                'Email' => $user['Email'],
                                'Name'=>$isPrivileged['Name'],
                                'Surname'=>$isPrivileged['Surname']
                            ];
                        }
                                session()->set($validationData);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');
                        
            }
             echo view('login.php');
         * */
         $user=new UserModel();
         $kor=$user->find(52);
         if ($kor!=null)
             echo 'postoji';
         else 
             echo 'ne postoji';
        }
        
}
