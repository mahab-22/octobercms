<backend-component-document
    :header-collapsed="documentHeaderCollapsed"
    :full-screen="documentFullScreen"
    :loading="initializing"
    :processing="processing"
    :error-loading-document="errorLoadingDocument"
    error-loading-document-header="<?= e(trans('cms::lang.editor.error_loading_header')) ?>"
    container-css-class="fill-container"
>
    <template v-slot:header>
        <backend-component-document-header
            title-property="fileName"
            ref="documentHeader"
            :disabled="isDirectDocumentMode || processing"
            :data="documentData"
            :document-icon="directDocumentIcon"
            :show-close-icon="isDirectDocumentMode"
            @documentcloseclick="onDocumentCloseClick"
        ></backend-component-document-header>
    </template>
    
    <template v-slot:toolbar>
        <backend-component-document-toolbar
            :elements="toolbarElements"
            @command="onToolbarCommand"
            :disabled="processing || toolbarDisabled"
        ></backend-component-document-toolbar>
    </template>

    <template v-slot:content>
        <div class="flex-layout-column fill-container">
            <div class="flex-layout-item fix">
                <cms-object-component-list
                    v-if="hasVisibleComponents"
                    :components="documentData.components"
                    @remove="onComponentRemove"
                    @inspectorshowed="onInspectorShowed"
                    @inspectorhidden="onInspectorHidden"
                ></cms-object-component-list>
            </div>
            <div class="flex-layout-item stretch editor-panel relative">
                <backend-component-monacoeditor
                    ref="editor"
                    container-css-class="fill-container"
                    :model-definitions="codeEditorModelDefinitions"
                    :support-drag-events="true"
                    @monacoloaded="onMonacoLoaded"
                    @dispose="onMonacoDispose"
                    @drop="onEditorDragDrop"
                    @contextmenu="onEditorContextMenu"
                    @filtersupportedactions="onEditorFilterSupportedActions"
                    @customevent="onEditorCustomEvent"
                >
                </backend-component-monacoeditor>
            </div>

            <editor-conflict-resolver
                ref="conflictResolver"
            ></editor-conflict-resolver>
        </div>
    </template>
</backend-component-document>