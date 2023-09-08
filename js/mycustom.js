// {/* <script type="text/javascript" src="./jquery-3.6.0.min.js"></script> */}

$('.frmregister').submit(function(e){
	e.preventDefault();
	var data = $(this).serialize();
	$.ajax({
		type: "POST",
		url: "../classes/register.php",
		data: data
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			 toastr.success('Successfully added.');

					}else if(data == 2){
		toastr.warning('Email already taken');
		}else{
			 toastr.error('Failed to add');
		}
	});

});

$('.frm_login').submit(function(e){
    e.preventDefault();

    var a = $(this).serialize();


    $.ajax({
    	type: "POST",
    	data: a,
    	url: '../classes/login.php',
    	beforeSend: function(){
    		$(this).find('button').attr('disabled', true);
    	}
    })
    .done(function(data){
    	console.log(data);
    	if(data == 1){
    		toastr.success('Successfully login', 'Redirecting');
    		setTimeout(function(){
    			window.location = '../main.php';
    		},300);

    	}else{
    		toastr.error('Username and password are incorrect');
    		$(this).find('button').attr('disabled', true);
    		$('.frm_login').find('input').val('');
    	}
    });

});


$('.frm_addAppointment').submit(function(e){
	e.preventDefault();
	var formData = $(this).serialize();

	$.ajax({
		type: "POST",
		url: "classes/Add.php",
		data: formData
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success("Appointment added.");
			$('.frm_addAppointment').find('input textarea').val('');
			setTimeout(function(){
				window.location="appointment.php";
    		},500);
			
		}else if(data == 0){
			toastr.error("Failed to add Appointment");
			$('.frm_addAppointment').find('input').val('');
		}
	})
	.fail(function(data){
		console.log(data);
	});

});

$('.frm_addmedicineDosage').submit(function(e){
	e.preventDefault();
	var formData = $(this).serialize()+'&key=add_medicineDosage';

	$.ajax({
		type: "POST",
		url: "classes/Add.php",
		data: formData
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success("Medicine Dosage added.");
			$('.frm_addmedicineDosage').find('input').val('');
			setTimeout(function(){
				window.location="medicine.php";
    		},500);
		}else if(data == 0){
			toastr.error("Failed to add Appointment");
			$('.frm_addmedicineDosage').find('input').val('');
		}
	})
	.fail(function(data){
		console.log(data);
	});

});

$('.frm_addVitals').submit(function(e){
	e.preventDefault();
	var formData = $(this).serialize()+'&key=add_vitals';

	$.ajax({
		type: "POST",
		url: "classes/Add.php",
		data: formData
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success("Medicine Dosage added.");
			$('.frm_addVitals').find('input').val('');
			setTimeout(function(){
				window.location="persnol.php";
    		},500);
		}else if(data == 0){
			toastr.error("Failed to Medicine Dosage.");
			$('.frm_addVitals').find('input').val('');
		}
	})
	.fail(function(data){
		console.log(data);
	});

});

$('.frm_updateAppointment').submit(function(e){
	e.preventDefault();
	var formData = $(this).serialize();

	$.ajax({
		type: "POST",
		url: "classes/Update.php",
		data: formData
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success("Appointment Updated.");
			$('.frm_updateAppointment').find('input textarea').val('');
			setTimeout(function(){
				window.location="appointment.php";
    		},500);
		}else if(data == 0){
			toastr.error("Failed to Update Appointment");
			$('.frm_updateAppointment').find('input textarea').val('');
		}
	})
	.fail(function(data){
		console.log(data);
	});

});

$('.frm_updatemedicineDosage').submit(function(e){
	e.preventDefault();
	var formData = $(this).serialize()+'&key=update_medicine';

	$.ajax({
		type: "POST",
		url: "classes/Update.php",
		data: formData
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success("Medicine Dosage Updated.");
			$('.frm_updatemedicineDosage').find('input').val('');
			setTimeout(function(){
				window.location="medicine.php";
    		},500);
		}else if(data == 0){
			toastr.error("Failed to Update Medicine Dosage.");
			$('.frm_updatemedicineDosage').find('input').val('');
		}
	})
	.fail(function(data){
		console.log(data);
	});

});

$('.frm_updateVitals').submit(function(e){
	e.preventDefault();
	var formData = $(this).serialize()+'&key=update_vitals';

	$.ajax({
		type: "POST",
		url: "classes/Update.php",
		data: formData
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success("Health vitals Updated.");
			$('.frm_updateVitals').find('input').val('');
			setTimeout(function(){
				window.location="persnol.php";
    		},500);
		}else if(data == 0){
			toastr.error("Failed to Update Health Vitals.");
			$('.frm_updateVitals').find('input').val('');
		}
	})
	.fail(function(data){
		console.log(data);
	});

});

function Delete(id,key){

	swal({
		title: "Are you sure?",
		text: "This record and it's details will be permanantly deleted!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	  })
	  .then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: "classes/Delete.php",
				type: "POST",
				data: {
					"delete_id":id,
					"key":key			
				},
				cache: false,
			})
			.done(function(data){
				console.log(data);
				if(data == 1){
					  swal("Your record has been deleted!", {
						icon: "success",
					  });
					  switch (key) {
						case 'delete_vitals':
							loadVitalsData();
							break;
						case 'delete_appointment':
							loadAppointmentData();
							break;
						case 'delete_medicine':
							loadMedicineData();
							break;
					}  
				}else if(data == 0){
					toastr.error("Failed to Delete.");
				}
			})
			.fail(function(data){
				console.log(data);
			});
		} else {
		  swal("Your record is safe!");
		}
	  });
	}


	$('#appsort').change(function(){
		var sortby = $(this).val();
		  $.ajax({
			  url: "classes/viewdata.php",
			  type: "POST",
			  data: {"key":"sortAppointment",
			"sortby":sortby},
			  cache: false,
			  success: function(data){
			  
				  $('#appointment_tableb').html(data); 
			  }
		  });
	  });

	  $('#Medicinesort').change(function(){
		var sortby = $(this).val();
		  $.ajax({
			  url: "classes/viewdata.php",
			  type: "POST",
			  data: {"key":"sortMedicine",
			"sortby":sortby},
			  cache: false,
			  success: function(data){
			  
				  $('#Medicine_tableb').html(data); 
			  }
		  });
	  });