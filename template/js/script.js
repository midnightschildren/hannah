  // smart resize - http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/
  (function($,sr){

    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
        var timeout;

        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null; 
            };

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100);
        };
    }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
 
  })(jQuery,'smartresize');


    // Function to slabtext the H2 headings

    $(window).load(function() {
         $("h2").slabText({
            "precision":3
        });
    });



$("document").ready(function(){

	$("#click").click(function(event) {
		event.preventDefault()
		$("#right-column").load("skinrehab.php");
		window.scrollTo(0, 0);
	})
	
	$("#cleansingfacial").click(function(event) {
		event.preventDefault()
		$("#right-column").load("cleansingfacial.php");
		window.scrollTo(0, 0);
	})
	
	$("#antioxidantfacial").click(function(event) {
		event.preventDefault()
		$("#right-column").load("antioxidantfacial.php");
		window.scrollTo(0, 0);
	})
	
	
	$("#microdermabrasion").click(function(event) {
		event.preventDefault()
		$("#right-column").load("microdermabrasion.php");
		window.scrollTo(0, 0);
	})
	
	$("#microdermabrasionfacial").click(function(event) {
		event.preventDefault()
		$("#right-column").load("microdermabrasionfacial.php");
		window.scrollTo(0, 0);
	})
	
	$("#deepskinion").click(function(event) {
		event.preventDefault()
		$("#right-column").load("deepskinion.php");
		window.scrollTo(0, 0);
	})
	
	$("#glycolicfacial").click(function(event) {
		event.preventDefault()
		$("#right-column").load("glycolicfacial.php");
		window.scrollTo(0, 0);
	})
	
	$("#glycolicacidpeel").click(function(event) {
		event.preventDefault()
		$("#right-column").load("glycolicacidpeel.php");
		window.scrollTo(0, 0);
	})
	
	$("#jessnerspeel").click(function(event) {
		event.preventDefault()
		$("#right-column").load("jessnerspeel.php");
		window.scrollTo(0, 0);
	})

	$("#tcapeel").click(function(event) {
		event.preventDefault()
		$("#right-column").load("tcapeel.php");
		window.scrollTo(0, 0);
	})
	
	$("#hairremoval").click(function(event) {
		event.preventDefault()
		$("#right-column").load("hairremoval.php");
		window.scrollTo(0, 0);
	})
	
		$("#totalwellness").click(function(event) {
		event.preventDefault()
		$("#right-column").load("totalwellness.php");
		window.scrollTo(0, 0);
	})
	
	$("#backtreatment").click(function(event) {
		event.preventDefault()
		$("#right-column").load("backtreatment.php");
		window.scrollTo(0, 0);
	})
	
		$("#custommassage").click(function(event) {
		event.preventDefault()
		$("#right-column").load("custommassage.php");
		window.scrollTo(0, 0);
	})
	
});
