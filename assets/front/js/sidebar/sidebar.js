function openSidebar(){
	document.getElementsByTagName('aside')[0].className = 'd-show';
}

function closeSidebar(){
	document.getElementsByTagName('aside')[0].className = 'd-close';
	setTimeout(() => {document.getElementsByTagName('aside')[0].className = 'd-none'}, 500);
}