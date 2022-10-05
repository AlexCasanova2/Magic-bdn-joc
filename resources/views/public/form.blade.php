@extends('public.layout.main')
@section('extracss')
<!-- aqui añadimos mas css para esta vista en concreto, si fuera necesario-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="{{url('')}}/packages/css/custom.css" rel="stylesheet">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="packages/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="packages/css/util.css">
<link rel="stylesheet" type="text/css" href="packages/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="/packages/fontawesome/css/all.min.css" >
<link rel='stylesheet' href='/packages/swall2/sweetalert2.min.css'>
<link rel="stylesheet" href="packages/css/form.css">
<link rel='stylesheet' href='/packages/css/animate.css'>
<link rel="stylesheet" href="/packages/css/style.css">
@endsection

@section('content')
<div class="container quest start-page" >
	<a  href="javascript:;"  onclick="$('.start-page').fadeOut();$('.memory').fadeIn();">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="text-transform: uppercase;font-size: 4.5em;margin-top: 150px;">Posa’t a prova!</h2>
				<img style="margin-bottom: 40px;" class="img-fluid" src="packages/images/Ralla-09.png" />
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<p style="font-size: 2em;font-weight: lighter;"> <strong>MÀGIC BDN RUNNING RUNNING?</strong></p>
				<br /><br />
				<img  style="height:25rem;" src="packages/images/imatge 1-10.png" />
			</div>
		</div>
	</a>
</div>

<div class="container quest question-1" data-question="1" style="display: none;">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Quins d’aquests serveis <strong>NO</strong> ofereix grup  <strong>DIREXIS</strong>?</h2>
			<img class="img-fluid" src="packages/images/Ralla-09.png" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">Servei de consultoria</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">Serveis sanitaris</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="1">Serveis de gestió de residus</small>
			</div>
		</div>
	</div>
</div>

<div class="container quest question-2" style="display: none;" data-question="2">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Quines empreses de gestió de la mobilitat inclou el grup <strong>DIREXIS</strong>?</h2>
			<img class="img-fluid" src="packages/images/titleline.png" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="1">TUSGSAL, TGO, MASATS TG i Operadors de Mobilitat  Balear.</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">TUGSAL, CINESI, Teletransfer, SortsSystems i TGTRAVEL.</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">TUSGSAL, TGTRAVEL i Direxis Mobilitat.</small>
			</div>
		</div>
	</div>
</div>

<div class="container quest question-3" style="display: none;" data-question="3">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Quants autobusos té TUSGSAL per prestar el servei de Bus Metropolità al Barcelonès Nord i el Nocturn de Barcelona?</h2>
			<img class="img-fluid" src="packages/images/titleline.png" />
		</div>
	</div>

	<div class="row">

		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">495 busos</small>
			</div>

		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="1">327 busos</small>
			</div>

		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">280 busos</small>
			</div>

		</div>
	</div>

</div>

<div class="container quest question-4" style="display: none;" data-question="4">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Saps de quantes línies de bus metropolità disposa TUSGSAL per cobrir l’àmbit del Barcelonès Nord?</h2>
			<img class="img-fluid" src="packages/images/titleline.png" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="1">De 29 línies</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">De 15 línies</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">De 25 línies</small>
			</div>
		</div>
	</div>
</div>

<div class="container quest question-5" style="display: none;" data-question="5">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Saps que vol dir que una línia sigui Metrobús?</h2>
			<img class="img-fluid" src="packages/images/titleline.png" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small  data-value="0">Que acosta a la ciutadania a la parada de Metro més propera.</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small  data-value="1">Que és una línia troncal de la xarxa amb alta freqüència (menys de 10 minuts)</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small  data-value="0">Que abarca tot l’àmbit metropolità</small>
			</div>
		</div>
	</div>
</div>

