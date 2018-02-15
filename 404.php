<?php
get_header();
?>
<div class="content-fluid">
    <section class="content-main">
        <div id="simple3D">
            <div class="dot"></div>
            <div class="kinoco"></div>
	    </div>
    </section>
</div>
<script>
$("#simple3D").simple3D({
moveX:3, // 1 - 5
moveY:3, // 1 - 5
bgImage:true, // use background image mode
targetAll:true,
reverseX: true,
reverseY: true
});
</script>
<?php
get_footer();
?>