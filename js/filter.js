$('#clear').click(function() {
	$('#filter-form input[type=checkbox]').removeAttr('checked');
	return true;
});

$('#filter').click(function() {
		var list = null, res = '';
	    list = $('#filter-form input:checkbox:checked');
		list.each( function(ind) {
		    res += $(this).val();
			if (ind < list.length - 1) res +=',';
		});
		$.ajax({
	        type: 'POST',
	        url: 'http://aeromax2014.com/filter',
	        data: { 
	            filters: res
	        },
	        success: function(html){
	            $('div.entry-content').html(html);
	        }
	    });

	    return false;

});

