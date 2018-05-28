<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?
foreach ($posts as $post);
?>
<div class="span8">
    <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><h1><?=$post['post_subject']?></h1></a>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted <?=$post['post_create']?></span><div class="pull-right"><span class="label"><?=$post['user_id']?></span> <span class="label">story</span> <span class="label">blog</span> <?php foreach ($tags as $tag): ?> <span class="label"><?=$tag['tag_name']?>/span> <?php endforeach; ?></div>
    </div>
    <hr>
</div>
<?endforeach?>