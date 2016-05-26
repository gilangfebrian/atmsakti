<?php
foreach ($this->data as $val) {
    $kd_d_tgl = $val->get_kd_d_tgl();
    $kd_d_in = $val->get_kd_d_in();
    $kd_d_in_mas = $val->get_kd_d_in_mas();
    $kd_d_konf = $val->get_kd_d_konf();
    $kd_d_konf_mas = $val->get_kd_d_konf_mas();
    $kd_d_dipa = $val->get_kd_d_dipa();
    $kd_d_dipa_mas = $val->get_kd_d_dipa_mas();
    $kd_d_up = $val->get_kd_d_up();
    $kd_d_up_mas = $val->get_kd_d_up_mas();
    $kd_d_gup = $val->get_kd_d_gup();
    $kd_d_gup_mas = $val->get_kd_d_gup_mas();
    $kd_d_gi = $val->get_kd_d_gi();
    $kd_d_gi_mas = $val->get_kd_d_gi_mas();
    $kd_d_lsb = $val->get_kd_d_lsb();
    $kd_d_lsb_mas = $val->get_kd_d_lsb_mas();
    $kd_d_kgs = $val->get_kd_d_kgs();
    $kd_d_kgs_mas = $val->get_kd_d_kgs_mas();
    $kd_d_stk = $val->get_kd_d_stk();
    $kd_d_stk_mas = $val->get_kd_d_stk_mas();
    $kd_d_stnk = $val->get_kd_d_stnk();
    $kd_d_stnk_mas = $val->get_kd_d_stnk_mas();
    $kd_d_tik = $val->get_kd_d_tik();
    $kd_d_tik_mas = $val->get_kd_d_tik_mas();
    $kd_d_tib = $val->get_kd_d_tib();
    $kd_d_tib_mas = $val->get_kd_d_tib_mas();
    $kd_d_tip = $val->get_kd_d_tip();
    $kd_d_tip_mas = $val->get_kd_d_tip_mas();
    
    $all = $kd_d_in+$kd_d_konf+$kd_d_dipa+$kd_d_up+$kd_d_gup+$kd_d_gi+$kd_d_lsb+$kd_d_kgs+$kd_d_stk+$kd_d_stnk+$kd_d_tik+$kd_d_tib+$kd_d_tip;
    $all2 = 13;
    $all3 = $all2 -$all;
}
?>
<div id="header">
    <div id="kiri">
        <h2>FORM MONITORING TRAINING MANDIRI <?php echo Session::get('user'); ?></h2>
    </div>
    <div id="kanan">
        <canvas id="canvas" height="70" width="70" style="padding-left: 10px"></canvas>
        <h2 style="margin-top: -10px; margin-right: 10px" ><?php echo $all ?>/<?php echo $all2 ?></h2>
    </div>
