
var lblstatus = document.getElementById('status');
var url = 'http://localhost:8080/ideal-clock-system/'
var crono;
var lblClock = document.getElementById('clock');
var threadCrono;
$('.Checkout-button').click(function() {
	var tagName = $(this).text();
	var id = $(this).val();
	crono = new Chronometer();
	crono.reset();
	registerActivity(id, tagName);
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
		threadCrono = setInterval(function(){
		if(seconds > 58) {
			minutes++;
			seconds = -1
		}
		if (minutes > 58) {
			hours++;
			minutes = -1;
		}	
		seconds++;
		lblClock.innerHTML =  hours + ':' + minutes + ':' + seconds;
	},1000);
	}

	this.reset = function() {
		clearInterval(threadCrono);
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











