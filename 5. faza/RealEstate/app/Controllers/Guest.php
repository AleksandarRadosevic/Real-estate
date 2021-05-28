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
                
                if ($user->validate($values)==false)
                    return view('register', ['errors' => $user->errors()]);
                
                if ($userOtherTable->validate($data)==false)
                    return view('register', ['errors' => $userOtherTable->errors()]);
 
                //values are correct and can be inserted
                $user->save($values);
                $data['Id']=$user->getInsertID();
                $userOtherTable->save($data);
      
                $session=session();
                $session->setFlashdata('success', 'Successful Registration');
		return redirect()->to('/');
            
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
