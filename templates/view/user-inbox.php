<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
<style>
  
</style>
<?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/header-dashboard.php'; ?>
<div class="container-fluid p-0">
   <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/user-nav.php'; ?>

    <!-- sidebar start-->
   <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/social-sidebar.php'; ?>
    <!-- sidebar end-->

    <div class="header"> <div> <div class="col-md-5"> <h2  style="text-align:center"> Sociālā mēdiju pastkaste </h2> </div> </div>  </div>
     
        <main class="main-content" id="main">
             <div class="right_side">
                    <div class="row">
                        <div class="col-md-5">
                           
                           <h5> Ienākošie Paziņojumi </h5>
                           <div class="filter">
                            <div class="filer-container">
                                <div>
                                <button> Privātās ziņas </button>
                                <button> Komentāri </button>
                                </div>
                                <div> 
                                   <img src="<?php echo IMG_DIR; ?>/images-icons/calender.png" alt="" />
                                   <div class="arrows">
                                   <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/arrow.php'; ?>  
                                   <?php include PLUGIN_ROOT_PATH. 'assets/img/images-icons/arrow.php'; ?>  
                                   </div>
                                </div>
                            </div>
                             <div class="empty-box">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/width_200.webp" alt="">
                               <p>Pašlaik Ziņu Nav </p>
                               <p style="color:#334563cc;">Pēdējā laikā nav bijusi neviena <br> ziņa no Jūsu publikācijām!</p>
                             </div>
                           </div>
                        </div>
                        <div class="col-md-7">
                            <div class="empty_msg">
                               <img src="<?php echo IMG_DIR; ?>/images-icons/download.png" alt="">
                               <p> Pašlaik Ziņu Nav </p>
                            </div>
                        </div>
                    </div>
                </div>  
        </main>
</div>


                 <!-- Delete post popup start-->

                  <div class="delete_popup">
                    <div class="container">
                     <div class="cancel_delete"> X </div>
                      <p class="semi-bold f-20">Vai esi pārliecināts ka vēlies dzēst šo mapi?</p>
                       <p class="f-10"> Visi sociālie konti, kas atrodas šajā mapē automātiski pievienosies galvenajai mapei “Visi”. </p>
                      <div class="confirmCancel">
                       <button class="cancel"> Atpakaļ </button> 
                       <button class="confirm"> Apstiprināt </button> 
                      </div>
                    </div>
                  </div>

               <!-- Delete post popup end-->


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