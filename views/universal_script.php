<!--Universal GA Tracking start<?php if($debug_mode===true){?>, Debugging is on<?php }?> -->
<script type="text/javascript">
<?php if($debug_mode===true){ ?>
window.ga_debug = {trace: true};
<?php } ?>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics<?php echo ($debug_mode==true) ? '_debug':''; ?>.js','ga');
<?php
foreach($gaq as $item){
    echo 'ga('.$item.');'."\n";
}
if($user_engagement==1){ ?>
setTimeout(function(){ga('send','event','Page Read',document.location.href,document.referrer)},15E3);
<?php } ?>
</script>
<!--GA Tracking ends-->