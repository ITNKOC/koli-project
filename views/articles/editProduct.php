<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add</h4>
                <h6>Create new product</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form class="row" method="post" enctype="multipart/form-data">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="nomArticle"
                                value="<?php echo isset($product->nomArticle) ? $product->nomArticle : ''; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="select" name="id_categorie">
                                <option value="">Choose Category</option>
                                <?php foreach ($categories as $category): ?>
                                <option value="<?= $category->id_categorie; ?>"
                                    <?php echo (isset($product->id_categorie) && $product->id_categorie == $category->id_categorie) ? 'selected' : ''; ?>>
                                    <?= $category->nom_categorie; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="quantite"
                                value="<?php echo isset($product->quantite) ? $product->quantite : ''; ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Short description</label>
                            <textarea class="form-control"
                                name="courte_description"><?php echo isset($product->courte_description) ? $product->courte_description : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"
                                name="description"><?php echo isset($product->description) ? $product->description : ''; ?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="prix"
                                value="<?php echo isset($product->prix) ? $product->prix : ''; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="select" name="statut">
                                <option value="disponible"
                                    <?php echo (isset($product->statut) && $product->statut == 'disponible') ? 'selected' : ''; ?>>
                                    disponible</option>
                                <option value="rupture"
                                    <?php echo (isset($product->statut) && $product->statut == 'rupture') ? 'selected' : ''; ?>>
                                    rupture</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Product Image</label>
                            <div class="image-upload">
                                <input type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-submit me-2" name="updateProduct" value="Update" />
                        <a href="<?=URI?>articles/productList" class="btn btn-cancel">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <?php if (isset($success) && $success): ?>
        <div class="alert alert-success">Product update successfully!</div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>
</div>