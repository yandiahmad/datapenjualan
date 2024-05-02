        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"> <i class="far fa-newspaper"></i> <?= $title; ?> Data Barang</h1>
            

                 <!-- Basic Card Example -->
                 <div class="card shadow mb-4">
                    <div class="card-header py-3">
                       <h6 class="m-0 font-weight-bold text-primary">Detail Penjualan Barang</h6>
                    </div>
                    <div class="card-body">

                    <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                    <h5>Nama Barang &nbsp;: <?= $barang['nama_barang']; ?></h5>
                    <h5>Stok&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $barang['stok']; ?></h5>         
                    <h5>Jumlah Terjual : <?= $barang['jumlah_terjual']; ?></h5>
                    <h5>Tanggal Transaksi : <?= $barang['tanggal']; ?></h5>
                    <h5>Jenis Barang : <?= $barang['jenis_barang']; ?></h5>
                </div>
                </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->