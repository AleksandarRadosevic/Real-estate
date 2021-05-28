<?php

namespace App\Controllers;

class PrivilegedUser extends BaseController
{
	public function index()
	{
                echo '<h1>Privileged User</h1>';
                $user=$this->session->get('User');
                $val=$user['Name'];
                echo $val;
		echo'<h1>Prikaz usera </h1>';
	}
}
