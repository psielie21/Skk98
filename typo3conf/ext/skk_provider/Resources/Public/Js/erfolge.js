
/** The Script for the Erfolge toggle  **/
var prevActive = "Saison2018"; //the current Season. This is to keep track of what table field has to be made inactive

function openSeason(season){
  var i;
  var x = document.getElementsByClassName("erfolg-entry");
  for(i = 0; i < x.length; i++){
    x[i].style.display = "none";
  }
  document.getElementById("td_"+prevActive).className = "";
  document.getElementById("td_"+season).className = "active";

  document.getElementById(season).style.display = "block";

  prevActive = season;
}

//initial
var i;
var x = document.getElementsByClassName("erfolg-entry");
for(i = 0; i < x.length; i++){
  x[i].style.display = "none";
}
