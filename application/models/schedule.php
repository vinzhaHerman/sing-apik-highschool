<?php
class Schedule extends CI_Model{
 
    function save_schedule($schedule_content){
        $hsl=$this->db->query("INSERT INTO schedule (schedule_content) VALUES ('schedulecontent')");
        return $hsl;
    }

    function update_schedule($scheduleid,$schedulecontent){
        $hsl=$this->db->query("UPDATE schedule SET schedule_content='$schedulecontent' WHERE schedule_id='$scheduleid'");
        return $hsl;
    }
 
    function get_schedule_content(){
        $hsl=$this->db->query("SELECT * FROM schedule ORDER BY schedule_id");
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