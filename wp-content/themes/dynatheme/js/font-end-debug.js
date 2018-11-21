;(function($) {
	'use strict';

	var loader = $('<div class="etq-load"><div class="loader">');

	$('.slessons').on('click', '.show-more', function(){
	    $(this).parent().addClass('expanded');
	});

	$('.lrating').on('click', 'input', function(){
	    var rating = $(this).val(),
	        form   = $(this).closest('.rating').find('.lesson-review');
	    if ( rating < 5 ) form.show();
	    else form.hide();
	});

	$('.lesson-discussion').on('click', '.reply', function() {
		var form = '<form><input type="text">',
				img = $(this).closest('.media').find('.image').html(),
				nonce = $(this).closest('.lesson-discussion').data('nonce');
		$(this).closest('.media-content').append( _replay_form( $(this), img, nonce ) );
	});

	$('.lesson-discussion').on('submit', '.les-dis', function(e) {
		e.preventDefault();
		var dis = $(this),
				formdata = dis.serializeArray().reduce(function(m, o) { m[o.name] = o.value; return m; }, {});
		dis.closest('.media-content').prepend( loader );
		$.ajax({
      type: 'POST',
      url: ajaxurl ,
      data: formdata,
      success: function(d) {      	
        loader.remove();
        if ( !d.posted ) {
        	return false;
        }
      	if ( dis.hasClass('main-res') ) {
      		dis.find('textarea').val('');
      		$('.dis-content').prepend( append_comment(d, true) );
      	} else {
      		dis.closest('.media').parent().append( append_comment( d ) );
      		dis.closest('.media').remove();
      	}
      	console.log( d );
      },
      error: function(errorThrown) {
        loader.remove();
        console.log(errorThrown);
      },
    });
	});

	$('.dis-head').on('click', '.dropdown-trigger span', function() {
		$(this).closest('.dropdown').toggleClass('is-active');
	});

	$('.dis-head').on('click', '.dropdown-item a', function(e) {
		e.preventDefault();
		var dropdown = $(this).closest('.dropdown'),
				text = $(this).text();
		dropdown.removeClass('is-active');
		dropdown.find('.dropdown-trigger span').html( text );
	});

	$('.lesson-discussion').on('click', 'a.like', function(e) {
		e.preventDefault();
		var dis 			= $(this),
				lesson_id = dis.closest('.media-content').data('id'),
				nonce			= dis.closest('.lesson-discussion').data('nonce');
		$.ajax({
      type: 'POST',
      url: ajaxurl ,
      data: {'action': 'lesson_like', 'nonce': nonce, 'id': lesson_id },
      success: function(d) {
      	if ( d.stat == 'like' ) dis.text('Unlike (' + d.count +')');
      	else dis.text('Like (' + d.count +')');
      	console.log( d );
      },
      error: function(errorThrown) {
        console.log(errorThrown);
      },
    });
	});

	function _replay_form( data, img = '', nonce ) {
		var lesson = data.data('lesson'),
				parent = data.data('comment');
		return '<article class="media">'+
						  '<figure class="media-left">'+
						    '<p class="image is-48x48">'+ img +'</p>'+
						  '</figure>'+
						  '<div class="media-content">'+
						    '<form class="les-dis">'+
						      '<div class="field">'+
						        '<p class="control">'+
						          '<textarea name="comment" class="textarea" placeholder="Add a comment..." required></textarea>'+
						        '</p>'+
						      '</div>'+
						      '<div class="field submit">'+
						        '<p class="control"> <button class="button lbtn">Post</button></p>'+
						        '<input type="hidden" name="lesson_id" value="'+ lesson +'">'+
						        '<input type="hidden" name="parent_id" value="'+ parent +'">'+
						        '<input type="hidden" name="action" value="lesson_comment">'+
						        '<input type="hidden" name="nonce" value="'+ nonce +'">'+
						      '</div>'+
						    '</form>'+
						  '</div>'+
						'</article>';
	}

	function append_comment( d, r = false ) {
		var rep = ( r ) ? '<a class="reply" data-lesson="'+d.data.comment_post_ID+'" data-comment="'+d.id+'">Reply</a> · ': '',
				cl = ( r ) ? 'is-64x64' : 'is-48x48';
		return '<article class="media">'+
						  '<figure class="media-left">'+
						    '<p class="image '+cl+'">'+
						      d.ava +
						    '</p>'+
						  '</figure>'+
						  '<div class="media-content" data-id="'+ d.id +'">'+
						  	'<div class="content">'+
						  		'<p>'+
						        '<strong>'+ d.data.comment_author +'</strong>'+
						        '<br>'+
						        d.data.comment_content +
						        '<br>'+
						        '<small>'+ rep + d.time +' · <a class="like">Like</a></small>'+
						      '</p>'+
						    '</div>'+
						  '</div>'+
						'</article>'

	}

})(jQuery);