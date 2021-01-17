<!-- Header -->
<?php include "../layouts/header.php"; ?>
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <?php include "../layouts/sidebar.php"; ?>
</div>
<!-- Footer -->
<?php include "../layouts/footer.php"; ?>
