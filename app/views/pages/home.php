<div class="col-md-12 blog-post row">
    <!-- ADD A POST -->
      <a href="posts/add/form.html" class="button button-style button-anim fa fa-long-arrow-right">
        <span>Add new post</span>
      </a>
    <!-- ADD A POST END -->
     
  <?php foreach ($posts as $post): ?>
    <div class="post-title">
      <a href="?posts=show&id=<?php echo $post['id']; ?>">
        <h1><?php echo $post['title']; ?></h1>
      </a>
    </div>

    <div class="post-info">
      <span><?php echo date('d/m/Y', strtotime($post['created_at'])); ?></span> |
      <span>Life style</span>
    </div>

    <p><?php echo \Core\Helpers\truncate($post['text'], 150); ?></p>

    <a href="?posts=show&id=<?php echo $post['id']; ?>"
       class="button button-style button-anim fa fa-long-arrow-right">
      <span>Read More</span>
    </a>
  <?php endforeach; ?>
</div>
