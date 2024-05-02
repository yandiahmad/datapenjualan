        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"> <i class="far fa-newspaper"></i>  <?= $title; ?></h1>
           


                 <!-- Basic Card Example -->
                 <div class="card shadow mb-4">
                    <div class="card-header py-3">
                       <h6 class="m-0 font-weight-bold text-primary">Tambah Barang Baru</h6>
                    </div>
                    <div class="card-body">
                   
                    <form action="<?php base_url('barang/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="tanggal" value="<?= date("Y-m-d H:i:s"); ?>">
                    <input type="hidden" name="user" value="https://instagram.com/yandiagasa_13">

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= set_value('nama_barang'); ?>">
                        <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" name="stok" id="stok" value="<?= set_value('stok'); ?>">
                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>  

                    <div class="form-group">
                        <label for="jumlah_terjual">Jumlah Terjual</label>
                        <input type="text" class="form-control" name="stok" id="jumlah_terjual" value="<?= set_value('jumlah_terjual'); ?>">
                        <?= form_error('jumlah_terjual', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div> 
                    
                    <div class="form-group">
                        <label for="tanggal">Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= set_value('tanggal'); ?>">
                        <?= form_error('tanggal ', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div> 

                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" class="form-control" name="jenis_barang" id="" value="<?= set_value('tanggal'); ?>">
                        <?= form_error('tanggal ', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div> 

                    

                <button type="submit" class="btn btn-success" name="upload"><i class="fas fa-check-circle"></i> Submit</button>               
                
                
                </form> 

                </div>
                </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

<!-- panggil jquery -->
<script src="<?= base_url('assets/ckeditor/jquery/jquery-3.1.1.min.js'); ?>"></script>

<!-- panggil ckeditor.js -->
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<!-- panggil adapter jquery ckeditor -->
<script src="<?= base_url('assets/ckeditor/adapters/jquery.js'); ?>"></script>
<!-- setup selector -->
<script>
    $('textarea.texteditor').ckeditor();
</script>


<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script> 
