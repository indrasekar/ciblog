<h2><?=$title?></h2>
<?php
foreach ($posts as $post):?>
	<h3><?php echo $post['title'];?></h3>
	<small class="post-date">Posted on: <?php echo $post['created_at'];?></small>
<?php echo $post['body'];?>
<br><br>
	<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']);?>" title="">Read more</a></p>

<?php
endforeach;
