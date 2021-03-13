<style>

    /* ---- isotope ---- */
    .grid {
        min-height: 60vh
    }
    /* clear fix */
    .new_cont .grid:after {
        content: '';
        display: block;
        clear: both;
    }
    /* ---- .grid-item ---- */
    .new_cont .grid-sizer,
    .new_cont .grid-item {
        width: 33%;
        overflow: hidden;
    }
    .new_cont .grid-item {
        float: left;
        border: none;
        height: auto;
        padding: 6px;
        background: none;
    }
    .new_cont .grid-item img {
        display: block;
        max-width: 100%;
    }
    .expand-button {
        background-color: #222;
        width: 32px;
        height: 32px;
        position: absolute;
        right: -32px;
        top: 0px;
        will-change: right;
        transition: right .2s ease-out;
        cursor: pointer;
        text-align: center;
        display: block;
    }
    .expand-button .fa {
        font-size: 15px;
        line-height: 32px;
        color: white;
        text-align: center;
        transform: translateX(-9%);
    }
    .pinterest-button {
        position: absolute;
        left: -32px;
        bottom: 0px;
        will-change: left;
        transition: left .2s ease-out;
        width: 32px;
        height: 32px;
        background-color: red;
    }
    .image-container {
        position: relative;
        overflow: hidden;
    }
    .image-container:hover .pinterest-button {
        left: 0px;
    }
    .image-container:hover .expand-button {
        right: 0px;
    }
    @media screen and (max-width: 767px) {
        .new_cont .grid-sizer,
        .new_cont .grid-item {
            width: 50%;
        }
        .fullWidthStrip {
            height: 5px;
        }
        .fullWidthStrip p {
            font-size: 1px;
            color: #3e3839;
        }
        .button-group button span {
            display: none;
        }
    }
</style>
<div class="block-gallery">
<div class="content-wrapper">
    <div class="new_cont">
        <div class="std">
            <?php   $rows = theme('site'); ?>
            <?php  if( $rows ): $check = []; ?>
                <div class="btn-group filter-button-group">
                    <button class="explore-btn" data-filter="*"><span>Show</span> All</button>
                    <?php foreach( $rows as $site ) :
                        $category = $site['category'];
                        if(in_array($category, $check)) continue;
                        ?>
                        <button class="explore-btn" data-filter=".<?=  $category ?>"><?=  $category ?></button>
                    <?php
                        array_push($check,$category);
                    endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="grid">
                <div class="grid-sizer"></div>
                <?php
                if( $rows ):
                    $i = 0;
                foreach( $rows as $site ) : ?>
                    <div class="grid-item <?= $site['category'] ?>">
                        <div class="image-container">
                            <a class="expand-button"><i class="fa fa-expand"></i></a>
                            <a data-fancybox data-src="#modal<?= $i ?>" href="javascript:;" >
                                <img src="<?= $site['image']['url'] ?>"
                                     alt="alt for image" />
                            </a>
                            <div style="display: none;" id="modal<?= $i ?>">
                                <div class="gallery-modal">
                                    <img src="<?= $site['image']['url'] ?>"
                                         alt="alt for image" width="900"/>
                                    <div class="gallery-modal-content">
                                        <h5><?= $site['title'] ?></h5>
                                        <span><?= $site['category'] ?></span>
                                        <p><?= $site['description'] ?></p>
                                        <a href="<?= $site['url'] ?>" class="explore-btn"> visit website</a>
                                    </div>
                                </div>
                            </div>
                            <a class="pinterest-button"
                               href="https://www.pinterest.com/pin/create/button/"
                               data-pin-do="buttonPin"
                               data-pin-media="<?= $site['image']['url'] ?>"
                               data-pin-description="some title>" data-pin-custom="true">
                                <img src="https://addons.opera.com/media/extensions/55/19155/1.1-rev1/icons/icon_64x64.png"/>
                            </a>

                        </div>
                    </div>

                <?php $i +=1; endforeach; endif; ?>

            </div>
        </div>
    </div>
</div>
</div>

    <script
        type="text/javascript"
        async defer
        src="//assets.pinterest.com/js/pinit.js"
    ></script>