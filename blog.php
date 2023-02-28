<?php include 'layout/header.php';?>

		<main id="content" class="content py-0">

			<div class="blog-single-cover scheme-light" data-fullheight="true" data-inview="true"
				data-inview-options='{ "onImagesLoaded": true }' style="background-color: #666871;">

				<figure class="blog-single-media" data-responsive-bg="true" data-parallax="true"
					data-parallax-options='{ "parallaxBG": true, "triggerHook": "onLeave" }'
					data-parallax-from='{ "translateY": "0%" }' data-parallax-to='{ "translateY": "20%" }'>
					<img src="./assets/demo/blog/0.jpg" alt="Blog single">
				</figure>

				<div class="blog-single-details">

					<div class="container">
						<div class="row">
							<div class="col-md-6">

								<header class="entry-header blog-single-header" data-parallax="true"
									data-parallax-to='{ "opacity": 0, "translateY": "30%" }'
									data-parallax-options='{ "triggerHook": "0.3" }'>
									<h1 class="blog-single-title entry-title h2" data-split-text="true"
										data-split-options='{ "type": "lines" }'>The day I fell for Roslyn</h1>
									<div class="post-meta">
										<span class="byline">
											<span class="block text-uppercase ltr-sp-1">Author:</span>
											<span class="author vcard">
												<a class="url fn n" href="#">Eti Kagbala</a>
											</span>
										</span>
										<span class="posted-on">
											<span class="block text-uppercase ltr-sp-1">Published on:</span>
											<a href="#" rel="bookmark">
												<time class="entry-date published updated"
													datetime="2018-03-13T09:25:41+00:00">July 17, 2018</time>
											</a>
										</span>
										<!--<span class="cat-links">
											<span class="block text-uppercase ltr-sp-1">Published in:</span>
											<a href="#" rel="category tag">Business</a>
										</span>-->
									</div><!-- /.post-meta -->
									<!--<div class="blog-single-details-extra">
										<a href="https://www.youtube.com/watch?v=YJ5q8Wrkbdw" class="lightbox-link fresco">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#000" stroke-width="1px" width="71.5px" height="71.5px">
												<path fill-rule="evenodd"  stroke-linecap="butt" stroke-linejoin="miter" d="M35.500,0.500 C54.830,0.500 70.500,16.170 70.500,35.500 C70.500,54.830 54.830,70.500 35.500,70.500 C16.170,70.500 0.500,54.830 0.500,35.500 C0.500,16.170 16.170,0.500 35.500,0.500 Z"/>
												<path fill-rule="evenodd" stroke-linecap="butt" stroke-linejoin="miter" d="M49.410,35.676 L28.165,47.942 L28.165,23.410 L49.410,35.676 Z"/>
											</svg>
											<span class="text-uppercase ltr-sp-1">Play Video</span>
										</a>
									</div> /.blog-single-details-extra -->
								</header><!-- /.blog-single-header -->

							</div><!-- /.col-md-6 -->
						</div><!-- /.row -->
					</div><!-- /.container -->

				</div><!-- /.blog-single-details -->

			</div><!-- /.blog-single-cover -->

			<article class="blog-single">

				<div class="container">

					<div class="row">

						<div class="col-md-8 col-md-offset-2">

							<div class="blog-single-content entry-content pull-up expanded">

								<p class="add-dropcap">
									You know that feeling you get when you find a crisp £10 note in a pocket of an
									outfit you haven't worn in a while? Well, that's how I felt when I finally bit the
									bullet and used Roslyn.

									I had the privilege of working as a Software Architect tasked with
									internationalizing (the "z" is not a typo, and will keep happening) a legacy Windows
									Forms application.

									The project was quite an exciting project. Now, we could have gone the route of
									deploying an army of fingers to keyboards but that would have lacked a certain
									panache, apart from the single-use nature of such a solution. No, we went for the
									metaprogramming option. That, fearless readers is where Roslyn enters the narrative.
								</p>

								<blockquote>
									<h3>“Metaprogramming”</h3>
									<!--<cite>Colin Powell</cite>-->
								</blockquote>

								<p>

									Metaprogramming is a programming technique in which computer programs have the
									ability to treat programs as their data.

									According to Isaac Asimov (or was it Kathleen), these are the 3 laws of
									metaprogramming:

									Human crafted code is sacred
									Human crafted code is sacred
									Human... you get the idea

									We need to remember these laws for what I'm about to describe.</p>

								<h3>Internationalization (i18n)</h3>

								<div class="col-md-6">
									<figure>
										<img src="./assets/demo/blog/1.jpg" alt="Blog Single">
									</figure>
								</div><!-- /.col-md-6 -->


								<p>The solution features the general steps you'd expect in a .Net i18n project:<br>

									-Globalization review<br>
									-Extraction - create a language repository by isolating resources and extracting UI
									text<br>
									-Localization - Adapting the application so that its resources can be replaced at
									run-time. In other words, generate neutral resources (.resx files) and add them to
									their respective Visual Studio projects.<br>
									-Machine translations for sizing and design decisions (native speaker translations
									are better with a blank repository)<br>
									-lobalization - Generate language resources and add them to respective Visual Studio
									projects<br>
									-Build a language maintenance solution for native speakers to translate. For this I
									used Angular 5 backed by an Asp.Net Web API solution.<br>
									-Chill...
								</p>

								<!--<div class="fullwidth">
									<figure>
										<img src="./assets/demo/blog/blog-single-2.jpg" alt="Blog Single">
										<figcaption>Martial arts figure prominently in many Asian cultures, and the first known traces of martial arts date from the Xia Dynasty of ancient China from over 4000 years ago.</figcaption>
									</figure>
								</div>/.fullwidth -->

								<h3>Extraction</h3>

								<p>SStep 2 is where the magic happens. For static form based UI text, Visual Studio
									allows you to open each form, and set the Localizable flag to true. Interestingly,
									this property is metadata, so it can only be done from the UI. Any legacy forms
									application worth its salt, must have at least 1017 forms. So... I started with a
									Visual Studio © add-in that took care of that, which is a topic for another day.
									From here it's a simple case of reading the generated resource (.resx) files to
									create the repository.

									Still on step 2, we now have to deal with dynamically generated UI text. These
									include messages, context sensitive menu text, labels and prompt captions, as well
									as date time handling numeric displays that are culture specific.

									Since I wanted a richer, more context aware metadata model (thanks again Kathleen),
									I wrote another Visual Studio © add-in that runs code analysis with the
									GlobalizationRules.ruleset and extracts all the CA130* warnings. This metadata was
									crucial to the quality of the work that followed. I now have all I need to employ
									Roslyn.

									Roslyn allows you to parse and analyse a syntax tree for LiteralExpressionSyntax of
									different kinds including the StringLiteralkind. So for example:</p>
								<pre spellcheck="false"><span class="hljs-keyword">var</span> expression = lt.ToString();
