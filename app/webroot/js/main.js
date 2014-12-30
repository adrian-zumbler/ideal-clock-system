
lblstatus = document.getElementById('status');

$('.Checkout-button').click(function() {
	name = $(this).text();
	id = $(this).val();
	lblstatus.innerHTML = name;
});
$('#available').click(function() {
	name = $(this).text();
	id = $(this).val();
	lblstatus.innerHTML = name;
});




