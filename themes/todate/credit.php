<?php if( isGenderFree($profile->gender) === true ){?><script>window.location = window.site_url;</script><?php } ?>
<?php //$profile = auth();?>
<!-- Credits  -->
<div class="to_page_main_head credits">
	<div class="container">
		<h2><?php echo ucfirst( $config->site_name );?> <?php echo __( 'Credits' );?></h2>
		<p><?php echo __( 'Double your chances for a friendship' );?></p>
	</div>
</div>
<div class="container">
	<div class="dt_credits dt_sections">
		<div class="credit_bln">
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-12.95L16.95 12 12 16.95 7.05 12 12 7.05zm0 2.829L9.879 12 12 14.121 14.121 12 12 9.879z" fill="currentColor"></path></svg>
				<h2><?php echo __( 'Your' );?> <?php echo __( 'Credits balance' );?></h2>
				<p><span><?php echo (int)$profile->balance;?></span> <?php echo __( 'Credits' );?></p>
			</div>
		</div>
		<hr class="border_hr">
		<div class="row">
			<div class="col s12 l8"> <!-- Plans -->
				<div class="credit_pln">
					<h2><?php echo __( 'Buy Credits' );?></h2>
					<div class="dt_plans">
						<p>
							<input type="radio" name="plans" id="plan_1" value="<?php echo __( 'Bag of Credits' ) . " " . (int)$config->bag_of_credits_amount;?>" data-price="<?php echo (int)$config->bag_of_credits_price;?>">
							<label for="plan_1" class="plan_1">
								<span class="title"><?php echo __( 'Bag of Credits' );?></span>
								<img src="<?php echo $theme_url;?>assets/img/credits/bag.png" alt="<?php echo __( 'Bag of Credits' );?>"/>
								<b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-12.95L16.95 12 12 16.95 7.05 12 12 7.05zm0 2.829L9.879 12 12 14.121 14.121 12 12 9.879z" fill="currentColor"></path></svg> <?php echo (int)$config->bag_of_credits_amount;?> <?php echo __( 'Credits' );?></b>
								<span class="amount"><?php echo $config->currency_symbol . (int)$config->bag_of_credits_price;?></span>
							</label>
						</p>
						<p>
							<input type="radio" name="plans" id="plan_2" value="<?php echo __( 'Box of Credits' ) . " " .(int)$config->box_of_credits_amount;?>" data-price="<?php echo (int)$config->box_of_credits_price;?>">
							<label for="plan_2" class="plan_2">
								<span class="title"><?php echo __( 'Box of Credits' );?></span>
								<img src="<?php echo $theme_url;?>assets/img/credits/box.png" alt="<?php echo __( 'Box of Credits' );?>"/>
								<b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-12.95L16.95 12 12 16.95 7.05 12 12 7.05zm0 2.829L9.879 12 12 14.121 14.121 12 12 9.879z" fill="currentColor"></path></svg> <?php echo (int)$config->box_of_credits_amount;?> <?php echo __( 'Credits' );?></b>
								<span class="amount"><?php echo $config->currency_symbol . (int)$config->box_of_credits_price;?></span>
							</label>
						</p>
						<p>
							<input type="radio" name="plans" id="plan_3" value="<?php echo __( 'Chest of Credits' ) . " " .(int)$config->chest_of_credits_amount;?>" data-price="<?php echo (int)$config->chest_of_credits_price;?>">
							<label for="plan_3" class="plan_3">
								<span class="title"><?php echo __( 'Chest of Credits' );?></span>
								<img src="<?php echo $theme_url;?>assets/img/credits/chest.png" alt="<?php echo __( 'Chest of Credits' );?>"/>
								<b><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-12.95L16.95 12 12 16.95 7.05 12 12 7.05zm0 2.829L9.879 12 12 14.121 14.121 12 12 9.879z" fill="currentColor"></path></svg> <?php echo (int)$config->chest_of_credits_amount;?> <?php echo __( 'Credits' );?></b>
								<span class="amount"><?php echo $config->currency_symbol . (int)$config->chest_of_credits_price;?></span>
							</label>
						</p>
					</div>
					<div class="pay_using hidden">
						<p class="bold"><?php echo __( 'Pay Using' );?></p>
						<div class="pay_u_btns">
							<button id="paypal" onclick="clickAndDisable(this);" class="btn valign-wrapper">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M20.067 8.478c.492.88.556 2.014.3 3.327-.74 3.806-3.276 5.12-6.514 5.12h-.5a.805.805 0 0 0-.794.68l-.04.22-.63 3.993-.032.17a.804.804 0 0 1-.794.679H7.72a.483.483 0 0 1-.477-.558L7.418 21h1.518l.95-6.02h1.385c4.678 0 7.75-2.203 8.796-6.502zm-2.96-5.09c.762.868.983 1.81.752 3.285-.019.123-.04.24-.062.36-.735 3.773-3.089 5.446-6.956 5.446H8.957c-.63 0-1.174.414-1.354 1.002l-.014-.002-.93 5.894H3.121a.051.051 0 0 1-.05-.06l2.598-16.51A.95.95 0 0 1 6.607 2h5.976c2.183 0 3.716.469 4.523 1.388z" fill="currentColor"></path></svg> <?php echo __( 'PayPal' );?>
							</button>
							<button id="stripe_credit" class="btn valign-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 9H4v7h16v-7zm0-4V5H4v3h16z" fill="currentColor"/></svg> <?php echo __( 'Card' );?></button>
							<?php if(!empty($config->bank_description)){?>
								<button id="bank_transfer" class="btn valign-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M2 20h20v2H2v-2zm2-8h2v7H4v-7zm5 0h2v7H9v-7zm4 0h2v7h-2v-7zm5 0h2v7h-2v-7zM2 7l10-5 10 5v4H2V7zm2 1.236V9h16v-.764l-8-4-8 4zM12 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="currentColor"/></svg> <?php echo __( 'Bank Transfer' );?></button>
							<?php } ?>
							<?php if(!empty($config->paysera_password)){?>
								<button id="sms_payment" onclick="PayViaSms();" class="btn valign-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zm-.692-2H20V5H4v13.385L5.763 17zm5.53-4.879l4.243-4.242 1.414 1.414-5.657 5.657-3.89-3.89 1.415-1.414 2.475 2.475z" fill="currentColor"/></svg> <?php echo __( 'SMS' );?></button>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 l4"><!-- Features -->
				<ul class="credit_ftr">
					<p><?php echo __( 'Use your Credits to' );?></p>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24"><path fill="currentColor" d="M174.89,512c-8.592,0.001-17.251-2.699-24.858-8.185 c-17.079-12.317-22.508-34.11-13.203-52.999c0.066-0.134,0.134-0.268,0.203-0.4l68.441-131.421h-67.61 c-32.229,0-58.13-24.373-60.246-56.693c-1.226-18.724,6.295-36.58,20.646-49.068L314.642,10.359c0.354-0.332,0.72-0.651,1.098-0.956 C323.232,3.339,332.666,0,342.303,0c15.391,0,29.116,7.99,36.716,21.373c7.561,13.313,7.433,29.097-0.328,42.272l-63.878,112.352 h71.182c19.206,0,36.08,10.765,44.039,28.092c7.991,17.399,5.146,37.3-7.428,51.938c-7.197,8.379-19.824,9.337-28.203,2.141 c-8.379-7.196-9.337-19.824-2.141-28.203c3.197-3.722,2.263-7.35,1.422-9.181c-0.821-1.788-2.912-4.788-7.69-4.788H280.437 c-7.122,0-13.706-3.787-17.287-9.943c-3.582-6.155-3.619-13.751-0.099-19.942l80.955-142.389c0.068-0.121,0.138-0.241,0.209-0.36 c0.198-0.333,0.663-1.112,0.023-2.238c-0.64-1.126-1.547-1.126-1.935-1.126c-0.391,0-0.775,0.104-1.112,0.298L125.327,242.69 c-0.218,0.205-0.441,0.404-0.667,0.599c-6.418,5.499-7.418,11.954-7.127,16.4c0.628,9.594,7.814,19.307,20.332,19.307h100.574 c6.99,0,13.473,3.649,17.099,9.626c3.626,5.976,3.868,13.412,0.64,19.612l-83.554,160.439c-0.416,0.861-0.669,1.637,0.805,2.701 c1.385,0.999,2.048,0.631,2.692,0.03l154.641-166.997c7.505-8.104,20.159-8.59,28.264-1.086c8.104,7.505,8.591,20.159,1.086,28.264 L205.114,498.966c-0.204,0.219-0.412,0.435-0.625,0.645C196.179,507.814,185.587,512,174.89,512z"></path></svg> <?php echo __( 'Boost your profile' );?>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20,7h-1.209C18.922,6.589,19,6.096,19,5.5C19,3.57,17.43,2,15.5,2c-1.622,0-2.705,1.482-3.404,3.085 C11.407,3.57,10.269,2,8.5,2C6.57,2,5,3.57,5,5.5C5,6.096,5.079,6.589,5.209,7H4C2.897,7,2,7.897,2,9v2c0,1.103,0.897,2,2,2v7 c0,1.103,0.897,2,2,2h5h2h5c1.103,0,2-0.897,2-2v-7c1.103,0,2-0.897,2-2V9C22,7.897,21.103,7,20,7z M15.5,4 C16.327,4,17,4.673,17,5.5C17,7,16.374,7,16,7h-2.478C14.033,5.424,14.775,4,15.5,4z M7,5.5C7,4.673,7.673,4,8.5,4 c0.888,0,1.714,1.525,2.198,3H8C7.626,7,7,7,7,5.5z M4,9h7v2H4V9z M6,20v-7h5v7H6z M18,20h-5v-7h5V20z M13,11V9.085 C13.005,9.057,13.011,9.028,13.017,9H20l0.001,2H13z"/></svg> <?php echo __( 'Send a gift' );?>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" fill="currentColor"/></svg> <?php echo __( 'Get seen 100x in Discover' );?>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,10.84 21.79,9.69 21.39,8.61L19.79,10.21C19.93,10.8 20,11.4 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.6,4 13.2,4.07 13.79,4.21L15.4,2.6C14.31,2.21 13.16,2 12,2M19,2L15,6V7.5L12.45,10.05C12.3,10 12.15,10 12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12C14,11.85 14,11.7 13.95,11.55L16.5,9H18L22,5H19V2M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12H16A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8V6Z" /></svg> <?php echo __( 'Put yourself First in Search' );?>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21.796,9.982C20.849,5.357,16.729,2,12,2C6.486,2,2,6.486,2,12c0,4.729,3.357,8.849,7.982,9.796	c0.067,0.014,0.135,0.021,0.201,0.021c0.263,0,0.518-0.104,0.707-0.293l10.633-10.633C21.761,10.653,21.863,10.313,21.796,9.982z M11,18c0-0.545,0.055-1.088,0.162-1.612c0.105-0.515,0.263-1.02,0.466-1.5c0.201-0.476,0.45-0.934,0.737-1.359	c0.29-0.428,0.619-0.826,0.978-1.186c0.359-0.358,0.758-0.688,1.184-0.977c0.428-0.288,0.886-0.537,1.36-0.738	c0.481-0.203,0.986-0.36,1.501-0.466c0.704-0.145,1.442-0.183,2.17-0.134l-8.529,8.529C11.016,18.372,11,18.187,11,18z M4,12	c0-4.411,3.589-8,8-8c2.909,0,5.528,1.589,6.929,4.005c-0.655,0.004-1.31,0.068-1.943,0.198c-0.643,0.132-1.274,0.328-1.879,0.583	c-0.594,0.252-1.164,0.563-1.699,0.923c-0.533,0.361-1.03,0.771-1.479,1.22s-0.858,0.945-1.221,1.48	c-0.359,0.533-0.67,1.104-0.922,1.698c-0.255,0.604-0.451,1.235-0.583,1.878C9.068,16.643,9,17.32,9,18	c0,0.491,0.048,0.979,0.119,1.461C6.089,18.288,4,15.336,4,12z"></path></svg> <?php echo __( 'Get additional Stickers' );?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Credits  -->
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
					<li><?php echo __( 'Please transfer the amount of' );?> <b><span id="bank_transfer_price"></span></b> <?php echo __( 'to this bank account to buy' );?> <b>"<span id="bank_transfer_description"></span>"</b></li>
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

<div id="stripe_modal" class="modal">
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
			<button type="button" class="btn btn_primary" onclick="SH_StripeRequest()" id="stripe_button"><?php echo __( 'Pay' );?></button>
		</div>
	</form>
</div>

<div class="stripe_mcodal modal modal-fixed-footer">
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
                        <li><?php echo __( 'Please transfer the amount of' );?> <b><span id="bank_transfer_price"></span></b> <?php echo __( 'to this bank account to buy' );?> <b>"<span id="bank_transfer_description"></span>"</b></li>
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

<script>
function PayViaSms() {
    window.location = window.ajax + 'sms/generate_credit_link?price=' + getPrice() + '00';
}

function getDescription() {
    var plans = document.getElementsByName('plans');
    for (index=0; index < plans.length; index++) {
        if (plans[index].checked) {
            return plans[index].value;
            break;
        }
    }
}

function getPrice() {
    var plans = document.getElementsByName('plans');
    for (index=0; index < plans.length; index++) {
        if (plans[index].checked) {
            return plans[index].getAttribute('data-price');
            break;
        }
    }
}

document.getElementById('paypal').addEventListener('click', function(e) {
    $.post(window.ajax + 'paypal/generate_link', {description:getDescription(), amount:getPrice(), mode: "credits"}, function (data) {
        if (data.status == 200) {
            window.location.href = data.location;
        } else {
            $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> <?php echo __( 'Payment declined' );?> ');
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

document.getElementById('stripe_credit').addEventListener('click', function(e) {
    $('#stripe_email').val(atob($('#stripe_email').attr('data-email')));
    $('#stripe_number').val('');
    $('#stripe_cvc').val('');
    $('#stripe_modal').removeClass('up_rec_img_ready, up_rec_active');
    $('#stripe_modal').modal('open');
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
        formData.append("mode", 'credits');
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