<span class="hljs-keyword">var</span> isWorthExtracting = lt.IsKind(SyntaxKind.StringLiteralExpression)
            <span class="hljs-comment">// exclude default parameters</span>
            &amp;&amp; !lt.Ancestors()
                .Any(f =&gt; f.IsKind(SyntaxKind.ParameterList))
            <span class="hljs-comment">// exclude field declarations and constants</span>
            &amp;&amp; !lt.Ancestors()
                .Any(f =&gt; f.IsKind(SyntaxKind.FieldDeclaration))
            <span class="hljs-comment">// ...</span>
            &amp;&amp; !lt.Ancestors()
                .OfType&lt;LocalDeclarationStatementSyntax&gt;()
                .Any(f =&gt; f.Modifiers.Any(m =&gt; m.ValueText.Contains(<span class="hljs-string">"Const"</span>)));
</pre>

								<p>The raw power of this can make you giddy, but don't let it get to your head, because
									with great power, comes the first law of metaprogramming!

									Also note that we're using C# to parse and rewrite VisualBasic.net syntax. Now
									that's meta... programming!

									For dates, times and decimals, no extraction was required, but more on that later.
								</p>



								<h3>Transformation</h3>

								<p>This is step 3, localizing the application. For this we require two types of resource
									files. The first were generated by Visual Studio © when we localized all the forms.
									It extracts most of the form designer properties and places them in .resx file. For
									example, a form called MyGreatForm.vb, will end up with MyGreatForm.resx, and once
									translated to French neutral (fr), will also have a resource file called
									MyGreatForm.fr.resx.

									The second type of resource file is the one we generate with a little help from
									Roslyn. Once all the literal text is extracted, we use the ResXResourceWriter and
									some dictionaries to generate a resource file.</p>

								<pre spellcheck="false"><span class="hljs-keyword">using</span> (<span class="hljs-keyword">var</span> writer = <span class="hljs-keyword">new</span> ResXResourceWriter(path))
{
    <span class="hljs-keyword">foreach</span> (<span class="hljs-keyword">var</span> key <span class="hljs-keyword">in</span> data.Keys)
    {
        writer.AddResource(key, data[key] ?? <span class="hljs-keyword">string</span>.Empty);
    }
    <span class="hljs-keyword">foreach</span> (<span class="hljs-keyword">var</span> key <span class="hljs-keyword">in</span> metaData.Keys)
    {
        writer.AddMetadata(key, metaData[key] ?? <span class="hljs-keyword">string</span>.Empty);
    }
}
</pre>

								<p>Then we create the corresponding strongly typed designer class:</p>

								<pre spellcheck="false"><span class="hljs-keyword">var</span> provider = <span class="hljs-keyword">new</span> VBCodeProvider();
