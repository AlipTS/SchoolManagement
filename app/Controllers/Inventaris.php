<?php

namespace App\Controllers;

class Inventaris extends BaseController
{
    protected $db, $DBinvent_user, $Binvent, $data;

    public function __construct()
    {
        $this->db = \config\Database::connect();
        $this->DBuser = new \App\Models\modelUser();
        $this->DBinvent_user = new \App\Models\modelInventaris_user();
        $this->DBinvent = new \App\Models\modelInventaris();




        // get list of Inventaris Terpinjam
        $this->DBinvent_user->select();
        $this->DBinvent_user->join('inventaris', 'inventaris.id = id_inventaris');
        $this->DBinvent_user->join('users', 'users.id = id_user');
        $this->DBinvent_user->where('konfir_kembali !=', 1);
        $this->listInventUser = $this->DBinvent_user->get()->getResultArray();
        $this->data = [
            'listInventUser' => $this->listInventUser
        ];
    }
    // tambah inventaris_user
    public function addInv()
    {
        dd($this->request->getVar());
        $this->DBinvent_user->save([
            'id_user' => user_id(),
            'id_inventaris' => (int)$this->request->getVar('barang'),
            'jumlah_pinjaman' => (int)$this->request->getVar('jumlah'),
            'tanggal_pinjaman' => $this->request->getVar('dari'),
            'tanggal_dikembalikan' => $this->request->getVar('sampai'),
            'konfir_kembali' => 0,
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        return view('/pages/Inventaris/peminjamanInventaris', $this->data);
    }


    public function kembalikan()
    {
        // dd((int)$this->request->getVar('idInventUser'));
        $this->DBinvent_user->replace([
            'id' => (int)$this->request->getVar('idInventUser'),
            'konfir_kembali' => 1,
        ]);






        return view('/pages/Inventaris/peminjamanInventaris', $this->data);
    }
}
