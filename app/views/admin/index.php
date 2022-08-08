<?php
require_once('app/views/admin/inc/head.php') ?>
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <?php require('app/views/admin/inc/navbar.php') ?>


  <?php require('app/views/admin/inc/sidebar.php') ?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>

        </div>



      </div>
    </div>
    <div class="content">

      <?php $this->render($content) ?>

    </div>

  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://subins.tech">SUBINS.TECH</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>2022</b>
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<?php require_once('app/views/admin/inc/end.php')  ?>