<!--Page Title-->
<div class="page section-header text-center mb-0">
<div class="page-title">
      <div class="wrapper"><h1 class="page-width">Blog Left Sidebar</h1></div>
    </div>
</div>
  <!--End Page Title-->
<div class="bredcrumbWrap">
      <div class="container breadcrumbs">
          <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Blog Left Sidebar</span>
      </div>
  </div>
  <div class="container">
    <div class="row">
        <!--Sidebar-->

        <?php require_once('blog-recent.php'); ?>
          <!--End Sidebar-->
          <!--Main Content-->
          <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
            <div class="custom-search">
                  <form action="#" method="get" class="input-group search-header search" role="search" style="position: relative;">
                      <input class="search-header__input search__input input-group__field" type="search" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
                      <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="icon anm anm-search-l"></i> </button></span>
                  </form>
              </div>
              <?php require_once('blog-list.php'); ?>
          </div>
          <!--End Main Content-->
      </div>
  </div>
