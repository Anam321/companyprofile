<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="col-lg-4">
    <div class="sidebar">
        <!-- <div class="sidebar-widget wow fadeInUp">
            <div class="search-widget">
                <form>
                    <input class="form-control" type="text" placeholder="Search Keyword">
                    <button class="btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div> -->

        <div class="sidebar-widget wow fadeInUp">
            <h2 class="widget-title">Recent Post</h2>
            <div class="recent-post">
                <?php foreach ($recentPost as $rpost): ?>
                <div class="post-item">
                    <div class="post-img">
                        <img src="<?= htmlentities(base_url('assets/public/img/') . $rpost->foto, ENT_QUOTES)   ?>" />
                    </div>
                    <div class="post-text">
                        <a
                            href="<?= htmlentities(base_url('blog/') . $rpost->slug, ENT_QUOTES) ?>"><?= htmlentities($rpost->title)  ?></a>
                        <div class="post-meta">
                            <p>By<a href="javascript:void()">Admin</a></p>
                            <p>In<a
                                    href="<?= htmlentities(base_url('categori/') . $rpost->category, ENT_QUOTES) ?>"><?= htmlentities($rpost->category) ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- <div class="sidebar-widget wow fadeInUp">
            <div class="image-widget">
                <a href="#"><img src="img/blog-1.jpg" alt="Image"></a>
            </div>
        </div> -->



        <!-- <div class="sidebar-widget wow fadeInUp">
            <div class="image-widget">
                <a href="#"><img src="img/blog-2.jpg" alt="Image"></a>
            </div>
        </div> -->

        <div class="sidebar-widget wow fadeInUp">
            <h2 class="widget-title">Categories</h2>
            <div class="category-widget">
                <ul>
                    <?php foreach ($category as $ct): ?>
                    <li><a
                            href="<?= htmlentities(base_url('categori/') . $ct->category_seo, ENT_QUOTES)  ?>"><?= htmlentities($ct->category)  ?></a><span>(<?= get_db_nurows('tbl_blog', 'category', $ct->category_seo) ?>)</span>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <!-- 
        <div class="sidebar-widget wow fadeInUp">
            <div class="image-widget">
                <a href="#"><img src="img/blog-3.jpg" alt="Image"></a>
            </div>
        </div> -->

        <!-- <div class="sidebar-widget wow fadeInUp">
            <h2 class="widget-title">Tags Cloud</h2>
            <div class="tag-widget">
                <a href="">National</a>
                <a href="">International</a>
                <a href="">Economics</a>
                <a href="">Politics</a>
                <a href="">Lifestyle</a>
                <a href="">Technology</a>
                <a href="">Trades</a>
            </div>
        </div> -->

        <!-- <div class="sidebar-widget wow fadeInUp">
            <h2 class="widget-title">Text Widget</h2>
            <div class="text-widget">
                <p>
                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc.
                    Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu enim non turpis id
                    augue.
                </p>
            </div>
        </div> -->
    </div>
</div>