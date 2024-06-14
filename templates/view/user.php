<?php

$user_id = get_current_user_id();
$redirect_url = FACEBOOK_REDIRECT_URL;
$facebook_oauth = new FacebookOAuth(
	'873311951299343',
	$redirect_url,
	'0fa9739b2ff254c148fd51a463b55d3a'
);


if (isset($_GET["code"])) {
	$code = $_GET["code"];
	$long_lived_token = $facebook_oauth->getLongLivedToken($code);

	update_user_meta($user_id, 'facebook_authentication_login', $long_lived_token);
	wp_redirect('/user/dashboard');

	//UserDataStore::storeUserDataFB($fb_pages_data);
}

$access_token = get_user_meta($user_id, 'facebook_authentication_login', true);
$is_valid_token = $facebook_oauth->isTokenExpired($access_token);

$fb_pages_data = [];
if ($is_valid_token) {
	$fb_pages_data = $facebook_oauth->fetchUserPages($access_token);
}
//var_dump($fb_pages_data);
//var_dump($access_token);
//var_dump($is_valid_token);

require_once HIIVE_PATH . 'includes/class-common-media.php';

$userdata = UserDataStore::getUserDataFB();
$getFacebookAccountCount = UserDataStore::getFacebookAccountCount();
// echo "<pre>";
// print_r($userdata);
// $user_id = $userdata[0]['user_id'];
// echo $user_id;
// print_r($getFacebookAccountCount);
// echo "</pre>";
// Loop through each entry in the $userdata array

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


<?php require_once PLUGIN_ROOT_PATH . 'templates/template-parts/header-dashboard.php'; ?>

