

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="?page=buku&aksi=tambah" class="btn btn-info">Tambah Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Jumlah Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_buku");

                                            while ($data= $sql->fetch_assoc()) {


                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id'];?></td>
                                            <td><?php echo $data['judul'];?></td>
                                            <td><?php echo $data['pengarang'];?></td>
                                            <td><?php echo $data['penerbit'];?></td>
                                            <td><?php echo $data['isbn'];?></td>
                                            <td><?php echo $data['jumlah_buku'];?></td>
                                            <td>
                                                
                                                <a onclick="return confirm('Apakah Anda yakin Menghapus ?')" href="?page=buku&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Hapus Data </a>
                                            
                                            
                                                <a href="?page=buku&aksi=edit&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-edit">Update</i></a>
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>