<!doctype html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <!-- viewport -->
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <!-- title -->
    <title>Keytruda</title>
    <!-- add css and js for flipbook -->
    <link type="text/css" rel="stylesheet" href="book-assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="book-assets/css/style1.css">
    <link type="text/css" rel="stylesheet" href="book-assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="book-assets/css/book-3.css">
    <link type="text/css" rel="stylesheet" href="book-assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play:400,700">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="book-assets/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="book-assets/css/side-bar.css">
    <link type="text/css" rel="stylesheet" href="book-assets/css/nova-style.css">
    <script src="book-assets/js/jQuery-3.6.3.js"></script>
    <script>
        var jQuery3 = $.noConflict(true); 

        function set_cursor() {
            var is_hovered = '';
            $('div').mousedown(function() {
                is_hovered = '1';
                console.log('clicked');
            });
            $('div').mouseup(function() {
                is_hovered = '';
                console.log('released');
            });
            $('.hover-img').mouseenter(function() {
                if (is_hovered == "") {

                    $(this).addClass('img-pop');
                }
            });
            $('.hover-img').mouseout(function() {
                $(this).removeClass('img-pop');
            });
        }
    </script>
    <script src="book-assets/js/jquery.panzoom.js"></script>
    <script src="book-assets/js/jQuery-3.6.3.js"></script>
    <script src="book-assets/js/jQuery-Migrate-3.4.0.js"></script>
    <script src="book-assets/js/turn.js"></script>
    <script src="book-assets/js/jquery.fullscreen.js"></script>
    <script src="book-assets/js/jquery.address-1.6.min.js"></script>
    <script src="book-assets/js/wait.js"></script>
    <script src="book-assets/js/onload.js"></script>
    <script type="text/javascript" src="book-assets/js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="book-assets/js/jquery.fancybox.css?v=2.1.5" media="screen" />
    <style>
        #fb5-book {
            -webkit-transform: none !important;
            /* Safari and Chrome */
            -moz-transform: none !important;
            /* Firefox */
            -ms-transform: none !important;
            /* IE 9 */
            -o-transform: none !important;
            /* Opera */
            transform: none !important;
        }

        .pop-imgs {
            cursor: pointer;
        }

        .pop-imgs:hover {
            opacity: 0.6;
            cursor: pointer;
        }

        .last-page.fb5-cont-page-book {
            background: none !important;
            background-image: none !important;
        }
        .outer {
            width: 95%;
        }
    </style>
    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /*loop through a collection of all HTML elements:*/
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("w3-include-html");
                if (file) {
                    /*make an HTTP request using the attribute value as the file name:*/
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4) {
                            if (this.status == 200) {
                                elmnt.innerHTML = this.responseText;
                            }
                            if (this.status == 404) {
                                elmnt.innerHTML = "Page not found.";
                            }
                            /*remove the attribute, and call this function once more:*/
                            elmnt.removeAttribute("w3-include-html");
                            includeHTML();
                        }
                    }
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    /*exit the function:*/
                    return;
                }
            }
        };
    </script>
    <script>
        var spend_id = ' ';
        var default_spend_id = ' ';

        // Internet Explorer 6-11
        var isIE = /*@cc_on!@*/ false || !!document.documentMode;
        if (isIE) {
            function toggleFullScreen(elem) {
                elem = document.body;
                // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
                    if (elem.requestFullScreen) {
                        elem.requestFullScreen();
                    } else if (elem.mozRequestFullScreen) {
                        elem.mozRequestFullScreen();
                    } else if (elem.webkitRequestFullScreen) {
                        elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                    } else if (elem.msRequestFullscreen) {
                        elem.msRequestFullscreen();
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    }
                }
            }
        } else {
            function toggleFullScreen() {
                if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                    (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                    if (document.documentElement.requestFullScreen) {
                        document.documentElement.requestFullScreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullScreen) {
                        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                }
            }
        }
    </script>
</head>

<body class="scroll-body">
    <div id="pop-content"></div>
    <a class="fancybox-target" data-width="80%" data-height="80%" href=''></a>
    <a class="home-page" href="">Home</a>
    <input type="hidden" id='book_id' value="" />
    <input type="hidden" id="user_id" value="" />
    <input type="hidden" id="source" value="" />
    <script type="text/javascript">
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
        },
        beforeShow: function() {
            this.width = $(this.element).data("width");
            this.height = $(this.element).data("height");
        }
    });

        function show_text_box(t) {
            $('.fancybox-target').attr('href', t);
            $('.fancybox-target').trigger('click');

        }

        function show_div_pop(t) {
            var element = $(t);
            var content = $(t).html();
            var target = "#pop-content";
            $('#pop-content').html(content);
            //console.log(element.attr('src'));
            $('.fancybox-target').attr('href', target);
            $('.fancybox-target').trigger('click');
        }
    </script>
    <!-- DIV YOUR WEBSITE -->
    <div class="outer">
        <!-- BEGIN FLIPBOOK STRUCTURE -->
        <div id="fb5-ajax">
            <!-- BEGIN HTML BOOK -->
            <div data-current="book5" class="fb5" id="fb5">
                <!-- PRELOADER -->
                <div class="fb5-preloader">
                    <div id="wBall_1" class="wBall">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div id="wBall_2" class="wBall">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div id="wBall_3" class="wBall">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div id="wBall_4" class="wBall">
                        <div class="wInnerBall">
                        </div>
                    </div>
                    <div id="wBall_5" class="wBall">
                        <div class="wInnerBall">
                        </div>
                    </div>
                </div>
                <!-- BACKGROUND FOR BOOK -->
                <div class="fb5-bcg-book"></div>
                <!-- BEGIN CONTAINER BOOK -->
                <div id="fb5-container-book" class="full-cover">
                    <!-- BEGIN deep linking -->
                    <section id="fb5-deeplinking">
                        <ul>
                            <li data-address="page1" data-page="1"></li>
                            <li data-address="page2-page3" data-page="2"></li>
                            <li data-address="page2-page3" data-page="3"></li>
                            <li data-address="page4-page5" data-page="4"></li>
                            <li data-address="page4-page5" data-page="5"></li>
                            <li data-address="page6-page7" data-page="6"></li>
                            <li data-address="page6-page7" data-page="7"></li>
                            <li data-address="page8-page9" data-page="8"></li>
                            <li data-address="page8-page9" data-page="9"></li>
                            <li data-address="page10" data-page="10"></li>                            
                        </ul>
                    </section>
                    <!-- END deep linking -->
                    <!-- BEGIN BOOK -->
                    <div id="fb5-book">
                        <!-- BEGIN PAGE 1-->
                        <div data-background-image="" class="odd cover-page fb5-double fb5-first new-index-page">
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
                        <!-- BEGIN PAGE 2 -->
                        <div data-background-image="" class="even fb5-double fb5-first sec-page-sp">
                            <!-- begin container page book -->
                            <div class="fb5-cont-page-book">
                                <div class="page-cover-az second-page-cover second-page-edt">
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
                        <!-- BEGIN PAGE 3 -->
                        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
                            <!-- container page book -->
                            <div class="fb5-cont-page-book">
                                <div class="page-cover-az third-page-cover page4-bg">
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
						<!-- BEGIN PAGE 6 -->
                        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
                            <!-- container page book -->
                            <div class="fb5-cont-page-book">
                                <div class="page-cover-az fifth-page-cover">
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
                                            </div>>
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
                                                <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/3EUNGC9gPnjmk1AuoViKY7wBcfs2ObrFWaqlyRD6.svg" alt="KEYTRUDA Logo" />
                                            </div>
                                            <div class="page_9_7">
                                                <img src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/wNyEGvSdqCYa5P1IWicB0oOA8eJ3h4rMbtFVHTDg.svg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end container page book -->
                        </div>
                        <!-- END PAGE 9 -->
						<!-- BEGIN PAGE 10 -->
                        <div data-background-image="" class="odd fb5-double fb5-second third-page-sp nv-border">
                            <!-- container page book -->
                            <div class="fb5-cont-page-book">
                                <div class="page-cover-az fifth-page-cover ">
                                    <div class="flipbook_box ">
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
                            <!-- end container page book -->
                        </div>
                        <!-- END PAGE 10 -->
                    </div>
                    <!-- END BOOK -->
                    <!-- arrows -->
                    <a class="fb5-nav-arrow prev"></a>
                    <a class="fb5-nav-arrow next"></a>
                </div>
                <!-- END CONTAINER BOOK -->
                <!--New Side Bar Start -->
                <div class="side-tool-bar">
                    <ul>
                        <li>
                            <a href="#"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/CBjEMGixtsfl2dLpkyOQ7RVNcXwPZ6hnqAW9SmTo.png" /></a>
                        </li>
                        <li>
                            <a class="previous-side"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/HIxg8r7YNdlKW9DFOwiJ4tEAsfkVzLa0Tu1Rjyvh.png" /></a>
                        </li>
                        <li>
                            <a class="next-side"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/u2iG0Zoe9Ky3HABkl6fS5pOgDstT1XL4NnrabMRv.png" /></a>
                        </li>
                        <li>
                            <a onclick="zoom_out();"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/ev8poICE2aht59KVb1jyMX74NAP3GL6kgi0udQcJ.png" /></a>
                        </li>
                        <li>
                            <a class="zoom-in" onclick="zoom_in(this)"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/yuizdgZU0sQ9SRajFhO4bHMXL73BcmKWlfxJnNYD.png" /></a>
                        </li>
                        <li>
                            <a class="all-pages"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/hc8NPalFKRdVrAiuxgI0yMf2p1bHSXUYBwok4eEZ.png" /></a>
                        </li>
                        <li class="volume_up">
                            <a title="Volume Down"> <img onclick="volume_down()" src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/0T4tQ9zNoqugWwfVM1PGL3FmvIOJeDblEys5KC8k.png" /></a>
                        </li>
                        <li class="volume_down" style="display:none">
                            <a title="Volume Up"> <img onclick="volume_up()" src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/pmr4F7NEbixLVI0XPgKzu6fZvT9jJcOwd3SHAeCW.png" /></a>
                        </li>
                        <li>
                            <a href="book-assets/pages/GUUS-221343_mUC_PI_CVA_FM01_r16.pdf" target="_blank"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/BaETqNYDhC1Rk7PjoW4HmMViUKntZ6XwFAl59LOG.png" /></a>
                        </li>
                        <li>
                            <a onclick="toggleFullScreen_new()"> <img src="https://treatmentperspectivescdn.azureedge.net/c339-p1-flippingbook/LsXpvaM6CYOUE8jK2y15fg4PFTzA3oVNHc7mRDWh.png" /></a>
                        </li>
                    </ul>
                </div>
                <!--New Side Bar End -->
                <!-- BEGIN FOOTER -->
                <div id="fb5-footer">
                    <div class="fb5-bcg-tools"></div>
                    <div class="fb5-menu" id="fb5-center">
                        <ul>
                            <!-- prev -->
                            <li>
                                <a title="Previous" class="fb5-nav-arrow prev next-icon fa fa-chevron-left flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                            </li>
                            <!-- next -->
                            <li>
                                <a title="Next" class="fb5-nav-arrow next pre-icon fa fa-chevron-right flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                            </li>
                            <!-- icon_zoom_in -->
                            <li>
                                <a title="Zoom In" onclick='zoom_in(this)' class="fb5-zoom-original  fa-plus flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                            </li>
                            <!-- icon_zoom_out -->
                            <li>
                                <a title="Zoom Out" style="opacity: 0.3 !important;pointer-events: none" onclick='zoom_out()' class="fb5-zoom-auto fa-minus flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                            </li>
                            <!-- icon_allpages -->
                            <li>
                                <a title="Pages" class="fb5-show-all fa-th-large flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                            </li>
                            <!-- volume Up and down -->
                            <li>
                                <a title="Volume" style='display:none' onclick='volume_up()' class="volume_down fa-th-large fa-volume-off flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                                <a title="Volume Up" onclick='volume_down();' class="fa-th-large volume_up fa-volume-up flipbook-menu-btn skin-color skin-color-bg fa flipbook-bg-light flipbook-color-light"></a>
                            </li>
                            <li>
                                <a title="Toggle Fullscreen" class="fa-expand flipbook-icon-general flipbook-menu-btn skin-color fa btnExpand flipbook-bg-light flipbook-color-light" onclick="toggleFullScreen()"></a>
                            </li>
                            <li>
                                <a title="Download PDF" class="fb5-download fa-download flipbook-icon-general flipbook-menu-btn skin-color skin-color-bg fa btnExpand flipbook-bg-light flipbook-color-light" href="US_DKd_Interactive_CVA_demo_R24.pdf" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END FOOTER -->

                <!-- BEGIN ALL PAGES -->
                <div id="fb5-all-pages" class="fb5-overlay">
                    <section class="fb5-container-pages">
                        <div id="fb5-menu-holder">
                            <ul id="fb5-slider">
                                <li class="1">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/0IVeuhg9R1pLQAUxCcTXkiK8G7Ja6tr2wYHBWsmo.png">
                                </li>
                                <li class="2">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/2LdcXMVKg8BTF9NaSsQDxi3Okp5JR4qZzCnuYmvt.jpg">
                                </li>
                                <li class="3">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/XfqaB9x6uKVzhEs8FU01OHnwct3GymZijP5QodA2.png">
                                </li>
                                <li class="4">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/HNs8kFfnicb3T1p7eq0VCmZWuMyBwjot6lxrzXJL.png">
                                </li>
                                <li class="5">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/ZEUsd7jBIRlXHxuK8h1SNeOiYw30DmWrq2kczvn6.jpg">
                                </li>
                                <li class="6">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/qxTaWiGSluLz0YbgI5U4OXAsjkMdQRJV2EyNhPrf.jpg">
                                </li>
                                <li class="7">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/zlhgCmWjG9xyFXnDAfJuZVQbr6854eM3i1BUH2Pp.jpg">
                                </li>
                                <li class="8">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/yRbTGnYPIFZNAQjCesSKWBOm5241HVqip0a9rkLE.jpg">
                                </li>
                                <li class="9">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/q074WuQC6UFP8RjzTxi1X5yZrcfHnBJdDoVlSpN9.jpg">
                                </li>
                                <li class="10">
                                    <img alt="" data-src="https://treatmentperspectivescdn.azureedge.net/c348-p1-flippingbook/tlhwKRgMALjSsuxC6GIfrzZbvq4EFPOe8mpyViDd.png">
                                </li>
                                <li class="21">
                                    <img alt="" data-src="https://treatmentperspectivescdnprod.azureedge.net/c245-p1-flippingbook/cHjtnUyhsoSAvdRXbFe9BVgpkGIwzNM1CYx0PaK22.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <!-- END ALL PAGES -->
            </div>
            <!-- END HTML BOOK -->
            <!-- CONFIGURATION FLIPBOOK -->
            <script>
                jQuery('#fb5').data('config', {
                    "page_width": "1575",
                    "page_height": "1650",
                    "email_form": "office@somedomain.com",
                    "zoom_double_click": "1",
                    "zoom_step": "0.06",
                    "double_click_enabled": "false",
                    "tooltip_visible": "true",
                    "toolbar_visible": "true",
                    "gotopage_width": "30",
                    "deeplinking_enabled": "true",
                    "rtl": "false",
                    'full_area': 'false',
                    'lazy_loading_thumbs': 'true',
                    'lazy_loading_pages': 'false'
                });
                var win_height = $(window).height();
                var win_width = $(window).width();
                if ((win_height <= 1024 && win_width == 768) || (win_height <= 768 && win_width == 1024)) {
                    jQuery3('.full-cover').panzoom({
                        $zoomIn: $(".zoom-in"),
                        duration: 700,
                        increment: 1.2

                    });
                } else {

                    jQuery3('.full-cover').panzoom({
                        $zoomIn: $(".zoom-in"),
                        duration: 700,
                        increment: 1.3,
                        panOnlyWhenZoomed: true,
                        disableXAxis: true,
                        disableYAxis: true,

                    });
                }
                jQuery3('.full-cover').panzoom("disable");
                var previous_height = '';

                function zoom_in_old() {

                    jQuery3('.full-cover').panzoom("enable");
                    jQuery3('.full-cover').panzoom("zoom");
                    $('.outer').addClass('full-width-outer');
                    if ($("#fb5-book").turn('page') == 8) {
                        $("#fb5-container-book").addClass("full-last-page");
                    }
                    if ($("#fb5-book").turn('page') == 1) {
                        $("#fb5-container-book").addClass("full-first-page");
                    }
                }

                function zoom_out_old() {
                    if ($("#fb5-book").turn('page') == 8) {
                        $("#fb5-container-book").removeClass("full-last-page");
                    }
                    if ($("#fb5-book").turn('page') == 1) {
                        $("#fb5-container-book").removeClass("full-first-page");
                    }
                    jQuery3('.full-cover').panzoom("reset");
                    $('.outer').removeClass('full-width-outer');
                    setTimeout(function() {
                        jQuery3('.full-cover').panzoom("disable");
                    }, 200);

                }

                function zoom_in(t) {
                    $('body').removeClass('scroll-body');
                    $('#fb5-all-pages').removeClass('active');
                    $('body').addClass('scroll-enabled-body');
                    $(t).attr('style', 'opacity: 0.3 !important;pointer-events: none');
                    $('.fb5-zoom-auto').attr('style', 'opacity: 1 !important;pointer-events: auto');
                    $('body').attr('style', 'overflow:scroll !important');

                    $('#fb5').css('overflow', 'scroll');
                    $('.scroll-enabled-body').attr('style', 'overflow-x:scroll');
                    $('.scroll-enabled-body').attr('style', '-webkit-overflow-scrolling:touch');
                    $('#fb5-container-book').removeClass('default-books');
                    $('#fb5-container-book').addClass('full-zoom-in');

                    jQuery3('.full-cover').panzoom("enable");
                    jQuery3('.full-cover').panzoom("zoom");
                    $('.outer').addClass('full-width-outer');
                    setTimeout(function() {
                        var myheight = $(".full-cover")[0].getBoundingClientRect().height;
                        var mywidth = $(".full-cover")[0].getBoundingClientRect().width;
                        previous_height = $('#fb5').height();
                        $('#fb5').css('height', myheight + 500 + 'px');
                        $('#fb5').css('width', mywidth + 660 + 'px');
                        $('.scroll-enabled-body').css('height', myheight + 500 + 'px');
                        $('.scroll-enabled-body').css('width', mywidth + 660 + 'px');
                    }, 710);

                }

                function zoom_out() {
                    $('body').removeClass('scroll-enabled-body');
                    $('#fb5-all-pages').removeClass('active');
                    $('#fb5').css('height', previous_height + 'px');
                    document.body.scrollTop = 0; // For Chrome, Safari and Opera
                    document.documentElement.scrollTop = 0; // For IE and Firefox
                    //23.7%
                    $('.fb5-zoom-original').attr('style', 'opacity: 1 !important;pointer-events: auto');
                    $('.zoom-in').attr('style', 'pointer-events: auto');

                    $('.fb5-zoom-auto').attr('style', 'opacity: 0.3 !important;pointer-events: none');
                    $('body').addClass('scroll-body');
                    $('body').attr('style', 'overflow:hidden !important');
                    $('#fb5-container-book').removeClass('full-zoom-in');
                    $('#fb5-container-book').addClass('default-books');

                    $('.outer').removeClass('full-width-outer');
                    window.scrollTo(0, 0);

                    jQuery3('.full-cover').panzoom("reset");
                    jQuery3('.full-cover').panzoom("disable");
                    setTimeout(function() {
                        $('#fb5').css('width', 'auto');
                    }, 200);

                }
                var limit = "";
                var base_url = '';
                var spent_time = 0;
                var play_last_time = 0;
                var played_time = 0;
                setInterval(function() {
                    spent_time = parseInt(spent_time) + 10;

                    if (played_time < play_last_time) {
                        play_last_time = play_last_time;
                    } else {
                        play_last_time = played_time;
                    }

                    if (spent_time < played_time) {
                        spent_time = parseInt(play_last_time) + parseInt(spent_time);
                    }
                    if (limit == "") {
                        $.ajax({
                            url: base_url + "campaigns/update_spent_time",
                            type: "post",
                            data: {
                                spend_id: spend_id,
                                played_time: 0,
                                spent_time: spent_time
                            },
                            success: function(data) {
                                if (parseInt($.trim(data)) >= 6000) {
                                    limit = "reached";
                                }
                            }
                        });
                    }
                }, 10000);

                // Internet Explorer 6-11
                var isIE = /*@cc_on!@*/ false || !!document.documentMode;
                // Edge 20+
                var isEdge = !isIE && !!window.StyleMedia;
                if (isIE) {
                    $('head').append('<link rel="stylesheet" href="book-assets/css/ie.css" type="text/css" />');
                } else if (isEdge) {
                    $('head').append('<link rel="stylesheet" href="book-assets/css/edge.css" type="text/css" />');
                }
            </script>
            <script type="text/javascript" src="book-assets/js/analytics.js"></script>
            <!--<script src="book-assets/book-assets/js/images.js"></script>-->
        </div>
        <!-- END FLIPBOOK STRUCTURE -->
    </div>
    <!-- END DIV YOUR WEBSITE -->
    <input type='hidden' name='current_page_no' id='current_page_no' class='current_page_no' value='' />
    <input type='hidden' name='current_page_spent_time' id='current_page_spent_time' class='current_page_spent_time' value='' />
    <script>
    function page_event_tracking(page_no){
        $('#current_page_no').val(page_no);
          $('#current_page_spent_time').val('0');
          }
    </script>
    <script>
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
