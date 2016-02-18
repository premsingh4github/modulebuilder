$(document).ready(function(){
		$('#detailBody').change(function(){
			updateTotolVacancy();
		});
		$('.datepicker').datepicker({
		});
	});

function updateTotolVacancy(){
	debugger
	var totalVacancy = 0;
	$('#detailBody >tr').each(function(i,ls){
		 totalVacancy += (parseInt($(this).find('input:first').val()) > 0)? parseInt($(this).find('input:first').val()) : 0 ;
	});
	$('#totalVacancy').val(totalVacancy)
	debugger;
}
function removeDetail(){
	debugger
    event.target.parentElement.parentElement.parentElement.remove();
    updateTotolVacancy();
    debugger;
}

