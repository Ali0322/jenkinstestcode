<?php 
class jqgrid
{
	// grid parameters

	var $options = array();	

	// select query to show data

	var $select_command;	

	var $export_command;	

	// db table name used in add,update,delete

	var $table;	

	var $today;	

	// allowed operation on grid

	var $actions;	

	// db connection identifier - not used now, @todo: need to integrate adodb lib

	var $con;	

	// callback events

	var $events;	

	/**

	 * Contructor to set default params

	*/

	function jqgrid($con = null)

	{

		$grid["datatype"] = "json";

		$grid["rowNum"] = 10;

		$grid["width"] = 950;

		$grid["height"] = 250;

		$grid["rowList"] = array(10,20,30);

		$grid["viewrecords"] = true;

		$grid["scrollrows"] = true;

		$grid["url"] = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

		

		// pass subgrid params if exist

		$s = (strstr($grid["url"], "?")) ? "&":"?";

		if ($_REQUEST["rowid"] && $_REQUEST["subgrid"])

			$grid["url"] .= $s."rowid=".$_REQUEST["rowid"]."&subgrid=".$_REQUEST["subgrid"];



		$grid["editurl"] = $grid["url"];

		$grid["cellurl"] = $grid["url"];

		

		// virtual scrolling, for big datasets

		$grid["scroll"] = 0;

		$grid["sortable"] = true;



		$this->options = $grid;

		$this->con = $con;		

		$this->actions["showhidecolumns"] = false;

	}



	/**

	 * Helping function to parse array

	 */

	private function strip($value)

	{

		if(get_magic_quotes_gpc() != 0)

		{

			if(is_array($value))  

				if ( array_is_associative($value) )

				{

					foreach( $value as $k=>$v)

						$tmp_val[$k] = stripslashes($v);

					$value = $tmp_val; 

				}				

				else  

					for($j = 0; $j < sizeof($value); $j++)

						$value[$j] = stripslashes($value[$j]);

			else

				$value = stripslashes($value);

		}

		return $value;

	}	

	

	/**

	 * Advance search where clause maker

	 */

	private function construct_where($s)

	{

		$qwery = "";

		//['eq','ne','lt','le','gt','ge','bw','bn','in','ni','ew','en','cn','nc']

		$qopers = array(

					  'eq'=>" = ",

					  'ne'=>" <> ",

					  'lt'=>" < ",

					  'le'=>" <= ",

					  'gt'=>" > ",

					  'ge'=>" >= ",

					  'bw'=>" LIKE ",

					  'bn'=>" NOT LIKE ",

					  'in'=>" IN ",

					  'ni'=>" NOT IN ",

					  'ew'=>" LIKE ",

					  'en'=>" NOT LIKE ",

					  'cn'=>" LIKE " ,

					  'nc'=>" NOT LIKE " );

		if ($s) {

			$jsona = json_decode($s,true);

			if(is_array($jsona))

			{

				$gopr = $jsona['groupOp'];

				$rules = $jsona['rules'];

				$i =0;

				foreach($rules as $key=>$val) 

				{

					$field = str_replace("::",".",$val['field']);

					$op = $val['op'];

					$v = $val['data'];

					if(isset($v) && isset($op))

					{

						$i++;

						// ToSql in this case is absolutley needed

						$v = $this->to_sql($field,$op,$v);

			

						if ($i == 1) $qwery = " AND ";

						else $qwery .= " " .$gopr." ";

						switch ($op) {

							// in need other thing

							case 'in' :

							case 'ni' :

								$qwery .= $field.$qopers[$op]." (".$v.")";

								break;

							default:

								$qwery .= $field.$qopers[$op].$v;

						}

					}

				}

			}

		}

		return $qwery;

		

	}	



	/**

	 * Advance search, make search operator sql compatible

	 */

	private function to_sql($field, $oper, $val) 

	{

		//mysql_real_escape_string is better

		if($oper=='bw' || $oper=='bn') return "'" . addslashes($val) . "%'";

		else if ($oper=='ew' || $oper=='en') return "'%" . addcslashes($val) . "'";

		else if ($oper=='cn' || $oper=='nc') return "'%" . addslashes($val) . "%'";

		else return "'" . addslashes($val) . "'";

	}

	

