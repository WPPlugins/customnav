<?php
/*
Plugin Name: customnav
Plugin URI: http://www.themes-plugins.com
Description: A plugin to create a custom navigation structure. 
Version: 2.0
Author: T-Roy/Lance
Author URI: http://www.themes-plugins.com/custom-nav-navigation-menu/
*/
?>
<?php
add_action('admin_head','createFile');
add_action('admin_menu', 'custNav');

function custNav(){
add_options_page('customnav', 'customnav', 10, 'customnav', 'showit');
}

function showit(){
  global $temp,$bhpiece;
?>
  <table width="100%" border="6" bordercolor="#333333" bgcolor="#E0E0E0">
    <tr><td align="center"><br />To create this type of link---><a href="http://Themes-Plugins.com" title="Themes-Plugins" target="_blank" style="background-color:#FF99CC" style="font-size:20px" onClick="alert('Some Java Script!')">Themes-Plugins</a>&nbsp;&nbsp;Use the example below.<br />
  </td></tr><tr><td align="left" bgcolor="#CCCCCC">
        Display Name:&nbsp;<input type="text" name="" value="Themes-Plugins" size="35" style="background-color:#FFFF66">&nbsp;&nbsp;&nbsp;&nbsp;
		href:&nbsp;<input type="text" name="" value="http://Themes-Plugins.com" size="75" style="background-color:#FFFF66"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Target:&nbsp;<input type="text" name="" value="_blank" size="25">&nbsp;&nbsp;&nbsp;
		Title:&nbsp;<input type="text" name="" value="Themes-Plugins" size="25">&nbsp;&nbsp;&nbsp;		
		Style:&nbsp;<input type="text" name="" value="background-color:#FF99CC" size="25"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Attribute:&nbsp;<input type="text" name="" value='onClick="alert(&#39Some Java Script!&#39)"' size="32">&nbsp;&nbsp;&nbsp;
		Attribute1:&nbsp;<input type="text" name="" value="" size="25">&nbsp;&nbsp;&nbsp;
		Attribute2:&nbsp;<input type="text" name="" value='style="font-size:20px"' size="25"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Attribute3:&nbsp;<input type="text" name="" value="" size="25">&nbsp;&nbsp;&nbsp;
		Attribute4:&nbsp;<input type="text" name="" value="" size="25"><br /> 
  </td></tr><tr><td align="center">
  <br />To create this type of link---><a href="http://Themes-Plugins.com" title="Display Name goes here" target="_blank" onClick="alert('Some Java Script!')"><img src='<?php bloginfo('url'); ?>/wp-content/plugins/customnav/images/bhIcon.jpg' alt='Themes-Plugins'/></a>&nbsp;&nbsp;Use the example below.<br />
  </td></tr><tr><td align="left" bgcolor="#CCCCCC">
        Display Name:&nbsp;<input type="text" name="" value="<img src='<?php get_settings('siteurl'); ?>/wp-content/plugins/customnav/images/bhIcon.jpg'/>" size="75" style="background-color:#FFFF66">&nbsp;&nbsp;&nbsp;&nbsp;
		href:&nbsp;<input type="text" name="" value="http://Themes-Plugins.com" size="35" style="background-color:#FFFF66"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Target:&nbsp;<input type="text" name="" value="_blank" size="25">&nbsp;&nbsp;&nbsp;
		Title:&nbsp;<input type="text" name="" value="Themes-Plugins" size="25">&nbsp;&nbsp;&nbsp;		
		Style:&nbsp;<input type="text" name="" value="" size="25"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Attribute:&nbsp;<input type="text" name="" value='onClick="alert(&#39Some Java Script!&#39)"' size="32">&nbsp;&nbsp;&nbsp;
		Attribute1:&nbsp;<input type="text" name="" value="" size="25">&nbsp;&nbsp;&nbsp;
		Attribute2:&nbsp;<input type="text" name="" value="" size="25"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Attribute3:&nbsp;<input type="text" name="" value="" size="25">&nbsp;&nbsp;&nbsp;
		Attribute4:&nbsp;<input type="text" name="" value="" size="25"><br /> 
  </td></tr><tr><td align="center">
  <br /><form action="" method="post">
       Create this many links --->&nbsp;&nbsp;<input type="text" name="numOfLinks" size="10" align="right">&nbsp;&nbsp;&nbsp;&nbsp;
	   <input type="submit" value="Create">
  </form></td></tr></table>
  <form method="post" action=""><?php
	
  if(isset($_POST['numOfLinks'])){
  $counterNum = $_POST['numOfLinks'];
  }else{
  $counterNum = count($temp);
  }
  for($i = 0; $i < $counterNum; $i++){
  $displayNum = $i+1;
  ?><br /><font size="4">Link Number&nbsp;<?php echo $displayNum; ?></font><br /><input type="checkbox" name="display<?php echo $i; ?>"<?php if($temp[$i][0] == true){echo "checked";} ?> />&nbsp;Display Link &nbsp;<?php echo $displayNum; ?><br />Display Name:&nbsp;<input type="text" name="displayName<?php echo $i; ?>" value="<?php echo $temp[$i][1]; ?>" size="35" style="background-color:#FFFF66">&nbsp;&nbsp;&nbsp;&nbsp;
		href:&nbsp;<input type="text" name="href<?php echo $i; ?>" value="<?php echo $temp[$i][2]; ?>" size="75" style="background-color:#FFFF66"><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Target:&nbsp;<input type="text" name="target<?php echo $i; ?>" value="<?php echo $temp[$i][3]; ?>" size="25">&nbsp;&nbsp;&nbsp;
		Title:&nbsp;<input type="text" name="title<?php echo $i; ?>" value="<?php echo $temp[$i][4]; ?>" size="25">&nbsp;&nbsp;&nbsp;		
		Style:&nbsp;<input type="text" name="style<?php echo $i; ?>" value="<?php echo $temp[$i][5]; ?>" size="25"><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Attribute:&nbsp;<input type="text" name="attribute<?php echo $i; ?>" value='<?php echo str_replace("'","&#39;",$temp[$i][6]); ?>' size="25">&nbsp;&nbsp;&nbsp;
		Attribute1:&nbsp;<input type="text" name="attribute1<?php echo $i; ?>" value='<?php echo str_replace("'","&#39;",$temp[$i][7]); ?>' size="25">&nbsp;&nbsp;&nbsp;
		Attribute2:&nbsp;<input type="text" name="attribute2<?php echo $i; ?>" value='<?php echo str_replace("'","&#39;",$temp[$i][8]); ?>' size="25"><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Attribute3:&nbsp;<input type="text" name="attribute3<?php echo $i; ?>" value='<?php echo str_replace("'","&#39;",$temp[$i][9]); ?>' size="25">&nbsp;&nbsp;&nbsp;
		Attribute4:&nbsp;<input type="text" name="attribute4<?php echo $i; ?>" value='<?php echo str_replace("'","&#39;",$temp[$i][10]); ?>' size="25"><br /><br /><hr size="8" noshade="false" width="100%" color="#666666"><?php
   }
  ?><table align="center"><tr><td align="center">A preview of the links you have created<br /><?php cNAdminShowit();?></td></tr></table>
    Display layout (Default is horizontal)<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="displayStyle" value="vertical" <?php if($temp[0][11] == "vertical"){echo "checked";} ?> />&nbsp;Vertical<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seperator Type:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="&#187" checked />&nbsp;&raquo;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="\&\b\u\l\l\;" <?php if($temp[0][12] == "\&\b\u\l\l\;"){echo "checked";} ?> />&nbsp;&bull;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="\&rsaquo\;" <?php if($temp[0][12] == "\&rsaquo\;"){echo "checked";} ?> />&nbsp;&rsaquo;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="\&ndash\;" <?php if($temp[0][12] == "\&ndash\;"){echo "checked";} ?> />&nbsp;&ndash;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="|" <?php if($temp[0][12] == "|"){echo "checked";} ?> />&nbsp;|&nbsp;&nbsp;&nbsp;
	<input type="radio" name="seperator" value="\&asymp\;" <?php if($temp[0][12] == "\&asymp\;"){echo "checked";} ?> />&nbsp;&asymp;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="\&#32" <?php if($temp[0][12] == "\ "){echo "checked";} ?> />&nbsp;Blank Space&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="seperator" value="" <?php if($temp[0][12] == ""){echo "checked";} ?> />No-seperator<br /><br />
	<input type="hidden" name="showOnSite" value="on" <?php if($temp[0][13] == true){echo "checked";} ?> /> <!-- NOT Fully Implemented Yet -->
	<input type="submit" value="saveit" name="saveit">&nbsp;&nbsp;&nbsp;<input type="submit" name="reset" value="Reset" onClick="return confirm('Are you sure you want to reset the form?')">
	</form><?php

  if(isset($_POST['saveit'])){ 
  $f = count($_POST);  
  if(number_format($f / 14) >= 1){
  $thisCount = number_format($f / 14);
  }else{
  $thisCount = 1;
  }
  for($i = 0; $i < $thisCount; $i++){
  $bhpiece[$i];
  $bhpiece[$i]['display'] = stripslashes($_POST['display'.$i.'']); 
  $bhpiece[$i]['displayName'] = str_replace('"',"'",stripslashes($_POST['displayName'.$i.'']));
  $bhpiece[$i]['href'] = str_replace('"',"'",stripslashes($_POST['href'.$i.'']));
  $bhpiece[$i]['target'] = str_replace('"',"'",stripslashes($_POST['target'.$i.'']));
  $bhpiece[$i]['title'] = str_replace('"',"'",stripslashes($_POST['title'.$i.'']));
  $bhpiece[$i]['style'] = str_replace('"',"'",stripslashes($_POST['style'.$i.'']));
  $bhpiece[$i]['attribute'] = stripslashes($_POST['attribute'.$i.'']);
  $bhpiece[$i]['attribute1'] = stripslashes($_POST['attribute1'.$i.'']);
  $bhpiece[$i]['attribute2'] = stripslashes($_POST['attribute2'.$i.'']);
  $bhpiece[$i]['attribute3'] = stripslashes($_POST['attribute3'.$i.'']);
  $bhpiece[$i]['attribute4'] = stripslashes($_POST['attribute4'.$i.'']);
  $bhpiece[$i]['displayStyle'] = stripslashes($_POST['displayStyle']);
  $bhpiece[$i]['seperator'] = stripslashes($_POST['seperator']);
  $bhpiece[$i]['showOnSite'] = stripslashes($_POST['showOnSite']);    
  } 
  foreach($bhpiece as $id => $v){
  $output .= $v['display']."`".$v['displayName']."`".$v['href']."`".$v['target']."`".$v['title']."`".$v['style']."`".$v['attribute']."`".$v['attribute1']."`".$v['attribute2']."`".$v['attribute3']."`".$v['attribute4']."`".$v['displayStyle']."`".$v['seperator']."`".$v['showOnSite']."\r\n";
  }
  $file = "../wp-content/plugins/customnav/links.txt";
  $fp = fopen($file, "w+");
  fwrite ($fp, "$output");
  fclose($fp); 
      echo '<SCRIPT LANGUAGE="JavaScript">
          <!-- Begin
          window.location = "'.get_settings('siteurl').'/wp-admin/options-general.php?page=customnav";
          //  End -->
          </script>';
  }
 }
