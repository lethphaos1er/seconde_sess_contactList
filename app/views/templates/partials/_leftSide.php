<?php
// Chargement des catégories (affichage simple, liens non actifs)
include_once '../app/models/category.php';
$categories = \App\models\category\findAll($conn);
?>

<div class="col-md-3">
  <div class="about-fixed">

    <div class="my-pic">
      <a href="?"><img src="images/pic/my-pic.png" alt="My Pic" /></a>

      <nav id="menu">
        <ul class="menu-link">
          <li><a href="?">My blog</a></li>
        </ul>
      </nav>

      <!-- Liste des catégories (liens NON actifs) -->
      <ul class="menu-link">
        <?php foreach ($categories as $categorie): ?>
          <li><a href="?"><?php echo $categorie['name']; ?></a></li>
        <?php endforeach; ?>
      </ul>

      <div class="my-detail">
        <div class="white-spacing">
          <h1>Alex Parker</h1>
          <span>Web Developer</span>
        </div>

        <ul class="social-icon">
          <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#" title="GitHub"><i class="fa fa-github"></i></a></li>
        </ul>

        <div class="white-spacing">
          <a class="button button-style button-anim fa fa-long-arrow-right" href="?">
            <span>Contact me</span>
          </a>
        </div>
      </div>

    </div><!-- /.my-pic -->

  </div><!-- /.about-fixed -->
</div><!-- /.col -->
