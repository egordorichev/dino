		</div>
	</div>
	<?php wp_footer(); ?>
	<script>
		document.addEventListener('DOMContentLoaded', (event) => {
			document.querySelectorAll('pre code').forEach((block) => {
				hljs.highlightBlock(block);
			});
		});

		var link = document.querySelector("link[rel~='icon']");

		if (!link) {
			link = document.createElement("link");
			link.setAttribute("rel", "shortcut icon");
			document.head.appendChild(link);
		}
		
		var faviconUrl = link.href || window.location.origin + "/favicon.ico";
		
		function onImageLoaded() {
			var canvas = document.createElement("canvas");
			canvas.width = 16;
			canvas.height = 16;
			var context = canvas.getContext("2d");
			context.drawImage(img, 0, 0);
			context.globalCompositeOperation = "source-in";
			context.fillStyle = "#d00";
			context.fillRect(0, 0, 16, 16);
			context.fill();
			link.type = "image/x-icon";
			link.href = canvas.toDataURL();
		};
		
		var img = document.createElement("img");
		img.addEventListener("load", onImageLoaded);
		img.src = faviconUrl;
	</script>
</body>
</html>