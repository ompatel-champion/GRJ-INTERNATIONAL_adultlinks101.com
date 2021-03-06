<style>body > #container {padding: 0 !important;}#nav-not-logged-in,.page_footer:not(.dt_auth_footr_page){display: none !important;visibility: hidden !important;}</style>
<div class="dt_authpage">
	<div class="login_side">
		<div class="dt_login_con">
			<div class="row dt_login login">
				<form method="POST" action="/Useractions/login" class="login">
					<a id="logo-container" href="<?php echo $site_url;?>/" class="brand-logo"><img src="<?php echo $config->sitelogo;?>" /></a>
					<p><span class="bold"><?php echo __( 'Welcome back,' );?></span> <?php echo __( 'please login to your account.' );?></p>
					<div class="alert alert-success" role="alert" style="display:none;"></div>
					<div class="alert alert-danger" role="alert" style="display:none;"></div>
					<div class="row">
						<div class="input-field">
							<input name="username" id="username" type="text" class="validate" required >
							<label for="username"><?php echo __( 'Username or Email' );?></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field">
							<input name="password" id="password" type="password" class="validate" required>
							<label for="password"><?php echo __( 'Password' );?></label>
						</div>
					</div>
					<div class="dt_login_footer">
						<button class="btn btn-large waves-effect waves-light bold btn_primary btn_round" type="submit" name="action"><span><?php echo __( 'Login' );?></span> <svg viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path fill="currentColor" d="M18.6 6.9v-.5l-6-6c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l5 5H1c-.5 0-.9.4-.9.9s.4.8.9.8h14.4l-4 4.1c-.3.3-.3.9 0 1.2.2.2.4.2.6.2.2 0 .4-.1.6-.2l5.2-5.2h.2c.5 0 .8-.4.8-.8 0-.3 0-.5-.2-.7z"></path></svg></button>
					</div>
					<div class="center">
						<br>
						<a href="javascript:void(0);" data-ajax="/forgot" class="grey-text text-darken-3"><?php echo __( 'Forgot Password?' );?></a>
					</div>
					<div class="dt_social_login">
						<?php if($config->facebookLogin == '1' ){ ?><a href="<?php echo $site_url;?>/social-login.php?provider=Facebook" class="btn_social btn_fb bold" onclick="clickAndDisable(this);" title="<?php echo __( 'Login with Facebook' );?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13.397,20.997v-8.196h2.765l0.411-3.209h-3.176V7.548c0-0.926,0.258-1.56,1.587-1.56h1.684V3.127	C15.849,3.039,15.025,2.997,14.201,3c-2.444,0-4.122,1.492-4.122,4.231v2.355H7.332v3.209h2.753v8.202H13.397z"/></svg></a><?php } ?><?php if($config->twitterLogin == '1' ){ ?><a href="<?php echo $site_url;?>/social-login.php?provider=Twitter" class="btn_social btn_tw bold" onclick="clickAndDisable(this);" title="<?php echo __( 'Login with Twitter' );?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"/></svg></a><?php } ?><?php if($config->googleLogin == '1' ){ ?><a href="<?php echo $site_url;?>/social-login.php?provider=Google" class="btn_social btn_gp bold" onclick="clickAndDisable(this);" title="<?php echo __( 'Login with Google' );?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20.283,10.356h-8.327v3.451h4.792c-0.446,2.193-2.313,3.453-4.792,3.453c-2.923,0-5.279-2.356-5.279-5.28	c0-2.923,2.356-5.279,5.279-5.279c1.259,0,2.397,0.447,3.29,1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233	c-4.954,0-8.934,3.979-8.934,8.934c0,4.955,3.979,8.934,8.934,8.934c4.467,0,8.529-3.249,8.529-8.934	C20.485,11.453,20.404,10.884,20.283,10.356z"/></svg></a><?php } ?><?php if($config->VkontakteLogin == '1' ){ ?><a href="<?php echo $site_url;?>/social-login.php?provider=Vkontakte" class="btn_social btn_vk bold" onclick="clickAndDisable(this);" title="<?php echo __( 'Login with VK' );?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20.8,7.74C20.93,7.32 20.8,7 20.18,7H18.16C17.64,7 17.41,7.27 17.28,7.57C17.28,7.57 16.25,10.08 14.79,11.72C14.31,12.19 14.1,12.34 13.84,12.34C13.71,12.34 13.5,12.19 13.5,11.76V7.74C13.5,7.23 13.38,7 12.95,7H9.76C9.44,7 9.25,7.24 9.25,7.47C9.25,7.95 10,8.07 10.05,9.44V12.42C10.05,13.08 9.93,13.2 9.68,13.2C9,13.2 7.32,10.67 6.33,7.79C6.13,7.23 5.94,7 5.42,7H3.39C2.82,7 2.7,7.27 2.7,7.57C2.7,8.11 3.39,10.77 5.9,14.29C7.57,16.7 9.93,18 12.08,18C13.37,18 13.53,17.71 13.53,17.21V15.39C13.53,14.82 13.65,14.7 14.06,14.7C14.36,14.7 14.87,14.85 16.07,16C17.45,17.38 17.67,18 18.45,18H20.47C21.05,18 21.34,17.71 21.18,17.14C21,16.57 20.34,15.74 19.47,14.76C19,14.21 18.29,13.61 18.07,13.3C17.77,12.92 17.86,12.75 18.07,12.4C18.07,12.4 20.54,8.93 20.8,7.74Z"/></svg></a><?php } ?><?php if($config->wowonder_login == '1' ){ ?><a href="<?php echo $config->wowonder_domain_uri.'/oauth?app_id='.$config->wowonder_app_ID;?>" class="btn_social btn_wo bold" onclick="clickAndDisable(this);" title="<?php echo __( 'Login with Wowonder' );?>"><img src="<?php echo $config->wowonder_domain_icon;?>"></a><?php } ?>
					</div>
					<hr class="border_hr">
					<p class="center"><?php echo __( 'Don\'t have an account?' ); ?> <a href="<?php echo $site_url;?>/register" data-ajax="/register" class="main"><?php echo __( 'Register' );?></a></p>
				</form>
			</div>
			<footer class="page_footer dt_auth_footr_page">
				<div class="footer-copyright">
					<div class="valign-wrapper">
						<div>
							<ul class="dt_footer_links">
								<li><a href="<?php echo $site_url;?>/blog" data-ajax="/blog"><?php echo __( 'Blog' );?></a></li>
								&nbsp;-&nbsp;<li><a href="<?php echo $site_url;?>/about" data-ajax="/about"><?php echo __( 'About Us' );?></a></li>
								&nbsp;-&nbsp;<li><a href="<?php echo $site_url;?>/terms" data-ajax="/terms"><?php echo __( 'Terms' );?></a></li>
								&nbsp;-&nbsp;<li><a href="<?php echo $site_url;?>/contact" data-ajax="/contact"><?php echo __( 'Contact' );?></a></li>
							</ul>
						</div>
						<div>
							<?php require( $theme_path . 'main' . $_DS . 'custom-page.php' );?>
							<span class="dt_foot_langs">
								<a class="dropdown-trigger" href="#" data-target="lang_dropdown_auth"><?php echo __( 'Language' );?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7,15L12,10L17,15H7Z" /></svg></a>
								<ul id="lang_dropdown_auth" class="dropdown-content">
									<?php
										$language = Dataset::load('language');
										if (isset($language) && !empty($language)) {
											foreach ($language as $key => $val) {
									?>
										<li <?php if( GetActiveLang() == $key ){ echo 'style="background-color: #f1f2f3;"';}?>><a href="?language=<?php echo $key;?>"><?php echo $val;?></a></li>
									<?php } } ?>
								</ul>
							</span>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<svg class="svg_divider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="none" width="100%" height="100%" version="1.1"><path d="M0,0 L100,0 L100,100 L0,100 C66.6666667,83.3333333 100,66.6666667 100,50 C100,33.3333333 66.6666667,16.6666667 0,0 Z" fill="currentColor"></path></svg>
	</div>
	<div class="slider_side">
		<div class="dt_auth_login_bg_box">
			<h2><?php echo __( 'Meet new and interesting people.' );?></h2>
			<h5><?php echo __( 'Join' );?> <?php echo ucfirst( $config->site_name );?>, <?php echo __( 'where you could meet anyone, anywhere!' );?></h5>
		</div>
		<div class="carousel carousel-slider login-auth center">
			<div class="carousel-item" href="#one!">
				<img src="<?php echo $theme_url;?>assets/img/login-sm.jpg"/>
			</div>
			<div class="carousel-item" href="#two!">
				<img src="<?php echo $theme_url;?>assets/img/login-md.jpg"/>
			</div>
			<div class="carousel-item" href="#three!">
				<img src="<?php echo $theme_url;?>assets/img/login.jpg"/>
			</div>
		</div>
	</div>
</div>