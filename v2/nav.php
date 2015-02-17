<?php if ( is_front_page() ) : ?>
    <nav id="nav-wrap" role="navigation">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#journal">Blog</a></li>
            <li><a class="smoothscroll" href="#portfolio">Work</a></li>
            <li><a href="/playground">Playground</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
        </ul>
    </nav>
<?php else : ?>
    <nav id="nav-wrap" role="navigation">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li><a href="http://www.chasewoodford.com">Home</a></li>
            <li><a href="http://www.chasewoodford.com/index.php#about">About</a></li>
            <li class="current"><a href="http://www.chasewoodford.com/blog">Blog</a></li>
            <li><a href="http://www.chasewoodford.com/index.php#portfolio">Work</a></li>
            <li><a href="http://www.chasewoodford.com/playground">Playground</a></li>
            <li><a href="http://www.chasewoodford.com/index.php#contact">Contact</a></li>
        </ul>
    </nav>
<?php endif; ?>