//////////////////////////////////////////////////////////////////
function createFile(){
global $temp;
if(file_exists("../wp-content/plugins/customnav/links.txt")){

  $file = "../wp-content/plugins/customnav/links.txt";
  $fp = fopen($file, "r");
  if(filesize($file) >= 1){
    $links = fread($fp, filesize($file));
    fclose($fp);
  }

  $links = explode("\r\n",$links);
  array_pop($links);
  $temp = array();
  foreach($links as $id => $value){
    $value = explode("`",$value);
    $temp[$id];
    $temp[$id][0] = $value[0];
	$temp[$id][1] = $value[1];
	$temp[$id][2] = $value[2];
	$temp[$id][3] = $value[3];
	$temp[$id][4] = $value[4];
	$temp[$id][5] = $value[5];
	$temp[$id][6] = $value[6];
	$temp[$id][7] = $value[7];
	$temp[$id][8] = $value[8];
	$temp[$id][9] = $value[9];
	$temp[$id][10] = $value[10];
	$temp[$id][11] = $value[11];
	$temp[$id][12] = $value[12];
	$temp[$id][13] = $value[13];		
  }
 }else{
  $file = "../wp-content/plugins/customnav/links.txt";
  $fp = fopen($file, "x");
  fwrite($fp,"");
  fclose($fp);
 }
}
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
function cNAdminShowit(){
if(file_exists("../wp-content/plugins/customnav/links.txt")){
  $file = "../wp-content/plugins/customnav/links.txt";
  $fp = fopen($file, "r");
  if(filesize($file) >= 1){
    $links = fread($fp, filesize($file));
    fclose($fp);
  }
  $links = explode("\r\n",$links);
  
  foreach($links as $id => $v){
    $v = explode("`",$v);
	if($id ==(count($links)-1)){	
	$seperator = "";
	}else{
	$seperator = stripslashes($v['12']);
	}
	if($v['5'] != ""){
	$styleInclude = 'style="'.$v['5'].'"';
	}
	if($v['11'] == "vertical"){
	 if($v['0'] == true){
    echo '<a href="'.$v['2'].'" target="'.$v['3'].'" title="'.$v['4'].'" '.$styleInclude.' '.$v['6'].' '.$v['7'].' '.$v['8'].' '.$v['9'].' '.$v['10'].'>'.$v['1'].'</a><br />';	
	 } 
	}else{
	 if($v['0'] == true){	
    echo '<a href="'.$v['2'].'" target="'.$v['3'].'" title="'.$v['4'].'" '.$styleInclude.' '.$v['6'].' '.$v['7'].' '.$v['8'].' '.$v['9'].' '.$v['10'].'>'.$v['1'].'</a>'.$seperator.'';
     }   
	}
  }
 }else{ echo "Cannot locate a needed file, please de-activate plugin, and then re-activate to create the needed file.";}
}
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
function cNShowit(){
 if(file_exists("wp-content/plugins/customnav/links.txt")){
  $file = "wp-content/plugins/customnav/links.txt";
  $fp = fopen($file, "r");
  if(filesize($file) >= 1){
    $links = fread($fp, filesize($file));
    fclose($fp);
   }
   $links = explode("\r\n",$links);

   foreach($links as $id => $v){
    $v = explode("`",$v);
	if($id ==(count($links)-1)){
	$seperator = "";
	}else{
	$seperator = stripslashes($v['12']);
	}
	if($v['5'] != ""){
	$styleInclude = 'style="'.$v['5'].'"';
	}
	if($v['11'] == "vertical"){
	 if($v['0'] == true){
    echo '<a href="'.$v['2'].'" target="'.$v['3'].'" title="'.$v['4'].'" '.$styleInclude.' '.$v['6'].' '.$v['7'].' '.$v['8'].' '.$v['9'].' '.$v['10'].'>'.$v['1'].'</a><br />';	
	 } 
	}else{
	 if($v['0'] == true){	
    echo '<a href="'.$v['2'].'" target="'.$v['3'].'" title="'.$v['4'].'" '.$styleInclude.' '.$v['6'].' '.$v['7'].' '.$v['8'].' '.$v['9'].' '.$v['10'].'>'.$v['1'].'</a>'.$seperator.'';
     }   
	} 
   }
 }else{ echo "Cannot locate a needed file, please de-activate plugin, and then re-activate to create the needed file.";}
}
/////////////////////////////////////////////////////////////////////////////

/////////////////////////RESET///////////////////////////////////////////////
if(isset($_POST['reset']) and $_POST['reset'] == "Reset"){
  $bhpiece = array();
  $file = "../wp-content/plugins/customnav/links.txt";
  $fp = fopen($file, "w+");
  fwrite ($fp, "");
  fclose($fp);
    echo '<SCRIPT LANGUAGE="JavaScript">
          <!-- Begin
          window.location = "'.get_settings('siteurl').'/wp-admin/options-general.php?page=customnav";
          //  End -->
          </script>';
}
/////////////////////////////////////////////////////////////////////////////
?>