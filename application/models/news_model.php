<?php
class News_model extends Model{
    
    function News_model()
    {
        parent::Model();
    }

    function get_topic()
    {
        $query=$this->db->get('news');
        
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            
        }
    }
    
    function get_all_news()
    {
        $this->db->select('id, date_posted, title, excerpt, content');
        $this->db->order_by('date_posted', 'desc');
        $query = $this->db->get('news');
        
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        
    }
    
    public function update_news_item($id)
	{
	   $data = array
				(
    				'title' => $this->input->post('title'),
    				'excerpt' => $this->input->post('excerpt'),
    				'content' => $this->input->post('content'),
                    'date_posted' => $this->input->post('date_posted')
				);
			
		$this->db->where('id', $id);
		$this->db->update('news', $data);
	}
    
    function get_content()
    {
          
          
          $this->db->where('id',$this->uri->segment(3));
          $data['res']=$this->db->get('news');
          
        
    }
    function get_side_topic()
    {
          $query=$this->db->query('select id,title,content from news ORDER BY id DESC LIMIT 3');
          return $query->result();
    }
    function insert_news($data)
    {
        $this->db->insert('news',$data);
    }
    
    //insert news item
    function add_news_item()
    {
        $title = $this->input->post('title');
        $excerpt = $this->input->post('excerpt');
        $content = $this->input->post('content');
        $date_posted = $this->input->post('date_posted');
        $url_title = $this->input->post('url_title');
        $data = array(
                        'title' => $title,
                        'excerpt' => $excerpt,
                        'content' => $content,
                        'date_posted' => $date_posted
                    
                    );
        $this->db->insert('news', $data);
    }
  
    function get_news($id)
    {
        $this->db->select('id, title, excerpt, content, date_posted, url_title');
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        if ($query->num_rows() > 0)
        {
            return $query->row_array();
        }
    }
    
}
/* End of file news_model.php */
/* Location: ./application/models/news_model.php */