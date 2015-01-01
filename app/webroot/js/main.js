
lblstatus = document.getElementById('status');

$('.Checkout-button').click(function() {
	name = $(this).text();
	id = $(this).val();
	lblstatus.innerHTML = name;
	url = 'http://localhost:8080/ideal-clock-system/'
	
	$.ajax({
		url: url + 'checkouts/add',
		type: 'post',
		data: {
			'id': id
		},
		success: function() {
			alert('Cambio de status exitoso')
		},
		error: function(error) {
			alert(error.tostring)
		} 
			
		
	})
});

$('#available').click(function() {
	name = $(this).text();
	id = $(this).val();
	lblstatus.innerHTML = name;
});






