<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Stan Bordeaux
 * @copyright 2009
 */


class Mailer extends Controller
{
    function Mailer()
    {
        parent::Controller();
        $this->load->library('email');
        
    }
    
    function index()
    {
        $config['protocol'] = 'smpt';
        //$config['mailpath'] = '/usr/sbin/sendmail';
        //$config['charset'] = 'iso-8859-1';
        $config['smpt_host'] = 'mail.stanbordeaux.com';
        $config['smpt_user'] = 'sta49431';
        $config['smpt_pass'] = 'b00nyb0rd053';

        $this->email->initialize($config);
        
        $this->email->from('admin@stanbordeaux.com', 'Admin');
        $this->email->to('stan.bordeaux@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');
        
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        
        $this->email->send();
        
        echo $this->email->print_debugger();
        
    }
}
/* End of file mailer.php */
/* Location: ./system/application/controllers/mailer.php */