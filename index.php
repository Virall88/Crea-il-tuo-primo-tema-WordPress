<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il mio primo tema WordPress</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="site">

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <h1 class="site-title"><a href="#">Benvenuto nel tuo primo tema WordPress</a></h1>
                <p class="site-description">Inserisci il motto del tuo nuovo tema</p>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu Principale</button>
                <ul id="primary-menu">
                    <li>Link1</li>
                    <li>Link2</li>
                    <li>Link3</li>
                    <li>Link4</li>
                </ul>
            </nav><!-- #site-navigation -->
    	</header><!-- #masthead -->

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <article id="post-1" class="entry">
                        <header class="entry-header">
                            <h1 class="entry-title">Il mio primo articolo</h1>
                            <div class="entry-meta">
                                <time class="entry-date published" datetime="2016-07-15T14:00">15 Luglio</time>
                                <span class="author vcard"><a class="url fn n" href="http://skillsandmore.org/author/andrea">Andrea Barghigiani</a></span>
                            </div><!-- .entry-meta -->
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolorem, laudantium. Obcaecati sed natus et sint repudiandae ipsam qui amet iusto, totam voluptatibus impedit quo? Provident mollitia molestias, iure cumque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum distinctio omnis doloremque nulla voluptatibus vero, hic magnam aliquid animi, nobis, perspiciatis voluptatem dolore. Pariatur asperiores et, ut soluta praesentium provident!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quibusdam iure, non ut optio beatae adipisci ex a numquam consectetur eum! Ut, perferendis, culpa. Iusto quaerat id magni, cumque enim.</p>
                        </div><!-- .entry-content -->
                        <footer class="entry-footer">
                            <span class="cat-links">
                                <span class="screen-reader-text">Categorie</span>
                                <a href="#" rel="category tag">Cat1</a>
                                <a href="#" rel="category tag">Cat2</a>
                            </span>
                            <span class="tags-links">
                                <span class="screen-reader-text">Etichette</span>
                                <a href="#" rel="tag">Tag1</a>
                                <a href="#" rel="tag">Tag2</a>
                            </span>
                        </footer><!-- .entry-footer -->
                    </article>
                </main>
            </div><!-- #primary -->
            <aside id="secondary" class="widget-area" role="complementary">
                <div class="widget"></div>
                <div class="widget"></div>
                <div class="widget"></div>
            </aside><!-- #secondary -->
        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">

            </div>
        </footer>
    </div><!-- .site -->


</body>
</html>
