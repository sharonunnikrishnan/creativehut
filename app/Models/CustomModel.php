<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{

    protected $db;

    public function __construct(ConnectionInterface &$db){
        $this->db = &$db;
    }

    public function all()
    {
        return $this->db->table('task')->get()->getResult();
    }

    public function where()
    {
        return $this->db->table('task')
                        ->where(['id' => 1]) //if you want id greater than 1 where(['id >=' => 1]) and finally ->getResult();
                        ->where(['id !=' => 100])
                        ->orderBy('id', 'DESC')
                        ->get()
                        ->getRow(); //->getResult();
    }

    public function getPosts()
    {
        $builder = $this->db->table('task');
        $builder->join('user', 'task.user_id = user.id', 'left'); //inner join is by default
        $tasks = $builder->get()->getResult();

        return $tasks;
    }

    public function join()
    {
        return $this->db->table('task')
                        ->where(['task.id >' => 1])  
                        ->join('user', 'task.user_id = user.id') 
                        ->get()
                        ->getResult(); //->getResult();
    }

    public function like($text)
    {
        return $this->db->table('task')
                        ->like('description', $text, 'both')   //both befor after
                        ->join('user', 'task.user_id = user.id') 
                        ->get()
                        ->getResult(); //->getResult();
    }

    
    public function grouping()
    {
        return $this->db->table('task')
                        ->groupStart()   
                            ->where(['task.id' => '25', 'task.created_at < ' => '2022-01-01 00:00:00' ])
                        ->groupEnd()
                        ->orWhere('user_id', 1)
                        ->join('user', 'task.user_id = user.id') 
                        ->get()
                        ->getResult(); //->getResult();
    }
}