<?php include "layout/header.php" ?>
<div class="container-fluid">
  <div class="page-title-box">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h6 class="page-title">Product</h6>
      </div>

      <div class="col-md-4">
        <div class="float-end d-none d-md-block">
          <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Add More
          </button>
        </div>
      </div>
    </div>
  </div>
  <?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success">
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form class="row g-3 " action="<?= base_url() ?>Setting/banner" method="post" enctype="multipart/form-data">

            <div class="col-md-4">
              <label for="" class="form-label">Product ID</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter id">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Category</label>
              <select class="form-select" name="category" id="category">
                <option value="">Select</option>
                <?php foreach ($category as $key => $value) { ?>
                  <option value="<?= $value->cate_id ?>"><?= $value->cate_name ?></option>
                <?php } ?>
              </select>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Sub Category</label>
              <select class="form-select" name="img_status" id="img_status">
                <option value="">Select</option>

              </select>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter product">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Brand</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter brand">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Featured</label>
              <select class="form-select" name="img_status" id="img_status">
                <option value="">Select</option>
                <option value="1">Deal of the Month</option>
                <option value="2">New arrival</option>
              </select>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Highlights</label>
              <textarea class="form-control"></textarea>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Description</label>
              <textarea class="form-control"></textarea>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Meta Title</label>
              <textarea class="form-control"></textarea>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Meta Keyword</label>
              <textarea class="form-control"></textarea>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Meta Description</label>
              <textarea class="form-control"></textarea>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product Image</label>
              <input type="file" class="form-control" id="image" name="image">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Gallery Image</label>
              <input type="file" class="form-control" id="image" name="image">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product Stock</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter stock">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product MRP</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter mrp">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product Selling Price</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter price">
              <span style="color:red;"><?php echo form_error('image') ?></span>
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Status</label>
              <select class="form-select" name="img_status" id="img_status">
                <option value="">Select</option>
                <option value="1">Active</option>
                <option value="2">InActive</option>
              </select>
              <span style="color:red;"><?php echo form_error('img_status') ?></span>
            </div>

            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
</div>

</div>




<?php include "layout/footer.php" ?>
<script>
  $("#category").on('change', function() {
    var id = $(this).val();
    $.ajax({
      url: "<?= base_url("Product/get_category") ?>",
      // data: {
      //   id: id
      // },
      cache: false,
      success: function(html) {
        $("#results").append(html);
      }
    });
  })
</script>