<div class="s-content content">
	<main class="row content__page">

    <?php Theme::plugins('pageBegin') ?>

	<article class="column large-full entry format-standard">

        <?php if ($page->coverImage()): ?>
		<div class="media-wrap entry__media">
		<div class="entry__post-thumb">
			<img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->title() ?>">
		</div>
        </div>
        <?php endif ?>

		<div class="content__page-header entry__header">
		<h1 class="display-1 entry__title"><?php echo $page->title() ?></h1>

        <?php if ($page->published()): ?>
        <ul class="entry__header-meta">
			<li class="author">By <a href="#0"><?php echo $page->user('nickname') ?></a></li>
			<li class="date"><?php echo $page->date() ?></li>

            <?php if ($page->category()): ?>
            <li class="cat-links">
			<a href="<?php echo $page->categoryPermalink() ?>"><?php echo $page->category() ?></a>
            </li>
            <?php endif ?>
		</ul>
        </div> <!-- end entry__header -->
        <?php endif ?>

		<div class="entry__content">
        <?php echo $page->content() ?>
		</div> <!-- end entry content -->

        <!--
        <div class="entry__pagenav">
            <div class="entry__nav">
                <div class="entry__prev">
                    <a href="#0" rel="prev">
                        <span>Previous Post</span>
                        Tips on Minimalist Design
                    </a>
                </div>
                <div class="entry__next">
                    <a href="#0" rel="next">
                        <span>Next Post</span>
                        Less Is More
                    </a>
                </div>
            </div>
        </div>

        <div class="entry__related">
		<h3 class="h2">Related Articles</h3>

		<ul class="related">
			<li class="related__item">
			<a href="single-standard.html" class="related__link">
				<img src="images/thumbs/masonry/walk-600.jpg" alt="">
			</a>
			<h5 class="related__post-title">Using Repetition and Patterns in Photography.</h5>
			</li>
			<li class="related__item">
			<a href="single-standard.html" class="related__link">
				<img src="images/thumbs/masonry/dew-600.jpg" alt="">
			</a>
			<h5 class="related__post-title">Health Benefits Of Morning Dew.</h5>
			</li>
			<li class="related__item">
			<a href="single-standard.html" class="related__link">
				<img src="images/thumbs/masonry/rucksack-600.jpg" alt="">
			</a>
			<h5 class="related__post-title">The Art Of Visual Storytelling.</h5>
			</li>
		</ul>
        </div>
        -->

	</article> <!-- end column large-full entry-->

    <?php Theme::plugins('pageEnd') ?>

	</main>

</div> <!-- end s-content -->