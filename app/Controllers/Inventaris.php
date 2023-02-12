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
    }
    // tambah inventaris_user
    public function addInv()
    {
        $this->DBinvent_user->save([
            'id_user' => user_id(),
            'id_inventaris' => (int)$this->request->getVar('barang'),
            'jumlah_pinjaman' => (int)$this->request->getVar('jumlah'),
            'tanggal_pinjaman' => $this->request->getVar('dari'),
            'tanggal_dikembalikan' => $this->request->getVar('sampai'),
            'konfir_kembali' => 0,
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        return redirect()->to('/pages/inventaris/peminjamanInventaris');
    }
    public function kembalikan()
    {
        $id =  $this->request->getVar('idInventUser');
        $konfir_kembali = 1;
        $data = [
            'konfir_kembali' => $konfir_kembali
        ];
        $this->DBinvent_user->update($id, $data);
        return redirect()->to('/pages/inventaris/peminjamanInventaris');
    }


    public function addBarang()
    {
        $this->DBinvent->save([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'kategori' => $this->request->getVar('kategori'),
            'total_barang' => $this->request->getVar('total_barang'),
            'penanggung_jawab' => $this->request->getVar('penanggung_jawab'),
        ]);
        return redirect()->to('/pages/inventaris/daftarInventaris');
    }
    public function hapusBarang()
    {
        $id =  $this->request->getVar('idInventt');
        $this->DBinvent->delete($id);
        return redirect()->to('/pages/inventaris/daftarInventaris');
    }
}
