<div class="container-fluid">
  <div class="row">
    <?php require_once('components/sidebar.php') ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Order Detail</h2>
        <a href="<?= BASEURL; ?>/dashboard/orders" class="btn btn-outline-dark"><i class="bi bi-arrow-left"></i> Back</a>
      </div>
        <h5 class="my-4">Invoice No. <?= $data['order_detail'][0]['invoice_no']; ?></h5 class="my-4">
        <div class="table-responsive col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center" width="5%">No</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Product</th>
                <th scope="col" class="text-center">Size</th>
                <th scope="col" class="text-center" width="10%">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php foreach($data['order_detail'] as $item) { ?>
                <tr>
                  <td class="text-center align-middle"><?= $i; ?></td>
                  <td class="text-center"><img src="<?= BASEURL; ?>/img/products/<?= $item['gambar']; ?>" alt="<?= $item['gambar']; ?>" width="80"></td>
                  <td class="text-center align-middle"><?= $item['nama_produk']; ?></td>
                  <td class="text-center align-middle"><?= $item['ukuran']; ?></td>
                  <td class="text-center align-middle"><?= $item['jumlah']; ?></td>
                </tr>
                <?php $i++ ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
