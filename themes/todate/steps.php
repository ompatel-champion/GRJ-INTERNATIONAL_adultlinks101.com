<?php
    $error = "";
    if( isset( $_SESSION['JWT'] ) ){
        $profile = auth();
    }else{
        exit();
    }
    $current_step = "";
    if( $profile->start_up == 0 ){
        $current_step = "slider-one-active";
    }else if( $profile->start_up == 1 ){
        if( $config->image_verification == 1 && $profile->status == 3 ){
            $current_step = "slider-one-active";
        }else {
            $current_step = "center slider-two-active";
        }
    }else if( $profile->start_up == 2 ){
        $current_step = "full slider-three-active";
    }

    global $db;
    if($config->emailValidation == '0'){
        if( $profile->start_up == 2 ){
            $db->where('id',$profile->id)->update('users',array('start_up'=>'3'));
            ?>
            <a href="javascript:void(0);" id="btnProSuccessRedirect" data-ajax="/find-matches" style="visibility: hidden;display: none;"></a>
            <script>
                setTimeout(() => {
                    $("#btnProSuccessRedirect").click();
                }, 1500);
            </script>
            <?php
        }
    }else{
//        if($config->pending_verification == '0'){
//            $db->where('id',$profile->id)->update('users',array('start_up'=>'2'));
//        }else{
//            if( $profile->start_up == 2 ){
//                $db->where('id',$profile->id)->update('users',array('start_up'=>'3'));
//                ?>
<!--                <a href="javascript:void(0);" id="btnProSuccessRedirect" data-ajax="/find-matches" style="visibility: hidden;display: none;"></a>-->
<!--                <script>-->
<!--                    setTimeout(() => {-->
<!--                        $("#btnProSuccessRedirect").click();-->
<!--                    }, 1500);-->
<!--                </script>-->
<!--                --><?php
//            }
//        }
    }
?>

