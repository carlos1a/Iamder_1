<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
$(document).ready(function(){
$('.menujq > ul > li:has(ul)').addClass('desplegable');
$('.menujq > ul > li > a').click(function() {
var comprobar = $(this).next();
$('.menujq li').removeClass('activa');
$(this).closest('li').addClass('activa');
if((comprobar.is('ul')) && (comprobar.is(':visible'))) {
$(this).closest('li').removeClass('activa');
comprobar.slideUp('normal');
}
if((comprobar.is('ul')) && (!comprobar.is(':visible'))) {
$('.menujq ul ul:visible').slideUp('normal');
comprobar.slideDown('normal');
}
});
});
</script>
</head>
<body>
	<!-- Sidebar -->
					<div id="sidebar" class="menujq">
						<!-- Logo -->
							<a id="logo" href="inicio.php" ><img src="CSS/imagenes/logo.png"width='140' height='204'/></a>
							<p>
							</p>
                                <?php
								if($_SESSION['tipemp_cod']=='1'){
								 	require ("menu/menu_perfil1.php");}
										elseif($_SESSION['tipemp_cod']=='2'){
								 			require ("menu/menu_perfil2.php");}
								 				else require ("menu/menu_perfil3.php");
								 ?>
		</div>
</body>