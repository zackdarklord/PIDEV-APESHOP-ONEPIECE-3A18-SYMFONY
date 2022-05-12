<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Back/assets/vendor/tinymce/plugins/autosave/plugin.min.js */
class __TwigTemplate_be3151c330df7400582a00ba8f860a55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/autosave/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/autosave/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function o(t,e){var r=t||e,n=/^(\\d+)([ms]?)\$/.exec(\"\"+r);return(n[2]?{s:1e3,m:6e4}[n[2]]:1)*parseInt(r,10)}function n(t){var e=document.location;return t.getParam(\"autosave_prefix\",\"tinymce-autosave-{path}{query}{hash}-{id}-\").replace(/{path}/g,e.pathname).replace(/{query}/g,e.search).replace(/{hash}/g,e.hash).replace(/{id}/g,t.id)}function i(t,e){if(a(e))return t.dom.isEmpty(t.getBody());var r=d.trim(e);if(\"\"===r)return!0;var n=(new DOMParser).parseFromString(r,\"text/html\");return t.dom.isEmpty(n)}function u(t){var e=parseInt(v.getItem(n(t)+\"time\"),10)||0;return!((new Date).getTime()-e>o(t.getParam(\"autosave_retention\"),\"20m\")&&(g(t,!1),1))}function s(t){var e=n(t);!i(t)&&t.isDirty()&&(v.setItem(e+\"draft\",t.getContent({format:\"raw\",no_events:!0})),v.setItem(e+\"time\",(new Date).getTime().toString()),t.fire(\"StoreDraft\"))}function f(t){var e=n(t);u(t)&&(t.setContent(v.getItem(e+\"draft\"),{format:\"raw\"}),t.fire(\"RestoreDraft\"))}function c(t){t.undoManager.transact(function(){f(t),g(t)}),t.focus()}function m(r){return function(t){function e(){return t.setDisabled(!u(r))}return t.setDisabled(!u(r)),r.on(\"StoreDraft RestoreDraft RemoveDraft\",e),function(){return r.off(\"StoreDraft RestoreDraft RemoveDraft\",e)}}}var t=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),a=function(t){return void 0===t},l=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),v=tinymce.util.Tools.resolve(\"tinymce.util.LocalStorage\"),d=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),g=function(t,e){var r=n(t);v.removeItem(r+\"draft\"),v.removeItem(r+\"time\"),!1!==e&&t.fire(\"RemoveDraft\")},y=tinymce.util.Tools.resolve(\"tinymce.EditorManager\");t.add(\"autosave\",function(t){var e,r,n,a;return t.editorManager.on(\"BeforeUnload\",function(t){var e;d.each(y.get(),function(t){t.plugins.autosave&&t.plugins.autosave.storeDraft(),!e&&t.isDirty()&&t.getParam(\"autosave_ask_before_unload\",!0)&&(e=t.translate(\"You have unsaved changes are you sure you want to navigate away?\"))}),e&&(t.preventDefault(),t.returnValue=e)}),n=e=t,a=o(n.getParam(\"autosave_interval\"),\"30s\"),l.setEditorInterval(n,function(){s(n)},a),e.ui.registry.addButton(\"restoredraft\",{tooltip:\"Restore last draft\",icon:\"restore-draft\",onAction:function(){c(e)},onSetup:m(e)}),e.ui.registry.addMenuItem(\"restoredraft\",{text:\"Restore last draft\",icon:\"restore-draft\",onAction:function(){c(e)},onSetup:m(e)}),t.on(\"init\",function(){t.getParam(\"autosave_restore_when_empty\",!1)&&t.dom.isEmpty(t.getBody())&&f(t)}),r=t,{hasDraft:function(){return u(r)},storeDraft:function(){return s(r)},restoreDraft:function(){return f(r)},removeDraft:function(t){return g(r,t)},isEmpty:function(t){return i(r,t)}}})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/autosave/plugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function o(t,e){var r=t||e,n=/^(\\d+)([ms]?)\$/.exec(\"\"+r);return(n[2]?{s:1e3,m:6e4}[n[2]]:1)*parseInt(r,10)}function n(t){var e=document.location;return t.getParam(\"autosave_prefix\",\"tinymce-autosave-{path}{query}{hash}-{id}-\").replace(/{path}/g,e.pathname).replace(/{query}/g,e.search).replace(/{hash}/g,e.hash).replace(/{id}/g,t.id)}function i(t,e){if(a(e))return t.dom.isEmpty(t.getBody());var r=d.trim(e);if(\"\"===r)return!0;var n=(new DOMParser).parseFromString(r,\"text/html\");return t.dom.isEmpty(n)}function u(t){var e=parseInt(v.getItem(n(t)+\"time\"),10)||0;return!((new Date).getTime()-e>o(t.getParam(\"autosave_retention\"),\"20m\")&&(g(t,!1),1))}function s(t){var e=n(t);!i(t)&&t.isDirty()&&(v.setItem(e+\"draft\",t.getContent({format:\"raw\",no_events:!0})),v.setItem(e+\"time\",(new Date).getTime().toString()),t.fire(\"StoreDraft\"))}function f(t){var e=n(t);u(t)&&(t.setContent(v.getItem(e+\"draft\"),{format:\"raw\"}),t.fire(\"RestoreDraft\"))}function c(t){t.undoManager.transact(function(){f(t),g(t)}),t.focus()}function m(r){return function(t){function e(){return t.setDisabled(!u(r))}return t.setDisabled(!u(r)),r.on(\"StoreDraft RestoreDraft RemoveDraft\",e),function(){return r.off(\"StoreDraft RestoreDraft RemoveDraft\",e)}}}var t=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),a=function(t){return void 0===t},l=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),v=tinymce.util.Tools.resolve(\"tinymce.util.LocalStorage\"),d=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),g=function(t,e){var r=n(t);v.removeItem(r+\"draft\"),v.removeItem(r+\"time\"),!1!==e&&t.fire(\"RemoveDraft\")},y=tinymce.util.Tools.resolve(\"tinymce.EditorManager\");t.add(\"autosave\",function(t){var e,r,n,a;return t.editorManager.on(\"BeforeUnload\",function(t){var e;d.each(y.get(),function(t){t.plugins.autosave&&t.plugins.autosave.storeDraft(),!e&&t.isDirty()&&t.getParam(\"autosave_ask_before_unload\",!0)&&(e=t.translate(\"You have unsaved changes are you sure you want to navigate away?\"))}),e&&(t.preventDefault(),t.returnValue=e)}),n=e=t,a=o(n.getParam(\"autosave_interval\"),\"30s\"),l.setEditorInterval(n,function(){s(n)},a),e.ui.registry.addButton(\"restoredraft\",{tooltip:\"Restore last draft\",icon:\"restore-draft\",onAction:function(){c(e)},onSetup:m(e)}),e.ui.registry.addMenuItem(\"restoredraft\",{text:\"Restore last draft\",icon:\"restore-draft\",onAction:function(){c(e)},onSetup:m(e)}),t.on(\"init\",function(){t.getParam(\"autosave_restore_when_empty\",!1)&&t.dom.isEmpty(t.getBody())&&f(t)}),r=t,{hasDraft:function(){return u(r)},storeDraft:function(){return s(r)},restoreDraft:function(){return f(r)},removeDraft:function(t){return g(r,t)},isEmpty:function(t){return i(r,t)}}})}();", "Back/assets/vendor/tinymce/plugins/autosave/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\autosave\\plugin.min.js");
    }
}
