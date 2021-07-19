<?php

/**
 * Case studies Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value
$id = 'faq-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values
$className = 'section faq';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values
$faq_title_text = get_field('faq_title')['faq_title_text'] ?: 'Title';
$faq_title_tag = get_field('faq_title')['faq_title_tag'] ?: 'h2';
$faq_description = get_field('faq_description') ?: 'Type description here...';
$faq_accordion = get_field('faq_accordion');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="faq__text">
            <?php echo sprintf(
                '<%s class="faq__h">%s</%s>',
                $faq_title_tag,
                $faq_title_text,
                $faq_title_tag
            ); ?>
            <div class="faq__description">
                <?php echo $faq_description; ?>
            </div>
        </div>
        <?php if ($faq_accordion) : ?>
            <div class="accordion" id="faqAccordion">
                <?php foreach ($faq_accordion as $index => $faq_tab) {
                    $faq_question = $faq_tab['faq_question'];
                    $faq_answear = $faq_tab['faq_answear'];
                    $tab_id = wp_unique_id();
                ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo $tab_id; ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $tab_id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $tab_id; ?>">
                                <?php echo $faq_question; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $tab_id; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $tab_id; ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php echo $faq_answear; ?>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        <?php endif; ?>
    </div>
</div>