<div class="container-fluid bg-light min-vh-100 d-flex justify-content-center align-items-center">
  <div class="col-5 bg-white border rounded p-5 overflow-auto my-5" style="min-height: 80vh;">
    <h4 class="text-center mb-5">Thanks for your order</h4>
    <div class="d-flex flex-column">
      <span class="text-muted" style="font-size: 14px;"><?= $data['invoice'][0]['nama']; ?></span>
      <span class="text-muted" style="font-size: 14px;">Invoice No. <?= $data['invoice'][0]['invoice_no'] ?></span>
      <span class="text-muted" style="font-size: 14px;"><?= date_format(date_create($data['invoice'][0]['tanggal_beli']), "j F Y"); ?></span>
      <span class="text-muted" style="font-size: 14px;">Shipping to <?= $data['invoice'][0]['alamat_pengiriman']; ?></span>
    </div>
    <table class="table mt-3">
      <thead>
        <tr>
          <td scope="col" class="fw-bold">Description</td>
          <td scope="col" class="text-center fw-bold">Quantity</td>
          <td scope="col" class="text-end fw-bold">Amount</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data['invoice'] as $item) { ?>
          <tr>
            <td scope="row" class="text-muted"><?= $item['nama_produk']; ?></td>
            <td class="text-center text-muted"><?= $item['jumlah']; ?></td>
            <td class="text-end text-muted"><?= rupiah($item['jumlah'] * $item['harga']); ?></td>
          </tr>
        <?php } ?>
        <tr class="table-group-divider">
          <td scope="row" colspan="2" class="text-end fw-bold">Total</td>
          <td class="text-end fw-bold"><?= rupiah($data['total']); ?></td>
        </tr>
        <tr class="table-group-divider"></tr>
      </tbody>
    </table>
    <div class="text-center mt-5">
      <a href="<?= BASEURL; ?>/home" class="btn btn-dark">Back to Home</a>
    </div>
  </div>
</div>