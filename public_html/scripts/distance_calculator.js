// JavaScript Document
var gdir;
var ih = '';
function load() {
	if (GBrowserIsCompatible()){
    	gdir = new google.maps.Directions();
        google.maps.Event.addListener(gdir, "load", handleLoad);
        gdir.load("from: "+from+" to: "+to+"", {getSteps: true});
}}
function handleLoad(){
	var calculated_miles = gdir.getDistance().html;
	calculated_miles = calculated_miles.replace("&nbsp;mi","");
	document.getElementById("totalMiles").innerHTML= '<input value="'+calculated_miles+'" type="text" name="miles1" id="miles1" class="required"/><input type="button" value="Calculate"  onclick="calculate_distance(\'cal_miles\',\'addr1\',\'addr2\');" ><span style="color:#FF0000"> * </span>';
}
function get_miles(){
	return document.getElementById("totalMiles").innerHTML;
}