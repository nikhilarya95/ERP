<?php
class Authenicate extends CI_model
{
    public function getdata($email,$password)
    {
        $q=$this->db->where(['email'=>$email,'pwd'=>$password])
                    ->get('login');
                
                   
                    if($q->num_rows())
                    {
                        return $q->row()->email;
    
                    }
                    else
                    {
                        return false;
                    }
    }
    public function forget($email,$sq1,$sq2,$ans1,$ans2)
    {
        $f=$this->db->where(['email'=>$email,'ques1'=>$sq1,'ans1'=>$ans1,'ques2'=>$sq2,'ans2'=>$ans2])
                    ->get('login');
                    if($f->num_rows())
                    {
                        return $f->row()->email;
                    }
                    else
                    {
                        return false;
                    }
    }               
    
}
?>