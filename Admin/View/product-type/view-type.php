<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Type View</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>MaTP</th>
                    <th></th>
                    <th>Name Type</th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $value){ ?>
                  <tr>
                    <td><?=$value['MaLSP']?></td>
                    <td></td>
                    <td><?=$value['TenLSP']?></td>
                    <td></td>
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                          class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" href="?act=view-type&run=delete&id=<?= $value['MaLSP'] ?>" title="Delete"
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
