<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/header-dashboard.php'; ?>
 <div class="container-fluid p-0">
   <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/user-nav.php'; ?>
    <main class="main-content" id="main">
      <div class="row">
        <div class="col-md-2 profile_sidebar">
          <div class="upper-headline">
               <p class="f-13 semi-bold dark-gray"> Plāns: Professional </p>
               <img src="<?php echo IMG_DIR; ?>/images-icons/social-tool.png" alt="">
            </div>
            <div class="profile_detail p-3">
               <p class="mb-0 f-13 semi-bold">Iestatījumi</p>
               <div class="upper-headline close_account">
                  <p class="f-16 fw-bold dark-gray"> Aizvērt kontu </p>
                  <img src="<?php echo IMG_DIR; ?>/images-icons/cross.png" alt="">
               </div>
               <div class="user_profile d-flex gap-2 align-items-center">
                  <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" alt="">
                  <span>
                     <p> janisberzins123 </p>
                     <a href="#"> Iziet </a>
                  </span>
               </div>
               <div class="tabs">
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Galvenā informācija</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Plāns un rēķini</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-10 right_side">
            <div class="tab-content">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row main_information_tab">
                     <div class="col-md-6">
                        <!-- First form update profile start   -->
                        <form class="">
                            <p  class="update_email f-13">Pašreizējais lietotājvārds <span class="f-10">janisberzins123</span> </p>
                            <p  class="update_email f-13">Nomainīt lietotajvārdu </p>
                           <div class="mb-3">
                              <label class="form-label f-13">Jaunais lietotājvārds</label>
                              <input type="text" class="form-control f-12" placeholder="janisberzins333" >
                           </div>
                           <div class="mb-3">
                              <label class="form-label f-13">Apstiprināt lietotājvārdu</label>
                              <input type="text" class="form-control f-12" placeholder="janisberzins333">
                           </div>
                           <div class="mb-3 upload_file">
                              <label class="f-13">Profila bilde</label>
                              <div  class=" d-flex">
                                 <img id="imagePreview" src="<?php echo IMG_DIR; ?>/images-icons/user.svg" alt="">
                                 <span>
                                    <div class="custom_input">
                                       <input type="file"  id="imageInput" accept="image/*" onchange="previewImage(event)">
                                       <span class="add_pic"> Pievienot bildi </span>
                                    </div>
                                    <p class="mb-0 mt-2"> Ieteicamais bildes izmērs: 200x200px </p>
                                 </span>
                                 <button class="upload_btn f-10"> Saglabāt </button>
                              </div>
                           </div>
                        </form>
                        <!-- First form update profile end   -->
                        <!-- Second form update Email start   -->
                        <form class="email_form">
                           <p class="update_email f-13"> Pašreizējais epasts <span class="f-11"> janisberzins@gmail.com</span></p>
                           <p class="update_email f-13"> Nomainīt e-pastu </p>
                           <div class="mb-3">
                              <label class="form-label f-11">Jaunais e-pasts</label>
                              <input type="email" class="form-control"  aria-describedby="emailHelp">
                           </div>
                           <div class="mb-3">
                              <label class="form-label f-11">Apstiprināt e-pastu</label>
                              <input type="email" class="form-control" placeholder="Bērziņš">
                           </div>
                           <div class="mb-3">
                              <label class="form-label f-11">Parole</label>
                              <input type="text" class="form-control" placeholder="Bērziņš">
                           </div>
                           <div class="mb-3 position-relative">
                              <button class="upload_btn f-10"> Saglabāt </button>
                           </div>
                        </form>
                        <!-- Second form update Email end   -->
                        <!-- Third form update Password start   -->
                        <form class="email_form">
                           <p class="update_email f-13"> Nomainīt paroli </p>
                           <div class="mb-3">
                              <label class="form-label f-11">Pašreizējā parole</label>
                              <input type="email" class="form-control"  aria-describedby="emailHelp">
                           </div>
                           <div class="mb-3">
                              <label class="form-label f-11">Jaunā parole</label>
                              <input type="email" class="form-control" placeholder="Bērziņš">
                           </div>
                           <div class="mb-3">
                              <label class="form-label f-11">Apstiprināt jauno paroli</label>
                              <input type="text" class="form-control" placeholder="Bērziņš">
                           </div>
                           <div class="mb-3 position-relative">
                              <button class="upload_btn f-10"> Saglabāt </button>
                           </div>
                        </form>
                        <!-- Third form update Password end   -->
                     </div>
                     <div class="col-md-6 inner_right_side">
                        <div>
                        <div class="top_block row align-items-center">
                           <div class="col-md-7">
                              <h5 class="f-15 bold"> Papildus Drošība </h5>
                              <p class="f-11"> Divpusēja verifikācija ar google autentifikātora aplikāciju. </p>
                              <i>Pēc pieslēgšanās Jūsu kontam atvērsies logs ar nepieciešamību ievadīt sešu ciparu kodu, lai iekļūtu Jūsu kontā.
                                 Kodu varēsies atrast savā telofona autentifikācijas aplikācijā </i>
                           </div>
                           <div class="switch_turn col-md-5">
                              <span>
                                 <button>Ieslēgt 2FA ar aplikāciju</button>
                                 <span>
                                    <div class="check"></div>
                                    <div class="on">Ieslēgts</div>
                                    <div class="off">izslēgts</div>
                                 </span>
                              </span>
                           </div>
                        </div>
                        
                      <div class="lower_block">  
                        <div class="upper-headline">
                              <p class="f-11 fw-bold dark-gray"> Plāns: Professional </p>
                           </div>
                           <div class="block">
                              <h5 class="f-15 bold"> Komanda </h5>
                              <p class="f-11"> <span style="color:#45B854;font-size:110%;"> 6/10 </span>Pievienoti komandas biedri </p>
                              <p class="bb f-11"> Izvēlēties sociālo kontu kuram pievienot piekļuvi </p>
                            <div class="custom_scroll">
                              <div class="social_profiles my-2">
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                              <div class="social_profiles my-2">
                                <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-instagram"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-instagram"></i></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                              <div class="social_profiles my-2">
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-linkedin"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-linkedin"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                              <div class="social_profiles my-2">
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                              <div class="social_profiles my-2">
                                <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-instagram"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-instagram"></i></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                              <div class="social_profiles my-2">
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-linkedin"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                                 <div class="check_group">
                                    <input type="checkbox" /> 
                                    <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-linkedin"></i></div>
                                    <div class="name"> RJ Digital</div>
                                 </div>
                              </div>
                              </div>
                           </div>
 
                           <div class="block address">
                            <h5 class="bold f-15"> E-pasta adrese </h5>
                            <div class="d-flex gap-3 align-items-start"> 
                                <div>
                                <input type="email" class="form-control"/> 
                                <i style="display:block" class="my-2">Komandas biedram ir piekļuves tikai sociālajiem rīkiem, kas ir Publicēšana, Analītika, Pastkaste, un Kalendārs, šim kontam nav piekļuves galvenā konta lietotāja - Plāna/rēķina, papildus soc.profila pievienošana un komandas pārvaldīšanas sadaļām.</i>
                                </div>
                                <button> <i class="fa-solid fa-plus"></i> Uzaicināt </button> </div>
                            </div>

                        </div>
                           
                        <div class="third_block white-card">
                      <div class="block team_managment">
                              <h5 class="bold f-15"> Komandas pārvaldība </h5>
                              <div class="block_group d-flex">
                                    <h6>Kontu pārvaldnieki </h6>
                                    <h6> Sociālo mēdiju profili</h6>
                                    <h6> Piekļuve</h6>
                                 </div>
                              <div>
                               
                                 <div class="block_group d-flex justify-content-between align-items-center added">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                                 <div class="block_group d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between"> <span>Jānis Bērziņšs</span>  <i class="fa-solid fa-trash-can delete_post_btn"></i></div>
                                    <div class="check_group">
                                       <div> <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" class="social_profile_img"/> <i class="fa-brands fa-facebook"></i></div>
                                       <div class="name"> RJ Digital</div>
                                    </div>
                                    <div> 
                                        <div class="onAdd"> <span>Pievienots </span> <i class="fa-solid fa-check"></i>  <i class="fa-solid fa-trash-can"></i> </div>
                                        <div class="byDefault"> <span>Pievienot </span>  <i class="fa-solid fa-plus"></i> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>

                        </div>
                     </div>

                  
               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                 <!-- cart sidebar popup start -->
                 
                 <div class="row payout_sidebar">
                  <div class="close_payout"> X </div>
                     <div class="col-md-8 checkout">
                                 <div class="checkout_cart">
                                    <div class="top_heading d-flex justify-content-between">
                                          <h5> Rēķins </h5>
                                          <p> Mēneša </p>
                                    </div>
                                    <h6> Plāns: Professional</h6>
                                    <p> 10 Soc Mēdiju konti </p>
                                    <p> 10 Komandas Biedri </p>
                                    <p> Iekļautie Sociālie Konti: FB, IG, TikTok, LinkedIn </p>
                                    <p> Publicēšana, Pastkaste, Kalendārs, Analītika </p>
                                    <p> Bezlimita Publicēšana </p>
                                    <p> Ierakstu: Ieplānošana un Publicēšana </p>
                                    <p> Papildus komandas biedrs </p>
                                    <table>
                                          <tr>
                                             <td style="text-align:left"></td>
                                             <td style="text-align:right">
                                                <h6> 25.00€</h6>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td style="text-align:left">Papildus komandas biedrs</td>
                                             <td style="text-align:right">
                                                <h6> 5.00€</h6>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td style="text-align:left">Papildus sociālais konts</td>
                                             <td style="text-align:right">
                                                <h6> 2.00€</h6>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td style="text-align:left">
                                                <h6> PVN </h6>
                                             </td>
                                             <td style="text-align:right">
                                                <h6> 6.72€</h6>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td style="text-align:left">
                                                <h6> KOPĀ </h6>
                                             </td>
                                             <td style="text-align:right">
                                                <h6> 38.72€</h6>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td colspan="2"> <button> Apmaksāt </button></td>
                                          </tr>
                                    </table>
                                 </div>
                                 </div>
                          
                               <div class="col-md-4">
                                 <h6>Saņēmējs: </h6>
                                 <i>SIA "RJ DIGITAL"
                                    40203492111
                                    Adrese: Ausmas - 34
                                    Silakrogs., Ropažu nov., 
                                    Latvija., LV 2133
                                 </i>
                               </div>
 
                           <div class="payment_method">
                              <h2>Apmaksa ar internetbanku vai kredītkarti </h2>
                              <p> Internetbanka </p>
                              <div class="intetnat-bank">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/swedbank.png" alt="">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/seb.png" alt="">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/citadele.png" alt="">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/luminor.png" alt="">
                             </div>
                             <p> Bankas karte </p>
                             <div class="intetnat-bank">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/mastercard.png" alt="">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/visa.png" alt="">
                             </div>
                              <div class="social_profiles"> 
                                <div class="check_group">
                                    <input type="checkbox"> <span>Apliecinu ka piekrītu <a href="#"> Privātuma Politikai </a>, <a href="#"> GDPR</a> un <a href="#"> Lietošanas noteikumiem.</a> </span>
                                 </div>
                                  </div>
                           </div>
                           <button class="paynow"> Apmaksāt </button>
                           </div>


                 <!-- cart sidebar popup end -->




                 
                 <!-- cart pricing row start  -->
                  <div class="row price_card_row align-items-end">
                     <div>
                        <section class="section" id="pricing">
                              <div class="row mt-5 pt-4">
                                 <div class="col-md-6 card_flex">
                                    <div class="col-lg-12">
                                          <div class="btn_container">
                                             <button class="change_plan">Mainīt plānu</button>
                                             <p class="mb-0">Atzīmē citu plānu, lai nomainītu esošo plānu pret jaunu.</p>
                                          </div>
                                    </div>

                                    <div class="col-md-6">
                                          <div class="pricing-box">
                                             <i class="mdi mdi-account h1"></i>
                                             <h4 class="f-20 avenir-next">Basic</h4>
                                             <div class="pricing-plan pt-2">
                                                <h4><s class="avenir-next extra-bold"> €12<span>.00/mēn</span> </s> </h4>
                                                <p> Mēneša maksa</p>
                                             </div>
                                             <input class="select_plan" type="radio" name="price-card" />
                                             <div class="mt-3 pt-2 features">
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" /><b>4 Soc
                                                         Mēdiju konti</b>
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />
                                                      Papildus Sociālais Konts <b> 3.00€ /mēn </b></p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" /><b>4 Komandas
                                                         Biedri</b>
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Iekļautie
                                                      Sociālie Konti:
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Publicēšana,
                                                      Pastkaste, Kalendārs, Analītika
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Bezlimita
                                                      Publicēšana
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Ierakstu:
                                                      Ieplānošana un Publicēšana
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Papildus
                                                      komandas biedrs <b> 5.00€ /mēn </b>
                                                </p>
                                             </div>
                                          </div>
                                    </div>

                                    <div class="col-md-6">
                                          <div class="pricing-box">
                                             <i class="mdi mdi-account-multiple h1 text-primary"></i>
                                             <h4 class="f-20 avenir-next">Professional</h4>
                                             <div class="pricing-plan pt-2">
                                                <h4><s class="avenir-next extra-bold"> €25 <span>.00/mēn</span></s> </h4>
                                                <p> Mēneša maksa</p>
                                             </div>
                                             <input class="select_plan" type="radio" name="price-card" />
                                             <div class="mt-3 pt-2 features">
                                                 <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" /><b>10 Soc
                                                         Mēdiju konti</b>
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />
                                                      Papildus Sociālais Konts <b> 2.00€ /mēn </b></p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" /><b>10
                                                         Komandas Biedri</b>
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Iekļautie
                                                      Sociālie Konti:
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Publicēšana,
                                                      Pastkaste, Kalendārs, Analītika
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Bezlimita
                                                      Publicēšana
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Ierakstu:
                                                      Ieplānošana un Publicēšana
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Papildus
                                                      komandas biedrs <b> 5.00€ /mēn </b>
                                                </p>
                                             </div>

                                          </div>
                                    </div>
                                 </div>

                                 <div class="col-md-6 card_flex">
                                    <div class="col-md-6">
                                          <div class="pricing-box">
                                             <i class="mdi mdi-account-multiple-plus h1"></i>
                                             <h4 class="f-20 avenir-next">Advenced</h4>
                                             <div class="pricing-plan  pt-2">
                                                <h4 class="price avenir-next extra-bold"> €35 <span>.00/mēn</span> </h4>
                                                <p> Mēneša maksa</p>
                                             </div>
                                             <input class="select_plan" type="radio" name="price-card" />
                                             <div class="mt-3 pt-2 features">
                                                 <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" /><b>20 Soc
                                                         Mēdiju konti</b>
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />
                                                      Papildus Sociālais Konts <b> 1.00€ /mēn </b></p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" /><b>10
                                                         Komandas Biedri</b>
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Iekļautie
                                                      Sociālie Konti:
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Publicēšana,
                                                      Pastkaste, Kalendārs, Analītika
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Bezlimita
                                                      Publicēšana
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Ierakstu:
                                                      Ieplānošana un Publicēšana
                                                </p>
                                                <p class="mb-2"><img src="<?php echo IMG_DIR; ?>/images-icons/check.svg" />Papildus
                                                      komandas biedrs <b> 5.00€ /mēn </b>
                                                </p>
                                             </div>

                                          </div>
                                    </div>
                                    <div class="col-md-6 checkout">
                                          <div class="checkout_cart">
                                             <div class="top_heading d-flex justify-content-between">
                                                <h5> Rēķins </h5>
                                                <p> Mēneša </p>
                                             </div>
                                             <h6 class="f-13"> Plāns: Professional</h6>
                                             <p> 10 Soc Mēdiju konti </p>
                                             <p> 10 Komandas Biedri </p>
                                             <p> Iekļautie Sociālie Konti: FB, IG, TikTok, LinkedIn </p>
                                             <p> Publicēšana, Pastkaste, Kalendārs, Analītika </p>
                                             <p> Bezlimita Publicēšana </p>
                                             <p> Ierakstu: Ieplānošana un Publicēšana </p>
                                             <p> Papildus komandas biedrs </p>
                                             <table>
                                                <tr>
                                                      <td style="text-align:left"></td>
                                                      <td style="text-align:right">
                                                         <h6 class="f-13"> 25.00€</h6>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td style="text-align:left">Papildus komandas biedrs</td>
                                                      <td style="text-align:right">
                                                         <h6 class="f-13"> 5.00€</h6>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td style="text-align:left">Papildus sociālais konts</td>
                                                      <td style="text-align:right">
                                                         <h6 class="f-13"> 2.00€</h6>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td style="text-align:left">
                                                         <h6 class="f-13"> PVN </h6>
                                                      </td>
                                                      <td style="text-align:right">
                                                         <h6 class="f-13"> 6.72€</h6>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td style="text-align:left">
                                                         <h6 class="f-13"> KOPĀ </h6>
                                                      </td>
                                                      <td style="text-align:right">
                                                         <h6 class="f-13"> 38.72€</h6>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td colspan="2"> <button id="pay_out"> Apmaksāt </button></td>
                                                </tr>
                                             </table>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                        </section>
                     </div>
                  </div>
                 <!-- cart pricing row end -->



                 
           <!-- row  start  -->

            <div class="row add_to_cart" >
            <div class="col-md-6">
               <div class="d-flex add_cart_tab">
                  <h5>Papildus sociālais konts </h5>
                  <p> 2.00€ <span> /mēn </span> </p>
                   <div>
                     <span class="d-flex quantity-box">
                        <div class="minus"><i class="fa-solid fa-minus"></i></div>
                        <div class="quantity qty-input"> 0</div>
                        <div class="plus"><i class="fa-solid fa-plus"></i></div>
                     </span>
                     <button class="addtocart"><i class="fa-solid fa-plus"></i> Pievienot </button>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="d-flex add_cart_tab">
                  <h5>Papildus komandas biedrs </h5>
                  <p> 5.00€ <span> /mēn </span> </p>
                   <div>
                     <span class="d-flex quantity-box">
                        <div class="minus"><i class="fa-solid fa-minus"></i></div>
                        <div class="quantity qty-input"> 0</div>
                        <div class="plus"><i class="fa-solid fa-plus"></i></div>
                     </span>
                     <button class="addtocart"><i class="fa-solid fa-plus"></i> Pievienot </button>
                  </div>
               </div>
            </div>
            </div>
                          <!-- row  end  -->


                  <!-- row  start  -->
                        <div class="row align-items-start billing_infromation">
                              
                               <!--  BLOCK start -->
                                 <div class="col-md-6 cart_form">
                                        <!--  form update profile start   -->
                                       <form class="my-4 mt-0">
                                          <p class="blue f-15 bold"> Norēķina informācija </p>
                                          <div class="row">
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Uzņēmuma nosaukums</label>
                                             <input type="text" class="form-control" placeholder="SIA Janis ABC" >
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Uzņēmuma reģ.nummurs</label>
                                             <input type="number" class="form-control" placeholder="4012345678901">
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Vārds</label>
                                             <input type="text" class="form-control" placeholder="Jānis" >
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Uzvārds</label>
                                             <input type="text" class="form-control" placeholder="Bērziņš">
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">E-pasts</label>
                                             <input type="email" class="form-control" placeholder="janis.pumpurs@gmail.com" >
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Telefona nr</label>
                                             <input type="number" class="form-control" placeholder="371 12345678">
                                          </div>
                                          <div class="mb-3 col-md-12">
                                             <label class="form-label">Adrese</label>
                                             <input type="text" class="form-control" placeholder="Jānis" >
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Pasta indeks</label>
                                             <input type="text" class="form-control" placeholder="LV1111">
                                          </div>
                                          <div class="mb-3 col-md-6">
                                             <label class="form-label">Pilsēta</label>
                                             <input type="text" class="form-control" placeholder="Rīga">
                                          </div>
                                          </div>
                                          <!-- <button class="upload_btn f-10"> Saglabāt </button> -->
                                        </form>
                                       <!-- First form update profile end   -->
                                 </div>
                                <!-- BLOCK  end  -->

                               <!--  BLOCK start -->
                                    <div class="col-md-6">
                                       <div class="bills white_card">
                                          <div class="row align-items-center   ">
                                                <div class="col-6">
                                                  
                                                <div class="blue f-15"><b> Rēķini </b> <span class="massage"> 1 </span>
                                                   <p class="tooltip"> Rēķina apmaksas termiņš drīz beigsies, ja neveiksiet apmaksu laikā, konta darbība tiks apturēta.
                                                   </p>
                                                   <span>Rēķina nolāde būs iespējama pēc rēķina apstrādes, kas aizņem 1-3 darba dienas.
                                                   </span>
                                                </div>
                                                            
                                                </div>
                                                <div class="col-6">
                                                   <select>
                                                      <option> 2020 </option>
                                                      <option> 2021</option>
                                                      <option> 2022</option>
                                                      <option> 2023</option>
                                                      <option> 2024</option>
                                                   </select>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <table>
                                                   <tr>
                                                      <th> Rēķina nosaukums </th>
                                                      <th> Apmaksāt Līdz</th>
                                                      <th> Apmaksa</th>
                                                      <th> Statuss</th>
                                                      <th> PDF</th>
                                                   </tr>
                                                   <tr>
                                                      <td> SocialHiiv Professional </td>
                                                      <td> 18.03.25 </td>
                                                      <td class="red">
                                                            <div class="to_pay"> <span>Apmaksāt</span><i class="fa-solid fa-plus"></i> </div>
                                                      </td>
                                                      <td class="red"> <span>Neapmaksāts</span> </td>
                                                      <td> - </td>
                                                   </tr>
                                                   <tr>
                                                      <td> SocialHiiv Professional </td>
                                                      <td> 18.03.25 </td>
                                                      <td class="red">
                                                            <div class="to_pay"> <span>Apmaksāt</span><i class="fa-solid fa-plus"></i> </div>
                                                      </td>
                                                      <td class="red"> <span>Neapmaksāts</span> </td>
                                                      <td> - </td>
                                                   </tr>
                                                   <tr>
                                                      <td> SocialHiiv Professional </td>
                                                      <td> 18.03.25 </td>
                                                      <td class="procesing"> <i class="fa-solid fa-plus">
                                                            </i>
                                                      </td>
                                                      <td class="procesing"> <span>Apstrādā</span> </td>
                                                      <td> - </td>
                                                   </tr>
                                                   <tr>
                                                      <td> SocialHiiv Professional </td>
                                                      <td> 18.03.25 </td>
                                                      <td class="paid"> <i class="fa-solid fa-check"></i> </td>
                                                      <td class="paid"> <span>Apmaksāts</span> </td>
                                                      <td> - </td>
                                                   </tr>
                                                   <tr>
                                                      <td> SocialHiiv Professional </td>
                                                      <td> 18.03.25 </td>
                                                      <td class="red">
                                                            <div class="to_pay"> <span>Apmaksāt</span><i class="fa-solid fa-plus"></i> </div>
                                                      </td>
                                                      <td class="red"> <span>Neapmaksāts</span> </td>
                                                      <td> - </td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                   </tr>
                                                </table>
                                          </div>
                                       </div>
                                    </div>
                               <!-- BLOCK  end  -->
                   <!-- row  end  -->              
            
               </div>
           </div>
          
      </div>
   </main>

   		<!-- Account error message start -->

         <div class="close_account_form">
				 <div class="tabs_section">
				     <div class="close_payout"> X </div>
				   <div class="verticle_center">
				       <img src="<?php echo IMG_DIR; ?>/images-icons/social.hiiv.webp" />

                        <form>

                           <p class="bold f-26 dark-gary"> Aizvērt kontu </p>
                           <i class="f-12 gray mb-4" style="display:block;"> Tavs konts tiks slēgts nekavējoties, lai atgriestu kontu,<br> raksti mums ziņu uz info@socialhiiv.lv.</i>
                            
                           <div class="row mb-3">
                              <div class="col-md-6">
                                    <label class="form-label f-14 gray bold">Vārds* </label>
                                    <input type="text" class="form-control" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label class="form-label f-14 gray bold">Uzvārds*</label>
                                    <input type="text" class="form-control" required>
                                 </div>
                             </div>
                           
                           <div class="mb-3">
                              <label class="form-label f-14 gray bold">E-pasts*</label>
                              <input type="email" class="form-control" required>
                           </div>
                           
                           <div class="mb-3">
                              <label class="form-label f-14 gray bold">Konta nosaukums*</label>
                              <input type="text" class="form-control" required>
                           </div>

                           <div class="mb-3">
                              <label class="form-label f-14 gray bold">Komentārs*</label>
                              <textarea> </textarea>
                           </div>

                           <div class="social_profiles mb-3">
                              <div class="check_group">
                                 <input type="checkbox"> <span>Apliecinu ka piekrītu <a href="#" class="link"> Privātuma Politikai </a>, <br><a href="#" class="link"> GDPR</a>
                                       un <a href="#" class="link"> Lietošanas noteikumiem.</a> </span>
                              </div>
                           </div>
                           <button class="paynow"> Aizvērt </button>

                        </form>
                    
					</div>
				 </div>
				</div>

		<!-- Account error message end-->

                 <!-- Delete post popup start-->

                  <div class="delete_popup">
                    <div class="container">
                     <div class="cancel_delete"> X </div>
                      <p class="semi-bold f-20">Vai esi pārliecināts ka vēlies dzēst konta pārvaldnieku?</p>
                       <p class="f-10"> Sociālais konts tiks dzēsts no mūsu datu bāzes, ja vēlaties izmantot SocialHiiv platformu, Jums ir jāreģisrē jauns konts. </p>
                      <div class="confirmCancel">
                       <button class="cancel"> Atpakaļ </button> 
                       <button class="confirm"> Apstiprināt </button> 
                      </div>
                    </div>
                  </div>

               <!-- Delete post popup end-->


