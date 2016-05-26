<?php
foreach ($this->data as $val) {
    $kd_d_tgl = $val->get_kd_d_tgl();
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
    
    $all = $kd_d_in+$kd_d_konf;
    $all2 = 11;
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
                        <?php if ($kd_d_retur == 1) {
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
        $('textarea' + '#kd_d_dipa_mas').show();
    }else { 
        $('textarea' + '#kd_d_dipa_mas').hide();
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
	$('#kd_d_supplier').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_supplier_mas').show();
    }else { 
        $('textarea' + '#kd_d_supplier_mas').hide();
    }
});
	$('#kd_d_kontrak').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_mas').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_mas').hide();
    }
});
	$('#kd_d_saldo').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_saldo_mas').show();
    }else { 
        $('textarea' + '#kd_d_saldo_mas').hide();
    }
});
	$('#kd_d_retur').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_retur_mas').show();
    }else { 
        $('textarea' + '#kd_d_retur_mas').hide();
    }
});
	$('#kd_d_konversi').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konversi_mas').show();
    }else { 
        $('textarea' + '#kd_d_konversi_mas').hide();
    }
});
	$('#kd_d_supplier_tim').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_supplier_tim_mas').show();
    }else { 
        $('textarea' + '#kd_d_supplier_tim_mas').hide();
    }
});
	$('#kd_d_kontrak_tim').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_tim_mas').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_tim_mas').hide();
    }
});
	$('#kd_d_saldo1').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_saldo_mas1').show();
    }else { 
        $('textarea' + '#kd_d_saldo_mas1').hide();
    }
});
	$('#kd_d_retur1').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_retur_mas1').show();
    }else { 
        $('textarea' + '#kd_d_retur_mas1').hide();
    }
});
	$('#kd_d_konversi1').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konversi_mas1').show();
    }else { 
        $('textarea' + '#kd_d_konversi_mas1').hide();
    }
});
	$('#kd_d_saldo2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_saldo_mas2').show();
    }else { 
        $('textarea' + '#kd_d_saldo_mas2').hide();
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


