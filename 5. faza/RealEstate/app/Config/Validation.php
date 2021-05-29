<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
        
         public $signup = [
        'usernameLogin'     => 'required',
        'passwordLogin'     => 'required',
        'pass_confirm' => 'required|matches[password]'
    ];
         
          public $signup_errors = [
        'username' => [
            'required'    => 'Morate uneti korisničko ime',
        ],
             
        'passwordLogin'     => [
            'required'    => 'Morate uneti lozinku'
        ],
              
        'pass_confirm'    => [
            'matches' => 'Pogrešna lozinka'
        ]
    ];
         
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
