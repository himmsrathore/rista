<!--
document.oncontextmenu = function(){return false}
document.ondragstart = function(){return false}
document.onselectstart = function(){return false}
  if(document.layers) {
       window.captureEvents(Event.MOUSEDOWN);
       window.onmousedown = function(e){
           if(e.target==document)return false;
       }
   }
  else {
    document.onmousedown = function(){return false}
	}
//-->