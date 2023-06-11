<?php

namespace App\Controllers;

use App\Models\ModelApli;

class Control extends BaseController
{
    public function tampil(){
        $Model = new ModelApli();
            $Data["todolist"] = $Model->findAll();
                return view("Apli", $Data);
    }
    public function tambah()
    {
        $Model = new ModelApli();
          $Kegiatan = $this->request->getPost("kegiatan");
            $Model->insert(["kegiatan" => $Kegiatan, "status" => "aktif"]);
                return redirect()->to(base_url("todo"));
    }
    public function selesai($id) 
    {
        $Model = new ModelApli();
           $Model->update($id, ["status" => "selesai"]);
             return redirect()->to(base_url("todo"));
    }
    public function hapus($id) 
    {
        $Model = new ModelApli();
           $Model->where("idkegiatan", $id);
              $Model->delete();
                return redirect()->to(base_url("todo"));
    }
}