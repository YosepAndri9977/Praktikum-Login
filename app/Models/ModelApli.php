<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelApli extends Model
{
    protected $table = "todolist";

       protected $primaryKey = "idkegiatan";

           protected $allowedFields = ["kegiatan", "status"] ;

}


?>