	/**

	 * Setter for event handler

	 */

	function set_events($arr)

	{

		$this->events = $arr;

	}

	

	/**

	 * Setter for allowed actions (add/edit/del/autofilter etc)

	 */

	function set_actions($arr)

	{

		if (empty($arr))

			$arr = array();		

			

		if (empty($this->actions))

			$this->actions = array();

			

		$this->actions = array_merge($this->actions,$arr);

	}

	

	/**

	 * Setter for grid customization options

	 */

	function set_options($options)

	{

		if (empty($arr))

			$arr = array();



		if (empty($this->options))

			$this->options = array();



		$this->options = array_merge($this->options,$options);

	}

	

	/**

	 * Auto generate columns for grid based on SQL / table

	 */

	function set_columns($cols = null)

	{

		if (!$this->table && !$this->select_command) die("Please specify tablename or select command");

		

		// if only table is defined, make select sql for it

		if (!$this->select_command && $this->table)

			$this->select_command = "SELECT * FROM ".$this->table;



		// add where clause if not present -- fix for search feature

		if (stristr($this->select_command,"WHERE") === false)

		{

			// place group by at proper position in sql

			if (($p = stripos($this->select_command,"GROUP BY")) !== false)

			{

				$start = substr($this->select_command,0,$p);

				$end = substr($this->select_command,$p);

				$this->select_command = $start." WHERE 1=1 ".$end;

			}

			else

				$this->select_command .= " WHERE 1=1";

		}



		// make sql on single line, with no extra spaces

		$this->select_command = preg_replace("/(\r|\n)/"," ",$this->select_command);

		$this->select_command = preg_replace("/[ ]+/"," ",$this->select_command);

		

		// get sql column names by running nulled sql

		$sql = $this->select_command . " LIMIT 0";

		# print_r($sql);

		

		$result = mysql_query($sql) or die("Couldn't execute query. ".mysql_error());

		$numfields = mysql_num_fields($result);

		for ($i=0; $i < $numfields; $i++) // Header

		{ 

			$f[] = mysql_field_name($result, $i);

		}



		// if grid columns not defined, make from sql

		if (!$cols)

		{

			foreach($f as $c)

			{

				$col["title"] = ucwords(str_replace("_"," ",$c));

				$col["name"] = $c;

				$col["index"] = $c;

				$col["editable"] = true;

				$col["editoptions"] = array("size"=>20);

				$g_cols[] = $col;

			}

		}

		

		if (!$cols)

			$cols = $g_cols;

			

		// index attr is must for jqgrid, so add it in array

		for($i=0;$i<count($cols);$i++)

		{

			$cols[$i]["name"] = str_replace(".","::",$cols[$i]["name"]);

			$cols[$i]["index"] = $cols[$i]["name"];

		}

			

		//pr($cols);

		$this->options["colModel"] = $cols;

		foreach($cols as $c)

		{

			$this->options["colNames"][] = $c["title"];		

		}

	}

	

	/**

	 * Generate JSON array for grid rendering

	 * @param $grid_id Unique ID for grid

	 */

	function render($grid_id)

