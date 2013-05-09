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