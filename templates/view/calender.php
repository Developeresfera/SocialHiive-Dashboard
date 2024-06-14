<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


<?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/header-dashboard.php'; ?>
<div class="container-fluid p-0">
   <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/user-nav.php'; ?>

    <!-- sidebar start-->
    <?php require_once PLUGIN_ROOT_PATH. 'templates/template-parts/social-sidebar.php'; ?>
    <!-- sidebar end-->

                <div class="header">
                    <div class="head_wrapper">
                        <h2 style="text-align:left" class="bold"> Socialo kontu kalendars </h2>
                        <div class="select_date">
                            <button class="today f-10 gray semi-bold" id="today-button"> Šodiena </button>
                            <span id="selected-date" class="f-10 gray semi-bold"> Jan 02 </span>
                            <div class="date_pick">
                                <input type="date" id="date-input" class="hidden-input" />
                                <span> <img src="<?php echo IMG_DIR; ?>/images-icons/calender.png" alt="" /> </span>
                            </div>
                        </div>
                        <div class="account_status d-flex align-items-center gap-3">
                          <div class="scheduled f-10 gray"> Ieplānots </div>
                          <div class="published f-10 gray"> Publicēts </div>
                          <div class="rejected f-10 gray"> Noraidīts </div>
                        </div>
                    </div>
                </div>
                <main class="main-content" id="main">
                    <div class="right_side calender">
                        <div id="calendar"></div>
                    </div>
                </main>

                		<!-- Calendar post preview start -->

                    <div class="calender_post_preview">
                    <div class="tabs_section">
                      <div class="close_payout"> X </div>
                      <div class="verticle_center">
                        <h2 class="gray f-20 semi-bold center"> 2. Janvaris 2024 </h2>
                        <div class="account_status d-flex align-items-center justify-content-center gap-3">
                          <div class="scheduled f-12 gray"> Ieplānots </div>
                          <div class="published f-12 gray"> Publicēts </div>
                          <div class="rejected f-12 gray"> Noraidīts </div>
                        </div>
                        <div class="profiles my-5">
                          <div class="grid">
                             <div class="profile_card grid-item publish">
                                <div class="profile_head"> <img  class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/insta.webp" /> <span class="textgray semi-bold f-17"> RJ Digital</span> </div>
                                <div class="profile_img"> <img src="<?php echo IMG_DIR; ?>/images-icons/sss.webp" /> </div>
                                <div class="profile_options">
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-heart.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-comment.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/d1d1.png" />
                                </div>
                                <div class="profile_description textgray semi-bold f-10">RJ Digital: Title of the post or descriptions first three words...</div>
                             </div>
                             <div class="profile_card grid-item reject">
                                <div class="profile_head"> 
                                  <img  class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" /> 
                                  <span class="textgray semi-bold f-17"> RJ Digital</span> 
                                  <div class="social_options"> 
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/share.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/edit.png" />
                                   <img  class="w-20 delete_post_btn" src="<?php echo IMG_DIR; ?>/images-icons/delete.png" />
                                  </div>
                                </div>
                                <div class="profile_img"> <img src="<?php echo IMG_DIR; ?>/images-icons/place.webp" /> </div>
                                <div class="profile_options">
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-heart.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-comment.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/d1d1.png" />
                                </div>
                                <div class="profile_description textgray semi-bold f-10">RJ Digital: Title of the post or descriptions first three words...</div>
                             </div>
                             <div class="profile_card grid-item schedule">
                                <div class="profile_head"> 
                                  <img  class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/facebook.png" /> 
                                  <span class="textgray semi-bold f-17"> RJ Digital</span> 
                                  <div class="social_options"> 
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/share.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/edit.png" />
                                   <img  class="w-20 delete_post_btn" src="<?php echo IMG_DIR; ?>/images-icons/delete.png" />
                                  </div>
                                </div>
                                <div class="profile_img"> <img src="<?php echo IMG_DIR; ?>/images-icons/place.webp" /> </div>
                                <div class="profile_options">
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-heart.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-comment.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/d1d1.png" />
                                </div>
                                <div class="profile_description textgray semi-bold f-10">RJ Digital: Title of the post or descriptions first three words...</div>
                             </div>
                             <div class="profile_card grid-item publish">
                                <div class="profile_head"> <img  class="w-30" src="<?php echo IMG_DIR; ?>/images-icons/insta.webp" /> <span class="textgray semi-bold f-17"> RJ Digital</span> </div>
                                <div class="profile_img"> <img src="<?php echo IMG_DIR; ?>/images-icons/sss.webp" /> </div>
                                <div class="profile_options">
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-heart.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/gray-comment.png" />
                                   <img  class="w-20" src="<?php echo IMG_DIR; ?>/images-icons/d1d1.png" />
                                </div>
                                <div class="profile_description textgray semi-bold f-10">RJ Digital: Title of the post or descriptions first three words...</div>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

		            <!-- Calendar post preview end-->

                <!-- Delete post popup start-->
                  <div class="delete_popup">
                    <div class="container">
                    <div class="cancel_delete"> X </div>
                    <p class="semi-bold f-20">Vai esi pārliecināts ka vēlies dzēst šo ierakstu?</p>
                    <div class="confirmCancel">
                      <button class="cancel"> Atpakaļ </button> 
                      <button class="confirm"> Apstiprināt </button> 
                    </div>
                    </div>
                  </div>
             <!-- Delete post popup end-->
      
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.0.0/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
 document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '2024-01-12',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      events: [
        {
          title: '14:10',
          start: '2024-01-03T13:00:00',
          constraint: 'businessHours',
          extendedProps: {
            image: '<?php echo IMG_DIR; ?>/images-icons/insta.webp',
            description: 'Posta virsraksts, vai aprasta trīs vārdi...'
          }
        },
        {
          title: '14:10',
          start: '2024-01-03T13:00:00',
          constraint: 'businessHours',
          extendedProps: {
            image: '<?php echo IMG_DIR; ?>/images-icons/facebook.png',
            description: 'Posta virsraksts, vai aprasta trīs vārdi...'
          }
        },
        // Add more events with custom data here
      ],
      eventContent: function(arg) {
      var eventTitle = arg.event.title;
      var eventImage = arg.event.extendedProps.image;
      var eventDescription = arg.event.extendedProps.description;
      
      // Construct the HTML for the event
      var html = '<div class="custom-event">';
      html += '<img class="w-20 preview" src="' + eventImage + '" alt="Event Image">';
      html += '<div class="event-title">' + eventTitle + '</div>';
      html += '<div class="event-description">' + eventDescription + '</div>';
      html += '</div>';

      // Return the HTML content wrapped in a new div with the class 'fc-event-main'
      return { html: '<div class="fc-event-main">' + html + '</div>' };
    },
    eventDidMount: function(info) {
               var dateDiv = info.el.closest('.fc-daygrid-day');
               dateDiv.classList.add('has-event');
        }
    });

    calendar.render();
    var todayButton = document.getElementById('today-button');
      todayButton.addEventListener('click', function() {
        calendar.gotoDate(new Date());
      });

// Input box event listener (if needed)
    var dateInput = document.getElementById('date-input');
      dateInput.addEventListener('change', function() {
        var selectedDate = dateInput.value;
        var parsedDate = new Date(selectedDate);
        var formattedDate = parsedDate.toLocaleString('en-us', { month: 'short', day: '2-digit' });
        var selectedDateDisplay = document.getElementById('selected-date');
        selectedDateDisplay.textContent = formattedDate;
      });
});


$(document).ready(function() {
    console.log("Document is ready");
    $('.has-event').on('click', function () {
      console.log("its workking");
         $('.calender_post_preview .tabs_section').addClass('open');
    });
});

$(document).ready(function() {
 $('.close_payout').on('click', function () {
    $('.calender_post_preview .tabs_section').removeClass('open');
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
