<div class="container">
    <div class="company_logo">  
        <center>
            <img src="<?=base_url('assets/image/logo.jpg');?>" alt="A-SAT" style="margin: 40px 0 15px 0px;">
        </center>
    </div>
    <br>
    <br>
    <div class="text-center">
        <button class="btn btn-success btn-lg"  data-toggle="modal" data-target="#login-modal">Login</button>
    </div>
     <br>
     <div class="row">
        <div class="col-md-12">
             <?php    if($this->session->flashdata('errors')) {
                    echo "<div class=\"alert alert-danger alert-dismissable text-center\">
                        <i class=\"fa fa-ban\"></i>
                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                        ". $this->session->flashdata('errors') ."
                    </div>";
                } ?>
        </div>
    </div>
</div>
<!-- Login MODAL -->
<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
        <div class="loginmodal-container">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
             <center class="pull-center"><img class="img img-responsive" style="max-width:100px; margin-top: -7px; height:74px;" src="<?=base_url('assets/image/fade_in_out_symbol.gif');?>"></center><br>
             <form method="POST" action="<?= base_url('login/signin')?>" enctype="multipart/form-data">
                 <input class="_required" type="text"  name="username" id="username" placeholder="Username">
                 <input class="_required"  type="password"  name="password" id="password" placeholder="Password">
                 <input type="submit"  name="login" class="login loginmodal-submit" value="Login">
             </form>
         </div>
      </div>
    </div>
  </div>
</div>
<!-- Login MODAL -->