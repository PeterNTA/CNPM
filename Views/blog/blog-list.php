<div class="blog--list-view blog--grid-load-more">
  <div class="article">
        <!-- Article Image -->
        <?php
            if(isset($blog) and $blog != NULL){
              foreach ($blog as  $value) {
          ?>
          <a href="?act=blog&bl=<?= $value['MaBL'] ?>" class="site-nav"><?= $value['TenBL'] ?></a>
          <?php echo "1"; ?>

        <?php }}else{
        echo '<p> Blog is empty </p>';}?>
         <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-1.jpg" src="assets/images/blog/blog-post-1.jpg" alt="It's all about how you wear"></a>
        <h2 class="h3"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>
        <ul class="publish-detail">
            <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
            <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
            <li>
                <ul class="inline-list">
                    <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0 comments</a></li>
                </ul>
            </li>
        </ul>
        <div class="rte">
            <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de......</p>
             </div>
        <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
    </div>
    <div class="article">
        <!-- Article Image -->
         <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-2.jpg" src="assets/images/blog/blog-post-2.jpg" alt="27 Days of Spring Fashion Recap"></a>
        <h2 class="h3"><a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a></h2>
        <ul class="publish-detail">
            <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
            <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
            <li>
                <ul class="inline-list">
                    <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0 comments</a></li>
                </ul>
            </li>
        </ul>
        <div class="rte">
            <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire......</p>
             </div>
        <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
    </div>
    <div class="article">
        <!-- Article Image -->
         <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-3.jpg" src="assets/images/blog/blog-post-3.jpg" alt="How to Wear The Folds Trend Four Ways"></a>
        <h2 class="h3"><a href="#">How to Wear The Folds Trend Four Ways</a></h2>
        <ul class="publish-detail">
            <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
            <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
            <li>
                <ul class="inline-list">
                    <li><i class="icon anm anm-comments-l"></i> <a href="#"> 10 comments</a></li>
                </ul>
            </li>
        </ul>
        <div class="rte">
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure......</p>
             </div>
        <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
    </div>
    <div class="article">
        <!-- Article Image -->
         <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-4.jpg" src="assets/images/blog/blog-post-4.jpg" alt="Accusantium doloremque"></a>
        <h2 class="h3"><a href="#">Accusantium doloremque</a></h2>
        <ul class="publish-detail">
            <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
            <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
            <li>
                <ul class="inline-list">
                    <li><i class="icon anm anm-comments-l"></i> <a href="#"> 3 comments</a></li>
                </ul>
            </li>
        </ul>
        <div class="rte">
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat......</p>
             </div>
        <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
    </div>
    <div class="loadmore-post">
        <a href="#;" class="btn loadMorepost">Load More</a>
    </div>
</div>
