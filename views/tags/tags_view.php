<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <?foreach($posts as $post):?>
        <div id="blog" class="row">
            <div class="col-md-10 blogShort">
                <h1><?=$post['post_subject'];?></h1>

                <article><p>
                        <?=$post['post_text'];?>
                    </p></article>
                <p class="lead"><i class="fa fa-user"></i> Posted by <?=$post['name'] ;?> <i class="fa fa-calendar"></i> on <?=$post['post_created'];?> </p>
                <p><i class="fa fa-tags"></i> Tags: <?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="badge badge-info"><?=$tag['tag_name']?></span></a> <?endforeach?></p>
            </div>

            <div class="col-md-12 gap10"></div>
        </div>
    <?endforeach?>
</div>