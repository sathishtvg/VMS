<?php $this->load->view("header"); ?>
<aside class="right-side">
    <section class="content">
            <div class="col-xs-12">
                <?php $this->load->view($subview); ?> 
            </div>
    </section>
</aside>
<?php  $this->load->view("footer"); ?>