<div class="container slider_container <?php echo $current_step;?>">
	<div class="dt_signup_steps">
		<?php if( $config->image_verification == 1 && $profile->snapshot !== '' && $profile->approved_at == 0){ ?>
			<div class="empty_state">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15,3H12V6H8V3H5A2,2 0 0,0 3,5V21A2,2 0 0,0 5,23H15A2,2 0 0,0 17,21V5A2,2 0 0,0 15,3M10,8A2,2 0 0,1 12,10A2,2 0 0,1 10,12A2,2 0 0,1 8,10A2,2 0 0,1 10,8M14,16H6V15C6,13.67 8.67,13 10,13C11.33,13 14,13.67 14,15V16M11,5H9V1H11V5M14,19H6V18H14V19M10,21H6V20H10V21M19,12V7H21V12H19M19,16V14H21V16H19Z" /></svg> <?php echo __('Your account wait admin photo verification. Please try again later.');?>
			</div>
		<?php }else{ ?>
			<div class="page-margin wow_creads_minstp">
				<div class="line">
					<div class="line_sec"></div>
					<div class="dot one"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>
					<div class="dot two"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>
					<div class="dot three"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>
				</div>
				<div class="steps">
					<div class="step step-one"><?php echo __( 'Avatar' );?></div>
					<div class="step step-two"><?php echo __( 'Info' );?></div>
					<div class="step step-three"><?php if( $config->emailValidation == "0" ) {?><?php echo __( 'Finish' );?><?php }else{ ?><?php echo __( 'Verification' );?><?php } ?></div>
				</div>
			</div>
			<div class="to_step_innr">
				<div class="slider-ctr">
					<div class="slider">
						<!-- Step 1  -->
						<form class="slider-form slider-one" style="<?php if( $config->image_verification == 1 && $profile->status == 3 ){ ?>padding: 0px;<?php }?>">
							<div class="choose_photo <?php if( $profile->status == 3 ){ ?>hide<?php }?>">
								<h6 class="bold"><?php echo ( $profile->full_name !== "" ? $profile->full_name : $profile->username ) ;?>, <?php echo __( 'people want to see what you look like!' );?></h6>
								<p><?php echo __( 'Upload Images to set your Profile Picture Image.' );?></p>
								<?php if( $profile->avater->full !== '' ){?>
									<span class="dt_selct_avatar" onclick="document.getElementById('avatar_img').click(); return false" style="background-image: url(<?php echo $profile->avater->full ;?>);"></span>
								<?php }else{ ?>
									<span class="dt_selct_avatar" onclick="document.getElementById('avatar_img').click(); return false">
										<span class="valign-wrapper svg-empty"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M5 11.1l2-2 5.5 5.5 3.5-3.5 3 3V5H5v6.1zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm11.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" fill="currentColor"/></svg></span>
									</span>
								<?php } ?>
								<input type="file" id="avatar_img" class="hide" accept="image/x-png, image/gif, image/jpeg" name="avatar">
								<div class="progress hide">
									<div class="determinate" style="width: 0%"></div>
								</div>
							</div>
							<?php if( $config->image_verification == 1 && $profile->snapshot == '' ){ ?>
                                <div class="webcam_photo_verification <?php if( $profile->status == 0 ){ ?>hide<?php }?>" >
                                    <h6 class="bold"><?php echo __( 'Verify your' );?> <?php echo $config->site_name;?> <?php echo __( 'account' );?>.</h6>
                                    <p><?php echo __( 'You will be required to take a selfie holding the ID document next to your face, so we can compare your photo with your actual look.This is just an additional security measure' );?>.</p>
                                    <div class="no_camera hide">
                                        <div class="empty_state">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3.27,2L2,3.27L4.73,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16C16.2,18 16.39,17.92 16.54,17.82L19.73,21L21,19.73M21,6.5L17,10.5V7A1,1 0 0,0 16,6H9.82L21,17.18V6.5Z" /></svg>
											<?php echo __( 'Your camera is off or disconnected, Please connect your camera and try again.' );?>.
										</div>
                                        <button class="btn btn_primary btn_round" id="btn-try-again"><?php echo __('Try again');?></button>
                                    </div>
									<div class="qd_verfy_pic_wcam row">
										<div class="col m6">
											<img src="<?php echo $theme_url;?>assets/img/img_verification.jpg" id="taken_shot" class="hide">
										</div>
										<div class="col m6">
											<div id="take_snapshot" class="hide">
												<video width="400" height="170" id="video" autoplay></video>
												<button class="waves-effect waves-light btn" id="btn-take-snapshot"><?php echo __( 'Take Snapshot' );?></button>
											</div>
											<div class="hide" id="retake_snapshot">
												<canvas width="226" height="170" class="camera_2" id='camera_canves'></canvas>
												<button class="waves-effect waves-light btn bold" id="btn-retake-snapshot"><?php echo __( 'Retake Snapshot' );?></button>
											</div>
										</div>
									</div>
                                </div>
                                <script>
                                    window.camera_canvas = document.getElementById("camera_canves");
                                    window.camera_ctx = window.camera_canvas.getContext('2d');

                                    navigator.getUserMedia = ( navigator.getUserMedia ||
                                        navigator.webkitGetUserMedia ||
                                        navigator.mozGetUserMedia ||
                                        navigator.msGetUserMedia);

                                    window.camera_video;
                                    var webcamStream;
                                    if (navigator.getUserMedia) {
                                        navigator.getUserMedia (

                                            // constraints
                                            {
                                                video: true,
                                                audio: false
                                            },

                                            // successCallback
                                            function(localMediaStream) {
                                                window.camera_video = document.getElementById('video');
                                                //video.src = window.URL.createObjectURL(localMediaStream);
                                                webcamStream = localMediaStream;
                                                window.camera_video.srcObject = webcamStream;
                                                $('.no_camera').addClass('hide');
                                                $('#take_snapshot').removeClass('hide');
                                                $('#retake_snapshot').addClass('hide');
                                                $('#taken_shot').removeClass('hide');
                                                $('#btn-upload-images').removeClass('hide');
                                                $('.step_footer').removeClass('hide');
                                                $('.slider-one').css({'padding': 'none'});
                                                $('.choose_photo').removeClass('hide');
                                                $('.webcam_photo_verification').addClass('hide');
                                            },

                                            // errorCallback
                                            function(err) {
                                                $('.slider-one').css({'padding': '0px'});
                                                $('.choose_photo').addClass('hide');
                                                $('.webcam_photo_verification').removeClass('hide');
                                                $('.no_camera').removeClass('hide');
                                                $('#take_snapshot').addClass('hide');
                                                $('#retake_snapshot').addClass('hide');
                                                $('#taken_shot').addClass('hide');
                                                $('#btn-upload-images').addClass('hide');
                                                $('.step_footer').addClass('hide');
                                                $('#camera_canves').addClass('hide');
                                                console.log("" + err);
                                            }
                                        );
                                    } else {
                                        alert("webRTC isn't supported in your device");
                                    }
                                </script>
							<?php } ?>
							<div class="step_footer">
								<button class="btn btn_primary bold first next" id="btn-upload-images" data-pending-verification="<?php echo $config->pending_verification;?>" data-image-verification="<?php echo $config->image_verification;?>" <?php if($profile->src == 'Facebook' ) { } else { echo 'disabled'; }?> data-src="<?php echo $profile->src;?>" data-selected="<?php if($profile->src == 'Facebook' ) { echo str_replace( $config->uri . '/' , '', $profile->avater->full); } ?>" data-defaultText="<?php echo __( 'Next' );?>"><span id="nexttext"><?php echo __( 'Next' );?></span></button>
							</div>
						</form>

						<!-- Step 2  -->
						<form class="slider-form slider-two">
							<div class="row r_margin">
								<div class="col s6">
									<div class="to_mat_input">
										<select class="browser-default pp_select_has_label" id="height" name="height" data-errmsg="<?php echo __( 'Your height is required.');?>"><?php echo DatasetGetSelect( null, "height", __("Height") );?></select>
										<label for="height"><?php echo __( 'Height' );?></label>
									</div>
								</div>
								<div class="col s6">
									<div class="to_mat_input">
										<select class="browser-default pp_select_has_label" id="hair" name="hair"><?php echo DatasetGetSelect( null, "hair_color", __("Choose your Hair Color") );?></select>
										<label for="hair"><?php echo __( 'Hair Color' );?></label>
									</div>
								</div>
							</div>
							<div class="row r_margin">
								<div class="col s6">
									<div class="to_mat_input">
										<input id="mobile" type="text" data-errmsg="<?php echo __( 'Your phone number is required.');?>" class="browser-default" placeholder="<?php echo __('Phone number, e.g +90..');?>" <?php if($config->sms_or_email == 'sms'){?> data-validation-type="sms" required<?php }else{?> data-validation-type="mail" <?php } ?> >
										<label for="mobile"><?php echo __( 'Mobile Number' );?></label>
									</div>
								</div>
								<div class="col s6">
									<div class="to_mat_input">
										<select id="country" class="browser-default pp_select_has_label" data-errmsg="<?php echo __( 'Select your country.');?>" required>
											<option value="" disabled selected><?php echo __( 'Choose your country' );?></option>
											<?php
												foreach( Dataset::load('countries') as $key => $val ){
													echo '<option value="'. $key .'" data-code="'. $val['isd'] .'">'. $val['name'] .'</option>';
												}
											?>
										</select>
										<label for="country"><?php echo __( 'Country' );?></label>
									</div>
								</div>
							</div>
							<div class="row r_margin mb-0">
								<div class="col s6">
									<div class="to_mat_input">
										<select id="gender" class="browser-default pp_select_has_label" name="gender" data-errmsg="<?php echo __( 'Choose your Gender');?>" required><?php echo DatasetGetSelect( null, "gender", __("Choose your Gender") );?></select>
										<label for="gender"><?php echo __( 'Gender' );?></label>
									</div>
								</div>
								<div class="col s6">
									<div class="to_mat_input">
										<input id="birthdate" data-errmsg="<?php echo __( 'Select your Birth date.');?>" placeholder="<?php echo __( 'Birthdate' );?>" type="text" class="datepicker user_bday browser-default" required>
										<label for="birthdate"><?php echo __( 'Birthdate' );?></label>
									</div>
								</div>
							</div>
							<div class="step_footer">
								<button class="btn btn_primary bold second next" data-src="<?php echo $profile->src;?>" data-emailvalidation="<?php echo $config->emailValidation;?>"><?php echo __( 'Next' );?></button>
							</div>
						</form>
						<!-- Step 3  -->
						<form class="slider-form slider-three" <?php if( $config->emailValidation == "0" ) {?>style="padding:0px;"<?php } ?>>
							<?php if( $config->emailValidation == "1" && $profile->src == 'site' ) {?>
								<?php if ( $config->sms_or_email == "sms" ) {?>
									<!-- Mobile -->
									<div class="otp_head">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16,18H7V4H16M11.5,22A1.5,1.5 0 0,1 10,20.5A1.5,1.5 0 0,1 11.5,19A1.5,1.5 0 0,1 13,20.5A1.5,1.5 0 0,1 11.5,22M15.5,1H7.5A2.5,2.5 0 0,0 5,3.5V20.5A2.5,2.5 0 0,0 7.5,23H15.5A2.5,2.5 0 0,0 18,20.5V3.5A2.5,2.5 0 0,0 15.5,1Z" /></svg>
										<p><?php echo __( 'Phone Verification Needed' );?></p>
										<div class="row">
											<div class="col s12 m2"></div>
											<div class="col s12 m8">
												<div class="input-field inline">
													<input id="mobile_validate" type="text" style="width: 200px;" value="<?php echo $profile->phone_number;?>">
												</div>
												<button class="btn waves-effect waves-light" style="margin-left: -5px;" id="send_otp"><?php echo __( 'Send OTP' );?></button>
											</div>
											<div class="col s12 m2"></div>
										</div>
									</div>
									<div class="enter_otp">
										<p><?php echo __( 'Please enter the verification code sent to your Phone' );?></p>
										<div id="otp_outer">
											<div id="otp_inner">
												<input id="otp_check_phone" type="text" maxlength="4" value="" pattern="\d*" title="Field must be a number." onkeyup="if (/\D/g.test(this.value)){ this.value = this.value.replace(/\D/g,'') } if($(this).val().length == 4){verify_sms_code(this);}" required />
												<a href="javascript:void(0);" data-ajax="/steps"><?php echo __( 'Resend' );?></a>
											</div>
										</div>
									</div>
									<!-- End Mobile -->
								<?php } ?>
								<?php if ( $config->sms_or_email == "mail" ) {?>
									<!-- Email -->
									<div class="otp_head">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg>
										<p><?php echo __( 'Email Verification Needed' );?></p>
										<div class="row">
											<div class="col s12 m2"></div>
											<div class="col s12 m8">
												<div class="input-field inline">
													<input id="email" type="email" value="<?php echo strtolower($profile->email);?>" data-email="<?php echo strtolower($profile->email);?>">
												</div>
												<button class="btn waves-effect waves-light" id="send_otp_email"><?php echo __( 'Send OTP' );?></button>
											</div>
											<div class="col s12 m2"></div>
										</div>
									</div>
									<div class="enter_otp_email">
										<p><?php echo __( 'Please enter the verification code sent to your Email' );?></p>
										<div id="otp_outer">
											<div id="otp_inner">
												<input id="otp_check_email" type="text" maxlength="4" value="" pattern="\d*" title="Field must be a number." onkeyup="if (/\D/g.test(this.value)){ this.value = this.value.replace(/\D/g,'') } if($(this).val().length == 4){verify_email_code(this);}" required/>
												<a href="<?php echo $site_url;?>/steps" data-ajax="/steps"><?php echo __( 'Resend' );?></a>
											</div>
										</div>
									</div>
									<!-- End Email -->
								<?php } ?>
							<?php }else{ ?>
								<div class="dt_p_head center pro_success">
									<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
									<h2 class="light"><?php echo __( 'Congratulations!' );?></h2>
									<p class="bold"><?php echo __('You have successfully registered.');?></p>
								</div>
							<?php } ?>
							<div class="step_footer">
								<button class="btn btn_primary bold reset" disabled><?php echo __( 'Finish' );?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php }?>
	</div>
</div>

<!-- Images Modal -->
    <div id="modal_imgs" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4><span class="count_imgs"></span> <?php echo __( 'Images Uploaded' );?></h4>
            <p class="select_profile_image" style="display:none;"><?php echo __( 'Now, select any one image that you want to set as your Profile Picture.' );?></p>
            <div id="image_holder"></div>
            <div class="progress">
                <div class="determinate" style="width: 0%"></div >
            </div>
            <div id="status"></div>
        </div>
        <div class="modal-footer">
            <div id="modal_imgs_info"></div><button class="modal-close waves-effect waves-green btn-flat btn_primary" disabled data-selected=""><?php echo __( 'Apply' );?></button>
        </div>
    </div>
<!-- End Images Modal -->
<?php if( $config->image_verification == 1 ){ ?>
<style>
    .slider_container.center .line .dot-move {
        left: 50%;
        animation: .3s anim 1;
    }
</style>
<?php }?>