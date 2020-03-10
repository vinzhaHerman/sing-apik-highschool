<?php
class Tuition extends CI_Model{
 
    function save_tution($tuition_content){
        $hsl=$this->db->query("INSERT INTO fee (tuition_content) VALUES ('tuitioncontent')");
        return $hsl;
    }

    function update_tuition($tuitionid,$tuitioncontent){
    $hsl=$this->db->query("UPDATE fee SET tuition_content='$tuitioncontent' WHERE tuition_id='$tuitionid'");
        return $hsl;
    }
 
    function get_tuition_content(){
        $hsl=$this->db->query("SELECT * FROM fee ORDER BY tuition_id");
        return $hsl;
    }
    function get_event(){
        return $this->db->get('event');
    }
        function input_data($data,$table){
        $this->db->insert($table,$data);
    }
}
?>