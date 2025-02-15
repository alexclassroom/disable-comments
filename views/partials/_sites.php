<div class="">
<div class="d__flex mb15 space__between">
    <div class='subsite__checklist__item' style="flex: 1 1 200px;">
        <input
            type='checkbox'
            class='check-all'
            id='sites__option__<?php echo esc_attr($type);?>__check__all'
            name='disabled_sites[all]'
            value='1'
        >
        <label for='sites__option__<?php echo esc_attr($type);?>__check__all'>
            <b><?php esc_html_e('Select All', 'disable-comments'); ?></b>
            <small>(<?php esc_html_e('0 selected', 'disable-comments'); ?>)</small>
        </label>
    </div>
    <div class="mb10" style="text-align: right; flex: 0 0 230px;">
        <div class="icon__input sub__site_control">
            <span class="icon">
                <?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
                <img src="<?php echo esc_url(DC_ASSETS_URI . 'img/search.svg'); ?>" alt="">
            </span>
            <input type="text" class="form__control w-100 sub-site-search" placeholder="<?php esc_html_e('Search by domain name...', 'disable-comments'); ?>" style="padding-right: 35px;">
        </div>
    </div>
</div>
<div class="sites_list">
    <div class="nothing-found"><p><?php esc_html_e('No subsite found', 'disable-comments'); ?></p></div>
</div>
<div class="d__flex space__between">
    <div class="d__flex item__number__controller sub__site_control page__size__wrapper">
        <p><?php esc_html_e('Show Items:', 'disable-comments'); ?></p>
        <div class="dc-select">
            <span class="icon"></span>
            <select class="form__control page__size">
                <!-- <option value="2">2</option> -->
                <!-- <option value="10">10</option> -->
                <option value="20"><?php esc_html_e('20', 'disable-comments'); ?></option>
                <option value="50" selected><?php esc_html_e('50', 'disable-comments'); ?></option>
                <option value="100"><?php esc_html_e('100', 'disable-comments'); ?></option>
                <option value="200"><?php esc_html_e('200', 'disable-comments'); ?></option>
            </select>
        </div>
    </div>
    <div class="has-pagination"></div>
</div>
</div>

