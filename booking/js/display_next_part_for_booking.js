
function display_next(btn_id)
{
	if (btn_id == 'a')
	{
		document.getElementById('check_availability').style.display = "none";
		document.getElementById('reservation').style.display = "block";
		document.getElementById('guest_info_and_payment').style.display = "none";
		document.getElementById('review_and_confirm').style.display = "none";
	}
	else if( btn_id == 'booking_btn')
	{
		document.getElementById('check_availability').style.display = "none";
		document.getElementById('reservation').style.display = "none";
		document.getElementById('guest_info_and_payment').style.display = "block";
		document.getElementById('review_and_confirm').style.display = "none";
	}
	else if ( btn_id == 'pay_btn') 
	{
		document.getElementById('check_availability').style.display = "none";
		document.getElementById('reservation').style.display = "none";
		document.getElementById('guest_info_and_payment').style.display = "none";
		document.getElementById('review_and_confirm').style.display = "block";
	}

}