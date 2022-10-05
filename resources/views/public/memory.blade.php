@extends('public.layout.main')
@section('extracss')


	<link rel='stylesheet' href='/packages/swall2/sweetalert2.min.css'>
	<link rel='stylesheet' href='/packages/css/animate.css'>
	<link rel="stylesheet" href="/packages/fontawesome/css/all.min.css" >
	<link rel="stylesheet" href="/packages/css/style.css">


@endsection

@section('content')
		<br />
		<br />
	

		<br />
		<br />
	
		<div id="score-panel">
			<ul class="stars">
				<li>
					<i class="fas fa-car"></i>
				</li>
				<li>
					<i class="fas fa-car"></i>
				</li>
				<li>
					<i class="fas fa-car"></i>
				</li>
			</ul>
			<span class="moves">0</span> Moviments
			<div class="restart">
				<i class="fas fa-undo"></i>
			</div>

		</div>
		<br />
		<ul class="deck"></ul>

@endsection

@section('extrajs')

<script src='packages/js/jquery.min.js'></script>
<script src="packages/swall2/sweetalert2.all.min.js"></script>
<script src="packages/js/script.js"></script>


	<script> 
	$(function() {
		 swal.fire({
		    allowEscapeKey: false,
		    allowOutsideClick: false,
		    title: 'Benvingut al Màgic BDN Running Memory',
		    text: "Fes click a iniciar Joc",
		    type: 'success',
		    confirmButtonColor: '#9BCB3C',
		    confirmButtonText: 'Inicia Joc'
		  }).then(function(isConfirm) {
		    if (isConfirm) {
		    		 initGame();
		    }
		  });
	});	
	</script>

@endsection
