<style>
	/*23/05/2024 start */
	.mobile_head {
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		background: white;
		width: 100%;
		padding: 10px;
		right: 0;
		box-shadow: 0 0 10px #0000005c;
	}

	.mobile_head img {
		width: 30px;
	}

	.show_detail {
		text-align: right;
		width: 100%;
	}

	.close {
		display: none;
		font-size: 28px;
		font-family: cursive;
		transform: rotate(-5deg);
		width: max-content;
		height: 32px;
		width: 32px;
		background: black;
		border-radius: 50%;
		line-height: 1;
		color: #fff;
		text-align: center;
	}

	@media screen and (max-width:767px) {
		.mobile_head {
			display: block;
			z-index: 999;
		}

		#sidebar .sidebar-menu li a {
			height: 30px;
			width: 30px;
		}

		.logo-bar {
			margin-top: 60px;
		}

		.profile_sidebar {
			position: fixed;
			background: #fff;
			left: -100%;
			z-index: 99;
			transition: all 0.25s ease;
			top: 50px;
			padding-top: 20px;
		}

		.profile_sidebar.show {
			width: calc(70% - 50px);
			left: 50px;
		}

		.show_detail.show_cross .close {
			display: block;
			margin-left: auto;
		}

		.show_detail.show_cross img {
			display: none;
		}

		.switch_turn>span {
			flex-direction: column;
			gap: 15px;
		}

		.profile_sidebar.show::before {
			content: "";
			right: 0;
			width: 100%;
			height: 100vh;
			background: #00000054;
			top: 0;
			left: 100%;
			position: absolute;
		}
	}

	/*23/05/2024 end */
</style>

