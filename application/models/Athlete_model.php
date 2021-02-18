<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Athlete_model extends CI_Model
{
    // Untuk Halaman Index - AThlete
    public function getArcheryClasses()
    {
        // fungsi untuk mendapatkan semua nilai class yang berada di dalam table athlete
        return $this->db->query("SELECT DISTINCT `class` FROM `athlete`")->result_array();
    }

    public function getDistances()
    {
        // fungsi untuk mendapatkan semua nilai distances yang berada di dalam table athlete
        return $this->db->query("SELECT DISTINCT `distance` FROM `athlete_scores` ORDER BY `distance` DESC")->result_array();
    }

    public function getNullData()
    {
        // no data
        $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
        WHERE `user`.`id` = 0";
        return $this->db->query($sql)->result_array();
    }

    public function getLeaderboards($time, $classes, $distances)
    {
        if ($time == "All Time") {
            $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                    `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
                    `class` = '" . $classes . "' AND
                    `distance` = '" . $distances . "'
                     ORDER BY `athlete_scores`.`total` DESC";
            return $this->db->query($sql)->result_array();
        } else if ($time == date('Y')) {
            $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                    `athlete`.`id_atlet` = `athlete_scores`.`id_athelete`
                    AND `athlete_scores`.`date_scores` LIKE '%" . $time . "%' AND
                    `class` = '" . $classes . "' AND
                    `distance` = '" . $distances . "'
                    ORDER BY `athlete_scores`.`total` DESC";
            return $this->db->query($sql)->result_array();
        } else {
            $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                    `athlete`.`id_atlet` = `athlete_scores`.`id_athelete`
                    AND `athlete_scores`.`date_scores` LIKE '%-" . $time . "-%' AND
                    `class` = '" . $classes . "' AND
                    `distance` = '" . $distances . "'
                    ORDER BY `athlete_scores`.`total` DESC";
            return $this->db->query($sql)->result_array();
        }
    }

    public function getMyScores($id, $id_detail = null)
    {
        if ($id_detail == null) {
            $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
            WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
            `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
            `user`.`id` = " . $id . " ORDER BY `athlete_scores`.`total` DESC";
        } else {
            $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
            WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
            `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
            `athlete_scores`.`id` = " . $id_detail . " AND
            `user`.`id` = " . $id  . " ORDER BY `athlete_scores`.`total` DESC";
        }

        return $this->db->query($sql)->result_array();
    }

    public function getDetailScores($id_detail)
    {
        $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
            WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
            `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
            `athlete_scores`.`id` = " . $id_detail . " ORDER BY `athlete_scores`.`total` DESC";

        return $this->db->query($sql)->result_array();
    }
}
