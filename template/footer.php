<footer class="grid-whole">
<div class="grid-2 m-grid-1 s-hidden">&nbsp;</div>
<div class="grid-8 m-grid-10 s-grid-12 s-padded-sides">
<h2 class="slabtextdone"><span class="slabtext copyr">Content copyright 2009-2013. Hannah Sowd, L.M.T. All rights reserved</span></h2>
</div>
<div class="grid-2 m-grid-1 s-hidden">&nbsp;</div>

</footer>

</div>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/libs/jquery.slabtext.min.js"></script>
<script>
  
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

</script>
<script>
    // Function to slabtext the H1 headings
    function slabTextHeadlines() {
        $("h2").slabText({
            // Don't slabtext the headers if the viewport is under 380px
            "viewportBreakpoint":300
        });
    };
    
    // Called one second after the onload event for the demo (as I'm hacking the
    // fontface load event a bit here)

    // Please do not do this in a production environment - you should really use
    // google WebFont loader events (or something similar) for better control
    $(window).load(function() {
        // So, to recap... don't actually do this, it's nasty!
        setTimeout(slabTextHeadlines, 1000);
    });
  </script>  

<script src="template/js/plugins.js"></script>
<script src="template/js/script.js"></script>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>