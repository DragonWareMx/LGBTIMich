<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard - UIkit 3 KickOff</title>
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	</head>
	<body>

		<!--HEADER-->
		<header id="top-head" class="uk-position-fixed">
			<div class="uk-container uk-container-expand uk-background-primary">
				<nav class="uk-navbar uk-light" data-uk-navbar="mode:click; duration: 250">
					<div class="uk-navbar-left">
						<div class="uk-navbar-item uk-hidden@m">
							<a class="uk-logo" href="#"><img class="custom-logo" src="{{asset('/img/logos/lgbtiMICH_gestor_white.png')}}" alt=""></a>
						</div>
						<ul class="uk-navbar-nav uk-visible@m">
							<li>
								<a href="#">Filtrar por <span data-uk-icon="icon: triangle-down"></span></a>
								<div class="uk-navbar-dropdown">
									<ul class="uk-nav uk-navbar-dropdown-nav">
										<li class="uk-nav-header">DATOS PERSONALES</li>
										<li><a href="#">Edad</a></li>
										<li><a href="#">Sexo</a></li>
										<li><a href="#">Profesión</a></li>
										<li class="uk-nav-divider"></li>
										<li><a href="#">Mostrar todo</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Descargar PDF</a></li>
						</ul>
						<div class="uk-navbar-item uk-visible@s">
							<form action="dashboard.html" class="uk-search uk-search-default">
								<span data-uk-search-icon></span>
								<input class="uk-search-input search-field" type="search" placeholder="Buscar">
							</form>
						</div>
					</div>
					<div class="uk-navbar-right">
						<ul class="uk-navbar-nav">
							<li><a href="#" data-uk-icon="icon: settings" title="Configuración" data-uk-tooltip></a></li>
							<li><a href="#" data-uk-icon="icon:  sign-out" title="Cerrar sesión" data-uk-tooltip></a></li>
							<li><a class="uk-navbar-toggle" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav" title="Offcanvas" data-uk-tooltip></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--/HEADER-->
		<!-- LEFT BAR -->
		<aside id="left-col" class="uk-light uk-visible@m">
			<div class="left-logo uk-flex uk-flex-middle uk-flex-center">
				<img class="custom-logo" src="{{asset('/img/logos/lgbtiMICH_gestor.png')}}" alt="">
			</div>
			<div class="left-content-box  content-box-dark">
				<img src="{{asset('/img/icons/unnamed.png')}}" alt="" class="uk-border-circle profile-img">
				<h4 class="uk-text-center uk-margin-remove-vertical text-light">John Doe</h4>
			</div>
			
			<div class="left-nav-wrap">
				<ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
					<li class="uk-nav-header">MENÚ</li>
					<li><a href="#"><span data-uk-icon="icon: home" class="uk-margin-small-right"></span>Inicio</a></li>
					<li><a href="#"><span data-uk-icon="icon: database" class="uk-margin-small-right"></span>Estadísticas</a></li>					
				</ul>
				<div class="left-content-box uk-margin-top">
					
						<h5>Reporte diario</h5>
						<div>
							<span class="uk-text-small">Nuevas entradas <small>(+50)</small></span>
							<progress class="uk-progress" value="50" max="100"></progress>
						</div>
						{{-- <div>
							<span class="uk-text-small">Income <small>(+78)</small></span>
							<progress class="uk-progress success" value="78" max="100"></progress>
						</div>
						<div>
							<span class="uk-text-small">Feedback <small>(-12)</small></span>
							<progress class="uk-progress warning" value="12" max="100"></progress>
						</div> --}}
					
				</div>
				
			</div>
			<div class="bar-bottom">
				<ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-5" data-uk-grid>
					<li>
						<a href="#" class="uk-icon-link" data-uk-icon="icon: home" title="Inicio" data-uk-tooltip></a>
					</li>
					<li>
						<a href="#" class="uk-icon-link" data-uk-icon="icon: settings" title="Configuración" data-uk-tooltip></a>
					</li>
					
					<li>
						<a href="#" class="uk-icon-link" data-uk-tooltip="Cerrar sesión" data-uk-icon="icon: sign-out"></a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- /LEFT BAR -->
		<!-- CONTENT -->
		<div id="content" data-uk-height-viewport="expand: true">
			<div class="uk-container uk-container-expand">
				<div class="uk-grid uk-grid-divider uk-grid-medium uk-child-width-1-2 uk-child-width-1-3@l uk-child-width-1-5@xl" data-uk-grid>
					<div>
						
						<span class="uk-text-small"><span data-uk-icon="icon:world" class="uk-margin-small-right uk-text-primary"></span>Total de entradas</span>
						<h1 class="uk-heading-primary uk-margin-remove uk-text-primary">490</h1>
						<div class="uk-text-small">
							No sé que poner aquí.
						</div>
						
					</div>

					<div>
						<span class="uk-text-small"><span data-uk-icon="icon: plus-circle" class="uk-margin-small-right uk-text-primary"></span>Nuevas entradas</span>
						<h1 class="uk-heading-primary uk-margin-remove  uk-text-primary">25</h1>
						<div class="uk-text-small">
							<span class="uk-text-success" data-uk-icon="icon: triangle-up">15%</span> Más que la última semana.
						</div>
					</div>
					
					<div>
						
						<span class="uk-text-small"><span data-uk-icon="icon:clock" class="uk-margin-small-right uk-text-primary"></span>Última entrada</span>
						<h1 class="uk-heading-primary uk-margin-remove uk-text-primary">12.00<small class="uk-text-small">PM</small></h1>
						<div class="uk-text-small">
							19 de marzo de 2020.
						</div>
						
					</div>
					{{-- 
					<div>
						
						<span class="uk-text-small"><span data-uk-icon="icon:search" class="uk-margin-small-right uk-text-primary"></span>Week Search</span>
						<h1 class="uk-heading-primary uk-margin-remove uk-text-primary">9.543</h1>
						<div class="uk-text-small">
							<span class="uk-text-danger" data-uk-icon="icon: triangle-down"> -23%</span> less than last week.
						</div>
						
					</div>
					<div class="uk-visible@xl">
						<span class="uk-text-small"><span data-uk-icon="icon:users" class="uk-margin-small-right uk-text-primary"></span>Lorem ipsum</span>
						<h1 class="uk-heading-primary uk-margin-remove uk-text-primary">5.284</h1>
						<div class="uk-text-small">
							<span class="uk-text-success" data-uk-icon="icon: triangle-up"> 7%</span> more than last week.
						</div>
					</div> --}}
				</div>
				<hr>
				<div class="uk-grid uk-grid-medium" data-uk-grid uk-sortable="handle: .sortable-icon">
					
					<!-- panel -->
					<div class="uk-width-1-2@l">
						<div class="uk-card uk-card-default uk-card-small uk-card-hover">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-auto"><h4>Sales Chart</h4></div>
									<div class="uk-width-expand uk-text-right panel-icons">
										<a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
										<a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
										<a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<div class="chart-container">
									<canvas id="chart2"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- /panel -->
					<!-- panel -->
					<div class="uk-width-1-2@l">
						<div class="uk-card uk-card-default uk-card-small uk-card-hover">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-auto"><h4>Predictions Chart</h4></div>
									<div class="uk-width-expand uk-text-right panel-icons">
										<a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
										<a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
										<a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<div class="chart-container">
									<canvas id="chart1"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- /panel -->
					<!-- panel -->
					<div class="uk-width-1-1 uk-width-1-3@l uk-width-1-2@xl">
						<div class="uk-card uk-card-default uk-card-small uk-card-hover">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-auto"><h4>Activity Chart</h4></div>
									<div class="uk-width-expand uk-text-right panel-icons">
										<a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
										<a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
										<a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<div class="chart-container">
									<canvas id="chart3"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- /panel -->
					<!-- panel -->
					<div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-4@xl">
						<div class="uk-card uk-card-default uk-card-small uk-card-hover">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-auto"><h4>Distribution Chart</h4></div>
									<div class="uk-width-expand uk-text-right panel-icons">
										<a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
										<a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
										<a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<div class="chart-container">
									<canvas id="chart4"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- /panel -->
					<!-- panel -->
					<div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-4@xl">
						<div class="uk-card uk-card-default uk-card-small uk-card-hover">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-auto"><h4>Population Chart</h4></div>
									<div class="uk-width-expand uk-text-right panel-icons">
										<a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
										<a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
										<a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<div class="chart-container">
									<canvas id="chart5"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- /panel --> 
				</div>
				<footer class="uk-section uk-section-small uk-text-center">
					<hr>
					<p class="uk-text-small uk-text-center">Copyright 2019 - <a href="https://github.com/zzseba78/Kick-Off">Created by KickOff</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a> </p>
				</footer>
			</div>
		</div>
		<!-- /CONTENT -->
		<!-- OFFCANVAS -->
		<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
				<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
				<ul class="uk-nav uk-nav-default">
					<li class="uk-active"><a href="#">Active</a></li>
					<li class="uk-parent">
						<a href="#">Parent</a>
						<ul class="uk-nav-sub"> 
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a></li>
						</ul>
					</li>
					<li class="uk-nav-header">Header</li>
					<li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span> Item</a></li>
					<li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span> Item</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a></li>
				</ul>
				<h3>Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<!-- /OFFCANVAS -->
		
		<!-- JS FILES -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
		<script src="js/chartScripts.js"></script>
	</body>
</html>
