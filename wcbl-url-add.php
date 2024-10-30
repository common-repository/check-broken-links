<div id="wrapper">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo admin_url('admin.php?page=wcbl-dashboard'); ?>">
			<?php echo WBLM_NAME; ?> <span> Ver <?php echo WBLM_VERSION; ?></span>
			</a>
		</div>
		<!-- /.navbar-header -->
	</nav>
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12"><h3 class="page-header"><?php _e('Add URL', 'wblm') ?></h3><?php get_wblmTopNavi(); ?></div>
		</div>            
		<!-- /.row -->
		<form class="form-horizontal" role="form" action="admin.php?page=wcbl-redirect&addURL=on" method="post">                     
		<!-- Add URL -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<p class="bg-warning" style="padding:10px; margin-top:0; font-size:16px; font-weight: bold; "><?php _e('Add New URL', 'wblm') ?></p>
							<div class="form-horizontal">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-1 control-label"><?php _e('Old Url', 'wblm') ?></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="old_url" name="old_url" placeholder="<?php _e('http://', 'wblm') ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-1 control-label"><?php _e('New Url ', 'wblm') ?></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="new_url" name="new_url" placeholder="<?php _e('http://', 'wblm') ?>">
									</div>
							</div>
						</div><!-- form-horizontal -->    
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div> 
		<!-- //Add URL -->             
		<div class="row">
			<div class="col-lg-12" style="text-align:right;">
			<button type="submit" class="btn btn-primary"> <?php _e(' ADD URL ', 'wblm') ?> </button>
			</div>
		</div>
	</form>              
	</div>
	<!-- /#page-wrapper -->
	
</div>
<!-- /#wrapper -->