<div class="container quest question-6" style="display: none;" data-question="6">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Saps quantes persones transporta la xarxa en dia feiner?</h2>
			<img class="img-fluid" src="packages/images/titleline.png" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="1">130.000 persones</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">50.000 persones</small>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-button">
				<div class="glyph-icon flaticon-menu"></div>
				<small data-value="0">59.000 persones</small>
			</div>
		</div>
	</div>
</div>

<div class="container quest memory" style="display: none;" >
	<div class="row">
		<div class="col-md-12 ">
			<h2 style="margin-top:80px;" >Memory</h2>
			<img style="margin-bottom:30px;" class="img-fluid" src="packages/images/Ralla-09.png" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div id="score-panel">
				<ul class="stars">
					<li>
						<i class="fas fa-bus"></i>
					</li>
					<li>
						<i class="fas fa-bus"></i>
					</li>
					<li>
						<i class="fas fa-bus"></i>
					</li>
				</ul>
				<span class="moves">0</span> Moviments
				<div class="restart">
					<i class="fas fa-undo"></i>
				</div>
			</div>
			<ul class="deck"></ul>
		</div>
	</div>
</div>

<div class="container form" style="display: none;">

	<div class="row">
		<div class="col-md-12 ">
			<h2 style="margin-top: 160px;">Deixa'ns les teves dades i entraràs al sorteig d'un cap de setmana gratuït!
			<br/>
			Vols guanyar un <i>Smartbox</i> de cap de setmana amb el <strong>Nou Renault CAPTUR?</strong></h2>
			<img class="img-fluid" src="packages/images/titleline.png" />
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">
			<div class="limiter">
				<div class="container-login100">
					<div class=" p-b-20">
						<form class="login100-form validate-form">
							{{ csrf_field() }}
							<input type="hidden" name="q1" value="">
							<input type="hidden" name="q2" value="">
							<input type="hidden" name="q3" value="">
							<input type="hidden" name="q4" value="">
							<input type="hidden" name="q5" value="">
							<input type="hidden" name="q6" value="">

							<div class="row">
								<div class="col-md-4">
									<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Nom">
										<input class="input100" type="text" name="nom">
										<span class="focus-input100" data-placeholder="Nom"></span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Cognoms">
										<input class="input100" type="text" name="cognoms">
										<span class="focus-input100" data-placeholder="Cognoms"></span>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-8">

									<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Email">
										<input class="input100" type="email" name="email">
										<span class="focus-input100" data-placeholder="Email"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "DNI">
										<input class="input100" type="text" name="dni">
										<span class="focus-input100" data-placeholder="DNI"></span>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-5 ">
									<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Telèfon">
										<input class="input100" type="text" name="telefon">
										<span class="focus-input100" data-placeholder="Telèfon"></span>
									</div>
								</div>
								<div class="col-md-7">

									<div class="wrap-input100 validate-input m-t-20 m-b-20" data-validate = "He llegit i accepto la política de tractament de dades"  style="border-bottom:0;font-family: Poppins-SemiBold; font-size: 18px; color: #999;" >
										<input type="checkbox" required="required" checked="checked"  name="acepto2">
										&nbsp;&nbsp;&nbsp; <a href="javascript:;" data-toggle="modal" data-target="#exampleModalLong2"  >He llegit i accepto la política de tractament de dades</a>

									</div>
								</div>
							</div>

							<div class="row">

								<div class="col-md-12 text-right">

									<button class="btn-renault">
										Acceptar
									</button>

								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Política de tractament de dades</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="paragraph-text__content">

								<div class="paragraph-text__body">
									<div class="rich-text">
										<p>
											<strong>PROTECCIÓN DE DATOS</strong>
										</p>

										<p>
											<strong>Normativa aplicable</strong>
										</p>

										<p>
											De conformidad con lo que dispone el RGPD (Reglamento General de Protección de Datos) en vigor,&nbsp; MOVENTO informa a los usuarios de la página web (<strong>“Web”</strong>) que la información de carácter personal que puede proporcionarnos, ya sea a través de determinados formularios de recogida incluidos en las diferentes secciones de la Web, serán recogidos en un fichero, el responsable del cual es la empresa MARFINA, S.L. (<strong>“MARFINA”</strong>) y cabecera de MOVENTO&nbsp; (<strong>“Grupo MOVENTO”</strong>), según se indica en las correspondientes secciones de la Web.
										</p>

										<p>
											Las empresas de MOVENTO son las empresas que se relacionan en el listado que el usuario puede consultar clicando&nbsp;<a href="/es/grupo-movento">aquí</a>.
										</p>

										<p>
											Los datos de carácter personal recogidos son objeto de tratamiento, según se requiera, tanto automatizado como convencional, e incorporados y conservados, de una parte, en los ficheros titularidad de MARFINA o de las empresas del Grupo MOVENTO que actúen como responsables de los ficheros correspondientes. Se mantiene registro del tratamiento de los mismos, debidamente actualizado.
										</p>

										<p>
											En cada formulario de recogida de datos de carácter personal de la Web se indica de manera expresa, por cada supuesto concreto, quién o quiénes son los responsables del tratamiento de los datos de carácter personal y los responsables de los correspondientes ficheros.
										</p>

										<p>
											<strong>Ejercicio de los derechos de los usuarios</strong>
										</p>

										<p>
											El ejercicio de los derechos de acceso, rectificación, supresión, limitación de tratamiento, portabilidad y oposición, puede llevarse a cabo de conformidad con lo que se dispone a la normativa vigente, mediante una solicitud remitida a nuestra dirección de correo electrónico establecida a este efecto,&nbsp;<span><span><a href="mailto:baixamovento@moventia.net">baixamovento@moventia.net</a></span></span>, o a la dirección postal, MOVENTO – Dept. Asesoría Jurídica, <span>Via Augusta 105</span>, 08174, Sant Cugat del Vallès, a la cual se debe adjuntar en cualquier caso una fotocopia del DNI o documento equivalente válido, de conformidad a derecho que permita acreditar su identidad.
										</p>

										<p>
											<strong>Principio de calidad de los datos personales</strong>
										</p>

										<p>
											La no cumplimentación o cumplimentación parcial de los datos de carácter personal por parte de los usuarios que les puedan ser requeridas en un formulario de la Web, podría suponer que las empresas del Grupo MOVENTO no puedan atender a su solicitud de información, ni prestar los servicios que se ofrecen en la Web.
										</p>

										<p>
											El usuario se responsabiliza de comunicar al responsable del tratamiento que en cada caso corresponda, cualquier modificación de los datos de carácter personal facilitados, con el objeto que la información contenida en los ficheros esté en todo momento actualizada y no contenga errores.
										</p>

										<p>
											Las empresas del Grupo MOVENTO cumplen lo que dispone la normativa vigente en cuanto al deber de cancelación de la información personal que haya dejado de ser necesaria para la finalidad o finalidades por las que fue recogida, y queda bloqueada en su caso, &nbsp;con la finalidad de poder atender las posibles responsabilidades derivadas del tratamiento de los datos, y sólo durante los plazos de prescripción de estas responsabilidades. Una vez transcurridos estos plazos, se elimina definitivamente esta información mediante métodos seguros.
										</p>

										<p>
											Los menores de 14 años no pueden enviar ningún tipo de información personal sin el consentimiento de su padre/madre o tutor. Las empresas del Grupo MOVENTO no son responsables de ninguna información personal enviada por menores de 14 años sin la autorización oportuna.
										</p>

										<p>
											<strong>Datos especialmente protegidos</strong>
										</p>

										<p>
											Según lo dispuesto en la normativa vigente sobre protección de datos de carácter personal, en caso que nos faciliten información relativa a su ideología, afiliación sindical, religión o creencias, el usuario debe darnos en el correspondiente formulario el consentimiento explícito y por escrito para poder tratar esta información. De la misma manera, los datos relacionados con el origen racial, salud o vida sexual del usuario requieren de su consentimiento expreso en el correspondiente formulario para poder tratarlos.
										</p>

										<p>
											En cuanto a las posibles comunicaciones de esta tipología de datos de carácter personal a terceros, informaremos al usuario oportunamente en cada caso concreto y facilitaremos el medio para oponerse, de conformidad con la normativa vigente.
										</p>

										<p>
											<strong>Finalidad de la recogida de datos personales</strong>
										</p>

										<p>
											La recogida y el tratamiento de los datos de carácter personal tiene como finalidad, entre otras, poder contactar con el usuario atender y gestionar adecuadamente las consultas, comentarios, incidencias o sugerencias enviadas; gestionar las tareas básicas de administración y la emisión de presupuestos, modificación o baja de las tarjetas de fidelización que en su momento se ofrezcan; mantenerlo informado, ya sea por correo electrónico o por cualquier otro medio, de novedades y servicios (si fuera necesario, gestionar la prestación adecuada) relacionados con empresas del sector de la automoción relacionadas con ésta; y gestionar su participación en los cursos de formación ofrecidos y en procesos de selección de personal.
										</p>

										<p>
											En cuanto al tratamiento de los datos con finalidades exclusivamente promocionales o publicitarias, se facilita al usuario, juntamente con el correspondiente formulario de recogida de datos de carácter personal, la posibilidad de oponerse en el mismo momento que facilite sus datos. Así mismo se pone a su servicio un procedimiento oportuno, sencillo y gratuito, para que pueda indicar libremente su oposición cuando el usuario lo considere oportuno.
										</p>

										<p>
											Si el usuario no desea recibir esta información puede comunicar gratuitamente su decisión a través de los medios anteriormente indicados para ejercer sus derechos y, en todo caso, mediante el correspondiente marcado en la casilla que constará en la sección de la Web. Su aceptación para que se envíe la información comercial o publicitaria tiene siempre carácter revocable, sin efectos retroactivos.
										</p>

										<p>
											<strong>Cesión de datos de carácter personal</strong>
										</p>

										<p>
											Respecto de las posibles comunicaciones de datos a terceros, informaremos al afectado oportunamente en cada caso y facilitaremos el medio para oponerse, conforme a la normativa vigente.
										</p>

										<p>
											En el caso que no autorice la cesión de sus datos personales a otra persona del Grupo, diferente de la esté solicitando sus datos personales, el usuario debe proceder al correspondiente marcado de la casilla que constará en la sección de la Web donde esté el formulario que esté empleando.
										</p>

										<p>
											El consentimiento para la comunicación de datos de carácter personal es revocable en cualquier momento, si bien no tiene efectos retroactivos.
										</p>

										<p>
											<strong>Medidas de seguridad</strong>
										</p>

										<p>
											Se han adoptado los niveles de seguridad de protección de datos personales requeridos por la normativa vigente, de acuerdo con el tipo de información tratada, y se han implantado otros medios y medidas técnicas adicionales a su alcance para evitar la alteración, pérdida, tratamiento o acceso no autorizado de los datos personales facilitados. Todo esto de conformidad con lo que se prevé en la normativa de vigor.
										</p>

										<p>
											Se garantiza que se han adoptado las medidas oportunas para garantizar la seguridad de la información y la confidencialidad de los datos que nos envíen por Internet. Por eso, se utiliza la tecnología de seguridad Secure Socket Layer (SSL), sistema que permite el encriptado de la información que nos envíen y evita la lectura, incluso si es interceptada inadecuadamente. No obstante eso, el usuario debe ser consciente que las medidas de seguridad en Internet no son inexpugnables.
										</p>

										<p>
											Cuando acceden a nuestro sitio web, no almacenamos ninguna información en su ordenador a través de cookies, para poder reconocerles de manera automática la próxima vez que la utilice.
											<br>
											Este portal de Internet contiene enlaces a otros sitios web relacionados con las empresas del Grupo MOVENTO.
										</p>

										<p>
											<strong>Modificación de la política de privacidad</strong>
										</p>

										<p>
											Las empresas del Grupo Movento se reservan el derecho a modificar esta política de privacidad para adaptarla a las novedades legislativas o jurisprudenciales. En estos supuestos, anunciará en esta Web los cambios producidos con una anticipación razonable a su puesta en práctica.
										</p>

										<p>
											Así mismo proporcionará a los usuarios los recursos técnicos adecuados para qué, con carácter previo, puedan acceder a este aviso sobre la política de privacidad y protección de datos, como también a los textos informativos y de obtención del consentimiento para el tratamiento de sus datos personales, en cada supuesto de su recogida mediante este sitio Web.
										</p>

										<p>
											&nbsp;<strong>Información general</strong>
										</p>

										<p>
											En virtud de lo que establece el artículo 10 de la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, y de conformidad con el principio de transparencia de nuestra compañía, se informa a los usuario de los datos legales de este sitio web:
										</p>

										<ul>
											<li>
												Denominación comercial: MOVENTO
											</li>
											<li>
												Denominación social: MARFINA, S.L.
											</li>
											<li>
												Domicilio social: Sabadell – Barcelona, Passeig del Comerç, 100
											</li>
											<li>
												Dirección de contacto: Sant Cugat del Vallès – Barcelona, <span>Via Augusta 105</span>, 08174&nbsp;
											</li>
											<li>
												CIF núm.: B-59372755
											</li>
											<li>
												Datos de inscripción en el Registro Mercantil de Barcelona: asiento núm. 3.689, folio 103, volumen 20.407, full B-6285, inscripción 1ª
											</li>
											<li>
												Dirección de correo electrónico:&nbsp;<span><span><a href="mailto:baixamovento@moventia.net">baixamovento@moventia.net</a></span></span>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container quest question-final" style="display: none;" data-question="4">

	<div class="row">
		<div class="col-md-12">
			<h2 style="font-size: 7em !important;text-align: center;font-weight: bold;">MOLTA SORT!</h2>
			<img class="img-fluid" src="packages/images/titleline.png" style="margin-bottom: 50px;" />
		</div>
	</div>

	<div class="row">

		<div class="col-md-12 text-center">
			<br />
			<p class="title-final">Prova el <strong>Nou Renault CAPTUR</strong></p>
			<br /><br />
		</div>
	
	</div>
	<div class="row">

		<div class="col-md-12 text-center">
			<a href="/"  class="btn btn-renault">TORNAR</a>
		</div>
	
	</div>

