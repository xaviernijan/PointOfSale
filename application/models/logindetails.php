<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logindetails extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    function login($username,$password){ 
        $pass=  md5($password);
        $this->db->select()->from('users')->where('user_id',$username)->where('password',$pass);
        $sql=$this->db->get();
        if($sql->num_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    function loginid($username,$password){ 
        $pass=  md5($password);
        $this->db->select()->from('users')->where('user_id',$username)->where('password',$pass);
        $sql=$this->db->get();
        foreach ($sql->result() as $row){
           return $row->id;
        }
        
    }
}
?>
