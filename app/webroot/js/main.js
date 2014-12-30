
lblstatus = document.getElementById('status');

$('.Checkout-button').click(function() {
	name = this.value;
	lblstatus.innerHTML = name;
});




