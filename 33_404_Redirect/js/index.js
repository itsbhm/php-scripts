$(document).ready(function(){
	var onMobile = false;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { onMobile = true; }
	if( ( onMobile === false ) ) {
		// The videoplayer - advanced controlled background video
		$(".fullscreen-video").mb_YTPlayer({
			containment: "body",
			opacity: 1, // Set the opacity of the player;
			mute: false, // Mute the audio;
			// ratio: "4/3" or "16/9" to set the aspect ratio of the movie;
			// quality: "default" or "small", "medium", "large", "hd720", "hd1080", "highres";
			// containment: The CSS selector of the DOM element where you want the video background; if not specified it takes the "body"; if set to "self" the player will be instanced on that element;
			// optimizeDisplay: True will fit the video size into the window size optimizing the view;
			loop: false, // True or false loops the movie once ended.
			// vol: 1 to 100 (number) set the volume level of the video.
			startAt: 0, // Set the seconds the video should start at.
			autoPlay: false, // True or false play the video once ready.
			showYTLogo: false, // Show or hide the YT logo and the link to the original video URL.
			showControls: false // Show or hide the controls bar at the bottom of the page.
		});

		// First we're going to hide these elements
		$(".video-controls, #show-after, .img-after").hide();

		// Start the movie
		$("#video").on("YTPStart",function(){
			$(".video-controls").show().css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
			$("#show-before, .img-before").css({opacity: 1, visibility: "hidden"}).animate({opacity: 0},300);
		});

		// Pause the movie
		$("#video").on("YTPPause",function(){
			$("#show-before, .img-before").css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
			$(".video-controls").css({opacity: 1, visibility: "hidden"}).animate({opacity: 0},300);
		});

		// After the movie
		$("#video").on("YTPEnd",function(){
			$(".video-controls, #show-before, .img-before").hide();
			$("#show-after, .img-after").show().css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
		});
	} else {
		// Fallback for mobile devices
		$("#home").removeClass(".video");
		$("#show-after, .img-after").show();
		$(".fullscreen-video, #show-before, .img-before, .video-controls").hide();
	}
});