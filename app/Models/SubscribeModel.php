<?php

namespace App\Models;

use App\Libraries\Token;

class SubscribeModel extends \CodeIgniter\Model
{
    protected $table = 'subscriber';

    protected $allowedFields = ['email'];

    protected $returnType = 'App\Entities\Subscribe';

    protected $useTimestamps = true;

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[subscriber.email]' 
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