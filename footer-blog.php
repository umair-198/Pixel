<?php get_template_part( 'template-parts/footer/foot','blog' ); ?>


<!-- Placed JS at the end of the document so the pages load faster -->
<script>
var abcElements = document.querySelectorAll('.comment-reply-link');

// Set their ids
for (var i = 0; i < abcElements.length; i++){
    abcElements[i].id = 'abc-'+i;
    }
    for (var i = 0; i < abcElements.length; i++){
    document.getElementById("abc-"+i).innerHTML +='<i class="fa fa-reply"></i>';
    var str=document.getElementById("abc-"+i).innerHTML; 
    var n=str.replace("Reply",'<a class="abcd">Reply</a>');
    document.getElementById("abc-"+i).innerHTML=n;}
</script>
<script>
var abcElement1 = document.querySelectorAll('.reply');
var abcElement2 = document.querySelectorAll('.fn');
// Set their ids
for (var i = 0; i < abcElement1.length; i++){
    abcElement1[i].id = 'xyz-'+i;
    }
    for (var i = 0; i < abcElement2.length; i++){
    abcElement2[i].id = 'abcd-'+i;
    }
    for (var i = 0; i < abcElement2.length; i++){
    var target = document.getElementById('xyz-'+i)
    document.getElementById('abcd-'+i).appendChild(target)}
</script>
<!-- jQuery latest version -->
<!-- jQuery latest version -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/ajax-mail.js"></script>
<!-- Main js -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>