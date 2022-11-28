<?php

namespace App\Models;

use App\Libraries\Token;

class ContactUsModel extends \CodeIgniter\Model
{
    protected $table = 'contactus';

    protected $allowedFields = ['email','phone','message'];

    protected $returnType = 'App\Entities\Contact';

    protected $useTimestamps = true;

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[contactus.email]' 
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'That email address is taken'
        ] 
    ];

    
    public function findByEmail($email)
    {
        return $this->where('email',$email)
                    ->first();
    } 


    public function activatedByToken($token)
    {
        $token = new Token($token);

        $token_hash = $token->getHash();

        $user = $this->where('activation_hash', $token_hash)
                     ->first();

        if($user !== null){
            $user->activate();
            $this->protect(false)
                 ->save($user);
        }
    }
    
}

?>