	{

		if ($_REQUEST["subgrid"])

			$grid_id .= "_".$_REQUEST["subgrid"];

			

		// generate column names, if not defined

		if (!$this->options["colNames"])

			$this->set_columns();

		

		if ($op = $_POST['oper'])

		{

			$data = $_POST;

			$id = $data['id'];

			$pk_field = $this->options["colModel"][0]["index"];

			

			// handle grid operations of CRUD

			switch($op)

			{

				case "add":

					unset($data['id']);

					unset($data['oper']);

					

					$update_str = array();

					$param = array();

					foreach($data as $k=>$v)

					{

						// remove any table alias from query - obseleted

						if (strstr($k,"::") !== false)

							list($tmp,$k) = explode("::",$k);

						$k = addslashes($k);

						$v = addslashes($v);

						$update_str[] = "$k='$v'";

						$param[$k] = $v;

					}

					

					$update_str = "SET ".implode(",",$update_str);



					// custom onupdate event execution

					if (!empty($this->events["on_insert"]))

					{

						$func = $this->events["on_insert"][0];

						$obj = $this->events["on_insert"][1];

						$continue = $this->events["on_insert"][2];

						

						if ($obj)

							call_user_method($func,$obj,array($pk_field => $id, "params" => $param));

						else

							call_user_func($func,array($pk_field => $id, "params" => $param));

						

						if (!$continue)

							break;

					}

					

					$sql = "INSERT INTO {$this->table} $update_str";

					mysql_query($sql) or die("Couldn't execute query. ".mysql_error());;

					break;

					

				case "edit":

					//pr($_POST);

					unset($data['id']);

					unset($data['oper']);

					

					$update_str = array();

					$param = array();

					foreach($data as $k=>$v)

					{

						// remove any table alias from query - obseleted

						if (strstr($k,"::") !== false)

							list($tmp,$k) = explode("::",$k);

							

						$k = addslashes($k);

						$v = addslashes($v);

						$update_str[] = "$k='$v'";

						$param[$k] = $v;

					}

					

					$update_str = "SET ".implode(",",$update_str);

					

					if (strstr($pk_field,"::") !== false)

					{

						$pk_field = explode("::",$pk_field);

						$pk_field = $pk_field[1];

					}



					// custom onupdate event execution

					if (!empty($this->events["on_update"]))

					{

						$func = $this->events["on_update"][0];

						$obj = $this->events["on_update"][1];

						$continue = $this->events["on_update"][2];

						

						if ($obj)

							call_user_method($func,$obj,array($pk_field => $id, "params" => $param));

						else

							call_user_func($func,array($pk_field => $id, "params" => $param));

						

						if (!$continue)

							break;

					}

					

					$sql = "UPDATE {$this->table} $update_str WHERE $pk_field = $id";

					# print_r($sql);

					mysql_query($sql) or die("Couldn't execute query. ".mysql_error());;

				break;			

				

				case "del":

					

					// obseleted

					if (strstr($pk_field,"::") !== false)

					{

						$pk_field = explode("::",$pk_field);

						$pk_field = $pk_field[1];

					}

					

					// custom onupdate event execution

					if (!empty($this->events["on_delete"]))

					{

						$func = $this->events["on_delete"][0];

						$obj = $this->events["on_delete"][1];

						$continue = $this->events["on_delete"][2];

						if ($obj)

							call_user_method($func,$obj,array($pk_field => $id));

						else

							call_user_func($func,array($pk_field => $id));

						

						if (!$continue)

							break;

					}

					

					$sql = "DELETE FROM {$this->table} WHERE $pk_field IN ($id)";

					mysql_query($sql) or die("Couldn't execute query. ".mysql_error());;

				break;

			}

			

			die;

		}

		

		

		// apply search conditions (where clause)

		$wh = "";

		$searchOn = $this->strip($_REQUEST['_search']);

		if($searchOn=='true') 

		{

			$fld = $this->strip($_REQUEST['searchField']);

			

			$cols = array();

			foreach($this->options["colModel"] as $col)

				$cols[] = $col["index"];



			// quick search bar

			if (!$fld)

			{

				$searchstr = $this->strip($_REQUEST['filters']);

				$wh = $this->construct_where($searchstr);

			}

			// search popup form, simple one -- not used anymore

			else

			{

				if(in_array($fld,$cols)) 

				{	

					$fldata = $this->strip($_REQUEST['searchString']);

					$foper = $this->strip($_REQUEST['searchOper']);

					// costruct where

					$wh .= " AND ".$fld;

					switch ($foper) {					

						case "eq":

							if(is_numeric($fldata)) {

								$wh .= " = ".$fldata;

							} else {

								$wh .= " = '".$fldata."'";

							}

							break;

						case "ne":

							if(is_numeric($fldata)) {

								$wh .= " <> ".$fldata;

							} else {

								$wh .= " <> '".$fldata."'";

							}

							break;

						case "lt":

							if(is_numeric($fldata)) {

								$wh .= " < ".$fldata;

							} else {

								$wh .= " < '".$fldata."'";

							}

							break;

						case "le":

							if(is_numeric($fldata)) {

								$wh .= " <= ".$fldata;

							} else {

								$wh .= " <= '".$fldata."'";

							}

							break;

						case "gt":

							if(is_numeric($fldata)) {

								$wh .= " > ".$fldata;

							} else {

								$wh .= " > '".$fldata."'";

							}

							break;

						case "ge":

							if(is_numeric($fldata)) {

								$wh .= " >= ".$fldata;

							} else {

								$wh .= " >= '".$fldata."'";

							}

							break;

						case "ew":

							$wh .= " LIKE '%".$fldata."'";

							break;

						case "en":

							$wh .= " NOT LIKE '%".$fldata."'";

							break;

						case "cn":

							$wh .= " LIKE '%".$fldata."%'";

							break;

						case "nc":

							$wh .= " NOT LIKE '%".$fldata."%'";

							break;

						case "in":

							$wh .= " IN (".$fldata.")";

							break;

						case "ni":

							$wh .= " NOT IN (".$fldata.")";

							break;

						case "bw":

						default:

							$fldata .= "%";

							$wh .= " LIKE '".$fldata."'";

							break;

					}

				}

			}

		}		

		

		// generate main json

		if ($_GET['page'])

		{

			$page = $_GET['page']; // get the requested page

			$limit = $_GET['rows']; // get how many rows we want to have into the grid

			$sidx = $_GET['sidx']; // get index row - i.e. user click to sort

			$sord = $_GET['sord']; // get the direction

			

			if(!$sidx) $sidx = 1;

			if(!$limit) $limit = 20;



			$sidx = str_replace("::",".",$sidx);

			

			// if export option is requested

			if ($this->actions["export"] !== false && $_GET["export"])

			{

				$arr = array();



				if (($p = stripos($this->export_command,"GROUP BY")) !== false)

				{

					$start = substr($this->export_command,0,$p);

					$end = substr($this->export_command,$p);

					$SQL = $start.$wh.$end." ORDER BY $sidx $sord";

				}

				else

					$SQL = $this->export_command.$wh." ORDER BY $sidx $sord";

					

				$result = mysql_query( $SQL ) or die("Couldn't execute query. ".mysql_error());	

				

				//$arr[] = $this->options["colNames"];

				$arr[] = array('Trip Code','Client','Account','Trip Date','Telephone','Pick Location','Pick Address','Drop Location','Drop Address','Pickup Time','Drop Time','Miles','Driver','Remarks');

				while($row = mysql_fetch_array($result,MYSQL_ASSOC))

				{

					$arr[] = $row;

				}

				

				if (!$this->options["export"]["filename"])

					$this->options["export"]["filename"] = $grid_id;

					

				if (!$this->options["export"]["sheetname"])

					$this->options["export"]["sheetname"] = ucwords($grid_id). " Sheet";

					

				include("php-excel.class.php");

				$xls = new Excel_XML('UTF-8', false, $this->options["export"]["sheetname"]);

				$xls->addArray($arr);

				$xls->generateXML($this->options["export"]["filename"]);

				die;

			}

			

			// make count query

			if (($p = stripos($this->select_command,"GROUP BY")) !== false)

			{

				$sql_count = preg_replace("/SELECT (.*) FROM/i","SELECT 1 as c FROM",$this->select_command);

				$p = stripos($sql_count,"GROUP BY");

				$start_q = substr($sql_count,0,$p);

				$end_1 = substr($sql_count,$p);

				$sql_count = "SELECT count(*) as c FROM ($start_q $wh $end_q) as o";

			}

			else

			{

				$sql_count = $this->select_command.$wh;

				$sql_count = "SELECT count(*) as c FROM (".$sql_count.") as table_count";

			}

			# print_r($sql_count);

			

			$result = mysql_query($sql_count) or die("Couldn't execute query. ".mysql_error());;

			$row = mysql_fetch_array($result,MYSQL_ASSOC);

			$count = $row['c'];



			if( $count > 0 ) {

				$total_pages = ceil($count/$limit);

			} else {

				$total_pages = 0;

			}



			if ($page > $total_pages) $page=$total_pages;

			$start = $limit*$page - $limit; // do not put $limit*($page - 1)

			if ($start<0) $start = 0;

	

			$responce->page = $page;

			$responce->total = $total_pages;

			$responce->records = $count;



			if (($p = stripos($this->select_command,"GROUP BY")) !== false)

			{

				$start_q = substr($this->select_command,0,$p);

				$end_q = substr($this->select_command,$p);

				$SQL = "$start_q $wh $end_q ORDER BY $sidx $sord LIMIT $start, $limit";

			}

			else

				$SQL = $this->select_command.$wh." ORDER BY $sidx $sord LIMIT $start, $limit";

			

			# print_r($SQL);

			

			$result = mysql_query( $SQL ) or die("Couldn't execute query. ".mysql_error());	

			while($row = mysql_fetch_array($result,MYSQL_ASSOC))

			{

				// apply php level formatter for image url 30.12.10

				foreach($this->options["colModel"] as $c)

				{

					if ($c["formatter"] == "image")

					{

						$attr = array();

						foreach($c["formatoptions"] as $k=>$v)

							$attr[] = "$k='$v'";

						

						$attr = implode(" ",$attr);

						$row[str_replace(".","::",$c["name"])] = "<img $attr src='".$row[str_replace(".","::",$c["name"])] ."'>";

					}

				}

				

				$responce->rows[] = $row;

			}

			

			echo json_encode($responce);

			die;

		}		

		

		// few overides - pagination fixes

		$this->options["pager"] = '#'.$grid_id."_pager";

		$this->options["jsonReader"] = array("repeatitems" => false, "id" => "0");



		// allow/disallow edit,del operations

		if ($this->actions["edit"] === false || $this->actions["delete"] === false || $this->options["cellEdit"] === false)

			$this->actions["rowactions"] = false;

			

		if ($this->actions["rowactions"] !== false)

		{

			// CRUD operation column

			$this->options["colNames"][] = "Actions";

			

			$f = false;

			foreach($this->options["colModel"] as $c)

			{

				if (!empty($c["width"]))

				{

					$f = true;

					break;

				}

			}

			

			// width adjustment for row actions column

			if ($f)

				$this->options["colModel"][] = array("name"=>"act", "align"=>"center", "index"=>"act", "width"=>"30", "sortable"=>false, "search"=>false);

			else

				$this->options["colModel"][] = array("name"=>"act", "align"=>"center", "index"=>"act", "sortable"=>false, "search"=>false);

		}		

		

		$out = json_encode($this->options);

		$out = substr($out,0,strlen($out)-1);



		// create Edit/Delete - Save/Cancel column in grid

		if ($this->actions["rowactions"] !== false)

		{

			$out .= ",'gridComplete': function(){

						var ids = jQuery('#$grid_id').jqGrid('getDataIDs');

						for(var i=0;i < ids.length;i++){

							var cl = ids[i];

							

							de = '<a title=\"Delete this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$grid_id\').delGridRow('+cl+'); \">Delete</a>';

							

							se = ' <a title=\"Save this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$grid_id\').saveRow('+cl+'); jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Save</a>'; 

							ce = ' | <a title=\"Restore this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$grid_id\').restoreRow('+cl+'); jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Cancel</a>'; 

							

							jQuery('#$grid_id').jqGrid('setRowData',ids[i],{act:'<span id=\"edit_row_'+cl+'\">'+de+'</span>'+'<span style=display:none id=\"save_row_'+cl+'\">'+se+ce+'</span>'});

						}	

					}";

					

			/*

			// theme buttons -- not looking good

			$out .= ",'gridComplete': function(){

						var ids = jQuery('#$grid_id').jqGrid('getDataIDs');

						for(var i=0;i < ids.length;i++){

							var cl = ids[i];

							be = ' <a style=\"padding:0 0.5em;padding-left:1.6em;font-weight:normal;\" class=\"fm-button fm-button-icon-left ui-state-default ui-corner-all\" title=\"Edit this row\" onclick=\"jQuery(\'#$grid_id\').editRow('+cl+',true); jQuery(this).parent().hide(); jQuery(this).parent().next().show(); \">Edit <span class=\"ui-icon ui-icon-pencil\"></span></a>'; 

							de = ' <a style=\"padding:0 0.5em;padding-left:1.6em;font-weight:normal;\" class=\"fm-button fm-button-icon-left ui-state-default ui-corner-all\" title=\"Delete this row\" onclick=\"jQuery(\'#$grid_id\').delRowData('+cl+'); \">Delete <span class=\"ui-icon ui-icon-close\"></span></a>';



							se = ' <a style=\"padding:0 0.5em;padding-left:1.6em;font-weight:normal;\" class=\"fm-button fm-button-icon-left ui-state-default ui-corner-all\" title=\"Save this row\" onclick=\"jQuery(\'#$grid_id\').saveRow('+cl+'); jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Save <span class=\"ui-icon ui-icon-disk\"></span></a>'; 

							ce = ' <a style=\"padding:0 0.5em;padding-left:1.6em;font-weight:normal;\" class=\"fm-button fm-button-icon-left ui-state-default ui-corner-all\" title=\"Restore this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$grid_id\').restoreRow('+cl+'); jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Cancel <span class=\"ui-icon ui-icon-cancel\"></span></a>'; 

							

							jQuery('#$grid_id').jqGrid('setRowData',ids[i],{act:'<div style=\"white-space:nowrap;float:left\" id=\"edit_row_'+cl+'\">'+be+de+'</div>'+'<div style=\"white-space:nowrap;float:left;display:none;\" id=\"save_row_'+cl+'\">'+se+ce+'</div>'});

						}	

					}";

			*/

		}					

		

