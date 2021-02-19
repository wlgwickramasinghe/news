<?php

class LoginModel extends CI_Model
{


       function do_auth($username,$password=NULL){
        $data = array();

        $password = SHA1($password);
		$sql=" SELECT user.id,user.name,user.email ,user.pwd,user.group";
        $sql .= " FROM user ";
		$sql .=" WHERE (user.name='$username' ) and (user.pwd='$password' )  and (user.status = 'A')" ;

        $Q =  $this->db->query($sql);
        if ($Q->num_rows() == 1){
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    //     function do_auth($username,$password=NULL){
    //     $data = array();

    //     $password = SHA1($password);
    //     $sql=" SELECT User.id,User.user_title,User.first_name ,User.last_name,User.user_group";
    //     $sql .= " FROM User ";
    //     $sql .=" WHERE (User.user_name='$username' ) and (User.password='$password' )  and (User.active = 1)" ;

    //     $Q =  $this->db->query($sql);
    //     if ($Q->num_rows() == 1){
    //         $data = $Q->row_array();
    //     }
    //     $Q->free_result();
    //     return $data;
    // }

       function hospital_info(){
        $data = array();

		$sql=" SELECT *";
        $sql .= " FROM Hospital_settings ";

        $Q =  $this->db->query($sql);
        if ($Q->num_rows() == 1){
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }


}
