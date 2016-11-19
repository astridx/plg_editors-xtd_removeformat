<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Editors-xtd.removeformat
 *
 * @copyright   Astrid Günther.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Editor Removeformat button
 *
 * @since  3.6
 */
class PlgButtonRemoveformat extends JPlugin {

    /**
     * Load the language file on instantiation.
     *
     * @var    boolean
     * @since  3.1
     */
    protected $autoloadLanguage = true;

    /**
     * Display the button
     *
     * @param   string  $name  The name of the button to add
     *
     * @return array A four element array of (article_id, article_title, category_id, object)
     */
    public function onDisplay($name) {

        $button = new JObject;
        $button->class = 'btn';
        $button->onclick = 'tinyMCE.execCommand("removeformat", false, "jform_articletext");return false;';
        $button->modal = false;
        $button->text = JText::_('PLG_REMOVEFORMAT_BUTTON_REMOVEFORMAT');
        $button->name = 'filter';
        $button->link = '#';

        return $button;
    }

}
