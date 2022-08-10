
		<div id="ajax-data"></div>
		

		
		<script type="text/javascript">

			 function ajaxLoadData(){
				var xmlhttp = new XMLHttpRequest();
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
			        document.getElementById("ajax-data").innerHTML = this.responseText;
			      }
			    };
			    xmlhttp.open("GET", "blank.php", true);
			    xmlhttp.send();
				}


			setInterval(function () {
				ajaxLoadData();
			}, 250);

			

		</script>
		
	