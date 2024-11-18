<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <!-- BLOG BEGGIN -->
                        <?php
                        $posts = get_top_month_posts();
                        if ($posts):
                            foreach ($posts as $post): ?>
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="<?= get_the_post_thumbnail_url(null, 'full') ?>" alt="">
                                        </div>
                                        <div class="down-content">
                                            <?php foreach (get_the_category() as $cat): ?>
                                                <span><?= $cat->name ?></span>
                                            <?php endforeach; ?>

                                            <a href="<?= get_permalink() ?>">
                                                <h4><?php the_title() ?></h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="<?php get_the_author_posts_link() ?>"><?= get_the_author() ?></a>
                                                </li>
                                                <li><a href="#" style="pointer-events: none;"><?= get_the_date() ?></a></li>
                                                <li><a href="#" style="pointer-events: none;"><?= get_comments_number() ?>
                                                        Comments</a></li>
                                                <li><a href="#"
                                                        style="pointer-events: none;"><?= pvc_get_post_views(get_the_ID()) ?>
                                                        Views</a>
                                                </li>
                                            </ul>
                                            <?php the_excerpt() ?>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">Beauty</a>,</li>
                                                            <li><a href="#">Nature</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="#">Facebook</a>,</li>
                                                            <li><a href="#"> Twitter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- BLOG END -->
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="<?= THEME_URI . '/archive-post'; ?>">View All Posts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- =====  SIDEBAR BEGGIN   ======  -->
<?php get_template_part('sidebar'); ?>
            <!-- =====  SIDEBAR END   ======  -->
        </div>
    </div>
</section>