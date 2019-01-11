!function(r){
/*
    *  new_map
    *
    *  This function will render a Google Map onto the selected jQuery element
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	4.3.0
    *
    *  @param	$el (jQuery element)
    *  @return	n/a
    */
function e(e){
// var
var t=e.find(".marker"),l={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP,disableDefaultUI:!0,styles:[{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:19}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"},{lightness:17}]}]},o=new google.maps.Map(e[0],l);
// vars
// return
// add a markers reference
return o.markers=[],
// add markers
t.each(function(){s(r(this),o)}),
// center map
a(o),o}
/*
    *  add_marker
    *
    *  This function will add a marker to the selected Google Map
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	4.3.0
    *
    *  @param	$marker (jQuery element)
    *  @param	map (Google Map object)
    *  @return	n/a
    */function s(e,t){
// var
var l=new google.maps.LatLng(e.attr("data-lat"),e.attr("data-lng")),o=new google.maps.Marker({position:l,map:t});
// create marker
// if marker contains HTML, add it to an infoWindow
if(
// add to array
t.markers.push(o),e.html()){
// create info window
var r=new google.maps.InfoWindow({content:e.html()});
// show info window when marker is clicked
google.maps.event.addListener(o,"click",function(){r.open(t,o)})}}
/*
    *  center_map
    *
    *  This function will center the map, showing all markers attached to this map
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	4.3.0
    *
    *  @param	map (Google Map object)
    *  @return	n/a
    */function a(e){
// vars
var o=new google.maps.LatLngBounds;
// loop through all markers and create bounds
r.each(e.markers,function(e,t){var l=new google.maps.LatLng(t.position.lat(),t.position.lng());o.extend(l)}),
// only 1 marker?
1==e.markers.length?(
// set center of map
e.setCenter(o.getCenter()),e.setZoom(16)):
// fit to bounds
e.fitBounds(o)}
/*
    *  document ready
    *
    *  This function will render each map when the document is ready (page has loaded)
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	5.0.0
    *
    *  @param	n/a
    *  @return	n/a
    */
// global var
var t=null;r(document).ready(function(){r(".acf-map").each(function(){
// create map
t=e(r(this))})})}(jQuery);