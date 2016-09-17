//Open search box
$('#btn-search').click(function(e){
	$('#search-box').slideToggle();
});
$('.btn-close').click(function(e){
	$('#search-box').slideUp();
});

$(function(){
	$('#inputLookup').keyup(function(e){
		var fLookup = $('#fLookup');
		var data = $(this).val();
		//alert(data);
		var _token = fLookup.find('input[name="_token"]').val();
		var url = 'http://localhost/QLKTX/getResults';

		if(data.length >= 10){
			$.get(url, {'_token': _token, 'data': data }, function(res){
				$('#resultLookup').html(res);
			});
		}
	});
});
