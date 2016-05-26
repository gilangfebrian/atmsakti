<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataKppn {

    private $db;
    private $_kd_d_kppn;
    private $_kd_d_user;
    private $_kd_d_tgl;
    private $_kd_d_in;
    private $_kd_d_in_mas;
    private $_kd_d_konf;
    private $_kd_d_konf_mas;
    private $_kd_d_dipa;
    private $_kd_d_dipa_mas;
    private $_kd_d_gi;
    private $_kd_d_gi_mas;
    private $_kd_d_stk;
    private $_kd_d_stk_mas;
    private $_kd_d_tik;
    private $_kd_d_tik_mas;
    private $_kd_d_retur;
    private $_kd_d_retur_mas;
    private $_kd_d_konversi;
    private $_kd_d_konversi_mas;
    private $_kd_d_gup;
    private $_kd_d_gup_mas;
    private $_kd_d_kgs;
    private $_kd_d_kgs_mas;
    
    private $_kd_d_saldo1;
    private $_kd_d_saldo_mas1;
    private $_kd_d_tip;
    private $_kd_d_tip_mas;
    private $_kd_d_konversi1;
    private $_kd_d_konversi_mas1;
    
    private $_kd_d_stnk;
    private $_kd_d_stnk_mas;
    private $_kd_d_tib;
    private $_kd_d_tib_mas;
    private $_kd_d_konversi2;
    private $_kd_d_konversi_mas2;
    private $_kd_d_up;
    private $_kd_d_up_mas;
    private $_kd_d_lsb;
    private $_kd_d_lsb_mas;
    
    private $_kd_d_user_id;
    private $_kd_d_user_id_mas;
    private $_kd_d_input_by;
    private $_kd_d_waktu_isi;
    private $_error;
    private $_valid = TRUE;
    private $_table = 'd_kppn';
    public $registry;

    /*
     * konstruktor
     */

    public function __construct($registry = Registry) {
        $this->db = $registry->db;
        $this->registry = $registry;
    }

    /*
     * mengambil Data Semua KPPN, 
     * bisa difilter untuk 1 kppn dengan mengisi parameter @kppn
     */

    public function get_d_kppn_all($limit = null, $batas = null) {
        $sql = "select a.* , c.nama_org
                from " . $this->_table . " a
                inner join (
                select `kd_d_user`, max(`kd_d_waktu_isi`) as MaxDate
                from " . $this->_table . "
                group by `kd_d_user`
                ) b on a.`kd_d_user` = b.`kd_d_user` and a.`kd_d_waktu_isi` = b.MaxDate
                left join d_user c on a.kd_d_user = c.kd_d_user
                where c.aktif = 1
                ORDER BY a.`kd_d_user` ASC";

        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['nama_org']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

            $d_kppn->set_kd_d_in($val['kd_d_in']);
            $d_kppn->set_kd_d_in_mas($val['kd_d_in_mas']);
            $d_kppn->set_kd_d_konf($val['kd_d_konf']);
            $d_kppn->set_kd_d_konf_mas($val['kd_d_konf_mas']);
            $d_kppn->set_kd_d_dipa($val['kd_d_dipa']);
            $d_kppn->set_kd_d_dipa_mas($val['kd_d_dipa_mas']);

            $d_kppn->set_kd_d_gi($val['kd_d_gi']);
            $d_kppn->set_kd_d_gi_mas($val['kd_d_gi_mas']);
            $d_kppn->set_kd_d_stk($val['kd_d_stk']);
            $d_kppn->set_kd_d_stk_mas($val['kd_d_stk_mas']);
            $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
            $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
            $d_kppn->set_kd_d_retur($val['kd_d_retur']);
            $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
            $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
            $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

            $d_kppn->set_kd_d_gup($val['kd_d_gup']);
            $d_kppn->set_kd_d_gup_mas($val['kd_d_gup_mas']);
            $d_kppn->set_kd_d_kgs($val['kd_d_kgs']);
            $d_kppn->set_kd_d_kgs_mas($val['kd_d_kgs_mas']);
            $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
            $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);
            
            $d_kppn->set_kd_d_saldo1($val['kd_d_saldo1']);
            $d_kppn->set_kd_d_saldo_mas1($val['kd_d_saldo_mas1']);
            $d_kppn->set_kd_d_tip($val['kd_d_tip']);
            $d_kppn->set_kd_d_tip_mas($val['kd_d_tip_mas']);
            $d_kppn->set_kd_d_konversi1($val['kd_d_konversi1']);
            $d_kppn->set_kd_d_konversi_mas1($val['kd_d_konversi_mas1']);
            
            $d_kppn->set_kd_d_stnk($val['kd_d_stnk']);
            $d_kppn->set_kd_d_stnk_mas($val['kd_d_stnk_mas']);
            $d_kppn->set_kd_d_tib($val['kd_d_tib']);
            $d_kppn->set_kd_d_tib_mas($val['kd_d_tib_mas']);
            $d_kppn->set_kd_d_konversi2($val['kd_d_konversi2']);
            $d_kppn->set_kd_d_konversi_mas2($val['kd_d_konversi_mas2']);
            $d_kppn->set_kd_d_up($val['kd_d_up']);
            $d_kppn->set_kd_d_up_mas($val['kd_d_up_mas']);
            $d_kppn->set_kd_d_lsb($val['kd_d_lsb']);
            $d_kppn->set_kd_d_lsb_mas($val['kd_d_lsb_mas']);

            $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
            $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_nama_kanwil($id = null) {
        $sql = "SELECT nama_user FROM d_user WHERE kd_d_user = " . $id;
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_user($val['nama_user']);
            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_nama_kanwil_all($id = null) {
        $sql = "SELECT  SUBSTRING(e.nama_user, 20, 15) nama_user, sum(d.total) jml_sukses, count(e.nama_user) jml_kppn
                from d_user e
                LEFT JOIN
                    (SELECT (IF((
                    `kd_d_in`+
                    `kd_d_konf`+
                    `kd_d_dipa`+
                    `kd_d_gi`+
                    `kd_d_stk`+
                    `kd_d_saldo`+
                    `kd_d_retur`+
                    `kd_d_konversi`+
                    `kd_d_gup`+
                    `kd_d_kgs`+
                    `kd_d_user_id`
                    ) = 11, 1, 0)) total, f.kd_d_user FROM
                                    (select a.* , c.nama_user
                            from d_kppn a
                            inner join (
                            select `kd_d_user`, max(`kd_d_waktu_isi`) as MaxDate
                            from d_kppn
                            group by `kd_d_user`
                            ) b on a.`kd_d_user` = b.`kd_d_user` and a.`kd_d_waktu_isi` = b.MaxDate
                            left join d_user c on a.kd_d_user = c.kd_d_user
                            ORDER BY a.`kd_d_user` ASC)f) d 
                on e.kd_d_user = d.kd_d_user
                where e.kd_r_jenis > 1
                group by e.kd_r_unit";
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_user($val['nama_user']);
            $d_kppn->set_kd_d_in($val['jml_sukses']);
            $d_kppn->set_kd_d_konf($val['jml_kppn']);
            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_d_kppn_per_kanwil($kanwil = null, $limit = null, $batas = null) {
        $sql_kanwil = "SELECT kd_d_user FROM d_user WHERE kd_r_unit = " . $kanwil;
        $data_kanwil = $this->db->select($sql_kanwil);
        $data = array();
        foreach ($data_kanwil as $dt) {
            $sql = "SELECT a.*, b.nama_user FROM d_kppn a 
                    left join d_user b 
                    on a.kd_d_user = b.kd_d_user
                    WHERE a.kd_d_user = " . $dt['kd_d_user'] . " 
                    order by a.kd_d_waktu_isi 
                    desc LIMIT 1";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $d_kppn = new $this($this->registry);
                $d_kppn->set_kd_d_kppn($val['nama_user']);
                $d_kppn->set_kd_d_user($val['kd_d_user']);
                $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

                $d_kppn->set_kd_d_in($val['kd_d_in']);
                $d_kppn->set_kd_d_in_mas($val['kd_d_in_mas']);
                $d_kppn->set_kd_d_konf($val['kd_d_konf']);
                $d_kppn->set_kd_d_konf_mas($val['kd_d_konf_mas']);
                $d_kppn->set_kd_d_dipa($val['kd_d_dipa']);
                $d_kppn->set_kd_d_dipa_mas($val['kd_d_dipa_mas']);

                $d_kppn->set_kd_d_gi($val['kd_d_gi']);
                $d_kppn->set_kd_d_gi_mas($val['kd_d_gi_mas']);
                $d_kppn->set_kd_d_stk($val['kd_d_stk']);
                $d_kppn->set_kd_d_stk_mas($val['kd_d_stk_mas']);
                $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
                $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
                $d_kppn->set_kd_d_retur($val['kd_d_retur']);
                $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
                $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
                $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

                $d_kppn->set_kd_d_gup($val['kd_d_gup']);
                $d_kppn->set_kd_d_gup_mas($val['kd_d_gup_mas']);
                $d_kppn->set_kd_d_kgs($val['kd_d_kgs']);
                $d_kppn->set_kd_d_kgs_mas($val['kd_d_kgs_mas']);
                $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
                $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

                $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
                $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

                $data[] = $d_kppn;
            }
        }

        return $data;
    }

    public function get_d_kppn_per_all($limit = null, $batas = null) {
        $sql_kanwil = "SELECT kd_d_user, nama_user FROM d_user WHERE kd_r_jenis = 3";
        $data_kanwil = $this->db->select($sql_kanwil);
        $data = array();
        foreach ($data_kanwil as $dt) {
            $sql = "SELECT a.*, b.nama_user FROM d_kppn a 
                    left join d_user b 
                    on a.kd_d_user = b.kd_d_user
                    WHERE a.kd_d_user = " . $dt['kd_d_user'] . " 
                    order by a.kd_d_waktu_isi 
                    desc LIMIT 1";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $d_kppn = new $this($this->registry);
                $d_kppn->set_kd_d_kppn($val['nama_user']);
                $d_kppn->set_kd_d_user($val['kd_d_user']);
                $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

                $d_kppn->set_kd_d_in($val['kd_d_in']);
                $d_kppn->set_kd_d_in_mas($val['kd_d_in_mas']);
                $d_kppn->set_kd_d_konf($val['kd_d_konf']);
                $d_kppn->set_kd_d_konf_mas($val['kd_d_konf_mas']);
                $d_kppn->set_kd_d_dipa($val['kd_d_dipa']);
                $d_kppn->set_kd_d_dipa_mas($val['kd_d_dipa_mas']);

                $d_kppn->set_kd_d_gi($val['kd_d_gi']);
                $d_kppn->set_kd_d_gi_mas($val['kd_d_gi_mas']);
                $d_kppn->set_kd_d_stk($val['kd_d_stk']);
                $d_kppn->set_kd_d_stk_mas($val['kd_d_stk_mas']);
                $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
                $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
                $d_kppn->set_kd_d_retur($val['kd_d_retur']);
                $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
                $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
                $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

                $d_kppn->set_kd_d_gup($val['kd_d_gup']);
                $d_kppn->set_kd_d_gup_mas($val['kd_d_gup_mas']);
                $d_kppn->set_kd_d_kgs($val['kd_d_kgs']);
                $d_kppn->set_kd_d_kgs_mas($val['kd_d_kgs_mas']);
                $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
                $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

                $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
                $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

                $data[] = $d_kppn;
            }
        }

        return $data;
    }

    /*
     * mengambil Data KPPN, 
     * bisa difilter untuk 1 kppn dengan mengisi parameter @kppn
     */

    public function get_d_kppn($id = null, $limit = null, $batas = null) {
        if (!$id) {
            $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_user = " . Session::get('id_user') . " order by kd_d_waktu_isi desc LIMIT 1";
        } else {
            $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_user = " . $id . " order by kd_d_waktu_isi desc LIMIT 1";
        }

        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['kd_d_kppn']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl($val['kd_d_tgl']);

            $d_kppn->set_kd_d_in($val['kd_d_in']);
            $d_kppn->set_kd_d_in_mas($val['kd_d_in_mas']);
            $d_kppn->set_kd_d_konf($val['kd_d_konf']);
            $d_kppn->set_kd_d_konf_mas($val['kd_d_konf_mas']);
            $d_kppn->set_kd_d_dipa($val['kd_d_dipa']);
            $d_kppn->set_kd_d_dipa_mas($val['kd_d_dipa_mas']);

            $d_kppn->set_kd_d_gi($val['kd_d_gi']);
            $d_kppn->set_kd_d_gi_mas($val['kd_d_gi_mas']);
            $d_kppn->set_kd_d_stk($val['kd_d_stk']);
            $d_kppn->set_kd_d_stk_mas($val['kd_d_stk_mas']);
            $d_kppn->set_kd_d_tik($val['kd_d_tik']);
            $d_kppn->set_kd_d_tik_mas($val['kd_d_tik_mas']);
            $d_kppn->set_kd_d_retur($val['kd_d_retur']);
            $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
            $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
            $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

            $d_kppn->set_kd_d_gup($val['kd_d_gup']);
            $d_kppn->set_kd_d_gup_mas($val['kd_d_gup_mas']);
            $d_kppn->set_kd_d_kgs($val['kd_d_kgs']);
            $d_kppn->set_kd_d_kgs_mas($val['kd_d_kgs_mas']);
            $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
            $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);
            
            $d_kppn->set_kd_d_saldo1($val['kd_d_saldo1']);
            $d_kppn->set_kd_d_saldo_mas1($val['kd_d_saldo_mas1']);
            $d_kppn->set_kd_d_tip($val['kd_d_tip']);
            $d_kppn->set_kd_d_tip_mas($val['kd_d_tip_mas']);
            $d_kppn->set_kd_d_konversi1($val['kd_d_konversi1']);
            $d_kppn->set_kd_d_konversi_mas1($val['kd_d_konversi_mas1']);
            
            $d_kppn->set_kd_d_stnk($val['kd_d_stnk']);
            $d_kppn->set_kd_d_stnk_mas($val['kd_d_stnk_mas']);
            $d_kppn->set_kd_d_tib($val['kd_d_tib']);
            $d_kppn->set_kd_d_tib_mas($val['kd_d_tib_mas']);
            $d_kppn->set_kd_d_konversi2($val['kd_d_konversi2']);
            $d_kppn->set_kd_d_konversi_mas2($val['kd_d_konversi_mas2']);
            $d_kppn->set_kd_d_up($val['kd_d_up']);
            $d_kppn->set_kd_d_up_mas($val['kd_d_up_mas']);
            $d_kppn->set_kd_d_lsb($val['kd_d_lsb']);
            $d_kppn->set_kd_d_lsb_mas($val['kd_d_lsb_mas']);

            $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
            $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

            $data[] = $d_kppn;
        }

        return $data;
    }

    /*
     * tambah data Data KPPN
     * param array data array key=>value, nama kolom=>data
     */

    public function add_d_kppn() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_in' => $this->get_kd_d_in(),
            'kd_d_in_mas' => $this->get_kd_d_in_mas(),
            'kd_d_konf' => $this->get_kd_d_konf(),
            'kd_d_konf_mas' => $this->get_kd_d_konf_mas(),
            'kd_d_dipa' => $this->get_kd_d_dipa(),
            'kd_d_dipa_mas' => $this->get_kd_d_dipa_mas(),
            
            'kd_d_input_by' => $this->get_kd_d_input_by(),
            'kd_d_waktu_isi' => $this->get_kd_d_waktu_isi()
        );
        
        //var_dump($data);

        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);
    }
    
    public function add_d_pelaksanaan() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_in' => $this->get_kd_d_in(),
            'kd_d_in_mas' => $this->get_kd_d_in_mas(),
            'kd_d_konf' => $this->get_kd_d_konf(),
            'kd_d_konf_mas' => $this->get_kd_d_konf_mas(),
            
            'kd_d_input_by' => $this->get_kd_d_input_by(),
            'kd_d_waktu_isi' => $this->get_kd_d_waktu_isi()
        );
        
        //var_dump($data);

        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);
    }

    /*
     * update Data KPPN, id harus di set terlebih dahulu
     * param data array
     */

    public function update_d_kppn() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_in' => $this->get_kd_d_in(),
            'kd_d_in_mas' => $this->get_kd_d_in_mas(),
            'kd_d_konf' => $this->get_kd_d_konf(),
            'kd_d_konf_mas' => $this->get_kd_d_konf_mas(),
            
            'kd_d_dipa' => $this->get_kd_d_dipa(),
            'kd_d_dipa_mas' => $this->get_kd_d_dipa_mas(),
            'kd_d_up' => $this->get_kd_d_up(),
            'kd_d_up_mas' => $this->get_kd_d_up_mas(),
            'kd_d_gup' => $this->get_kd_d_gup(),
            'kd_d_gup_mas' => $this->get_kd_d_gup_mas(),
            'kd_d_gi' => $this->get_kd_d_gi(),
            'kd_d_gi_mas' => $this->get_kd_d_gi_mas(),
            'kd_d_lsb' => $this->get_kd_d_lsb(),
            'kd_d_lsb_mas' => $this->get_kd_d_lsb_mas(),
            'kd_d_kgs' => $this->get_kd_d_kgs(),
            'kd_d_kgs_mas' => $this->get_kd_d_kgs_mas(),
            'kd_d_stk' => $this->get_kd_d_stk(),
            'kd_d_stk_mas' => $this->get_kd_d_stk_mas(),
            'kd_d_stnk' => $this->get_kd_d_stnk(),
            'kd_d_stnk_mas' => $this->get_kd_d_stnk_mas(),
            'kd_d_tik' => $this->get_kd_d_tik(),
            'kd_d_tik_mas' => $this->get_kd_d_tik_mas(),
            'kd_d_tib' => $this->get_kd_d_tib(),
            'kd_d_tib_mas' => $this->get_kd_d_tib_mas(),
            'kd_d_tip' => $this->get_kd_d_tip(),
            'kd_d_tip_mas' => $this->get_kd_d_tip_mas(),
          
            
            'kd_d_input_by' => $this->get_kd_d_input_by(),
            'kd_d_waktu_isi' => $this->get_kd_d_waktu_isi()
        );
        $this->validate();
        if (!$this->get_valid()) {
            return false;
        }
        if (!is_array($data)) {
            return false;
        }
        $where = ' kd_d_user=' . $this->get_kd_d_user();
        return $this->db->update($this->_table, $data, $where);
    }

    /*
     * hapus Data KPPN, id harus di set terlebih dahulu
     */

    public function delete_d_kppn() {
        $where = ' kd_d_kppn=' . $this->get_kd_d_kppn();
        $this->db->delete($this->_table, $where);
    }

    /*
     * validasi server, untukmengecek pengisian
     */

    public function validate() {
        if ($this->get_kd_d_tgl() == "") {
            $this->_error .= "Tangal belum diinput!</br>";
            $this->_valid = FALSE;
        }
    }

    /*
     * getter
     */

    public function get_kd_d_kppn($where = null) {
        if (!is_null($where)) {
            $sql = "SELECT kd_d_kppn FROM '" . $this->_table . "' WHERE '" . $where . "'";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $this->set_kd_d_kppn($val['kd_d_kppn']);
            }
        }
        return $this->_kd_d_kppn;
    }

    public function get_kd_d_user() {
        return $this->_kd_d_user;
    }

    public function get_kd_d_tgl() {
        return $this->_kd_d_tgl;
    }

    public function get_kd_d_in() {
        return $this->_kd_d_in;
    }

    public function get_kd_d_in_mas() {
        return $this->_kd_d_in_mas;
    }

    public function get_kd_d_konf() {
        return $this->_kd_d_konf;
    }

    public function get_kd_d_konf_mas() {
        return $this->_kd_d_konf_mas;
    }

    public function get_kd_d_dipa() {
        return $this->_kd_d_dipa;
    }

    public function get_kd_d_dipa_mas() {
        return $this->_kd_d_dipa_mas;
    }

    public function get_kd_d_gi() {
        return $this->_kd_d_gi;
    }

    public function get_kd_d_gi_mas() {
        return $this->_kd_d_gi_mas;
    }

    public function get_kd_d_stk() {
        return $this->_kd_d_stk;
    }

    public function get_kd_d_stk_mas() {
        return $this->_kd_d_stk_mas;
    }

    public function get_kd_d_tik() {
        return $this->_kd_d_tik;
    }

    public function get_kd_d_tik_mas() {
        return $this->_kd_d_tik_mas;
    }

    public function get_kd_d_retur() {
        return $this->_kd_d_retur;
    }

    public function get_kd_d_retur_mas() {
        return $this->_kd_d_retur_mas;
    }

    public function get_kd_d_konversi() {
        return $this->_kd_d_konversi;
    }

    public function get_kd_d_konversi_mas() {
        return $this->_kd_d_konversi_mas;
    }

    public function get_kd_d_gup() {
        return $this->_kd_d_gup;
    }

    public function get_kd_d_gup_mas() {
        return $this->_kd_d_gup_mas;
    }

    public function get_kd_d_kgs() {
        return $this->_kd_d_kgs;
    }

    public function get_kd_d_kgs_mas() {
        return $this->_kd_d_kgs_mas;
    }
    
    

    public function get_kd_d_saldo1() {
        return $this->_kd_d_saldo1;
    }

    public function get_kd_d_saldo_mas1() {
        return $this->_kd_d_saldo_mas1;
    }

    public function get_kd_d_tip() {
        return $this->_kd_d_tip;
    }

    public function get_kd_d_tip_mas() {
        return $this->_kd_d_tip_mas;
    }

    public function get_kd_d_konversi1() {
        return $this->_kd_d_konversi1;
    }

    public function get_kd_d_konversi_mas1() {
        return $this->_kd_d_konversi_mas1;
    }
    
    

    public function get_kd_d_stnk() {
        return $this->_kd_d_stnk;
    }

    public function get_kd_d_stnk_mas() {
        return $this->_kd_d_stnk_mas;
    }

    public function get_kd_d_tib() {
        return $this->_kd_d_tib;
    }

    public function get_kd_d_tib_mas() {
        return $this->_kd_d_tib_mas;
    }

    public function get_kd_d_konversi2() {
        return $this->_kd_d_konversi2;
    }

    public function get_kd_d_konversi_mas2() {
        return $this->_kd_d_konversi_mas2;
    }

    public function get_kd_d_up() {
        return $this->_kd_d_up;
    }

    public function get_kd_d_up_mas() {
        return $this->_kd_d_up_mas;
    }

    public function get_kd_d_lsb() {
        return $this->_kd_d_lsb;
    }

    public function get_kd_d_lsb_mas() {
        return $this->_kd_d_lsb_mas;
    }
    

    public function get_kd_d_user_id() {
        return $this->_kd_d_user_id;
    }

    public function get_kd_d_user_id_mas() {
        return $this->_kd_d_user_id_mas;
    }

    public function get_kd_d_input_by() {
        return $this->_kd_d_input_by;
    }

    public function get_error() {
        return $this->_error;
    }

    public function get_valid() {
        return $this->_valid;
    }

    public function get_kd_d_waktu_isi() {
        return $this->_kd_d_waktu_isi;
    }

    /*
     * setter
     */

    public function set_kd_d_kppn($_kd_d_kppn) {
        $this->_kd_d_kppn = $_kd_d_kppn;
    }

    public function set_kd_d_user($_kd_d_user) {
        $this->_kd_d_user = $_kd_d_user;
    }

    public function set_kd_d_tgl($_kd_d_tgl) {
        $this->_kd_d_tgl = $_kd_d_tgl;
    }

    public function set_kd_d_in($_kd_d_in) {
        $this->_kd_d_in = $_kd_d_in;
    }

    public function set_kd_d_in_mas($_kd_d_in_mas) {
        $this->_kd_d_in_mas = $_kd_d_in_mas;
    }

    public function set_kd_d_konf($_kd_d_konf) {
        $this->_kd_d_konf = $_kd_d_konf;
    }

    public function set_kd_d_konf_mas($_kd_d_konf_mas) {
        $this->_kd_d_konf_mas = $_kd_d_konf_mas;
    }

    public function set_kd_d_dipa($_kd_d_dipa) {
        $this->_kd_d_dipa = $_kd_d_dipa;
    }

    public function set_kd_d_dipa_mas($_kd_d_dipa_mas) {
        $this->_kd_d_dipa_mas = $_kd_d_dipa_mas;
    }

    public function set_kd_d_gi($_kd_d_gi) {
        $this->_kd_d_gi = $_kd_d_gi;
    }

    public function set_kd_d_gi_mas($_kd_d_gi_mas) {
        $this->_kd_d_gi_mas = $_kd_d_gi_mas;
    }

    public function set_kd_d_stk($_kd_d_stk) {
        $this->_kd_d_stk = $_kd_d_stk;
    }

    public function set_kd_d_stk_mas($_kd_d_stk_mas) {
        $this->_kd_d_stk_mas = $_kd_d_stk_mas;
    }

    public function set_kd_d_tik($_kd_d_tik) {
        $this->_kd_d_tik = $_kd_d_tik;
    }

    public function set_kd_d_tik_mas($_kd_d_tik_mas) {
        $this->_kd_d_tik_mas = $_kd_d_tik_mas;
    }

    public function set_kd_d_retur($_kd_d_retur) {
        $this->_kd_d_retur = $_kd_d_retur;
    }

    public function set_kd_d_retur_mas($_kd_d_retur_mas) {
        $this->_kd_d_retur_mas = $_kd_d_retur_mas;
    }

    public function set_kd_d_konversi($_kd_d_konversi) {
        $this->_kd_d_konversi = $_kd_d_konversi;
    }

    public function set_kd_d_konversi_mas($_kd_d_konversi_mas) {
        $this->_kd_d_konversi_mas = $_kd_d_konversi_mas;
    }

    public function set_kd_d_gup($_kd_d_gup) {
        $this->_kd_d_gup = $_kd_d_gup;
    }

    public function set_kd_d_gup_mas($_kd_d_gup_mas) {
        $this->_kd_d_gup_mas = $_kd_d_gup_mas;
    }

    public function set_kd_d_kgs($_kd_d_kgs) {
        $this->_kd_d_kgs = $_kd_d_kgs;
    }

    public function set_kd_d_kgs_mas($_kd_d_kgs_mas) {
        $this->_kd_d_kgs_mas = $_kd_d_kgs_mas;
    }
    

    public function set_kd_d_saldo1($_kd_d_saldo1) {
        $this->_kd_d_saldo1 = $_kd_d_saldo1;
    }

    public function set_kd_d_saldo_mas1($_kd_d_saldo_mas1) {
        $this->_kd_d_saldo_mas1 = $_kd_d_saldo_mas1;
    }

    public function set_kd_d_tip($_kd_d_tip) {
        $this->_kd_d_tip = $_kd_d_tip;
    }

    public function set_kd_d_tip_mas($_kd_d_tip_mas) {
        $this->_kd_d_tip_mas = $_kd_d_tip_mas;
    }

    public function set_kd_d_konversi1($_kd_d_konversi1) {
        $this->_kd_d_konversi1 = $_kd_d_konversi1;
    }

    public function set_kd_d_konversi_mas1($_kd_d_konversi_mas1) {
        $this->_kd_d_konversi_mas1 = $_kd_d_konversi_mas1;
    }
    

    public function set_kd_d_stnk($_kd_d_stnk) {
        $this->_kd_d_stnk = $_kd_d_stnk;
    }

    public function set_kd_d_stnk_mas($_kd_d_stnk_mas) {
        $this->_kd_d_stnk_mas = $_kd_d_stnk_mas;
    }

    public function set_kd_d_tib($_kd_d_tib) {
        $this->_kd_d_tib = $_kd_d_tib;
    }

    public function set_kd_d_tib_mas($_kd_d_tib_mas) {
        $this->_kd_d_tib_mas = $_kd_d_tib_mas;
    }

    public function set_kd_d_konversi2($_kd_d_konversi2) {
        $this->_kd_d_konversi2 = $_kd_d_konversi2;
    }

    public function set_kd_d_konversi_mas2($_kd_d_konversi_mas2) {
        $this->_kd_d_konversi_mas2 = $_kd_d_konversi_mas2;
    }

    public function set_kd_d_up($_kd_d_up) {
        $this->_kd_d_up = $_kd_d_up;
    }

    public function set_kd_d_up_mas($_kd_d_up_mas) {
        $this->_kd_d_up_mas = $_kd_d_up_mas;
    }

    public function set_kd_d_lsb($_kd_d_lsb) {
        $this->_kd_d_lsb = $_kd_d_lsb;
    }

    public function set_kd_d_lsb_mas($_kd_d_lsb_mas) {
        $this->_kd_d_lsb_mas = $_kd_d_lsb_mas;
    }

    public function set_kd_d_user_id($_kd_d_user_id) {
        $this->_kd_d_user_id = $_kd_d_user_id;
    }

    public function set_kd_d_user_id_mas($_kd_d_user_id_mas) {
        $this->_kd_d_user_id_mas = $_kd_d_user_id_mas;
    }

    public function set_kd_d_input_by($_kd_d_input_by) {
        $this->_kd_d_input_by = $_kd_d_input_by;
    }

    public function set_error($_error) {
        $this->_error = $_error;
    }

    public function set_valid($_valid) {
        $this->_valid = $_valid;
    }

    public function set_kd_d_waktu_isi($_kd_d_waktu_isi) {
        $this->_kd_d_waktu_isi = $_kd_d_waktu_isi;
    }

    /*
     * destruktor
     */

    public function __destruct() {
        
    }

}
