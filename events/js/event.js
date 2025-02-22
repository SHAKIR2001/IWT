/*
function toggle(){
  let x = document.getElementById("");

  if(x.style.dispinsidetext1lay === "none"){
    x.style.display = "block";
  }

  else{
    x.style.display = "none";
  }
}
*/

function toggle() {
  let x = document.getElementById("");

  if (x.style.display === "none" || x.style.display === "") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function go_up(id) {
  let y = null;

  if (id == 'insidetext1') {
    y = document.getElementById('insidetext1');
  } else if (id == 'insidetext2') {
    y = document.getElementById('insidetext2');
  } else if (id == 'insidetext3') {
    y = document.getElementById('insidetext3');
  } else if (id == 'insidetext4') {
    y = document.getElementById('insidetext4');
  } else if (id == 'insidetext5') {
    y = document.getElementById('insidetext5');
  } else if (id == 'insidetext6') {
    y = document.getElementById('insidetext6');
  }

  pop(y);
}

function pop(y) {
  if (y.style.display === "none" || y.style.display === "") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}

function checkAnsw()
{
    var tbox = document.getElementById ("box");
    var text = document.getElementById("warning")

    if (tbox.checked == true )
    {
        text.style.display="none";
    }

    else
    {
        text.style.display="block";
    }

}