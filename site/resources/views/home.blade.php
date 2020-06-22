
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docs | Documentation HTML Template</title>
    <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/20.png" >
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/uikit.js"></script>
</head>

<body>

<header>
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
	  <nav class="uk-navbar-container">
	    <div class="uk-container">
	      <div data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo uk-visible@m" href="index.html">Docs</a>
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-docs" data-uk-toggle><span
	              data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Docs</span></a>
	          <ul class="uk-navbar-nav uk-visible@m">
	            <li class="uk-active"><a href="index.html">Home</a></li>
	            <li ><a href="doc.html">Docs</a></li>
	            <li ><a href="blog.html">Blog</a></li>
	            <li >
	              <a href="#">Changelogs</a>
	              <div class="uk-navbar-dropdown">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                  <li><a href="changelog-timeline.html">Timeline Style</a></li>
	                  <li><a href="changelog-posts.html">Post Style</a></li>
	                </ul>
	              </div>            
	            </li>
	          </ul>
	        </div>
	        <div class="uk-navbar-center uk-hidden@m">
	          <a class="uk-navbar-item uk-logo" href="index.html">Docs</a>
	        </div>
	        <div class="uk-navbar-right">
	          <div>
	            <a id="search-navbar-toggle" class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
	            <div class="uk-background-default uk-border-rounded"
	              data-uk-drop="mode: click; pos: left-center; offset: 0">
	              <form class="uk-search uk-search-navbar uk-width-1-1" onsubmit="return false;">
	                <input id="search-navbar" class="uk-search-input" type="search" placeholder="Search for answers"
	                  autofocus autocomplete="off" data-minchars="1" data-maxitems="30">
	              </form>
	            </div>
	          </div>
	          <ul class="uk-navbar-nav uk-visible@m">
	            <li>
	              <div class="uk-navbar-item">
	                <a class="uk-button uk-button-primary-outline" href="changelog-timeline.html">Changelog</a>
	              </div>
	            </li>
	            <li>
	              <div class="uk-navbar-item">
	                <a class="uk-button uk-button-success" href="contact.html">Contact</a>
	              </div>
	            </li>
	          </ul>
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	              data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>
	        </div>
	      </div>
	    </div>
	  </nav>
	</div>
	<div class="uk-section section-hero uk-position-relative" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
		<div class="uk-container uk-container-small">
			<p class="hero-image uk-text-center"><img src="https://via.placeholder.com/400x220" alt="Hero"></p>
			<h1 class="uk-heading-medium uk-text-center uk-margin-remove-top">How can we help you?</h1>
			<p class="uk-text-lead uk-text-center">Search or browse in depth articles and videos on everything on our awesome
				product, from basic setup to advanced features and everyday use</p>
			<div class="hero-search">
				<div class="uk-position-relative">
					<form class="uk-search uk-search-default uk-width-1-1" name="search-hero" onsubmit="return false;">
						<span class="uk-search-icon-flip" data-uk-search-icon></span>
						<input id="search-hero" class="uk-search-input uk-box-shadow-large" type="search"
							placeholder="Search for answers" autocomplete="off" data-minchars="1" data-maxitems="30">
					</form>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="uk-section">
	<div class="uk-container">
		<h2 class="uk-h1 uk-text-center">Browse Topics</h2>
		<p class="uk-text-lead uk-text-center">Chose an option that you need help with or search above</p>
		<div class="uk-child-width-1-3@m uk-grid-match uk-text-center uk-margin-medium-top" data-uk-grid>
			<div>
				<div
					class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline border-radius-large border-xlight">
					<a class="uk-position-cover" href="doc.html"></a>
					<span data-uk-icon="icon: cog; ratio: 3.4" class=""></span>
					<h3 class="uk-card-title uk-margin">Getting Started</h3>
					<p>Get started fast with installation and theme setup instructions</p>
				</div>
			</div>
			<div>
				<div
					class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline border-radius-large border-xlight">
					<a class="uk-position-cover" href="doc.html"></a>
					<span data-uk-icon="icon: settings; ratio: 3.4" class=""></span>
					<h3 class="uk-card-title uk-margin">Product Features</h3>
					<p>Lean about all the theme options, features and how to use them</p>
				</div>
			</div>
			<div>
				<div
					class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline border-radius-large border-xlight">
					<a class="uk-position-cover" href="doc.html"></a>
					<span data-uk-icon="icon: code; ratio: 3.4" class=""></span>
					<h3 class="uk-card-title uk-margin">Customization</h3>
					<p>Get help or tailor the theme to your specific requirements</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-section section-featured">
	<div class="uk-container uk-container-small">
		<h2 class="uk-h1 uk-text-center">Popular Articles</h2>
		<p class="uk-text-center uk-text-lead">Selected featured articles to get you started fast</p>
		<ul class="uk-list uk-list-large uk-margin-medium-top">
			<li><a class="uk-box-shadow-hover-small" href="doc.html">Frequently asked questions about switching to our product</a></li>
			<li><a class="uk-box-shadow-hover-small" href="doc.html">Adding user media in application profile settings page</a></li>
			<li><a class="uk-box-shadow-hover-small" href="doc.html">Creating your first piece of content item</a></li>
			<li><a class="uk-box-shadow-hover-small" href="doc.html">Setting up video lightbox boxes section and content</a></li>
		</ul>
	</div>
