<!--Collection Banner-->
<div class="collection-header">
<div class="collection-hero">
      <div class="collection-hero__image"><img data-src="assets/images/cat-women3.jpg" src="assets/images/cat-women3.jpg" alt="Women" title="Women" /></div>
      <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shop List View</h1></div>
    </div>
</div>
  <!--End Collection Banner-->

  <div class="container">
    <div class="row">
        <!--Sidebar-->

          <?php require_once('category.php'); ?>

          <!--End Sidebar-->
          <!--Main Content-->
          <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
            <div class="category-description">
                <h3>Category Description</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
              </div>
              <hr>
            <div class="productList">
                <!--Toolbar-->
                  <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                    <img src="assets/images/grid.jpg" alt="Grid" />
                                  </a>
                                  <a href="shop-listview.html" title="List View" class="change-view">
                                    <img src="assets/images/list.jpg" alt="List" />
                                  </a>
                              </div>
                              <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                <span class="filters-toolbar__product-count">Showing: 22</span>
                              </div>
                              <div class="col-4 col-md-4 col-lg-4 text-right">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Sort</label>
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                          <option value="title-ascending" selected="selected">Sort</option>
                                          <option>Best Selling</option>
                                          <option>Alphabetically, A-Z</option>
                                          <option>Alphabetically, Z-A</option>
                                          <option>Price, low to high</option>
                                          <option>Price, high to low</option>
                                          <option>Date, new to old</option>
                                          <option>Date, old to new</option>
                                    </select>
                                    <input class="collection-header__default-sort" type="hidden" value="manual">
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!--End Toolbar-->
                  <div class="list-view-items grid--view-items">
                    <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Camelia Reversible Jacket</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="old-price">$600.00</span>
                                  <span class="product-price__price product-price__sale"><span class="money">$500.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                <button class="btn btn--small" type="button">Select Options</button>
                            </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" src="assets/images/product-images/product-image2.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Elastic Waist Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$693.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Select Options</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image3.jpg" src="assets/images/product-images/product-image3.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">3/4 Sleeve Kimono Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$500.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Select Options</button>
                              </form>
                          </div>
                        </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image4.jpg" src="assets/images/product-images/product-image4.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Cape Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="old-price">$900.00</span>
                                  <span class="product-price__price product-price__sale"><span class="money">$800.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Select Options</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Paper Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="old-price">$900.00</span>
                                  <span class="product-price__price product-price__sale"><span class="money">$800.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Select Options</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image17.jpg" src="assets/images/product-images/product-image17.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Buttercup Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$800.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image18.jpg" src="assets/images/product-images/product-image18.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lima Shirt</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$800.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg" src="assets/images/product-images/product-image19.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Romary Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$800.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image20.jpg" src="assets/images/product-images/product-image20.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Floral Sleeveless Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$380.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image21.jpg" src="assets/images/product-images/product-image21.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Button Up Dress</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$400.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image22.jpg" src="assets/images/product-images/product-image22.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lexie Shirt</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$200.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image23.jpg" src="assets/images/product-images/product-image23.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">One Shoulder Dress in Navy</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$1048.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image24.jpg" src="assets/images/product-images/product-image24.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Triangle Sleeveless Dress in Multi</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$1048.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                      <!--ListView Item-->
                      <div class="list-product list-view-item">
                          <div class="list-view-item__image-column">
                              <div class="list-view-item__image-wrapper">
                                  <!-- Image -->
                                  <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image25.jpg" src="assets/images/product-images/product-image25.jpg" alt="image" title="product"></a>
                                  <!-- End Image -->
                              </div>
                          </div>
                          <div class="list-view-item__title-column">
                              <div class="h4 grid-view-item__title"><a href="product-layout-2.html">ACB Top</a></div>
                              <!-- Product Review -->
                              <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                              <!-- End Product Review -->
                              <!-- Sort Description -->
                              <p>Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                              <!-- End Sort Description -->
                              <!-- Price -->
                              <p class="product-price grid-view-item__meta">
                                  <span class="product-price__price"><span class="money">$280.00</span></span>
                              </p>
                              <!-- End Price -->
                              <form class="variants" action="#">
                                  <button class="btn btn--small" type="button">Add To Cart</button>
                              </form>
                          </div>
                      </div>
                      <!--End ListView Item-->
                  </div>
              </div>
              <div class="infinitpaginOuter">
                  <div class="infinitpagin">
                      <a href="#" class="btn loadMore">Load More</a>
                  </div>
              </div>
          </div>
          <!--End Main Content-->
      </div>
  </div>
