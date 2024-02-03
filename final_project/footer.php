<footer>
      <div class="wrapper"> <a href="index.html" id="footer_logo"><span>Online </span> blood bank</a>
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.gif" alt=""></a></li>
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="mission.php">Our Mission</a></li>
         
            <li><a href="help.php">How to Help</a></li>
            <li class="end"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>+91</span>9924510179</div>
      </div>
      <div id="footer_text">Copyright &copy; <a href="#">BY 2022</a> All Rights Reserved<br>
      Design and Devloped by <br /> Siddhant Gayakwad <br /> Shrey Satodiya <br /> Harsh Sharma <br />
      </div>
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
</body>
</html>