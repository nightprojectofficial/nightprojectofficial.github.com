<!doctype html>
<html lang="en-US">
<head>
<title>NightProject - Bot Invite</title>
<meta charset="utf-8">
<meta name="description" content="RPCS3 is a multi-platform open-source Sony PlayStation 3 emulator and debugger written in C++ for Windows, Linux, macOS and FreeBSD. The purpose of this project is to accurately emulate the PlayStation 3 in its entirety with the power of reverse engineering and community collaboration.">
<meta name="keywords" content="rpcs3, playstation, playstation 3, ps3, emulator, debugger, windows, linux, macos, freebsd, open source, nekotekina, kd11, download">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="RPCS3 - The PlayStation 3 Emulator" />
<meta property="og:description" content="RPCS3 is a multi-platform open-source Sony PlayStation 3 emulator and debugger written in C++ for Windows, Linux, macOS and FreeBSD made possible with the power of reverse engineering." />
<meta property="og:image" content="https://rpcs3.net/img/meta/mobile/1200.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://rpcs3.net" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RPCS3" />

<meta name="twitter:title" content="RPCS3 - The PlayStation 3 Emulator">
<meta name="twitter:description" content="RPCS3 is a multi-platform open-source Sony PlayStation 3 emulator and debugger written in C++ for Windows, Linux, macOS and FreeBSD made possible with the power of reverse engineering.">
<meta name="twitter:image" content="https://rpcs3.net/img/meta/mobile/1200.png">
<meta name="twitter:site" content="@rpcs3">
<meta name="twitter:creator" content="@rpcs3">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Invite</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Замечательно! Вы почти у цели, скорее нажимайте на "Пригласить" чтобы добавить бота на ваш сервер!
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class="landing-con-panel" style="background: url('/img/graphics/panels/download.jpg') no-repeat center;">
				<div class='landing-ovr-panel'>
					<div class='landing-tx1-panel'>
						<h2>Test</h2>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Последние обновление | v1.0</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
							Soon
						</p>
					</div>
				</div>
			</div>
			<div class='version-con-container'>
				<div class='version-img-container'>
					 <div class='version-img-package'>
					</div>
				</div>
				<div class='version-txt-container'>
					<div class='version-tx1-package darkmode-txt'>
						<span>
							<span class='version-buildversion'>
								<?php
									printf("Приглашение бота");
								?>
							</span>
						</span>
					</div>
					<div class='version-tx2-package darkmode-txt'>
						<span>
							<span class='version-builddate'>
								<?php
								printf("Выберите какие права вы хотите выдать боту");
								?>
							</span>
						</span>
					</div>
					<div class='package-tx2-desc-wide'>
						<div class='package-pr'>
							<div class='version-ico-git' style="background: url(/img/icons/buttons/administrator.png) center left / 24px no-repeat;">
							</div>
							<?php
							if (isset($build))
								printf("Pull Request <a href=\"%s\" target=\"_blank\">#%d</a>",
								       $build->get_url_pr(),
								       $build->pr);
							else
								printf("Пригласить (Administrator)");
							?>
						</div>
						<div class='package-commit'>
							<div class='version-ico-git' style="background: url(/img/icons/buttons/moderator.png) center left / 24px no-repeat;">
							</div>
							<?php
							if (isset($build))
								printf("Commit <a href=\"%s\" target=\"_blank\">%s</a>",
								       $build->get_url_commit(),
								       $build->get_commit_short());
							else
								printf("Пригласить (No Administrator)");
							?>
						</div>
					</div>
				</div>
			</div>
				</div>
				</a>
			</div>
		</div>
	</div>
	<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
</html>
