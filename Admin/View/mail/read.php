<div class="section-body">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="boxs mail_listing">
          <div class="inbox-body no-pad">
            <section class="mail-list">
              <?php foreach($data as $detail){ ?>
              <div class="mail-sender">
                <div class="mail-heading">
                  <h4 class="vew-mail-header">
                    <b><?=$detail['problem']?></b>
                  </h4>
                </div>
                <hr>
                <div class="media">
                  <a href="#" class="table-img m-r-15">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                      data-toggle="tooltip" title="<?=$detail['name']?>">
                  </a>
                  <div class="media-body">
                    <span class="date pull-right"><?=$detail['time']?></span>
                    <h5 class="text-primary"><?=$detail['name']?></h5>
                    <small class="text-muted">From: <?=$detail['email']?></small>
                  </div>
                </div>
              </div>
              <div class="view-mail p-t-20">
                <p><?=$detail['message']?></p>
              </div>
              <div class="replyBox m-t-20">
                <p class="p-b-20">click here to
                  <a href="?act=mail&run=compo&id=<?=$detail['ConID']?>">Reply</a>
                </p>
              </div>
              <?php } ?>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
