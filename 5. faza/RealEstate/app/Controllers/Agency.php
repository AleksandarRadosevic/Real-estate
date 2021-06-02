<?php

namespace App\Controllers;

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
