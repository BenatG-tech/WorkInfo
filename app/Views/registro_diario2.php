<?= $this->extend('app') ?>

<?= $this->section('content') ?>

<?php
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$month = $meses[date('n') - 1];
	$year = date('Y');
	$date = $month . " (" . $year . ")";
	$horas = array('00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45','02:00', '02:15', '02:30', '02:45','03:00', '03:15', '03:30', '03:45','04:00', '04:15', '04:30', '04:45',
			'05:00', '05:15', '05:30', '05:45','06:00', '06:15', '06:30', '06:45','07:00', '07:15', '07:30', '07:45','08:00', '08:15', '08:30', '08:45','09:00', '09:15', '09:30', '09:45',
			'10:00', '10:15', '10:30', '10:45','11:00', '11:15', '11:30', '11:45','12:00', '12:15', '12:30', '12:45','13:00', '13:15', '13:30', '13:45','14:00', '14:15', '14:30', '14:45',
			'15:00', '15:15', '15:30', '15:45','16:00', '16:15', '16:30', '16:45','17:00', '17:15', '17:30', '17:45','18:00', '18:15', '18:30', '18:45','19:00', '19:15', '19:30', '19:45',
			'20:00', '20:15', '20:30', '20:45','21:00', '21:15', '21:30', '21:45','22:00', '22:15', '22:30', '22:45','23:00', '23:15', '23:30', '23:45');
?>

<div class="contenido">
	<div class="menu_izquierda">
		<h1>Esto es el menú de la izquierda de Registro Diario.</h1>
	</div>
	<div class="contenido_derecha">
		<div class="titulo">
			<h1><?php echo $date ?></h1>
		</div>
		<div class="registros">
			<div class="registros_izquierda">
				<?php for ($j = 1; $j <= intval(date('t')/3); $j++) { ?>
					<div class="registro">
						<h3 class="registro_elemento">Día: <?php echo $j ?></h3>
						<p class="registro_elemento">Total: </p>
						<div class="registro_horario">
							<p class="registro_elemento">Desde:</p>
							<select class="registro_elemento">
								<?php for ($i = 0; $i < count($horas); $i++) { ?>
									<option><?php echo $horas[$i] ?></option>
								<?php } ?>
							</select>
							<p class="registro_elemento">Hasta:</p>
							<select class="registro_elemento">
								<?php for ($i = 0; $i < count($horas); $i++) { ?>
									<option><?php echo $horas[$i] ?></option>
								<?php } ?>
							</select>
							<button> + </button>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="registros_centro">
				<?php for ($j = intval(date('t')/3 + 1); $j <= intval((date('t')/3)*2); $j++) { ?>
					<div class="registro">
						<h3 class="registro_elemento">Día: <?php echo $j ?></h3>
						<p class="registro_elemento">Total: </p>
						<div class="registro_horario">
							<p class="registro_elemento">Desde:</p>
							<select class="registro_elemento">
								<?php for ($i = 0; $i < count($horas); $i++) { ?>
									<option><?php echo $horas[$i] ?></option>
								<?php } ?>
							</select>
							<p class="registro_elemento">Hasta:</p>
							<select class="registro_elemento">
								<?php for ($i = 0; $i < count($horas); $i++) { ?>
									<option><?php echo $horas[$i] ?></option>
								<?php } ?>
							</select>
							<button> + </button>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="registros_derecha">
				<?php for ($j = intval((date('t')/3)*2 + 1); $j <= intval(date('t')); $j++) { ?>
					<div class="registro">
						<h3 class="registro_elemento">Día: <?php echo $j ?></h3>
						<p class="registro_elemento">Total: </p>
						<div class="registro_horario">
							<p class="registro_elemento">Desde:</p>
							<select class="registro_elemento">
								<?php for ($i = 0; $i < count($horas); $i++) { ?>
									<option><?php echo $horas[$i] ?></option>
								<?php } ?>
							</select>
							<p class="registro_elemento">Hasta:</p>
							<select class="registro_elemento">
								<?php for ($i = 0; $i < count($horas); $i++) { ?>
									<option><?php echo $horas[$i] ?></option>
								<?php } ?>
							</select>
							<button> + </button>
						</div>
					</div>
				<?php } ?>
			</div>
			
				
		</div>
		
	</div>
</div>
<?= $this->endSection() ?>
