<?php require_once('header.php'); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Please input the fields carefully</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($messege)){ ?>
                            <h2 class="text-center font-weight-bold text-success"><?php echo $messege; ?></h2>
                         <?php } ?>

                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Author Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="author_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Save">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>