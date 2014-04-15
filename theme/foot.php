<footer>
         <p>footer data</p>
</footer>  

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/lib/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="/assets/js/build/production.min.js"></script>
        <?php
        if(isset($this->currentPage['pageJS']) && $this->currentPage['pageJS'] != ""){
            echo "<script href=\"/assets/js/page/".$pageJS.".js\"></script>";
        }
        if (isset($this->currentPage['form']) && $this->currentPage['form'] == true) {
            echo "<script href=\"/assets/js/plugin/jquery.validate.min.js\"></script>";
        }else{ echo '<!-- no form to validate on this page -->';}
        ?>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39524879-3', 'akio.us');
  ga('send', 'pageview');

</script>
    </body>
</html>