<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Account</h4>
        </div>
        <div class="card-body">
          <form class="" action="?act=view-acc&run=edit" method="post">
          <input type="hidden" name="MaND" value="<?=$data['MaND']?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="Ho" value="<?=$data['Ho']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="Ten" value="<?=$data['Ten']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">User Name</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="TaiKhoan" value="<?=$data['TaiKhoan']?>" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['Email']?>" name="Email">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['DiaChi']?>" name="DiaChi">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" value="<?=$data['SDT']?>" name="SDT">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="password" class="form-control" value="<?=$data['MatKhau']?>" name="MatKhau">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confilm Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="password" class="form-control" value="<?=$data['MatKhau']?>" name="CheckMatKhau">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gender</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" value="<?=$data['GioiTinh']?>" name="GioiTinh">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Orther">Other</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Create Account</button>
            </div>
          </div>
        </form>
        </div>

      </div>
    </div>
  </div>
</div>
