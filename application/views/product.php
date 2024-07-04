<?php include "layout/header.php" ?>

<?php


?>
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
          <form class="row g-3 " action="<?= base_url() ?>Product" method="post" enctype="multipart/form-data">

            <div class="col-md-4">
              <label for="" class="form-label">Product ID</label>
              <input type="text" class="form-control" id="product_id" name="product_id" readonly value="<?= set_value('product_id', $prod_id) ?>" placeholder="Enter id">
              <span style="color:red;"><?php echo form_error('product_id') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Category</label>
              <select class="form-select" name="category" id="category">
                <option value="">Select</option>
                <?php foreach ($category as $key => $value) { ?>
                  <option value="<?= $value->cate_id ?>"><?= $value->cate_name ?></option>
                <?php } ?>
              </select>
              <span style="color:red;"><?php echo form_error('category') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Sub Category</label>
              <select class="form-select" name="sub_category" id="sub_category">
                <option value="">Select</option>
              </select>
              <span style="color:red;"><?php echo form_error('sub_category') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product</label>
              <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product">
              <span style="color:red;"><?php echo form_error('product_name') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Brand</label>
              <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand">
              <span style="color:red;"><?php echo form_error('brand') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Featured</label>
              <select class="form-select" name="feature" id="feature">
                <option value="">Select</option>
                <option value="1">Deal of the Month</option>
                <option value="2">New arrival</option>
              </select>
              <span style="color:red;"><?php echo form_error('feature') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Highlights</label>
              <textarea class="form-control" name="highlight"></textarea>
              <span style="color:red;"><?php echo form_error('highlight') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Description</label>
              <textarea class="form-control" name="description"></textarea>
              <span style="color:red;"><?php echo form_error('description') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Meta Title</label>
              <textarea class="form-control" name="meta_title"></textarea>
              <span style="color:red;"><?php echo form_error('meta_title') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Meta Keyword</label>
              <textarea class="form-control" name="meta_keyword"></textarea>
              <span style="color:red;"><?php echo form_error('meta_keyword') ?></span>
            </div>
            <div class="col-md-12">
              <label for="" class="form-label">Meta Description</label>
              <textarea class="form-control" name="meta_description"></textarea>
              <span style="color:red;"><?php echo form_error('meta_description') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product Stock</label>
              <input type="text" class="form-control" id="product_stock" name="product_stock" placeholder="Enter stock">
              <span style="color:red;"><?php echo form_error('product_stock') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product MRP</label>
              <input type="text" class="form-control" id="product_mrp" name="product_mrp" placeholder="Enter mrp">
              <span style="color:red;"><?php echo form_error('product_mrp') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product Selling Price</label>
              <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Enter price">
              <span style="color:red;"><?php echo form_error('selling_price') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Product Image</label>
              <input type="file" class="form-control" id="prod_image" name="prod_image">
              <span style="color:red;"><?php echo form_error('prod_image') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Gallery Image</label>
              <input type="file" class="form-control" id="galler_image" name="galler_image">
              <span style="color:red;"><?php echo form_error('galler_image') ?></span>
            </div>


            <div class="col-md-4">
              <label for="" class="form-label">Status</label>
              <select class="form-select" name="prod_status" id="prod_status">
                <option value="">Select</option>
                <option value="1">Active</option>
                <option value="2">InActive</option>
              </select>
              <span style="color:red;"><?php echo form_error('prod_status') ?></span>
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
      type: "POST",
      data: {
        id: id
      },
      dataType: 'json',
      success: function(res) {
        console.log("res", res.category)
        $("#sub_category").html('<option value="">Select SubCategory</option>');
        $.each(res.category, function(key, value) {
          $("#sub_category").append(
            '<option value="' +
            value.cate_id +
            '">' +
            value.cate_name +
            "</option>"
          );
        });
      }
    });
  })
</script>