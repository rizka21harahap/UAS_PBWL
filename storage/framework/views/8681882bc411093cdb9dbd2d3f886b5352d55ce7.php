<div id="footer" class="footer">
    <!-- begin container -->
    <div class="container">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-xl-4 col-lg-4 col-12">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>Tentang E-Laundry</h4>
                    <p>
                      <?php echo e($setpage->tentang != NULL ? $setpage->tentang : 'Tentang belum disini'); ?>

                    </p>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-xl-4 col-lg-4 col-12">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>Ketentuan</h4>
                    <ul class="latest-post">
                      <li>
                        <a href="">FAQ</a>
                      </li>

                      <li>
                        <a href="">Join Laundry</a>
                      </li>

                      <li>
                        <a href="">Investasi</a>
                      </li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-xl-4 col-lg-4 col-12">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>Hubungi Kami</h4>
                    <ul class="new-user">
                      <li>
                        <a href="https://facebook.com/<?php echo e($setpage->facebook); ?>" target="_blank">
                          <i class="fa fa-facebook-square fa-2x" style="color: #4267B2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://instagram.com/<?php echo e($setpage->instagram); ?>" target="_blank">
                          <i class="fa fa-instagram fa-2x" style="color:#5B51D8"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://twitter.com/<?php echo e($setpage->twitter); ?>" target="_blank">
                          <i class="fa fa-twitter fa-2x" style="color: #1DA1F2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="mailto:<?php echo e($setpage->email); ?>" target="_blank">
                          <i class="fa fa-envelope fa-2x" style="color: #DB4437"></i>
                        </a>
                      </li>
                      <li>
                        <a href="tel:<?php echo e($setpage->no_telp); ?>" target="_blank">
                          <i class="fa fa-phone fa-2x"></i>
                        </a>
                      </li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/frontend/footer.blade.php ENDPATH**/ ?>