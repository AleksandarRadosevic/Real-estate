<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RegisteredUserModel;
use App\Models\PrivilegedUserModel;
use App\Models\AgencyModel;
class Admin extends BaseController
{

	public function index()
	{
             echo view('admin.php');
	}
        
        
        public function showPage(){
           
        }
        
        public function users(){
             if ($this->request->getMethod()=="post"){
                 //check what user type is changing
                if (isset($_POST['actionAgency'])){
                    
                    if (($_POST['actionAgency']) == 'Promeni privilegije') {
                    echo 'Promena Agencije privilegija';
                    return;                  
                    } 
                else if (($_POST['actionAgency']) == 'Ukloni korisnika') {
                    $agency=new AgencyModel();
                    $id=$_POST['agencyId'];
                    $user=new UserModel();
                    $agency->delete($id);
                    $user->delete($id);}
                }
                
                else if (isset($_POST['actionPrivileged'])){
                    if ($_POST['actionPrivileged'] == 'Promeni privilegije') {
                    echo 'Promena PRivilegovanog privilegija';
                    return;
                } 
                else if ($_POST['actionPrivileged'] == 'Ukloni korisnika') {
                    $id=$_POST['privilegedId'];
                    $agency=new PrivilegedUserModel();
                    $user=new UserModel();
                    $agency->delete($id);
                    $user->delete($id);
                }
                }
                else if (isset($_POST['actionRegistered'])){
                    if ($_POST['actionRegistered']== 'Promeni privilegije') {
                    echo 'Promena Registrovanog privilegija';
                    return;
                } 
                else if ($_POST['actionRegistered'] == 'Ukloni korisnika') {
                    $id=$_POST['registeredId'];
                    $agency=new RegisteredUserModel();
                    $user=new UserModel();
                    $agency->delete($id);
                    $user->delete($id);
                }
                }
            }
         
            $dataR=new RegisteredUserModel();
            $dataP=new PrivilegedUserModel();
            $dataA=new AgencyModel();
            $usersR=$dataR->findAll();
            $usersP=$dataP->findAll();
            $usersA=$dataA->findAll();
            return view('adminUsers', ['usersR' => $usersR,
                'usersP'=>$usersP,
                'usersA'=>$usersA]);
            echo view('adminUsers.php');
             
             
             
        }
        
        public function advertisments(){
            echo view('adminAdvertisments.php');
        }
        public function pera(){
             echo $as;
        }
}
