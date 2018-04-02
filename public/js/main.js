 $(function(){  

      
     var animationSpeed = 500;
     $('li a').click( function (e) {
        //Get the clicked link and the next element
        var $this = $(this);
        var checkElement = $this.next();

        if ((checkElement.is('.treeview-menu')) && (checkElement.is(':visible'))) {
        //Close the menu
        checkElement.slideUp(animationSpeed, function () {
          checkElement.removeClass('menu-open');
          //Fix the layout in case the sidebar stretches over the height of the window
          //_this.layout.fix();
        });
        checkElement.parent("li").removeClass("active");
        }else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {            
            var parent = $this.parents('ul').first();
            //Close all open menus within the parent
            var ul = parent.find('ul:visible').slideUp(animationSpeed);
            //Remove the menu-open class from the parent
            ul.removeClass('menu-open');
            //Get the parent li
            var parent_li = $this.parent("li");

            //Open the target menu and add the menu-open class
            checkElement.slideDown(animationSpeed, function () {
                //Add the class active to the parent li
                checkElement.addClass('menu-open');
                parent.find('li.active').removeClass('active');
                parent_li.addClass('active');
                //Fix the layout in case the sidebar stretches over the height of the window
                // _this.layout.fix();
            });
        }
        //if this isn't a link, prevent the page from being redirected
        if (checkElement.is('.treeview-menu')) {
            e.preventDefault();
        }
    });
    var neg = $('.main-header').outerHeight() + $('.main-footer').outerHeight();
    var window_height = $(window).height();
    var sidebar_height = $(".sidebar").height();
    if ($("body").hasClass("fixed")) {
        $(".content-wrapper, .right-side").css('min-height', window_height - $('.main-footer').outerHeight());
      } else {
        var postSetWidth;
        if (window_height >= sidebar_height) {
          $(".content-wrapper, .right-side").css('min-height', window_height - neg);
          postSetWidth = window_height - neg;
        } else {
          $(".content-wrapper, .right-side").css('min-height', sidebar_height);
          postSetWidth = sidebar_height;
        }
      }
});



 
//Cuando haces click en el para sacar el menu
$('.sidebar-toggle').on('click', function (e) {    
     e.preventDefault();
     //Enable sidebar push menu
     if ($(window).width() > (options.screenSizes.sm - 1)) {
         if ($("body").hasClass('sidebar-collapse')) {
             $("body").removeClass('sidebar-collapse').trigger('expanded.pushMenu');
         } else {
             $("body").addClass('sidebar-collapse').trigger('collapsed.pushMenu');
         }
     }
     //Handle sidebar push menu for small screens
     else {
         if ($("body").hasClass('sidebar-open')) {
             $("body").removeClass('sidebar-open').removeClass('sidebar-collapse').trigger('collapsed.pushMenu');
         } else {
             $("body").addClass('sidebar-open').trigger('expanded.pushMenu');
         }
     }     
});
 options = {
     screenSizes: {
         xs: 480,
         sm: 768,
         md: 992,
         lg: 1200
     }
 };

    



