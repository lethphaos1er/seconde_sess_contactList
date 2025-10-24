<div class="col-md-9">
  <div class="col-md-12 page-body">
    <div class="row">
      <div class="sub-title">
        <a href="index.html" title="Go to Home Page"><h2>Back Home</h2></a>
        <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
      </div>

      <div class="col-md-12 content-page">
        <div class="col-md-12 blog-post">
          <div>
            <img src="images/blog/1.jpg" alt="">
          </div>

          <!-- Post Headline Start -->
          <div class="post-title">
            <h1 class="is-selected">Edit Post</h1>
          </div>
          <!-- Post Headline End -->

          <!-- Post Detail Start -->
          <div class="post-info">
            <span><?php echo $post['created_at']; ?></span> |
            <?php
              include_once '../app/models/category.php';
              $catNames = array_column(\App\models\category\findAll($conn), 'name', 'id');
            ?>
            <span><?php echo $catNames[$post['category_id']]; ?></span>
          </div>
          <!-- Post Detail End -->

          <!-- FORM START -->
          <?php
            // Charger les catégories pour le select
            $categories = \App\models\category\findAll($conn);
          ?>
          <form action="index.php?posts=update&id=<?php echo $post['id']; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="title">Title</label>
              <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="<?php echo $post['title']; ?>"
              />
            </div>

            <div class="form-group">
              <label for="text">Text</label>
              <textarea
                id="text"
                name="text"
                class="form-control"
                rows="5"
              ><?php echo $post['text']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="quote">Quote</label>
              <textarea
                id="quote"
                name="quote"
                class="form-control"
                rows="5"
              ><?php echo $post['quote']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="category">Category</label>
              <select id="category" name="category_id" class="form-control">
                <?php foreach ($categories as $categorie): ?>
                  <option value="<?php echo $categorie['id']; ?>" <?php echo ((int)$categorie['id'] === (int)$post['category_id']) ? 'selected' : ''; ?>>
                    <?php echo $categorie['name']; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" id="image" class="form-control-file btn btn-primary">
              <input type="hidden" name="image_current" value="<?php echo $post['image']; ?>">
            </div>
           

            <div style="margin-top:10px;">
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="index.php?posts=delete&id=<?php echo $post['id']; ?>" class="btn btn-secondary" role="button">Delete Post</a>
            </div>

          </form>
          <!-- FORM END -->

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

      <!-- UiPasta Credit Start -->
      <div class="uipasta-credit">
        Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a>
      </div>
      <!-- UiPasta Credit End -->
    </footer>
  </div>
  <!-- Footer End -->
</div>
