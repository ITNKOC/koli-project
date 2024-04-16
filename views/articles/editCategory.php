<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Category</h4>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form class="row" method="POST">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <?php foreach ($categories as  $category) : ?>
                            <input type="text" name="nom_categorie" value="$category->name" />
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input href="javascript:void(0);" class="btn btn-submit me-2" type="submit"
                            name="addCategory" />
                        <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                    </div>

                </form>
            </div>
        </div>

        <?php if (isset($success) && $success): ?>
        <div class="alert alert-success">Category added successfully!</div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

    </div>
</div>