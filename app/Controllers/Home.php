<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $db, $DBinvent_user, $Binvent;

    public function __construct()
    {
        $this->db = \config\Database::connect();
        $this->DBuser = new \App\Models\modelUser();
        $this->DBinvent_user = new \App\Models\modelInventaris_user();
        $this->DBinvent = new \App\Models\modelInventaris();
    }
    public function index()
    {
        return view('index');
    }
    public function pages($grup, $id)
    {
        $data = [];
        if (in_groups('Siswa')) {
            if ($grup != 'siswa') {
                return redirect()->to('/');
            }
        }

        if (in_groups('Pegawai')) {
            if ($grup != 'Pegawai') {
                return redirect()->to('/');
            }
        }
        // --------------------------------------------perlakuan tiap menu ----------------------------------------------------------------

        if ($grup == 'inventaris') {

            // get list of Inventaris
            $this->DBinvent->select();
            $listInvent = $this->DBinvent->get()->getResultArray();

            // get list of Inventaris Terpinjam
            $this->DBinvent_user->select();
            $this->DBinvent_user->join('inventaris', 'inventaris.id = id_inventaris');
            $this->DBinvent_user->join('users', 'users.id = id_user');
            $this->DBinvent_user->where('konfir_kembali !=', 1);
            $listInventUser = $this->DBinvent_user->get()->getResultArray();
            $data = [
                'listInvent' => $listInvent,
                'listInventUser' => $listInventUser,
                'jml' => count($listInvent),
                'jmlUser' => count($listInventUser)
            ];
            // dd($data);
        }
        return view('pages/' . $grup . '/' . $id, $data);
    }

    public function pagesSet($grup, $id, $action)
    {

        if ($grup == 'inventaris' and $id == 'peminjamanInventaris' and $action == 'add') {

            // get list of Inventaris
            $this->DBinvent->select();
            $listInvent = $this->DBinvent->get()->getResultArray();

            $data = [
                'list' => $listInvent,
                'controller' => $this
            ];
        }



        return view('pages/' . $grup . '/' . $id . '/' . $action, $data);
    }
}
