<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_pembimbing1 extends CI_Model {
    var $table = 'm_mahasiswa';
    var $column_order = array('nobp', 'nama', 'prodi', 'angkatan', 'judul', 'pembimbing1',  'pembimbing2', 'penguji1', 'penguji4', 'penguji5'); //set column field database for datatable orderable
    var $column_search = array('nobp'); //set column field database for datatable searchable
    var $order = array('nobp' => 'asc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->db->select('m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi, m_mahasiswa.angkatan, m_mahasiswa.judul, a.nip as nip1, a.nama as pembimbing1, b.nip as nip2, b.nama as pembimbing2, c.nip as nip3, c.nama as penguji1, d.nip as nip4,  d.nama as penguji4, e.nip as nip5, e.nama as penguji5');
        $this->db->from('m_mahasiswa');
        $this->db->join('m_dosen as a', 'm_mahasiswa.nip_pembimbing1 = a.nip','left');
        $this->db->join('m_dosen as b', 'm_mahasiswa.nip_pembimbing2 = b.nip','left');
        $this->db->join('m_dosen as c', 'm_mahasiswa.nip_penguji1 = c.nip','left');
        $this->db->join('m_dosen as d', 'm_mahasiswa.nip_penguji2 = d.nip','left');
        $this->db->join('m_dosen as e', 'm_mahasiswa.nip_penguji3 = e.nip','left');
        // $query = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama,
        //     m_mahasiswa.prodi,
        //     m_mahasiswa.angkatan,
        //     m_mahasiswa.judul,
        //     m_dosen.nip as nip1,
        //     m_dosen.nama as pembimbing1,
        //     m_dosen.gelar as gelar1,
        //     a.nip as nip2,
        //     a.nama as pembimbing2,
        //     a.gelar as gelar2,
        //     b.nip as nip3,
        //     b.nama as penguji1,
        //     b.gelar as gelar3,
        //     c.nip as nip4,
        //     c.nama as penguji4,
        //     c.gelar as gelar4,
        //     d.nip as nip5,
        //     d.nama as penguji5,
        //     d.gelar as gelar5 FROM m_mahasiswa 
        //     LEFT JOIN m_dosen ON m_mahasiswa.nip_pembimbing1 = m_dosen.nip
        //     LEFT JOIN m_dosen as a ON m_mahasiswa.nip_pembimbing2 = a.nip
        //     LEFT JOIN m_dosen as b ON m_mahasiswa.nip_penguji1 = b.nip
        //     LEFT JOIN m_dosen as c ON m_mahasiswa.nip_penguji2 = c.nip
        //     LEFT JOIN m_dosen as d ON m_mahasiswa.nip_penguji3 = d.nip");
        
        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }

        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


   function get_datatables()
   {
    $this->_get_datatables_query();
    if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result();
}

function count_filtered()
{
    $this->_get_datatables_query();
    $query = $this->db->get();
    return $query->num_rows();
}

public function count_all()
{
    $this->db->from($this->table);
    return $this->db->count_all_results();
}

}
    // end datatables