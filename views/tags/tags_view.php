<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <?foreach($posts as $post):?>
        <div id="blog" class="row">
            <div class="col-md-10 blogShort">
                <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?= $post['post_subject']; ?></a></h1>

                <article><p>
                        <?=$post['post_text'];?>
                    </p></article>
                <div>
                    <span class="badge badge-success">Posted <?= $post['post_created']; ?></span><div class="pull-right"><? foreach ($tags[$post['post_id']] as $tag): ?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label label-primary"><?=$tag['tag_name']?></span></a><?endforeach?></div>
                </div>
            </div>

            <div class="col-md-12 gap10"></div>
        </div>
    <?endforeach?>
</div>