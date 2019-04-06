<br>
<style>
    .backclass{
        height: 570px;
    }
    </style>
<div class="col-md-12 backclass">
    <!-- DATA TABLE -->
    <div class="row">
        <div class="col-md-6"><h3 class="title-5 m-b-35">Site List</h3></div>
        <div class="col-md-6">
        <a style="margin-bottom: 5px;" href="<?= base_url('home/createSite');?>" class="pull-right btn btn-success"><i class="fas fa-plus"></i> Site List</a>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table id="site_table" class="table table-data2">
            <thead>
                <tr>
                    <th>Site Name</th>
                    <th>Site Code</th>
                    <th>Take Photo</th>
                    <th>Records in Report</th>
                    <th>Pass Format</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($allSite)){
                    foreach($allSite as $allSites):
                    ?> 
                <tr class="tr-shadow">
                    <td><?=$allSites['site_name']?></td>
                    <td>
                        <span class="block-email"><?=$allSites['site_code']?></span>
                    </td>
                    <td>
                        <span class="status--process"><?=($allSites['take_photo']==1)?'Yes':'No'?></span>
                    </td>
                    <td>
                        <span class="status--process"><?=$allSites['members_count']?></span>
                    </td>
                    <td>
                        <span class="status--process"><?=$allSites['pass_format']?></span>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; } ?>
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE -->
</div>
    
   
        