<div class="container-fluid">
	<?php require_once PLUGIN_ROOT_PATH . 'templates/template-parts/user-nav.php'; ?>
	<main class="main-content" id="main">
		<div class="row align-items-center">
			<div class="space-col col-12 col-md-6">
				<div>
					<h3 class="title mb-0 dark-gray f-18 semi-bold p-0">Pievieno savu sociālo kontu</h3>
					<div class="content">
						<p class="lightgray mb-4 f-13 regular">Pievieno sociālos kontus kurus vēlies pārvaldīt</p>
					</div>
					<div class="row mobile-scrollable">
						<div class="col-12 col-md-4 mb-3">
							<?php
							$link_url = $is_valid_token ? '#' : $fb_auth_url;
							?>
							<a href="<?php echo $link_url; ?>" class="plus-icon<?php echo $is_valid_token ? ' facebook' : ''; ?>">
								<div class="dash-card">
									<div class="social-media">
										<img src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" alt="">
									</div>
									<p class="f-14">Facebook Lapa</p>
									<img class="plus-icon-image" src="<?php echo IMG_DIR; ?>/images-icons/plus%20%281%29.png" alt="">
								</div>
							</a>

						</div>
						<div class="col-12 col-md-4 mb-3">
							<div class="dash-card">
								<div class="social-media"><img src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" alt=""></div>
								<p class="f-14">Facebook Grupa</p>
								<a href="#" class="plus-icon"><img src="<?php echo IMG_DIR; ?>/images-icons/plus%20%281%29.png" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-3">
							<div class="dash-card">
								<div class="social-media"><img src="<?php echo IMG_DIR; ?>/images-icons/instagram.webp" alt=""></div>
								<p class="f-14">Instagrama Biznesa Konts</p>
								<a href="#" class="plus-icon instagram"><img src="<?php echo IMG_DIR; ?>/images-icons/plus%20%281%29.png" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-3">
							<div class="dash-card">
								<div class="social-media"><img src="<?php echo IMG_DIR; ?>/images-icons/tiktok.webp" alt=""></div>
								<p class="f-14">TikTok Konts </p>
								<a href="#" class="plus-icon"><img src="<?php echo IMG_DIR; ?>/images-icons/plus%20%281%29.png" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-3">
							<div class="dash-card">
								<div class="social-media"><img src="<?php echo IMG_DIR; ?>/images-icons/linkedin.webp" alt=""></div>
								<p class="f-14">LinkedIn Profils</p>
								<a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=776t7kxxpm910v&redirect_uri=https%3A%2F%2Fsocialhiiv.lv%2Ftest.php&scope=profile%2Cw_member_social" class="plus-icon"><img src="<?php echo IMG_DIR; ?>/images-icons/plus%20%281%29.png" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-3">
							<div class="dash-card">
								<div class="social-media"><img src="<?php echo IMG_DIR; ?>/images-icons/linkedin.webp" alt=""></div>
								<p class="f-14">LinkedIn Biznesa Lapa</p>
								<a href="#" class="plus-icon"><img src="<?php echo IMG_DIR; ?>/images-icons/plus%20%281%29.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class=" col-md-6 col-12 social-media-info">
				<div class="container">
					<div class="row mt-3 align-items-center">
						<div class="col-12">
							<div class="professional-box d-flex align-items-center justify-content-between mb-5">
								<h3 class="extra-bold f-24 m-0 dark-blue avenir-next">Professional</h3>
								<h2 class="m-0 dark-blue"><span class="extra-bold f-24 avenir-next">€25</span> <span class="f-13">.00/mēn</span></h2>
								<div class="upper-headline rounded">
									<p class="f-14 fw-bold dark-gray mb-0">Nomainīt plānu</p>
									<img src="<?php echo IMG_DIR; ?>/images-icons/social-tool.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="profess-right">
								<h3 class="f-20 dark-gray">Tavi pieejamo profilu <span class="dark f-22">Limiti</span></h3>
								<div class="count-table f-14">
									<div class="d-flex align-items-center justify-content-between rounded bg-white gap-3 p-2">
										<div class="d-flex align-items-center gap-2">
											<span class="green semi-bold f-14">3/10</span>
											<p class="mb-0 dark-gray f-14">Pievienoti profili</p>
										</div>
										<div class="d-flex align-items-center gap-2">
											<span class="dark semi-bold f-14">0/0</span>
											<p class="mb-0 dark-gray f-14">Papildus Komanda</p>
											<i class="fas fa-plus dark"></i>
										</div>
										<div class="d-flex align-items-center gap-2">
											<span class="dark semi-bold f-14">0/0</span>
											<p class="mb-0 dark-gray f-14">Papildus profili</p>
											<i class="fas fa-plus dark"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="relative pt-3">
						<div class="social-accordions">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item bg-transparent border-0">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button bg-transparent border-0 px-0 pb-0 box-shadow-none w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<span class="acordn-toggle d-flex justify-content-between align-items-center gray"><span class="semi-bold f-20"><img class="acc-icon" src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" alt=""> Facebook lapas/grupas</span><span>2 Instalēti</span></span>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body px-0 pt-0">
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="white-card social-profile">
														<div class="social-prf-icon">
															<img src="<?php echo IMG_DIR; ?>/images-icons/linkedin.webp" alt="">
															<div class="social-content">
																<h4 class="f-12 bold mb-0 mt-0">RJ Digital</h4>
																<p class="mb-0 f-11">@Digital Marketing and IT</p>
															</div>
														</div>

														<div class="delete-btn">
															<button type="button" class="bg-transparent border-0 p-0" data-bs-toggle="modal" data-bs-target="#dltModal">
																<img src="<?php echo IMG_DIR; ?>/images-icons/delete.png" alt="">
															</button>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="white-card social-profile">
														<div class="social-prf-icon">
															<img src="<?php echo IMG_DIR; ?>/images-icons/linkedin.webp" alt="">
															<div class="social-content">
																<h4 class="f-12 bold mb-0 mt-0">RJ Digital</h4>
																<p class="mb-0 f-11">@Digital Marketing and IT</p>
															</div>
														</div>

														<div class="delete-btn">
															<button type="button" class="bg-transparent border-0 p-0" data-bs-toggle="modal" data-bs-target="#dltModal">
																<img src="<?php echo IMG_DIR; ?>/images-icons/delete.png" alt="">
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item bg-transparent border-0">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button bg-transparent border-0 px-0 pb-0 box-shadow-none w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											<span class="acordn-toggle d-flex justify-content-between align-items-center gray"><span class="semi-bold f-20"><img class="acc-icon" src="<?php echo IMG_DIR; ?>/images-icons/instagram.webp" alt=""> Instagram Biznesa Konti</span><span>0 Instalēti</span></span>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body px-0 pt-0">

										</div>
									</div>
								</div>
								<div class="accordion-item bg-transparent border-0">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button bg-transparent border-0 px-0 pb-0 box-shadow-none w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
											<span class="acordn-toggle d-flex justify-content-between align-items-center gray"><span class="semi-bold f-20"><img class="acc-icon" src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" alt=""> LinkedIn profili/ biznesa lapas</span><span>2 Instalēti</span></span>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body px-0 pt-0">
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="white-card social-profile">
														<div class="social-prf-icon">
															<img src="<?php echo IMG_DIR; ?>/images-icons/linkedin.webp" alt="">
															<div class="social-content">
																<h4 class="f-12 bold mb-0 mt-0">RJ Digital</h4>
																<p class="mb-0 f-11">@Digital Marketing and IT</p>
															</div>
														</div>

														<div class="delete-btn">
															<button type="button" class="bg-transparent border-0 p-0" data-bs-toggle="modal" data-bs-target="#dltModal">
																<img src="<?php echo IMG_DIR; ?>/images-icons/delete.png" alt="">
															</button>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="white-card social-profile">
														<div class="social-prf-icon">
															<img src="<?php echo IMG_DIR; ?>/images-icons/linkedin.webp" alt="">
															<div class="social-content">
																<h4 class="f-12 bold mb-0 mt-0">RJ Digital</h4>
																<p class="mb-0 f-11">@Digital Marketing and IT</p>
															</div>
														</div>

														<div class="delete-btn">
															<button type="button" class="bg-transparent border-0 p-0" data-bs-toggle="modal" data-bs-target="#dltModal">
																<img src="<?php echo IMG_DIR; ?>/images-icons/delete.png" alt="">
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item bg-transparent border-0">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button bg-transparent border-0 px-0 pb-0 box-shadow-none w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
											<span class="acordn-toggle d-flex justify-content-between align-items-center gray"><span class="semi-bold f-20"><img class="acc-icon" src="<?php echo IMG_DIR; ?>/images-icons/instagram.webp" alt=""> Instagram Biznesa Konti</span><span>0 Instalēti</span></span>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body px-0 pt-0">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Delete Modal -->
		<div class="modal fade delete-modal" id="dltModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<h5 class="modal-title">Vai esi pārliecināts ka vēlies dzēst šo ierakstu?</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atpakaļ</button>
						<button type="button" class="btn btn-primary">Apstiprināt</button>
					</div>
				</div>
			</div>
		</div>
		<!-- / Delete Modal -->

		<!-- App Sidebar -->
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
			<div class="offcanvas-header">
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body d-flex justify-content-center flex-column px-5">
				<img src="/wp-content/uploads/2024/01/Black-and-White-Simple-Circle-Badge-Fashion-Logo-2.png" class="logo" alt="Logo" />
				<div class="social-media mt-5">
					<div class="d-flex align-items-center gap-3 mb-3">
						<img src="/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/instagram.webp" alt="Insta Icon">
						<h6 class="m-0">Instagram Biznesa Konts</h6>
					</div>
					<p>Neatradām nevienu kontu, pārliecinies, kas esi pierakstījies kontam kuru vēlies pievienot SocialHiiv</p>
				</div>
				<div class="social-instructions">
					<p><strong>Pārliecinies ka:</strong></p>
					<ul>
						<li> Pašlaik esi ielogojies Instagram kontā kuru vēlies pievienot profila. </li>
						<li> Tu aaptiprināji piekļuvi, lai SocialHiiv varētu pārvaldīt tavu kontu. </li>
					</ul>
				</div>
			</div>
		</div>
		<!-- / App Sidebar -->

		<div class="add_socail_account facebook">

			<div class="tabs_section">
				<div class="close_payout"> X </div>
				<div class="top_content">
					<img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" alt="">
					<span class="f-20 semi-bold gray"> Facebook pages</span>
					<p class="f-12 gray mt-2 mb-4">Facebook konti tavā esošajā abonētajā plānā: <span class="semi-bold" style="color:#45B854;">6/10 </span> </p>
				</div>
				<div id="exTab1">
					<ul class="nav nav-pills">
						<li class="active"><a href="#1a" data-toggle="tab">Atrast pēc Konta nosaukuma</a></li>
						<li><a href="#2a" data-toggle="tab">Atrast Ar Linku</a></li>
					</ul>

					<div class="tab-content clearfix">
						<div class="tab-pane active" id="1a">
							<p class="f-10 gray">
								Šeit Jūs redzat savus <?php echo ($getFacebookAccountCount) ? $getFacebookAccountCount : '0'; ?> Facebook biznesa kontus, kas savienoti ar Facebook kontu: <span class="semi-bold">Roberts Jaunzems</span>
							</p>
							<form class="search_bar" action="#">
								<input type="text" placeholder="Meklēt..." name="search" id="searchInput">
								<img style="width:20px" src="<?php echo IMG_DIR; ?>/images-icons/search-icon.png" />
							</form>

							<div class="bglight">
								<?php foreach ($fb_pages_data as $fb_page) : ?>
									<div class="account_list justify-content-between align-items-center added">
										<div class="account">
											<div>
												<?php
												// Fetch profile picture URL for the current page
												$profile_picture_url = ProfilePictureFetcher::getProfilePictureUrl($fb_page['id'], $fb_page['access_token']);

												// Print the profile picture URL
												echo "<img class='social_profile_img' src='{$profile_picture_url}' alt='{$fb_page['name']}'>";
												echo "<br>";
												?>
												<i class="fa-brands fa-facebook"></i>
											</div>
											<div class="name f-12 semi-bold">
												<?php echo $fb_page['name']; ?>
												<span class="light-gray regular">@<?php echo $fb_page['name']; ?></span>
											</div>
										</div>
										<div>
											<button class="byDefault" type="button" name="fb-addtolist" data-fb_page_id="<?php echo $fb_page['id']; ?>" data-fb_page_access_token="<?php echo $fb_page['access_token']; ?>" data-account_name="<?php echo $fb_page['name']; ?>">
												<div class="byDefault">
													<span>Pievienot </span>
													<i class="fa-solid fa-plus"></i>
												</div>
											</button>
											<button class="onAdd" type="button" name="fb-removedtolist" style="display: none;" data-fb_page_id="<?php echo $fb_page['id']; ?>" data-fb_page_access_token="<?php echo $fb_page['access_token']; ?>" data-account_name="<?php echo $fb_page['name']; ?>">
												<div class="onAdd">
													<span>Pievienots </span>
													<i class="fa-solid fa-check"></i>
													<i class="fa-solid fa-trash-can"></i>
												</div>
											</button>

										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<button class="f-12 semi-bold selected_account"> Esmu pievienojis izvēlētos kontus </button>
						</div>

						<div class="tab-pane" id="2a">
							<p class="f-10 gray mt-2 mb-4">Ievadiet Linku, lai atrastu savu Instagrama kontu: <span class="semi-bold">Konta īpašnieka vārds uzvārds </span></p>
							<form class="search_bar by_link" action="/action_page.php">
								<input type="text" placeholder="https://instagram.com/username" name="search">
								<button type="submit">Meklēt... <?php include PLUGIN_ROOT_PATH . 'assets/img/images-icons/search-icon.php'; ?></button>
							</form>
							<button class="f-12 semi-bold selected_account"> Esmu pievienojis izvēlētos kontus </button>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Adding social account  start-->

		<div class="add_socail_account">

			<div class="tabs_section">
				<div class="close_payout"> X </div>
				<div class="top_content">
					<img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/insta.webp" alt="">
					<span class="f-20 semi-bold gray"> Instagram Biznesa Konti </span>
					<p class="f-12 gray mt-2 mb-4">Intagrama konti tavā esošajā abonētajā plānā: <span class="semi-bold" style="color:#45B854;">6/10 </span> </p>
				</div>
				<div id="exTab1">
					<ul class="nav nav-pills">
						<li class="active"><a href="#1a" data-toggle="tab">Atrast pēc Konta nosaukuma</a></li>
						<li><a href="#2a" data-toggle="tab">Atrast Ar Linku</a></li>
					</ul>

					<div class="tab-content clearfix">
						<div class="tab-pane active" id="1a">
							<p class="f-10 gray">Šeit Jūs redzat savus 2 Intagrama biznesa kontus, kas savienoti ar Facebook kontu: <span class="semi-bold"> Roberts Jaunzems</span> </p>
							<form class="search_bar" action="/action_page.php">
								<input type="text" placeholder="Meklēt..." name="search">
								<button type="submit"> <img style="width:20px" src="<?php echo IMG_DIR; ?>/images-icons/search-icon.png" /> </button>
							</form>

							<div class="bglight">
								<div class="account_list  d-flex justify-content-between align-items-center added">
									<div class="account">
										<div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
										<div class="name f-12 semi-bold"> SoberWayEU <span class="light-gray regular"> @soberWayEU</span> </div>
									</div>
									<div>
										<div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i> <i class="fa-solid fa-trash-can"></i> </div>
										<div class="byDefault"> <span>Pievienot </span> <i class="fa-solid fa-plus"></i> </div>
									</div>
								</div>

								<div class="account_list d-flex justify-content-between align-items-center ">
									<div class="account">
										<div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
										<div class="name f-12 semi-bold"> SoberWayEU <span class="light-gray regular"> @soberWayEU</span> </div>
									</div>
									<div>
										<div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i> <i class="fa-solid fa-trash-can"></i> </div>
										<div class="byDefault"> <span>Pievienot </span> <i class="fa-solid fa-plus"></i> </div>
									</div>
								</div>
							</div>

							<button class="f-12 semi-bold selected_account"> Esmu pievienojis izvēlētos kontus </button>
						</div>

						<div class="tab-pane" id="2a">
							<p class="f-10 gray mt-2 mb-4">Ievadiet Linku, lai atrastu savu Instagrama kontu: <span class="semi-bold">Konta īpašnieka vārds uzvārds </span>
							<form class="search_bar by_link" action="/action_page.php">
								<input type="text" placeholder="https://instagram.com/username" name="search">
								<button type="submit"> Meklēt... <?php include PLUGIN_ROOT_PATH . 'assets/img/images-icons/search-icon.php'; ?> </button>
							</form>
							<button class="f-12 semi-bold selected_account"> Esmu pievienojis izvēlētos kontus </button>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!--  Adding social account end-->


		<!-- Account error message start -->

		<div class="account_error_msg">
			<div class="tabs_section">
				<div class="close_payout"> X </div>
				<div class="verticle_center">
					<img src="<?php echo IMG_DIR; ?>/images-icons/social.hiiv.webp" />
					<div class="top_content">
						<img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/insta.webp" alt="">
						<span class="f-24 semi-bold gray"> Instagram Biznesa Konts </span>
						<i class="f-16 gray mt-2 mb-4" style="display:block"> Neatradām nevienu kontu, pārliecinies, kas esi <br> pierakstījies kontam kuru vēlies pievienot SocialHiiv </i>
					</div>
					<p class="f-14 gray semi-bold my-3"> Pārliecinies ka: </p>
					<ul>
						<li class="f-13 gray">Pašlaik esi ielogojies Instagram kontā kuru vēlies pievienot profila.</li>
						<li class="f-13 gray">Tu aaptiprināji piekļuvi, lai SocialHiiv varētu pārvaldīt tavu kontu.</li>
					</ul>
					<div class="via my-5"><span class="semi-bold f-14"> via </span></div>
					<ul>
						<li class="f-13 gray">Izveido jaunu profilu Instagram platformā un mēģini pievienot sociālo kontu atkārtoti.</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Account error message end-->
	</main>
