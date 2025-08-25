<?php
	defined("_AST") or die("Access denied");
?>

<section class="people-say">
    <div class="container">
        <h3 class="title-section">WHAT PEOPLE SAY</h3>
        <div class="text-slider">
            <div class="owl-carousel owl-theme owl-loaded" id="owl-carousel">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
	                    <?php
                            foreach($CP['ListOfSliders'] as $item){
                        ?>
                        <div class="owl-item">
                            <article class="quote-extra">
                                <div class="quote-extra-caption">
                                    <div class="text-customer">
                                        <?= $item['text']; ?>
                                    </div>
                                    <div class="figure-customer">
                                        <img src="assets/img/people/user-<?= $item['id']; ?>>.jpg" alt="<?= $item['title']; ?>">
                                    </div>
                                    <h6 class="quote-extra-author"><?= $item['name']; ?></h6>
                                    <div class="quote-extra-status"><?= $item['job']; ?></div>
                                </div>
                            </article>
                        </div>
                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>