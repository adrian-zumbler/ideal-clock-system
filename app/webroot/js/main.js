
var lblstatus = document.getElementById('status');
var url = 'http://localhost:8080/ideal-clock-system/'
var crono = new Chronometer();
var lblClock = document.getElementById('clock');
$('.Checkout-button').click(function() {
	var tagName = $(this).text();
	var id = $(this).val();
	registerActivity(id, name);
	
	

});

$('#available').click(function() {
	name = $(this).text();
	id = $(this).val();
	lblstatus.innerHTML = name;
});

function Chronometer() {
	hours = 0,
	minutes = 0,
	seconds = 0,

	this.begin = function() {
		setInterval(function(){
		minutes += 1;	
		lblClock.innerHTML =  minutes;
	},1000);
	}

}

function registerActivity(id, tagName) {
	if(id != null) {
		$.ajax({
			url: url + 'checkouts/add',
			type: 'post',
			data: {
				'id': id
			},
			success: function() {
				lblstatus.innerHTML = tagName;
				crono.begin();
			},
			error: function(error) {
				alert(error.tostring)
			} 
			
		});
	}
}











