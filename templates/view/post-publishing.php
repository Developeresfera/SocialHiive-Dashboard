<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/header-dashboard.php'; ?>
<div class="container-fluid p-0">
   <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/user-nav.php'; ?>

    <!-- sidebar start-->
    <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/social-sidebar.php'; ?>

         <!-- sidebar end-->

        <div class="header"><h2  style="text-align:left"> Izveidot Postu </h2></div>
        <main class="main-content" id="main">
             <div class="right_side post_publish_page">
                    <div class="row">
                        <div class="col-md-6">
                             <img class="bg_plus" src="<?php echo IMG_DIR; ?>/images-icons/bg_plus.png" alt="">

                             
                             <p class="gray f-18 bold"> Tavs ieraksts </p>
                              <div class="create_post">
                               <textarea placeholder="Izveido galveno aprakstu un ievieto linku..."></textarea>
                                <div> 
                                  <img src="<?php echo IMG_DIR; ?>/images-icons/smilee.png" alt="">
                                  <img src="<?php echo IMG_DIR; ?>/images-icons/location.png" alt="">
                                </div>
                             </div>

                             <div class="fb">
                                <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/facebook-icon.php'; ?> 
                                <span> 10000 </span>
                             </div>

                             <div class="upload_media">
                                <div class="heading"> 
                                  <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/placeholder-icon.php'; ?> 
                                  <span> Plašsaziņas līdzeklis </span>
                                </div>
                                <div class="file-container">
                                  <input type="file" id="file-input" class="file-input" accept="image/*" multiple onchange="updateFileName()">
                                  <label for="file-input" class="file-label">Ievelciet savu izvēlēto failu šajā logā vai</label>
                                  <div>
                                   <span> <img src="<?php echo IMG_DIR; ?>/images-icons/upload_media.png" alt=""> Izvēlēties failu </span>
                                </div>
                                </div>
                             </div>

                             <div class="fb_option">
                                <div class="fb">
                                    <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/facebook-icon.php'; ?> 
                                    <span> Facebook iespēja </span>
                                </div>
                                <div class="d-flex">
                                    <p> Pirmais komentārs <span>Publicēt savu komentāru kopā ar savu ierakstu </span></p>
                                    <label class="switch">
                                        <input type="checkbox" id="toggle-switch">
                                        <span class="slider"></span>
                                    </label>
                                </div>

                             </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post_preview">
                                <h5 class="f-18 bold"> Sociala ieraksta priekšskats </h5>
                                <span class="f-12">Izvēlies profilu, un sāc publicēt savu saturu </span>
                                <div class="post_card">
                                    <div class="d-flex"> 
                                        <img src="<?php echo IMG_DIR; ?>/images-icons/user.svg" alt="">
                                        <p> Port title <span>Izvēlies profilu, un sāc publicēt savu saturu </span> </p>
                                    </div>
                                    <div class="description lightgray">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                 </div>  
        </main>

                     <footer>
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
                    </footer>
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