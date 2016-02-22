$(document).ready(function(){
		$('#detailBody').change(function(){
			updateTotolVacancy();
		});
		$('.datepicker').datepicker({
		});
	$('.colorpicker').colorpicker();
	$(".imgInput").change(function(){
		readURL(this);
	});
	});

function updateTotolVacancy(){
	
	var totalVacancy = 0;
	$('#detailBody >tr').each(function(i,ls){
		 totalVacancy += (parseInt($(this).find('input:first').val()) > 0)? parseInt($(this).find('input:first').val()) : 0 ;
	});
	$('#totalVacancy').val(totalVacancy)
}
function removeDetail(){
    event.target.parentElement.parentElement.parentElement.remove();
    $('#addDetail').attr('data-count',parseInt($('#addDetail').attr('data-count')) - 1);
    updateTotolVacancy();
}
function readURL(input) {
	var target = $(input).data('target');
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#' + target).attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
function checkJobId(){
	if($('#job_id').val() > 0 ){
		return true;
	}
	alert('First Add Job Detail!..');
	return false;

}


