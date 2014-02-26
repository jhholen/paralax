<?php
/*
Plugin Name: Disable Admin Bar and ToolBar
Plugin URI: http://slangji.wordpress.com/toolbar-removal-completely-disable/
Description: Disable WordPress 3.1+ Admin Bar and 3.3+ ToolBar (unified code work with WP 3.1+ to 3.6+). This is only a "Basic" disabler. For "Full" remover refer to <a href="http://wordpress.org/plugins/wp-admin-bar-removal/" title="Completely Remove Admin Bar Frontend Backend and related Code">Admin Bar Removal</a> with Add-On <a href="http://wordpress.org/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Node Group and Top DashBoard Links Alone">Admin Bar Node Removal</a> and <a href="http://wordpress.org/plugins/wp-toolbar-removal/" title="Completely Remove ToolBar Frontend Backend and related Code">ToolBar Removal</a> with Add-On <a href="http://wordpress.org/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Node Group and Top DashBoard Links Alone">ToolBar Node Removal</a> The configuration of this plugin is Automattic! Work under <a href="http://www.gnu.org/licenses/gpl-2.0.html" title="GPLv2 or later License compatible">GPLv2</a> or later License. <a href="http://www.gnu.org/prep/standards/standards.html" title="GNU style indentation coding standard compatible">GNU style</a> indentation coding standard compatible. Meet detailed <a href="http://wordpress.org/plugins/about/guidelines/Plugin" title="This plugin meet detailed guideline quality requirements">Guidelines</a> quality requirements. | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestion">Contact</a> | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a>
Version: 2013.0615.0936
Author: slangjis
Author URI: http://slangji.wordpress.com/
Requires at least: 3.1
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * LICENSING
 *
 * [Disable Admin Bar and ToolBar](http://wordpress.org/plugins/toolbar-removal-completely-disable/) Disable WP 3.1+ Admin Bar and 3.3+ ToolBar
 *
 * Copyright (C) 2011-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-admin-bar-removal.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2010-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-admin-bar-removal-node-addon.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2010-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * one-click-logout-barless.php by olyma <olyma [at] rack of power [dot] com>)
 * Copyright (C) 2011-2012 [olyma](http://rackofpower.com/) (email: <olyma [at] rack of power [dot] com>)
 *
 * wp-toolbar-removal.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2012-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-toolbar-removal-node-addon.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2012-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * sLa2sLaNGjIs.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [slangjis](http://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 * Copyright (C) 2011-2012 [olyma](http://rackofpower.com/) (email: <olyma [at] rack of power [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THANKS
 *
 * To: olyma, storkontheroof, focus3d
 *
 * Please Noted That:
 * For Completely Backend Removal on WordPress 3.1+ (or later) is needed [WP Admin Bar Removal](http://wordpress.org/plugins/wp-admin-bar-removal/)
 * Try also your Add-On [WP Admin Bar Removal Node](http://wordpress.org/plugins/wp-admin-bar-node-removal/)
 * For Completely Backend Removal on WordPress 3.3+ (or later) is needed [WP ToolBar Removal](http://wordpress.org/plugins/wp-toolbar-removal/)
 * Try also your Add-On [WP ToolBar Removal Node](http://wordpress.org/plugins/wp-toolbar-node-removal/)
 */

	/**
	 * @package Disable Admin Bar and ToolBar
	 * @subpackage WordPress PlugIn
	 * @description Disable WP 3.1+ Admin Bar and 3.3+ ToolBar
	 * @since 3.1.0
	 * @tested 3.6.0
	 * @version 2013.0615.0936
	 * @1stversion 
	 * @status STABLE (trunk) release
	 * @development Code in Becoming!
	 * @install The configuration of this Plugin is Automattic!
	 * @author slangjis
	 * @license GPLv2 or later
	 * @indentation GNU style coding standard
	 * @keytag 74be16979710d4c4e7c6647856088456
	 */

	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}

	global $wp_version;

	if ( $wp_version < 3.1 )
		{
			wp_die( __( 'This Plugin Requires WordPress 3.1+ or Greater: Activation Stopped!' ) );
		}

	function wptrcd_rbams()
		{
			echo "\n\n<!--Start Disable Admin Bar and ToolBar Code-->\n\n";
			echo '<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';
			echo "\n\n<!--End Disable Admin Bar and ToolBar Code-->\n\n";
		}

	if ( $wp_version >= 3.2 )
		{
			add_action( 'admin_head', 'wptrcd_rbams' );
		}

	function wptrcd_rbf28px()
		{
			echo "\n\n<!--Start Disable Admin Bar and ToolBar Code-->\n\n";
			echo '<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
			echo "\n\n<!--End Disable Admin Bar and ToolBar Code-->\n\n";
		}
	add_action( 'admin_print_styles', 'wptrcd_rbf28px', 21 );

	function wptrcd_atblh()
		{
			echo "\n\n<!--Start Disable Admin Bar and ToolBar Code-->\n\n";
?>
<style type="text/css">table#tbrcss td#tbrcss_ttl a:link,table#tbrcss td#tbrcss_ttl a:visited{text-decoration:none}table#tbrcss td#tbrcss_lgt,table#tbrcss td#tbrcss_lgt a{text-decoration:none}</style>
<table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="tbrcss" border="0" cols="4" width="97%" height="33">
<tr>
<td align="left" valign="center" id="tbrcss_ttl">
<?php

	echo '<a href="' . home_url() . '">' . __( get_bloginfo() ) . '</a>';

?>
</td>
<td align="right" valign="center" id="tbrcss_lgt">
<div style="padding-top:2px">
<?php

	echo date_i18n( get_option( 'date_format' ) );

?>

 @ 

<?php

	echo date_i18n( get_option( 'time_format' ) );

?>

<?php

	wp_get_current_user();

	$current_user = wp_get_current_user();

	if ( !( $current_user instanceof WP_User ) )
		return;

	echo ' | ' . $current_user->display_name . '';

	if ( is_multisite() && is_super_admin() )
		{
			if ( !is_network_admin() )
				{
					echo ' | <a href="' . network_admin_url() . '">' . __( 'Network Admin' ) . '</a>';
				}
			else
				{
					echo ' | <a href="' . get_DashBoard_url( get_current_user_id() ) . '">' . __( 'Site Admin' ) . '</a>';
				}
		}

	echo ' | <a href="' . wp_logout_url( home_url() ) . '">' . __( 'Log Out' ) . '</a>';

?>
</div>
</td>
<td width="8">
</td>
</tr>
</table>
<?php
			echo "\n<!--End Disable Admin Bar and ToolBar Code-->\n\n";
		}

	if ( $wp_version >= 3.3 )
		{
			add_action( 'in_admin_header', 'wptrcd_atblh' );
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}

	function wp_admin_bar_toolbar_init()
		{
			add_filter( 'show_admin_bar', '__return_false' );
			add_filter( 'wp_admin_bar_class', '__return_false' );
		}
	add_filter( 'init', 'wp_admin_bar_toolbar_init', 9 );

	function wptrcd_ruppoabpc()
		{
			echo "\n\n<!--Start Disable Admin Bar and ToolBar Code-->\n\n";
			echo '<style type="text/css">.show-admin-bar{display:none}</style>';
			echo "\n\n<!--End Disable Admin Bar and ToolBar Code-->\n\n";
		}
	add_action( 'admin_print_styles-profile.php', 'wptrcd_ruppoabpc' );

	function wptrcd_hfl()
		{
			echo "\n<!--Plugin Disable Admin Bar and ToolBar 2013.0615.0936 Active - Tag: ".md5(md5("".""))."-->\n";
			echo "\n<!--This Site is Optimized to Speedup DashBoard and Minimize Memory Load Consumption with Disabled";

			global $wp_version;

			if ( $wp_version >= 3.3 )
				{
					echo " ToolBar";
				}

			if ( $wp_version >= 3.1 )
				{
					if ( $wp_version < 3.3 )
						{
							echo " Admin Bar";
						}
				}

			echo "-->\n\n";
		}
	add_action( 'wp_head', 'wptrcd_hfl' );
	add_action( 'wp_footer', 'wptrcd_hfl' );
?>