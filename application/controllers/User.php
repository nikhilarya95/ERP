<?php
   
    class User extends CI_controller
    {
        public function index()
        {
              $this->load->helper('url');
               $this->load->view('KEC/home');
              
                
        }
        
        public function forget()
        {
            $this->load->helper('url');
               $this->load->view('KEC/forget');
                
        }
        public function cngpass()
        {
            $this->load->helper('url');
            $this->load->view('KEC/passchnage');
        }
       public function repass()
       {
           $this->load->view('KEC/reenterpass');
       }
       public function signup()
       {
        $this->load->helper('url');
           $this->load->view('KEC/signup');
       }
       public function pers()
       {
            $this->load->view('KEC/form');
       }
    }
?>