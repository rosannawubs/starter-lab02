<?php
/*
the original HTML:
	<a href="./data/Katmai_Crater.jpg" data-lightbox="gallery"
		data-title="Katmai Crater - Mount Katmai, Alaska ... Posted 2014.05.05 by donald, in landscape">
Converted to be a view fragment template:
*/
?>

<a href="./data/{filename}" data-lightbox="gallery"
	data-title="{title} Posted {uploaded} by {uploader}, in {category}">
	<img src="./data/thumb/{filename}"/>
</a>