<?php
class Register_model extends Model{
    function Register_model()
    {
        parent::Model();
    }
    function test()
    {
        echo "today";
    }
    function insert_record($data)
    {
   	    $this->db->insert('register',$data);

    }
}



?>

