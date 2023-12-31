<?php namespace Backend\Controllers;

use Lang;
use Flash;
use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
use Backend\Models\Preference as PreferenceModel;

/**
 * Preferences controller
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 *
 */
class Preferences extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class
    ];

    /**
     * @var array formConfig `FormController` configuration.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var array requiredPermissions to view this page.
     */
    public $requiredPermissions = ['preferences'];

    /**
     * __construct
     */
    public function __construct()
    {
        parent::__construct();

        $this->addCss('/modules/backend/formwidgets/codeeditor/assets/css/codeeditor.css');
        $this->addJs('/modules/backend/formwidgets/codeeditor/assets/js/build-min.js');
        $this->addJs('/modules/backend/assets/js/preferences/preferences.js');

        BackendMenu::setContext('October.System', 'system', 'mysettings');
        SettingsManager::setContext('October.Backend', 'preferences');
    }

    /**
     * index
     */
    public function index()
    {
        $this->pageTitle = 'backend::lang.backend_preferences.menu_label';
        $this->asExtension('FormController')->update();
    }

    /**
     * formExtendFields removes the code editor tab if there is no permission.
     */
    public function formExtendFields($form)
    {
        if (!$this->user->hasAccess('preferences.code_editor')) {
            $form->removeTab('Code Editor');
        }
    }

    /**
     * index_onSave
     */
    public function index_onSave()
    {
        return $this->asExtension('FormController')->update_onSave();
    }

    /**
     * index_onResetDefault
     */
    public function index_onResetDefault()
    {
        $model = $this->formFindModelObject();
        $model->resetDefault();

        Flash::success(Lang::get('backend::lang.form.reset_success'));

        return Backend::redirect('backend/preferences');
    }

    /**
     * formFindModelObject
     */
    public function formFindModelObject()
    {
        return PreferenceModel::instance();
    }
}
