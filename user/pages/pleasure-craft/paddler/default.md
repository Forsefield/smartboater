---
title: Paddler
process:
    twig: true
    markdown: false
routable: true
visible: true
---

{# Markdown has been disabled on this article #}

<p>Select the type of pleasure craft that you paddle.</p>
<div class="pc-type-buttons">
	<a class="button" id="canoe" href="#canoe">Canoe</a>  <a class="button" id="kayak" href="#kayak">Kayak</a>
</div>
<div class="pc-content"><div id="loading-image" class="loader" style="display:none;">Loading...</div></div>

<script type="text/javascript">
	$("#canoe").click(function() {
        $('#loading-image').show();
    	$("#kayak").removeClass('active');
    	$(this).addClass('active');
        $.ajax({
            url: "/pleasure-craft/paddler/canoe.html",
            type: "GET",
            cache: false,
            success: function(html) {
                $(".pc-content").html(html);
            },
            complete: function(){
                $('#loading-image').hide();
            }
        });
        $.ajax({
            url: "/signalling-aids/signalling-items.html",
            type: "GET",
            cache: false,
            success: function(html) {
                $(".signalling-content").html(html);
            }
        });
    });
    
    $("#kayak").click(function() {
        $('#loading-image').show();
    	$("#canoe").removeClass('active');
    	$(this).addClass('active');
        $.ajax({
            url: "/pleasure-craft/paddler/kayak.html",
            type: "GET",
            cache: false,
            success: function(html) {
                $(".pc-content").html(html);
            },
            complete: function(){
                $('#loading-image').hide();
            }
        });
        $.ajax({
            url: "/signalling-aids/signalling.html",
            type: "GET",
            cache: false,
            success: function(html) {
                $(".signalling").html(html);
            }
        });
    });
</script>