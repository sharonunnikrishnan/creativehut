<?php

namespace App\Controllers;

use App\Entities\Contact;

class Contactus extends BaseController
{
    private $model;

    public function __construct()
	{
        $this->model = new \App\Models\ContactUsModel;
	}
 
    public function create()
	{

        $contactus = new Contact($this->request->getPost());  

		$email_exist = $this->model->findByEmail($contactus->email);

		if($email_exist != '' || $email_exist != null)
		{
			$data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "output" => 2);
			echo json_encode($data);
		}
		else
		{

			if ($this->model->insert($contactus)) {
            
				$data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "output" => 0);
				echo json_encode($data);
			
			} else {
				
				$data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "output" => 1);
				echo json_encode($data);
	
			}
		}
		
	}    
}







