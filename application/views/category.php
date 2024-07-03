<?php include "layout/header.php" ?>
<div class="container-fluid">
  <div class="page-title-box">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h6 class="page-title">Category</h6>
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
          <form class="row g-3 " action="<?= base_url() ?>Category/index" method="post">
            <div class="col-md-6">
              <label for="" class="form-label">Parent Category</label>
              <select class="form-select" name="parent_cate">
                <option value="0">Parent</option>
                <?php foreach($category as $key=>$value){?>
                  <option value="<?= $value->cate_id?>"><?= $value->cate_name?></option>
                <?php } ?>
              </select>

            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Category</label>
              <input type="text" class="form-control" id="name" name="cate_name" placeholder="Enter name">
              <span style="color:red;"><?php echo form_error('cate_name') ?></span>
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Status</label>
              <select class="form-select" name="cate_status" id="cate_status">
                <option value="">Select</option>
                <option value="1">Active</option>
                <option value="2">InActive</option>
              </select>
              <span style="color:red;"><?php echo form_error('cate_status') ?></span>
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