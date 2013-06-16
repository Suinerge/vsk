$(document).ready(function(){

	$('#basicuse').jflickrfeed({
		limit: 20,
		qstrings: {
			id: '96545413@N06',
			tags: 'jbgymnasiet'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
	
	$('#cbox').jflickrfeed({
		limit: 20,
		qstrings: {
			id: '96545413@N06',
			tags: 'jbgymnasiet'
		},
		itemTemplate: '<li>'+
						'<a rel="colorbox" href="{{image_z}}" title="{{description}}">' +
							'<img src="{{image_q}}" alt="{{title}}" />' +
						'</a>' +
					  '</li>'
	}, function(data) {
		$('#cbox a').colorbox();
	});
	
	
	$('#cbox2').jflickrfeed({
		limit: 20,
		qstrings: {
			id: '96545413@N06',
			tags: 'bojmasterskapen'
		},
		itemTemplate: '<li>'+
						'<a rel="colorbox" href="{{image_z}}" title="{{description}}">' +
							'<img src="{{image_q}}" alt="{{title}}" />' +
						'</a>' +
					  '</li>'
	}, function(data) {
		$('#cbox2 a').colorbox();
	});
	
	$('#cycle').jflickrfeed({
		limit: 14,
		qstrings: {
			id: '96545413@N06'
		},
		itemTemplate: '<li><img src="{{image}}" alt="{{title}}" /><div>{{title}}</div></li>'
	}, function(data) {
		$('#cycle div').hide();
		$('#cycle').cycle({
			timeout: 5000
		});
		$('#cycle li').hover(function(){
			$(this).children('div').show();
		},function(){
			$(this).children('div').hide();
		});
	});
	
	$('#nocallback').jflickrfeed({
		limit: 4,
		qstrings: {
			id: '96545413@N06'
		},
		useTemplate: false,
		itemCallback: function(item){
			$(this).append("<li><img src='../../../demo/Flickr-jquery/" + item.image_m + "' alt=''/></li>");
		}
	});

});