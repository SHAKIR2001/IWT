function loadData(name) {
    if (name === "btn1") {
      document.getElementById("para").innerHTML = "The hotel has a heated indoor swimming pool. Our swimming pool is available for fun or exercise.";
      document.getElementById("image1").src = "images/pool.webp";
    } else if (name === "btn2") {
      document.getElementById("para").innerHTML = "The term bar refers to the countertop where drinks are prepared and served, and by extension to the overall premises.";
      document.getElementById("image1").src = "images/bar.jpg";
    } else if (name === "btn3") {
      document.getElementById("para").innerHTML = "A game is a structured form of play, usually undertaken for entertainment or fun, <br>and sometimes used as an educational tool.";
      document.getElementById("image1").src = "images/gamingRoom.jpg";
    } else {
      alert("Invalid!");
    }
  }