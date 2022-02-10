function runPallete(policy){
	window.addEventListener("load", ()=>{
		window.cookieconsent.initialise({
			"palette": {
				"popup": {
					"background": "#efe1b5!important",
					"text": "rgba(0,0,0,.75)"
				},
				"button": {
					"background": "#eee",
					"text": "#212529!important"
				}
			},
			"type": "opt-out",
			"content": {
				"message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
				"dismiss": "Rozumiem",
				"deny": "",
				"allow": "Rozumiem",
				"link": "Czytaj więcej...",
				"href": policy
			}
		})
	});
}