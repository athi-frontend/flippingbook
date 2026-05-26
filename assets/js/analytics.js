/*page view tracking*/
//$(window).load(function(){	
	var book_id=$('#book_id').val();
	var user_id=$('#user_id').val();
	var source=$('#source').val();	 
 	var API_URL='https://staging.treatmentperspectives.com/campaigns/analytics/'
	var engagment_id="0";
	var page_no_loc=1;
	var book_type_loc='';
	
	/*Insert page view*/
  setTimeout(function(){
 	 // insert_page_view();
  },1000);

  
   /*functions*/
   function insert_page_view(page_no,book_type,total_page){	 
  // alert('dd');
   page_no_loc=page_no;
   book_type_loc=book_type;
	$.ajax({    
	type: 'POST',
 	dataType:"json",
 	async:false,
	url:API_URL+'page_views',
 	data:{book_id:book_id,user_id:user_id,source:source,page_number:page_no,total_page:total_page,book_type:book_type},
    success:function(response){
         console.log( response ); // server response		 
		  engagment_id=response.engagement_id;
		 //update_page_time();
	} 
  });	
  /*area click*/
  
}    /*functions*/
   function insert_book_engagement(page_no,url_book){	 
  // alert('dd');
   page_no_loc=page_no;
 	$.ajax({    
	type: 'POST', 
 	async:false,
	url:API_URL+'book_engagement',
 	data:{book_id:book_id,user_id:user_id,source:source,page_number:page_no,page_url:url_book},
    success:function(response){
        // alert(response);
		 spend_id= response;
	} 
  });	
  /*area click*/
  
}  

/*update page spent time*/

 function update_page_time(){
	 setInterval(function(){
	 var engagement_core=engagment_id;	 
	$.ajax({    
	type: 'POST',
 	dataType:"json",
	url:API_URL+'update_page_time',
 	data:{spent_id:engagement_core},
    success:function(response){          
	} 
  });
  },15000);  
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
			async:false,
			url:API_URL+'update_links',
			data:{book_id:book_id,user_id:user_id,source:source,page_number:page_no,book_type:book_type_loc,clicked_link:link,types:types},
			success:function(response){
				 console.log( response ); // server response		 
				  engagment_id=response.engagement_id;
				 //update_page_time();
			} 
		  });
	}
	
	function show_box(t,pno,type){
		track_links(t,pno,'img');
var element=$(t);
var target='';
	if(element.attr('src')!=''){
		target=element.attr('src');
		target=target.replace('/small','');		 
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


