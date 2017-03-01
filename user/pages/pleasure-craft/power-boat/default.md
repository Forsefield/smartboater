---
title: Power Boat
process:
    twig: true
    markdown: false
routable: true
visible: true
---

{# Markdown has been disabled on this article #}

<p>Select the hull length for your power boat.</p>
<div class="pc-type-buttons">
	<a class="button" id="under6" href="#under6">Under 6m</a>  <a class="button" id="6to9" href="#6to9">6m to 9m</a> <a class="button" id="9to12" href="#9to12">9m to 12m</a> <a class="button" id="12to24" href="#12to24">12m to 24m</a>
</div>
<div class="pc-content"><div id="loading-image" class="loader" style="display:none;">Loading...</div></div>

<script type="text/javascript">
	$("#under6").click(function() {
        $('#loading-image').show();

    	$("#6to9").removeClass('active');
        $("#9to12").removeClass('active');
        $("#12to24").removeClass('active');
    	$(this).addClass('active');

        $.ajax({
            url: "/pleasure-craft/power-boat/under6.html",
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

    $("#6to9").click(function() {
        $('#loading-image').show();

        $("#under6").removeClass('active');
        $("#9to12").removeClass('active');
        $("#12to24").removeClass('active');
        $(this).addClass('active');

        $.ajax({
            url: "/pleasure-craft/power-boat/6to9.html",
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

    $("#9to12").click(function() {
        $('#loading-image').show();

        $("#under6").removeClass('active');
        $("#6to9").removeClass('active');
        $("#12to24").removeClass('active');
        $(this).addClass('active');

        $.ajax({
            url: "/pleasure-craft/power-boat/9to12.html",
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

    $("#12to24").click(function() {
        $('#loading-image').show();

        $("#under6").removeClass('active');
        $("#6to9").removeClass('active');
        $("#9to12").removeClass('active');
        $(this).addClass('active');

        $.ajax({
            url: "/pleasure-craft/power-boat/12to24.html",
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
</script>