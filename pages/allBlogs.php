<?php include "header.php";?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1 class="text-center text-warning font-weight-bold"></h1>
                </div>
                <div class="row">
                    <?php foreach ($allBlogs as $blog){ ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $blog['image'] ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Blog Title</h4>
                                <span class="text-muted">author name</span>
                                <p class="text-justify">blog description</p>

                            </div>

                        </div>

                    </div>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include "footer.php";?>

