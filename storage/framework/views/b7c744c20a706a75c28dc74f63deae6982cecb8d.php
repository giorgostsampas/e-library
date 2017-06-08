<header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">E-library</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(route('logout')); ?>">
        </a></li>           <!-- στη μπαρα -->
        <li><a href="<?php echo e(route('home')); ?>">Αρχική</a></li>
       <li><a href="<?php echo e(route('welcome')); ?>">Εγγραφή/Σύνδεση</a></li>
        <li><a href="<?php echo e(route('upload')); ?>">Ανέβασμα αρχείου</a></li>
        <li><a href="<?php echo e(route('about')); ?>">Πληροφορίες</a></li>
         <li><a href="<?php echo e(route('contact')); ?>">Επικοινωνία</a></li>
         <li><a href="<?php echo e(route('logout')); ?>">Αποσύνδεση</a></li>


       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
