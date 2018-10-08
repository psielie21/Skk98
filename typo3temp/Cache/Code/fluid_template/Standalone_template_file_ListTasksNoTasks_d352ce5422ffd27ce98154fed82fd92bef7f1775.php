<?php
class FluidCache_Standalone_template_file_ListTasksNoTasks_d352ce5422ffd27ce98154fed82fd92bef7f1775 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments1 = array();
$arguments1['state'] = '-1';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments2 = array();
$arguments2['key'] = 'msg.noTasks';
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['htmlEscape'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$renderChildrenClosure3 = function() {return NULL;};
$arguments1['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$arguments1['title'] = NULL;
$arguments1['iconName'] = NULL;
$arguments1['disableIcon'] = false;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1517837875    1753      