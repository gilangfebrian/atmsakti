<h2>REKAP PERSIAPAN PILOTING</h2>

<div id="top">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        $no = 1;
        ?>
        <table width="100%" class="table-bordered zebra">
            <thead>
                <tr >
                    <th rowspan="2" width="5%" >No</th>
                    <th rowspan="2" width="21%" style="border-right: 2px solid #7a7a7a">Kantor</th>
                    <th colspan="2" width="18%" style="border-right: 2px solid #7a7a7a">Jaringan</th>
                    <th colspan="3" width="30%" style="border-right: 2px solid #7a7a7a">Penyiapan Data Awal</th>
                    <th colspan="6" width="18%" style="border-right: 2px solid #7a7a7a">Migrasi Data Awal</th>
                    <th colspan="3" width="18%" style="border-right: 2px solid #7a7a7a">Migrasi Data Transaksi</th>
                    <th colspan="5" width="18%" style="border-right: 2px solid #7a7a7a">Penyiapan Transaksi Awal</th>
                    <th rowspan="2" width="8%">Update</th>
                    <th rowspan="2" width="8%">TOTAL</th>
                </tr>
                <tr>
                    <th width="6%">1</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">2</th>
                    <th width="6%">3</th>
                    <th width="6%">4</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">5</th>
                    <th width="6%">6</th>
                    <th width="6%">7</th>
                    <th width="6%">8</th>
                    <th width="6%">9</th>
                    <th width="6%">10</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">11</th>
                    <th width="6%">12</th>
                    <th width="6%">13</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">14</th>
                    <th width="6%">15</th>
                    <th width="6%">16</th>
                    <th width="6%">17</th>
                    <th width="6%">18</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">19</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 1000) {
                    ?><tr style="text-align: center">
                        <td><?php echo $no++; ?></td>
                        <td style="text-align: left; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_d_kppn(); ?>
                        </td>
                        <td><?php
                            if ($val->get_kd_d_pc() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_laser() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove' ></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_dot() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_supplier() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_kontrak() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_saldo() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_retur() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_konversi() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_supplier_tim() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_kontrak_tim() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_user_id() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td><td><?php
                            if ($val->get_kd_d_saldo1() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_retur1() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_konversi1() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_saldo2() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_retur2() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_konversi2() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_supplier_tim2() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_kontrak_tim2() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            echo date("d/m/Y", strtotime($val->get_kd_d_waktu_isi()));
                            ?></td>
                        <td><?php
                            if (($val->get_kd_d_pc() + $val->get_kd_d_laser() + $val->get_kd_d_dot() + $val->get_kd_d_supplier() + $val->get_kd_d_kontrak() + $val->get_kd_d_saldo() + $val->get_kd_d_retur() + $val->get_kd_d_konversi() + $val->get_kd_d_supplier_tim() + $val->get_kd_d_kontrak_tim() + $val->get_kd_d_user_id()) == 11) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<a class='tomboltdk'><icon class='icon-remove icon-white'></icon></a>";
                            }
                            ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>
</div>


