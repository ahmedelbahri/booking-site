<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Design landing page.">
    <meta name="author" content="Devcrud">

	<?php
		wp_head();
	?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- Page Navbar -->
<nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
				<?php
					if (function_exists('the_custom_logo'))
					{
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}
				?>
				<img src="<?php echo $logo[0]; ?>" height="25px">
				<strong class="text-primary">Merrouch</strong> <span class="text-dark">Gaming</span>
			</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ml-md-4">
                        <a class="nav-link btn btn-primary" href="components.html">Components</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- End of Page Navbar -->
