<div class="col-md-9">
  <div class="col-md-12 page-body">
    <div class="row">
      <div class="sub-title">
        <a href="index.php" title="Go to Home Page"><h2>Back Home</h2></a>
        <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
      </div>

      <div class="col-md-12 content-page">
        <div class="col-md-12 blog-post">

          <!-- Post Headline Start -->
          <div class="post-title">
            <h1><?php echo $post['title']; ?></h1>
          </div>
          <!-- Post Headline End -->

          <!-- Post Detail Start -->
          <?php
            // Charger les noms de catégories et créer une map id => name
            include_once '../app/models/category.php';
            $catNames = array_column(\App\models\category\findAll($conn), 'name', 'id');
          ?>
          <div class="post-info">
            <span><?php echo !empty($post['created_at']) ? date('d/m/Y', strtotime($post['created_at'])) : ''; ?></span> |
            <span><?php echo isset($catNames[$post['category_id']]) ? $catNames[$post['category_id']] : ''; ?></span>
          </div>
          <!-- Post Detail End -->

          <!-- Image (si définie) -->
          <div class="post-image" style="margin:15px 0;">
            <img src="images/uploads/<?php echo $post['image']; ?>" alt="">
          </div>

          <!-- Post Content -->
          <p><?php echo $post['text']; ?></p>

          <!-- Quote -->
          <blockquote class="margin-top-40 margin-bottom-40">
            <p><?php echo $post['quote']; ?></p>
          </blockquote>

          <!-- Actions -->
          <div style="margin-top:10px;">
            <a class="button button-style button-anim fa fa-long-arrow-right"
               href="index.php?posts=edit&id=<?php echo $post['id']; ?>">
              <span>Edit</span>
            </a>

            <a class="button button-style button-anim fa fa-long-arrow-right"
               href="index.php?posts=delete&id=<?php echo $post['id']; ?>"
               onclick="return confirm('Delete this post?');">
              <span>Delete</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <div class="col-md-12 page-body margin-top-50 footer">
    <footer>
      <ul class="menu-link">
        <li><a href="index.html">My Blog</a></li>
      </ul>

      <p>© Copyright 2016 DevBlog. All rights reserved</p>

      <div class="uipasta-credit">
        Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a>
      </div>
    </footer>
  </div>
  <!-- Footer End -->
</div>
