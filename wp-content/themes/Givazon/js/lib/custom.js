/********Learn-More functions*************/
jQuery(document).on('click','#load-more-news',function(){
    careerAjaxSend = true;
    var val = $('#child-id').val();
	var categoryId = $('#cat_id').val();
	var categoryName = $('#cat_name').val();
	var hidden = $('#blogs-hidden').val();
	var postIdArray = [];
	var cntPost = $('#pst_count').val();
  console.log('totpost' + cntPost);
	// console.log('here'+postIdArray);
	$(this).parents('.news').find('.news-blk').each(function() {
    	postIdArray.push($(this).attr('data-id'));
    	//console.log(postIdArray.push($(this).attr('data-id')));
    });
    	//console.log(postIdArray);
	$.ajax({
        url : tmpl_url+'/ajax/news_load.php',
		method: 'post',
        data: {postIdArray:postIdArray, cntPost:cntPost},
	    success: function(data){
	   		$('#load-more-news').before(data);
        console.log('length' + postIdArray.length);
           $totItems = parseInt(postIdArray.length)+3
           console.log('item' +  $totItems);
           /* console.log(parseInt(postIdArray.length)+3);*/
           if(cntPost>=$totItems){
            console.log(cntPost +">=" +$totItems)
               $('#load-more-news').show();   
           }
           else{
               $('#load-more-news').hide();
           }
        }
    });
});