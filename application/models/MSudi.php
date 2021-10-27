<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data = array())
    {
        $this->db->insert($tabel, $data);
    }

    function UpdateData($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }

    function DeleteData($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query = $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel, $id, $nilai)
    {
        $this->db->where($id, $nilai);
        $query = $this->db->get($tabel);
        return $query;
    }

    function CountStok()
    {

        $quey = "SELECT stok, SUM(stok) AS total 
		FROM `tbl_barang` 
		GROUP BY stok';";

        return $this->db->count_all_results();
    }

    function CountBarang()
    {
        $this->db->from('tbl_barang');
        return $this->db->count_all_results();
    }

    function GetDataKelas()
    {
        $this->db->order_by('id_kelas', 'ASC');
        return $this->db->from('kelas')
            ->join('kompetensi_keahlian', 'kompetensi_keahlian.id_kk=kelas.id_kk')
            ->get()
            ->result();
    }

    function GetDataKelasWhere($id, $nilai)
    {
        $this->db->order_by('id_kelas', 'ASC');
        return $this->db->from('kelas')
            ->join('kompetensi_keahlian', 'kompetensi_keahlian.id_kk=kelas.id_kk')
            ->where($id, $nilai)
            ->get()
            ->result();
    }


    function GetDataSiswa()
    {
        $this->db->order_by('nisn', 'ASC');
        return $this->db->from('siswa')
            ->join('kelas', 'kelas.id_kelas=siswa.id_kelas')
            ->join('spp', 'spp.id_spp=siswa.id_spp')
            ->join('login', 'siswa.id_login = login.id_login')
            ->get()
            ->result();
    }


    function GetDataSiswaWhere($id, $nilai)
    {
        $this->db->order_by('nisn', 'ASC');
        return $this->db->from('siswa')
            ->join('kelas', 'siswa.id_kelas = kelas.id_kelas ')
            ->join('spp', 'siswa.id_spp = spp.id_spp')
            ->join('login', 'siswa.id_login = login.id_login')
            ->get()
            ->result();
    }

    function GetDataPetugas()
    {
        $query = $this->db->get('petugas');
        return $query->result();
    }

    function GetDataPembayaran()
    {
        $this->db->order_by('id_pembayaran', 'ASC');
        return $this->db->from('pembayaran')
            ->join('petugas', 'petugas.id_petugas=pembayaran.id_petugas')
            ->join('siswa', 'siswa.nisn=pembayaran.nisn')
            ->join('spp', 'spp.id_spp=pembayaran.id_spp')
            ->get()
            ->result();
    }

    function GetDataPembayaranWhere($id, $nilai)
    {
        $this->db->order_by('id_pembayaran');
        return $this->db->from('pembayaran')
            ->join('petugas', 'petugas.id_petugas=pembayaran.id_petugas')
            ->join('siswa', 'siswa.nisn=pembayaran.nisn')
            ->join('spp', 'spp.id_spp=pembayaran.id_spp')
            ->get()
            ->result();
    }

    // $this->db->order_by('nisn','ASC');
    // return $this->db->from('siswa')
    // ->join('kelas','siswa.id_kelas=kelas.id_keals')
    // ->join()
}