</div>

<div class="uk-section section-videos">
	<div class="uk-container uk-container-small">
		<h2 class="uk-h1 uk-text-center">Video Tutorials</h2>
		<p class="uk-text-lead uk-text-center">Watch screencasts to get you started fast with product</p>
		<div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top" data-uk-grid data-uk-lightbox>
			<div>
				<div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-medium uk-card-body uk-inline border-radius-large border-xlight">
					<a class="uk-position-cover" href="https://vimeo.com/268045310" data-caption="Getting Started"></a>
					<span data-uk-icon="icon: play-circle; ratio: 3.4" class=""></span>
					<h3 class="uk-card-title uk-margin">Getting Started</h3>
					<p>Word the to embarrassed he homeless assistant</p>
				</div>
			</div>
			<div>
				<div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-medium uk-card-body uk-inline border-radius-large border-xlight">
					<a class="uk-position-cover" href="https://youtu.be/Cx2dkpBxst8" data-caption="What is Figma"></a>
					<span data-uk-icon="icon: play-circle; ratio: 3.4" class=""></span>
					<h3 class="uk-card-title uk-margin">What is Figma</h3>
					<p>Their a least are family question now that pur</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-section">
	<div class="uk-container uk-container-small">
		<h2 class="uk-h1 uk-text-center">Frequently asked questions</h2>
		<p class="uk-text-center uk-text-lead">Find quick answers to frequent pre-sale questions asked by customers</p>
		<ul class="uk-margin-medium-top" data-uk-accordion="multiple: true">
			<li>
				<a class="uk-accordion-title uk-box-shadow-hover-small" href="#">Do you provide customer support?</a>
				<div class="article-content uk-accordion-content link-primary">
					<p>Having support for your purchased item means that we will be available to you to iron out any
						potential issues you have in using the item.</p>
					<h4>The item support period</h4>
					<p>The item includes support for 6 months from the purchase date. If you’re about to purchase the
						item, you’ll have the option to purchase extended item support, increasing the item support
						period up to a maximum of 12 months from the date of purchase.</p>
					<h4>What else is included?</h4>
					<p>Answering questions about how to use the item
						Answering technical questions about the item (and included third party assets)
						Help with defects in the item or included third-party assets
						Item updates to ensure ongoing compatibility and to resolve security vulnerabilities
						Updates to ensure the item works as described and is protected against major security concerns
						Included version updates for all items</p>
					<h4>What’s not included in item support?</h4>
					<p>Item support does not include services to modify or extend the item beyond the original features,
						style and functionality described on the item page. For customization services that will help
						you tailor the item to your specific requirements, we recommend contacting us to see if we
						privately offer paid customization service.</p>
					<ul>
						<li>Installation of the item</li>
						<li>Hosting, server environment, or software</li>
						<li>Help from authors of included third-party assets</li>
					</ul>
					<h4>Contacting support</h4>
					<p>Support is provided Mon - Fri through item <a href="#">support</a> page.</p>
				</div>
			</li>
			<li>
				<a class="uk-accordion-title uk-box-shadow-hover-small" href="#">Are updates and bug fixes included in
					the cost of the item?</a>
				<div class="article-content uk-accordion-content link-primary">
					<p>Regardless of whether you have support or not:</p>
					<ul>
						<li>When we release an update, it will be available for you to download for free</li>
						<li>You can report bugs</li>
						<li>You can expect us to keep the item in good working order, working as described and protected
							against major security issues</li>
					</ul>
				</div>
			</li>
			<li>
				<a class="uk-accordion-title uk-box-shadow-hover-small" href="#">Can I extend or renew my item
					support?</a>
				<div class="article-content uk-accordion-content link-primary">
					<h4>Item support option</h4>
					<p>The support options available to you depend on when you make the support purchase.</p>
					<ul>
						<li>A support upgrade is 6 months of additional support that can be purchased at the time of
							buying the item.</li>
						<li>A support extension is 6 months of support that can be purchased at any time after the
							initial purchase of the item, provided the current support period hasn’t expired.</li>
						<li>A support renewal is 6 months of support that can be purchased after any existing support
							for an item has expired.</li>
					</ul>
					<h4>How do I renew or extend my support?</h4>
					<p>In order to extend or renew an item’s support offering, you must have less than 6 months of the
						existing support period remaining and also the author must still be offering support on their
						item.</p>
					<p>To renew the support component on an item, please follow these steps:</p>
					<ul>
						<li>Log in to your account</li>
						<li>Hover over your username and click ‘Downloads’ from the drop-down menu.</li>
						<li>The downloads section displays a list of all the items purchased using your account.</li>
						<li>Click on ‘Renew support now!’ or ‘Extend now’ next to the item you wish to renew the item
							support for and that’s it!</li>
					</ul>
				</div>
			</li>
			<li>
				<a class="uk-accordion-title uk-box-shadow-hover-small" href="#">Does the item come with installation
					and setup documentation?</a>
				<div class="article-content uk-accordion-content link-primary">
					<p>Yes, all our items come with either bundled documentation located in your “All files &amp;
						documentation” download zip or online documentation.</p>
				</div>
			</li>
			<li>
				<a class="uk-accordion-title uk-box-shadow-hover-small" href="#">Do you provide customization services
					for your items?</a>
				<div class="article-content uk-accordion-content link-primary">
					<p>Item support does not include services to modify or extend the item beyond the original features,
						style and functionality described on the item page.</p>
					<p>For customization services that will help you tailor the item to your specific requirements, please <a href="#">contact us</a> to see if we are available to offer paid customization service or check out service
						providers on <a href="https://studio.envato.com/">Envato Studio</a>.</p>
				</div>
			</li>
		</ul>
	</div>
