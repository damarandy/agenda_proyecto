(function($) {
	$("frm_login").submit(function(ev)	{
		$.ajax({
			url: "login/validate",
			type: "POST",
			data: $(this).serialize(),
			success: function (data) { 
				var json = JSON.parse(data);
			},
			error: function (xhr) { 
				if (xhr.status === 400) { 
					$("#email > input").removeClass('is-invalid');
					$("#password").removeClass('is-invalid');
					var json = JSON.parse(xhr.responseText);
					if (json.email.length != 0) { 
						$("#email > div").html(json.email);
						$("#email > input").addClass('is-invalid');
					}
					if (json.email.length != 0) { 
						$("#email > div").html(json.email);
						$("#password").addClass('is-invalid');
					}
				}
			}
		});
	});
	ev.preventDefault();
	

})(jQuery);
