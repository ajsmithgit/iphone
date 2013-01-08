<?php
/**
 * @package WordPress
 * @subpackage Guys Footprints
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" media="screen" 
href="http://pryoritylifestylesolutions.com.au/wp-content/themes/pryority/ie.css" />    
<![endif]-->
<!--[if lt IE 7]>
<script defer type="text/javascript" src="http://pryoritylifestylesolutions.com.au/wp-content/themes/pryority/pngfix.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>


<link rel="icon" href="/wp-content/themes/guysfootprints/images/icon.png" />
<link href="/wp-content/themes/guysfootprints/stylesheet.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" media="screen" 
href="ie.css" />    
<![endif]-->
<style type="text/css">
<!--
#wrapper #content #text #tbox #tboxcontent #hvca {
	text-align: right;
	height: 79px;
	width: 140px;
	clear: none;
	float: right;
}
#wrapper #content #text #tbox #tboxcontent #hvcalogo {
	height: 79px;
	width: 140px;
	clear: none;
	float: left;
}
.style9 {font-size: 17px}
.style12 {
	color: #555ea8;
	font-weight: bold;
}
-->
</style>
</head>

<body>


<div id="wrapper">
<div id="content">
<div id="header">
<div id="facetwit"><a href="http://twitter.com/GuysFootprintsCV89DA"><img src="/wp-content/themes/guysfootprints/images/twitter.jpg" alt="Twitter" width="58" height="59" border="0" /></a><a href="https://www.facebook.com/#!/pages/Guys-Footprints/147380747375">&nbsp;&nbsp;</a><a href="http://twitter.com/GuysFootprintsCV89DA"></a><a href="https://www.facebook.com/GuysFootprints"><img src="/wp-content/themes/guysfootprints/images/facebook.jpg" alt="Facebook" width="59" height="60" border="0" /></a></div>
<div id="contact">
	<div id="phone">A free programme of support for bereaved children,<br />
	  young people and their families in Worcestershire</div>
   	<div id="contactus"><?php/* <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4628248">
<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form> */ ?>
</div>
</div>
</div>
<div id="nav">
 <?php
$links = get_pages('sort_column=menu_order&exclude=168');

foreach($links as $i => $page)
	$links[$i] = '<a href="' . get_page_link($page->ID) . '" title="' . attribute_escape(apply_filters('the_title', $page->post_title)) . '">' . apply_filters('the_title', $page->post_title) . '</a>';

echo implode(' | ', $links);
?>
</div>