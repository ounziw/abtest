<h3>Options</h3>
<p style="margin-bottom: 0.5em;">
    <label><?= __('Select a form:') ?>&nbsp;
        <?php
        $options = array();

        $forms = \Arr::pluck(\ABTEST\Model_Abtest::find('all', $options), 'abte_title', 'abte_id');
        echo \Fuel\Core\Form::select('abte_id', \Arr::get($enhancer_args, 'abte_id', ''), $forms);
        ?>
    </label>
</p>
<p style="margin-bottom: 0.5em;">
<?= __('Link Page:') ?>
</p>
<div class="enhancer_confirmation_page_id">
    <?= \Nos\Page\Renderer_Selector::renderer(array(
        'input_name' => 'confirmation_page_id',
        'selected' => array(
            'id' => \Arr::get($enhancer_args, 'confirmation_page_id', null),
        ),
        'treeOptions' => array(
            'context' => \Arr::get($enhancer_args, 'nosContext', \Nos\Tools_Context::defaultContext()),
        ),
    )); ?>
</div>