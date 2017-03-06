<?php include (ROOT . '/views/layouts/header.php'); ?>
<main>
    <div class="container">
        <div class="main">
            <h1>Movie list</h1>
            <div class="row">
                <?php foreach($movieList as $movie): ?>
                    <a href="/movie/<?php echo $movie['id']; ?>" 
                       class="singleMovie center-block"><?php echo 
                       $movie['title'];?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div><!-- /.container -->
</main>
<?php include (ROOT . '/views/layouts/footer.php'); ?>