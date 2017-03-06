<div id="sidebar">
    <div id="logo">
      <h1 class="mobileUI-site-name">STRIPED</h1>
    </div>
    <nav id="nav" class="mobileUI-site-nav">
       <ul>
        
      
         <?php wp_nav_menu( array('menu' => 'Навигация по сайту' )); ?> 
      </ul>
    </nav>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
      <?php dynamic_sidebar('sidebar-1'); ?>
    <?php endif; ?>
    <div id="copyright">
      <p> &copy; 2045 An Untitled Site.<br>
        Images: <a href="http://n33.co">n33</a>, <a href="http://fotogrph.com">Fotogrph</a>, <a href="http://iconify.it">Iconify.it</a> Design: <a href="http://html5up.net/">HTML5 Up!</a> </p>
    </div>
  </div>