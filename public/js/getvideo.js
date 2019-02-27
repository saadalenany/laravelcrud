window.onload = function() {
	var url = document.getElementById("video_url").src;
	console.log(url);
	var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
	var match = url.match(regExp);

	if (match && match[2].length == 11) {
		var complete_url = "https://www.youtube.com/embed/";
		complete_url += match[2];
		complete_url += "?autoplay=1;";
		console.log(complete_url);
		document.getElementById("video_url").src=complete_url;
	} else {
		console.log('error');
		document.getElementById("video_url").src='error';
	}
}
