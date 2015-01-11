<?php if (isset($class) && $class == 'home'): ?>
    <nav id="nav-wrap" role="navigation">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#journal">Blog</a></li>
            <li><a class="smoothscroll" href="#portfolio">Work</a></li>
            <li><a class="smoothscroll" href="#">Playground</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
        </ul><!-- end #nav -->
    </nav><!-- end #nav-wrap -->
<?php elseif (isset($class) && $class == 'blog'): ?>
    <nav id="nav-wrap" role="navigation">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li class="current"><a href="#">Blog</a></li>
            <li><a href="index.php#portfolio">Work</a></li>
            <li><a href="#">Playground</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </ul><!-- end #nav -->
    </nav><!-- end #nav-wrap -->
<?php else: ?>
     <nav id="nav-wrap" role="navigation">
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
         <ul id="nav" class="nav">
             <li><a href="index.php">Home</a></li>
             <li><a href="index.php#about">About</a></li>
             <li><a href="#">Blog</a></li>
             <li><a href="index.php#portfolio">Work</a></li>
             <li><a href="#">Playground</a></li>
             <li><a href="index.php#contact">Contact</a></li>
         </ul><!-- end #nav -->
     </nav><!-- end #nav-wrap -->
<?php endif; ?>