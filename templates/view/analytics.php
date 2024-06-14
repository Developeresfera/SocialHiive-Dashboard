<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/header-dashboard.php'; ?>
<div class="container-fluid p-0">
   <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/user-nav.php'; ?>

    <!-- sidebar start-->
    <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/social-sidebar.php'; ?>
    <!-- sidebar end-->

        <div class="header">
          <div class="head_wrapper">
             <h2  style="text-align:left"> Socialo kontu analitika </h2>
             <div class="select_date"> 
                <div> 
                    <input type="date" id="date-input" class="hidden-input" /> 
                    <span> <img src="<?php echo IMG_DIR; ?>/images-icons/calender.png" alt="" /> <span id="selected-date">Datums un Laiks </span> </span>
                </div>
              </div>
              <div class="f-12 gray d-flex gap-2 align-items-center"> Salīdzināšanas periods: 
                <select>
                  <option>Jan 1, 2024 - Jan 31,2024 </option>
                  <option>Jan 1, 2024 - Jan 31,2024 </option>
                  <option>Jan 1, 2024 - Jan 31,2024 </option>
                  <option>Jan 1, 2024 - Jan 31,2024 </option>
                  <option>Jan 1, 2024 - Jan 31,2024 </option>
                </select>
              </div>
           </div>
        </div>
        <main class="main-content" id="main">
             <div class="right_side analytic_page">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="top_content"> 
                                <h5 class="f-18 semi-bold gray"> Pārskats </h5>
                                <span class="f-12 lightgray"> Galvenie rādītāji izvēlētajā periodā </span>
                            </div>

                            <div class="row"> 
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/userss.png" alt=""> <span class="f-11">Sekotāji</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/select.png" alt=""> <span class="f-11">Iesaiste</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/impression.png" alt=""> <span class="f-11">Iespaidi</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                           </div>
                    <!-- row end-->

                           <div class="row"> 
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/add.png" alt=""> <span class="f-11">Publicētie posti</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/comments.png" alt=""> <span class="f-11">Komentāri</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/grow.png" alt=""> <span class="f-11">Sasniedzamība</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                           </div>
                    <!-- row end-->


                           <div class="row"> 
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/heart.png" alt=""> <span class="f-11">Patīk</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="white_card">
                                      <div> <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/saved.png" alt=""> <span class="f-11">Saglabāja</span> </div>
                                      <div> <span class="semi-bold f-28 gray"> 300 </span> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/information-icon.png" alt=""> - </div>
                                    </div>
                                </div>
                           </div>
                    <!-- row end-->
                          
                    <section>
                            <div class="top_heading d-flex align-items-center justify-content-between">
                                <div> 
                                   <h5 class="f-18 semi-bold gray"> Pārskats </h5>
                                   <span class="f-12"> Galvenie rādītāji izvēlētajā periodā </span>
                                </div>
                                <div>
                                     <span class="f-12"> Meklēt pēc </span>
                                     <div class="search_for"> 
                                     <img class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/select.png" alt=""> 
                                        <select> 
                                            <option> Iesaiste  </option>
                                            <option> Komentāri </option>
                                            <option> Patīk </option>
                                            <option> Saglabāja </option>
                                            <option> Iespaidi </option>
                                        </select>
                                     </div>
                                </div>
                            </div>

                            <div class="popular_content">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">  
                                    <div class="white_card p-2">
                                     <img class="feacture_img" src="<?php echo IMG_DIR; ?>/images-icons/t.jpg" alt="">
                                     <p class="f-11 gray">Title or first three words of description...</p>
                                        <ul>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/impression.png" alt=""> <span>Iespaidi</span> <span class="gary flex1">1</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/comments.png" alt=""> <span>Komentāri</span> <span class="gary flex1">300</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/heart.png" alt=""> <span>Patīk</span> <span class="gary flex1">1k</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/saved.png" alt=""> <span>Saglabāja</span> <span class="gary flex1">2k</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/select.png" alt=""> <span>Iesaiste</span> <span class="gary flex1">999</span> </li>
                                        </ul>
                                     </div>
                                    </div>
                                    <div class="col-md-4">  
                                      <div class="white_card p-2">
                                        <img class="feacture_img" src="<?php echo IMG_DIR; ?>/images-icons/thumbnai.jpg" alt="">
                                         <p class="f-11 gray">Title or first three words of description...</p>
                                        <ul>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/impression.png" alt=""> <span>Iespaidi</span> <span class="gary flex1">1</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/comments.png" alt=""> <span>Komentāri</span> <span class="gary flex1">300</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/heart.png" alt=""> <span>Patīk</span> <span class="gary flex1">1k</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/saved.png" alt=""> <span>Saglabāja</span> <span class="gary flex1">2k</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/select.png" alt=""> <span>Iesaiste</span> <span class="gary flex1">999</span> </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="col-md-4">  
                                      <div class="white_card p-2">
                                        <img class="feacture_img" src="<?php echo IMG_DIR; ?>/images-icons/screen.webp" alt="">
                                         <p class="f-11 gray">Title or first three words of description...</p>
                                        <ul>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/impression.png" alt=""> <span>Iespaidi</span> <span class="gary flex1">1</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/comments.png" alt=""> <span>Komentāri</span> <span class="gary flex1">300</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/heart.png" alt=""> <span>Patīk</span> <span class="gary flex1">1k</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/saved.png" alt=""> <span>Saglabāja</span> <span class="gary flex1">2k</span> </li>
                                            <li class="d-flex gap-2 align-items-center"> <img class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/select.png" alt=""> <span>Iesaiste</span> <span class="gary flex1">999</span> </li>
                                        </ul>
                                      </div>
                                     </div>
                                </div>
                            </div>
                   </section>



                        </div>
                    </div>
                 </div>  
        </main>

                     <!-- <footer>
                        <div class="inner_footer">
                          <div class="select_date"> 
                            <div> 
                                <input type="date" id="date-input" class="hidden-input" /> 
                                <span> <img src="<?php echo IMG_DIR; ?>/images-icons/calender.png" alt="" /> <span id="selected-date">Datums un Laiks </span> </span>
                            </div>
                            <button> Ieplānot </button>
                         </div>
                         <div class="publish"> <button>Publicēt</button>  </div>
                         </div>
                    </footer> -->
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

    $('#pay_out ').on('click', function () {
        $('.payout_sidebar').toggleClass('open');
        $('.close_payout').removeClass('open');
    });
    $('.close_payout ').on('click', function () {
        $('.payout_sidebar').removeClass('open');
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

function updateFileName() {
  var input = document.getElementById('file-input');
  var label = document.querySelector('.file-label');

  if (input.files && input.files.length > 0) {
    label.textContent = input.files.length === 1 ? input.files[0].name : input.files.length + ' files selected';
  } else {
    label.textContent = 'Drag & Drop files here or click to select';
  }
}


// Get the date input element
var dateInput = document.getElementById('date-input');

// Add event listener for input change
dateInput.addEventListener('change', function() {
  // Get the selected date value
  var selectedDate = dateInput.value;

  // Display the selected date elsewhere on the page
  var selectedDateDisplay = document.getElementById('selected-date');
  selectedDateDisplay.textContent = selectedDate;
});


</script>