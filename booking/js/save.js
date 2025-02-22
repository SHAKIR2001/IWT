
function print_content(id)
{
	let content = null;

	if(id == 'details_of_reservation')
	{
		content = document.getElementById("details_of_reservation");
		prnt_funct(content);
	}
	else if(id == 'details_of_payment')
	{
		content = document.getElementById("details_of_payment");
		prnt_funct(content);
	}

	
}

function prnt_funct(content)
{

	const print_window = window.open();

	print_window.document.open();

	print_window.document.write('<html><head><title>-ROYAL OAK -</title></head><body>');
	print_window.document.write(content.innerHTML);
	print_window.document.write('</body></html>');

	print_window.document.close();

	print_window.print();
	print_window.close();
}