        <!-- STATISTIC-->
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Create a New Site</div>
                    <div class="card-body card-block">
                        <form action="<?=base_url('home/insertSite')?>" method="POST" class="">
                            <div class='form-group'>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user" for="site_name"></i>
                                    </div>
                                    <input type="text" id="site_name" value="<?=set_value('site_name')?>" name="site_name" placeholder="Site Name" class="form-control <?=(form_error('site_name'))?'is-invalid':'';?>">
                                </div>
                                <span class="control-label">
                                    <?php echo str_replace('_',' ',form_error('site_name')); ?>
                                </span>
                            </div>
                                <div class='form-group'>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="text" id="site_code" value="<?=set_value('site_code')?>" name="site_code" placeholder="Site Code" class="form-control <?=(form_error('site_code'))?'is-invalid':'';?>">
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Albhapets or Numbers Max 5 Digits."><i class="fa fa-info"></i></a>
                                </div>
                                <span class="control-label">
                                    <?php echo str_replace('_',' ',form_error('site_code')); ?>
                                </span>
                            </div>
                            <div class='form-group' >
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <select  id="take_photo" name="take_photo" class="form-control <?=(form_error('take_photo'))?'is_invalid':'';?>">
                                        <option value="1">Yes</option>
                                        <option selected value="0">No</option>
                                    </select>
                                </div>
                                <span class="control-label">
                                    <?php echo str_replace('_',' ',form_error('take_photo')); ?>
                                </span>
                            </div>
                            <div class='form-group' >
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <input value="<?=(set_value('record_count'))?set_value('record_count'):100;?>" max="1000" type="number" id="record_count" name="record_count" placeholder="Records in Report" class="form-control <?=(form_error('record_count'))?'is-invalid':'';?>">
                                </div>
                                <span class="control-label">
                                    <?php echo str_replace('_',' ',form_error('record_count')); ?>
                                </span>
                            </div>
                            <div class='form-group' >
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="text" id="pass_format" value="<?=set_value('pass_format')?>" name="pass_format" placeholder="Pass Format" class="form-control <?=(form_error('pass_format'))?'is-invalid':'';?>">
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Eg:- ^PASS\d{4}[V|C]$"><i class="fa fa-info"></i></a>
                                </div>
                                <span class="control-label">
                                    <?php echo str_replace('_',' ',form_error('pass_format')); ?>
                                </span>
                            </div>
                            <div class="form-actions form-group text-center">
                                <button type="submit" class="btn btn-success  btn-sm">Submit</button>
                            </div>
                        </form>
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
                
            </div>
        </div>