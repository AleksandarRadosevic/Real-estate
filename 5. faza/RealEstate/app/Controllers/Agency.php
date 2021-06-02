<?php

namespace App\Controllers;
use App\Models\adModel;
use App\Models\TagModel;
use App\Models\hasTagModel;
class Agency extends BaseController
{
	public function index()
	{
                $user=$this->session->get('User');
		echo view('AgencyProfile',['user'=>$user]);
	}
        
        
        
    public function logout(){
        $this->session->destroy();
        return redirect()->to("/../../index.html");
    }
}
