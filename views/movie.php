<?php include (ROOT . '/views/layouts/header.php'); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="movie">
                <h2><?php echo $movie['title']; ?></h2>
                <p><span class="name">Release year: </span><?php echo $movie['release_year']; ?>.</p>
                <p><span class="name">Format: </span><?php echo $movie['format']; ?>.<p>
                <p><span class="name">Stars: </span><?php echo $movie['stars']; ?>.</p>
            </div>
        </div>
    </div>
</main>
<?php include (ROOT . '/views/layouts/footer.php'); ?>