<?php include("header.php") ?>
<main>

  <!-- breadcrumb area start -->
  <section class="breadcrumb__area include-bg pt-95 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content p-relative z-index-1">
            <h3 class="breadcrumb__title">Shopping Cart</h3>
            <div class="breadcrumb__list">
              <span><a href="#">Home</a></span>
              <span>Shopping Cart</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->

  <!-- cart area start -->
  <section class="tp-cart-area pb-120">
    <form method="post" action="<?= base_url() ?>Cart/update_cart">
      <div class="container">

        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>
        <div class="row">
          <?php if (!empty($cart)) { ?>
            <div class="col-xl-9 col-lg-8">
              <div class="tp-cart-list mb-25 mr-30">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2" class="tp-cart-header-product">Product</th>
                      <th class="tp-cart-header-price">Price</th>
                      <th class="tp-cart-header-quantity">Quantity</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($cart as $key => $value) { ?>
                      <tr>
                        <td class="tp-cart-img"><a href="product-details.html"> <img src="<?= base_url('uploads/') . $value->product_image ?>" alt=""></a></td>
                        <td class="tp-cart-title"><a href="product-details.html"><?= $value->product_name ?></a></td>
                        <td class="tp-cart-price"><span>Rs <?= number_format($value->product_price, 2) ?></span></td>
                        <td class="tp-cart-quantity">
                          <div class="tp-product-quantity mt-10 mb-10">
                            <span class="tp-cart-minus">
                              <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <input class="tp-cart-input" type="text" readonly name="cart_qty[]" value="<?= $value->product_qty ?>">
                            <span class="tp-cart-plus">
                              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                          </div>
                        </td>
                        <!-- action -->
                        <td class="tp-cart-action">
                          <a href="<?= base_url() ?>Cart/delete_cart/<?= $value->product_id ?>" class="tp-cart-action-btn">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor" />
                            </svg>
                            <span>Remove</span>
                          </a>
                        </td>
                        <input type="hidden" name="product_id[]" value="<?= $value->product_id ?>">
                      </tr>
                    <?php  } ?>
                    <!-- gg -->
                  </tbody>
                </table>
              </div>
              <div class="tp-cart-bottom">
                <div class="row align-items-end">
                  <div class="col-xl-6 col-md-8">
                  </div>
                  <div class="col-xl-6 col-md-4">
                    <div class="tp-cart-update text-md-end">
                      <button type="submit" class="tp-cart-update-btn">Update Cart</button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
    </form>
    <div class="col-xl-3 col-lg-4 col-md-6">
      <div class="tp-cart-checkout-wrapper">
        <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between">
          <span class="tp-cart-checkout-top-title">Subtotal</span>
          <span class="tp-cart-checkout-top-price">Rs<?= number_format($total_cart['subTotal'], 2) ?></span>
        </div>
        <div class="tp-cart-checkout-shipping">
          <h4 class="tp-cart-checkout-shipping-title">Shipping</h4>

          <div class="tp-cart-checkout-shipping-option-wrapper">
            <?php if ($total_cart['subTotal'] > 499) { ?>
              <label for="free_shipping"> Free shipping</label>
              <span><?= number_format($total_cart['delivery'], 2) ?> </span>
            <?php } else { ?>
              <label for="free_shipping"> Shipping Charges : </label>
              <span><?= number_format($total_cart['delivery'], 2) ?> </span>
            <?php } ?>
          </div>
        </div>
        <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
          <span>Total</span>
          <span>Rs<?= number_format($total_cart['grandTotal'], 2) ?></span>
        </div>
        <div class="tp-cart-checkout-proceed">
          <a href="<?= base_url() ?>Checkout/" class="tp-cart-checkout-btn w-100">Proceed to Checkout</a>
        </div>
      </div>
    </div>
  <?php
          } else { ?>
    <tr>
      <td class="tp-cart-img" colspan="4">
        <h4>No product in cart</h4>
        <!-- <a href="<?= base_url() ?>Home" class="btn btn-primary w-25"> Shop now</a> -->
        <!-- <div class="tp-slider-btn"> -->
          <a href="<?= base_url()?>Home" class="tp-btn tp-btn-2 tp-btn-white  w-25">Shop Now
            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </a>
        <!-- </div> -->
      </td>
    </tr>
  <?php } ?>
  </div>
  </div>
  </section>
  <!-- cart area end -->

</main>
<?php include("footer.php") ?>