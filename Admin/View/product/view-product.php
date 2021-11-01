<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <a href="?act=view-product&run=add-product" class="btn btn-icon btn-success"  title="Add Products" data-toggle="tooltip" ><i class="fas fa-cart-plus"></i></a>
          <div class="card-header">
            <h4>Product View</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>MaPD</th>
                    <th>Name Product</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $value){ ?>
                  <tr>
                    <td><?=$value['MaSP']?></td>
                    <td><?=$value['TenSP']?></td>
                    <td><?=$value['DonGia']?> $</td>
                    <td><?=$value['SoLuong']?></td>
                    <td><img alt="image" class="mr-3 rounded-circle" width="50" src="../assets/<?=$value['HinhAnh1']?>"></td>
                    <td><?php if($value['TrangThai']==1){
                      echo 'Show On';
                      }else{
                        echo 'Show Off';
                        }?></td>
                    <td>
                      <a class="btn btn-primary btn-action mr-1" href="?act=view-product&run=edit-prod&id=<?=$value['MaSP']?>" data-toggle="tooltip" title="Edit"><i
                          class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" href="?act=view-product&run=delete&id=<?= $value['MaSP'] ?>" data-toggle="tooltip" title="Delete"
                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