</div>

@endsection

@section('extrajs')
<script src='packages/js/jquery.min.js'></script>
<script src="packages/js/main.js"></script>
<script src="packages/swall2/sweetalert2.all.min.js"></script>
<script src="packages/js/script.js"></script>

<script>
	$(document).ready(function() {

		$('.box-button').click(function() {
			$('.box-button').removeClass('selected');
			$(this).addClass('selected');

			var value = $(this).find('small').data('value');
			var question_number = $(this).parent().parent().parent().data('question');
			$('input[name="q' + question_number + '"]').val($(this).find('small').data('value'));
			
			if(value){
				$('.box-button').removeClass('selected');
				$(this).addClass('ok');
				
			}else{
				$('.box-button').removeClass('selected');
				$(this).addClass('error');

				var buttons = $('.question-' + question_number+' .box-button');
				
				$.each(buttons,function(k,v){
					var val = $(v).find('small').data('value');
					if(val){
						$(v).addClass('ok');
					}
						
				});
			}	

			

			//$('input[name="q' + question_number + '"]').val($(this).find('small').html());

			setTimeout(function(){
				
				
				$('.question-' + question_number).fadeOut();

    			if (question_number == 6) {
    				$('.memory').fadeIn();
    				 initGame();
    			} else {
    				
    				$('.question-' + (question_number + 1)).fadeIn(function(){
    					$('.box-button').removeClass('selected');
    				});
    			}

			},2000);
		});
	});
</script>

@endsection
