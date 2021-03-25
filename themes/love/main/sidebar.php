<?php if( $config->pro_system == 1 ){ ?>
<div class="dt_sections">
	<?php
		$pro_users = ProUsers();
		if( count((array)$pro_users) > 0){
	?>
		<div class="dt_home_pro_usr">
			<h4 class="bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" /></svg>
                <?php if( $config->pro_system == 1 ) { ?>
                    <?php echo __( 'Premium Users' );?>
                <?php } else{ ?>
                    <?php echo __( 'Latest Users' );?>
                <?php } ?>
            </h4>
			<div class="pro_usrs_container">
				<?php if( $profile->is_pro == 0 && isGenderFree($profile->gender) === false ){?>
					<div class="pro_usr add_me">
						<a href="<?php echo $site_url;?>/pro" data-ajax="/pro">
							<span class="add_icon pulse">
								<img src="<?php echo $profile->avater->avater;?>" alt="<?php echo $profile->full_name;?>" />
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
							</span>
							<b><?php echo __( 'Add Me' );?></b>
						</a>
					</div>
				<?php } ?>
				<?php
					if( $pro_users ){
						foreach ($pro_users as $key => $pro_user ){
				?>
					<div class="pro_usr">
						<a href="<?php echo $site_url;?>/@<?php echo $pro_user->username;?>" data-ajax="/@<?php echo $pro_user->username;?>">
							<img src="<?php echo GetMedia( $pro_user->avater );?>" alt="<?php echo $pro_user->username;?>" /> <b><?php echo $pro_user->username;?></b>
						</a>
					</div>
				<?php } } ?>
			</div>
		</div>
	<?php } else { ?>
		<div class="dt_home_pro_usr">
			<h4 class="bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" /></svg>
                <?php if( $config->pro_system == 1 ) { ?>
                    <?php echo __( 'Premium Users' );?>
                <?php } else { ?>
                    <?php echo __( 'Latest Users' );?>
                <?php } ?>
            </h4>
			<div class="pro_usrs_container">
				<?php if( $profile->is_pro == 0){?>
					<div class="pro_usr add_me">
						<a href="<?php echo $site_url;?>/pro" data-ajax="/pro">
							<span class="add_icon pulse">
								<img src="<?php echo $profile->avater->avater;?>" alt="<?php echo $profile->full_name;?>" />
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
							</span>
							<b><?php echo __( 'Add Me' );?></b>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
</div>
<?php } ?>
<?php echo GetAd('home_side_bar');?>