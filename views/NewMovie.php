<?php include (ROOT . '/views/layouts/header.php'); ?>
<main>
    <div class="container">
        <div class="row">
             <h4>Add new film</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Input the name of new film:</p>
                        <input type="text" name="title" placeholder="Film name" 
                               value="">

                        <p>Input release year:</p>
                        <input type="text" name="release_year" placeholder="Year" value="">

                        <p>Chose a format:</p>
                        <select name="format">
                            <option value="DVD">DVD</option>
                            <option value="VHS">VHS</option>
                            <option value="Blu-Ray">Blu-Ray</option>
                        </select>
                        <p>Input star`s names and females:</p>
                        <textarea rows="5" name="stars"></textarea>

                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
        </div>
    </main>
<?php include (ROOT . '/views/layouts/footer.php'); 