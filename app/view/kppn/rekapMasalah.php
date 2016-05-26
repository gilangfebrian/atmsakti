<h2>REKAP MASALAH</h2>

<div id="top">
        <?php
        $no = 1;
        ?>
        <table width="95%" class="table-bordered zebra" style="margin-left: 20px">
            <thead>
                <tr>
                    <th width="2%" >No</th>
                    <th width="13%">Kantor</th>
                    <th width="17%">Infrastruktur</th>
                    <th width="17%">Penyiapan Data Awal</th>
                    <th width="17%">Migrasi Data Awal</th>
                    <th width="17%">Migrasi Data Transaksi</th>
                    <th width="17%">Penyiapan Data Transaksi</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 1000) {
                    ?><tr>
                        <td style="text-align: right"><?php echo $no++; ?></td>
                        <td><?php echo $val->get_kd_d_kppn(); ?></td>
                        <td><?php 
							if ($val->get_kd_d_pc_mas() != "" && $val->get_kd_d_pc() != 1) { 
							echo "<b>Masalah 11: </b>"; echo $val->get_kd_d_pc_mas(); echo "<br>"; }
							if ($val->get_kd_d_laser_mas() != "" && $val->get_kd_d_laser() != 1) { 
							echo "<b>Masalah 12: </b>"; echo $val->get_kd_d_laser_mas(); echo "<br>"; }
							?> 
						</td>
                        <td><?php
							if ($val->get_kd_d_dot_mas() != "" && $val->get_kd_d_dot() != 1) { 
							echo "<b>Masalah 21: </b>"; echo $val->get_kd_d_dot_mas(); echo "<br>"; }
							if ($val->get_kd_d_supplier_mas() != "" && $val->get_kd_d_supplier() != 1) { 
							echo "<b>Masalah 22: </b>"; echo $val->get_kd_d_supplier_mas(); echo "<br>"; }
							if ($val->get_kd_d_kontrak_mas() != "" && $val->get_kd_d_kontrak() != 1) { 
							echo "<b>Masalah 23: </b>"; echo $val->get_kd_d_kontrak_mas(); echo "<br>"; }
							
						?>
						</td>
                        <td><?php
							if ($val->get_kd_d_saldo_mas() != "" && $val->get_kd_d_saldo() != 1) { 
							echo "<b>Masalah 31: </b>"; echo $val->get_kd_d_saldo_mas(); echo "<br>"; }
							if ($val->get_kd_d_retur_mas() != "" && $val->get_kd_d_retur() != 1) { 
							echo "<b>Masalah 32: </b>"; echo $val->get_kd_d_retur_mas(); echo "<br>"; }
							if ($val->get_kd_d_konversi_mas() != "" && $val->get_kd_d_konversi() != 1) { 
							echo "<b>Masalah 33: </b>"; echo $val->get_kd_d_konversi_mas(); echo "<br>"; }
							if ($val->get_kd_d_supplier_tim_mas() != "" && $val->get_kd_d_supplier_tim() != 1) { 
							echo "<b>Masalah 34: </b>"; echo $val->get_kd_d_supplier_tim_mas(); echo "<br>"; }
							if ($val->get_kd_d_kontrak_tim_mas() != "" && $val->get_kd_d_kontrak_tim() != 1) { 
							echo "<b>Masalah 35: </b>"; echo $val->get_kd_d_kontrak_tim_mas(); echo "<br>"; }
							if ($val->get_kd_d_user_id_mas() != "" && $val->get_kd_d_user_id() != 1) { 
							echo "<b>Masalah 36: </b>"; echo $val->get_kd_d_user_id_mas(); echo "<br>"; }
						?>
						</td>
                        <td><?php
							if ($val->get_kd_d_saldo_mas1() != "" && $val->get_kd_d_saldo1() != 1) { 
							echo "<b>Masalah 41: </b>"; echo $val->get_kd_d_saldo_mas1(); echo "<br>"; }
							if ($val->get_kd_d_retur_mas1() != "" && $val->get_kd_d_retur1() != 1) { 
							echo "<b>Masalah 42: </b>"; echo $val->get_kd_d_retur_mas1(); echo "<br>"; }
							if ($val->get_kd_d_konversi_mas1() != "" && $val->get_kd_d_konversi1() != 1) { 
							echo "<b>Masalah 43: </b>"; echo $val->get_kd_d_konversi_mas1(); echo "<br>"; }
						?>
						</td>
                        <td><?php
							if ($val->get_kd_d_saldo_mas2() != "" && $val->get_kd_d_saldo2() != 1) { 
							echo "<b>Masalah 51: </b>"; echo $val->get_kd_d_saldo_mas2(); echo "<br>"; }
							if ($val->get_kd_d_retur_mas2() != "" && $val->get_kd_d_retur2() != 1) { 
							echo "<b>Masalah 52: </b>"; echo $val->get_kd_d_retur_mas2(); echo "<br>"; }
							if ($val->get_kd_d_konversi_mas2() != "" && $val->get_kd_d_konversi2() != 1) { 
							echo "<b>Masalah 53: </b>"; echo $val->get_kd_d_konversi_mas2(); echo "<br>"; }
							if ($val->get_kd_d_supplier_tim_mas2() != "" && $val->get_kd_d_supplier_tim2() != 1) { 
							echo "<b>Masalah 54: </b>"; echo $val->get_kd_d_supplier_tim_mas2(); echo "<br>"; }
							if ($val->get_kd_d_kontrak_tim_mas2() != "" && $val->get_kd_d_kontrak_tim2() != 1) { 
							echo "<b>Masalah 55: </b>"; echo $val->get_kd_d_kontrak_tim_mas2(); echo "<br>"; }
						?>
						</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
 
</div>


