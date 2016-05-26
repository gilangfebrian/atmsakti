<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataKppnController extends BaseController {
    /*
     * Konstruktor
     */

    public function __construct($registry) {
        parent::__construct($registry);
    }

    /*
     * Index
     */

    public function index() {
        
    }

    /*
     * view Data KPPN PER KANWIL
     */

    public function formIsian($id = null) { 
        $d_kppn = new DataKppn($this->registry);
        if (isset($_POST['add_d_kppn'])) {
            $kd_d_user = $_POST['kd_d_user'];
            $kd_d_tgl = $_POST['kd_d_tgl'];
            $kd_d_in = $_POST['kd_d_in'];
            $kd_d_in_mas = $_POST['kd_d_in_mas'];
            $kd_d_konf = $_POST['kd_d_konf'];
            $kd_d_konf_mas = $_POST['kd_d_konf_mas'];
            $kd_d_dipa = $_POST['kd_d_dipa'];
            $kd_d_dipa_mas = $_POST['kd_d_dipa_mas'];
            $kd_d_up = $_POST['kd_d_up'];
            $kd_d_up_mas = $_POST['kd_d_up_mas'];
            $kd_d_gup = $_POST['kd_d_gup'];
            $kd_d_gup_mas = $_POST['kd_d_gup_mas'];
            $kd_d_gi = $_POST['kd_d_gi'];
            $kd_d_gi_mas = $_POST['kd_d_gi_mas'];
            $kd_d_lsb = $_POST['kd_d_lsb'];
            $kd_d_lsb_mas = $_POST['kd_d_lsb_mas'];
            $kd_d_kgs = $_POST['kd_d_kgs'];
            $kd_d_kgs_mas = $_POST['kd_d_kgs_mas'];
            $kd_d_stk = $_POST['kd_d_stk'];
            $kd_d_stk_mas = $_POST['kd_d_stk_mas'];
            $kd_d_stnk = $_POST['kd_d_stnk'];
            $kd_d_stnk_mas = $_POST['kd_d_stnk_mas'];
            $kd_d_tik = $_POST['kd_d_tik'];
            $kd_d_tik_mas = $_POST['kd_d_tik_mas'];
            $kd_d_tik = $_POST['kd_d_tik'];
            $kd_d_tik_mas = $_POST['kd_d_tik_mas'];
            $kd_d_tib = $_POST['kd_d_tib'];
            $kd_d_tib_mas = $_POST['kd_d_tib_mas'];
            $kd_d_tip = $_POST['kd_d_tip'];
            $kd_d_tip_mas = $_POST['kd_d_tip_mas'];
            
            $kd_d_input_by = $_POST['kd_d_input_by'];

            $d_kppn->set_kd_d_user($kd_d_user);
            $d_kppn->set_kd_d_tgl($kd_d_tgl);
            $d_kppn->set_kd_d_in($kd_d_in);
            $d_kppn->set_kd_d_in_mas($kd_d_in_mas);
            $d_kppn->set_kd_d_konf($kd_d_konf);
            $d_kppn->set_kd_d_konf_mas($kd_d_konf_mas);
            $d_kppn->set_kd_d_dipa($kd_d_dipa);
            $d_kppn->set_kd_d_dipa_mas($kd_d_dipa_mas);
            $d_kppn->set_kd_d_up($kd_d_up);
            $d_kppn->set_kd_d_up_mas($kd_d_up_mas);
            $d_kppn->set_kd_d_gup($kd_d_gup);
            $d_kppn->set_kd_d_gup_mas($kd_d_gup_mas);
            $d_kppn->set_kd_d_gi($kd_d_gi);
            $d_kppn->set_kd_d_gi_mas($kd_d_gi_mas);
            $d_kppn->set_kd_d_lsb($kd_d_lsb);
            $d_kppn->set_kd_d_lsb_mas($kd_d_lsb_mas);
            $d_kppn->set_kd_d_kgs($kd_d_kgs);
            $d_kppn->set_kd_d_kgs_mas($kd_d_kgs_mas);
            $d_kppn->set_kd_d_stk($kd_d_stk);
            $d_kppn->set_kd_d_stk_mas($kd_d_stk_mas);
            $d_kppn->set_kd_d_stnk($kd_d_stnk);
            $d_kppn->set_kd_d_stnk_mas($kd_d_stnk_mas);
            $d_kppn->set_kd_d_tik($kd_d_tik);
            $d_kppn->set_kd_d_tik_mas($kd_d_tik_mas);
            $d_kppn->set_kd_d_tib($kd_d_tib);
            $d_kppn->set_kd_d_tib_mas($kd_d_tib_mas);
            $d_kppn->set_kd_d_tip($kd_d_tip);
            $d_kppn->set_kd_d_tip_mas($kd_d_tip_mas);
            
            $d_kppn->set_kd_d_input_by($kd_d_input_by);
            //var_dump($d_kppn);

            if (!$d_kppn->update_d_kppn()) {

                $this->view->error = $d_kppn->get_error();
            }
        }

        $this->view->data = $d_kppn->get_d_kppn($id);
        if (Session::get('role') == 'kppn') {
            $this->view->render('kppn/isianKppn');
        } elseif (Session::get('role') == 'kanwil') {
            $this->view->render('kppn/isianKanwil');
        } elseif (Session::get('role') == 'admin') {
            $this->view->render('kppn/isianSpan');
        }
    }
    
    public function formPelaksanaan($id = null) { 
        $d_kppn = new DataKppn($this->registry);
        if (isset($_POST['add_d_kppn'])) {
            $kd_d_user = $_POST['kd_d_user'];
            $kd_d_tgl = $_POST['kd_d_tgl'];
            $kd_d_dipa = $_POST['kd_d_dipa'];
            $kd_d_dipa_mas = $_POST['kd_d_dipa_mas'];
            $kd_d_up = $_POST['kd_d_up'];
            $kd_d_up_mas = $_POST['kd_d_up_mas'];
            $kd_d_gup = $_POST['kd_d_gup'];
            $kd_d_gup_mas = $_POST['kd_d_gup_mas'];
            $kd_d_gi = $_POST['kd_d_gi'];
            $kd_d_gi_mas = $_POST['kd_d_gi_mas'];
            $kd_d_lsb = $_POST['kd_d_lsb'];
            $kd_d_lsb_mas = $_POST['kd_d_lsb_mas'];
            $kd_d_kgs = $_POST['kd_d_kgs'];
            $kd_d_kgs_mas = $_POST['kd_d_kgs_mas'];
            $kd_d_stk = $_POST['kd_d_stk'];
            $kd_d_stk_mas = $_POST['kd_d_stk_mas'];
            $kd_d_stnk = $_POST['kd_d_stnk'];
            $kd_d_stnk_mas = $_POST['kd_d_stnk_mas'];
            $kd_d_tik = $_POST['kd_d_tik'];
            $kd_d_tik_mas = $_POST['kd_d_tik_mas'];
            $kd_d_tib = $_POST['kd_d_tib'];
            $kd_d_tib_mas = $_POST['kd_d_tib_mas'];
            $kd_d_tip = $_POST['kd_d_tip'];
            $kd_d_tip_mas = $_POST['kd_d_tip_mas'];
            
            $kd_d_input_by = $_POST['kd_d_input_by'];

            $d_kppn->set_kd_d_user($kd_d_user);
            $d_kppn->set_kd_d_tgl($kd_d_tgl);
            $d_kppn->set_kd_d_dipa($kd_d_dipa);
            $d_kppn->set_kd_d_dipa_mas($kd_d_dipa_mas);
            $d_kppn->set_kd_d_up($kd_d_up);
            $d_kppn->set_kd_d_up_mas($kd_d_up_mas);
            $d_kppn->set_kd_d_gup($kd_d_gup);
            $d_kppn->set_kd_d_gup_mas($kd_d_gup_mas);
            $d_kppn->set_kd_d_gi($kd_d_gi);
            $d_kppn->set_kd_d_gi_mas($kd_d_gi_mas);
            $d_kppn->set_kd_d_lsb($kd_d_lsb);
            $d_kppn->set_kd_d_lsb_mas($kd_d_lsb_mas);
            $d_kppn->set_kd_d_kgs($kd_d_kgs);
            $d_kppn->set_kd_d_kgs_mas($kd_d_kgs_mas);
            $d_kppn->set_kd_d_stk($kd_d_stk);
            $d_kppn->set_kd_d_stk_mas($kd_d_stk_mas);
            $d_kppn->set_kd_d_stnk($kd_d_stnk);
            $d_kppn->set_kd_d_stnk_mas($kd_d_stnk_mas);
            
            $d_kppn->set_kd_d_input_by($kd_d_input_by);
            //var_dump($d_kppn);

            if (!$d_kppn->update_d_kppn()) {

                $this->view->error = $d_kppn->get_error();
            }
        }

        $this->view->data = $d_kppn->get_d_kppn($id);
        if (Session::get('role') == 'kppn') {
            $this->view->render('kppn/isianPelaksanaan');
        } elseif (Session::get('role') == 'kanwil') {
            $this->view->render('kppn/isianPelaksanaan');
        } elseif (Session::get('role') == 'admin') {
            $this->view->render('kppn/isianSpan');
        }
    }

    public function rekapKppn() {
        $d_kppn = new DataKppn($this->registry);
        $this->view->data = $d_kppn->get_d_kppn_all();
        $this->view->render('kppn/hasilKppn');
    }

    public function rekapAll($id = null) {
        $d_kppn = new DataKppn($this->registry);
        $this->view->data_kanwil = $d_kppn->get_nama_kanwil_all($id);
        $this->view->data = $d_kppn->get_d_kppn_per_kanwil($id);
        $this->view->render('kppn/Lvl1');
    }

    public function lihatReferensiInfrastuktur() {
        $this->view->render('kppn/referensiInfrastruktur');
    }
	
	public function lihatReferensiBukuPanduan() {
        $this->view->render('kppn/referensiBukuPanduan');
    }
	
	public function unduhBA() {
        $this->view->render('kppn/referensiBA');
    }
	
	public function unduhCeklist() {
        $this->view->render('kppn/unduhCeklist');
    }
	
	public function PMK223() {
        $this->view->render('kppn/PMK223');
    }
	
	public function S3796() {
        $this->view->render('kppn/S3796');
    }
	
	public function S3846() {
        $this->view->render('kppn/S3846');
    }
	
	public function bukuPintar() {
        $this->view->render('kppn/bukuPintar');
    }
	
	public function panduanInstalasi() {
        $this->view->render('kppn/panduanInstalasi');
    }
	
	public function rekapMasalah() {
        $d_kppn = new DataKppn($this->registry);
        $this->view->data = $d_kppn->get_d_kppn_all();
		$this->view->render('kppn/rekapMasalah');
    }

    public function upload($tipe_dokumen) {
        if(isset($_FILES["fileToUpload"])){
            $target_dir = "././upload/".$tipe_dokumen."/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $name_file = $target_dir . $tipe_dokumen."_".Session::get('user')."_".date('dmY').".pdf";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            // Check if file already exists
            /*if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }*/
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 50000000) {
                $this->view->whyerror = "File Anda terlalu besar. File maksimal 50M.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "pdf" ) {
                $this->view->whyerror = "Hanya file bertipe PDF files yang bisa di-upload.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $this->view->error = "File tidak dapat di-upload.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $name_file)) {
                    $this->view->ok = "File ". basename( $_FILES["fileToUpload"]["name"]). " telah berhasil di-uplaod.";
                } else {
                    $this->view->error = "Terdapat error saat upload file Anda, silakan ulangi kembali.";
                }
            }

        }
		if($tipe_dokumen == "persediaan"){
		  $this->view->tipe_dokumen = "BA MIGRASI PERSEDIAAN";
		}elseif($tipe_dokumen == "aset_tetap"){
		  $this->view->tipe_dokumen = "BA MIGRASI ASET TETAP";
		}elseif($tipe_dokumen == "saiba"){
		  $this->view->tipe_dokumen = "BA BUKU BESAR NERACA";
		}elseif($tipe_dokumen == "cut_off"){
		  $this->view->tipe_dokumen = "BA DATA CUT_OFF KONVERSI<br> HARIAN TRANSAKSI";
		}elseif($tipe_dokumen == "checklist"){
		  $this->view->tipe_dokumen = "CHECKLIST PENDAMPINGAN";  
		} else {
            $this->view->tipe_dokumen = "";
        }
		
        $this->view->render('kppn/uploadForm');
    }

    public function __destruct() {
        
    }

}
