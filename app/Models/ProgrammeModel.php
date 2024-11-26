<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgrammeModel extends Model
{
    protected $table = 'programme_info';  // Your table name
    protected $primaryKey = 'prog_id';     // Primary key of your table
    protected $allowedFields = ['progTitle', 'targetGroup', 'date', 'progDirector', 'dealingAsstt', 'progPdf', 'attandancePdf', 'materialLink', 'paymentdone'];  // Fields that are allowed to be inserted/updated

    public function deleteRecord($prog_id)
    {
        // Perform the delete query
        return $this->delete($prog_id);
    }

    public function update_user_details($id, $data)
    {
        return $this->db->table('programme_info')
            ->where('prog_id', $id)
            ->update($data);
    }
}

