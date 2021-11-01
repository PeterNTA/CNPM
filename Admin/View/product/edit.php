<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Product</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-product&run=add" method="post" enctype="multipart/form-data">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" name="MaDM" value="<?=$data['MaDM']?>">
                <?php foreach ($category as $row) { ?>
                  <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Type</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" value="<?=$data['MaLSP']?>" name="MaLSP" >
                <?php foreach ($type as $row) { ?>
                  <option value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Product</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="TenSP" value="<?=$data['TenSP']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="DonGia" value="<?=$data['DonGia']?> $" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Amount</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['SoLuong']?>" name="SoLuong">
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image 1</label>
            <div class="col-sm-12 col-md-7">
                <img alt="image" class="mr-3 rounded-circle" width="100" src="../assets/<?=$data['HinhAnh1']?>" style="padding-bottom:20px">
                <input type="file" class="form-control" value="<?=$data['HinhAnh1']?>" name="HinhAnh1">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image 2</label>
            <div class="col-sm-12 col-md-7">
              <img alt="image" class="mr-3 rounded-circle" width="100" src="../assets/<?=$data['HinhAnh2']?>" style="padding-bottom:20px">
              <input type="file" class="form-control" value="<?=$data['HinhAnh2']?>" name="HinhAnh2">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image 3</label>
            <div class="col-sm-12 col-md-7">
              <img alt="image" class="mr-3 rounded-circle" width="100" src="../assets/<?=$data['HinhAnh3']?>" style="padding-bottom:20px">
              <input type="file" class="form-control" value="<?=$data['HinhAnh3']?>" name="HinhAnh3">
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
              <input type="text" class="form-control inputtags" value="<?=$data['MoTa']?>" name="MoTa">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
            <div class="col-sm-12 col-md-7">
              <textarea class="summernote-simple" value="<?=$data['MotaCT']?>" name="MotaCT"></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">State</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" value="<?=$data['TrangThai']?>" name="TrangThai">
                <option value="1">On</option>
                <option value="0">Off</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
