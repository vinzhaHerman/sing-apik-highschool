<?php
class Events extends CI_Model{
 
    function save_events($eventtitle,$eventtext,$eventdate){
        $hsl=$this->db->query("INSERT INTO event (event_title,event_text,event_date) VALUES ('$eventtitle','$eventtext','$eventdate')");
        return $hsl;
    }

    function update_events($eventid,$eventtitle,$eventtext,$eventdate){
        $hsl=$this->db->query("UPDATE event SET event_title='$eventtitle',event_text='$eventtext',event_date='$eventdate' WHERE event_id='$eventid'");
        return $hsl;
    }

    function delete_event($eventid){
        $hsl=$this->db->query("DELETE FROM event WHERE event_id=$eventid");
        return $hsl;
    }
 
    function get_event_by_id($eventid){
        $hsl=$this->db->query("SELECT * FROM event WHERE event_id='$eventid'");
        return $hsl;
    }
 
    function get_all_event(){
        $hsl=$this->db->query("SELECT * FROM event ORDER BY event_id DESC");
        return $hsl;
    }
    function get_all_event3(){
        $hsl=$this->db->query("SELECT * FROM event ORDER BY event_id DESC limit 4");
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