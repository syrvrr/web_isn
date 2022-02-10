<?php 
class Model_app extends CI_model{
    public function view($table){
        return $this->db->get($table);
    }

    public function view_result($table){
       $hasil = $this->db->get($table);
       return $hasil->result();
    }

     public function view_where_res($table,$data){
        $this->db->where($data);
        $hasil = $this->db->get($table);
        return $hasil->result();
    }

    public function view_result_order($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result();
    }

   public function sum_order($field, $table, $userfield, $username)
    {
        return $this->db->query("SELECT SUM($field) as total FROM $table WHERE $userfield like '%$username'" );
    }

    public function like_order($table,$data,$like,$order,$ordering){
        $this->db->where($data);
        $this->db->like($like);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }


    public function max_query($field,$table)
    {
        return $this->db->query("SELECT MAX($field) FROM $table");

       
    }

     public function max_query_as($field,$as,$table)
    {
        return $this->db->query("SELECT MAX($field) as $as FROM $table");

       
    }

     public function query_count($table)
    {
        return $this->db->query("SELECT Count(*) as jumlah FROM $table");

       
    }

     public function query_count_var($table,$var)
    {
        return $this->db->query("SELECT Count(*) as $var FROM $table");

       
    }

    public function query_count_where($table,$name,$jlh)
    {
        return $this->db->query("SELECT Count(*) as jumlah FROM $table where $name = $jlh");

       
    }

    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

    public function edit($table, $data){
        return $this->db->get_where($table, $data);
    }
 
    public function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }

    public function delete($table, $where){
        return $this->db->delete($table, $where);
    }

    public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }

    public function view_where_tab($table,$data,$value){
        $this->db->like($data,$value);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function view_ordering_limit($table,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }

    public function view_limit($table,$data,$dari){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($data);
        $this->db->limit($dari);
        return $this->db->get()->result_array();
    }

    public function view_limit_lagi($table,$data,$dari,$baris){
        return $this->db->query("SELECT * FROM $table where $data LIMIT $dari,$baris");
    }
    
    public function view_ordering($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_ordering2($table,$order,$ordering){
        $this->db->select('MAX(id_penduduk)');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }
 


    public function view_where_ordering($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    function umenu_akses($link,$id){
        return $this->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    }

    public function cek_login($username,$password,$table){
        return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND blokir='N'");
    }

    function grafik_kunjungan(){
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }

    function kategori_populer($limit){
        return $this->db->query("SELECT * FROM (SELECT a.*, b.jum_dibaca FROM
                                    (SELECT * FROM kategori) as a left join
                                    (SELECT id_kategori, sum(dibaca) as jum_dibaca FROM berita GROUP BY id_kategori) as b on a.id_kategori=b.id_kategori) as c 
                                        where c.aktif='Y' ORDER BY c.jum_dibaca DESC LIMIT $limit");
    }

    public function view_kec($id){

  /*  $this->db->where('id_pemkab', $id);
    $result = $this->db->get('tbl_kecamatan')->result(); // Tampilkan semua data kec. berdasarkan id pemkab
    
    return $result; */
     $hasil=$this->db->query("SELECT * FROM tbl_kecamatan WHERE id_pemkab='$id'");
     return $hasil->result();
  }

  
  function save_pasar(){
        $data = array(
                
                'nama_pasar'    => $this->input->post('nama_pasar'), 
                'alamat_pasar'  => $this->input->post('alamat_pasar'), 
               
            );
        $result=$this->db->insert('master_pasar',$data);
        return $result;

        


        
    }



function save_toko(){

        $var_pasar    = $this->input->post('nama_pasar_hub');
        $var_kios     = $this->input->post('no_kios');         

        $data = array(
                
                'nama_kios'      => $this->input->post('nama_kios'), 
                'harga_kontrak'  => str_replace(",", "", $this->input->post('harga_kontrak')),
              //  'nik'            => $this->input->post('nik'), 
              //  'no_rekening'    => $this->input->post('no_rekening'),
                'no_block_toko'  => $this->input->post('no_block_toko'), 
                'no_pasar'       => $this->input->post('nama_pasar_hub'), 
                'status_kios'    => $this->input->post('status_kios'), 
                'no_kios'        => $var_kios.$var_pasar,

               
            );
        $result=$this->db->insert('master_toko',$data);
        return $result;
    }

function pasar_list(){
        $hasil=$this->db->get('master_pasar');
        return $hasil->result();
    }


function otoritas_list(){

   
            
             $hasil=$this->db->query("select a.nama_pasar,b.no_kios,c.npwrd,c.kali_bayar from master_pasar a join master_toko b on a.no_pasar = b.no_pasar join pembayaran c on c.no_kios = b.no_kios join otoritas_delete d on d.no_kios = c.no_kios where c.no_kios = d.no_kios and c.kali_bayar = (select max(kali_bayar) from pembayaran where no_kios = d.no_kios)");
             return $hasil->result(); 



    }


function history_list(){

   
            
             $hasil=$this->db->query("select a.nama_pasar,b.*,c.*,d.nama_penyewa from master_pasar a join master_toko b on a.no_pasar = b.no_pasar join pembayaran c on c.no_kios = b.no_kios join kontrak d on c.npwrd = d.npwrd where b.no_kios = c.no_kios order by c.tanggal_bayar ASC");
             return $hasil->result(); 



    }


function get_kota($id_provinsi) {
    $this->db->where('id_provinsi', $id_provinsi);
    $query = $this->db->get('table_kota');
    return $query->result();
}

    



}