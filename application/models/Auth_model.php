<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function getPicture($id)
    {
        $sql = "SELECT * FROM `picture`,`user` WHERE `picture`.`id_user` = `user`.`id` AND `picture`.`id_image` = $id";
        return $this->db->query($sql)->result_array();
    }

    public function getPictures()
    {
        $sql = "SELECT * FROM `picture`,`user` WHERE `picture`.`id_user` = `user`.`id`";
        return $this->db->query($sql)->result_array();
    }

    public function getFAQ()
    {
        $sql = "SELECT * FROM `faq`,`user` WHERE `faq`.`id_user` = `user`.`id`";
        return $this->db->query($sql)->result_array();
    }
}
