    <!-- sidebar start-->
    <div class="profile_sidebar">
            <div class="upper-headline">
               <p class="f-13 fw-bold dark-gray"> Plāns: Professional </p>
               <img src="<?php echo IMG_DIR; ?>/images-icons/social-tool.png" alt="">
            </div>

            <div class="profile_detail p-3 mt-3">
               <p class="mb-0 f-13 semi-bold">Sociālie konti</p>
               <div class="upper-headline close_account">
                  <p class="f-10 fw-bold dark-gray"> Pievienot kontu </p>
                  <i class="fa-solid fa-plus"> </i>
               </div>
            </div>

            <form class="search_bar mx-3" action="/action_page.php">
                <input class="f-12" type="text" placeholder="Meklēt..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

            <div class="profile_detail px-3">
                <div class="upper-headline close_account mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="0.5 3.5 31.0 25.1" zoomAndPan="magnify" style="fill: rgb(133, 143, 161);" original_string_length="563"><g id="__id377_sx1fmoju5e"><path d="M28,7.04999H17.03998c-0.15997,0-0.31-0.08002-0.40997-0.21002l-1.31-1.88c-0.66003-0.94-1.72998-1.5-2.87-1.5H4 c-1.92999,0-3.5,1.57001-3.5,3.5v18.08002c0,1.92999,1.57001,3.5,3.5,3.5h24c1.92999,0,3.5-1.57001,3.5-3.5V10.54999 C31.5,8.62,29.92999,7.04999,28,7.04999z" style="fill: inherit;"/></g></svg>
                  <p class="f-16 fw-bold dark-gray"> Grupēt </p>
                  <i class="fa-solid fa-plus"> </i>
               </div>
            </div>

            <!-- accordion start -->
            <div class="user_folders">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/folder.php'; ?>  
                    Visi
                    <i class="fa-solid fa-trash-can delete_post_btn"></i>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> 
                            <div class="social_profiles active">
                                 <div class="check_group">
                                    <div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name">  Visi</div>
                                    <div class="number"> 1 </div>
                                 </div>
                              </div>
                        </li>
                      </ul>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/folder.php'; ?>  
                    RJ Digital
                    <i class="fa-solid fa-trash-can delete_post_btn"></i>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li> 
                            <div class="social_profiles my-2">
                                 <div class="check_group">
                                    <div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                        </li>
                      </ul>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/folder.php'; ?>  
                    SoberWayEU
                    <i class="fa-solid fa-trash-can delete_post_btn"></i>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li> 
                            <div class="social_profiles my-2">
                                 <div class="check_group">
                                    <div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> SoberWayEU</div>
                                  </div>
                                  <div class="check_group">
                                    <div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> SoberWayEU</div>
                                 </div>
                                 <div class="check_group">
                                    <div> <img src="https://socialhiiv.lv/wp-content/plugins/socialhiiv-dashboard/assets/img/images-icons/user.svg" class="social_profile_img"> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> SoberWayEU</div>
                                 </div>
                              </div>
                        </li>
                      </ul>
                    </div>
                    </div>
                </div>
                </div>    
            </div>
            <!-- accordion end  -->

         </div> 
    <!-- sidebar end-->