</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
/* dashboard profile page start  23/05/2024 */
$(document).ready(function () {
    $('.switch_turn').on('click', function () {
        $('.check').toggleClass('uncheck');
    });

    $('.team_managment .block_group .byDefault').on('click', function () {
        $(this).parents('.team_managment .block_group').addClass('added');
    })

    $('.team_managment .block_group .onAdd i').on('click', function () {
        $(this).parents('.team_managment .block_group').removeClass('added');
    })

    $('.block_group.d-flex > div i.fa-trash-can').on('click', function () {
        $(this).parents('.team_managment .block_group').addClass('hide');
    })

    $('.close_account').on('click', function () {
        $('.close_account_form .tabs_section').addClass('open');
    })

    $('#pay_out ').on('click', function () {
        $('.payout_sidebar').toggleClass('open');
        $('.close_payout').removeClass('open');
    });

    $('.close_payout ').on('click', function () {
        $('.payout_sidebar').removeClass('open');
        $('.tabs_section').removeClass('open');
    });
});

function previewImage(event) {
    const imagePreview = document.getElementById('imagePreview');
    const selectedFile = event.target.files[0];

    if (selectedFile) {
        const reader = new FileReader();
        reader.onload = function (event) {
            imagePreview.src = event.target.result;
        };
        reader.readAsDataURL(selectedFile);
    } else {
        imagePreview.src = '<?php echo IMG_DIR; ?>/images-icons/user.svg';
    }
}

/* dashboard profile page end  23/05/2024 */


$(document).ready(function() {
    $(".plus").click(function() {
        var quantity = $(this).prev(".quantity");
        var value = parseInt(quantity.text());
        quantity.text(value + 1);
    });

    $(".minus").click(function() {
        var quantity = $(this).next(".quantity");
        var value = parseInt(quantity.text());
        if (value > 0) {
            quantity.text(value - 1);
        }
    });
});


$(document).ready(function() {
  $('.delete_post_btn').on('click' , function()  {
    $('.delete_popup').addClass('show');
});

$('.cancel_delete').on('click' , function()  {
    $('.delete_popup').removeClass('show');
});

$('.delete_popup .cancel').on('click' , function()  {
    $('.delete_popup').removeClass('show');
});
});

</script>