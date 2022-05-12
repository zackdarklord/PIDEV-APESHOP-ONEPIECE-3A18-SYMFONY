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

/* Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.mobile.css */
class __TwigTemplate_fef459d5edd432e42dd9f7a846c1574b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.mobile.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.mobile.css"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */
/* RESET all the things! */
.tinymce-mobile-outer-container {
  all: initial;
  display: block;
}
.tinymce-mobile-outer-container * {
  border: 0;
  box-sizing: initial;
  cursor: inherit;
  float: none;
  line-height: 1;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-tap-highlight-color: transparent;
  /* TBIO-3691, stop the gray flicker on touch. */
  text-shadow: none;
  white-space: nowrap;
}
.tinymce-mobile-icon-arrow-back::before {
  content: \"\\e5cd\";
}
.tinymce-mobile-icon-image::before {
  content: \"\\e412\";
}
.tinymce-mobile-icon-cancel-circle::before {
  content: \"\\e5c9\";
}
.tinymce-mobile-icon-full-dot::before {
  content: \"\\e061\";
}
.tinymce-mobile-icon-align-center::before {
  content: \"\\e234\";
}
.tinymce-mobile-icon-align-left::before {
  content: \"\\e236\";
}
.tinymce-mobile-icon-align-right::before {
  content: \"\\e237\";
}
.tinymce-mobile-icon-bold::before {
  content: \"\\e238\";
}
.tinymce-mobile-icon-italic::before {
  content: \"\\e23f\";
}
.tinymce-mobile-icon-unordered-list::before {
  content: \"\\e241\";
}
.tinymce-mobile-icon-ordered-list::before {
  content: \"\\e242\";
}
.tinymce-mobile-icon-font-size::before {
  content: \"\\e245\";
}
.tinymce-mobile-icon-underline::before {
  content: \"\\e249\";
}
.tinymce-mobile-icon-link::before {
  content: \"\\e157\";
}
.tinymce-mobile-icon-unlink::before {
  content: \"\\eca2\";
}
.tinymce-mobile-icon-color::before {
  content: \"\\e891\";
}
.tinymce-mobile-icon-previous::before {
  content: \"\\e314\";
}
.tinymce-mobile-icon-next::before {
  content: \"\\e315\";
}
.tinymce-mobile-icon-large-font::before,
.tinymce-mobile-icon-style-formats::before {
  content: \"\\e264\";
}
.tinymce-mobile-icon-undo::before {
  content: \"\\e166\";
}
.tinymce-mobile-icon-redo::before {
  content: \"\\e15a\";
}
.tinymce-mobile-icon-removeformat::before {
  content: \"\\e239\";
}
.tinymce-mobile-icon-small-font::before {
  content: \"\\e906\";
}
.tinymce-mobile-icon-readonly-back::before,
.tinymce-mobile-format-matches::after {
  content: \"\\e5ca\";
}
.tinymce-mobile-icon-small-heading::before {
  content: \"small\";
}
.tinymce-mobile-icon-large-heading::before {
  content: \"large\";
}
.tinymce-mobile-icon-small-heading::before,
.tinymce-mobile-icon-large-heading::before {
  font-family: sans-serif;
  font-size: 80%;
}
.tinymce-mobile-mask-edit-icon::before {
  content: \"\\e254\";
}
.tinymce-mobile-icon-back::before {
  content: \"\\e5c4\";
}
.tinymce-mobile-icon-heading::before {
  /* TODO: Translate */
  content: \"Headings\";
  font-family: sans-serif;
  font-size: 80%;
  font-weight: bold;
}
.tinymce-mobile-icon-h1::before {
  content: \"H1\";
  font-weight: bold;
}
.tinymce-mobile-icon-h2::before {
  content: \"H2\";
  font-weight: bold;
}
.tinymce-mobile-icon-h3::before {
  content: \"H3\";
  font-weight: bold;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask {
  align-items: center;
  display: flex;
  justify-content: center;
  background: rgba(51, 51, 51, 0.5);
  height: 100%;
  position: absolute;
  top: 0;
  width: 100%;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container {
  align-items: center;
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  font-family: sans-serif;
  font-size: 1em;
  justify-content: space-between;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .mixin-menu-item {
  align-items: center;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  height: 2.1em;
  width: 2.1em;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section {
  align-items: center;
  display: flex;
  justify-content: center;
  flex-direction: column;
  font-size: 1em;
}
@media only screen and (min-device-width:700px) {
  .tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section {
    font-size: 1.2em;
  }
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section .tinymce-mobile-mask-tap-icon {
  align-items: center;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  height: 2.1em;
  width: 2.1em;
  background-color: white;
  color: #207ab7;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section .tinymce-mobile-mask-tap-icon::before {
  content: \"\\e900\";
  font-family: 'tinymce-mobile', sans-serif;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section:not(.tinymce-mobile-mask-tap-icon-selected) .tinymce-mobile-mask-tap-icon {
  z-index: 2;
}
.tinymce-mobile-android-container.tinymce-mobile-android-maximized {
  background: #ffffff;
  border: none;
  bottom: 0;
  display: flex;
  flex-direction: column;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
}
.tinymce-mobile-android-container:not(.tinymce-mobile-android-maximized) {
  position: relative;
}
.tinymce-mobile-android-container .tinymce-mobile-editor-socket {
  display: flex;
  flex-grow: 1;
}
.tinymce-mobile-android-container .tinymce-mobile-editor-socket iframe {
  display: flex !important;
  flex-grow: 1;
  height: auto !important;
}
.tinymce-mobile-android-scroll-reload {
  overflow: hidden;
}
:not(.tinymce-mobile-readonly-mode) > .tinymce-mobile-android-selection-context-toolbar {
  margin-top: 23px;
}
.tinymce-mobile-toolstrip {
  background: #fff;
  display: flex;
  flex: 0 0 auto;
  z-index: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar {
  align-items: center;
  background-color: #fff;
  border-bottom: 1px solid #cccccc;
  display: flex;
  flex: 1;
  height: 2.5em;
  width: 100%;
  /* Make it no larger than the toolstrip, so that it needs to scroll */
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group {
  align-items: center;
  display: flex;
  height: 100%;
  flex-shrink: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group > div {
  align-items: center;
  display: flex;
  height: 100%;
  flex: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group.tinymce-mobile-exit-container {
  background: #f44336;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group.tinymce-mobile-toolbar-scrollable-group {
  flex-grow: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item {
  padding-left: 0.5em;
  padding-right: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item.tinymce-mobile-toolbar-button {
  align-items: center;
  display: flex;
  height: 80%;
  margin-left: 2px;
  margin-right: 2px;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item.tinymce-mobile-toolbar-button.tinymce-mobile-toolbar-button-selected {
  background: #c8cbcf;
  color: #cccccc;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group:first-of-type,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group:last-of-type {
  background: #207ab7;
  color: #eceff1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar {
  /* Note, this file is imported inside .tinymce-mobile-context-toolbar, so that prefix is on everything here. */
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group {
  align-items: center;
  display: flex;
  height: 100%;
  flex: 1;
  padding-bottom: 0.4em;
  padding-top: 0.4em;
  /* Make any buttons appearing on the left and right display in the centre (e.g. color edges) */
  /* For widgets like the colour picker, use the whole height */
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog {
  display: flex;
  min-height: 1.5em;
  overflow: hidden;
  padding-left: 0;
  padding-right: 0;
  position: relative;
  width: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain {
  display: flex;
  height: 100%;
  transition: left cubic-bezier(0.4, 0, 1, 1) 0.15s;
  width: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen {
  display: flex;
  flex: 0 0 auto;
  justify-content: space-between;
  width: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen input {
  font-family: Sans-serif;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-input-container {
  display: flex;
  flex-grow: 1;
  position: relative;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-input-container .tinymce-mobile-input-container-x {
  -ms-grid-row-align: center;
      align-self: center;
  background: inherit;
  border: none;
  border-radius: 50%;
  color: #888;
  font-size: 0.6em;
  font-weight: bold;
  height: 100%;
  padding-right: 2px;
  position: absolute;
  right: 0;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-input-container.tinymce-mobile-input-container-empty .tinymce-mobile-input-container-x {
  display: none;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-previous,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-next {
  align-items: center;
  display: flex;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-previous::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-next::before {
  align-items: center;
  display: flex;
  font-weight: bold;
  height: 100%;
  padding-left: 0.5em;
  padding-right: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-previous.tinymce-mobile-toolbar-navigation-disabled::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-next.tinymce-mobile-toolbar-navigation-disabled::before {
  visibility: hidden;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-dot-item {
  color: #cccccc;
  font-size: 10px;
  line-height: 10px;
  margin: 0 2px;
  padding-top: 3px;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-dot-item.tinymce-mobile-dot-active {
  color: #c8cbcf;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-large-font::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-large-heading::before {
  margin-left: 0.5em;
  margin-right: 0.9em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-small-font::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-small-heading::before {
  margin-left: 0.9em;
  margin-right: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider {
  display: flex;
  flex: 1;
  margin-left: 0;
  margin-right: 0;
  padding: 0.28em 0;
  position: relative;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-size-container {
  align-items: center;
  display: flex;
  flex-grow: 1;
  height: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-size-container .tinymce-mobile-slider-size-line {
  background: #cccccc;
  display: flex;
  flex: 1;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container {
  padding-left: 2em;
  padding-right: 2em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-slider-gradient-container {
  align-items: center;
  display: flex;
  flex-grow: 1;
  height: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-slider-gradient-container .tinymce-mobile-slider-gradient {
  background: linear-gradient(to right, hsl(0, 100%, 50%) 0%, hsl(60, 100%, 50%) 17%, hsl(120, 100%, 50%) 33%, hsl(180, 100%, 50%) 50%, hsl(240, 100%, 50%) 67%, hsl(300, 100%, 50%) 83%, hsl(0, 100%, 50%) 100%);
  display: flex;
  flex: 1;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-hue-slider-black {
  /* Not part of theming */
  background: black;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
  width: 1.2em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-hue-slider-white {
  /* Not part of theming */
  background: white;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
  width: 1.2em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-thumb {
  /* vertically centering trick (margin: auto, top: 0, bottom: 0). On iOS and Safari, if you leave
     * out these values, then it shows the thumb at the top of the spectrum. This is probably because it is
     * absolutely positioned with only a left value, and not a top. Note, on Chrome it seems to be fine without
     * this approach.
    */
  align-items: center;
  background-clip: padding-box;
  background-color: #455a64;
  border: 0.5em solid rgba(136, 136, 136, 0);
  border-radius: 3em;
  bottom: 0;
  color: #fff;
  display: flex;
  height: 0.5em;
  justify-content: center;
  left: -10px;
  margin: auto;
  position: absolute;
  top: 0;
  transition: border 120ms cubic-bezier(0.39, 0.58, 0.57, 1);
  width: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-thumb.tinymce-mobile-thumb-active {
  border: 0.5em solid rgba(136, 136, 136, 0.39);
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serializer-wrapper,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group > div {
  align-items: center;
  display: flex;
  height: 100%;
  flex: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serializer-wrapper {
  flex-direction: column;
  justify-content: center;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item {
  align-items: center;
  display: flex;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item:not(.tinymce-mobile-serialised-dialog) {
  height: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-dot-container {
  display: flex;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group input {
  background: #ffffff;
  border: none;
  border-radius: 0;
  color: #455a64;
  flex-grow: 1;
  font-size: 0.85em;
  padding-bottom: 0.1em;
  padding-left: 5px;
  padding-top: 0.1em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group input::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #888;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group input::placeholder {
  /* WebKit, Blink, Edge */
  color: #888;
}
/* dropup */
.tinymce-mobile-dropup {
  background: white;
  display: flex;
  overflow: hidden;
  width: 100%;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-shrinking {
  transition: height 0.3s ease-out;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-growing {
  transition: height 0.3s ease-in;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-closed {
  flex-grow: 0;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-open:not(.tinymce-mobile-dropup-growing) {
  flex-grow: 1;
}
/* TODO min-height for device size and orientation */
.tinymce-mobile-ios-container .tinymce-mobile-dropup:not(.tinymce-mobile-dropup-closed) {
  min-height: 200px;
}
@media only screen and (orientation: landscape) {
  .tinymce-mobile-dropup:not(.tinymce-mobile-dropup-closed) {
    min-height: 200px;
  }
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
  .tinymce-mobile-ios-container .tinymce-mobile-dropup:not(.tinymce-mobile-dropup-closed) {
    min-height: 150px;
  }
}
/* styles menu */
.tinymce-mobile-styles-menu {
  font-family: sans-serif;
  outline: 4px solid black;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.tinymce-mobile-styles-menu [role=\"menu\"] {
  display: flex;
  flex-direction: column;
  height: 100%;
  position: absolute;
  width: 100%;
}
.tinymce-mobile-styles-menu [role=\"menu\"].transitioning {
  transition: transform 0.5s ease-in-out;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-item {
  border-bottom: 1px solid #ddd;
  color: #455a64;
  cursor: pointer;
  display: flex;
  padding: 1em 1em;
  position: relative;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-collapser .tinymce-mobile-styles-collapse-icon::before {
  color: #455a64;
  content: \"\\e314\";
  font-family: 'tinymce-mobile', sans-serif;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-item.tinymce-mobile-styles-item-is-menu::after {
  color: #455a64;
  content: \"\\e315\";
  font-family: 'tinymce-mobile', sans-serif;
  padding-left: 1em;
  padding-right: 1em;
  position: absolute;
  right: 0;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-item.tinymce-mobile-format-matches::after {
  font-family: 'tinymce-mobile', sans-serif;
  padding-left: 1em;
  padding-right: 1em;
  position: absolute;
  right: 0;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-separator,
.tinymce-mobile-styles-menu .tinymce-mobile-styles-collapser {
  align-items: center;
  background: #fff;
  border-top: #455a64;
  color: #455a64;
  display: flex;
  min-height: 2.5em;
  padding-left: 1em;
  padding-right: 1em;
}
.tinymce-mobile-styles-menu [data-transitioning-destination=\"before\"][data-transitioning-state],
.tinymce-mobile-styles-menu [data-transitioning-state=\"before\"] {
  transform: translate(-100%);
}
.tinymce-mobile-styles-menu [data-transitioning-destination=\"current\"][data-transitioning-state],
.tinymce-mobile-styles-menu [data-transitioning-state=\"current\"] {
  transform: translate(0%);
}
.tinymce-mobile-styles-menu [data-transitioning-destination=\"after\"][data-transitioning-state],
.tinymce-mobile-styles-menu [data-transitioning-state=\"after\"] {
  transform: translate(100%);
}
@font-face {
  font-family: 'tinymce-mobile';
  font-style: normal;
  font-weight: normal;
  src: url('fonts/tinymce-mobile.woff?8x92w3') format('woff');
}
@media (min-device-width: 700px) {
  .tinymce-mobile-outer-container,
  .tinymce-mobile-outer-container input {
    font-size: 25px;
  }
}
@media (max-device-width: 700px) {
  .tinymce-mobile-outer-container,
  .tinymce-mobile-outer-container input {
    font-size: 18px;
  }
}
.tinymce-mobile-icon {
  font-family: 'tinymce-mobile', sans-serif;
}
.mixin-flex-and-centre {
  align-items: center;
  display: flex;
  justify-content: center;
}
.mixin-flex-bar {
  align-items: center;
  display: flex;
  height: 100%;
}
.tinymce-mobile-outer-container .tinymce-mobile-editor-socket iframe {
  background-color: #fff;
  width: 100%;
}
.tinymce-mobile-editor-socket .tinymce-mobile-mask-edit-icon {
  /* Note, on the iPod touch in landscape, this isn't visible when the navbar appears */
  background-color: #207ab7;
  border-radius: 50%;
  bottom: 1em;
  color: white;
  font-size: 1em;
  height: 2.1em;
  position: fixed;
  right: 2em;
  width: 2.1em;
  align-items: center;
  display: flex;
  justify-content: center;
}
@media only screen and (min-device-width:700px) {
  .tinymce-mobile-editor-socket .tinymce-mobile-mask-edit-icon {
    font-size: 1.2em;
  }
}
.tinymce-mobile-outer-container:not(.tinymce-mobile-fullscreen-maximized) .tinymce-mobile-editor-socket {
  height: 300px;
  overflow: hidden;
}
.tinymce-mobile-outer-container:not(.tinymce-mobile-fullscreen-maximized) .tinymce-mobile-editor-socket iframe {
  height: 100%;
}
.tinymce-mobile-outer-container:not(.tinymce-mobile-fullscreen-maximized) .tinymce-mobile-toolstrip {
  display: none;
}
/*
  Note, that if you don't include this (::-webkit-file-upload-button), the toolbar width gets
  increased and the whole body becomes scrollable. It's important!
 */
input[type=\"file\"]::-webkit-file-upload-button {
  display: none;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
  .tinymce-mobile-ios-container .tinymce-mobile-editor-socket .tinymce-mobile-mask-edit-icon {
    bottom: 50%;
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.mobile.css";
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
 */
/* RESET all the things! */
.tinymce-mobile-outer-container {
  all: initial;
  display: block;
}
.tinymce-mobile-outer-container * {
  border: 0;
  box-sizing: initial;
  cursor: inherit;
  float: none;
  line-height: 1;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-tap-highlight-color: transparent;
  /* TBIO-3691, stop the gray flicker on touch. */
  text-shadow: none;
  white-space: nowrap;
}
.tinymce-mobile-icon-arrow-back::before {
  content: \"\\e5cd\";
}
.tinymce-mobile-icon-image::before {
  content: \"\\e412\";
}
.tinymce-mobile-icon-cancel-circle::before {
  content: \"\\e5c9\";
}
.tinymce-mobile-icon-full-dot::before {
  content: \"\\e061\";
}
.tinymce-mobile-icon-align-center::before {
  content: \"\\e234\";
}
.tinymce-mobile-icon-align-left::before {
  content: \"\\e236\";
}
.tinymce-mobile-icon-align-right::before {
  content: \"\\e237\";
}
.tinymce-mobile-icon-bold::before {
  content: \"\\e238\";
}
.tinymce-mobile-icon-italic::before {
  content: \"\\e23f\";
}
.tinymce-mobile-icon-unordered-list::before {
  content: \"\\e241\";
}
.tinymce-mobile-icon-ordered-list::before {
  content: \"\\e242\";
}
.tinymce-mobile-icon-font-size::before {
  content: \"\\e245\";
}
.tinymce-mobile-icon-underline::before {
  content: \"\\e249\";
}
.tinymce-mobile-icon-link::before {
  content: \"\\e157\";
}
.tinymce-mobile-icon-unlink::before {
  content: \"\\eca2\";
}
.tinymce-mobile-icon-color::before {
  content: \"\\e891\";
}
.tinymce-mobile-icon-previous::before {
  content: \"\\e314\";
}
.tinymce-mobile-icon-next::before {
  content: \"\\e315\";
}
.tinymce-mobile-icon-large-font::before,
.tinymce-mobile-icon-style-formats::before {
  content: \"\\e264\";
}
.tinymce-mobile-icon-undo::before {
  content: \"\\e166\";
}
.tinymce-mobile-icon-redo::before {
  content: \"\\e15a\";
}
.tinymce-mobile-icon-removeformat::before {
  content: \"\\e239\";
}
.tinymce-mobile-icon-small-font::before {
  content: \"\\e906\";
}
.tinymce-mobile-icon-readonly-back::before,
.tinymce-mobile-format-matches::after {
  content: \"\\e5ca\";
}
.tinymce-mobile-icon-small-heading::before {
  content: \"small\";
}
.tinymce-mobile-icon-large-heading::before {
  content: \"large\";
}
.tinymce-mobile-icon-small-heading::before,
.tinymce-mobile-icon-large-heading::before {
  font-family: sans-serif;
  font-size: 80%;
}
.tinymce-mobile-mask-edit-icon::before {
  content: \"\\e254\";
}
.tinymce-mobile-icon-back::before {
  content: \"\\e5c4\";
}
.tinymce-mobile-icon-heading::before {
  /* TODO: Translate */
  content: \"Headings\";
  font-family: sans-serif;
  font-size: 80%;
  font-weight: bold;
}
.tinymce-mobile-icon-h1::before {
  content: \"H1\";
  font-weight: bold;
}
.tinymce-mobile-icon-h2::before {
  content: \"H2\";
  font-weight: bold;
}
.tinymce-mobile-icon-h3::before {
  content: \"H3\";
  font-weight: bold;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask {
  align-items: center;
  display: flex;
  justify-content: center;
  background: rgba(51, 51, 51, 0.5);
  height: 100%;
  position: absolute;
  top: 0;
  width: 100%;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container {
  align-items: center;
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  font-family: sans-serif;
  font-size: 1em;
  justify-content: space-between;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .mixin-menu-item {
  align-items: center;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  height: 2.1em;
  width: 2.1em;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section {
  align-items: center;
  display: flex;
  justify-content: center;
  flex-direction: column;
  font-size: 1em;
}
@media only screen and (min-device-width:700px) {
  .tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section {
    font-size: 1.2em;
  }
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section .tinymce-mobile-mask-tap-icon {
  align-items: center;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  height: 2.1em;
  width: 2.1em;
  background-color: white;
  color: #207ab7;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section .tinymce-mobile-mask-tap-icon::before {
  content: \"\\e900\";
  font-family: 'tinymce-mobile', sans-serif;
}
.tinymce-mobile-outer-container .tinymce-mobile-disabled-mask .tinymce-mobile-content-container .tinymce-mobile-content-tap-section:not(.tinymce-mobile-mask-tap-icon-selected) .tinymce-mobile-mask-tap-icon {
  z-index: 2;
}
.tinymce-mobile-android-container.tinymce-mobile-android-maximized {
  background: #ffffff;
  border: none;
  bottom: 0;
  display: flex;
  flex-direction: column;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
}
.tinymce-mobile-android-container:not(.tinymce-mobile-android-maximized) {
  position: relative;
}
.tinymce-mobile-android-container .tinymce-mobile-editor-socket {
  display: flex;
  flex-grow: 1;
}
.tinymce-mobile-android-container .tinymce-mobile-editor-socket iframe {
  display: flex !important;
  flex-grow: 1;
  height: auto !important;
}
.tinymce-mobile-android-scroll-reload {
  overflow: hidden;
}
:not(.tinymce-mobile-readonly-mode) > .tinymce-mobile-android-selection-context-toolbar {
  margin-top: 23px;
}
.tinymce-mobile-toolstrip {
  background: #fff;
  display: flex;
  flex: 0 0 auto;
  z-index: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar {
  align-items: center;
  background-color: #fff;
  border-bottom: 1px solid #cccccc;
  display: flex;
  flex: 1;
  height: 2.5em;
  width: 100%;
  /* Make it no larger than the toolstrip, so that it needs to scroll */
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group {
  align-items: center;
  display: flex;
  height: 100%;
  flex-shrink: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group > div {
  align-items: center;
  display: flex;
  height: 100%;
  flex: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group.tinymce-mobile-exit-container {
  background: #f44336;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group.tinymce-mobile-toolbar-scrollable-group {
  flex-grow: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item {
  padding-left: 0.5em;
  padding-right: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item.tinymce-mobile-toolbar-button {
  align-items: center;
  display: flex;
  height: 80%;
  margin-left: 2px;
  margin-right: 2px;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item.tinymce-mobile-toolbar-button.tinymce-mobile-toolbar-button-selected {
  background: #c8cbcf;
  color: #cccccc;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group:first-of-type,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar:not(.tinymce-mobile-context-toolbar) .tinymce-mobile-toolbar-group:last-of-type {
  background: #207ab7;
  color: #eceff1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar {
  /* Note, this file is imported inside .tinymce-mobile-context-toolbar, so that prefix is on everything here. */
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group {
  align-items: center;
  display: flex;
  height: 100%;
  flex: 1;
  padding-bottom: 0.4em;
  padding-top: 0.4em;
  /* Make any buttons appearing on the left and right display in the centre (e.g. color edges) */
  /* For widgets like the colour picker, use the whole height */
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog {
  display: flex;
  min-height: 1.5em;
  overflow: hidden;
  padding-left: 0;
  padding-right: 0;
  position: relative;
  width: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain {
  display: flex;
  height: 100%;
  transition: left cubic-bezier(0.4, 0, 1, 1) 0.15s;
  width: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen {
  display: flex;
  flex: 0 0 auto;
  justify-content: space-between;
  width: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen input {
  font-family: Sans-serif;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-input-container {
  display: flex;
  flex-grow: 1;
  position: relative;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-input-container .tinymce-mobile-input-container-x {
  -ms-grid-row-align: center;
      align-self: center;
  background: inherit;
  border: none;
  border-radius: 50%;
  color: #888;
  font-size: 0.6em;
  font-weight: bold;
  height: 100%;
  padding-right: 2px;
  position: absolute;
  right: 0;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-input-container.tinymce-mobile-input-container-empty .tinymce-mobile-input-container-x {
  display: none;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-previous,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-next {
  align-items: center;
  display: flex;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-previous::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-next::before {
  align-items: center;
  display: flex;
  font-weight: bold;
  height: 100%;
  padding-left: 0.5em;
  padding-right: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-previous.tinymce-mobile-toolbar-navigation-disabled::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serialised-dialog .tinymce-mobile-serialised-dialog-chain .tinymce-mobile-serialised-dialog-screen .tinymce-mobile-icon-next.tinymce-mobile-toolbar-navigation-disabled::before {
  visibility: hidden;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-dot-item {
  color: #cccccc;
  font-size: 10px;
  line-height: 10px;
  margin: 0 2px;
  padding-top: 3px;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-dot-item.tinymce-mobile-dot-active {
  color: #c8cbcf;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-large-font::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-large-heading::before {
  margin-left: 0.5em;
  margin-right: 0.9em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-small-font::before,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-icon-small-heading::before {
  margin-left: 0.9em;
  margin-right: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider {
  display: flex;
  flex: 1;
  margin-left: 0;
  margin-right: 0;
  padding: 0.28em 0;
  position: relative;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-size-container {
  align-items: center;
  display: flex;
  flex-grow: 1;
  height: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-size-container .tinymce-mobile-slider-size-line {
  background: #cccccc;
  display: flex;
  flex: 1;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container {
  padding-left: 2em;
  padding-right: 2em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-slider-gradient-container {
  align-items: center;
  display: flex;
  flex-grow: 1;
  height: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-slider-gradient-container .tinymce-mobile-slider-gradient {
  background: linear-gradient(to right, hsl(0, 100%, 50%) 0%, hsl(60, 100%, 50%) 17%, hsl(120, 100%, 50%) 33%, hsl(180, 100%, 50%) 50%, hsl(240, 100%, 50%) 67%, hsl(300, 100%, 50%) 83%, hsl(0, 100%, 50%) 100%);
  display: flex;
  flex: 1;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-hue-slider-black {
  /* Not part of theming */
  background: black;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
  width: 1.2em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider.tinymce-mobile-hue-slider-container .tinymce-mobile-hue-slider-white {
  /* Not part of theming */
  background: white;
  height: 0.2em;
  margin-bottom: 0.3em;
  margin-top: 0.3em;
  width: 1.2em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-thumb {
  /* vertically centering trick (margin: auto, top: 0, bottom: 0). On iOS and Safari, if you leave
     * out these values, then it shows the thumb at the top of the spectrum. This is probably because it is
     * absolutely positioned with only a left value, and not a top. Note, on Chrome it seems to be fine without
     * this approach.
    */
  align-items: center;
  background-clip: padding-box;
  background-color: #455a64;
  border: 0.5em solid rgba(136, 136, 136, 0);
  border-radius: 3em;
  bottom: 0;
  color: #fff;
  display: flex;
  height: 0.5em;
  justify-content: center;
  left: -10px;
  margin: auto;
  position: absolute;
  top: 0;
  transition: border 120ms cubic-bezier(0.39, 0.58, 0.57, 1);
  width: 0.5em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-slider .tinymce-mobile-slider-thumb.tinymce-mobile-thumb-active {
  border: 0.5em solid rgba(136, 136, 136, 0.39);
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serializer-wrapper,
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group > div {
  align-items: center;
  display: flex;
  height: 100%;
  flex: 1;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-serializer-wrapper {
  flex-direction: column;
  justify-content: center;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item {
  align-items: center;
  display: flex;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-toolbar-group-item:not(.tinymce-mobile-serialised-dialog) {
  height: 100%;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group .tinymce-mobile-dot-container {
  display: flex;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group input {
  background: #ffffff;
  border: none;
  border-radius: 0;
  color: #455a64;
  flex-grow: 1;
  font-size: 0.85em;
  padding-bottom: 0.1em;
  padding-left: 5px;
  padding-top: 0.1em;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group input::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #888;
}
.tinymce-mobile-toolstrip .tinymce-mobile-toolbar.tinymce-mobile-context-toolbar .tinymce-mobile-toolbar-group input::placeholder {
  /* WebKit, Blink, Edge */
  color: #888;
}
/* dropup */
.tinymce-mobile-dropup {
  background: white;
  display: flex;
  overflow: hidden;
  width: 100%;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-shrinking {
  transition: height 0.3s ease-out;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-growing {
  transition: height 0.3s ease-in;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-closed {
  flex-grow: 0;
}
.tinymce-mobile-dropup.tinymce-mobile-dropup-open:not(.tinymce-mobile-dropup-growing) {
  flex-grow: 1;
}
/* TODO min-height for device size and orientation */
.tinymce-mobile-ios-container .tinymce-mobile-dropup:not(.tinymce-mobile-dropup-closed) {
  min-height: 200px;
}
@media only screen and (orientation: landscape) {
  .tinymce-mobile-dropup:not(.tinymce-mobile-dropup-closed) {
    min-height: 200px;
  }
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
  .tinymce-mobile-ios-container .tinymce-mobile-dropup:not(.tinymce-mobile-dropup-closed) {
    min-height: 150px;
  }
}
/* styles menu */
.tinymce-mobile-styles-menu {
  font-family: sans-serif;
  outline: 4px solid black;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.tinymce-mobile-styles-menu [role=\"menu\"] {
  display: flex;
  flex-direction: column;
  height: 100%;
  position: absolute;
  width: 100%;
}
.tinymce-mobile-styles-menu [role=\"menu\"].transitioning {
  transition: transform 0.5s ease-in-out;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-item {
  border-bottom: 1px solid #ddd;
  color: #455a64;
  cursor: pointer;
  display: flex;
  padding: 1em 1em;
  position: relative;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-collapser .tinymce-mobile-styles-collapse-icon::before {
  color: #455a64;
  content: \"\\e314\";
  font-family: 'tinymce-mobile', sans-serif;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-item.tinymce-mobile-styles-item-is-menu::after {
  color: #455a64;
  content: \"\\e315\";
  font-family: 'tinymce-mobile', sans-serif;
  padding-left: 1em;
  padding-right: 1em;
  position: absolute;
  right: 0;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-item.tinymce-mobile-format-matches::after {
  font-family: 'tinymce-mobile', sans-serif;
  padding-left: 1em;
  padding-right: 1em;
  position: absolute;
  right: 0;
}
.tinymce-mobile-styles-menu .tinymce-mobile-styles-separator,
.tinymce-mobile-styles-menu .tinymce-mobile-styles-collapser {
  align-items: center;
  background: #fff;
  border-top: #455a64;
  color: #455a64;
  display: flex;
  min-height: 2.5em;
  padding-left: 1em;
  padding-right: 1em;
}
.tinymce-mobile-styles-menu [data-transitioning-destination=\"before\"][data-transitioning-state],
.tinymce-mobile-styles-menu [data-transitioning-state=\"before\"] {
  transform: translate(-100%);
}
.tinymce-mobile-styles-menu [data-transitioning-destination=\"current\"][data-transitioning-state],
.tinymce-mobile-styles-menu [data-transitioning-state=\"current\"] {
  transform: translate(0%);
}
.tinymce-mobile-styles-menu [data-transitioning-destination=\"after\"][data-transitioning-state],
.tinymce-mobile-styles-menu [data-transitioning-state=\"after\"] {
  transform: translate(100%);
}
@font-face {
  font-family: 'tinymce-mobile';
  font-style: normal;
  font-weight: normal;
  src: url('fonts/tinymce-mobile.woff?8x92w3') format('woff');
}
@media (min-device-width: 700px) {
  .tinymce-mobile-outer-container,
  .tinymce-mobile-outer-container input {
    font-size: 25px;
  }
}
@media (max-device-width: 700px) {
  .tinymce-mobile-outer-container,
  .tinymce-mobile-outer-container input {
    font-size: 18px;
  }
}
.tinymce-mobile-icon {
  font-family: 'tinymce-mobile', sans-serif;
}
.mixin-flex-and-centre {
  align-items: center;
  display: flex;
  justify-content: center;
}
.mixin-flex-bar {
  align-items: center;
  display: flex;
  height: 100%;
}
.tinymce-mobile-outer-container .tinymce-mobile-editor-socket iframe {
  background-color: #fff;
  width: 100%;
}
.tinymce-mobile-editor-socket .tinymce-mobile-mask-edit-icon {
  /* Note, on the iPod touch in landscape, this isn't visible when the navbar appears */
  background-color: #207ab7;
  border-radius: 50%;
  bottom: 1em;
  color: white;
  font-size: 1em;
  height: 2.1em;
  position: fixed;
  right: 2em;
  width: 2.1em;
  align-items: center;
  display: flex;
  justify-content: center;
}
@media only screen and (min-device-width:700px) {
  .tinymce-mobile-editor-socket .tinymce-mobile-mask-edit-icon {
    font-size: 1.2em;
  }
}
.tinymce-mobile-outer-container:not(.tinymce-mobile-fullscreen-maximized) .tinymce-mobile-editor-socket {
  height: 300px;
  overflow: hidden;
}
.tinymce-mobile-outer-container:not(.tinymce-mobile-fullscreen-maximized) .tinymce-mobile-editor-socket iframe {
  height: 100%;
}
.tinymce-mobile-outer-container:not(.tinymce-mobile-fullscreen-maximized) .tinymce-mobile-toolstrip {
  display: none;
}
/*
  Note, that if you don't include this (::-webkit-file-upload-button), the toolbar width gets
  increased and the whole body becomes scrollable. It's important!
 */
input[type=\"file\"]::-webkit-file-upload-button {
  display: none;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
  .tinymce-mobile-ios-container .tinymce-mobile-editor-socket .tinymce-mobile-mask-edit-icon {
    bottom: 50%;
  }
}
", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/skin.mobile.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\skins\\ui\\oxide-dark\\skin.mobile.css");
    }
}
