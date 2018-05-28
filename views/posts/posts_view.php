<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <div class="row">
        <div class="col-lg-8">

            <h1><?=$post['post_subject'];?></h1>
            <p class="lead"><i class="fa fa-user"></i> by <?=$post['name'];?>
            </p>
            <hr>
            <p><i class="fa fa-calendar"></i> Posted on <?=$post['post_created'];?></p>
            <p><i class="fa fa-tags"></i> Tags: <?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="badge badge-info"><?=$tag['tag_name']?></span></a> <?endforeach?></p>

            <hr>
            <p><?=$post['post_text'];?></p>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="media comment-box">
            <div class="media-body">

                <?php foreach($comments as $comment): ?>
                    <h4 class="media-heading"><?=$comment['comment_subject']?></h4>
                    <p><?=$comment['comment']?></p>

                    <hr>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>