</div>

<style>
	.offcanvas .social-media img {
		width: 30px;
	}

	.offcanvas img.logo {
		width: 150px;
	}
</style>

<?php include_once PLUGIN_ROOT_PATH . 'templates/template-parts/footer-dashboard.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		$('.byDefault').on('click', function() {
			$(this).siblings('.onAdd').css('display', 'block');
			$(this).css('display', 'none');
		});

		$('.onAdd i').on('click', function() {
			$(this).parents('.account_list').addClass('added');
			$(this).parents('.onAdd').css('display', 'none');
			$(this).parents('.account_list').find('.byDefault').css('display', 'block');
		});

		$('.plus-icon.facebook').on('click', function(event) {
			event.stopPropagation(); // Prevent event propagation
			$('.add_socail_account.facebook .tabs_section').toggleClass('open');
			$('.close_payout').removeClass('open');
		});
		$('.plus-icon.instagram ').on('click', function() {
			$('.add_socail_account .tabs_section').toggleClass('open');
			$('.close_payout').removeClass('open');
		});

		$('.close_payout ').on('click', function() {
			$(' .tabs_section').removeClass('open');
		});
	});

	jQuery(document).ready(function() {
		jQuery('#searchInput').on('keyup', function() {
			var searchTerm = jQuery(this).val().toLowerCase().trim();
			console.log(searchTerm);

			// Hide all account_list elements initially
			jQuery('.bglight .account_list').hide();

			// Loop through each .account_list element
			jQuery('.bglight .account_list').each(function() {
				var accountName = jQuery(this).find('.name').text().toLowerCase();

				console.log(accountName);
				// Check if the account name contains the search term
				if (accountName.match(searchTerm)) {
					console.log('match');
					jQuery(this).show(); // Show the .account_list element if it matches the search term
				} else {
					jQuery(this).css('display', 'none!important'); // Hide the .account_list element if it does not match the search term
				}
			});
		});


		jQuery(document).on("click", "button[name='fb-addtolist']", function(e) {
			e.preventDefault();
			var $this = jQuery(this),
				pageid = $this.data('fb_page_id'),
				access_token = $this.data('fb_page_access_token'),
				account_name = $this.data('account_name');

			console.log(pageid, access_token, account_name);

			jQuery.ajax({
				url: '/wp-admin/admin-ajax.php',
				type: 'POST',
				data: {
					action: 'add_facebook_page',
					pageid: pageid,
					access_token: access_token,
					account_name: account_name
				},
				success: function(response) {
					console.log(response);
					if (response.success) {
						$this.hide();
						$this.next("button[name='fb-removedtolist']").css('display', 'block').css('color', 'red');
					} else {
						console.error(response.data);
					}
				},
				error: function(xhr, status, error) {
					console.error(xhr.responseText);
				}
			});
		});

		jQuery(document).on("click", "button[name='fb-removedtolist']", function(e) {
			e.preventDefault();
			var $this = jQuery(this),
				pageid = $this.data('fb_page_id');

			console.log(pageid);

			jQuery.ajax({
				url: '/wp-admin/admin-ajax.php',
				type: 'POST',
				data: {
					action: 'delete_facebook_page',
					pageid: pageid
				},
				success: function(response) {
					console.log(response);
					if (response.success) {
						$this.hide();
						$this.prev("button[name='fb-addtolist']").css('display', 'block').css('color', '');
					} else {
						console.error(response.data);
					}
				},
				error: function(xhr, status, error) {
					console.error(xhr.responseText);
				}
			});
		});

	});
</script>