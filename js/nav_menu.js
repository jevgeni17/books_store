$(document).ready(function () {
                 $("#sidebar").niceScroll({
                     cursorcolor: '#53619d',
                     cursorwidth: 4,
                     cursorborder: 'none'
                 });

                 $('.overlay').on('click', function () {
                    $('#sidebarCollapse').addClass('active');
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                 });

                 $('#sidebarCollapse').on('click', function () {
                    if($(this).hasClass('active')){
                       $(this).removeClass('active');
                       $('#sidebar').addClass('active');
                       $('.overlay').fadeIn();
                       $('.collapse.in').toggleClass('in');
                       $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    }
                    });
             });