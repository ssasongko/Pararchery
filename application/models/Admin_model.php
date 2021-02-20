<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    //// Untuk Halaman Index
    public function getTotalUsers()
    {
        // fungsi untuk mendapatkan berapa banyaknya total users
        return $this->db->query("SELECT * FROM `user`")->num_rows();
    }

    public function getTotalAdmin()
    {
        // fungsi untuk mendapatkan berapa banyaknya total admin
        return $this->db->query("SELECT * FROM `user` WHERE `role_id`= 1")->num_rows();
    }

    public function getTotalCoach()
    {
        // fungsi untuk mendapatkan berapa banyaknya total pelatih
        return $this->db->query("SELECT * FROM `user` WHERE `role_id`= 2")->num_rows();
    }

    public function getTotalAthletes()
    {
        // fungsi untuk mendapatkan berapa banyaknya total athletes
        return $this->db->query("SELECT * FROM `user` `user` WHERE `role_id`= 3")->num_rows();
    }


    //// Untuk Halaman Manage
    public function dataUsers()
    {
        // fungsi untuk menampil data-data users
        $sql = "SELECT * FROM `user`, `user_role` WHERE `user`.role_id = `user_role`.id_role ORDER BY role_id,name ASC";
        return $this->db->query($sql)->result_array();
    }

    public function userInfo($role, $id)
    {
        // fungsi untuk menampil informasi coach / admin
        $sql = "SELECT * FROM `user`,`user_role` 
            WHERE `user`.`role_id` =  `user_role`.`id_role` AND
            `user_role`.`id_role` = " . $role . " AND
            `id` = " . $id;
        return $this->db->query($sql)->result_array();
    }

    public function athleteInfo($id)
    {
        // fungsi untuk menampil informasi khusus atlet
        $sql = "SELECT * FROM `user`,`user_role`,`athlete` WHERE
                `user`.`role_id` =  `user_role`.`id_role` AND
                `user`.`id` = `athlete`.`id_atlet` AND 
                `user`.`id` = " . $id;
        return $this->db->query($sql)->result_array();
    }

    public function getRowFAQ($id)
    {
        $sql = "SELECT * FROM `faq`,`user` WHERE `faq`.`id_user` = `user`.`id` AND `faq`.`id_faq` = $id";
        return $this->db->query($sql)->result_array();
    }
}
