<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RegisteredUserModel;
use App\Models\PrivilegedUserModel;
use App\Models\AgencyModel;
use \App\Models\ProhibitionUserModel;
class Admin extends BaseController
{

	public function index()
	{
                $user=$this->session->get('User');
                if ($user['Type']!='admin'){                   
                return redirect()->to(site_url('Home'));
                }
             echo view('admin.php');
	}
        
   
        public function users(){
            $user=$this->session->get('User');
                if ($user['Type']!='admin'){                   
                return redirect()->to(site_url('Home'));
                }
             if ($this->request->getMethod()=="post"){
                
                //check if agency is changed
                $dataA=new AgencyModel();
                $usersA=$dataA->findAll();
                foreach ($usersA as $user){
                    $fieldName='actionAgency'.$user['Id'];
                    if (isset($_POST[$fieldName]))
                    {
                        if ($_POST[$fieldName]=='Promeni privilegije')
                        {
                            if (isset($_POST['commentA'.$user['Id']]))
                        {
                            $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $idU=$user['Id'];
                            $idA=2;
                            $del="Delete from prohibition where IdA=? AND IdU=?";
                            $db->query($del,[$idA,$idU]);
                            
                        }
                        else {
                            
                            $db = \Config\Database::connect();
                            $idU=$user['Id'];
                            $idA=2;
                                                  
                            $proh=new ProhibitionUserModel();
                            $sql="Select * from prohibition where IdA=? AND IdU=?";
                            $obj=$db->query($sql, [$idA,$idU])->getResult();
                            if ($obj==null)
                            {
                                $data=['IdA'=>$idA,'IdU'=>$idU];
                                $proh->save($data);
                            }
                         
                        }
                        if (isset($_POST['addA'.$user['Id']]))
                        {
                            $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $idU=$user['Id'];
                            $idA=1;
                            $del="Delete from prohibition where IdA=? AND IdU=?";
                            $db->query($del,[$idA,$idU]);
                        }
                        else {
                            $db = \Config\Database::connect();
                            $idU=$user['Id'];
                            $idA=1;
                                                  
                            $proh=new ProhibitionUserModel();
                            $sql="Select * from prohibition where IdA=? AND IdU=?";
                            $obj=$db->query($sql, [$idA,$idU])->getResult();
                            if ($obj==null)
                            {
                                $data=['IdA'=>$idA,'IdU'=>$idU];
                                $proh->save($data);
                            }
                        }
                        }
                        else {
                    $id=$user['Id'];;
                    $agency=new AgencyModel();
                    $user=new UserModel();
                    $agency->delete($id);
                    $user->delete($id);
                    
                    $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();                          
                            $idU=$user['Id'];
                            $del="Delete from prohibition where IdU=?";
                            $db->query($del,[$idU]);
                        }
                    }   
                }
         
                
                $dataP=new PrivilegedUserModel();
                $usersP=$dataP->findAll();
                 foreach ($usersP as $user){
                    $fieldName='actionPrivileged'.$user['Id'];
                    if (isset($_POST[$fieldName]))
                    {
                        if ($_POST[$fieldName]=='Promeni privilegije')
                        {
                            if (isset($_POST['commentP'.$user['Id']]))
                        {
                            $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $idU=$user['Id'];
                            $idA=2;
                            $del="Delete from prohibition where IdA=? AND IdU=?";
                            $db->query($del,[$idA,$idU]);
                            
                        }
                        else {
                            
                            $db = \Config\Database::connect();
                            $idU=$user['Id'];
                            $idA=2;
                                                  
                            $proh=new ProhibitionUserModel();
                            $sql="Select * from prohibition where IdA=? AND IdU=?";
                            $obj=$db->query($sql, [$idA,$idU])->getResult();
                            if ($obj==null)
                            {
                                $data=['IdA'=>$idA,'IdU'=>$idU];
                                $proh->save($data);
                            }
                         
                        }
                        if (isset($_POST['addP'.$user['Id']]))
                        {
                            $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $idU=$user['Id'];
                            $idA=1;
                            $del="Delete from prohibition where IdA=? AND IdU=?";
                            $db->query($del,[$idA,$idU]);
                        }
                        else {
                            $db = \Config\Database::connect();
                            $idU=$user['Id'];
                            $idA=1;
                                                  
                            $proh=new ProhibitionUserModel();
                            $sql="Select * from prohibition where IdA=? AND IdU=?";
                            $obj=$db->query($sql, [$idA,$idU])->getResult();
                            if ($obj==null)
                            {
                                $data=['IdA'=>$idA,'IdU'=>$idU];
                                $proh->save($data);
                            }
                        }
                        }
                        else {
                    $id=$user['Id'];;
                    $agency=new AgencyModel();
                    $user=new UserModel();
                    $agency->delete($id);
                    $user->delete($id);
                    
                    $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();                          
                            
                            $del="Delete from prohibition where IdU=?";
                            $db->query($del,[$id]);
                        }
                    }   
                }
         
                
                $dataR=new RegisteredUserModel();
                $usersR=$dataR->findAll();
                foreach ($usersR as $user){
                    $fieldName='actionRegistered'.$user['Id'];
                    if (isset($_POST[$fieldName]))
                    {
                        if ($_POST[$fieldName]=='Promeni privilegije')
                        {
                            if (isset($_POST['commentR'.$user['Id']]))
                        {
                            $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $idU=$user['Id'];
                            $idA=2;
                            $del="Delete from prohibition where IdA=? AND IdU=?";
                            $db->query($del,[$idA,$idU]);
                            
                        }
                        else {
                            
                            $db = \Config\Database::connect();
                            $idU=$user['Id'];
                            $idA=2;
                                                  
                            $proh=new ProhibitionUserModel();
                            $sql="Select * from prohibition where IdA=? AND IdU=?";
                            $obj=$db->query($sql, [$idA,$idU])->getResult();
                            if ($obj==null)
                            {
                                $data=['IdA'=>$idA,'IdU'=>$idU];
                                $proh->save($data);
                            }
                         
                        }
                        if (isset($_POST['addR'.$user['Id']]))
                        {
                            $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $idU=$user['Id'];
                            $idA=1;
                            $del="Delete from prohibition where IdA=? AND IdU=?";
                            $db->query($del,[$idA,$idU]);
                        }
                        else {
                            $db = \Config\Database::connect();
                            $idU=$user['Id'];
                            $idA=1;
                                                  
                            $proh=new ProhibitionUserModel();
                            $sql="Select * from prohibition where IdA=? AND IdU=?";
                            $obj=$db->query($sql, [$idA,$idU])->getResult();
                            if ($obj==null)
                            {
                                $data=['IdA'=>$idA,'IdU'=>$idU];
                                $proh->save($data);
                            }
                        }
                        }
                        else {
                    $id=$user['Id'];;
                    $registered=new RegisteredUserModel();
                    $user=new UserModel();
                    $registered->delete($id);
                    $user->delete($id);
                    
                    $db = \Config\Database::connect();
                            $proh=new ProhibitionUserModel();
                            
                            $del="Delete from prohibition where IdU=?";
                            $db->query($del,[$id]);
                        }
                    }
                    
                   
                }
           
                }
            
         
            $dataR=new RegisteredUserModel();
            $dataP=new PrivilegedUserModel();
            $dataA=new AgencyModel();
            $proh=new ProhibitionUserModel();
            $prohibitions=$proh->findAll();
                        
            $usersR=$dataR->findAll();
            $usersP=$dataP->findAll();
            $usersA=$dataA->findAll();
            return view('adminUsers', 
				['usersR' => $usersR,
                'usersP'=>$usersP,
                'usersA'=>$usersA,
                'prohibitions'=>$prohibitions]);
            echo view('adminUsers.php');
             
             
             
        }
        
        public function advertisments(){
            $user=$this->session->get('User');
                if ($user['Type']!='admin'){                   
                return redirect()->to(site_url('Home'));
                }
            echo view('adminAdvertisments.php');
        }
       public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
