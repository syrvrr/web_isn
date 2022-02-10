<?php 
class Model_app_simpada extends CI_model{
     function __construct(){
            parent::__construct();
            //load our second db and put in $db2
            $this->dbsimpada = $this->load->database('simpada', TRUE);
        }
    public function view($table){
        return $this->dbsimpada->get($table);
    }

    public function insert($table,$data){
        return $this->dbsimpada->insert($table, $data);
    }

    public function edit($table, $data){
        return $this->dbsimpada->get_where($table, $data);
    }
 
    public function update($table, $data, $where){
        return $this->dbsimpada->update($table, $data, $where); 
    }

    public function delete($table, $where){
        return $this->dbsimpada->delete($table, $where);
    }

    public function view_where($table,$data){
        $this->dbsimpada->where($data);
        return $this->dbsimpada->get($table);
    }

    public function view_ordering_limit($table,$order,$ordering,$baris,$dari){
        $this->dbsimpada->select('*');
        $this->dbsimpada->order_by($order,$ordering);
        $this->dbsimpada->limit($dari, $baris);
        return $this->dbsimpada->get($table);
    }

    public function view_limit($table,$data,$dari){
        $this->dbsimpada->select('*');
        $this->dbsimpada->from($table);
        $this->dbsimpada->where($data);
        $this->dbsimpada->limit($dari);
        return $this->dbsimpada->get()->result_array();
    }

    public function view_limit_lagi($table,$data,$dari,$baris){
        return $this->dbsimpada->query("SELECT * FROM $table where $data LIMIT $dari,$baris");
    }
    
    public function view_ordering($table,$order,$ordering){
        $this->dbsimpada->select('*');
        $this->dbsimpada->from($table);
        $this->dbsimpada->order_by($order,$ordering);
        return $this->dbsimpada->get()->result_array();
    }

    public function view_ordering2($table,$order,$ordering){
        $this->dbsimpada->select('MAX(id_penduduk)');
        $this->dbsimpada->from($table);
        $this->dbsimpada->order_by($order,$ordering);
        return $this->dbsimpada->get()->result_array();
    }
 


    public function view_where_ordering($table,$data,$order,$ordering){
        $this->dbsimpada->where($data);
        $this->dbsimpada->order_by($order,$ordering);
        $query = $this->dbsimpada->get($table);
        return $query->result_array();
    }

    public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->dbsimpada->select('*');
        $this->dbsimpada->from($table1);
        $this->dbsimpada->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->dbsimpada->order_by($order,$ordering);
        return $this->dbsimpada->get()->result_array();
    }

    public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->dbsimpada->select('*');
        $this->dbsimpada->from($table1);
        $this->dbsimpada->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->dbsimpada->where($where);
        $this->dbsimpada->order_by($order,$ordering);
        return $this->dbsimpada->get()->result_array();
    }

    function umenu_akses($link,$id){
        return $this->dbsimpada->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    }

    public function cek_login($username,$password,$table){
        return $this->dbsimpada->query("SELECT * FROM $table where username='".$this->dbsimpada->escape_str($username)."' AND password='".$this->dbsimpada->escape_str($password)."' AND blokir='N'");
    }

    function grafik_kunjungan(){
        return $this->dbsimpada->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }

    function kategori_populer($limit){
        return $this->dbsimpada->query("SELECT * FROM (SELECT a.*, b.jum_dibaca FROM
                                    (SELECT * FROM kategori) as a left join
                                    (SELECT id_kategori, sum(dibaca) as jum_dibaca FROM berita GROUP BY id_kategori) as b on a.id_kategori=b.id_kategori) as c 
                                        where c.aktif='Y' ORDER BY c.jum_dibaca DESC LIMIT $limit");
    }

    public function view_kec($id){

  /*  $this->dbsimpada->where('id_pemkab', $id);
    $result = $this->dbsimpada->get('tbl_kecamatan')->result(); // Tampilkan semua data kec. berdasarkan id pemkab
    
    return $result; */
     $hasil=$this->dbsimpada->query("SELECT * FROM tbl_kecamatan WHERE id_pemkab='$id'");
     return $hasil->result();
  }

  

}