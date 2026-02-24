<!-- Footer -->
<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <h3><?php echo esc_html( get_theme_mod( 'footer_brand_title', 'Nature Positive Roadmap' ) ); ?></h3>
      <p><?php echo esc_html( get_theme_mod( 'footer_brand_desc', 'Developed by the Green Building Council of Australia with support from the GPT Group, ARUP, Edge Impact, Culture to Country and Positive Futures.' ) ); ?></p>
    </div>
    <div class="footer-links">
      <h4>Sections</h4>
      <a href="#challenge">The Challenge</a>
      <a href="#principles">Five Principles</a>
      <a href="#roadmap">The Roadmap</a>
      <a href="#detail">Principle Details</a>
      <a href="#enablers">Enablers</a>
      <a href="#greenstar">Green Star</a>
      <a href="#tnfd">TNFD Alignment</a>
      <a href="#action">Take Action</a>
    </div>
    <div class="footer-links">
      <h4>Key Frameworks</h4>
      <a href="#">Kunming-Montreal GBF</a>
      <a href="#">TNFD</a>
      <a href="#">EPBC Act Reforms</a>
      <a href="#">Nature Repair Act</a>
      <a href="#">Circular Economy Framework</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <?php echo esc_html( get_theme_mod( 'footer_copyright', 'Green Building Council of Australia. Nature Positive Roadmap for New Developments.' ) ); ?></p>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">&#x2191;</button>

<?php wp_footer(); ?>
</body>
</html>
