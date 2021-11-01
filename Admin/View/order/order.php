<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Order data</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>Name Customer</th>
                    <th>Date Order</th>
                    <th>Total Price</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($data!=0) { ?>
                  <?php foreach($data as $row){ ?>
                  <tr>
                    <td><?=$row['NguoiNhan']?></td>
                    <td><?=$row['NgayLap']?></td>
                    <td>$ <?=$row['TongTien']?></td>
                    <td><?=$row['DiaChi']?></td>
                    <td><?=$row['SDT']?></td>
                    <td><?php if($row['TrangThai']==0){
                      echo 'Unapproved';
                      }else{
                        echo 'Approved';
                        }?></td>
                    <td>
                      <?php if($row['TrangThai']==0){ ?>
                      <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" href="?act=order&run=acp&id=<?= $row['MaHD'] ?>" title="Accept"><i
                          class="fas fa-check"></i></a>
                        <?php } ?>
                        <?php if($row['TrangThai']==1){ ?>
                        <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" href="?act=order&run=unacp&id=<?= $row['MaHD'] ?>" title="Un Accept"><i
                            class="fas fa-times"></i></a>
                          <?php } ?>
                      <a class="btn btn-info btn-action mr-1" data-toggle="tooltip" href="?act=order&run=detail&id=<?= $row['MaHD'] ?>" title="Detail"><i
                          class="fas fa-info-circle"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" href="?act=order&run=delete&id=<?= $row['MaHD'] ?>" title="Delete"
                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              <?php }else {
                  echo '<div class="card-header">
                    <h4>Order is empty</h4>
                  </div>';
              }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
