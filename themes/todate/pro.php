<?php if( $profile->is_pro == 1 ){?><script>window.location = window.site_url;</script><?php } ?>
<?php if( $config->pro_system == 0 ){?><script>window.location = window.site_url;</script><?php } ?>
<?php if( isGenderFree($profile->gender) === true ){?><script>window.location = window.site_url;</script><?php } ?>
<!-- Premium  -->
<div class="to_page_main_head premium">
	<div class="container">
		<h2><?php echo __( 'Amazing' );?> <?php echo ucfirst( $config->site_name );?> <?php echo __( 'features you can’t live without' );?>.</h2>
		<p><?php echo __( 'Activating Premium will help you meet more people, faster.' );?></p>
		<?php if( $config->pro_system == 1 ){ ?>
			<?php require( $theme_path . 'main' . $_DS . 'pro-users.php' );?>
		<?php } ?>
	</div>
</div>
<div class="container">
	<div class="dt_premium dt_sections">
		<div class="dt_pro_features">
			<h2><?php echo __( 'Why Choose Premium Membership' );?></h2>
			<div class="row">
				<div class="col s12 m12 l6">
					<div class="valign-wrapper">
						<span class="red-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5.5,2C3.56,2 2,3.56 2,5.5V18.5C2,20.44 3.56,22 5.5,22H16L22,16V5.5C22,3.56 20.44,2 18.5,2H5.5M5.75,4H18.25A1.75,1.75 0 0,1 20,5.75V15H18.5C16.56,15 15,16.56 15,18.5V20H5.75A1.75,1.75 0 0,1 4,18.25V5.75A1.75,1.75 0 0,1 5.75,4M14.44,6.77C14.28,6.77 14.12,6.79 13.97,6.83C13.03,7.09 12.5,8.05 12.74,9C12.79,9.15 12.86,9.3 12.95,9.44L16.18,8.56C16.18,8.39 16.16,8.22 16.12,8.05C15.91,7.3 15.22,6.77 14.44,6.77M8.17,8.5C8,8.5 7.85,8.5 7.7,8.55C6.77,8.81 6.22,9.77 6.47,10.7C6.5,10.86 6.59,11 6.68,11.16L9.91,10.28C9.91,10.11 9.89,9.94 9.85,9.78C9.64,9 8.95,8.5 8.17,8.5M16.72,11.26L7.59,13.77C8.91,15.3 11,15.94 12.95,15.41C14.9,14.87 16.36,13.25 16.72,11.26Z" /></svg>
						</span>
						<p><?php echo __( 'See more stickers on chat' );?></p>
					</div>
					<div class="valign-wrapper">
						<span class="pink-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" /></svg>
						</span>
						<p><?php echo __( 'Show in Premium bar' );?></p>
					</div>
					<div class="valign-wrapper">
						<span class="purple-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21M19.75,3.19L18.33,4.61C20.04,6.3 21,8.6 21,11H23C23,8.07 21.84,5.25 19.75,3.19M1,11H3C3,8.6 3.96,6.3 5.67,4.61L4.25,3.19C2.16,5.25 1,8.07 1,11Z" /></svg>
						</span>
						<p><?php echo __( 'See likes notifications' );?></p>
					</div>
					<div class="valign-wrapper">
						<span class="green-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18.65,2.85L19.26,6.71L22.77,8.5L21,12L22.78,15.5L19.24,17.29L18.63,21.15L14.74,20.54L11.97,23.3L9.19,20.5L5.33,21.14L4.71,17.25L1.22,15.47L3,11.97L1.23,8.5L4.74,6.69L5.35,2.86L9.22,3.5L12,0.69L14.77,3.46L18.65,2.85M9.5,7A1.5,1.5 0 0,0 8,8.5A1.5,1.5 0 0,0 9.5,10A1.5,1.5 0 0,0 11,8.5A1.5,1.5 0 0,0 9.5,7M14.5,14A1.5,1.5 0 0,0 13,15.5A1.5,1.5 0 0,0 14.5,17A1.5,1.5 0 0,0 16,15.5A1.5,1.5 0 0,0 14.5,14M8.41,17L17,8.41L15.59,7L7,15.59L8.41,17Z" /></svg>
						</span>
						<p><?php echo __( 'Get discount when buy boost me' );?></p>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="valign-wrapper">
						<span class="blue-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12,16L19.36,10.27L21,9L12,2L3,9L4.63,10.27M12,18.54L4.62,12.81L3,14.07L12,21.07L21,14.07L19.37,12.8L12,18.54Z" /></svg>
						</span>
						<p><?php echo __( 'Display first in find matches' );?></p>
					</div>
					<div class="valign-wrapper">
						<span class="teal-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13,15L15.5,17.5L16.92,16.08L12,11.16L7.08,16.08L8.5,17.5L11,15V21H13V15M3,3H21V5H3V3M3,7H13V9H3V7Z" /></svg>
						</span>
						<p><?php echo __( 'Display on top in random users' );?></p>
					</div>
					<?php if($config->video_chat == 1 && $config->audio_chat == 1){ ?>
						<div class="valign-wrapper">
							<span class="pink-text text-darken-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M17,10.5L21,6.5V17.5L17,13.5V17A1,1 0 0,1 16,18H4A1,1 0 0,1 3,17V7A1,1 0 0,1 4,6H16A1,1 0 0,1 17,7V10.5M14,16V15C14,13.67 11.33,13 10,13C8.67,13 6,13.67 6,15V16H14M10,8A2,2 0 0,0 8,10A2,2 0 0,0 10,12A2,2 0 0,0 12,10A2,2 0 0,0 10,8Z"></path></svg>
							</span>
							<p><?php echo __( 'Video and Audio calls to all users' );?></p>
						</div>
					<?php }else{ ?>
					<?php } ?>
					<div class="valign-wrapper">
						<span class="indigo-text text-darken-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z"></path></svg>
						</span>
						<p><?php echo __( 'Find potential matches by country' );?></p>
					</div>
				</div>
			</div>
		</div>
		<hr class="border_hr">
		<div class="dt_choose_pro">
			<h2><?php echo __( 'Choose a Plan' );?></h2>
			<div class="valign-wrapper dt_pro_plans">
				<div>
					<label>
						<input class="with-gap" name="pro_plan" type="radio" value="<?php echo __( 'Weekly' );?>" data-price="<?php echo (float)$config->weekly_pro_plan;?>"/>
						<span class="pln_name">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m21.28 4.473c-.848-.721-2.109-.604-2.817.262l-8.849 10.835-4.504-3.064c-.918-.626-2.161-.372-2.773.566s-.364 2.205.555 2.83l7.494 5.098 11.151-13.653c.707-.866.592-2.152-.257-2.874z" /></svg>
							<span class="duration"><?php echo __( 'Weekly' );?></span>
							<span class="price"><?php echo $config->currency_symbol . (float)$config->weekly_pro_plan;?></span>
						</span>
					</label>
				</div>
				<div>
					<label>
						<input class="with-gap" name="pro_plan" type="radio" value="<?php echo __( 'Monthly' );?>" data-price="<?php echo (float)$config->monthly_pro_plan;?>" checked />
						<span class="pln_name">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m21.28 4.473c-.848-.721-2.109-.604-2.817.262l-8.849 10.835-4.504-3.064c-.918-.626-2.161-.372-2.773.566s-.364 2.205.555 2.83l7.494 5.098 11.151-13.653c.707-.866.592-2.152-.257-2.874z" /></svg>
							<span class="duration"><?php echo __( 'Monthly' );?></span>
							<span class="price"><?php echo $config->currency_symbol . (float)$config->monthly_pro_plan;?></span>
							<span class="pln_popular"><?php echo __( 'Most popular' );?></span>
						</span>
					</label>
				</div>
				<div>
					<label>
						<input class="with-gap" name="pro_plan" type="radio" value="<?php echo __( 'Yearly' );?>" data-price="<?php echo (float)$config->yearly_pro_plan;?>"/>
						<span class="pln_name">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m21.28 4.473c-.848-.721-2.109-.604-2.817.262l-8.849 10.835-4.504-3.064c-.918-.626-2.161-.372-2.773.566s-.364 2.205.555 2.83l7.494 5.098 11.151-13.653c.707-.866.592-2.152-.257-2.874z" /></svg>
							<span class="duration"><?php echo __( 'Yearly' );?></span>
							<span class="price"><?php echo $config->currency_symbol . (float)$config->yearly_pro_plan;?></span>
						</span>
					</label>
				</div>
				<div>
					<label>
						<input class="with-gap" name="pro_plan" type="radio" value="<?php echo __( 'Lifetime' );?>" data-price="<?php echo (float)$config->lifetime_pro_plan;?>"/>
						<span class="pln_name">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m21.28 4.473c-.848-.721-2.109-.604-2.817.262l-8.849 10.835-4.504-3.064c-.918-.626-2.161-.372-2.773.566s-.364 2.205.555 2.83l7.494 5.098 11.151-13.653c.707-.866.592-2.152-.257-2.874z" /></svg>
							<span class="duration"><?php echo __( 'Lifetime' );?></span>
							<span class="price"><?php echo $config->currency_symbol . (float)$config->lifetime_pro_plan;?></span>
						</span>
					</label>
				</div>
			</div>
			<div class="pay_using">
				<p class="bold"><?php echo __( 'Pay Using' );?></p>
				<div class="pay_u_btns">
					<button id="paypal" onclick="clickAndDisable(this);" class="btn valign-wrapper">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M20.067 8.478c.492.88.556 2.014.3 3.327-.74 3.806-3.276 5.12-6.514 5.12h-.5a.805.805 0 0 0-.794.68l-.04.22-.63 3.993-.032.17a.804.804 0 0 1-.794.679H7.72a.483.483 0 0 1-.477-.558L7.418 21h1.518l.95-6.02h1.385c4.678 0 7.75-2.203 8.796-6.502zm-2.96-5.09c.762.868.983 1.81.752 3.285-.019.123-.04.24-.062.36-.735 3.773-3.089 5.446-6.956 5.446H8.957c-.63 0-1.174.414-1.354 1.002l-.014-.002-.93 5.894H3.121a.051.051 0 0 1-.05-.06l2.598-16.51A.95.95 0 0 1 6.607 2h5.976c2.183 0 3.716.469 4.523 1.388z" fill="currentColor"/></svg> <?php echo __( 'PayPal' );?>
					</button>
					<button id="stripe_pro_new" class="btn valign-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 9H4v7h16v-7zm0-4V5H4v3h16z" fill="currentColor"/></svg> <?php echo __( 'Card' );?></button>
					<?php if(!empty($config->bank_description)){?>
						<button id="bank_transfer" class="btn valign-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M2 20h20v2H2v-2zm2-8h2v7H4v-7zm5 0h2v7H9v-7zm4 0h2v7h-2v-7zm5 0h2v7h-2v-7zM2 7l10-5 10 5v4H2V7zm2 1.236V9h16v-.764l-8-4-8 4zM12 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="currentColor"/></svg> <?php echo __( 'Bank Transfer' );?></button>
					<?php } ?>
					<?php if(!empty($config->paysera_password)){?>
						<button id="sms_payment" onclick="PayProViaSms();" class="btn valign-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zm-.692-2H20V5H4v13.385L5.763 17zm5.53-4.879l4.243-4.242 1.414 1.414-5.657 5.657-3.89-3.89 1.415-1.414 2.475 2.475z" fill="currentColor"/></svg> <?php echo __( 'SMS' );?></button>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Premium  -->
<a href="javascript:void(0);" id="btnProSuccess" style="visibility: hidden;display: none;"></a>

<div class="bank_transfer_modal modal modal-fixed-footer">
	<div class="modal-dialog">
    <div class="modal-content dt_bank_trans_modal">
		<h4><?php echo __( 'Bank Transfer' );?></h4>
        <div class="modal-body">
            <div class="bank_info"><?php echo htmlspecialchars_decode($config->bank_description);?></div>
			<div class="dt_user_profile hide_alert_info_bank_trans">
                <span class="valign-wrapper">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13,13H11V7H13M13,17H11V15H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path></svg> <?php echo __( 'Note' );?>:
                </span>
				<ul class="browser-default dt_prof_vrfy">
					<li><?php echo __( 'Please transfer the amount of' );?> <b><span id="bank_transfer_price"></span></b> <?php echo __( 'to this bank account to buy' );?> <b>"<span id="bank_transfer_description"></span>"</b> <?php echo __( 'Plan Premium Membership' );?></li>
					<li><?php echo $config->bank_transfer_note;?></li>
				</ul>
            </div>
			<p class="dt_bank_trans_upl_rec"><a href="javascript:void(0);" onclick="$('.bank_transfer_modal').addClass('up_rec_active'); return false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M13.5,16V19H10.5V16H8L12,12L16,16H13.5M13,9V3.5L18.5,9H13Z"></path></svg> <?php echo __( 'Upload Receipt' );?></a></p>
            <div class="upload_bank_receipts">
                <div onclick="document.getElementById('receipt_img').click(); return false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M13.5,16V19H10.5V16H8L12,12L16,16H13.5M13,9V3.5L18.5,9H13Z"></path></svg>
                    <p><?php echo __( 'Upload Receipt' );?></p>
					<img id="receipt_img_preview" src="">
                </div>
            </div>
            <input type="file" id="receipt_img" class="hide" accept="image/x-png, image/gif, image/jpeg" name="receipt_img">
        </div>
        <!--<span style="display: block;text-align: center;" id="receipt_img_path"></span>-->
    </div>
    <div class="modal-footer">
		<div class="bank_transfr_progress hide" id="img_upload_progress">
			<div class="progress">
				<div id="img_upload_progress_bar" class="determinate progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
			</div>
		</div>
		<button class="modal-close waves-effect btn-flat"><?php echo __( 'Close' );?></button>
        <button class="waves-effect waves-green btn btn-flat bold" disabled id="btn-upload-receipt" data-selected=""><?php echo __( 'Confirm' );?></button>
    </div>
	</div>
</div>

<div id="stripe_modal_pro" class="modal">
	<form id="stripe_form" method="post">
		<div class="modal-content">
			<h4><?php echo __( 'Card' );?></h4>
			<div id="stripe_alert"></div>
			<div class="to_mat_input">
				<input class="browser-default" type="text" placeholder="<?php echo __( 'Name' );?>" value="<?php echo $profile->full_name;?>" id="stripe_name">
				<label for="stripe_name"><?php echo __( 'Name' );?></label>
			</div>
			<div class="to_mat_input">
				<input class="browser-default" type="email" placeholder="<?php echo __( 'Email' );?>" value="" data-email="<?php echo base64_encode($profile->email);?>" id="stripe_email">
				<label for="stripe_email"><?php echo __( 'Email' );?></label>
			</div>
			<hr class="border_hr">
			<div class="to_mat_input">
				<input class="browser-default" type="text" placeholder="<?php echo __( 'Card Number' );?>" id="stripe_number">
				<label for="stripe_number"><?php echo __( 'Card Number' );?></label>
			</div>
			<div class="row r_margin mb-0">
				<div class="col s3 m3 l3">
					<div class="to_mat_input">
						<select id="stripe_month" type="text" class="browser-default pp_select_has_label" autocomplete="off">
							<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
						</select>
						<label for="stripe_month"><?php echo __( 'Month' );?></label>
					</div>
				</div>
				<div class="col s3 m3 l3">
					<div class="to_mat_input">
						<select id="stripe_year" type="text" class="browser-default pp_select_has_label" autocomplete="off" placeholder="<?php echo __( 'Year' );?>">
							<?php for ($i=date('Y'); $i <= date('Y')+15; $i++) {  ?>
								<option value="<?php echo($i) ?>"><?php echo($i) ?></option>
							<?php } ?>
						</select>
						<label for="stripe_year"><?php echo __( 'Year' );?></label>
					</div>
				</div>
				<div class="col s6 m6 l6">
					<div class="to_mat_input">
						<input id="stripe_cvc" type="text" class="browser-default" autocomplete="off" placeholder="CVC" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
						<label for="stripe_cvc">CVC</label>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<p class="powrd_stripe">Powered by <svg width="62" height="25"><title>Stripe</title><path fill="currentColor" d="M5 10.1c0-.6.6-.9 1.4-.9 1.2 0 2.8.4 4 1.1V6.5c-1.3-.5-2.7-.8-4-.8C3.2 5.7 1 7.4 1 10.3c0 4.4 6 3.6 6 5.6 0 .7-.6 1-1.5 1-1.3 0-3-.6-4.3-1.3v3.8c1.5.6 2.9.9 4.3.9 3.3 0 5.5-1.6 5.5-4.5.1-4.8-6-3.9-6-5.7zM29.9 20h4V6h-4v14zM16.3 2.7l-3.9.8v12.6c0 2.4 1.8 4.1 4.1 4.1 1.3 0 2.3-.2 2.8-.5v-3.2c-.5.2-3 .9-3-1.4V9.4h3V6h-3V2.7zm8.4 4.5L24.6 6H21v14h4v-9.5c1-1.2 2.7-1 3.2-.8V6c-.5-.2-2.5-.5-3.5 1.2zm5.2-2.3l4-.8V.8l-4 .8v3.3zM61.1 13c0-4.1-2-7.3-5.8-7.3s-6.1 3.2-6.1 7.3c0 4.8 2.7 7.2 6.6 7.2 1.9 0 3.3-.4 4.4-1.1V16c-1.1.6-2.3.9-3.9.9s-2.9-.6-3.1-2.5H61c.1-.2.1-1 .1-1.4zm-7.9-1.5c0-1.8 1.1-2.5 2.1-2.5s2 .7 2 2.5h-4.1zM42.7 5.7c-1.6 0-2.5.7-3.1 1.3l-.1-1h-3.6v18.5l4-.7v-4.5c.6.4 1.4 1 2.8 1 2.9 0 5.5-2.3 5.5-7.4-.1-4.6-2.7-7.2-5.5-7.2zm-1 11c-.9 0-1.5-.3-1.9-.8V10c.4-.5 1-.8 1.9-.8 1.5 0 2.5 1.6 2.5 3.7 0 2.2-1 3.8-2.5 3.8z"></path></svg></p>
			<button class="modal-close waves-effect btn-flat"><?php echo __( 'Cancel' );?></button>
			<button type="button" class="btn btn_primary" onclick="SH_StripeRequestPro()" id="stripe_button_pro"><?php echo __( 'Pay' );?></button>
		</div>
	</form>
</div>

<script>
    document.getElementById('stripe_pro_new').addEventListener('click', function(e) {
        $('#stripe_email').val(atob($('#stripe_email').attr('data-email')));
        $('#stripe_number').val('');
        $('#stripe_cvc').val('');
        $('#stripe_modal_pro').removeClass('up_rec_img_ready, up_rec_active');
        $('#stripe_modal_pro').modal('open');
    });

    function PayProViaSms() {
        window.location = window.ajax + 'sms/generate_pro_link?price=' + getPrice() + '00';
    }

    function getDescription() {
        var plans = document.getElementsByName('pro_plan');
        for (index=0; index < plans.length; index++) {
            if (plans[index].checked) {
                return plans[index].value;
                break;
            }
        }
    }

    function getPrice() {
        var plans = document.getElementsByName('pro_plan');
        for (index=0; index < plans.length; index++) {
            if (plans[index].checked) {
                return plans[index].getAttribute('data-price');
                break;
            }
        }
    }

    document.getElementById('paypal').addEventListener('click', function(e) {
        $.post(window.ajax + 'paypal/generate_link', {description:getDescription(), amount:getPrice(), mode: "premium-membarship"}, function (data) {
            if (data.status == 200) {
                window.location.href = data.location;
            } else {
                $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> Payment declined ');
            }
        });
        e.preventDefault();
    });

    document.getElementById('bank_transfer').addEventListener('click', function(e) {
        $('#bank_transfer_price').text('<?php echo $config->currency_symbol;?>' + getPrice());
        $('#bank_transfer_description').text(getDescription());
        $('#receipt_img_path').html('');
        $('#receipt_img_preview').attr('src', '');
		$('.bank_transfer_modal').removeClass('up_rec_img_ready, up_rec_active');
        $('.bank_transfer_modal').modal('open');
    });

    document.getElementById('receipt_img').addEventListener('change', function(e) {
        let imgPath = $(this)[0].files[0].name;
        if (typeof(FileReader) != "undefined") {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#receipt_img_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
        $('#receipt_img_path').html(imgPath);
		$('.bank_transfer_modal').addClass('up_rec_img_ready');
        $('#btn-upload-receipt').removeAttr('disabled');
        $('#btn-upload-receipt').removeClass('btn-flat').addClass('btn-success');
    });

    document.getElementById('btn-upload-receipt').addEventListener('click', function(e) {
        e.preventDefault();
        let bar = $('#img_upload_progress');
        let percent = $('#img_upload_progress_bar');
        let formData = new FormData();
        formData.append("description", getDescription());
        formData.append("price", getPrice());
        formData.append("mode", 'membership');
        formData.append("receipt_img", $("#receipt_img")[0].files[0], $("#receipt_img")[0].files[0].value);
        bar.removeClass('hide');
        $.ajax({
            xhr: function() {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        let percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        //status.html( percentComplete + "%");
                        percent.width(percentComplete + '%');
                        percent.html(percentComplete + '%');
                        if (percentComplete === 100) {
                            bar.addClass('hide');
                            percent.width('0%');
                            percent.html('0%');
                        }
                    }
                }, false);
                return xhr;
            },
            url: window.ajax + 'profile/upload_receipt',
            type: "POST",
            async: true,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 60000,
            dataType: false,
            data: formData,
            success: function(result) {
                if( result.status == 200 ){
                    $('.bank_transfer_modal').modal('close');
                    M.toast({html: '<?php echo __('Your receipt uploaded successfully.');?>'});
                    return false;
                }
            }
        });
    });
</script>