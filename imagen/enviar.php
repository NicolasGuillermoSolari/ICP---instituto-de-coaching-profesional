<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
     <title>Formulario de contacto</title>
  </head>
  <body>
   <?php
     $nombre = $_GET ["nombre"];
     $email = $_GET ["email"];
    $telefono = $_GET ["telefono"];
    $sugerencia = $_REQUEST ["sugerencia"];
  ?>
  <table>
    <tr>
     <td><h3>Nombre</h3></td>
     <td><?php echo $nombre; ?></td>
    </tr>
    <tr>
      <td><h3>Correo-e</h3></td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
     <td><h3>Página web</h3></td>
     <td><?php echo $web; ?></td>
    </tr>
    <tr>
      <td><h3>Sugerencia</h3></td>
      <td><?php echo $sugerencia ?></td>
    </tr>
   </table>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>