<span class="hljs-keyword">var</span> code = StronglyTypedResourceBuilder
    .Create(resx.FileName, baseName, rootNamespace, provider, <span class="hljs-literal">true</span>, <span class="hljs-keyword">out</span> <span class="hljs-keyword">var</span> errors);
<span class="hljs-keyword">if</span> (errors?.Length &gt; <span class="hljs-number">0</span>)
    _log.ErrorFormat(<span class="hljs-string">"Errors occurred from generating project resource:{0}{1}"</span>,
        Environment.NewLine,
        <span class="hljs-keyword">string</span>.Join(Environment.NewLine, errors));

provider.GenerateCodeFromCompileUnit(code, streamWriter, <span class="hljs-keyword">new</span> CodeGeneratorOptions());
</pre>

								<p>
									Programmatically add both the resource and designer files to the project using the
									proper file nesting, now we are ready to transform the Visual Studio © solution.

									Let assume you called your resource files P80 and you used the base name P80 for
									your designer class, then the next step is to safely substitute these literal
									expressions with Roslyn. An example of LiteralExpressionSyntax in a message box
									before and after transformation is shown below:
								</p>

								<pre spellcheck="false">' before transormation
MessageBox.Show(<span class="hljs-string">"Human crafted code is sacred"</span>, <span class="hljs-string">"Warning"</span>, MessageBoxButtons.OK, MessageBoxIcon.Warning)
' after transformation
MessageBox.Show(P80.HumanCraftedCodeIsSacred, P80.Warning, MessageBoxButtons.OK, MessageBoxIcon.Warning)
</pre>

								<p>This is achieved by using loading the source code into a syntax tree, and
									transforming it. Roslyn syntax trees are immutable, so we are saving a new copy of
									the syntax tree.</p>

								<pre spellcheck="false"><span class="hljs-comment">// load the file</span>
<span class="hljs-keyword">var</span> sourceText = SourceText.From(_fileSystem.ReadAllText(review.FileName));
<span class="hljs-keyword">var</span> tree = VisualBasicSyntaxTree.ParseText(sourceText, path: review.FileName);
<span class="hljs-keyword">var</span> root = tree.GetCompilationUnitRoot();
<span class="hljs-keyword">var</span> node = Transform(root);
<span class="hljs-comment">// Check for changes</span>
<span class="hljs-keyword">if</span> (root.IsEquivalentTo(node))
    <span class="hljs-keyword">return</span>;
<span class="hljs-comment">// save the changes to file</span>
<span class="hljs-comment">// ...</span>
</pre>

								<p>The transformation involves iterating through matching literal expressions and
									replacing with resource keys from the language repository</p>

								<pre spellcheck="false"><span class="hljs-function"><span class="hljs-keyword">public</span> CompilationUnitSyntax <span class="hljs-title">Transform</span>(<span class="hljs-params">CompilationUnitSyntax node</span>)
