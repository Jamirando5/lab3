<?php
namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'jamirando_myguests';  

    protected $allowedFields = ['Name', 'Email', 'Website', 'Comment', 'Gender'];
    public function getGuest()
    {
        return $this->findAll();
    }
}