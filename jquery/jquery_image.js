// JavaScript Document
	$(function() {
        var stack = [];
        // preload images into an array
        for (var i = 1; i < 4; i++) {
            var img = new Image(200,200);
            img.src = '../images/acer' + i + '.jpg';
            if (img.complete)
                stack.push(img);
            else 
                $(img).bind('load', function() {
                    stack.push(this);
                });
        } 
        // start slideshow
        $('#slideshow').cycle({
            timeout:  2000,
            before:   onBefore
        });
    
        // add images to slideshow
        function onBefore(curr, next, opts) {
            if (opts.addSlide) // <-- important!
                while(stack.length)
                    opts.addSlide(stack.pop()); 
        };
    });
    // second jquery
    $(function() {
        // start slideshow
        $('#slideshow2').cycle({
            fx:      'curtainX',
            timeout:  2000,
            before:   onBefore
        });
    
        var slidesAdded = false;
        
        function onBefore(curr, next, opts) {
            // make sure we don't call addSlide before it is defined
            if (!opts.addSlide || slidesAdded)
                return;
            // add slides for images 3 - 8
            // slides can be a DOM element, a jQuery object, or a string
            for (var i=1; i < 5; i++)
                opts.addSlide('<img src="../images/hp'+i+'.jpg" width="300" height="300" />');
    
            slidesAdded = true;
        };
    });
    
    // Third jquery
    $(document).ready(function(){
        $("#row2_con_right_image").cycle({fx:'shuffle',
        delay:  -999900
    });
    });
    
	//Fouth jquery
	$(document).ready(function(){
    		$("#foth").cycle({fx:'scrollDown'});
    	});