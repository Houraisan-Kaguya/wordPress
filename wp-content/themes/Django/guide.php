<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){
		echo '
		
<div id="welcome-panel" class="about-wrap">

	<div class="wpbadge" style="float:left; margin-right:30px; "><img src="'. get_template_directory_uri() . '/screenshot.png" width="250" height="200" /></div>

	<div class="welcome-panel-content">
	
	<h1>Welcome to '.wp_get_theme().' WordPress theme!</h1>
	
	<p class="about-text"> Django is a free premium WordPress theme. This is a WordPress 3+ ready theme with features like custom menu, custom homepage template ,featured images, widgetized sidebar etc. Theme also comes with an option panel. The homepage of the theme has a custom jquery image slider. </p>
	
	
	
	
		<div class="changelog ">
		<h3>Required plugins </h3>
		<p>The theme often requires few plugins to work the way it is originally intented to. You will find a notification on the admin panel prompting you to install the required plugins. Please install and activate the plugins.  </p>
		<ol>
			<li><a href="http://wordpress.org/extend/plugins/options-framework/">Options framework</a></li>
		</ol>
		</div>
	
	
		<div class="changelog ">
		
		<h3>Theme options explained</h3>
		<p>The theme contains an options page using which you adjust various settings available on the theme. </p>
		
		<p><b>Slider setting:</b>
		There is a jQuery slider on the homepage of the theme You can use the slider to display the featured images from a selected category. From the theme options page you can select a category and the number of slides to be displayed.</p>
		
		<p><b>Site intro:</b>
		There is a customizable intro section on the homepage template of the theme. You can enter a ustom intro title and intro message via the theme options.</p>

		<p><b>Social network:</b>
		You can configure few social network links on the homepage. </p>

		<p><b>Banner setting:</b>
		Configure the banner ads on the sidebar </p>

		</div>
	
		<div class="changelog">
		<h3> Custom homepage</h3>
		<p>The theme offers a custom homepage template. You have to use the static front page feature under the reading settings. The following screencast shows the process   </p>
		<p><iframe src="http://www.screenr.com/embed/stI8" width="650" height="396" frameborder="0"></iframe></p>
		</div>


				
		<div class="changelog ">
		' . file_get_contents(dirname(__FILE__) . '/FT/license-html.php') . '
		</div>
	
				

	<p class="welcome-panel-dismiss">WordPress theme designed by <a href="http://www.fabthemes.com">FabThemes.com</a>.</p>

	</div>
	</div>
		
		';
		

}
