<div class="container-fluid">
  <div class="row">
    <?php require_once('components/sidebar.php') ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Orders</h2>
      </div>
        <div class="table-responsive col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center" width="12%">Order Date</th>
                <th scope="col" class="text-center">Invoice</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Shipping Address</th>
                <th scope="col" class="text-center">Detail</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Update Status</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($data['orders'])) { ?>
                <tr>
                  <td class="text-center align-middle"><?=  date_format(date_create($data['orders'][0]['tanggal_beli']), "j F Y"); ?></td>
                  <td class="text-center align-middle"><?= $data['orders'][0]['invoice_no']; ?></td>
                  <td class="text-center align-middle"><?= $data['orders'][0]['nama']; ?></td>
                  <td class="text-center align-middle"><?= $data['orders'][0]['alamat_pengiriman']; ?></td>
                  <td class="text-center align-middle">
                    <form action="<?= BASEURL; ?>/dashboard/detail" method="post">
                      <input type="hidden" name="invoice_no" value="<?= $data['orders'][0]['invoice_no']; ?>">
                      <button type="submit" class="badge text-bg-dark">View Detail</button>
                    </form>
                  </td>
                  <td class="text-center align-middle"><?= $data['orders'][0]['status_pengiriman']; ?></td>
                  <td class="text-center align-middle">
                    <form action="<?= BASEURL; ?>/dashboard/update_status" method="post">
                      <input type="hidden" name="invoice_no" value="<?= $data['orders'][0]['invoice_no']; ?>">
                      <input type="hidden" name="status_pengiriman" value="Delivery">
                      <button type="submit" class="badge text-bg-dark" <?= $data['orders'][0]['status_pengiriman'] === 'Delivery' || $data['orders'][0]['status_pengiriman'] === 'Received' ? 'disabled' : ''; ?>>Deliver</button>
                    </form>
                  </td>
                </tr>
                <?php for($i = 1; $i < count($data['orders']); $i++) { ?>
                  <?php if($data['orders'][$i]['invoice_no'] === $data['orders'][$i - 1]['invoice_no']) { ?>
                    <?php continue; ?>
                  <?php } ?>
                  <tr>
                    <td class="text-center align-middle"><?=  date_format(date_create($data['orders'][$i]['tanggal_beli']), "j F Y"); ?></td>
                    <td class="text-center align-middle"><?= $data['orders'][$i]['invoice_no']; ?></td>
                    <td class="text-center align-middle"><?= $data['orders'][$i]['nama']; ?></td>
                    <td class="text-center align-middle"><?= $data['orders'][$i]['alamat_pengiriman']; ?></td>
                    <td class="text-center align-middle">
                      <form  action="<?= BASEURL; ?>/dashboard/detail" method="post">
                        <input type="hidden" name="invoice_no" value="<?= $data['orders'][0]['invoice_no']; ?>">
                        <button type="submit" class="badge text-bg-dark">View Detail</button>
                      </form>
                    </td>
                    <td class="text-center align-middle"><?= $data['orders'][$i]['status_pengiriman']; ?></td>
                    <td class="text-center align-middle">
                      <form action="<?= BASEURL; ?>/dashboard/update_status" method="post">
                        <input type="hidden" name="invoice_no" value="<?= $data['orders'][$i]['invoice_no']; ?>">
                        <input type="hidden" name="status_pengiriman" value="Delivery">
                        <button type="submit" class="badge text-bg-dark" <?= $data['orders'][$i]['status_pengiriman'] === 'Delivery' || $data['orders'][$i]['status_pengiriman'] === 'Received' ? 'disabled' : ''; ?>>Deliver</button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
