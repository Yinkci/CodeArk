<?php require ("session.php"); ?>
<?php require ("header.php"); ?>
<!-- MOBILE MENU -->
<div id="my-wrapper-cs-menu" >       
	<nav id="cs-menu" class="cs-menu">
		<ul class="menu-sen">
			<li><a href="#"><i class="fas fa-code"></i> Dashboard</a></li>
			<li><a href="menu"><i class="fas fa-th-list"></i> Menu</a></li>
			<li><a href="http://localhost:8888/CodeArk/page"><i class="fas fa-sticky-note"></i> Page</a></li>
			<li><a href="#"><i class="fas fa-cog"></i> Theme Settings</a></li>
			<li><a href="#"><i class="fas fa-wrench"></i> C.A Settings</a></li>
		</ul>
	</nav>
</div>
<!-- DESKTOP MENU -->
<div class="d-flex">
	<div class="admin-header">
		<div class="row">
			<div class="col-3 col-md-6">
				<a href="#cs-menu" class="cs-menuicon  d-xl-none text-left">
					<div class="d-table">
						<div class="d-cell">
							<i class="fas fa-bars"></i>
						</div>
					</div>
				</a>
			</div>
			<div class="col-9 col-md-6 col-xl-12 cs-logout">
				<div class="d-table">
					<div class="d-cell">
						<img src="assets/img/codeark.png" class="d-none  d-xl-inline-block ark-logo">
						<a href="logout.php"><i class="fas fa-user-circle"></i> Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="menu col-md-2 col-md-2 d-none col-xl-2 d-xl-block pd-left10">
		<div class="header-sen ">
			<ul class="menu-sen">
				<li><a href="#"><i class="fas fa-code"></i> Dashboard</a></li>
				<li><a href="menu"><i class="fas fa-th-list"></i> Menu</a></li>
				<li><a href="http://localhost:8888/CodeArk/page"><i class="fas fa-sticky-note"></i> Page</a></li>
				<li><a href="#"><i class="fas fa-cog"></i> Theme Settings</a></li>
				<li><a href="#"><i class="fas fa-wrench"></i> C.A Settings</a></li>
			</ul>
		</div>
	</div>

