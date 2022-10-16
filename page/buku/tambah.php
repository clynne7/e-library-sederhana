<div class="panel panel-default">
                  <div class="panel-heading">
                  <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Tambahkan Data</h3>
                                    <form method="POST">
                                    	<div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="id" />
                                        </div>

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                            	<?php 

                                            	$tahun = date("Y");

                                            	for ($i=$tahun-30; $i <= $tahun; $i++){
                                            		echo '
                                            		<option value="'.$i.'">'.$i.'</option>
                                            		';
                                            	}
                                            	?>
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah_buku" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tgl_input" />
                                        </div>
                                        <div>
                                        	<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                    </form>


                                    <?php

                                    $id = $_POST ['id'];
                                    $judul = $_POST ['judul'];
                                    $pengarang = $_POST ['pengarang'];
                                    $penerbit = $_POST ['penerbit'];
                                    $tahun_terbit = $_POST ['tahun_terbit'];
                                    $isbn = $_POST ['isbn'];
                                    $jumlah_buku = $_POST ['jumlah_buku'];
                                    $tgl_input = $_POST ['tgl_input'];

                                    $simpan = $_POST ['simpan'];

                                    if ($simpan) {
                                    	$sql = $koneksi->query("insert into tb_buku (id, judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, tgl_input )
                                    		values('$id', '$judul', '$pengarang', '$penerbit', '$tahun_terbit', '$isbn', '$jumlah_buku', '$tgl_input')");
                                    }
                                    if ($sql) {
                                    	?>
                                    	<script type="text/javascript">
                                    		alert ("Data berhasil ditambah ");
                                    		window.location.href="index.php?page=buku";
                                    	</script>
                                    	<?php
                                    }


                                    ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 