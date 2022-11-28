<?php

namespace App\Controllers;

class Pages extends BaseController
{


    public function get_page()
    {
        $page = $this->request->getPost();

        $data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "view" => view('Pages/'.$page['page']));
		echo json_encode($data);

        // $data = view('Pages/'.$page['page']);
        // return $data; 
    }

    public function get_new_token()
    {
        $data = array("csrfName" => csrf_token(), "csrfHash" => csrf_hash(), "output" => "Thank you");
        echo json_encode($data);
    }

    
}

?>