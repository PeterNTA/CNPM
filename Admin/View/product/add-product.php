<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Add Product</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-product&run=add" method="post" enctype="multipart/form-data">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" name="MaDM">
                <?php foreach ($category as $row) { ?>
                  <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Type</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" name="MaLSP">
                <?php foreach ($type as $row) { ?>
                  <option value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Product</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="TenSP" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="DonGia" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Amount</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="SoLuong">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image 1</label>
            <div class="col-sm-12 col-md-7">
                <input type="file" class="form-control" name="HinhAnh1">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image 2</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" class="form-control" name="HinhAnh2">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image 3</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" class="form-control" name="HinhAnh3">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sale</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" name="MaKM">
                <?php foreach ($promo as $row) { ?>
                  <option value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sumary</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control inputtags" name="MoTa">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
            <div class="col-sm-12 col-md-7">
              <textarea class="summernote-simple" name="MotaCT"></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">State</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" name="TrangThai">
                <option value="1">On</option>
                <option value="0">Off</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Create Post</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