</span>{
    <span class="hljs-keyword">while</span> (TryGetMatchingExpression(node, <span class="hljs-keyword">out</span> <span class="hljs-keyword">var</span> expression))
    {
        <span class="hljs-keyword">if</span> (!_resourceRepository.TryGetResource(expression.ToString().Trim(<span class="hljs-string">'"'</span>), <span class="hljs-keyword">out</span> <span class="hljs-keyword">var</span> <span class="hljs-keyword">value</span>))
            <span class="hljs-keyword">continue</span>;

        <span class="hljs-comment">// iterate through the literal expressionsvar resx = SyntaxFactory.ParseExpression(value.Key);if (expression.HasLeadingTrivia)</span>
            resx = resx.WithLeadingTrivia(expression.GetLeadingTrivia());
        <span class="hljs-keyword">if</span> (expression.HasTrailingTrivia)
            resx = resx.WithTrailingTrivia(expression.GetTrailingTrivia());
        node = node.ReplaceNode(expression, resx);
    }
    <span class="hljs-keyword">return</span> node;
}
</pre>

								<p>This process is repeated for every file flagged in the globalization review. Each
									project will get a P80.resx file. This combined with the human generated
									translations will result in the following file structure:</p>

								<pre spellcheck="false">MyProject
    P80.resx
    P80.designer.vb
    P80.fr.resx
    P80.es-Es.resx
</pre>

								<p>Compiling this project will result in the creation of satellite assemblies yada yada
									yada and hey presto your application is internationalized!

									Oh yeah, I forgot the dates, times and number formatting. For that I searched the
									syntax tree with queries similar to the snippet below:</p>

								<pre spellcheck="false">Regex SearchRegex = <span class="hljs-keyword">new</span> Regex(<span class="hljs-string">"tostring"</span>, RegexOptions.Compiled | RegexOptions.IgnoreCase);
