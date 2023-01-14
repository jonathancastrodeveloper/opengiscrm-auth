<?php echo $this->extend('layouts/app') ?>


<?php echo $this->section('content') ?>


<?php echo $this->include('inc/navbar') ?>


<!-- Content Row -->
<div class="row">


	<div class="col-lg-8 mb-4 offset-md-2">



    <br>

    <div class="card-body">
     <div class="">          



      <div class="container ">

       <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
        <!-- <div class="card-body p-0"> -->
         <!-- Nested Row within Card Body -->
         <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block "></div> -->
          <div class="col-lg-8 offset-md-2">
           <!--  <div class="p-5 card"> -->

            <!-- Trigger the modal with a button -->
            <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalFormLogin">Open Modal</button> -->                        

            <!-- modal de registro -->

            <div class="modal fade" id="modalFormLogin" role="dialog">
             <div class="modal-dialog">
              <div class="modal-content">
               <div class="modal-header">
                <!--  <button type="button" class="close" data-dismiss="modal"></button> -->
      <!--  <h4 class="modal-title">Agregar usuario</h4>
      	<br> -->
      	<h4 class="modal-title">Log In</h4>        


      </div>
      <div class="modal-body">
       <?php echo form_open('/logearse','id="logForm"') ?>


       <input type="hidden" id="tokenN" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />




       <div class="form-group">
        <input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="Email" value="">
        <!-- <div class="text-danger"><?php //echo form_error('email');  ?></div> -->
        <!-- <div class="text-danger" id="msg_email"></div> -->
      </div>

      <div class="form-group">
        <input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="Password" value="">
        <!-- <div class="text-danger"><?php //echo form_error('email');  ?></div> -->
        <!-- <div class="text-danger" id="msg_password"></div> -->
      </div>      

      <br>                                            


      <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

      <?php echo form_close()  ?> 

      <a class="nav-link" href="/register">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">You do not have an account?</span>             
      </a>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div>

  </div>

</div>

</div>


<!-- </div> -->
</div>
</div>
<!-- </div> -->
<!--    </div> -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

</div>

</div>

</div>
</div>





<?php echo $this->include('inc/footer') ?>


<?php echo $this->endSection() ?>