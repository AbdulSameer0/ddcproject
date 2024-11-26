<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_info';  // Your table name
    protected $primaryKey = 'id';     // Primary key of your table
    protected $allowedFields = ['name', 'email', 'password'];  // Fields that are allowed to be inserted/updated


    

}