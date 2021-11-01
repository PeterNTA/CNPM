<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Category</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-cate&run=edit-cate" method="post">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category ID</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="MaDM" value="<?=$data['MaDM']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="TenDM" value="<?=$data['TenDM']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <input type="submit" class="btn btn-primary" value="Edit Category">
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
