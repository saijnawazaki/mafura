<?php
require 'config.php';
require 'function.php';

//get RDSR folder files
$content_rdsr = getFileFromFolder(['path'=>PATH_RDSR_FOLDER,'accept-ext'=>'rdsr']);

//print('<pre>'.print_r($content_rdsr).'</pre>');
$content_rdsr_finalmix = array();
$content_rdsr_finalmix_header = array();
$content_mixin = array();
$echo_header_important = array();

foreach($content_rdsr as $filename => $content)
{
	$content_vars = array();
	$echo_header_important = array();

	$res = getEchoHeaderImportant(['content'=>$content]);
	$content = $res['content'];
	if(isset($res['echo_header_important']))
	{
		foreach($res['echo_header_important'] as $fn => $val)
		{
			$echo_header_important[] = $val;	
		}
	}

	//print_r($echo_header_important);

	$res = getReferenceReplace(['content'=>$content,'css_list'=>$content_rdsr_finalmix]);
	$content = $res['content'];
	if(isset($res['css_list']))
	{
		foreach($res['css_list'] as $fn => $val)
		{
			$content_rdsr_finalmix[$fn] = arrayToCSS(['content_array'=>$res['css_list'][$fn]]);	
		}
	}
	

	$res = getModules(['content'=>$content,'path'=>PATH_RDSR_FOLDER]);
	$content = $res['content'];
	$content_vars_partial = $res['variable'];

	//print_r($content_vars_partial);
	//echo '<hr>';
	$content = getVariableFromFileSet(['content'=>$content,'variable'=>$content_vars_partial,'module'=>true]);

	$res = getMixin(['content'=>$content]);
	$content = $res['content'];

	if(isset($res['mixin']))
	{
		foreach($res['mixin'] as $mixin_name => $mixin_content)
		{
			$content_mixin[$mixin_name] = $mixin_content;	
		}
	}

	$content = setMixin(['content'=>$content,'mixin'=>$content_mixin]);

	//print_r($content_mixin);


	

	//echo $content;
	//Get Variable
	$res = getVariableFromFile(['content'=>$content]);
	$content = $res['content'];
	
	if(isset($content_vars_partial))
	{
		$content_var = $content_vars_partial;

		if(isset($res['variable']))
		{
			foreach($res['variable'] as $index => $val)
			{
				$content_vars[$index] = $val;	
			}
		}
	}
	else
	{
		$content_vars = $res['variable'];	
	}
	
	

	//foreach
	$content = getForeach(['content'=>$content,'variable'=>$content_vars]);
	
	//Set Variable
	$content = getVariableFromFileSet(['content'=>$content,'variable'=>$content_vars]);

	//echo $content;

	$content_finalmix = getParseCSS(['content'=>$content]);

	$content_finalmix_header = '';

	if($echo_header_important)
	{
		foreach($echo_header_important as $index => $val)
		{
			$content_finalmix_header .= $val."\n\n";	
		}
	}
	
	//echo $content_finalmix_header;

	//echo "<pre>".$filename."-->".$content_finalmix."</pre>";
	$content_rdsr_finalmix[$filename] = $content_finalmix;
	$content_rdsr_finalmix_header[$filename] = $content_finalmix_header;
	//print('<pre>'.print_r($content_list,true).'</pre>');
		
}

//print('<pre>'.print_r($content_rdsr_finalmix,true).'</pre>');

$content_css = getFileFromFolder(['path'=>PATH_CSS_FOLDER,'accept-ext'=>'rdsr']);

foreach($content_css as $filename => $value)
{
	unlink(PATH_CSS_FOLDER.'/'.$filename) or print($filename." error delete\n");	
}

$content_rdsr_finalmix_last = array();
	
foreach($content_rdsr_finalmix as $filename => $content)
{
	$header = '';

	if(isset($content_rdsr_finalmix_header[$filename]))
	{
		$header = $content_rdsr_finalmix_header[$filename];
	}
	//echo $header;

	$exp_filename = explode('.', $filename);
	$filename_ext = end($exp_filename);
	$filename_name = $exp_filename[0];	

	if(file_exists(PATH_CSS_FOLDER.'/'.$filename_name.'.css'))
	{
		unlink(PATH_CSS_FOLDER.'/'.$filename_name.'.css') or print($filename." error delete\n");	
	}

	if(isset($content) && $content != '')
	{
		file_put_contents(PATH_CSS_FOLDER.'/'.$filename_name.'.css', $header.$content) or print($filename_name." error !\n");
		$content_rdsr_finalmix_last[$filename] = $header.$content;	
	}
	
	
}

echo '<hr>';

if(file_put_contents(PATH_TARGET_CSS_FOLDER.PATH_TARGET_CSS_FILENAME.'.css', implode("\n", $content_rdsr_finalmix_last)))
{
  echo 'Generated<hr>'.date('r');
}
else
{
  echo 'Error<hr>'.date('r');
}

print('Generated: '.date('r'));