		// double click editing option

		if ($this->actions["edit"] !== false && $this->options["cellEdit"] !== true)

		{/*

			$out .= ",'ondblClickRow':function(id)

						{

							if(id && id!==lastSel){ 

								jQuery('#$grid_id').restoreRow(lastSel); 

								

								// disabled previously edit icons

								jQuery('#edit_row_'+lastSel).show();

								jQuery('#save_row_'+lastSel).hide();								

								

								lastSel=id; 								

							}

							

							jQuery('#$grid_id').editRow(id, true, function(){}, function(){

																					jQuery('#edit_row_'+id).show();

																					jQuery('#save_row_'+id).hide();

																					return true;

																				},null,null,null,null,

																				function(){

																					jQuery('#edit_row_'+id).show();

																					jQuery('#save_row_'+id).hide();

																					return true;

																				}

														); 

							

							jQuery('#edit_row_'+id).hide();

							jQuery('#save_row_'+id).show();

						}";

		*/}

		

		// if subgrid is there, enable subgrid feature

		if ($this->options["subgridurl"] != '') 

		{

			// we pass two parameters

			// subgrid_id is a id of the div tag created within a table

			// the row_id is the id of the row

			// If we want to pass additional parameters to the url we can use

			// the method getRowData(row_id) - which returns associative array in type name-value

			// here we can easy construct the following

			

			$pass_params = "false";

			if (!empty($this->options["subgridparams"]))

				$pass_params = "true";

				

			$out .= ",'subGridRowExpanded': function(subgridid, id) 

											{ 

												var data = {subgrid:subgridid, rowid:id};

												

												if('$pass_params' == 'true') {

													var anm= '".$this->options["subgridparams"]."';

													anm = anm.split(',');

													var rd = jQuery('#".$grid_id."').jqGrid('getRowData', id);

													if(rd) {

														for(var i=0; i<anm.length; i++) {

															if(rd[anm[i]]) {

																data[anm[i]] = rd[anm[i]];

															}

														}

													}

												}

												jQuery('#'+jQuery.jgrid.jqID(subgridid)).load('".$this->options["subgridurl"]."',data);

											}";

		}

		

