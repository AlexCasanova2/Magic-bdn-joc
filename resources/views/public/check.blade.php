@extends('public.layout.main')
@section('extracss')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript" src="packages/js/llqrcode.js"></script>
<script type="text/javascript" src="packages/js/webqr.js"></script>
<style>
	#canvas, video {
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
}
	
</style>
<!-- aqui añadimos mas css para esta vista en concreto, si fuera necesario-->
@endsection

@section('content')

<?php
		$_STANDBY = 2;
	 	App\Config::setVal('result',$_STANDBY);

?>

<div class="container-fluid " >
	<div class="row">

		<div class="col-md-12 text-center" style="padding: 0;" >
			<br /><br /><br /><br /><br /><br />
			<img  style="height: 50px;" src="{{url('packages/images/logof.png')}}" />
			<br />
			<br />
			<br />	
			<center><button onclick="participa()" class="btn btn-primary btn-lg">PARTICIPA</button></center>
			<div id="main">

				<div id="mainbody">
					<table class="tsel" border="0" width="100%">
						<tr>
							<td valign="top" align="center" width="50%">
							<table class="tsel" border="0">
								<tr class="cameras">
									<td><a id="webcamimg" align="left" ></a></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><div id="outdiv"></div></td>
								</tr>
							</table></td>
						</tr>
						<tr >
							<td colspan="3" align="center"><img src=""/></td>
						</tr>
						<tr style="display: none;" >
							<td colspan="3" align="center"><div id="result"></div></td>
						</tr>
					</table>

				</div>
				&nbsp;

			</div>
				<canvas  style="display: none;" id="qr-canvas" width="800" height="600"></canvas>
				<script type="text/javascript">
				load();
				</script>
		</div>
	</div>
</div>

@endsection

@section('extrajs')
<!-- aqui añadimos mas JS para esta vista en concreto, si fuera necesario-->

	
<script>
	var user;
	$(document).ready(function() {
	   // user= accessCookie("testCookie");
		$('#main').hide();

	});

	function checkUser(user){
		$.get( "{{url('/ws/checkuser')}}",{user:user}, function( data ) {
	  		
	  		// if(data.result==0){
	  			// window.location.replace("http://finestrelles10000euros.com/setcookie1987");
	  		// }
		
		}, "json" );
		
	}

	function accessCookie(cookieName) {
		var name = cookieName + "=";
		var allCookieArray = document.cookie.split(';');
		for (var i = 0; i < allCookieArray.length; i++) {
			var temp = allCookieArray[i].trim();
			if (temp.indexOf(name) == 0)
				return temp.substring(name.length, temp.length);
		}
		return "";
	}

	function participa(){
		$('#main').slideDown();
		$('button').slideUp();
	}
	
	function checkQR(user){
		$.get( "{{url('/ws/check')}}",{user:user}, function( data ) {
	  		
	  		if(data.result==0){
	  		//	window.location.replace("http://finestrelles10000euros.com/setcookie1987");
	  		}
	  		if(data.result==2){
	  			alert('Avui no es poden donar premis');
	  		}
	  		
	  		//console.log(data);

			
		}, "json" );
	}
	
	function resetQR(){
		$.get( "{{url('/ws/reset')}}",{user:user}, function( data ) {

			//window.location.reload();
			
		}, "json" );
	}
</script>
@endsection