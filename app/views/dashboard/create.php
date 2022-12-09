<div class="container-fluid">
  <div class="row">
    <?php require_once('components/sidebar.php') ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Add Product</h2>    
        <a href="<?= BASEURL; ?>/dashboard/show" class="btn btn-outline-dark"><i class="bi bi-arrow-left"></i> Back</a>
      </div>
      <div class="row">
        <div class="col-md-4 d-flex flex-column align-items-md-end align-items-center mt-2 mt-md-4 mb-4 order-md-last">
          <img class="img-thumbnail rounded-4 img-preview" alt="..." width="90%" style="display: none"/>
        </div>
        <div class="col-md-8">
          <form action="<?= BASEURL; ?>/dashboard/store" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id">
            <div class="mb-3">
              <label for="nama" class="form-label text-muted">Nama</label>
              <input type="text" name="nama" class="form-control text-muted" id="nama" required>
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label text-muted">Kategori</label>
              <input type="text" name="kategori" class="form-control text-muted" id="kategori" required>
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label text-muted">Harga</label>
              <input type="text" name="harga" class="form-control text-muted" id="harga" required>
            </div>
            <div class="mb-3">
              <label for="label" class="form-label text-muted">Label</label>
              <select class="form-select text-muted" id="label" name="label">
                <option value="Featured Product">Featured Product</option>
                <option value="New Arrival">New Arrival</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input class="form-control text-muted" type="file" id="gambar" name="gambar" accept="image/*" onchange="previewImage()" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label text-muted">Deskripsi</label>
              <textarea name="deskripsi" class="form-control text-muted" id="deskripsi" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success mb-5" name="tambah">Tambah</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>

<script>
  function previewImage() {
    const image = document.getElementById('gambar');
    const imgPreview = document.querySelector('.img-preview');
    const oFReader = new FileReader();

    imgPreview.style.display = 'block';

    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>