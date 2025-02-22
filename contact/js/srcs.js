function checkme()
{
    var cb = document.getElementById ("abc");
    var text = document.getElementById("msg")

    if (cb.checked == true )
    {
        text.style.display="none";
    }

    else
    {
        text.style.display="block";
    }

}

function display()
{

    alert("You are submited the form successfully!");

}

