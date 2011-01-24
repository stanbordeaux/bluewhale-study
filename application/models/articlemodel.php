<?php

class articlemodel extends Model {
    
    function articlemodel() {
        parent::Model();
    }

    function get_all_form() {
        $query = $this->db->get('articles');
        return $query->result();
    }
    
    function insertemp($data)
    {
        $this->Author   = $data['author'];
        $this->ArticleName = $data['articlename'];
        $this->Topic  = $data['topic'];
        $this->ArticleContent = $data['articlecontent'];
		$this->Date   = $data['date'];

        $this->db->insert('articles', $this);
    }
    

    
    
}
?>
