<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">KELOLA DATA SENJATA API</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Senjata Api yang Tersedia
                                    <a data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH</a>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <style type="text/css">
                                        tr th, tr td {text-align: center;}
                                    </style>
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Jenis</th>
                                                <th>Merk</th>
                                                <th>Kaliber</th>
                                                <th>Jumlah</th>
                                                <th>Kondisi</th>
                                                <th>Keterangan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($senpi as $row): ?>
                                            <tr>
                                                <td><?= $row->no_senpi ?></td>
                                                <td><?= $row->jenis ?></td>
                                                <td><?= $row->merk ?></td>
                                                <td><?= $row->kaliber ?></td>
                                                <td><?= $row->jumlah ?></td>
                                                <td><?= $row->kondisi ?></td>
                                                <td><?= $row->keterangan ?></td>
                                                <td>
                                                  <button data-toggle="modal" data-target="#edit" class="btn btn-primary btn-sm" onclick="get_edit(<?= $row->no_senpi ?>)"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-sm" onclick="deleteData(<?= $row->no_senpi ?>)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                            <!-- Modal -->
                            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                                        </div>
                                      <?=form_open('admin-gudang/senpi')?>
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label>Jenis</label>
                                            <input class="form-control" type="text" name="jenis" required="true">
                                          </div>
                                          <div class="form-group">
                                            <label>Merk</label>
                                            <input class="form-control" type="text" name="merk" required="true">
                                          </div>
                                          <div class="form-group">
                                            <label>Kaliber</label>
                                            <input class="form-control" type="text" name="kaliber" required="true">
                                          </div>
                                          <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" required="true">
                                            <p class="help-block">Jumlah data masuk.</p>
                                          </div>
                                          <div class="form-group">
                                            <label>Kondisi</label>
                                            <select class="form-control" name="kondisi">
                                                <option>Baik</option>
                                                <option>Kurang Baik</option>
                                                <option>Rusak</option>
                                            </select>
                                        </div>
                                          <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" type="text" name="keterangan" required="true">
                                            <p class="help-block">Keterangan</p>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input type="submit" class="btn btn-primary" name="add" value="Simpan">
                                        </div>
                                      <?=form_close();?>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                                        </div>
                                      <?=form_open('admin-gudang/senpi')?>
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label>Jenis</label>
                                            <input class="form-control" id="edit_jenis" type="text" name="jenis" required="true">
                                          </div>
                                          <div class="form-group">
                                            <label>Merk</label>
                                            <input class="form-control" type="text" id="edit_merk" name="merk" required="true">
                                          </div>
                                          <div class="form-group">
                                            <label>Kaliber</label>
                                            <input class="form-control" type="text" id="edit_kaliber" name="kaliber" required="true">
                                          </div>
                                          <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" id="edit_jumlah" name="jumlah" required="true">
                                            <p class="help-block">Jumlah data masuk.</p>
                                          </div>
                                          <div class="form-group">
                                            <label>Kondisi</label>
                                            <input class="form-control" type="text" id="edit_kondisi" name="kondisi" required="true">
                                            <p class="help-block">Contoh: Baik, Kurang Baik.</p>
                                          </div>
                                          <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" type="text" id="edit_keterangan" name="keterangan" required="true">
                                            <p class="help-block">Keterangan</p>
                                          </div>
                                          <input type="hidden" id="no_senpi" name="no_senpi">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <input type="submit" class="btn btn-primary" name="edit" value="Simpan">
                                        </div>
                                      <?=form_close();?>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

            <script type="text/javascript">

               function get_edit(id) {
                    $.ajax({
                        url: '<?= base_url('admin-gudang/senpi') ?>',
                        type: 'POST',
                        data: {
                            id: id,
                            get: true
                        },
                        success: function(response) {
                            response = JSON.parse(response);
                            $('#no_senpi').val(response.no_senpi);
                            $('#edit_merk').val(response.merk);
                            $('#edit_jenis').val(response.jenis);
                            $('#edit_jumlah').val(response.jumlah);
                            $('#edit_kaliber').val(response.kaliber);
                            $('#edit_kondisi').val(response.kondisi);
                            $('#edit_keterangan').val(response.kondisi);
                        }
                    });
                }

                function deleteData(id) {
                    swal({
                    title: "Hapus?",
                    text: ' ',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak",
                    closeOnConfirm: true,
                    closeOnCancel: true
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        $.ajax({
                            url: '<?= base_url('admin-gudang/senpi') ?>',
                            type: 'POST',
                            data: {
                                delete: true,
                                id: id
                            },
                            success: function() {
                                window.location = '<?= base_url('admin-gudang/senpi') ?>';
                            }
                        });
                    }
                    });
                }

                $(document).ready(function() {
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });
                });
            </script>
