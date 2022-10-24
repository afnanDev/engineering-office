<!--معلومات اسم الموقع والرابط واللغة -->

<!DOCTYPE html>

<html<?php language_attributes( '$doctype' ) ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>"/>
    
    <!-- this meta for mobile -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- this meta for mobile -->

    <title>
		<?php wp_title('|','true','right') ?>
		<?php bloginfo('name');?>
	</title>
    
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
    <?php wp_head();?>
</head>
<body>
