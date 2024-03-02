<?php
class ActionModel extends CI_Model{
    public function mgetMovie($category_id)
    {
        $this->db->where('category_id', $category_id);
        return $this->db->get('movie')->result();  
    }

    public function mgetIndustry($industry_id)
    {
        $this->db->where('industry_id', $industry_id);
        return $this->db->get('movie')->result();  
    }
  }
?>