</div>

<div class="uk-section section-team">
	<div class="uk-container uk-container-expand">
		<h2 class="uk-h1 uk-text-center">We are here to help</h2>
		<p class="uk-text-lead uk-text-center">Our team is just an email away ready to answer your questions</p>
		<div class="uk-margin-medium-top uk-grid-small uk-flex-center uk-text-center uk-margin-medium-top" data-uk-grid>
			<div>
				<div class="uk-card">
					<img class="uk-border-circle" src="https://via.placeholder.com/172" alt="Evan Wells" />
					<h5 class="uk-margin-remove-bottom uk-margin-top">Evan Wells</h5>
					<p class="uk-article-meta uk-margin-remove-bottom uk-margin-small-top">Support</p>
				</div>
			</div>
			<div>
				<div class="uk-card">
					<img class="uk-border-circle" src="https://via.placeholder.com/172" alt="John Brown" />
					<h5 class="uk-margin-remove-bottom uk-margin-top">John Brown</h5>
					<p class="uk-article-meta uk-margin-remove-bottom uk-margin-small-top">Support</p>
				</div>
			</div>
			<div>
				<div class="uk-card">
					<img class="uk-border-circle" src="https://via.placeholder.com/172" alt="Sara Galen" />
					<h5 class="uk-margin-remove-bottom uk-margin-top">Sara Galen</h5>
					<p class="uk-article-meta uk-margin-remove-bottom uk-margin-small-top">Lead Developer</p>
				</div>
			</div>
			<div>
				<div class="uk-card">
					<img class="uk-border-circle" src="https://via.placeholder.com/172" alt="Alex Koch" />
					<h5 class="uk-margin-remove-bottom uk-margin-top">Alex Koch</h5>
					<p class="uk-article-meta uk-margin-remove-bottom uk-margin-small-top">Design Engineer</p>
				</div>
			</div>
			<div>
				<div class="uk-card">
					<img class="uk-border-circle" src="https://via.placeholder.com/172" alt="Tom Farrell" />
					<h5 class="uk-margin-remove-bottom uk-margin-top">Tom Farrell</h5>
					<p class="uk-article-meta uk-margin-remove-bottom uk-margin-small-top">Developer</p>
				</div>
			</div>
			<div>
				<div class="uk-card">
					<img class="uk-border-circle" src="https://via.placeholder.com/172" alt="Daniel Shultz" />
					<h5 class="uk-margin-remove-bottom uk-margin-top">Daniel Shultz</h5>
					<p class="uk-article-meta uk-margin-remove-bottom uk-margin-small-top">Developer</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-section uk-text-center">
	<div class="uk-container uk-container-small">
		<div data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
			<h2 class="uk-h1 uk-margin-bottom">Didn't find an answer?</h2>
			<p class="uk-text-lead uk-text-center">Get in touch with us for details on setup and additional custom services pricing</p>
			<a class="uk-button uk-button-primary uk-button-large uk-margin-medium-top" href="contact.html">Contact Us</a>
		</div>
	</div>
