<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Category</h4>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form class="row" method="POST" action="<?= URI ?>articles/editCategory/<?= $category->id_categorie ?>">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="nom_categorie" value="<?= $category->nom_categorie ?>" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-submit me-2" name="updateCategory" value="Update" />
                        <a href="<?=URI?>articles/categoryList" class="btn btn-cancel">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <?php if (isset($success) && $success): ?>
        <div class="alert alert-success">Category updated successfully!</div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

    </div>
</div>