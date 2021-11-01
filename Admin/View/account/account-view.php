        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="buttons">
                </div>
                <div class="card">
                  <a href="?act=view-acc&run=add-acc" class="btn btn-icon btn-success"  title="Add User" data-toggle="tooltip" ><i class="fas fa-user-plus"></i></a>
                  <div class="card-header">
                    <h4>Account View</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>MaAC</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Mail</th>
                            <th>Username</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data as $value){ ?>
                          <tr>
                            <td><?=$value['MaND']?></td>
                            <td><?=$value['Ho']?> <?=$value['Ten']?></td>
                            <td><?=$value['SDT']?></td>
                            <td><?=$value['Email']?></td>
                            <td><?=$value['TaiKhoan']?></td>
                            <td>
                              <a class="btn btn-primary btn-action mr-1" href="?act=view-acc&run=edit-acc&id=<?=$value['MaND']?>" data-toggle="tooltip" title="Edit"><i
                                  class="fas fa-pencil-alt"></i></a>
                              <a class="btn btn-danger btn-action" href="?act=view-acc&run=delete&id=<?= $value['MaND'] ?>" data-toggle="tooltip" title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
