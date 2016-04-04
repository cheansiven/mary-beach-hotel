var toDo = $('#contentBottom');

function keepHomeTabOpen()
{
	var url = window.location.href
	url = url.split('#')[1]


	if(url == "open") {
		toDo.show();
	} else {
		toDo.hide();
	}
}

$( document ).ready(function() {

	$('#buttonToggle, #startNow').click(function(e) {
		var winWidth = $(window).width();
		var itemClicked = $(this);

		if(winWidth > 1024) {
			toDo.slideToggle(750);
		} else  {
			return false;
		}
	});

	$('#mailCoupon').submit(function() {
		var frm = $(this);
		var email = frm.find('input');
		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

		if (testEmail.test(email.val())) {
			$.ajax({
		        url: base_url+"main/mailCoupon",
				data: frm.serialize(),
		        type: "post",
		        success: function(result) //we're calling the response json array 'cities'
		        {
		    		$('#myModal').modal('show')
		    		$('#text-success').html(result)
		    		setTimeout(function() { $('#myModal').modal('hide').slideUp('slow') }, 2000);
		        }, //end success
		        error: function(jqXHR, textStatus, errorThrown) {
		            console.log(errorThrown);
		        }
		    });
		} else {
			email.attr('placeholder', 'required email address')
		}
		return false;
	})
	if ( $(window).width() > 1200) {
		keepHomeTabOpen()
		
	}
});