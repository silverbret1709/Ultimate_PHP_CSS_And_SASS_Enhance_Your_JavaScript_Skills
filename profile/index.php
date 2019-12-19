<?php include '../bootstrap.php';
?>
<?php include './inc/head.php'; ?>

<div class="container-fluid my-flex-container">
    <?php include './inc/header.php'; ?>
    <div class="content d-flex">
        <?php include 'inc/sidebar.php'; ?>
        <main class="content-center">
            <?php include 'inc/search-box.php'; ?>
            <?php include 'inc/price-boxes.php'; ?>
            <!--Section for displaying all of users posts-->
            <?php include 'inc/active-posts.php'; ?>
            <!--pop-up section-->
            <!--            <div class="heading-tertiary mt-3">Our Custom make modal</div>-->

            <?php include 'inc/popup.php'; ?>
            <!--Profile Form here-->
            <?php include 'inc/form.php'; ?>
            <?php include 'inc/section-cart.php'; ?>
            <!--Live Search-->
            <?php include 'inc/live-search.php'; ?>

            <?php include 'inc/display-msg.php'; ?>
            <!--Section for adding the posts to cart-->
            <?php include 'inc/unpaid-posts.php'; ?>
        </main>

    </div>
    <?php include 'inc/footer.php'; ?>
</div>

<?php include 'inc/profile-scripts.php'; ?>