<span class="hljs-comment">// ...</span>
<span class="hljs-keyword">var</span> invocations = root.DescendantNodes()
    .OfType&lt;InvocationExpressionSyntax&gt;()
    .Where(m =&gt; m.ArgumentList != <span class="hljs-keyword">null</span>
            &amp;&amp; !m.ArgumentList.Arguments.Any(a =&gt; a.ToFullString().Contains(<span class="hljs-string">"Culture"</span>))
            &amp;&amp; SearchRegex.IsMatch(m.ToFullString())
            &amp;&amp; m.ArgumentList.Arguments.Any(a =&gt; a.ToString().Contains(<span class="hljs-string">"dd/MM/yyyy\""</span>));
</pre>

								<p>And again, iterate through occurrences and replace with something like
									value.ToShortDateString() which is locale sensitive.</p>

								<h3>Summary</h3>

								<p>So what's the takeaway? We (I) broke the first law of metaprogramming with abandon
									(forgive me Kathleen). But, in my defense, the code is source controlled, and this
									is a one-time process per solution. Plus, using Roslyn (instead of regex and search
									and replace) for the critical edits means we can be confident that only specific
									transformations take place. Additionally, this can all be handled in a single sprint
									as part of the normal development cycle.

									The other take away, is that we can can reuse all these tools for any VB.net project
									(and by creating C# specific implementations of a couple of these
									transformation/extraction interfaces, any C# projects).

									Yeah, Roslyn is the best thing since vertically sliced architecture! And with that
									final terrible pun, I'll get my coat.</p>



								<footer class="blog-single-footer entry-footer">

									<!--<span class="tags-links">
									<a href="#" rel="tag">Granada</a>
									<a href="#" rel="tag">Spain</a>
									<a href="#" rel="tag">Travel</a>
								</span>-->

									<span class="share-links">
										<span class="text-uppercase ltr-sp-1">Share On</span>
										<ul class="social-icon circle branded social-icon-sm">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul><!-- /.social-icon -->
									</span><!-- /.share-links -->

								</footer><!-- /.blog-single-footer entry-footer -->

								<div class="post-author">

									<figure>
										<img src="./assets/demo/avatars/avatar-2.jpg" alt="avatar">
									</figure>
									<div class="post-author-info clearfix">
										<h3><a href="#">Eti Kagbala</a></h3>
										<h6>Editor</h6>
										<p>
											Technical Architect (Contract) at Baxter International Inc.
											Published • 1yr
										</p>
									</div><!-- /.post-author-info -->

								</div><!-- /.post-author -->

								<nav class="post-nav">

									<div class="nav-previous">
										<a href="#" rel="prev">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444"
												stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24"
												xml:space="preserve" width="24" height="24">
												<g>
													<line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12"
														stroke-linejoin="miter" stroke-linecap="butt"></line>
													<polyline stroke-linecap="square" stroke-miterlimit="10"
														points="9,19 2,12 9,5 " stroke-linejoin="miter"></polyline>
												</g>
											</svg>
											<span class="screen-reader-text">Previous Article</span>
											<span aria-hidden="true" class="nav-subtitle">Previous Article</span>
											<span class="nav-title"></span>
										</a>
									</div>

									<div class="nav-next">
										<a href="#" rel="next">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444"
												stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24"
												xml:space="preserve" width="24" height="24">
												<g transform="rotate(180 12,12) ">
													<line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12"
														stroke-linejoin="miter" stroke-linecap="butt"></line>
													<polyline stroke-linecap="square" stroke-miterlimit="10"
														points="9,19 2,12 9,5 " stroke-linejoin="miter"></polyline>
												</g>
											</svg>
											<span class="screen-reader-text">Next Article</span>
											<span aria-hidden="true" class="nav-subtitle">Next Article</span>
											<span class="nav-title">What is it about those greens on
												Stackoverflow?</span>
										</a>
									</div>

								</nav><!-- /.post-nav -->

							</div><!-- /.col-md-8 -->

						</div><!-- /.row -->
					</div><!-- /.container -->

					<div id="comments" class="comments-area">

						<div id="respond" class="comment-respond filled">

							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">

										<h3 id="reply-title" class="comment-reply-title">Leave a comment</h3>

										<form action="#" method="post" id="commentform" class="comment-form"
											novalidate="">
											<!-- <p class="comment-notes">
											<span id="email-notes">Your email address will not be published.</span> Required fields are marked
											<span class="required">*</span>
										</p> -->
											<div class="row">
												<div class="col-md-4 col-sm-6">
													<p class="comment-form-author">
														<input id="author" name="author" type="text" size="30"
															maxlength="245" aria-required="true" required="required">
														<span class="input-placeholder" data-split-text="true"
															data-split-options='{ "type": "chars" }'
															data-custom-animations="true"
															data-ca-options='{ "triggerHandler": "focus", "triggerTarget": "input", "triggerRelation": "siblings", "offTriggerHandler": "blur", "animationTarget": "all-childs", "delay": 50, "animations": { "translateY": "-20%", "rotateX": -45, "opacity": 0 } }'>Name*</span>
													</p>
												</div><!-- /.col-md-4 col-sm-6 -->
												<div class="col-md-4 col-sm-6">
													<p class="comment-form-email">
														<input id="email" name="email" type="email" size="30"
															maxlength="100" aria-describedby="email-notes"
															aria-required="true" required="required">
														<span class="input-placeholder" data-split-text="true"
															data-split-options='{ "type": "chars" }'
															data-custom-animations="true"
															data-ca-options='{ "triggerHandler": "focus", "triggerTarget": "input", "triggerRelation": "siblings", "offTriggerHandler": "blur", "animationTarget": "all-childs", "delay": 50, "animations": { "translateY": "-20%", "rotateX": -45, "opacity": 0 } }'>Email*</span>
													</p>
												</div><!-- /.col-md-4 col-sm-6 -->
												<div class="col-md-4 col-sm-12">
													<p class="comment-form-url">
														<input id="url" name="url" type="url" size="30" maxlength="200">
														<span class="input-placeholder" data-split-text="true"
															data-split-options='{ "type": "chars" }'
															data-custom-animations="true"
															data-ca-options='{ "triggerHandler": "focus", "triggerTarget": "input", "triggerRelation": "siblings", "offTriggerHandler": "blur", "animationTarget": "all-childs", "delay": 50, "animations": { "translateY": "-20%", "rotateX": -45, "opacity": 0 } }'>Website</span>
													</p>
												</div><!-- /.col-md-4 col-sm-12 -->
												<div class="col-sm-12">
													<p class="comment-form-comment">
														<textarea id="comment" name="comment" cols="45" rows="5"
															maxlength="65525" aria-required="true"
															required="required"></textarea>
														<span class="input-placeholder" data-split-text="true"
															data-split-options='{ "type": "chars" }'
															data-custom-animations="true"
															data-ca-options='{ "triggerHandler": "focus", "triggerTarget": "textarea", "triggerRelation": "siblings", "offTriggerHandler": "blur", "animationTarget": "all-childs", "delay": 50, "animations": { "translateY": "-20%", "rotateX": -45, "opacity": 0 } }'>Comment*</span>
													</p>
												</div><!-- /.col-sm-12 -->
												<div class="col-sm-12 text-right">
													<p class="form-submit">
														<input name="submit" type="submit" id="submit" class="submit"
															value="Submit">
													</p>
												</div><!-- /.col-sm-12 -->
											</div><!-- /.row -->
										</form>

									</div><!-- /.col-md-8 col-md-offset-2 -->
								</div><!-- /.row -->
							</div><!-- /.container -->

						</div><!-- /.comment-form -->

						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">

									<ol class="comment-list">

										<li class="comment">
											<article class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img alt="Avatar" src="./assets/demo/avatars/avatar-3.jpg"
															class="avatar">
														<b class="fn">
															<a href="#" rel="external nofollow" class="url">Robert
																Stevenson</a>
														</b>
														<span class="says">says:</span>
													</div> <!-- .comment-author -->

													<div class="comment-metadata">
														<a href="#">
															<time datetime="2018-03-13T09:25:41+00:00">3 hours
																ago</time>
														</a>
													</div> <!-- .comment-metadata -->

												</footer> <!-- .comment-meta -->

												<div class="comment-content">
													<p>This is great.</p>
												</div> <!-- .comment-content -->

												<div class="comment-extras">
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#"
															aria-label="Reply to A WordPress Commenter">Reply</a>
													</div><!-- /.reply -->
												</div>
											</article> <!-- .comment-body -->

											<!--<ol class="children">
											<li class="comment">
												<article class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="Avatar" src="./assets/demo/avatars/avatar-5.jpg" class="avatar">
															<b class="fn">
																<a href="#" rel="external nofollow" class="url">Leona Porter</a>
															</b>
															<span class="says">says:</span>
														</div> .comment-author
														
														<div class="comment-metadata">
															<a href="#">
																<time datetime="2018-03-14T09:13:13+00:00">2 hours ago</time>
															</a>
														</div> .comment-metadata 
													</footer>  .comment-meta 
													
													<div class="comment-content">
														<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													</div> .comment-content
													
													<div class="comment-extras">
														<div class="reply">
															<a rel="nofollow" class="comment-reply-link" href="#" aria-label="Reply to Mohsen">Reply</a>
														</div> /.reply
													</div>
												</article>  .comment-body 
											</li>  #comment-## 
										</ol> .children
									</li>  #comment-## -->

											<!--<li class="comment">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="Avatar" src="./assets/demo/avatars/avatar-4.jpg" class="avatar">
													<b class="fn">
														<a href="#" rel="external nofollow" class="url">Janie Black</a>
													</b>
													<span class="says">says:</span>
												</div>  .comment-author -
												
												<div class="comment-metadata">
													<a href="#">
														<time datetime="2018-03-14T09:13:30+00:00">December 25, 2017</time>
													</a>
												</div>  .comment-metadata 
											</footer>.comment-meta 
											
											<div class="comment-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div> .comment-content 
											
											<div class="comment-extras">
												<div class="reply">
													<a rel="nofollow" class="comment-reply-link" href="#" aria-label="Reply to Mohsen">Reply</a>
												</div></.reply 
											</div>
										</article> .comment-body
									</li>  #comment-## -->
									</ol>

								</div><!-- /.col-md-8 col-md-offset-2 -->
							</div><!-- /.row -->
						</div><!-- /.container -->

					</div><!-- /.comments-area -->

			</article><!-- /.blog-single -->

		</main><!-- /#content.content -->

		<footer id="contact" class="main-footer pt-80">


			<section class="pt-35 pb-35" style="background-color: #060742;">
				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">

						<div class="lqd-column col-md-4 text-center text-md-left mb-4 mb-md-0">

							<ul class="lqd-custom-menu reset-ul inline-nav font-size-14">
								<li><a class="footercolor" href="mailto:reck@lineone.net">reck@lineone.net</a></li>
								<li><a class="footercolor" href="tel:447791045991">+44 7791 045 991</a></li>
							</ul>

						</div><!-- /.col-md-4 -->

						<div class="lqd-column col-md-4 text-center mb-4 mb-md-0">

							<figure>
								<img src="./assets/img/logo/MCTS_logo2.png" alt="Ave">
							</figure>

						</div><!-- /.col-md-4 -->

						<div class="lqd-column col-md-4 text-center text-md-right">

							<p class="footercolor my-0"><span style="font-size: 15px;">© 2020 Pronounced80</span></p>

						</div><!-- /.col-md-4 text-md-right -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
		</footer><!-- /.main-footer -->
	</div><!-- /#wrap -->

	<script src="./assets/vendors/jquery.min.js"></script>
	<script src="./assets/js/theme-vendors.js"></script>
	<script src="./assets/js/theme.min.js"></script>

</body>

</html>