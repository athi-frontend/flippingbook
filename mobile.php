<!doctype html>
<html lang="en">
<head>
    <title>Keytruda</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width =device-width" />
    <script src="assets/js/jQuery-3.6.3.js"></script>
    <script>
        var jQuery3 = $.noConflict(true);
    </script>
    <script src="assets/js/jQuery-3.6.3.js"></script>
    <script src="assets/js/jQuery-Migrate-3.4.0.js"></script>
    <script src="assets/js/jquery.panzoom.js"></script>
    <script src="assets/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.2.5.3.min.js"></script>
    <script type="text/javascript" src="assets/js/hash.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/js/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flipbook.style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/book3.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flipstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magazine.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsiveNew.css">
    <link rel="stylesheet" type="text/css" href="assets/css/side-bar.css">
</head>

<body>
    <a class="fancybox-target" href=''></a>
    <a class="home-page" href=''>Home</a>
    <input type="hidden" id='book_id' value="" />
    <input type="hidden" id="user_id" value="" />
    <input type="hidden" id="source" value="" />
    <script>
      //fancy box
      $(".fancybox-target").fancybox({
          wrapCSS: 'fancybox-custom',
          closeClick: false,

          openEffect: 'none',

          helpers: {
              title: {
                  type: 'inside'
              },
              overlay: {
                  css: {
                      'background': 'rgba(238,238,238,0.85)'
                  }
              }
          }
      });
  </script>
    <div class='full-cover'>
        <!-- Thumbnails -->
        <div class="thumbnails-side" style='display:none;overflow:scroll;'>
            <ul style="top:10px;position: relative;">
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/0IVeuhg9R1pLQAUxCcTXkiK8G7Ja6tr2wYHBWsmo.png" class="page-1">
                    <span>1</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/2LdcXMVKg8BTF9NaSsQDxi3Okp5JR4qZzCnuYmvt.jpg" class="page-2">
                    <span>2</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/XfqaB9x6uKVzhEs8FU01OHnwct3GymZijP5QodA2.png" class="page-3">
                    <span>3</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/HNs8kFfnicb3T1p7eq0VCmZWuMyBwjot6lxrzXJL.png" class="page-4">
                    <span>4</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/ZEUsd7jBIRlXHxuK8h1SNeOiYw30DmWrq2kczvn6.jpg" class="page-5">
                    <span>5</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/qxTaWiGSluLz0YbgI5U4OXAsjkMdQRJV2EyNhPrf.jpg" class="page-6">
                    <span>6</span>
                </li>
               <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/zlhgCmWjG9xyFXnDAfJuZVQbr6854eM3i1BUH2Pp.jpg" class="page-7">
                    <span>7</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/yRbTGnYPIFZNAQjCesSKWBOm5241HVqip0a9rkLE.jpg" class="page-8">
                    <span>8</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/q074WuQC6UFP8RjzTxi1X5yZrcfHnBJdDoVlSpN9.jpg" class="page-9">
                    <span>9</span>
                </li>
                <li class="i">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/tlhwKRgMALjSsuxC6GIfrzZbvq4EFPOe8mpyViDd.png" class="page-10">
                    <span>10</span>
                </li>	
                <ul>
        </div>
        <div id="canvas">
            <div class="zoom-icon zoom-icon-in hidden-lg hidden-md hidden-sm hidden-xs hidden" style="display:none"></div>
            <div class="magazine-viewport">
                <div class="container-flip">
                    <div class="magazine">
                        <!-- Next button -->
                        <div ignore="1" class="next-button next-button-hover"></div>
                        <!-- Previous button -->
                        <div ignore="1" class="previous-button previous-button-hover"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--New Side Bar Start -->
    <div class="side-tool-bar opened">
        <span id="trigger-menue" class=""><i class="fa fa-bars open-menu" style="display: none;"></i> <i class="fa fa-bars close-menu"></i></span>
        <ul style="display: block;">
            <li>
                <a data-ajax="false" rel="external" href="#fb5-book"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/CBjEMGixtsfl2dLpkyOQ7RVNcXwPZ6hnqAW9SmTo.png" /></a>
            </li>
            <li>
                <a onclick='turn_page("previous")' class="previous-side"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/HIxg8r7YNdlKW9DFOwiJ4tEAsfkVzLa0Tu1Rjyvh.png" /></a>
            </li>
            <li>
                <a onclick='turn_page("next")' class="next-side"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/u2iG0Zoe9Ky3HABkl6fS5pOgDstT1XL4NnrabMRv.png" /></a>
            </li>
            <li>
                <a onclick="zoom_out();"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/ev8poICE2aht59KVb1jyMX74NAP3GL6kgi0udQcJ.png" /></a>
            </li>
            <li>
                <a class="zoom-in mob-zoom-in" onclick="zoom_in(this)"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/yuizdgZU0sQ9SRajFhO4bHMXL73BcmKWlfxJnNYD.png" /></a>
            </li>
            <li>
                <a onclick='toggle_side()' class="all-pages"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/hc8NPalFKRdVrAiuxgI0yMf2p1bHSXUYBwok4eEZ.png" /></a>
            </li>
            <li class="volume_up mob_volume_up">
                <a onclick='volume_down()' title="Volume Down"> <img onclick="volume_down()" src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/0T4tQ9zNoqugWwfVM1PGL3FmvIOJeDblEys5KC8k.png" /></a>
            </li>
            <li class="volume_down" style="display:none">
                <a onclick='volume_up();' title="Volume Up"> <img onclick="volume_up()" src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/pmr4F7NEbixLVI0XPgKzu6fZvT9jJcOwd3SHAeCW.png" /></a>
            </li>
            <li>
                <a href="assets/pages/GUUS-221343_mUC_PI_CVA_FM01_r16.pdf" target="_blank"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/BaETqNYDhC1Rk7PjoW4HmMViUKntZ6XwFAl59LOG.png" /></a>
            </li>
            <li>
                <a onclick="toggleFullScreen()"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/LsXpvaM6CYOUE8jK2y15fg4PFTzA3oVNHc7mRDWh.png" /></a>
            </li>
        </ul>
    </div>
    <!--New Side Bar End -->
    <!-- tool bar start -->
    <div class="flipbook-menuWrapper" style="font-size: 90%;">
        <div class="flipbook-menu skin-color-bg flipbook-bg-light" style="box-shadow: rgba(0, 0, 0, 0.156863) 0px 0px 6px, rgba(0, 0, 0, 0.227451) 0px 0px 6px; margin: 0px; padding: 0px; text-align: center;">
            <span onclick='turn_page("previous")' aria-hidden="true" class="next-icon fa fa-chevron-left flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Previous" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none; pointer-events: auto;"></span>
            <span onclick='turn_page("next")' aria-hidden="true" class="pre-icon fa fa-chevron-right flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Next" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none;  pointer-events: auto;"></span>
            <span aria-hidden="true" onclick='start_navigation()' class="start-auto fa-play flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Autoplay" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none; opacity: 1; pointer-events: auto;"></span>
            <span style='display:none' aria-hidden="true" onclick='stop_navigation()' class="stop-auto fa-pause flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Pause" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none; opacity: 1; pointer-events: auto;"></span>
            <span aria-hidden="true" onclick='zoom_in()' class="zoom-in fa-plus flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Zoom in" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none; opacity: 1; pointer-events: auto;"></span>
            <span aria-hidden="true" onclick='zoom_out()' class="zoom-out fa-minus flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Zoom out" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none; opacity: 0.3;pointer-events:none"></span>
            <span aria-hidden="true" onclick='toggle_side()' class="fa-th-large flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Pages" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none;"></span>
            <span aria-hidden="true" onclick='volume_down()' class="volume_up fa-volume-up flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Volume" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none;"></span>
            <span aria-hidden="true" style='display:none' onclick='volume_up();' class="volume_down fa-volume-off flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light" title="Volume" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none;"></span>
            <span aria-hidden="true" onclick='toggleFullScreen(this)' class="fa-expand flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa btnExpand flipbook-bg-light flipbook-color-light" title="Toggle fullscreen" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none;"></span>
            <span aria-hidden="true" onclick='download_pdf(this)' class="fa-download flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa btnExpand flipbook-bg-light flipbook-color-light" title="Download PDF" style="width: 12px; font-size: 12px; border-radius: 4px; margin: 4px; padding: 10px; background: none;"></span>
        </div>
    </div>
    <!-- tool bar end -->
    <!--Page Content-->
    <!-- BEGIN PAGE 1-->
    <div id="first_page" style="display:none">
        <!-- BEGIN PAGE 1-->
        <div data-background-image="" class="odd cover-page fb5-double fb5-first new-index-page ">
          <div class="fb5-cont-page-book">
            <div class="fb5-page-book first-page-content-s">
                    <div class="fb-left">
                        <div class="page1_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/CQ9xbc70LNql4A1kH2UEOraYTX5fde8ygKGpsuBz.svg" />
                        </div>
                        <div class="page1_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wtediWYxD49OQm5gR2kKXnf3Iqj78l0ZpyAFUhzH.svg" />
                        </div>
                        <div class="page1_4">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/tQZjN23Mloq8s9khBYarpfAXwJeOCyVHRixUubEK.svg" />
                        </div>
                        <div class="page1_5">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/dLmwfZUc30zrSy6P1QoDiM5pIkX49A8FqtEJRjx2.svg"  alt="KEYTRUDA Logo"/>
                            <a href="https://l.rlvth.com/keytruda_pi" class="page1-text-link1"  target="_blank" >Prescribing Information</a>
                    <a href="https://l.rlvth.com/keytruda_mg" class="page1-text-link2"  target="_blank" >Medication Guide</a>
                            
                        </div>
                        <div class="page1_7">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                    </div>
                    
                    <div class="fb-right">
                        <div class="page1_6">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/jrVGAo08F7JLKC1HBblZUgzwD4TyqIYRcxn3ef6v.svg"  alt="KOL Image" />
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <!-- END PAGE 1 -->
    </div>
    <!-- BEGIN PAGE 2 -->
    <div id="second_page" style="display:none">
        <!-- BEGIN PAGE 2 -->
        <div data-background-image="" class="even fb5-double fb5-first sec-page-sp">
            <!-- begin container page book -->
            
			<div class="fb5-cont-page-book">
        <div class="page-cover-az second-page-cover">
          <div class="flipbook_box ">
            <div class="fb-right1">
                <div class="page_2_1">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/cYegXo7vHfULjCbl9yFKm2ntQxiWRNkwD6Ip5SEV.svg" />
                </div>
                <div class="page_2_2">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/9WnFqtVce2MwAYSETdrUuL8fD60isGgjRH74Cz5N.svg" />
                </div>
                <div class="page_2_2-1">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/AtNC6obwgk2iZU1VBRdnaGvKj93c0rEl4uLx8Hse.svg" alt="KEYNOTE-869 study design table" />
                </div>
                <div class="page_2_3">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/Zvx1u0jHUmL96SRsTacfV3CpYFDnoB4kM2gA8WIP.svg" />
                    <a href="https://l.rlvth.com/keytruda_pi" class="page2-text-link1"  target="_blank" >Prescribing Information</a>
                    
            <a href="https://l.rlvth.com/keytruda_mg" class="page2-text-link2"  target="_blank" >Medication Guide</a>
            
                </div>
                <div class="page_2_4">
                    <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
        <!-- END PAGE 2 -->
    </div>
    <!-- END PAGE 2 -->
    <!-- BEGIN PAGE 3 -->
    <div id="third_page" style="display:none">
        <!-- BEGIN PAGE 3 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az third-page-cover ">
                  <div class="flipbook_box ">
                    <!-- <div class="bg-height"> -->
                    <div class="fb-left2">
                        <div class="page_3_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/3hZporYN8S7LO9e4AiEQ5Dc1nJFHIfjW0UuvtmTX.svg" />
                        </div>
                        <div class="page_3_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/EXvMINaoTHrCmUqW6dGDF8hs3k0tQfbKzj9g1lVP.svg" />
                        </div>
                        <div class="page_3_2-1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/3IUVoZOfCvuMhpqJEgawj9xsSnkGHDzW0F5rQ4il.svg" alt="Patient Characteristics table"/>
                        </div>
                        <div class="page_3_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/G72xjc4Y5yE1XuwKeDUmWRQlbHdzCsBJPgnL0hZO.svg" />
                        </div>
                        <div class="page_3_5">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/Ltba0oDIAxm9EYWR8rc1sk6X74vZC5fu3UMPQVTe.svg" />
                        </div>
                        <div class="page_3_7">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                        <div class="page_3_8">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/XyPGhrWoI54nCL2RAucNxZJlv9sDFmKYqgS6QkdM.svg"  alt="KEYTRUDA Logo"/>
                        </div>
                    </div>
                    <div class="fb-right2">
                        <div class="page_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/KXGAETgc25dqNYaODej0tipfxhLI6kQPFRnyVu49.svg" alt="KOL Image" />
                        </div>
                    </div>
                <!-- </div> -->
                </div> 
                </div>
                <!-- end container page book -->
            </div>
        </div>
        <!-- END PAGE 3 -->
    </div>
    <!-- END PAGE 3 -->
    <!-- BEGIN PAGE 4 -->
    <div id="fourth_page" style="display:none">
        <!-- BEGIN PAGE 4 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az third-page-cover ">
                  <div class="flipbook_box ">
                    <div class="fb-left1">
                        <div class="page_4">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/eYBLKmxXOyQuf5ENkJAGow9Zt8SlnjsFCq6dcMvg.svg" alt="KOL Image" />  
                        </div>
                    </div>
                    <div class="fb-right1">
                        <div class="page_top">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/tBuAPvh6dqJGpz8OxEfrT7L0jcV1MF2a49koWZbn.svg" />
                        </div>
                        <div class="page_4_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/SMXFupK6CW4tN1mHjOY2UveVDxob7nEk3Gas5zZ0.svg" alt="Efficacy result table"/>
                        </div>
                        <div class="page_4_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/x0TzFHOehQmDRwXWyrubcsoilMnkGCN4dvEYB183.svg" />
                        </div>
                        <div class="page_4_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/4YjWE9NiRrZcHmxSL67IDdPfoXsbMpBkQgeawh2t.svg" />
                            <a href="https://l.rlvth.com/keytruda_pi" class="page4-text-link1"  target="_blank" >Prescribing Information</a>
                            <a href="https://l.rlvth.com/keytruda_mg" class="page4-text-link2"  target="_blank" >Medication Guide</a>
                        </div>
                        <div class="page_4_4">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 4 -->
    </div>
    <!-- END PAGE 4 -->
    <!-- BEGIN PAGE 5 -->
    <div id="fifth_page" style="display:none">
        <!-- BEGIN PAGE 5 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az fifth-page-cover ">
                  <div class="flipbook_box ">
                    <div class="fb-left2">
                        <div class="page_5">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/3RjrkB5XF8wbPWUK1l6avt9y7xMzcg0SYTnoLfN4.svg" />
                        </div>
                        <div class="page_5_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/tsZG7TR9jU3pynObf6dlIMcwkhQ5FLSW0EJuAPKg.svg" />
                        </div>
                      
                        <div class="page_5_4">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                        <div class="page_5_5">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/sgq2zIfDnopMcLA30TaQ4iRPZ6X8BumUdYFKyW95.svg" alt="KEYTRUDA Logo" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 5 -->
    </div>
    <!-- END PAGE 5 -->
	 <!-- BEGIN PAGE 6 -->
    <div id="sixth_page" style="display:none">
        <!-- BEGIN PAGE 6 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az fifth-page-cover ">
                  <div class="flipbook_box">
                    <div class="fb-left1">
                    </div>
                    <div class="fb-right1">
                        <div class="page_6_top">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/E9iIX0LMVyWoaGe7ZurtQd51lSk8FngDTYRqCmzO.svg" />
                        </div>
                        <div class="page_6_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/RsOEFejgCnWI4opwB0ry6X3t2V1GK9HacP5YTLuJ.svg" />
                        </div>
                        <div class="page_6_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/9PVQASyNIFkXdEb53L1Wr6esugnc0zUvJ4RqDwpj.svg" alt="Adverse Reactions Table" />
                        </div>
                        <div class="page_6_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/D5Et4QkSR6Nrv9P3jnVpBxyi0wsCIKlYMf7cA1zb.svg" />
                            <a href="https://l.rlvth.com/keytruda_pi" class="page6-text-link1"  target="_blank" >Prescribing Information</a>
                            <a href="https://l.rlvth.com/keytruda_mg" class="page6-text-link2"  target="_blank" >Medication Guide</a>
                        </div>
                        <div class="page_6_4">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 6 -->
    </div>
    <!-- END PAGE 6 -->
	 <!-- BEGIN PAGE 7 -->
    <div id="seventh_page" style="display:none">
        <!-- BEGIN PAGE 7 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az fifth-page-cover ">
                  <div class="flipbook_box ">
                    <div class="fb-left2">
                        <div class="page_7">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/5g80dFQPqEjeHcOfirNxl2T9uoIwUCsBh4aWYm3M.svg" />
                        </div>
                        <div class="page_7_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/2rdN6xslVWGJcE8OA5kK4Y10TbPHvyZijmqwgInB.svg" />
                        </div>
                        <div class="page_7_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/V9CjH7Tg1nWNflMZ086BxqvGK4Dtos3QybceIzE5.svg" alt="Adverse Reactions Table"/>
                        </div>
                        <div class="page_7_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/8Dox61MEXfOzhVeWRHGumjgaTbL9yCY40FvdplUN.svg" />
                        </div>
                        <div class="page_7_5">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                        <div class="page_7_6">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/yzNSpxFw4hDWdORAuJaEMYsZ2PIf6o0GBkmV5b3n.svg" alt="KEYTRUDA Logo"/>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 7 -->
    </div>
    <!-- END PAGE 7 -->
	 <!-- BEGIN PAGE 8 -->
    <div id="eigth_page" style="display:none">
        <!-- BEGIN PAGE 8 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az fifth-page-cover ">
                  <div class="flipbook_box ">
                    <div class="fb-left1">
                    </div>
                    <div class="fb-right1">
                        <div class="page_8">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/cUEXPvVrx86QtMHOgNy1wJuhDRsld7bep435BYfW.svg" />
                        </div>
                        <div class="page_8_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/4xwfSK0FW2UarybvMXQih3RdktHsLVDTzcJPeZYq.svg" />
                        </div>
                        <div class="page_8_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/CQ2sOSdjJ5wgYEMzT0Xvt7LBpckAIVWHZKbF9oR8.svg" />
                            <a href="https://l.rlvth.com/keytruda_pi" class="page8-text-link1"  target="_blank" >Prescribing Information</a>
                    <a href="https://l.rlvth.com/keytruda_mg" class="page8-text-link2"  target="_blank" >Medication Guide</a>
                        </div>
                     <div class="page_8_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 8 -->
    </div>
    <!-- END PAGE 8 -->
	 <!-- BEGIN PAGE 9 -->
    <div id="ninth_page" style="display:none">
        <!-- BEGIN PAGE 9 -->
        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az fifth-page-cover ">
                  <div class="flipbook_box ">
                    <div class="fb-left2">
                        <div class="page_9_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/xu9XGjrzc0q2748D1KVPsh3y5RpdEoTJwSQBWLgi.svg" />
                        </div>
                        <div class="page_9_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/LpugHXEKQn64bkf0YsqIvxFJyd1eiDCo5zWAPMjw.svg" />
                        </div>
                        <div class="page_9_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/rIUlAQJNjw7HRGiOsptu8a9dXz5yLmWbVSof1CeF.svg" />
                        </div>
                        <div class="page_9_6">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/BUCy8PqWJnsx7GAZubvY5djNE6czKODML0SitXRo.svg" alt="KEYTRUDA Logo" />
                        </div>
                        <div class="page_9_7">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                    </div>
                    <div class="fb-right2">
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 9 -->
    </div>
    <!-- END PAGE 9 -->
    <div id="tenth_page" style="display:none">
        <!-- BEGIN PAGE 10 -->
        <div data-background-image="" class="odd fb5-double even fb5-second third-page-sp nv-border">
            <!-- container page book -->
            <div class="fb5-cont-page-book">
                <div class="page-cover-az sixth-page-cover ">
                  <div class="flipbook_box ">
                    <div class="fb-left3">
                    </div>
                    <div class="fb-right3">
                        <div class="page_10_1">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/crzyNBxGD6YFH2UVQSgjX9Pfm7heLCqu1al53sk4.svg" />
                        </div>
                        <div class="page_10_2">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/9aMxRHzuQnDws0YrUpmB3gCGdZb8WEFq56f4O7vP.svg" />
                            <a href="https://l.rlvth.com/keytruda_pi" class="page10-text-link1"  target="_blank" >Prescribing Information</a>
                    <a href="https://l.rlvth.com/keytruda_mg" class="page10-text-link2"  target="_blank" >Medication Guide</a>
                            <a href="https://keytrudaenfortumabvedotinhcp.com" class="page10-text-link3"  target="_blank" >keytrudaenfortumabvedotinhcp.com</a>
                    <a href="https://keytrudaenfortumabvedotinhcp.com" class="page10-text-link4"  target="_blank" >keytrudaenfortumabvedotinhcp.com</a>
                        </div>
                        <div class="page_10_3">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/vxXlhRjmuZKJFiS0N287s1MoyQTdk4WabqIpgntA.svg" alt="MERCK Logo, KEYTRUDA Logo" />
                        </div>
                        <div class="page_10_4">
                            <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end container page book -->
        </div>
        <!-- END PAGE 10 -->
    </div>
   
    <div id="fancy-content" style='display:none'>
    </div>
    <script type="text/javascript">
