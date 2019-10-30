

function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-plus-circle fa-minus-circle');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);

function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-plus-circle fa-minus-circle');
}
$('#accordion_2').on('hidden.bs.collapse', toggleChevron);
$('#accordion_2').on('shown.bs.collapse', toggleChevron);

function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-plus-circle fa-minus-circle');
}
$('#accordion_3').on('hidden.bs.collapse', toggleChevron);
$('#accordion_3').on('shown.bs.collapse', toggleChevron);



/* Stat Counter */
$(document).ready(function() {
	$(".amount").each(function() {
		  $(this).data('count', parseInt($(this).html(), 10));
		  $(this).html('0');
		  count($(this));
		  speed: 50000 // how long it should take to count between the target numbers
		});
});

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);

function count($this){
	var current = parseInt($this.html(), 10);
	current = current + 1; /* Where 50 is increment */	
	$this.html(++current);
	if(current > $this.data('count')){
		$this.html($this.data('count'));
	} else {    
		setTimeout(function(){count($this)}, 20);
	}
}$().ready(function() {
		$=jQuery
       				if($(".form").length > 0)
			{
				$(".form").validate();	
			}
		 });

/* Stat Counter */		 
	
               $(document).ready(function(){
                $("a[rel^='prettyPhoto']").prettyPhoto(
				{social_tools:false}
				);
               });
    