<?php ?>
<aside id="sidebar">
	<div class="d-flex gap-3">
		<div class="logo-bar">
			<div class="aside-logo">
				<img src="<?php echo IMG_DIR; ?>/images-icons/favv.png" alt="">
				<div class="site_name">
					<p class="f-11 dark-blue m-0"> TESTA </p>
					<p class="f-11 dark m-0 "> KONTS </p>
				</div>
			</div>
			<ul class="sidebar-menu">
				<li>
					<a href="dashboard" data-bs-placement="right" data-bs-title="Sociālie Profili">
						<img class="show" src="<?php echo IMG_DIR; ?>/images-icons/dashboard.png" alt="">
						<img class="hide" src="<?php echo IMG_DIR; ?>/images-icons/active-dashboard.png" alt="">
					</a>
				</li>
				<li>
					<a href="inboxs" data-bs-placement="right" data-bs-title="Iesūtne">
						<img class="show" src="<?php echo IMG_DIR; ?>/images-icons/inbox.png" alt="">
						<img class="hide" src="<?php echo IMG_DIR; ?>/images-icons/active-inbox.png" alt="">
					</a>
				</li>
				<li>
					<a href="post-publishing" data-bs-placement="right" data-bs-title="Publicēt">
						<img class="show" src="<?php echo IMG_DIR; ?>/images-icons/post-publishing.png" alt="">
						<img class="hide" src="<?php echo IMG_DIR; ?>/images-icons/active-post.png" alt="">
					</a>
				</li>
				<li>
					<a href="calenders" data-bs-placement="right" data-bs-title="Kalendārs">
						<img class="show" src="<?php echo IMG_DIR; ?>/images-icons/calender.png" alt="">
						<img class="hide" src="<?php echo IMG_DIR; ?>/images-icons/active-calender.png" alt="">
					</a>
				</li>
				<li>
					<a href="analytic" data-bs-placement="right" data-bs-title="Analītika">
						<img class="show" src="<?php echo IMG_DIR; ?>/images-icons/analytic.png" alt="">
						<img class="hide" src="<?php echo IMG_DIR; ?>/images-icons/active-anlytic.png" alt="">
					</a>
				</li>
			</ul>
		</div>
		<div class="bottom-nav">
			<a href="profile">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-name="Circular Glyph" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.0 0.0 64.0 64.0" zoomAndPan="magnify" style="fill: rgb(214, 133, 42);" original_string_length="696">
					<g id="__id1594_sx1fmoju5e">
						<path d="M32,0A32,32,0,1,0,64,32,32.004,32.004,0,0,0,32,0ZM42.34,23.57a10.34,10.34,0,0,1-20.68006,0C22.23,9.86,41.77,9.86,42.34,23.57Zm8.99,23.41a6.55209,6.55209,0,0,1-5.94,3.73H18.61a6.61044,6.61044,0,0,1-5.16-10.73,21.68114,21.68114,0,0,1,10.49-6.95,12.28023,12.28023,0,0,0,8.05,2.99h.04a12.2671,12.2671,0,0,0,8.03-2.99,21.68114,21.68114,0,0,1,10.49,6.95A6.55588,6.55588,0,0,1,51.33,46.98Z" style="fill: inherit;" />
					</g>
				</svg>
			</a>
		</div>

		<!-- <div class="logo-bar-content">
     	<div class="upper-headline rounded mb-5">
			<p class="f-13">Plāns: Professional</p>
			<img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/social-tool.png" alt="">
		</div>
		<h5>Sociālie konti</h5>
		<div class="search-bar mb-4">
			<input type="search" value="" placeholder="Meklēt...">
			<span><i class="fas fa-search"></i></span>
		</div>
		<div>
			<div class="accordion" id="accordionExample">
			  <div class="accordion-item border-0 mb-3">
			    <h2 class="accordion-header" id="headOne">
			      <button class="accordion-button bg-transparent border-0 box-shadow-none p-0 w-100 d-flex align-items-center gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#fileOne" aria-expanded="true" aria-controls="fileOne">
			      	<span>
			      		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.5 3.5 31.0 25.1" zoomAndPan="magnify" style="fill: rgb(133, 143, 161);" original_string_length="563"><g id="__id514_szehey7d2a"><path d="M28,7.04999H17.03998c-0.15997,0-0.31-0.08002-0.40997-0.21002l-1.31-1.88c-0.66003-0.94-1.72998-1.5-2.87-1.5H4 c-1.92999,0-3.5,1.57001-3.5,3.5v18.08002c0,1.92999,1.57001,3.5,3.5,3.5h24c1.92999,0,3.5-1.57001,3.5-3.5V10.54999 C31.5,8.62,29.92999,7.04999,28,7.04999z" style="fill: inherit;"/></g></svg>
			      	</span>
			        Visi
			      </button>
			    </h2>
			    <div id="fileOne" class="accordion-collapse collapse" aria-labelledby="headOne" data-bs-parent="#accordionExample">
			      <div class="accordion-body px-0">
			        <div class="d-flex align-items-center justify-content-between">
			        	<div class="d-flex align-items-center gap-2">
			        		<img class="social-icon" src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/linkedin.webp">
			        		<p class="mb-0">RJ Digital</p>
			        	</div>
			        	<div>
			        		<span class="dark">1</span>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="accordion-item border-0 mb-3">
			    <h2 class="accordion-header" id="headTwo">
			      <button class="accordion-button bg-transparent border-0 box-shadow-none p-0 w-100 d-flex align-items-center gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#fileTwo" aria-expanded="true" aria-controls="fileTwo">
			      	<span>
			      		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.5 3.5 31.0 25.1" zoomAndPan="magnify" style="fill: rgb(133, 143, 161);" original_string_length="563"><g id="__id514_szehey7d2a"><path d="M28,7.04999H17.03998c-0.15997,0-0.31-0.08002-0.40997-0.21002l-1.31-1.88c-0.66003-0.94-1.72998-1.5-2.87-1.5H4 c-1.92999,0-3.5,1.57001-3.5,3.5v18.08002c0,1.92999,1.57001,3.5,3.5,3.5h24c1.92999,0,3.5-1.57001,3.5-3.5V10.54999 C31.5,8.62,29.92999,7.04999,28,7.04999z" style="fill: inherit;"/></g></svg>
			      	</span>
			        RJ Digital
			      </button>
			    </h2>
			    <div id="fileTwo" class="accordion-collapse collapse" aria-labelledby="headTwo" data-bs-parent="#accordionExample">
			      <div class="accordion-body px-0">
			        <div class="d-flex align-items-center justify-content-between">
			        	<div class="d-flex align-items-center gap-2">
			        		<img class="social-icon" src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/linkedin.webp">
			        		<p class="mb-0">RJ Digital</p>
			        	</div>
			        	<div>
			        		<span class="dark">1</span>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="accordion-item border-0 mb-3">
			    <h2 class="accordion-header" id="headThree">
			      <button class="accordion-button bg-transparent border-0 box-shadow-none p-0 w-100 d-flex align-items-center gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#fileThree" aria-expanded="true" aria-controls="fileThree">
			      	<span>
			      		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.5 3.5 31.0 25.1" zoomAndPan="magnify" style="fill: rgb(133, 143, 161);" original_string_length="563"><g id="__id514_szehey7d2a"><path d="M28,7.04999H17.03998c-0.15997,0-0.31-0.08002-0.40997-0.21002l-1.31-1.88c-0.66003-0.94-1.72998-1.5-2.87-1.5H4 c-1.92999,0-3.5,1.57001-3.5,3.5v18.08002c0,1.92999,1.57001,3.5,3.5,3.5h24c1.92999,0,3.5-1.57001,3.5-3.5V10.54999 C31.5,8.62,29.92999,7.04999,28,7.04999z" style="fill: inherit;"/></g></svg>
			      	</span>
			        RJ Digital
			      </button>
			    </h2>
			    <div id="fileThree" class="accordion-collapse collapse" aria-labelledby="headThree" data-bs-parent="#accordionExample">
			      <div class="accordion-body px-0">
			        <div class="d-flex align-items-center justify-content-between">
			        	<div class="d-flex align-items-center gap-2">
			        		<img class="social-icon" src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/linkedin.webp">
			        		<p class="mb-0">RJ Digital</p>
			        	</div>
			        	<div>
			        		<span class="dark">1</span>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
     </div> -->
	</div>
</aside>
<div class="mobile_head">
	<div class="show_detail"> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" alt="">
		<div class="close"> x </div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('.show_detail').on('click', function() {
			$('.profile_sidebar').toggleClass('show');
			$(this).toggleClass('show_cross');
		});
	});
</script>

<script>
	// Get the current URL path
	var currentPath = window.location.pathname;

	// Get all anchor elements inside the sidebar
	var sidebarLinks = document.querySelectorAll('#sidebar a');

	// Loop through each anchor element
	sidebarLinks.forEach(function(link) {
		// Get the href attribute and extract the path part
		var linkPath = new URL(link.href).pathname;

		// Check if the extracted path matches the current URL path
		if (linkPath === currentPath) {
			// Add the 'active' class to the parent li element
			link.parentNode.classList.add('active');
		}
	});
</script>