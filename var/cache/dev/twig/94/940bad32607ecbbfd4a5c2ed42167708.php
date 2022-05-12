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

/* Back/assets/vendor/tinymce/plugins/save/plugin.js */
class __TwigTemplate_be174bec722423914d4a2dc0ea805e18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/save/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/save/plugin.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
(function () {
    'use strict';

    var global\$2 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var enableWhenDirty = function (editor) {
      return editor.getParam('save_enablewhendirty', true);
    };
    var hasOnSaveCallback = function (editor) {
      return !!editor.getParam('save_onsavecallback');
    };
    var hasOnCancelCallback = function (editor) {
      return !!editor.getParam('save_oncancelcallback');
    };

    var displayErrorMessage = function (editor, message) {
      editor.notificationManager.open({
        text: message,
        type: 'error'
      });
    };
    var save = function (editor) {
      var formObj = global\$1.DOM.getParent(editor.id, 'form');
      if (enableWhenDirty(editor) && !editor.isDirty()) {
        return;
      }
      editor.save();
      if (hasOnSaveCallback(editor)) {
        editor.execCallback('save_onsavecallback', editor);
        editor.nodeChanged();
        return;
      }
      if (formObj) {
        editor.setDirty(false);
        if (!formObj.onsubmit || formObj.onsubmit()) {
          if (typeof formObj.submit === 'function') {
            formObj.submit();
          } else {
            displayErrorMessage(editor, 'Error: Form submit field collision.');
          }
        }
        editor.nodeChanged();
      } else {
        displayErrorMessage(editor, 'Error: No form element found.');
      }
    };
    var cancel = function (editor) {
      var h = global.trim(editor.startContent);
      if (hasOnCancelCallback(editor)) {
        editor.execCallback('save_oncancelcallback', editor);
        return;
      }
      editor.resetContent(h);
    };

    var register\$1 = function (editor) {
      editor.addCommand('mceSave', function () {
        save(editor);
      });
      editor.addCommand('mceCancel', function () {
        cancel(editor);
      });
    };

    var stateToggle = function (editor) {
      return function (api) {
        var handler = function () {
          api.setDisabled(enableWhenDirty(editor) && !editor.isDirty());
        };
        handler();
        editor.on('NodeChange dirty', handler);
        return function () {
          return editor.off('NodeChange dirty', handler);
        };
      };
    };
    var register = function (editor) {
      editor.ui.registry.addButton('save', {
        icon: 'save',
        tooltip: 'Save',
        disabled: true,
        onAction: function () {
          return editor.execCommand('mceSave');
        },
        onSetup: stateToggle(editor)
      });
      editor.ui.registry.addButton('cancel', {
        icon: 'cancel',
        tooltip: 'Cancel',
        disabled: true,
        onAction: function () {
          return editor.execCommand('mceCancel');
        },
        onSetup: stateToggle(editor)
      });
      editor.addShortcut('Meta+S', '', 'mceSave');
    };

    function Plugin () {
      global\$2.add('save', function (editor) {
        register(editor);
        register\$1(editor);
      });
    }

    Plugin();

}());
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/save/plugin.js";
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
(function () {
    'use strict';

    var global\$2 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global\$1 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var enableWhenDirty = function (editor) {
      return editor.getParam('save_enablewhendirty', true);
    };
    var hasOnSaveCallback = function (editor) {
      return !!editor.getParam('save_onsavecallback');
    };
    var hasOnCancelCallback = function (editor) {
      return !!editor.getParam('save_oncancelcallback');
    };

    var displayErrorMessage = function (editor, message) {
      editor.notificationManager.open({
        text: message,
        type: 'error'
      });
    };
    var save = function (editor) {
      var formObj = global\$1.DOM.getParent(editor.id, 'form');
      if (enableWhenDirty(editor) && !editor.isDirty()) {
        return;
      }
      editor.save();
      if (hasOnSaveCallback(editor)) {
        editor.execCallback('save_onsavecallback', editor);
        editor.nodeChanged();
        return;
      }
      if (formObj) {
        editor.setDirty(false);
        if (!formObj.onsubmit || formObj.onsubmit()) {
          if (typeof formObj.submit === 'function') {
            formObj.submit();
          } else {
            displayErrorMessage(editor, 'Error: Form submit field collision.');
          }
        }
        editor.nodeChanged();
      } else {
        displayErrorMessage(editor, 'Error: No form element found.');
      }
    };
    var cancel = function (editor) {
      var h = global.trim(editor.startContent);
      if (hasOnCancelCallback(editor)) {
        editor.execCallback('save_oncancelcallback', editor);
        return;
      }
      editor.resetContent(h);
    };

    var register\$1 = function (editor) {
      editor.addCommand('mceSave', function () {
        save(editor);
      });
      editor.addCommand('mceCancel', function () {
        cancel(editor);
      });
    };

    var stateToggle = function (editor) {
      return function (api) {
        var handler = function () {
          api.setDisabled(enableWhenDirty(editor) && !editor.isDirty());
        };
        handler();
        editor.on('NodeChange dirty', handler);
        return function () {
          return editor.off('NodeChange dirty', handler);
        };
      };
    };
    var register = function (editor) {
      editor.ui.registry.addButton('save', {
        icon: 'save',
        tooltip: 'Save',
        disabled: true,
        onAction: function () {
          return editor.execCommand('mceSave');
        },
        onSetup: stateToggle(editor)
      });
      editor.ui.registry.addButton('cancel', {
        icon: 'cancel',
        tooltip: 'Cancel',
        disabled: true,
        onAction: function () {
          return editor.execCommand('mceCancel');
        },
        onSetup: stateToggle(editor)
      });
      editor.addShortcut('Meta+S', '', 'mceSave');
    };

    function Plugin () {
      global\$2.add('save', function (editor) {
        register(editor);
        register\$1(editor);
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/save/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\save\\plugin.js");
    }
}
