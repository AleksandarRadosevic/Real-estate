<?php

namespace App\Controllers;

class Privilegeduser extends BaseController
{
	public function index()
	{
                echo '<h1>Privileged User</h1>';
                $user=$this->session->get('User');
                $val=$user['Id'];
                
                echo $val;
		echo'<h1>Prikaz usera </h1>';
	}
}
