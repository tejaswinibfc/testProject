<?php include "layout/header.php" ?>
<div class="container-fluid">
  <div class="page-title-box">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h6 class="page-title">Images</h6>
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
              <label for="" class="form-label">Image</label>
              <input type="file" class="form-control" id="image" name="image">
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