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
            
    
       public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
