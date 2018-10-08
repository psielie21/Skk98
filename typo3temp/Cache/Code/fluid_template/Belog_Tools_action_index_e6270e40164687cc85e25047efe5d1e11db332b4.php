<?php
class FluidCache_Belog_Tools_action_index_e6270e40164687cc85e25047efe5d1e11db332b4 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments0 = array();
$arguments0['partial'] = 'Content';
$arguments0['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments0['section'] = NULL;
$arguments0['optional'] = false;
$renderChildrenClosure1 = function() {return NULL;};


return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#1518174257    1229      