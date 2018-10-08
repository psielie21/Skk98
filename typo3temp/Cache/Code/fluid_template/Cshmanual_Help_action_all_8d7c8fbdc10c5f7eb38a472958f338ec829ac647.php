<?php
class FluidCache_Cshmanual_Help_action_all_8d7c8fbdc10c5f7eb38a472958f338ec829ac647 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'TableOfContents';
// Rendering Array
$array2 = array();
$array2['toc'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('all'), 'toc', $renderingContext);
$array2['all'] = 1;
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure3 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('all'), 'content', $renderingContext);
$arguments4['as'] = 'sections';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sections'), 'content', $renderingContext);
$arguments7['as'] = 'item';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'Manual';
// Rendering Array
$array11 = array();
$array11['manual'] = $currentVariableContainer->getOrNull('item');
$arguments10['arguments'] = $array11;
$arguments10['section'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure12, $renderingContext);

$output9 .= '
		';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
	';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output13 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments14 = array();
$arguments14['name'] = 'Default';
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output13 .= $viewHelper16->initializeArgumentsAndRender();

$output13 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments17 = array();
$arguments17['name'] = 'content';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'TableOfContents';
// Rendering Array
$array21 = array();
$array21['toc'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('all'), 'toc', $renderingContext);
$array21['all'] = 1;
$arguments20['arguments'] = $array21;
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure22 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure22, $renderingContext);

$output19 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments23 = array();
$arguments23['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('all'), 'content', $renderingContext);
$arguments23['as'] = 'sections';
$arguments23['key'] = '';
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments26 = array();
$arguments26['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('sections'), 'content', $renderingContext);
$arguments26['as'] = 'item';
$arguments26['key'] = '';
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'Manual';
// Rendering Array
$array30 = array();
$array30['manual'] = $currentVariableContainer->getOrNull('item');
$arguments29['arguments'] = $array30;
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure31, $renderingContext);

$output28 .= '
		';
return $output28;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
	';
return $output25;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output19 .= '
';
return $output19;
};

$output13 .= '';


return $output13;
}


}
#1517643176    7515      