<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo lang('installer')?> | <?php echo lang('site_title_simple')?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
      <!-- Font Awesome -->
      <link href="<?php echo base_url('assets/plugins/font-awesome/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
      <!-- Ionicons -->
      <link href="<?php echo base_url('assets/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
      <!-- iCheck -->
      <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css')?>">
        
      <!-- Custom Theme Style -->
      <link href="<?php echo base_url('assets/css/AdminLTE.css')?>" rel="stylesheet">			
      <link href="<?php echo base_url('assets/css/redactor.css')?>" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('assets/css/skins/_all-skins.min.css')?>" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet" type="text/css" />
        
      <!-- jQuery 2.0.2 -->
      <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
      <script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js')?>" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js')?>" type="text/javascript"></script>
    
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
             <?php echo lang('site_title')?>
          </div>
          <!-- /.login-logo -->
          <div class="login-box-body">
          
            <div class="alert alert-info alert-dismissable">
                <i class="fa fa-info"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo lang('installer_note')?>
		    </div>
          
         	<?php if(!$is_writeable['config'] || !$is_writeable['root'] || !$is_writeable['uploads']):?>
			     
                 <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                	
    				<?php if(!$is_writeable['config']):?>
    					<?php echo lang('installer_config_note')?>
    				<?php endif;?>
    				<?php if(!$is_writeable['root']):?>
                        <?php echo lang('installer_root_note')?>
    				<?php endif;?>
    				<?php if(!$is_writeable['uploads']):?>
                        <?php echo lang('installer_uploads_note')?>
    				<?php endif;?>
			</div>
            <?php endif;?>
            		
            <?php if (!empty($errors)): ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $errors; ?>
            </div>
            <?php endif; ?>
                    
            <p class="login-box-msg"><?php echo lang('installer')?></p>
            <div id="login-box">
                <?php echo form_open('/');?>
                  <div class="form-group has-feedback">
                    <?php echo form_input(array('class'=>'form-control', 'name'=>'hostname', 'placeholder'=>lang('installer field hostname'),'value'=>set_value('hostname', 'localhost') ));?>
                    <span class="fa fa-globe form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <?php echo form_input(array('class'=>'form-control', 'placeholder'=>lang('installer field database'),'name'=>'database', 'value'=>set_value('database') ));?>
                    <span class="fa fa-database form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <?php echo form_input(array('class'=>'form-control', 'placeholder'=>lang('installer field username'), 'name'=>'username', 'value'=>set_value('username') ));?>
                    <span class="fa fa-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <?php echo form_input(array('class'=>'form-control', 'name'=>'password', 'placeholder'=>lang('installer field password'),'value'=>set_value('password') ));?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo lang('installer field submit')?></button>  
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
            </div>
        
          </div>
          <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        
        <!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js')?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>			