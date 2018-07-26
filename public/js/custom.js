$(document).ready(function() {

	$("#search").on('click', function() {
		// Get the slug and redirect to search URL
		var slug = $("#searchField").val();
		window.location.href = "/movies/search/" + slug + "/page/1";
    });
 
 });