document.addEventListener("DOMContentLoaded", function() {
	var button = document.getElementById("menu-button");
	var ul = document.querySelector("header ul");

	button.addEventListener("click", function() {
		ul.style.display = ul.style.display == "block" ? "none" : "block";
	});

	window.addEventListener("resize", function() {
		ul.style.display = window.innerWidth <= 600 ? "none" : "block";
	});
});