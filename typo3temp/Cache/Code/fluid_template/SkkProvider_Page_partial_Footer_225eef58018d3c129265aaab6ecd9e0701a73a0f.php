<?php
class FluidCache_SkkProvider_Page_partial_Footer_225eef58018d3c129265aaab6ecd9e0701a73a0f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
<footer>
  ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\MenuViewHelper
$arguments1 = array();
$arguments1['pageUid'] = '17';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['forceClosingTag'] = false;
$arguments1['hideIfEmpty'] = false;
$arguments1['contenteditable'] = NULL;
$arguments1['contextmenu'] = NULL;
$arguments1['draggable'] = NULL;
$arguments1['dropzone'] = NULL;
$arguments1['translate'] = NULL;
$arguments1['spellcheck'] = NULL;
$arguments1['hidden'] = NULL;
$arguments1['showAccessProtected'] = false;
$arguments1['classAccessProtected'] = 'protected';
$arguments1['classAccessGranted'] = 'access-granted';
$arguments1['useShortcutUid'] = NULL;
$arguments1['useShortcutTarget'] = NULL;
$arguments1['useShortcutData'] = false;
$arguments1['tagName'] = 'ul';
$arguments1['tagNameChildren'] = 'li';
$arguments1['entryLevel'] = 0;
$arguments1['levels'] = 1;
$arguments1['expandAll'] = false;
$arguments1['classFirst'] = '';
$arguments1['classLast'] = '';
$arguments1['classActive'] = 'active';
$arguments1['classCurrent'] = 'current';
$arguments1['classHasSubpages'] = 'sub';
$arguments1['substElementUid'] = false;
$arguments1['showHiddenInMenu'] = false;
$arguments1['showCurrent'] = true;
$arguments1['linkCurrent'] = true;
$arguments1['linkActive'] = true;
$arguments1['titleFields'] = 'nav_title,title';
$arguments1['includeAnchorTitle'] = true;
$arguments1['includeSpacers'] = false;
$arguments1['deferred'] = false;
$arguments1['as'] = 'menu';
$arguments1['rootLineAs'] = 'rootLine';
$arguments1['excludePages'] = '';
$arguments1['forceAbsoluteUrl'] = false;
$arguments1['doktypes'] = '';
$arguments1['divider'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\MenuViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\MenuViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
</footer>
';


return $output0;
}


}
#1539020354    3272      