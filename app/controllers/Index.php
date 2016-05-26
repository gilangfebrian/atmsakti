<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Index extends BaseController {

    public function __construct($registry) {
        parent::__construct($registry);
    }

    public function index() {
        //echo Session::get('role');
        if (Session::get('role') == ADMIN) {
            header('location:' . URL . 'dataKppn/rekapKppn');
        } elseif (Session::get('role') == KPPN) {
            header('location:' . URL . 'dataKppn/formIsian');
        } elseif (Session::get('role') == KANWIL) {
            header('location:' . URL . 'dataKppn/formIsian');
        } else {
            header('location:' . URL . 'auth/login');
        }
    }

}
