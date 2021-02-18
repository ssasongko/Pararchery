<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coach_model extends CI_Model
{
    // Halaman Indek
    public function getTotalAthletes()
    {
        return $this->db->query("SELECT * FROM `athlete`")->num_rows();
    }

    public function getTotalUsersBAR()
    {
        return $this->db->query("SELECT * FROM `athlete` WHERE class='Barebow'")->num_rows();
    }

    public function getTotalUsersSTD()
    {
        return $this->db->query("SELECT * FROM `athlete` WHERE class='Standard Bow' ")->num_rows();
    }

    public function getTotalUsersREC()
    {
        return $this->db->query("SELECT * FROM `athlete` WHERE class='Recurve Bow'")->num_rows();
    }

    public function getTotalUsersCOM()
    {
        return $this->db->query("SELECT * FROM `athlete` WHERE class='Compound Bow'")->num_rows();
    }

    public function getBestBAR()
    {
        $sql = "SELECT * FROM user,athlete, athlete_scores WHERE 
        `user`.`id` = `athlete`.`id_atlet` AND 
        `athlete`.`id_atlet` =`athlete_scores`.`id_athelete` AND
        `athlete`.`class` = 'Barebow' AND
        `athlete_scores`.`distance` = 50 
        ORDER BY `total` DESC LIMIT 1";
        return $this->db->query($sql)->result_array();
    }

    public function getBestSTD()
    {
        $sql = "SELECT * FROM user,athlete, athlete_scores WHERE 
        `user`.`id` = `athlete`.`id_atlet` AND 
        `athlete`.`id_atlet` =`athlete_scores`.`id_athelete` AND
        `athlete`.`class` = 'Standard Bow' AND
        `athlete_scores`.`distance` = 30 
        ORDER BY `total` DESC LIMIT 1";
        return $this->db->query($sql)->result_array();
    }

    public function getBestREC()
    {
        $sql = "SELECT * FROM user,athlete, athlete_scores WHERE 
        `user`.`id` = `athlete`.`id_atlet` AND 
        `athlete`.`id_atlet` =`athlete_scores`.`id_athelete` AND
        `athlete`.`class` = 'Recurve Bow' AND
        `athlete_scores`.`distance` = 30 
        ORDER BY `total` DESC LIMIT 1";
        return $this->db->query($sql)->result_array();
    }

    public function getBestCOM()
    {
        $sql = "SELECT * FROM user,athlete, athlete_scores WHERE 
        `user`.`id` = `athlete`.`id_atlet` AND 
        `athlete`.`id_atlet` =`athlete_scores`.`id_athelete` AND
        `athlete`.`class` = 'Compound Bow' AND
        `athlete_scores`.`distance` = 30 
        ORDER BY `total` DESC LIMIT 1";
        return $this->db->query($sql)->result_array();
    }

    public function listAthletes()
    {
        $sql = "SELECT * FROM user, athlete WHERE `user`.id = `athlete`.`id_atlet` ORDER BY class,name ASC";
        return $this->db->query($sql)->result_array();
    }

    public function listScores($c = "Barebow")
    {
        $sql = "SELECT * FROM user,athlete, athlete_scores WHERE `user`.id = `athlete`.`id_atlet` AND 
                `athlete`.`id_atlet` =`athlete_scores`.`id_athelete` AND `athlete`.`class` = '" . $c . "' ORDER BY total DESC";
        return $this->db->query($sql)->result_array();
    }

    public function nullData($c = "Barebow")
    {
        $sql = "SELECT * FROM user,athlete, athlete_scores WHERE `user`.`id` = `athlete`.`id_atlet` AND
        `athlete`.`id_atlet` =`athlete_scores`.`id_athelete` AND `user`.`id` = 0";
        return $this->db->query($sql)->result_array();
    }

    public function detailScore($id_detail)
    {
        $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
                `athlete_scores`.`id` = " . $id_detail . "
                 ORDER BY `athlete_scores`.`total` DESC";
        return $this->db->query($sql)->result_array();
    }
}