		$out .= "}";



		// Geneate HTML/JS code

		ob_start();

		?>

			<table id="<?php echo $grid_id?>"></table> 

			<div id="<?php echo $grid_id."_pager"?>"></div> 

			<script>

			jQuery(document).ready(function(){

				<?php echo $this->render_js($grid_id,$out);?>

			});	

			</script>	

		<?php

		return ob_get_clean();

	}

	

	/**

	 * JS code related to grid rendering

	 */

	function render_js($grid_id,$out)

	{

	?>

		var lastSel;

		var grid_<?php echo $grid_id?> = jQuery("#<?php echo $grid_id?>").jqGrid(<?php echo $out?>);

		jQuery("#<?php echo $grid_id?>").jqGrid('navGrid','#<?php echo $grid_id."_pager"?>',

				{

					edit: <?php echo ($this->actions["edit"] === false)?"false":"true"?>,

					add: <?php echo ($this->actions["add"] === false)?"false":"true"?>,

					del: <?php echo ($this->actions["delete"] === false)?"false":"true"?>,

					search: <?php echo "false"?>

				},

				{

					recreateForm: true,

					beforeShowForm: function(formid) { $("#tr_driver2", formid).hide();

					$("#tr_pck_add2", formid).hide();

					$("#tr_drp_add2", formid).hide();

					$("#tr_pck_time2", formid).hide(); $("#tr_drp_time2", formid).hide();

					$("#tr_drp_time", formid).hide();

					$("#tr_trip_miles", formid).hide();

					$("#tr_cisid", formid).hide();					

					},

					closeAfterAdd: true,

    				closeAfterEdit: true

				},{

					recreateForm: true,

                    beforeShowForm: function(form) {

						$("#tr_drp_time", form).hide();

						$("#tr_trip_miles", form).hide();

						$("#tr_drp_time2", form).hide();												

                    	var nameColumnField2 = $('#tr_trip_remarks', form);

                        $('<tr class="FormData" id="tr_AddInfo3"><td class="CaptionTD ui-widget-content"><b>One Way:</b></td></tr>').insertAfter (nameColumnField2);

						var nameColumnField3 = $('#tr_drp_time', form);

                        $('<tr class="FormData" id="tr_AddInfo4"><td class="CaptionTD ui-widget-content"><b>Round Trip:</b></td></tr>').insertAfter (nameColumnField3);

                    },

					closeAfterAdd: true,

    				closeAfterEdit: true

				},{},{multipleSearch:<?php echo ($this->actions["search"] == "advance")?"true":"false"?>}

				);

		

		<?php if ($this->actions["autofilter"] !== false) { ?>

		// auto filter

		jQuery("#<?php echo $grid_id?>").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false}); 

		/*

		// toggle autofilter button

		jQuery("#<?php echo $grid_id?>").jqGrid('navButtonAdd',"#<?php echo $grid_id."_pager"?>",{caption:"Auto Filter",title:"Toggle Search Toolbar", buttonicon :'ui-icon-pin-s',

			onClickButton:function(){

				grid_<?php echo $grid_id?>[0].toggleToolbar();

			} 

		});

		*/

		<?php } ?>



		<?php if ($this->actions["showhidecolumns"] !== false) { ?>

		// show/hide columns

		jQuery("#<?php echo $grid_id?>").jqGrid('navButtonAdd',"#<?php echo $grid_id."_pager"?>",{caption:"Columns",title:"Hide/Show Columns", buttonicon :'ui-icon-note',

			onClickButton:function(){

				jQuery("#<?php echo $grid_id?>").jqGrid('setColumns'); 

			} 

		});

		<?php } ?>

		

		<?php if ($this->actions["export"] !== false) { ?>

		// Export to excel

		jQuery("#<?php echo $grid_id?>").jqGrid('navButtonAdd',"#<?php echo $grid_id."_pager"?>",{caption:"Export",title:"Export to Excel", buttonicon :'ui-icon-extlink',

			onClickButton:function(){

				if ("<?php echo $this->options["url"]?>".indexOf("?") != -1)

					location.href = "<?php echo $this->options["url"]?>" + "&export=1&page=1";

				else

					location.href = "<?php echo $this->options["url"]?>" + "?export=1&page=1";

			} 

		});

		<?php } ?>

		

		jQuery("#<?php echo $grid_id?>").jqGrid('gridResize',{});

	<?php
	}	
}
?>