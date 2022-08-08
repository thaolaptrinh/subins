<!-- Initialize Swiper -->

<?php if ($root == 'dashboard') { ?>
  <script src="<?= BASE_URL('assets/theme/vendors/base/vendor.bundle.base.js'); ?>"></script>
  <script src="<?= BASE_URL('assets/theme/js/jquery.cookie.js'); ?>"></script>
  <script src="<?= BASE_URL('assets/theme/js/off-canvas.js'); ?>"></script>
  <script src="<?= BASE_URL('assets/theme/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?= BASE_URL('assets/theme/js/template.js'); ?>"></script>
  <script src="<?= BASE_URL('assets/theme/js/dashboard.js'); ?>"></script>
<?php } else { ?>

  <script type="text/javascript" src="<?= BASE_URL('public/src/js/lib/jquery.min.js') ?>"></script>
  <script type="text/javascript" src="<?= BASE_URL('public/src/js/index.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



<?php } ?>
</body>
<html>