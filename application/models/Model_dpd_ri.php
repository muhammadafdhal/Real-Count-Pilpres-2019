<?php 
class Model_dpd_ri extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_suara_dpd');
    }
    function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
  
    function post($data){
        $this->db->insert('tb_suara_dpd',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_suara'=>$id);
        return $this->db->get_where('tb_suara_dpd',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_suara',$id);
        $this->db->update('tb_suara_dpd',$data);
    }
    function delete($id)
    {
        $this->db->where('id_suara',$id);
        $this->db->delete('tb_suara_dpd');
    }
    function get_tps(){
        /*return $this->db->get('tb_kecamatan');*/
        $this->db->from('tb_tps');
        $this->db->order_by("id_tps", "asc");
        return $this->db->get(); 
    }



}



 ?>