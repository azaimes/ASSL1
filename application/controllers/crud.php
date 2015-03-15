<?php
class Crud extends Controller {
 
    function index() {
        
        if ($this->input->post('submit')) {
            $state = $this->input->xss_clean($this->input->post('state'));
            $content = $this->input->xss_clean($this->input->post('city'));
 
            
            $this->posts_model->addPost($state, $city);
        }
 
        $this->load->view('crud_view');
    }
 
}

?>

