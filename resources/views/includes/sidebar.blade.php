<script>
$(function(){
    $('#gmenu a').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
});
</script>
<div class="sidebar" id="gmenu">
  <a href="/sample/vali"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="/sample/news">News</a>
  <a href="/sample/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="#about">About</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
</div>