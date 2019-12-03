function setCookie(name_img){
	var nameimg = name_img;
	if (document.cookie)
		document.cookie = "img_scr =";
	document.cookie = "img_scr="+nameimg+";";
}

function getCookie(nameimg){
	var name_img = nameimg + "=";
  	var decodedCookie = decodeURIComponent(document.cookie);
  	var ca = decodedCookie.split(';');
  	for(var i = 0; i <ca.length; i++) {
    	var c = ca[i];
    	while (c.charAt(0) == ' ') {
     		 c = c.substring(1);
    	}
    	if (c.indexOf(name_img) == 1) {
      		return c.substring(name_img.length, c.length);
   		 }
  		}
  	return "img/noibat/ao1-thumb.jpg";
}

function getImg(){
	var imgScr = getCookie("img_scr");
	document.getElementById("Img_Products").scr = imgScr;
}