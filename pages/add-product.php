<?php include 'pages/header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header bg-info">All Product</div>
                    <div class="card-body bg-dark">
                        <form action="action.php" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-md-3 text-white">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="price" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-white">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-white">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-white">Description</label>
                                <div class="col-md-9">
                                    <textarea name="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="product_btn" class="btn btn-outline-success" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/footer.php'; ?>
