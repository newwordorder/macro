!function(t){
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
function n(n){
// var
var e=n.find(".marker"),a={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},o=new google.maps.Map(n[0],a);
// vars
// return
// add a markers reference
return o.markers=[],
// add markers
e.each(function(){r(t(this),o)}),
// center map
g(o),o}
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
    */function r(n,e){
// var
var a=new google.maps.LatLng(n.attr("data-lat"),n.attr("data-lng")),o=new google.maps.Marker({position:a,map:e});
// create marker
// if marker contains HTML, add it to an infoWindow
if(
// add to array
e.markers.push(o),n.html()){
// create info window
var t=new google.maps.InfoWindow({content:n.html()});
// show info window when marker is clicked
google.maps.event.addListener(o,"click",function(){t.open(e,o)})}}
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
    */function g(n){
// vars
var o=new google.maps.LatLngBounds;
// loop through all markers and create bounds
t.each(n.markers,function(n,e){var a=new google.maps.LatLng(e.position.lat(),e.position.lng());o.extend(a)}),
// only 1 marker?
1==n.markers.length?(
// set center of map
n.setCenter(o.getCenter()),n.setZoom(16)):
// fit to bounds
n.fitBounds(o)}
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
var e=null;t(document).ready(function(){t(".acf-map").each(function(){
// create map
e=n(t(this))})})}(jQuery);