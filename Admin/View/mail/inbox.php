
  <div class="section-body">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="boxs mail_listing">
            <div class="inbox-center table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>

                    <th colspan="3">
                      <div class="inbox-header">
                        <div class="mail-option">
                          <div class="email-btn-group m-l-15">
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="back"
                              data-toggle="tooltip">
                              <i class="material-icons">keyboard_return</i>
                            </a>
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="Archive"
                              data-toggle="tooltip">
                              <i class="material-icons">archive</i>
                            </a>
                            <div class="p-r-20">|</div>
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="Error"
                              data-toggle="tooltip">
                              <i class="material-icons">error</i>
                            </a>
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="Delete"
                              data-toggle="tooltip">
                              <i class="material-icons">delete</i>
                            </a>
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="Folders"
                              data-toggle="tooltip">
                              <i class="material-icons">folder</i>
                            </a>
                            <a href="#" class="col-dark-gray waves-effect m-r-20" title="Tag"
                              data-toggle="tooltip">
                              <i class="material-icons">local_offer</i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th class="hidden-xs" colspan="2">
                      <div class="pull-right">
                        <div class="email-btn-group m-l-15">
                          <a href="#" class="col-dark-gray waves-effect m-r-20" title="previous"
                            data-toggle="tooltip">
                            <i class="material-icons">navigate_before</i>
                          </a>
                          <a href="#" class="col-dark-gray waves-effect m-r-20" title="next"
                            data-toggle="tooltip">
                            <i class="material-icons">navigate_next</i>
                          </a>
                        </div>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php if ($data!=0) { ?>
                  <?php foreach($data as $row){ ?>
                  <tr class="unread">

                    <td class="hidden-xs">
                      <i class="material-icons text-warning">star</i>
                    </td>
                    <td class="hidden-xs"><b><?=$row['name']?></b></td>
                    <td class="max-texts">
                      <a href="?act=mail&run=read&id=<?=$row['ConID']?>"><?=$row['problem']?></a>
                    </td>
                    <td class="text-right"><?=$row['time']?></td>
                  </tr>
                <?php }} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
