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
                     
            $dataR=new RegisteredUserModel();
            $dataP=new PrivilegedUserModel();
            $dataA=new AgencyModel();
            $usersR=$dataR->findAll();
            $usersP=$dataP->findAll();
            $usersA=$dataA->findAll();
            return view('adminUsers', ['users' => $usersR,
                'usersP'=>$usersP,
                'usersA'=>$usersA]);
            echo view('adminUsers.php');
        }
        
        public function advertisments(){
            echo view('adminAdvertisments.php');
        }
}
