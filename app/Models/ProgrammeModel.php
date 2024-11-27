<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgrammeModel extends Model
{
    protected $table = 'programme_info';  // Your table name
    protected $primaryKey = 'prog_id';     // Primary key of your table
    protected $allowedFields = ['progTitle', 'targetGroup', 'date', 'progDirector', 'dealingAsstt', 'progPdf', 'attandancePdf', 'materialLink', 'paymentdone'];  // Fields that are allowed to be inserted/updated

    public function update_user_details($id)
    {
        $query = "select * from programme_info where prog_id='$id' ";

        $result = $this->db->query($query);
        if ($result) {
            return $result->getResultArray();
        }
        // return $this->db->table('programme_info')
        //     ->where('prog_id', $prog_id)
        //     ->update($data);
    }
}

