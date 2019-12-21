<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class admin extends CI_controller
    {
       
       public function login()
       {
        
          $this->form_validation->set_rules('emil','Email ID','required|valid_email');
           $this->form_validation->set_rules('pass','Password','required');
           $this->form_validation->set_error_delimiters('<p class="text-danger" style="width:80%;he">','</p>');
           if($this->form_validation->run())
           {
             $email=$this->input->post('emil');
             $pass=$this->input->post('pass');
             $this->load->model('Authenicate');
             $q=$this->Authenicate->getdata($email,$pass);
             if($q)
              {
                  
                  $this->session->set_userdata('email',$q);
                 return redirect('admin/dashboard');
               
              }
             else
             {
              $this->session->set_flashdata('Login_failed','Invalid Username/Password');
                return redirect('admin/login');
             }
            }   
           else
           {
              $this->load->view('KEC/home');
           }
        }
        public function sendmail()
        {
            $this->form_validation->set_rules('firstname','Fuculty First Name','required|alpha');
            $this->form_validation->set_rules('lastname','Fuculty last Name','required|alpha');
            $this->form_validation->set_rules('mobile1','Mobile Number','required|numeric|regex_match[/^[789]\d{9}$/]|is_unique[registration.mobile]|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('email1','Email Id','required|valid_email|is_unique[registration.email]');
            $this->form_validation->set_rules('password1','Password','required');
            $this->form_validation->set_rules('password2','Confirm Password','required|matches[password1]');
            $this->form_validation->set_rules('security_answer','Security Answer','required');
            $this->form_validation->set_rules('security_answer1','Security Answer','required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

            if($this->form_validation->run())
            {
             $this->load->library('email');
             $this->email->from(set_value("nikhilarya95@gmail.com"),set_value("nikhil"));
             $this->email->to('email1');
             $this->email->subject("KEC registation greeting...");

             $this->email->message("Thank You for registration");
                $this->email->set_newline("\r\n");
                $this->email->send();

           if(!$this->email->send())
            {
                show_error($this->email->print_debugger());
                
               
            }
            else
            {
                echo "your email has been sent!!!!";
            }
            $this->load->view('KEC/thanku');
            }
            else
           {
              $this->load->view('KEC/signup');
            }
        }
        public function logout()
        {
            $this->session->unset_userdata('email');
            return redirect('admin/login');
        }
        public function dashboard()
        {
            if(!$this->session->userdata('email') )
          return redirect('admin/login');
            $this->load->view('kec/dashboard');
        }
    }
?>