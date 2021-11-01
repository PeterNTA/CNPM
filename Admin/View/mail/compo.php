  <div class="section-body">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="boxs mail_listing">
            <div class="inbox-center table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th colspan="1">
                      <div class="inbox-header">
                        Compose New Message
                      </div>
                    </th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <form class="composeForm" method="post" action="?act=mail&run=rep">
                    <input type="hidden" name="ConID" value="<?=$data['ConID']?>">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="email" id="email_address" name="email" class="form-control" value="<?=$data['email']?>" placeholder="TO">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" id="subject" name="reply" class="form-control" placeholder="Content">
                    </div>
                  </div>
                  <textarea id="ckeditor">
                      </textarea>
                    <input type="submit" class="btn btn-info btn-border-radius waves-effect" name="" value="Send">
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
