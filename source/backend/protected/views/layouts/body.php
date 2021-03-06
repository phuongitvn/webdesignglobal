<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="body-container" class="show-panel">
	<div id="head-container">
		<div id="wr-head-container">
			<div id="head">
				<div id="head-logo">
					<div class="logo"><img width="115" src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo_g.png" /></div>
				</div>
				<div id="head-user">
					<!-- Split button -->
					<div id="toolbar">
						<div class="wrr-t">
						<div class="t-user">
						<div class="btn-group">
							<div class="btn-group">
						  		<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bell"></span> 11</button>
						  		<ul class="dropdown-menu">
						      		<li><a href="#">Lorem Issue</a></li>
						      		<li><a href="#">Lorem Issue</a></li>
					    		</ul>
						  	</div>
						  	<div class="btn-group">
						  		<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span> 24</button>
						  		<ul class="dropdown-menu">
						  			<li><a href="#">Lorem Issue</a></li>
						      		<li><a href="#">Lorem Issue</a></li>
					    		</ul>
						  	</div>
						  	<div class="btn-group pull-right">
						    <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
						      <?php echo 'Welcome, '.Yii::app()->user->username;?>
						      <span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu">
						      	<li><a target="_blank" href="<?php echo Yii::app()->params['frontend_site_url'];?>"><span class="glyphicon glyphicon-cog"></span> <?php echo Yii::t('main','View Site');?></a></li>
						      	<li><a href="<?php echo Yii::app()->createUrl('/settings/admin/admin')?>"><span class="glyphicon glyphicon-cog"></span> <?php echo Yii::t('main','Settings');?></a></li>
						      	<li><a href="<?php echo Yii::app()->createUrl('/user/profile/edit');?>"><span class="glyphicon glyphicon-user"></span> <?php echo Yii::t('main','Profile');?></a></li>
						      	<?php if(UserComponent::checkAccessUser('srbac@AuthitemManage')):?>
						      	<li><a href="<?php echo Yii::app()->createUrl('/srbac/authitem/manage');?>"><span class="glyphicon glyphicon-lock"></span> <?php echo Yii::t('main','Permission');?></a></li>
						      	<?php endif;?>
						      	<li class="divider"></li>
						      	<li><a href="<?php echo Yii::app()->createUrl('/user/logout');?>"><span class="glyphicon glyphicon-log-out "></span> <?php echo Yii::t('main','Logout');?></a></li>
						    </ul>
						  </div>
						</div>
						</div>
						<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="head-positioner-height-offset"></div>
	<div id="page-container">
		<div id="page">
			<div id="panel">
				<div id="apps-panel-menu" style="top: 0px;">
					<div id="panel-container">
						<?php include 'menu_apps.php';?>
					</div>
				</div>
			</div>
			<div id="content" class="content-alignment">
				<div class="branded-page-container">
					<div class="branded-page-container-wrr">
						<div class="branded-page-container-wrr-inner">
							<div class="branded-page-primary-col">
								<?php include 'toolbar.php';?>
								<div class="body-content yt-card clearfix"><?php echo $content; ?></div>
							</div>
							<?php if($this->clips['sidebar-r']):?>
							<div class="branded-page-secondary-col">
								<?php echo $this->clips['sidebar-r'];?>
							</div>
							<?php endif;?>
						</div>
							
					</div>
				</div>
			</div>
		</div> 
	</div>
	
</div>       
<?php $this->endContent(); ?>