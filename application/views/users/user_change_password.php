<!--BEGIN NOTIFICATION-->
<?php if ($this->session->flashdata('msg')) {
    echo $this->session->flashdata('msg');
}
?>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Changer le mot de passe</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                    <?php $attributes = array('class' => 'email', 'id' => 'myform','method'=>'post');
                    echo form_open('index.php/users/changePasswordByUser', $attributes);?>
                <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ancien mot de passe</label>
                            <input type="password" name="old_pass" id="bps_name" class="form-control input-large">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">nouveau mot de passe</label>
                            <input type="password" name="new_pass" id="bps_name" class="form-control input-large">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmer le nouveau mot de passe</label>
                            <input type="password" name="new_pass2" id="bps_name" class="form-control input-large">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </div>
               <?php form_close();?>
            </div>
            <!-- /.box -->

        </div>
    </div>

</section>

