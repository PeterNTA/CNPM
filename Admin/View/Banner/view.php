<div class="section-body">
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4>Banner-Sliders</h4>
        </div>
        <div class="card-body">
          <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
            <?php foreach($data as $ban){ ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../assets/<?=$ban['HinhAnh']?>" data-sub-html="">
                <img class="img-responsive thumbnail" src="../assets/<?=$ban['HinhAnh']?>" alt="">
              </a>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
