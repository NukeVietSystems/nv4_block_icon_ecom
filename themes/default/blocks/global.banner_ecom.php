<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sun, 04 May 2014 12:41:32 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

if (!nv_function_exists('nv_menu_theme_icon_ecom')) {
    /**
     * nv_menu_theme_icon_ecom_config()
     *
     * @param mixed $module
     * @param mixed $data_block
     * @param mixed $lang_block
     * @return
     */
    function nv_menu_theme_icon_ecom_config($module, $data_block, $lang_block)
    {
        $html = '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_1_title'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_1_title" class="form-control" value="' . $data_block['icon_1_title'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_1_content'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_1_content" class="form-control" value="' . $data_block['icon_1_content'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_1_icon'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_1_icon" class="form-control" value="' . $data_block['icon_1_icon'] . '"/></div>';
        $html .= '</div>';
		$html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_2_title'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_2_title" class="form-control" value="' . $data_block['icon_2_title'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_2_content'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_2_content" class="form-control" value="' . $data_block['icon_2_content'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_2_icon'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_2_icon" class="form-control" value="' . $data_block['icon_2_icon'] . '"/></div>';
        $html .= '</div>';
		$html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_3_title'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_3_title" class="form-control" value="' . $data_block['icon_3_title'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_3_content'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_3_content" class="form-control" value="' . $data_block['icon_3_content'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_3_icon'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_3_icon" class="form-control" value="' . $data_block['icon_3_icon'] . '"/></div>';
        $html .= '</div>';
		$html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_4_title'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_4_title" class="form-control" value="' . $data_block['icon_4_title'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_4_content'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_4_content" class="form-control" value="' . $data_block['icon_4_content'] . '"/></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '	<label class="control-label col-sm-6">' . $lang_block['icon_4_icon'] . ':</label>';
        $html .= '	<div class="col-sm-18"><input type="text" name="config_icon_4_icon" class="form-control" value="' . $data_block['icon_4_icon'] . '"/></div>';
        $html .= '</div>';

        return $html;
    }

    /**
     * nv_menu_theme_icon_ecom_submit()
     *
     * @param mixed $module
     * @param mixed $lang_block
     * @return
     */
    function nv_menu_theme_icon_ecom_submit($module, $lang_block)
    {
        global $nv_Request;
        $return = array();
        $return['error'] = array();
        $return['config']['icon_1_title'] = $nv_Request->get_title('config_icon_1_title', 'post');
        $return['config']['icon_1_content'] = $nv_Request->get_title('config_icon_1_content', 'post');
        $return['config']['icon_1_icon'] = $nv_Request->get_title('config_icon_1_icon', 'post');
        $return['config']['icon_2_title'] = $nv_Request->get_title('config_icon_2_title', 'post');
        $return['config']['icon_2_content'] = $nv_Request->get_title('config_icon_2_content', 'post');
        $return['config']['icon_2_icon'] = $nv_Request->get_title('config_icon_2_icon', 'post');
        $return['config']['icon_3_title'] = $nv_Request->get_title('config_icon_3_title', 'post');
        $return['config']['icon_3_content'] = $nv_Request->get_title('config_icon_3_content', 'post');
        $return['config']['icon_3_icon'] = $nv_Request->get_title('config_icon_3_icon', 'post');
        $return['config']['icon_4_title'] = $nv_Request->get_title('config_icon_4_title', 'post');
        $return['config']['icon_4_content'] = $nv_Request->get_title('config_icon_4_content', 'post');
        $return['config']['icon_4_icon'] = $nv_Request->get_title('config_icon_4_icon', 'post');
        return $return;
    }

    /**
     * nv_menu_theme_icon_ecom()
     *
     * @param mixed $block_config
     * @return
     */
    function nv_menu_theme_icon_ecom($block_config)
    {
        global $global_config, $site_mods, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.banner_ecom.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.banner_ecom.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('global.banner_ecom.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
        $xtpl->assign('LANG', $lang_global);
        $xtpl->assign('BLOCK_THEME', $block_theme);
        $xtpl->assign('DATA', $block_config);
        if (!empty($block_config['icon_1_title'])) {
            $xtpl->parse('main.icon_1');
        }
		if (!empty($block_config['icon_2_title'])) {
            $xtpl->parse('main.icon_2');
        }
		if (!empty($block_config['icon_3_title'])) {
            $xtpl->parse('main.icon_3');
        }
		
		if (!empty($block_config['icon_4_title'])) {
            $xtpl->parse('main.icon_4');
        }
        $xtpl->parse('main');
        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_menu_theme_icon_ecom($block_config);
}
