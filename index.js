var boxId = ""; // the selected box id
var siteObj = ""; // the returning Json site obj

/* handle the sites selections */
function change_select1(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
      siteObj = this.responseText; // get from sites
    }
  };
  
  boxId = document.getElementById("sites").value;
  xhttp.open("GET", "site1.php?name="+boxId+"&value=url", true);
  xhttp.send();
 
}//change_select1
  
/* handle the format selections */
var formatsObj = "";  //the returning Json obj
var videoOpt = ["Video Options"]; 
function change_select2(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      formatsObj = this.responseText;
      var string = JSON.parse(formatsObj);  //get formates
      //record each videos with its info
      for (var i in string) {
        videoOpt.push(string[i]["Title"]);
      }

      var select = document.getElementById("videoSelect");
      select.innerHTML = videoOpt.map(function(videoSelect) {
      return "<option>" + videoSelect + "</option>";
      });
    }
  };
  var formate = document.getElementById("formate").value;
  xhttp.open("GET", "site1.php?name="+boxId+"&value="+formate, true);
  xhttp.send();
  
}//change_select2

/* hanele the vidoe informtion */
function change_select3() {
  var txt = "";
  var theVideos = document.getElementById("videoSelect");
  var theVId = theVideos.options[theVideos.selectedIndex].value;
  var infos = JSON.parse(siteObj);
  txt = txt.concat("<br><br>URL: " + infos["url"] + 
  "<br>NAME: " +infos["Name"] + "<br>REALIABILITY: " + infos["reliability"]);
  
  var videoInfo2 = JSON.parse(formatsObj);
  for (var i in videoInfo2) {
    if (videoInfo2[i]["Title"] === theVId) {
      txt = txt.concat("<br>VIDEOTITLE: " + videoInfo2[i]["Title"] + 
      "<br>RUNTIME: " + videoInfo2[i]["Runtime"] + "<br />");
    }
  }
  document.getElementById("videoInfos").innerHTML = txt;
  videoOpt = ["Video Options"];
    
}//change_select3