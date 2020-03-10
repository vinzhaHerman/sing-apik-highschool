<?php
class News extends CI_Model{
 
    function save_news($newstitle,$newstext,$newsdate,$image){
        $hsl=$this->db->query("INSERT INTO news (news_title,news_text,news_date,news_image) VALUES ('$newstitle','$newstext','$newsdate','$image')");
        return $hsl;
    }

    function update_news($newsid,$newstitle,$newstext,$newsdate){
        $hsl=$this->db->query("UPDATE news SET news_title='$newstitle',news_text='$newstext',news_date='$newsdate' WHERE news_id='$newsid'");
        return $hsl;
    }

    function delete_news($newsid){
        $hsl=$this->db->query("DELETE FROM news WHERE news_id=$newsid");
        return $hsl;
    }
 
    function get_news_by_id($newsid){
        $hsl=$this->db->query("SELECT * FROM news WHERE news_id='$newsid'");
        return $hsl;
    }
 
    function get_all_news(){
        $hsl=$this->db->query("SELECT * FROM news ORDER BY news_id DESC");
        return $hsl;
    }
    function get_all_news3(){
        $hsl=$this->db->query("SELECT * FROM news ORDER BY news_id DESC limit 3");
        return $hsl;
    }
    function get_news(){
        return $this->db->get('news');
    }
        function input_data($data,$table){
        $this->db->insert($table,$data);
    }
}
?>