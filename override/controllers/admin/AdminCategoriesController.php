<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @property Category $object
 */
class AdminCategoriesController extends AdminCategoriesControllerCore
{

    public function __construct()
    {

        parent::__construct();
		


        $this->fields_list = array(
            'id_category' => array(
                'title' => $this->trans('ID', array(), 'Admin.Global'),
                'align' => 'center',
                'class' => 'fixed-width-xs'
            ),
            'name' => array(
                'title' => $this->trans('Name', array(), 'Admin.Global')
            ),
            'description' => array(
                'title' => $this->trans('Description', array(), 'Admin.Global'),
                'callback' => 'getDescriptionClean',
                'orderby' => false
            ),
            'position' => array(
                'title' => $this->trans('Position', array(), 'Admin.Global'),
                'filter_key' => 'sa!position',
                'position' => 'position',
                'align' => 'center'
            ),
            'active' => array(
                'title' => $this->trans('Displayed', array(), 'Admin.Global'),
                'active' => 'status',
                'type' => 'bool',
                'class' => 'fixed-width-xs',
                'align' => 'center',
                'ajax' => true,
                'orderby' => false
            ),
			'link_rewrite' => array(
                'title' => $this->trans('Friendly URL', array(), 'Admin.Global')
            )
        );

      
    }

  
}
