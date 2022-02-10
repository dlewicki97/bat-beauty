links = document.querySelectorAll("link"); 
for (var i = links.length - 1; i >= 0; i--) { 
	if(links[i].getAttribute('rel') == 'preload'){ 
		links[i].setAttribute("rel", "stylesheet"); 
	} 
} 