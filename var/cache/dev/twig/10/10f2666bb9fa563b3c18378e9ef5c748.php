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

/* Back/assets/vendor/tinymce/plugins/save/plugin.min.js */
class __TwigTemplate_348e91dd94a986b4f2ed65bd4cc6c1c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/save/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/save/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function o(e){return e.getParam(\"save_enablewhendirty\",!0)}function a(e,n){e.notificationManager.open({text:n,type:\"error\"})}function t(t){t.addCommand(\"mceSave\",function(){!function(e){var n=c.DOM.getParent(e.id,\"form\");if(!o(e)||e.isDirty()){if(e.save(),e.getParam(\"save_onsavecallback\"))return e.execCallback(\"save_onsavecallback\",e),e.nodeChanged();n?(e.setDirty(!1),n.onsubmit&&!n.onsubmit()||(\"function\"==typeof n.submit?n.submit():a(e,\"Error: Form submit field collision.\")),e.nodeChanged()):a(e,\"Error: No form element found.\")}}(t)}),t.addCommand(\"mceCancel\",function(){var e=t,n=r.trim(e.startContent);e.getParam(\"save_oncancelcallback\")?e.execCallback(\"save_oncancelcallback\",e):e.resetContent(n)})}function i(t){return function(e){function n(){e.setDisabled(o(t)&&!t.isDirty())}return n(),t.on(\"NodeChange dirty\",n),function(){return t.off(\"NodeChange dirty\",n)}}}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),c=tinymce.util.Tools.resolve(\"tinymce.dom.DOMUtils\"),r=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");e.add(\"save\",function(e){var n;(n=e).ui.registry.addButton(\"save\",{icon:\"save\",tooltip:\"Save\",disabled:!0,onAction:function(){return n.execCommand(\"mceSave\")},onSetup:i(n)}),n.ui.registry.addButton(\"cancel\",{icon:\"cancel\",tooltip:\"Cancel\",disabled:!0,onAction:function(){return n.execCommand(\"mceCancel\")},onSetup:i(n)}),n.addShortcut(\"Meta+S\",\"\",\"mceSave\"),t(e)})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/save/plugin.min.js";
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
!function(){\"use strict\";function o(e){return e.getParam(\"save_enablewhendirty\",!0)}function a(e,n){e.notificationManager.open({text:n,type:\"error\"})}function t(t){t.addCommand(\"mceSave\",function(){!function(e){var n=c.DOM.getParent(e.id,\"form\");if(!o(e)||e.isDirty()){if(e.save(),e.getParam(\"save_onsavecallback\"))return e.execCallback(\"save_onsavecallback\",e),e.nodeChanged();n?(e.setDirty(!1),n.onsubmit&&!n.onsubmit()||(\"function\"==typeof n.submit?n.submit():a(e,\"Error: Form submit field collision.\")),e.nodeChanged()):a(e,\"Error: No form element found.\")}}(t)}),t.addCommand(\"mceCancel\",function(){var e=t,n=r.trim(e.startContent);e.getParam(\"save_oncancelcallback\")?e.execCallback(\"save_oncancelcallback\",e):e.resetContent(n)})}function i(t){return function(e){function n(){e.setDisabled(o(t)&&!t.isDirty())}return n(),t.on(\"NodeChange dirty\",n),function(){return t.off(\"NodeChange dirty\",n)}}}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),c=tinymce.util.Tools.resolve(\"tinymce.dom.DOMUtils\"),r=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");e.add(\"save\",function(e){var n;(n=e).ui.registry.addButton(\"save\",{icon:\"save\",tooltip:\"Save\",disabled:!0,onAction:function(){return n.execCommand(\"mceSave\")},onSetup:i(n)}),n.ui.registry.addButton(\"cancel\",{icon:\"cancel\",tooltip:\"Cancel\",disabled:!0,onAction:function(){return n.execCommand(\"mceCancel\")},onSetup:i(n)}),n.addShortcut(\"Meta+S\",\"\",\"mceSave\"),t(e)})}();", "Back/assets/vendor/tinymce/plugins/save/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\save\\plugin.min.js");
    }
}
