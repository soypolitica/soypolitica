$( document ).ready(function() {
if(getCookie("css") === "L") {
    document.getElementById("styletypes").value = "Light";
}
if(getCookie("css") === "D") {
    document.getElementById("styletypes").value = "Dark";
}
  else{
    document.getElementById("styletypes").value = "Light";
    }
  let x = document.getElementById("styletypes").value;
  if(x === "Light") {
      console.log("l");
      document.getElementById("styles").href = "/style/style.css";
      document.cookie = "css=L";
  }  
    if(x === "Dark") {
      console.log("d");
      document.getElementById("styles").href = "/dark.css";
      document.cookie = "css=D";
    }
    $("select").change(function(){
  let x = document.getElementById("styletypes").value;
  if(x === "Light") {
      console.log("l");
      document.getElementById("styles").href = "/style/style.css";
      document.cookie = "css=L";
  }  
    if(x === "Dark") {
      console.log("d");
      document.getElementById("styles").href = "/dark.css";
      document.cookie = "css=D";
    }
         }); });
  // NOTE: These are only used to store preferences like user css.
  function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}