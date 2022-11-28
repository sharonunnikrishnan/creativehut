<?php

namespace App\Controllers;

use App\Entities\Subscriber;

class Subscribe extends BaseController
{
    private $model;

    public function __construct()
	{
        $this->model = new \App\Models\SubscribeModel;
	}

    
    public function create()
	{

        $subscriber = new Subscriber($this->request->getPost());  

		if ($this->model->insert($subscriber)) {
            
			$data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "output" => "Thank you");
			echo json_encode($data);
		
        } else {
			
			$data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "output" => "Something went wrong");
			echo json_encode($data);

		}
	}    
}







