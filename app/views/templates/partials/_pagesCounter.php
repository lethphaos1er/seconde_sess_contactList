<?php
include_once '../app/models/post.php';

$perPage = 10;
$total   = \App\Models\Post\countAll($conn);

$totalPages  = max(1, (int)ceil($total / $perPage));
$currentPage = isset($_GET['page']) && ctype_digit($_GET['page']) ? (int)$_GET['page'] : 1;
if ($currentPage < 1) $currentPage = 1;
if ($currentPage > $totalPages) $currentPage = $totalPages;
?>

<?php if ($totalPages > 1): ?>
<nav aria-label="Page navigation example" style="text-align: center;">
  <ul class="pagination justify-content-center">

    <!-- Previous -->
    <li class="page-item <?php echo ($currentPage <= 1) ? 'disabled' : '' ?>">
      <?php if ($currentPage > 1): ?>
        <a class="page-link button button-style button-anim" href="./index.php?page=<?php echo $currentPage - 1; ?>">
          <i class="fa fa-long-arrow-left"></i> Previous
        </a>
      <?php else: ?>
        <span class="page-link button button-style button-anim"><i class="fa fa-long-arrow-left"></i> Previous</span>
      <?php endif; ?>
    </li>

    <!-- Pages -->
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
      <li class="page-item <?php echo ($i === $currentPage) ? 'active' : ''; ?>">
        <a class="page-link button button-style button-anim" href="./index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php endfor; ?>

    <!-- Next -->
    <li class="page-item <?php echo ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
      <?php if ($currentPage < $totalPages): ?>
        <a class="page-link button button-style button-anim" href="./index.php?page=<?php echo $currentPage + 1; ?>">
          Next <i class="fa fa-long-arrow-right"></i>
        </a>
      <?php else: ?>
        <span class="page-link button button-style button-anim">Next <i class="fa fa-long-arrow-right"></i></span>
      <?php endif; ?>
    </li>

  </ul>
</nav>
<?php endif; ?>
