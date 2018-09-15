<?php 
global $config;
$store_id = $config->get('config_store_id');
$template = $config->get('config_template');

if ($store_id == 0) {
    $soconfig_general = $config->get('soconfig_general');
    $soconfig_layout = $config->get('soconfig_layout');
} else {
	$soconfig_general = $config->get('soconfig_general_store');
    $soconfig_layout = $config->get('soconfig_layout_store');
	if (isset($soconfig_general[$store_id]['themecolor']))  {$soconfig_general['themecolor'] = $soconfig_general[$store_id]['themecolor'];}
	if (isset($soconfig_layout[$store_id]['layoutstyle'])) 	{$soconfig_layout['layoutstyle'] = $soconfig_layout[$store_id]['layoutstyle'];}
	if (isset($soconfig_layout[$store_id]['pattern'])) 	 	{$soconfig_layout['pattern'] = $soconfig_layout[$store_id]['pattern'];}
}

?>

<script type="text/javascript"><!--
var themes = '<?php echo $template;?>';
//--></script>

<link rel='stylesheet' property='stylesheet'  href='catalog/view/theme/<?php echo $template ?>/css/cpanel.css' type='text/css' media='all' />
<script type="text/javascript" src="catalog/view/theme/<?php echo $template ?>/js/cpanel.js"></script>