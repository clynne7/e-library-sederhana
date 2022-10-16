<?php
	
	$tgl_pinjam = date("d-m-Y");
	$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
	$kembali = date("d-m-Y", $tujuh_hari)
?>
<div class="panel panel-default">
                  <div class="panel-heading">
                  <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Isi Data</h3>
                                    <form method="POST" onsubmit="return validasi(this)">
                                    	

                                    	<div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="id" />
                                        </div>


                                    	<div class="form-group">
                                            <label>Judul Buku</label>
                                            <select class="form-control" name="judul" />
                                            <?php

                                            $sql = $koneksi->query("select * from tb_buku order by id");
                                            while ($data=$sql->fetch_assoc()) {
                                            	echo "<option value='$data[judul]'>$data[judul]</option>";
                                            	# code...
                                            }

                                            ?>
                                        </select>
                                        </div>


                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>

                                         <div class="form-group">
                                            <label>NIM</label>
                                            <input class="form-control" name="nim" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tgl_pinjam" id="tgl" value="<?php echo $tgl_pinjam; ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="text" name="tgl_kembali" id="tgl" value="<?php echo $kembali; ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" type="text" name="status" id="tgl" value="<?php echo "Pinjam"; ?>" readonly />
                                        </div>

                                         
                                        <div>
                                        	<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                    </form>


<?php
									
									
                                    $id = $_POST ['id'];
                                    $judul = $_POST ['judul'];
                                    $nim = $_POST ['nim'];
                                    $nama = $_POST ['nama'];
                                    $tgl_pinjam = $_POST ['tgl_pinjam'];
                                    $tgl_kembali = $_POST ['tgl_kembali'];
                                    $status = $_POST ['status'];
                                    $pecah_judul = explode(",", $judul);
                                    $id = $pecah_judul[0];

                                    $simpan = $_POST ['simpan'];

                                    if ($simpan) {

                                    	$sql1 = $koneksi->query("insert into tb_transaksi (id, judul, nim, nama, tgl_pinjam, tgl_kembali, status )
                                    		values('$id', '$judul', '$nim', '$nama', '$tgl_pinjam', '$tgl_kembali', '$status')");

                                    	$jumlah = $jumlah_buku-1;
                                    	$update = $koneksi->query("update tb_buku set jumlah_buku= '$jumlah' where id='$id'" ); 
                                    }
                                    if ($sql1) {
                                    	?>
                                    	<script type="text/javascript">
                                    		alert ("Data berhasil ditambah ");
                                    		window.location.href="index.php?page=transaksi";
                                    	</script>
                                    	<?php
                                    	?>
                                    	
                                    	<?php
                                    }


                                    ?>
									
								
										

                                    


                                      



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 