<?php include "layout/header.php" ?>
<div class="container-fluid">
  <div class="page-title-box">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h6 class="page-title">Pincode</h6>
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
          <form class="row g-3 " action="<?= base_url() ?>Setting/pincode" method="post">
            <div class="col-md-4">
              <label for="" class="form-label">Pincode</label>
              <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode">
              <span style="color:red;"><?php echo form_error('pincode') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Delivery charges</label>
              <input type="text" class="form-control" id="charges" name="charges" placeholder="Enter charges">
              <span style="color:red;"><?php echo form_error('charges') ?></span>
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Status</label>
              <select class="form-select" name="pin_status" id="pin_status">
                <option value="">Select</option>
                <option value="1">Active</option>
                <option value="2">InActive</option>
              </select>
              <span style="color:red;"><?php echo form_error('pin_status') ?></span>
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