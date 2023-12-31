<?php namespace Cms\Classes\EditorExtension;

use Lang;
use Backend;
use BackendAuth;
use Cms\Classes\Theme;
use Backend\VueComponents\DropdownMenu\ItemDefinition;

/**
 * HasExtensionThemesState initializes themes state for the CMS Editor Extension
 */
trait HasExtensionThemesState
{
    /**
     * createCmsSectionThemeMenuItems
     */
    private function createCmsSectionThemeMenuItems($section)
    {
        $user = BackendAuth::getUser();

        $currentEditTheme = $this->getTheme();
        $currentEditThemeDirName = $currentEditTheme ? $currentEditTheme->getDirName() : null;

        $themeMenuItem = new ItemDefinition(ItemDefinition::TYPE_TEXT, Lang::get('cms::lang.editor.edit_theme'), 'cms:edit_theme');
        $themes = Theme::allAvailable();
        $themesFound = false;
        foreach ($themes as $theme) {
            $themesFound = true;
            $themeDir = $theme->getDirName();
            $themeName = $theme->getConfigValue('name') ?: $theme->getDirName();

            $themeMenuItem
                ->addItem(ItemDefinition::TYPE_RADIOBUTTON, $themeName, 'cms:set-edit-theme@'.$themeDir)
                ->setChecked($themeDir == $currentEditThemeDirName);
        }

        if ($user->hasAnyAccess(['cms.themes', 'cms.theme_customize'])) {
            if ($themesFound) {
                $themeMenuItem->addItem(ItemDefinition::TYPE_SEPARATOR);
            }

            $themeMenuItem
                ->addItem(ItemDefinition::TYPE_TEXT, Lang::get('cms::lang.editor.manage_themes'), 'cms:manage-themes')
                ->setLinkHref(Backend::url('cms/themes'))
                ->setLinkTarget('_blank');
        }

        $section->addMenuItemObject($themeMenuItem);
    }
}
