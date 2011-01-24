<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends Controller
{
	// Protected or private properties
	protected $_template;
	
	// Constructor
	public function __construct()
	{
		parent::Controller();
		$this->lang->load('settings', 'english');	
    }

	// Public methods
	public function get_settings()
	{
        if($this->session->userdata('logged_in'))
        {
    		$this->load->model('settings_model');
    
    		$this->form_validation->set_rules('blog_title', 'lang:form_blog_title', 'required|xss_clean');
    		$this->form_validation->set_rules('blog_description', 'lang:form_blog_description', 'required|xss_clean');
    		$this->form_validation->set_rules('meta_keywords', 'lang:form_meta_keywords', 'required|xss_clean');
    		$this->form_validation->set_rules('admin_email', 'lang:form_admin_email', 'required|valid_email');
    		$this->form_validation->set_rules('allow_registrations', 'lang:form_allow_registrations', 'numeric');
    		$this->form_validation->set_rules('enable_captcha', 'lang:form_enable_captcha', 'numeric');
    		$this->form_validation->set_rules('recognize_user_agent', 'lang:form_recognize_user_agent', 'numeric');
    		$this->form_validation->set_rules('enabled', 'lang:form_enabled', 'numeric');
    		//$this->form_validation->set_rules('template', 'lang:form_template', 'required|numeric');
    		$this->form_validation->set_rules('language', 'lang:form_language', 'required|numeric');
    		$this->form_validation->set_rules('posts_per_page', 'lang:form_posts_per_page', 'required|numeric');
    		$this->form_validation->set_rules('links_per_box', 'lang:form_links_per_box', 'required|numeric');
    		$this->form_validation->set_rules('months_per_archive', 'lang:form_months_per_archive', 'required|numeric');
    		$this->form_validation->set_rules('offline_reason', 'lang:form_offline_reason', 'xss_clean');
        } 
        if ($this->input->post('enabled') == 0)
		{
			$this->form_validation->set_rules('offline_reason', 'lang:form_offline_reason', 'required');
		}

		$this->form_validation->set_error_delimiters('', '<br />');
		
		$data['settings'] = $this->settings_model->get_settings();
		//$data['templates'] = $this->settings_model->get_templates();
		$data['languages'] = $this->settings_model->get_languages();
		
		if ($this->form_validation->run() == TRUE)
		{
			$this->settings_model->update_settings();
			$this->session->set_flashdata('message', 'successfully_updated');
            redirect('settings/get_settings', 'refresh');

		}
		
		$data['main_content']	= '/dashboard/settings_edit';

		$this->load->view('/dashboard/dashboard_templ', $data);
	}
}

/* End of file settings.php */
/* Location: ./application/modules/admin/controllers/settings.php */