</div><form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<br><br><br><br><br><br>
<label class="isian" style="margin-left: 150px">Tanggal</label>
<input type="text" name="kd_d_tgl" id="kd_d_tgl" size="20" value="<?php echo $kd_d_tgl; ?>" placeholder="Format : yyyy-mm-dd">
<div id="top">
        <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Monitoring Training Mandiri Aktivitas Kelas Supervisor</div><br>
        <input type=hidden name='kd_d_user' value="<?php echo Session::get('id_user'); ?>">
        <input type=hidden name='kd_d_input_by' value="<?php echo Session::get('id_user'); ?>">
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td width="30%"><label>Instalasi Aplikasi SAKTI 
: </label></td>
                <td width="10%"><select name="kd_d_in" id="kd_d_in">
                        <?php if ($kd_d_in == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_in_mas" id="kd_d_in_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_in_mas" id="kd_d_in_mas"><?php echo $kd_d_in_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <!--baris kedua-->
            <tr>
                <td><label>Konfigurasi Aplikasi SAKTI : </label></td>
                <td><select name="kd_d_konf" id="kd_d_konf" >
                        <?php if ($kd_d_konf == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konf_mas" id="kd_d_konf_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konf_mas" id="kd_d_konf_mas"><?php echo $kd_d_konf_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            
        </table>
        <div id="komponen2"><i class="icon-folder-open icon-white" id="label"></i>Monitoring Training Mandiri Aktivitas Kelas Pelaksanaan</div>
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td><label>Upload Data DIPA : </label></td>

                <td><select name="kd_d_dipa" id="kd_d_dipa">
                        <?php if ($kd_d_dipa == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dipa_mas" id="kd_d_dipa_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>

                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dipa_mas" id="kd_d_dipa_mas"><?php echo $kd_d_dipa_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Transaksi Siklus  UP
: </label></td>
                <td width="10%"><select name="kd_d_up" id="kd_d_up">
                        <?php if ($kd_d_up == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_up_mas" id="kd_d_up_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_up_mas" id="kd_d_up_mas"><?php echo $kd_d_up_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Siklus GUP
: </label></td>
                <td><select name="kd_d_gup" id="kd_d_gup" >
                        <?php if ($kd_d_gup == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_gup_mas" id="kd_d_gup_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_gup_mas" id="kd_d_gup_mas"><?php echo $kd_d_gup_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Siklus Gaji Induk
: </label></td>
                <td><select name="kd_d_gi" id="kd_d_gi" >
                        <?php if ($kd_d_gi == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_gi_mas" id="kd_d_gi_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_gi_mas" id="kd_d_gi_mas"><?php echo $kd_d_gi_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Siklus LS Bendahara
: </label></td>
                <td><select name="kd_d_lsb" id="kd_d_lsb" >
                        <?php if ($kd_d_lsb == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_lsb_mas" id="kd_d_lsb_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_lsb_mas" id="kd_d_lsb_mas"><?php echo $kd_d_lsb_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Siklus Kekurangan Gaji/Gaji Susulan
: </label></td>
                <td><select name="kd_d_kgs" id="kd_d_kgs">
                        <?php if ($kd_d_kgs == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kgs_mas" id="kd_d_kgs_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kgs_mas" id="kd_d_kgs_mas"><?php echo $kd_d_kgs_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Siklus Tranksi Kontrak 
: </label></td>
                    <td><select name="kd_d_stk" id="kd_d_stk">
                        <?php if ($kd_d_stk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_stk_mas" id="kd_d_stk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_stk_mas" id="kd_d_stk_mas"><?php echo $kd_d_stk_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Siklus Tranksi Non Kontrak
: </label></td>
                    <td><select name="kd_d_stnk" id="kd_d_stnk">
                        <?php if ($kd_d_stnk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_stnk_mas" id="kd_d_stnk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_stnk_mas" id="kd_d_stnk_mas"><?php echo $kd_d_kontrak_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Internal Komitmen 
: </label></td>
                    <td><select name="kd_d_tik" id="kd_d_tik">
                        <?php if ($kd_d_tik == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_tik_mas" id="kd_d_tik_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_tik_mas" id="kd_d_tik_mas"><?php echo $kd_d_tik_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Internal Bendahara 
: </label></td>
                    <td><select name="kd_d_tib" id="kd_d_tib">
                        <?php if ($kd_d_tib == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_tib_mas" id="kd_d_tib_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_tib_mas" id="kd_d_tib_mas"><?php echo $kd_d_tib_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Internal Pembayaran 
: </label></td>
                    <td><select name="kd_d_tip" id="kd_d_tip">
                        <?php if ($kd_d_tip == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_tip_mas" id="kd_d_tip_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_tip_mas" id="kd_d_tip_mas"><?php echo $kd_d_tip_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
		
    <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Monitoring Training Mandiri Aktivitas Kelas Pelaporan</div><br>
    <!--div id="komponen4"><i class="icon-folder-open icon-white" id="label"></i>Migrasi Data Transaski</div-->
        <table width="100%" class="zebra">
            
            <tr>
                <td><label>Setup Metode Pencatatan, Penilaian dan Kode Barang
: </label></td>
                <td><select name="kd_d_setup" id="kd_d_setup" >
                        <?php if ($kd_d_setup == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_setup_mas" id="kd_d_setup_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_setup_mas" id="kd_d_setup_mas"><?php echo $kd_d_setup_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Migrasi Data Persediaan Dari Aplikasi Eksisting 
: </label></td>
                <td><select name="kd_d_migrasip" id="kd_d_migrasip" >
                        <?php if ($kd_d_migrasip == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_migrasip_mas" id="kd_d_migrasip_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_migrasip_mas" id="kd_d_migrasip_mas"><?php echo $kd_d_migrasip_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pembuatan BAR Migrasi Saldo Awal
: </label></td>
                <td><select name="kd_d_barmsa" id="kd_d_barmsa">
                        <?php if ($kd_d_barmsa == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_barmsa_mas" id="kd_d_barmsa_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_barmsa_mas" id="kd_d_barmsa_mas"><?php echo $kd_d_barmsa_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pendetailan Modul Persediaan Dari Bendahara
: </label></td>
                <td><select name="kd_d_detailpb" id="kd_d_detailpb" >
                        <?php if ($kd_d_detailpb == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailpb_mas" id="kd_d_detailpb_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailpb_mas" id="kd_d_detailpb_mas"><?php echo $kd_d_detailpb_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pendetailan Modul Persediaan Dari Kontrak
: </label></td>
                <td><select name="kd_d_detailpk" id="kd_d_detailpk" >
                        <?php if ($kd_d_detailpk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailpk_mas" id="kd_d_detailpk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailpk_mas" id="kd_d_detailpk_mas"><?php echo $kd_d_detailpk_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pendetailan Modul Persediaan Dari Non Kontrak
: </label></td>
                <td><select name="kd_d_detailpnk" id="kd_d_detailpnk">
                        <?php if ($kd_d_detailpnk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailpnk_mas" id="kd_d_detailpnk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailpnk_mas" id="kd_d_detailpnk_mas"><?php echo $kd_d_detailpnk_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Pembukuan Persediaan (Average dan HST) 
: </label></td>
                    <td><select name="kd_d_pemb_per" id="kd_d_pemb_per">
                        <?php if ($kd_d_pemb_per == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_pemb_per_mas" id="kd_d_pemb_per_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_pemb_per_mas" id="kd_d_pemb_per_mas"><?php echo $kd_d_pemb_per_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Laporan Persediaan
: </label></td>
                    <td><select name="kd_d_lap_per" id="kd_d_lap_per">
                        <?php if ($kd_d_lap_per == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_lap_per_mas" id="kd_d_lap_per_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_lap_per_mas" id="kd_d_lap_per_mas"><?php echo $kd_d_lap_per_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Jurnal Modul Persediaan
: </label></td>
                    <td><select name="kd_d_jur_per" id="kd_d_jur_per">
                        <?php if ($kd_d_jur_per == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jur_per_mas" id="kd_d_jur_per_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jur_per_mas" id="kd_d_jur_per_mas"><?php echo $kd_d_jur_per_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Konsolidasi Ke Modul Aset Tetap
: </label></td>
                    <td><select name="kd_d_kons_aset" id="kd_d_kons_aset">
                        <?php if ($kd_d_kons_aset == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kons_aset_mas" id="kd_d_kons_aset_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kons_aset_mas" id="kd_d_kons_aset_mas"><?php echo $kd_d_kons_aset_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Migrasi data SIMAK-BMN ke Modul Aset Tetap
: </label></td>
                    <td><select name="kd_d_migrasi_bmn" id="kd_d_migrasi_bmn">
                        <?php if ($kd_d_migrasi_bmn == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_migrasi_bmn_mas" id="kd_d_migrasi_bmn_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_migrasi_bmn_mas" id="kd_d_migrasi_bmn_mas"><?php echo $kd_d_migrasi_bmn_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pembuatan BAR Migrasi Aset Tetap
: </label></td>
                    <td><select name="kd_d_bar_aset" id="kd_d_bar_aset">
                        <?php if ($kd_d_bar_aset == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_bar_aset_mas" id="kd_d_bar_aset_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_bar_aset_mas" id="kd_d_bar_aset_mas"><?php echo $kd_d_bar_aset_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pendetailan Modul Aset Tetap Dari Bendahara
: </label></td>
                    <td><select name="kd_d_detailatb" id="kd_d_detailatb">
                        <?php if ($kd_d_detailatb == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailatb_mas" id="kd_d_detailatb_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailatb_mas" id="kd_d_detailatb_mas"><?php echo $kd_d_detailatb_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pendetailan Modul Aset Tetap Dari Kontrak
: </label></td>
                    <td><select name="kd_d_detailatk" id="kd_d_detailatk">
                        <?php if ($kd_d_detailatk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailatk_mas" id="kd_d_detailatk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailatk_mas" id="kd_d_detailatk_mas"><?php echo $kd_d_detailatk_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pendetailan Modul Aset Tetap Dari Non Kontrak
: </label></td>
                    <td><select name="kd_d_detailatnk" id="kd_d_detailatnk">
                        <?php if ($kd_d_detailatnk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailatnk_mas" id="kd_d_detailatnk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_detailatnk_mas" id="kd_d_detailatnk_mas"><?php echo $kd_d_detailatnk_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Transaksi Modul Aset Tetap
: </label></td>
                    <td><select name="kd_d_trans_mat" id="kd_d_trans_mat">
                        <?php if ($kd_d_trans_mat == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_trans_mat_mas" id="kd_d_trans_mat_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_trans_mat_mas" id="kd_d_trans_mat_mas"><?php echo $kd_d_trans_mat_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Jurnal Modul Aset Tetap
: </label></td>
                    <td><select name="kd_d_jurnal_mat" id="kd_d_jurnal_mat">
                        <?php if ($kd_d_jurnal_mat == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mat_mas" id="kd_d_jurnal_mat_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mat_mas" id="kd_d_jurnal_mat_mas"><?php echo $kd_d_jurnal_mat_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pembuatan DBR, KIB
: </label></td>
                    <td><select name="kd_d_dbrkib" id="kd_d_dbrkib">
                        <?php if ($kd_d_dbrkib == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dbrkib_mas" id="kd_d_dbrkib_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dbrkib_mas" id="kd_d_dbrkib_mas"><?php echo $kd_d_dbrkib_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Penyusunan Laporan BMN
: </label></td>
                    <td><select name="kd_d_lap_bmn" id="kd_d_lap_bmn">
                        <?php if ($kd_d_lap_bmn == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_lap_bmn_mas" id="kd_d_lap_bmn_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_lap_bmn_mas" id="kd_d_lap_bmn_mas"><?php echo $kd_d_lap_bmn_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Konsilidasi Modul Aset Tetap
: </label></td>
                    <td><select name="kd_d_kons_mat" id="kd_d_kons_mat">
                        <?php if ($kd_d_kons_mat == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kons_mat_mas" id="kd_d_kons_mat_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kons_mat_mas" id="kd_d_kons_mat_mas"><?php echo $kd_d_kons_mat_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Migrasi Aplikasi SAIBA ke Modul GLP
: </label></td>
                    <td><select name="kd_d_migrasi_saiba" id="kd_d_migrasi_saiba">
                        <?php if ($kd_d_migrasi_saiba == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_migrasi_saiba_mas" id="kd_d_migrasi_saiba_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_migrasi_saiba_mas" id="kd_d_migrasi_saiba_mas"><?php echo $kd_d_migrasi_saiba_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pembuatan BAR Migrasi Saldo Awal
: </label></td>
                    <td><select name="kd_d_bar_msa1" id="kd_d_bar_msa1">
                        <?php if ($kd_d_bar_msa1 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_bar_msa1_mas" id="kd_d_bar_msa1_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_bar_msa1_mas" id="kd_d_bar_msa1_mas"><?php echo $kd_d_bar_msa1_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Pembuatan Berita Acara Cut Off Implementasi SAKTI
: </label></td>
                    <td><select name="kd_d_baco" id="kd_d_baco">
                        <?php if ($kd_d_baco == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_baco_mas" id="kd_d_baco_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_baco_mas" id="kd_d_baco_mas"><?php echo $kd_d_baco_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Jurnal Modul Anggaran
: </label></td>
                    <td><select name="kd_d_jurnal_ma" id="kd_d_jurnal_ma">
                        <?php if ($kd_d_jurnal_ma == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_ma_mas" id="kd_d_jurnal_ma_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_ma_mas" id="kd_d_jurnal_ma_mas"><?php echo $kd_d_jurnal_ma_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Jurnal Modul Komitmen
: </label></td>
                    <td><select name="kd_d_jurnal_mk" id="kd_d_jurnal_mk">
                        <?php if ($kd_d_jurnal_mk == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mk_mas" id="kd_d_jurnal_mk_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mk_mas" id="kd_d_jurnal_mk_mas"><?php echo $kd_d_jurnal_mk_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Jurnal Modul Bendahara
: </label></td>
                    <td><select name="kd_d_jurnal_mb" id="kd_d_jurnal_mb">
                        <?php if ($kd_d_jurnal_mb == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mb_mas" id="kd_d_jurnal_mb_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mb_mas" id="kd_d_jurnal_mb_mas"><?php echo $kd_d_jurnal_mb_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Proses Jurnal Modul Pembayaran
: </label></td>
                    <td><select name="kd_d_jurnal_mp" id="kd_d_jurnal_mp">
                        <?php if ($kd_d_jurnal_mp == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mp_mas" id="kd_d_jurnal_mp_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jurnal_mp_mas" id="kd_d_jurnal_mp_mas"><?php echo $kd_d_jurnal_mp_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
        
            <!--li><input class="normal" type="submit" onclick="" value="BATAL"></li-->
            <input class="biru" type="submit" name="add_d_kppn" value="SUBMIT" onclick="return ceklvl1();">
        
</div> <!--end top-->

<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "yy-mm-dd"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        }).datepicker("setDate", new Date());
    });
    
    all = <?php echo $all; ?> 
    all3 = <?php echo $all3; ?> 
    var donat = [
        {
            value: all3,
            color: "#E06666"
        },
        {
            value: all,
            color: "#70DB70"
        }


    ]

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(donat);
	
	$('#kd_d_in').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_in_mas').show();
    }else { 
        $('textarea' + '#kd_d_in_mas').hide();
    }
});

	$('#kd_d_konf').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konf_mas').show();
    }else { 
        $('textarea' + '#kd_d_konf_mas').hide();
    }
});

	$('#kd_d_data').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_data_mas').show();
    }else { 
        $('textarea' + '#kd_d_data_mas').hide();
    }
});
	$('#kd_d_dipa').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_dipa_mas').show();
    }else { 
        $('textarea' + '#kd_d_dipa_mas').hide();
    }
});
	$('#kd_d_up').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_up_mas').show();
    }else { 
        $('textarea' + '#kd_d_up_mas').hide();
    }
});
	$('#kd_d_gup').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_gup_mas').show();
    }else { 
        $('textarea' + '#kd_d_gup_mas').hide();
    }
});
	$('#kd_d_gi').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_gi_mas').show();
    }else { 
        $('textarea' + '#kd_d_gi_mas').hide();
    }
});
	$('#kd_d_lsb').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_lsb_mas').show();
    }else { 
        $('textarea' + '#kd_d_lsb_mas').hide();
    }
});
	$('#kd_d_kgs').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kgs_mas').show();
    }else { 
        $('textarea' + '#kd_d_kgs_mas').hide();
    }
});
	$('#kd_d_stk').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_stk_mas').show();
    }else { 
        $('textarea' + '#kd_d_stk_mas').hide();
    }
});
	$('#kd_d_stnk').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_stnk_mas').show();
    }else { 
        $('textarea' + '#kd_d_stnk_mas').hide();
    }
});
	$('#kd_d_tik').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_tik_mas').show();
    }else { 
        $('textarea' + '#kd_d_tik_mas').hide();
    }
});
	$('#kd_d_tib').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_tib_mas').show();
    }else { 
        $('textarea' + '#kd_d_tib_mas').hide();
    }
});
	$('#kd_d_tip').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_tip_mas').show();
    }else { 
        $('textarea' + '#kd_d_tip_mas').hide();
    }
});
	$('#kd_d_retur2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_retur_mas2').show();
    }else { 
        $('textarea' + '#kd_d_retur_mas2').hide();
    }
});
	$('#kd_d_konversi2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konversi_mas2').show();
    }else { 
        $('textarea' + '#kd_d_konversi_mas2').hide();
    }
});
	$('#kd_d_kontrak_tim2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_tim_mas2').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_tim_mas2').hide();
    }
});
	$('#kd_d_supplier_tim2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_supplier_tim_mas2').show();
    }else { 
        $('textarea' + '#kd_d_supplier_tim_mas2').hide();
    }
});
	
</script>