</div>

<div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <h5 class="uk-margin-top">Getting Started</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="doc.html">Template setup</a></li>
      <li><a href="doc.html">Basic theme setup</a></li>
      <li><a href="doc.html">Navigation bar</a></li>
      <li><a href="doc.html">Footer options</a></li>
      <li><a href="doc.html">Creating your first post</a></li>
      <li><a href="doc.html">Creating docs posts</a></li>
      <li><a href="doc.html">Enabling comments</a></li>
      <li><a href="doc.html">Google Analytics</a></li>
    </ul>
    <h5 class="uk-margin-top">Product Features</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Hero page header</a></li>
      <li><a href="doc.html">Category boxes section</a></li>
      <li><a href="doc.html">Fearured docs section</a></li>
      <li><a href="doc.html">Video lightbox boxes section</a></li>
      <li><a href="doc.html">Frequently asked questions section</a></li>
      <li><a href="doc.html">Team members section</a></li>
      <li><a href="doc.html">Call to action section</a></li>
      <li><a href="doc.html">Creating a changelog</a></li>
      <li><a href="doc.html">Contact form</a></li>
      <li><a href="doc.html">Adding media to post and doc content</a></li>
      <li><a href="doc.html">Adding table of contents to docs</a></li>
      <li><a href="doc.html">Adding alerts to content</a></li>
    </ul>
    <h5 class="uk-margin-top">Customization</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Translation</a></li>
      <li><a href="doc.html">Customization</a></li>
      <li><a href="doc.html">Development</a></li>
      <li><a href="doc.html">Sources and credits</a></li>
    </ul>
    <h5 class="uk-margin-top">Help</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Contacting support</a></li>
    </ul>
  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Docs</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top">
      <li class="uk-active"><a href="index.html">Home</a></li>
      <li ><a href="doc.html">Docs</a></li>
      <li ><a href="blog.html">Blog</a></li>
      <li ><a href="contact.html">Contact</a></li>
      <li>
        <div class="uk-navbar-item"><a class="uk-button uk-button-success" href="contact.html">Contact</a></div>
      </li>
    </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="uk-section uk-text-center uk-text-muted">
	<div class="uk-container uk-container-small">
		<div>
			<ul class="uk-subnav uk-flex-center">
				<li><a href="#">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="uk-margin-medium">
			<div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
				<div class="uk-first-column">
					<a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link uk-icon" target="_blank"></a>
				</div>
				<div>
					<a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div>
				<div>
					<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div>
				<div>
					<a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link uk-icon" target="_blank"></a>
				</div>
			</div>
		</div>
		<div class="uk-margin-medium uk-text-small copyright link-secondary">Made by <a
				href="https://unbound.studio/">Unbound Studio</a> in Cleveland, USA.</div>
	</div>
</footer>

<script src="js/awesomplete.js"></script>
<script src="js/custom.js"></script>


</body>

</html>