function changePage(pageNumber){
  $('.magazine').turn("page", pageNumber);
}
        function show_box_temp(t) {
            var element = $(t);
            var target = '';
            if (element.attr('src') != '') {
                target = element.attr('src');
            } else {
                target = "#" + element.attr('target');
            }
            if (target != '') {
                $('.fancybox-target').attr('href', target);
                $('.fancybox-target').trigger('click');
            }
        }

        function show_text_box(t) {

            $('.fancybox-target').attr('href', t);
            $('.fancybox-target').trigger('click');

        }

        function show_div_pop(t) {
            var element = $(t);
            var content = $(t).html();
            var target = "#pop-content";
            $('#pop-content').html(content);
            $('.fancybox-target').attr('href', target);
            $('.fancybox-target').trigger('click');
        }

        var triggered_status;
        var volume_status = 0;
        var first_page = $('#first_page').html();
        var second_page = $('#second_page').html();
        var third_page = $('#third_page').html();
        var fourth_page = $('#fourth_page').html();
        var fifth_page = $('#fifth_page').html();
        var sixth_page = $('#sixth_page').html();
        var seventh_page = $('#seventh_page').html();
        var eigth_page = $('#eigth_page').html();
        var ninth_page = $('#ninth_page').html();
        var tenth_page = $('#tenth_page').html();
        var PageArr = [{
            htmlContent: first_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/0IVeuhg9R1pLQAUxCcTXkiK8G7Ja6tr2wYHBWsmo.png' />"
            }, {
                htmlContent: second_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/2LdcXMVKg8BTF9NaSsQDxi3Okp5JR4qZzCnuYmvt.jpg' />"
            }, {
                htmlContent: third_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/XfqaB9x6uKVzhEs8FU01OHnwct3GymZijP5QodA2.png' />"
            }, {
                htmlContent: fourth_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/HNs8kFfnicb3T1p7eq0VCmZWuMyBwjot6lxrzXJL.png' />"
            }, {
                htmlContent: fifth_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/ZEUsd7jBIRlXHxuK8h1SNeOiYw30DmWrq2kczvn6.jpg' />"
            }, {
                htmlContent: sixth_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/qxTaWiGSluLz0YbgI5U4OXAsjkMdQRJV2EyNhPrf.jpg' />"
            }, {
                htmlContent: seventh_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/zlhgCmWjG9xyFXnDAfJuZVQbr6854eM3i1BUH2Pp.jpg' />"
            }, {
                htmlContent: eigth_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/yRbTGnYPIFZNAQjCesSKWBOm5241HVqip0a9rkLE.jpg' />"
            }, {
                htmlContent: ninth_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/q074WuQC6UFP8RjzTxi1X5yZrcfHnBJdDoVlSpN9.jpg' />"
            }, {
                htmlContent: tenth_page,
                thumb: "<img src='https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/tlhwKRgMALjSsuxC6GIfrzZbvq4EFPOe8mpyViDd.png' />"
            }
        ];

        function loadApp() {
        console.log(PageArr.length);
           $('#canvas').fadeIn(1000);

           var flipbook = $('.magazine');

           // Check if the CSS was already loaded

         if (flipbook.width()==0 || flipbook.height()==0) {
           setTimeout(loadApp(), 10);
           return;
         }

         // Create the flipbook

         flipbook.turn({

             // Magazine width

             width: 1634,

             // Magazine height

             height: 1056,

             // Duration in millisecond

             duration: 1000,

             // Hardware acceleration

             acceleration: false,

             // Enables gradients

             gradients: true,

             // Auto center this flipbook

             autoCenter: true,

             // Elevation from the edge of the flipbook when turning a page

             elevation: 50,
             peel:'tl',

             // The number of pages

             //pages: 12,
             pages: PageArr.length,
             display:'double',

             // Events

             when: {
               turning: function(event, page, view) {

                 var book = $(this),
                 currentPage = book.turn('page'),
                 pages = book.turn('pages');

                 // Update the current URI

                 Hash.go('page/' + page).update();

                 // Show and hide navigation buttons

                 disableControls(page);


                 $('.thumbnails-side .page-'+currentPage).
                   parent().
                   removeClass('current');

                 $('.thumbnails-side .page-'+page).
                   parent().
                   addClass('current');
                   play_sound();
                   insert_page_view(page,'single',PageArr.length);



               },

               turned: function(event, page, view) {

                 disableControls(page);

                 $(this).turn('center');

                 if (page==1) {
                   $(this).turn('peel', false);
                 }
                 check_page();
                 setTimeout(function(){
                   $('.fb5-cont-page-book').addClass('rounded');
                 },2000);
                 setTimeout(function(){
                   $('.fb5-cont-page-book').removeClass('rounded');
                 },5000);
               },

               missing: function (event, pages) {

                 // Add pages that aren't in the magazine
               //	console.log(pages.length);
                 //console.log(PageArr[0]);
                 for (var i = 0; i < pages.length; i++){
                 //console.log(pages[i]);
                 addPage(pages[i], $(this),PageArr[pages[i]-1]);
                 }
                   //addPage(pages[i], $(this));

               }
             }

         });

         // Zoom event

         if ($.isTouch)
           $('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
         else
           $('.magazine-viewport').bind('zoom.tap', zoomTo);


         // Using arrow keys to turn the page

         $(document).keydown(function(e){

           var previous = 37, next = 39, esc = 27;

           switch (e.keyCode) {
             case previous:

               // left arrow
               $('.magazine').turn('previous');
               e.preventDefault();

             break;
             case next:

               //right arrow
               $('.magazine').turn('next');
               e.preventDefault();

             break;
             case esc:

               $('.magazine-viewport').zoom('zoomOut');
               e.preventDefault();

             break;
           }
         });

         // URIs - Format #/page/1

         Hash.on('^page\/([0-9]*)$', {
           yep: function(path, parts) {
             var page = parts[1];

             if (page!==undefined) {
               if ($('.magazine').turn('is'))
                 $('.magazine').turn('page', page);
             }

           },
           nop: function(path) {
             insert_page_view(1,'single',PageArr.length);

             if ($('.magazine').turn('is'))
               $('.magazine').turn('page', 1);
           }
         });


         $(window).resize(function() {
           //resizeViewport();
           //initialize();
         }).bind('orientationchange', function() {
           //resizeViewport();
           //initialize();
         });

         // Events for thumbnails

         $('.thumbnails-side').click(function(event) {

           var page;

           if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {

             $('.magazine').turn('page', page[1]);
             $('.thumbnails-side').hide('slow');

           }
         });

         $('.thumbnails-side li').
           bind($.mouseEvents.over, function() {

           //	$(this).addClass('thumb-hover');

           }).bind($.mouseEvents.out, function() {

             //$(this).removeClass('thumb-hover');

           });

         if ($.isTouch) {

           $('.thumbnails-side').
             addClass('thumbanils-touch').
             bind($.mouseEvents.move, function(event) {
               //event.preventDefault();
             });

         } else {

           $('.thumbnails-side ul').mouseover(function() {

             //$('.thumbnails-side').addClass('thumbnails-hover');

           }).mousedown(function() {

             return false;

           }).mouseout(function() {

             //$('.thumbnails-side').removeClass('thumbnails-hover');

           });

         }


         // Regions

         if ($.isTouch) {
           //$('.magazine').bind('touchstart', regionClick);
         } else {
           //$('.magazine').click(regionClick);
         }

         // Events for the next button

         $('.next-button').bind($.mouseEvents.over, function() {

           //$(this).addClass('next-button-hover');

         }).bind($.mouseEvents.out, function() {

           $(this).removeClass('//');

         }).bind($.mouseEvents.down, function() {

           //$(this).addClass('next-button-down');

         }).bind($.mouseEvents.up, function() {

           //$(this).removeClass('next-button-down');

         }).click(function() {

           $('.magazine').turn('next');

         });

         // Events for the next button

         $('.previous-button').bind($.mouseEvents.over, function() {

           //$(this).addClass('previous-button-hover');

         }).bind($.mouseEvents.out, function() {

           //$(this).removeClass('previous-button-hover');

         }).bind($.mouseEvents.down, function() {

           //$(this).addClass('previous-button-down');

         }).bind($.mouseEvents.up, function() {

           //$(this).removeClass('previous-button-down');

         }).click(function() {
           //$('.magazine.shadow').css('overflow','hidden !important');
           $('.magazine').turn('previous');
         });


         resizeViewport();

         $('.magazine').addClass('animated');

        }

        /*mobile*/
        function loadmobileApp() {
         var j=0;
         var width_r=$(window).width();
         var height_r=$(window).height()-100;
           $('#canvas').fadeIn(1000);

           var flipbook = $('.magazine');

           // Check if the CSS was already loaded

         if (flipbook.width()==0 || flipbook.height()==0) {
           setTimeout(loadmobileApp(), 10);
           return;
         }

         // Create the flipbook

         flipbook.turn({

             // Magazine width

             width: 756,

             // Magazine height

             height: 792,

             // Duration in millisecond

             duration: 1000,

             // Hardware acceleration

             acceleration: true,

             // Enables gradients

             gradients: true,

             // Auto center this flipbook

             autoCenter: true,

             // Elevation from the edge of the flipbook when turning a page

             elevation: 20,

             // The number of pages

             //pages: 12,
             pages: PageArr.length,
             display:'single',

             // Events

             when: {
               turning: function(event, page, view) {

                 var book = $(this),
                 currentPage = book.turn('page'),
                 pages = book.turn('pages');

                 // Update the current URI

                 Hash.go('#page/' + page).update();

                 // Show and hide navigation buttons

                 disableControls(page);


                 $('.thumbnails .page-'+currentPage).
                   parent().
                   removeClass('current');

                 $('.thumbnails .page-'+page).
                   parent().
                   addClass('current');
                   play_sound();
                   insert_page_view(page,'single',PageArr.length);

               },

               turned: function(event, page, view) {

                 disableControls(page);

                 $(this).turn('center');

                 if (page==1) {
                   $(this).turn('peel', false);
                 }
                 //alert('d');

               },

               missing: function (event, pages) {

                 for (var i = 0; i < pages.length; i++){
               //	console.log("i"+i);
               //	console.log("j"+j);
                 addPage(pages[i], $(this),PageArr[pages[i]-1]);
                 j++;
                 }
                   //addPage(pages[i], $(this));

               }
             }

         });

         // Using arrow keys to turn the page

         $(document).keydown(function(e){

           var previous = 37, next = 39, esc = 27;

           switch (e.keyCode) {
             case previous:

               // left arrow
               $('.magazine').turn('previous');
               e.preventDefault();

             break;
             case next:

               //right arrow
               $('.magazine').turn('next');
               e.preventDefault();

             break;
             case esc:

               $('.magazine-viewport').zoom('zoomOut');
               e.preventDefault();

             break;
           }
         });

         // URIs - Format #/page/1

         Hash.on('^page\/([0-9]*)$', {
           yep: function(path, parts) {
             var page = parts[1];

             if (page!==undefined) {
               if ($('.magazine').turn('is'))
                 $('.magazine').turn('page', page);
             }

           },
           nop: function(path) {
             insert_page_view(1,'single',PageArr.length);

             if ($('.magazine').turn('is'))
               $('.magazine').turn('page', 1);
           }
         });


         $(window).resize(function() {
           //resizeViewport();
         }).bind('orientationchange', function() {
           //resizeViewport();
         });

         // Events for thumbnails

         $('.thumbnails-side').click(function(event) {

           var page;

           if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {

             $('.magazine').turn('page', page[1]);
             $('.thumbnails-side').hide('slow');

           }
         });


         $('.thumbnails-side li').
           bind($.mouseEvents.over, function() {

           //	$(this).addClass('thumb-hover');

           }).bind($.mouseEvents.out, function() {

           //	$(this).removeClass('thumb-hover');

           });

         if ($.isTouch) {

           $('.thumbnails-side').
             addClass('thumbanils-touch').
             bind($.mouseEvents.move, function(event) {
               //event.preventDefault();
             });

         } else {

           $('.thumbnails-side ul').mouseover(function() {

             //$('.thumbnails-side').addClass('thumbnails-hover');

           }).mousedown(function() {

             return false;

           }).mouseout(function() {

             //$('.thumbnails-side').removeClass('thumbnails-hover');

           });

         }


         // Regions

         if ($.isTouch) {
           //$('.magazine').bind('touchstart', regionClick);
         } else {
           //$('.magazine').click(regionClick);
         }

         // Events for the next button

         $('.next-button').bind($.mouseEvents.over, function() {

           //$(this).addClass('next-button-hover');

         }).bind($.mouseEvents.out, function() {

           //$(this).removeClass('next-button-hover');

         }).bind($.mouseEvents.down, function() {

           //$(this).addClass('next-button-down');

         }).bind($.mouseEvents.up, function() {

           //$(this).removeClass('next-button-down');

         }).click(function() {

             $('.magazine').turn('next');

         });

         // Events for the next button

         $('.previous-button').bind($.mouseEvents.over, function() {

           $(this).addClass('previous-button-hover');

         }).bind($.mouseEvents.out, function() {

           //$(this).removeClass('previous-button-hover');

         }).bind($.mouseEvents.down, function() {

           //$(this).addClass('previous-button-down');

         }).bind($.mouseEvents.up, function() {

           //$(this).removeClass('previous-button-down');

         }).click(function() {

           $('.magazine').turn('previous');

         });

         resizeViewport();

         $('.magazine').addClass('animated');

        }


        // Zoom icon

         $('.zoom-icon').bind('mouseover', function() {

           if ($(this).hasClass('zoom-icon-in'))
             $(this).addClass('zoom-icon-in-hover');

           if ($(this).hasClass('zoom-icon-out'))
             $(this).addClass('zoom-icon-out-hover');

         }).bind('mouseout', function() {

            if ($(this).hasClass('zoom-icon-in'))
             $(this).removeClass('zoom-icon-in-hover');

           if ($(this).hasClass('zoom-icon-out'))
             $(this).removeClass('zoom-icon-out-hover');

         }).bind('click', function() {

           if ($(this).hasClass('zoom-icon-in'))
             $('.magazine-viewport').zoom('zoomIn');
           else if ($(this).hasClass('zoom-icon-out'))
           $('.magazine-viewport').zoom('zoomOut');

         });

         $('#canvas').hide();

        initialize();
        /*check dimension and change the  mobile/web app */
        function initialize(){
        if($(window).width()<=1024){
        yepnope({
         test : Modernizr.csstransforms,
         yep: ['assets/js/turn.js'],
         nope: ['assets/js/turn.html4.min.js'],
         both: ['assets/js/zoom.min.js', 'assets/js/magazine.js'],
         complete: loadmobileApp
        });
        }else{
        yepnope({
         test : Modernizr.csstransforms,
         yep: ['js/turn.js'],
         nope: ['js/turn.html4.min.js'],
         both: ['js/zoom.min.js', 'js/magazine.js'],
         complete: loadApp
        });
        }
        }

        function myFunction(){
         alert('ready to submit');
        }
        function play_sound(){
        //$('.magazine.shadow').css('overflow','visible !important');
        $('.next-button').addClass('next-button-hover');
        $('.previous-button').addClass('previous-button-down');
         if(volume_status==1){
         return false;
         }
         var bflat = new Audio();
         bflat.src = "assets/mp3/turnPage.ogg";
         bflat.play();
         bflat.autoplay = true;
         $(' .conte').click(function(){
         var target=$(this).next('.pagenos').html();
         //alert(target);
           $('.magazine').turn('page',target);
        });
         $(' .pagenos').click(function(){
         var target=$(this).text();
         //alert(target);
           $('.magazine').turn('page',target);
        });
        }
        /*tool bar functions*/
        function turn_page(type){
         jQuery3('.full-cover').panzoom("setMatrix", [ 2.3, 0, 0, 2.3, 0, 0 ]);
         $('.magazine').turn(type);
         stop_navigation();
        }
        function check_page(){
         var tot_page=PageArr.length;
         var current_page=$('.magazine').turn('page');
         if(current_page==tot_page){
         $('.pre-icon').css('opacity','0.3');
         $('.pre-icon').css('pointer-events',"none");
         stop_navigation();
         }else{
         $('.pre-icon').css('opacity','1');
         $('.pre-icon').css('pointer-events',"auto");


         }
         if(current_page==1){
         $('.next-icon').css('opacity','0.3');
         $('.next-icon').css('pointer-events',"none");
         }else{
         $('.next-icon').css('opacity','1');
         $('.next-icon').css('pointer-events',"auto");

         }
        }
        function auto_play(){
         if(triggered_status==1){
           setTimeout(function(){
           var tot_page=PageArr.length;
           var current_page=$('.magazine').turn('page');
           if(current_page==tot_page||triggered_status==0){
             return false;
           }else{
               $('.magazine').turn('next');

               auto_play();

           }

           },3000);


         }
        }
        function stop_navigation(){
         $('.start-auto').show();
         $('.stop-auto').hide();
         triggered_status=0;
         }
        function start_navigation(){
         var tot_page=PageArr.length;
         var current_page=$('.magazine').turn('page');
         $('.start-auto').hide();
         $('.stop-auto').show();
         triggered_status=1;

         if(current_page==tot_page){
         $('.magazine').turn('page',1);
         }
         auto_play();
        }
        jQuery3('.full-cover').panzoom({
                    $zoomIn: $(".zoom-in"),
               duration: 300,
             increment: 1.3,
              panOnlyWhenZoomed: true,

                  });

        jQuery3('.full-cover').panzoom("disable");


        function zoom_in(){

           $('.zoom-in').css('opacity',"0.3");
         $('.zoom-in').css('pointer-events',"none");;
         $('.zoom-out').css('opacity',"1");
         $('.zoom-out').css('pointer-events',"auto");
         $('.full-cover').addClass('full-screens-opens');

        jQuery3('.full-cover').panzoom("enable");
         jQuery3('.full-cover').panzoom("zoom");
          jQuery3('.full-cover a').on('mouseup touchend click', function( e ) {
          e.stopPropagation();
             e.preventDefault();
          var url=$(this).attr('href');
          if(url!="" && url!="#" && url!="javascript:void(0);" && url!="javascript:void(0)" ){window.open(url, '_blank');}
         });
         }
        function zoom_out(){
         $('.full-cover').removeClass('full-screens-opens');

          jQuery3('.full-cover').panzoom("reset");
         $('.zoom-out').css('opacity',"0.3");
         $('.zoom-out').css('pointer-events',"none");
         $('.zoom-in').css('opacity',"1");
         $('.zoom-in').css('pointer-events',"auto");
         setTimeout(function(){
         jQuery3('.full-cover').panzoom("disable");
        },200);

         }
        function volume_down(){
         $('.volume_up').hide();
         $('.volume_down').show();
           volume_status=1;
         }
        function volume_up(){
         $('.volume_down').hide();
         $('.volume_up').show();
           volume_status=0;
        }
        function toggleFullScreen(t) {
        $(t).toggleClass('fa-compress');
          if ((document.fullScreenElement && document.fullScreenElement !== null) ||
           (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
              document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
              document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
              document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            } else if (document.documentElement.webkitRequestFullScreen) {
              document.documentElement.webkitEnterFullscreen();
            }
          } else {
            if (document.cancelFullScreen) {
              document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
            }
          }
        }
        function toggle_side() {
        $('.thumbnails-side').toggle('slow');
        }
        function download_pdf(t){
        window.open('assets/pages/GUUS-221343_mUC_PI_CVA_FM01_r16','_blank');
        }

          /*Update spent time*/
         var limit="";
        var base_url='';


     </script>
     <script type="text/javascript" src="assets/js/analytics.js"></script>
     <script src="assets/js/jquery.mobile-1.4.5.js"></script>
	 <script src="assets/js/turn.js"></script>
     <script>
        $(function(){
        // Bind the swipeleftHandler callback function to the swipe event on div.box
        $( ".magazine-viewport" ).on( "swipeleft", swipeleftHandler );
        $( ".magazine-viewport" ).on( "swiperight", swiperightHandler );

        // Callback function references the event target and adds the 'swipeleft' class to it
        function swipeleftHandler( event ){
        if(!$(".full-cover").hasClass("full-screens-opens")){
          $('.magazine').turn('next');
        }

        }
        function swiperightHandler( event ){
          if(!$(".full-cover").hasClass("full-screens-opens")){
          $('.magazine').turn('previous');
        }
        }
        });
        $(".open-menu").click(function(){
        var t=this;
        $('.side-tool-bar ul').show("slow");
        $('.side-tool-bar').addClass("opened");
        $('.open-menu').hide();
        $('.close-menu').show();


        });
        $(".close-menu").click(function(){
        var tw=this;
        $('.side-tool-bar ul').hide("slow");
         $('.side-tool-bar').removeClass("opened");

        $('.open-menu').show();
        $('.close-menu').hide();

        });
        $(window).load(function(){
        setTimeout(function(){
        //$('.fb5-cont-page-book').addClass('rounded');
        },2000);
        setTimeout(function(){
        //	$('.fb5-cont-page-book').removeClass('rounded');
        },5000);
        });

     </script>
	 <script>
        $(function() {
            $('.page1').load("1.html");
        });
        set_cursor();
        var time_function=function(){

						};
					  	    $("#fb5-book").bind("turned", function(event, page, view) {
							    console.log('test'+page);
								$("body").addClass("turned");
							$("body").removeClass("turning");
							if (page=="1") {
							  setTimeout(function(){
								  time_function= setInterval(function(){
									    if($("body").hasClass("turned")){
									if($("body").hasClass("peeled")){
										$("#fb5-book").turn('peel', false);
										$("body").addClass("no-peeled");
										$("body").removeClass("peeled");
									}else{
										$("#fb5-book").turn('peel', 'br');
										$("body").removeClass("no-peeled");
										$("body").addClass("peeled");
									}
								  }
								  console.log('running....');
								  },1500);

								 },2000);
							}else{
								clearTimeout(time_function);
							}
						});

						  $("#fb5-book").bind("turning", function(event, page, view) {
							   $("body").addClass("turning");
							   $("body").removeClass("turned");
						  });
    </script>
  </body>
</html>
