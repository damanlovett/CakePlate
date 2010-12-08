<div id="container"> 

    <b class="border-a"></b>

    <b class="border-b"></b>

    <b class="border-c"></b>

    <b class="border-d"></b>



    <div id="header">  

         <p class="lang">Now offered in: {% blocktrans %}<a href="http://de.html5boilerplate.com">Deutsch</a>{% endblocktrans %}</p>        

         <h1>HTML5  <i>&#x2605;</i> Boilerplate</h1> 

         <h2>{% blocktrans %}A rock-solid default for HTML5 awesome.{% endblocktrans %}</h2>  

         <p>{% blocktrans %}HTML5 Boilerplate is the professional badass's base HTML/CSS/JS template for a fast, robust and future-proof site.{% endblocktrans %}</p>

         <p>{% blocktrans %}After more than two years in iterative development, you get the best of the best practices baked in: cross-browser normalization, performance optimizations, even optional features like cross-domain Ajax and Flash. A starter apache .htaccess config file hooks you the eff up with caching rules and preps your site to serve HTML5 video, use @font-face, and get your gzip zipple on.{% endblocktrans %}</p>

         <p>{% blocktrans %}Boilerplate is not a framework, nor does it prescribe any philosophy of development, it's just got some tricks to get your project off the ground quickly and right-footed.{% endblocktrans %}</p>

    </div>



    <div id="body">

      <h3>{% blocktrans %}Want to dive in?{% endblocktrans %}</h3>

      <p class="bptext">{% blocktrans with "v0.9.5" as version %}Download Boilerplate {{ version }}{% endblocktrans %} <small><a href="http://github.com/paulirish/html5-boilerplate#readme">Updated Oct 26th</a></small></p>



      <p class="dwn">

        <span><a href="http://github.com/paulirish/html5-boilerplate/zipball/v0.9.5">{% blocktrans %}Boilerplate documented</a> <small>{% blocktrans %}Keep the hints and links{% endblocktrans %}</small></span>

        <i>{% blocktrans %}or{% endblocktrans %}</i>

        <span><a href="http://github.com/paulirish/html5-boilerplate/zipball/v0.9.5stripped">{% blocktrans %}Boilerplate "stripped"</a> <small>{% blocktrans %}No comments, just the bizniss.{% endblocktrans %}</small></span>

      </p>





      <p class="social"><i>

        <a href="http://github.com/paulirish/html5-boilerplate/wiki">{% blocktrans %}Read the docs{% endblocktrans %}</a>        

        <a href="http://github.com/paulirish/html5-boilerplate">{% blocktrans %}Contribute on Github {% endblocktrans %}</a>        

        <a href="#disqus_thread">{% blocktrans %}Comment here{% endblocktrans %}</a>        

      </i>

      <i><a href="http://twitter.com/boiler_plate">{% blocktrans %}Follow on twitter{% endblocktrans %}</a>

      <a href="http://groups.google.com/group/html5boilerplate/">{% blocktrans %}Join The Mailing List{% endblocktrans %}</a></i>

      </p>

       <h3>{% blocktrans %}What&rsquo;s New in 0.9.5{% endblocktrans %}</h3>

       <ul>

        <li>Removed <code>-webkit-font-smoothing: antialiased;</code> it makes monospace too thin.</li>

         <li>IE conditional classes have moved from the <code>&lt;body&gt;</code> tag to the <code>&lt;html&gt;</code> tag.</li>

         <li>Dropped <code>text-rendering: optimizeLegibility</code> as it breaks small-caps and looks odd on Linux machines.</li> 

         <li>Added a IE6 call for the minified <code>dd_belatedpng</code>.</li>

         <li>Revised viewport declaration to allow user scaling and clear Webkit console errors.</li>

         <li>Updated Modernizr to 1.6.</li>

         <li>Added <code>web.config</code> file for Microsoft IIS.</li>

         <li>Beta release of the <a href="http://github.com/paulirish/html5-boilerplate/wiki/Build-script">Build Script</a>.</li>

         <li>New project scaffolding <a href="http://github.com/paulirish/html5-boilerplate/wiki/createproject.sh">bash script</a>.</li>

         <li><a href="http://github.com/paulirish/html5-boilerplate/blob/v0.9.5/README.markdown">.... and over 100 other fixes and improvements.</a></li>

        </li>

       </ul>

      <h3>{% blocktrans %}Why it is awesome{% endblocktrans %}</h3>

      <ul>

        <li>{% blocktrans %}Cross-browser compatible (IE6, yeah we got that.){% endblocktrans %}</li>

        <li>{% blocktrans %}HTML5 ready. Use the new tags with certainty.{% endblocktrans %}</li>

        <li>{% blocktrans %}Optimal caching and compression rules for grade-A performance{% endblocktrans %}</li>

        <li>{% blocktrans %}Best practice site configuration defaults{% endblocktrans %}</li>

        <li>{% blocktrans %}Mobile browser optimizations{% endblocktrans %}</li>

        <li>{% blocktrans %}Progressive enhancement graceful degradation &hellip; yeah yeah we got that{% endblocktrans %}</li>

        <li>{% blocktrans %}IE specific classes for maximum cross-browser control{% endblocktrans %}</li>

        <li>{% blocktrans %}Handy .no-js and .js classes to style based on capability{% endblocktrans %}</li>

        <li>{% blocktrans %}Want to write unit tests but lazy? A full, hooked up test suite is waiting for you.{% endblocktrans %}</li>

      </ul>



      <h3>{% blocktrans %}Why it is awesome-er{% endblocktrans %}</h3>

      <ul>

        <li>{% blocktrans %}Javascript profiling&hellip;in IE6 and IE7? Sure, no problem.{% endblocktrans %}</li>

        <li>{% blocktrans %}Console.log nerfing so you won't break anyone by mistake.{% endblocktrans %}</li>

        <li>{% blocktrans %}Never go wrong with your doctype or markup!{% endblocktrans %}</li>

        <li>{% blocktrans %}An optimal print stylesheet, performance optimized.{% endblocktrans %}</li>

        <li>{% blocktrans %}iOS, Android, Opera Mobile-adaptable markup and CSS skeleton.{% endblocktrans %}</li>

        <li>{% blocktrans %}IE6 pngfix baked in.{% endblocktrans %}</li>

        <li>{% blocktrans %}.clearfix, .visuallyhidden classes to style things wisely and accessibly.{% endblocktrans %}</li>

        <li>{% blocktrans %}.htaccess file that allows proper use of HTML5 features and faster page load{% endblocktrans %}</li>

        <li>{% blocktrans %}CDN hosted jQuery with local fallback failsafe.{% endblocktrans %}</li>

        <li>{% blocktrans %}Think there's too much? The HTML5 Boilerplate is delete-key friendly. :){% endblocktrans %}</li>

      </ul>



      <h3 id="thesource">{% blocktrans %}Walk through it with me, now{% endblocktrans %}</h3>



      <h3 id="lowdown">{% blocktrans %}Get the lowdown in 40 minutes, flat!{% endblocktrans %}</h3>

      <embed src="http://blip.tv/play/gcMVgffAOgI%2Em4v" type="application/x-shockwave-flash" width="480" height="330" allowscriptaccess="always" allowfullscreen="true"></embed>

      <p>{% blocktrans %}Or read through this good explanation of <a href="http://www.1stwebdesigner.com/development/snippets-html5-boilerplate/">20 snippets you should be using</a>.{% endblocktrans %}</p>



      <div class="recos">

        <h3>{% blocktrans %}Make it even better!{% endblocktrans %}</h3>

          <ul> 

            <li>{% blocktrans %}Use a script loader like <a href="http://github.com/SlexAxton/yepnope.js">yepnope.js</a> in combo with your  <a href="http://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills">HTML5 polyfills</a> to bring the future to all browsers.{% endblocktrans %}</li> 

            <li>{% blocktrans %}Use the build script, crank up your expires to 1year, and deliver a superfast site.{% endblocktrans %}</li>

            <li>{% blocktrans %}Consider <a href="http://css3please.com">CSS3please.com</a> to assist in writing CSS3{% endblocktrans %}</li> 

            <li>{% blocktrans %} 

            <a href="http://css3pie.com/">css3pie.com</a> and all the other <a href="http://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills">HTML5 polyfills</a> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}Learn HTML5 elements better: <a href="http://html5doctor.com/glossary/">HTML5 Doctor Glossary</a> and <a href="http://diveintohtml5.org/semantics.html#new-elements">Dive Into HTML5 : semantic elements</a> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}<a href="http://gist.github.com/581868">More `meta` tag tracks for your `&lt;head&gt;`</a>{% endblocktrans %}</li> 

            <li>{% blocktrans %}If you're a photo gallery site you might want this for ie6 to not show that stupid thing on &lt;img&gt; tags: 



            <p>  <code>&lt;!--[if IE]&gt;&lt;meta http-equiv="imagetoolbar" content="no" /&gt;&lt;![endif]--&gt;</code></p> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}Read some <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips">CSS Spriting tips</a> or you could use <a href="http://www.hagenburger.net/BLOG/Lemonade-CSS-Sprites-for-Sass-Compass.html">Lemonade</a> if you are using <a href="http://sass-lang.com">Sass</a>.</p>{% endblocktrans %}</li> 

            <li>{% blocktrans %}<a href="http://github.com/paulirish/html5-boilerplate/issues/closed#issue/115/comment/439219">Tell your users to Enable JavaScript</a>{% endblocktrans %}</li> 

            <li>{% blocktrans %}<a href="http://www.merttol.com/articles/css/too-light-for-print.html">Color considerations for printing</a>{% endblocktrans %}</li> 

            <li>{% blocktrans %}Use Google's recommendations for SEO: <a href="http://googlewebmastercentral.blogspot.com/2008/11/googles-seo-starter-guide.html">the Google SEO Starter Guide</a> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}Dig into the new <a href="http://blog.whatwg.org/the-road-to-html-5-link-relations">link relations</a> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}Consider some opinionated <a href="http://webdosanddonts.com/">web do's and web dont's</a> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}To remove gloss from iPhone home screen rel value should be <code>"apple-touch-icon-precomposed"</code>{% endblocktrans %}</li> 

            <li>{% blocktrans %}<a href="http://beckelman.net/post/2009/02/16/Use-jQuery-to-Show-a-Linke28099s-Address-After-its-Text-When-Printing-In-IE6-and-IE7.aspx">Simulate link printing in IE with JS</a>{% endblocktrans %}</li> 

            <li>{% blocktrans %}Use <code>rel="prefetch"</code> for <a href="http://www.stevesouders.com/blog/2010/02/15/browser-performance-wishlist/#link_prefetch">documents to pre-fetch</a>.{% endblocktrans %}</li> 

            <li>{% blocktrans %}Using border-radius with a border in Webkit? Try <a href="http://tumble.sneak.co.nz/post/928998513/fixing-the-background-bleed">-webkit-background-clip</a> to fix the bleed.{% endblocktrans %}</li> 

            <li>{% blocktrans %}Write <a href="http://css-tricks.com/efficiently-rendering-css/">efficient CSS</a> for optimum browser performance.{% endblocktrans %}</li> 

            <li>{% blocktrans %}Kick off your page-specific javascript <a href="http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/">based on your markup</a>.{% endblocktrans %}</li> 

            <li>{% blocktrans %}Know your available <a href="http://paulirish.com/2009/browser-specific-css-hacks/">browser CSS hacks</a>.{% endblocktrans %}</li> 

            <li>{% blocktrans %}Get your team hooked using the same <a href="http://molecularvoices.molecular.com/standards/">front-end coding standards and best practices.</a> 

            {% endblocktrans %}</li> 

            <li>{% blocktrans %}Use <a href="http://microformats.org/wiki/Main_Page">Microformats</a> (via <a href="http://microformats.org/wiki/microdata">microdata</a>) for optimum search results <a href="http://googlewebmastercentral.blogspot.com/2009/05/introducing-rich-snippets.html">visibility</a>.{% endblocktrans %}</li> 

            <li>{% blocktrans %}You can use the <a href="http://camendesign.com/code/developpeurs_sans_frontieres">body element as a wrapper</a>, so you need not use a div#container.{% endblocktrans %}</li>

            <li>{% blocktrans %}Read on for <a href="http://github.com/paulirish/html5-boilerplate/wiki/Make-it-better/">more ways to make it better.</a> {% endblocktrans %}</li>

        </ul>

      </div>

    </div>

    <div id="footer">

      <p>

        <em class="focus">{% blocktrans %}Brought to you by{% endblocktrans %}</em>

        <a href="http://paulirish.com"><img width="50" height="50" src="images/paul-irish.png" alt=""> Paul Irish <i>{% blocktrans %}Google Chrome, jQuery{% endblocktrans %}</i></a>

        <a href="http://nimbupani.com"><img width="50" height="50" src="images/divya-manian.png" alt="">Divya Manian <i>{% blocktrans %}Open Web Vigilante{% endblocktrans %}</i></a>

      </p> 

      <ul>

        <li><a href="http://www.blog.highub.com/">Shi Chuan</a></li>

        <li><a href="http://mikewest.org/">Mike West</a></li>   

        <li><a href="http://htmlcssjavascript.com/">Rob Larsen</a></li>

        <li><a href="http://www.mintusability.com">Mikko Tikkanen</a></li>

        <li><a href="http://twitter.com/niksy">Ivan Nikoli?</a></li>

        <li><a href="http://velir.com/">Velir</a></li>

        <li><a href="http://adeelejaz.com/">Adeel Ejaz</a></li>

        <li><a href="http://garowetz.ca/">Stephen Gariepy</a></li>

      </ul> <br>

      <p>{% blocktrans %}It would not have been possible without the efforts of these superheroes:{% endblocktrans %}</p>

      <ul>

        <li><a href="http://www.phpied.com">Stoyan Stefanov</a></li>

        <li><a href="http://mathiasbynens.be/">Mathias Bynens</a></li>   

        <li><a href="http://meyerweb.com/">Eric Meyer</a></li>

        <li><a href="http://richclarkdesign.com/">Richard Clark</a></li>

        <li><a href="http://www.aestheticallyloyal.com/">Anthony Kolber</a></li>

        <li><a href="http://www.splintered.co.uk/">Patrick H Lauke</a></li>

        <li><a href="http://timvandamme.com">Tim Van Damme</a></li>

        <li><a href="http://farukat.es/">Faruk Ate&#351;</a></li>

        <li><a href="http://remysharp.com/">Remy Sharp</a></li>

        <li><a href="http://www.dillerdesign.com/">Drew Diller</a></li>

        <li><a href="http://blog.amodernfable.com/">Adam McIntyre</a></li>

        <li><a href="http://tjkdesign.com/">Thierry Koblentz</a></li>

        <li><a href="http://miketaylr.com">Mike Taylor</a></li>

        <li><a href="http://iecss.com">Jonathan Neal</a></li>

        <li><a href="http://camendesign.com">Kroc Camen</a></li>

        <li><a href="http://fontsquirrel.com">Ethan Dunham</a></li>

        <li><a href="http://peter.sh">Peter Beverloo</a></li>         

        <li><a href="http://code.flickr.com/blog/">Flickr</a></li>

        <li><a href="http://www.viget.com/inspire/">Viget</a></li>

        <li><a href="http://stevesouders.com/">Steve Souders</a></li>

        <li><a href="http://stuffandnonsense.co.uk/blog">Andy Clarke</a>

        <li><a href="http://na.isobar.com">Isobar Interface Development team</a></li>

      </ul>

    </div> 

  </div>


<?php

echo $this->element('page-nav');

?>