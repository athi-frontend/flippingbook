/*page view tracking*/
//$(window).load(function(){	
 
if (typeof b_book_id === "undefined") {
	var book_id=$('#book_id').val();
}else{
	var book_id=b_book_id;
}
if (typeof b_user_id === "undefined") {
	var user_id=$('#user_id').val();
}else{
	var user_id=b_user_id;
}
if (typeof b_source === "undefined") {
	var source=$('#source').val();
}else{
	var source=b_source;
}


	// var book_id=$('#book_id').val();
	// var user_id=$('#user_id').val();
	// var source=$('#source').val();	 
 	var API_URL='https://www.treatmentperspectives.com/campaigns/analytics/'
	var engagment_id="0";
	var page_no_loc=1;
	var book_type_loc='';
	 var spent_time_page=2;
	
	/*Insert page view*/
  setTimeout(function(){
 	 // insert_page_view();
  },1000);

  
   /*functions*/
   function insert_page_view(page_no,book_type,total_page){	 
  // alert('dd');
   page_event_tracking(page_no);
   page_no_loc=page_no;
   book_type_loc=book_type;
   var current_url= window.location.href; 
	$.ajax({    
	type: 'POST',
 	dataType:"json",
 	async:true,
	url:API_URL+'page_views',
 	data:{book_id:book_id,user_id:user_id,source:source,page_number:page_no,total_page:total_page,book_type:book_type,current_url:current_url},
    success:function(response){
         console.log( response ); // server response		 
		  engagment_id=response.engagement_id;
		  spent_time_page=2;
		 //update_page_time();
	} 
  });	
  /*area click*/
  
}

/*update page spent time*/

 function update_page_time(){
	
	 setInterval(function(){
	 var engagement_core=engagment_id;	 
	 spent_time_page=parseInt(spent_time_page)+10;	 
	$.ajax({    
	type: 'POST',
 	dataType:"json",
	url:API_URL+'update_page_time',
 	data:{spent_id:engagement_core,spent_time:spent_time_page},
    success:function(response){          
	} 
  });
  },10000);  
}
 /*next button*/
 $('.next-button').click(function(){
  setTimeout(function(){
   //	  insert_page_view();
  },2000);
  }); 
  /*previous*/
 $('.previous-button').click(function(){
  setTimeout(function(){
 // insert_page_view();
  },2000);
  });
  /*arrow navigation*/
  $(document).keydown(function(e){

		var previous = 37, next = 39, esc = 27;

		switch (e.keyCode) {
			case previous: 
				  setTimeout(function(){
				//  insert_page_view();
				  },2000);
			break;
			case next:
				   setTimeout(function(){
				//	  insert_page_view();
				  },2000);

			break;
			 
		}
	});
	
	function track_links(t,pno,types){	 
	if(types=='img'){
		 var link=$(t).attr('src');	
	}else{
		 var link=$(t).attr('href');	
	}
		var page_no =pno;
   		  	$.ajax({    
			type: 'POST',
			dataType:"json",
			async:true,
			url:API_URL+'update_links',
			data:{book_id:book_id,user_id:user_id,source:source,page_number:page_no,book_type:book_type_loc,clicked_link:link,types:types},
			success:function(response){
				 console.log( response ); // server response		 
				  engagment_id=response.engagement_id;
				 //update_page_time();
			} 
		  });
	}
	
	function show_box(t,pno,type=''){
		track_links(t,pno,'img');
var element=$(t);
var target='';
	if(element.attr('src')!=''){
		target=element.attr('src');
	}else{
		target="#"+element.attr('target');
	}
	if(type=="temp")
	{
		target=base_url+'assets/flippingbook/astrazeneca-b2/img/3-all.png';
	}
	//console.log(element.attr('src'));
	if(target!=''){
	$('.fancybox-target').attr('href',target);
	$('.fancybox-target').trigger('click');
	}
}
	
$(window).load(function(){
  update_page_time();  
  
});

// Internet Explorer 6-11
var isIE = /*@cc_on!@*/false || !!document.documentMode; 
if(isIE){			
	 function toggleFullScreen_new(elem) {
		 elem=document.body;
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
		 zoom_out();
		$('a[onclick="zoom_out();"]').attr('style','opacity: 0.3 !important;pointer-events: none');
		$('a.zoom-in, .fb5-zoom-original').attr('style','opacity: 0.3 !important;pointer-events: none');
    } else {
		zoom_out();
		setTimeout(function(){ 
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
		
		},200);
			$('a[onclick="zoom_out();"]').attr('style','opacity: 1 !important;pointer-events: auto');
			$('a.zoom-in, .fb5-zoom-original').attr('style','opacity: 1 !important;pointer-events: auto');
    }
}
}else{			
function toggleFullScreen_new() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }
	if($('body').hasClass('scroll-enabled-body')){
		zoom_out();
		}	
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }
if($('body').hasClass('scroll-enabled-body')){
		zoom_out();
	}	
  }  
}
}

