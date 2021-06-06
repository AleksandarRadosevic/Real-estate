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
                if ($user['Type']!='registered'){                   
                return redirect()->to(site_url('Home'));
                }
		echo view('RegisteredProfile',['user'=>$user]);
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
                $sqlUpdate2="Update registereduser set Name='$name', Surname='$surname' where Id=$id";
                $db->query($sqlUpdate);
                $db->query($sqlUpdate2);
                $this->session->set('User',$user);
                return redirect()->to(site_url('Registereduser'));
        }
                echo view('izmena.php',['User'=>$user]);
        }
        public function logout(){
        $this->session->destroy();
        return redirect()->to(site_url('Home'));
    }
    
}
