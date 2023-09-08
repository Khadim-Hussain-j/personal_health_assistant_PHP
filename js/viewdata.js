function loadAppointmentData()
{
    $.ajax({
		url: "classes/viewdata.php",
		type: "POST",
        data: {"key":"loadAppointment"},
		cache: false,
		success: function(data){
		
			$('#appointment_tableb').html(data); 
		}
	});
}

function loadMedicineData()
{
    $.ajax({
		url: "classes/viewdata.php",
		type: "POST",
        data: {"key":"loadMedicine"},
		cache: false,
		success: function(data){
			$('#Medicine_tableb').html(data);
		}
	});
}

function loadVitalsData()
{
    $.ajax({
		url: "classes/viewdata.php",
		type: "POST",
        data: {"key":"loadVitals"},
		cache: false,
		success: function(data){
			$('#Vitals_tableb').html(data);
		}
	});
}


function loadDataforid(id,key)
{
    $.ajax({
		url: "classes/viewdata.php",
		type: "POST",
        data: {"id":id,"key":key},
		cache: false,
		success: function(data){
            if(data!=0){
            var dataResult = JSON.parse(data);
            switch(key){
                case "singleAppointment":
                    $('#eadrname').val(dataResult.DocName);
				    $('#ealocation').val(dataResult.Location);
				    $('#eadate').val(dataResult.Date_);
				    $('#eatime').val(dataResult.Time_);
                    $('#eadesc').val(dataResult.Description);
                    break;
                case "singleMedicine":
                    $('#emname').val(dataResult.MedicineName);
                       $('#emtimesaday').val(dataResult.TimesinaDay);
                        $('#emtimesaweek').val(dataResult.TimesperWeek);
                        $('#emdosagequantity').val(dataResult.DosageQuantity);
                        break;
                        case "singleVital":
                            $('#evbp').val(dataResult.BP);
                            $('#evtemperature').val(dataResult.Temperature);
                            $('#evpulse').val(dataResult.Pulserate);
                            $('#evrr').val(dataResult.Respiratoryrate);
                            break;
            }
				

            }else{
                toastr.error("Failed to Fetch Details.");
            }
		}
	});
}