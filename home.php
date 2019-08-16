<div class="s-content">

<div class="masonry-wrap">

    <div class="masonry">

	<div class="grid-sizer"></div>

	<?php if (empty($content)): ?>
	<div>
	<?php $language->p('No pages found') ?>
	</div>
	<?php endif ?>

	<!-- Articles -->
	<?php foreach ($content as $page): ?>
	<article class="masonry__brick entry format-standard animate-this">

	    <?php if ($page->coverImage()): ?>
	    <div class="entry__thumb">
		<a href="<?php echo $page->permalink() ?>" class="entry__thumb-link">
		    <img src="<?php echo $page->thumbCoverImage() ?>"
			    srcset="<?php echo $page->coverImage() ?> 1x" alt="<?php echo $page->title() ?>">
		</a>
	    </div>
	    <?php endif ?>

	    <div class="entry__text">
		<div class="entry__header">

		    <h2 class="entry__title"><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h2>
		    <div class="entry__meta">
			<span class="entry__meta-cat">
			    <a href="<?php echo $page->categoryPermalink() ?>"><?php echo $page->category() ?></a>
			</span>
			<span class="entry__meta-date">
			    <a href="<?php echo $page->permalink() ?>"><?php echo $page->date() ?></a>
			</span>
		    </div>

		</div>
		<div class="entry__excerpt">
		<?php echo $page->contentBreak() ?>
		</div>
	    </div>

	</article> <!-- end article -->
	<?php endforeach ?>

    </div> <!-- end masonry -->

</div> <!-- end masonry-wrap -->

<?php if (Paginator::numberOfPages()>1): ?>
<div class="row">
    <div class="column large-full">
	<nav class="pgn">
	    <ul>
		<?php if (Paginator::showPrev()): ?>
		<li><a class="pgn__prev" href="<?php echo Paginator::previousPageUrl() ?>">Prev</a></li>
		<?php endif ?>

		<?php for ($i=1; $i<=Paginator::numberOfPages(); $i++): ?>
		<li><a class="pgn__num <?php echo ( (Paginator::currentPage() == $i)?'current':'' ) ?>" href="<?php echo Paginator::numberUrl($i) ?>"><?php echo $i ?></a></li>
		<?php endfor ?>

		<?php if (Paginator::showNext()): ?>
		<li><a class="pgn__next" href="<?php echo Paginator::nextPageUrl() ?>">Next</a></li>
		<?php endif ?>
	    </ul>
	</nav>
    </div>
</div>
<?php endif ?>

</div> <!-- end s-content -->