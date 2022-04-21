<?php
// Determine columns sizing
$mdSizing = 12 / ($block['row_count'] ?? 3);
?>

<div class="card-grid">
    <div class="row mb-n4">
        <?php foreach ($block['cards'] as $card) : ?>
            <?php
            $card += [
                'heading' => '',
                'subheading' => '',
                'content' => '',
                'sub_content' => '',
                'cta' => [],
                'img' => []
            ];
            ?>
            <div class="callout-card__card-wrapper col-12 col-md-<?= esc_attr($mdSizing) ?> mb-4">

                    <?php if (!empty($card['image'])) : ?>

                        <div class="card-grid__image">
                            <?= wp_get_attachment_image($card['image']['id'], 'large', false, ['class' => 'card-image']); ?>
                        </div>
                    <?php else : ?>
                        <div class="card-grid__text">
                            <?= $card['content'] ?>
                        </div>
                    <?php endif ?>
                        <div class="card-grid__subcontent">
                            <?= $card['sub_content'] ?>
                        </div>
                    <?php if (!empty($card['bottom_content'])) : ?>
                        <div class="card-grid__footer">
                        <?= $card['bottom_content'] ?>
                        </div>
                    <?php endif ?>

            </div>
        <?php endforeach ?>
    </div>
</div>
