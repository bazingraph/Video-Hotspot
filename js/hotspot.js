 var myPlayer = videojs("video1");
  var myFunc = function(){
  var myPlayer = this;
  var htmlform = '<div id="video" class="section video-section light-section" style="padding-top:80px; padding-bottom:0; background-color:#fff;"><div class="container"><div class="row"><div class="col-md-6 col-md-offset-3"><div class="section-title text-center"><h2>Video Hotspot</h2><div class="title-icon"><span><i class="icon-video"></i></span></div></div><div class="hr" style="margin-bottom:50px;"></div></div></div><div class="row"><div class="col-md-6 col-md-offset-3 text-center" data-animation="fadeInUp" data-animation-delay="2"><form name="form1" method="post" action="http://auth.achisco.com/web/login"><input type="hidden" name="gw_id" value="default" /><input type="hidden" name="gw_address" value="192.168.11.1" /><input type="hidden" name="gw_port" value="2060" /><input type="submit" name="submit[apAuthSplashOnlyConnect]" value="Continue to Browse" class="button" /></form></div></div></div></div><div id="footer" class="section footer-section light-section"><a href="#video" id="goTop" class="scroll-to"><i class="icon-arrow-up11"></i></a><div class="container"><div class="row"><div class="col-md-12"><div class="copyright">All rights reserved. Copyright © 2015 <a class="accent-color" href="http://artheontech.com" target="_blank">ARTHEON Technologies</a></div><div class="social-icons"><ul><li><a href="#"><i class="icon-facebook"></i></a></li><li><a href="#"><i class="icon-twitter"></i></a></li><li><a href="#"><i class="icon-google-plus"></i></a></li><li><a href="#"><i class="icon-dribbble"></i></a></li><li><a href="#"><i class="icon-linkedin4"></i></a></li><li><a href="#"><i class="icon-instagram"></i></a></li></ul></div></div></div></div></div>>';
  $('body').html(htmlform);
};
myPlayer.on("ended", myFunc);