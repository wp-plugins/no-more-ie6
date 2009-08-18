<?php
/*
Plugin Name: No More IE6
Plugin URI: http://serversideguy.com
Description: Displays a box on the top of your website telling users to upgrade browsers if they are still using IE6.
Author: Andy Stramer	
Version: 1.0
Author URI: http://serversideguy.com
*/

function nmie6_head()
{
	$nmie_message = '
			<div id ="nmie_contain" style="border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;">
				<div style="position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;">
					<a href="#" onclick="javascript:this.parentNode.parentNode.style.display="none"; return false;">
						<img src="http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg" style="border: none;" alt="Close this notice"/>
					</a>
				</div>    
				<div style="width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;  ">      
					<div style="width: 75px; float: left;">
						<img src="http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg" alt="Warning!"/>
					</div>    
					<div style="width: 275px; float: left; font-family: Arial, sans-serif;">       
						<div style="font-size: 14px; font-weight: bold; margin-top: 12px;">
							You are using an outdated browser
						</div>       
						<div style="font-size: 12px; margin-top: 6px; line-height: 12px;">
							For a better experience using this site, please upgrade to a modern web browser.
						</div>      
					</div>
					
						<a href="http://www.firefox.com" target="_blank">
							<img src="http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg" style="border: none;" alt="Get Firefox 3.5′/><
						/a>
					
						<a href="http://www.browserforthebetter.com/download.html" target="_blank">
							<img src="http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg" style="border: none;" alt="Get Internet Explorer 8′/><
						/a>
					
						<a href="http://www.apple.com/safari/download/" target="_blank">
							<img src="http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg" style="border: none;" alt="Get Safari 4′/><
						/a>
					
						<a href="http://www.google.com/chrome" target="_blank">
							<img src="http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg" style="border: none;" alt="Get Google Chrome"/>
						</a>
					
				</div>  
			</div>';
			echo "<!--[if lt IE 7]>".$nmie_message."<![endif]-->";
}
add_action('wp_head', 'nmie6_head');
?>