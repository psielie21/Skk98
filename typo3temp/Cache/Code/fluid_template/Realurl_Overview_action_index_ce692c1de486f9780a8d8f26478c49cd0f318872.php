<?php
class FluidCache_Realurl_Overview_action_index_ce692c1de486f9780a8d8f26478c49cd0f318872 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Backend';
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
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.index';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.index.intro_functions';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '</p>
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.aliases';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '</h2>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.aliases.intro';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('isCompatibleCacheImplementation'));
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
		<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.url_cache';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '</h2>
		<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments14 = array();
$arguments14['value'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.url_cache.intro';
// Rendering Boolean node
$arguments16['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('false');
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '</p>
		<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.path_cache';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output11 .= '</h2>
		<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments20 = array();
$arguments20['value'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.path_cache.intro';
// Rendering Boolean node
$arguments22['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('false');
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output11 .= '</p>
	';
return $output11;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments24 = array();
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.configuration';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '</h2>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments29 = array();
$arguments29['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.configuration.intro';
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '</p>
	';
return $output26;
};

$output0 .= '';

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

$output31 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments32 = array();
$arguments32['name'] = 'Backend';
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments35 = array();
$arguments35['name'] = 'content';
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments38 = array();
$arguments38['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.index';
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '</h1>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments40 = array();
$arguments40['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.index.intro_functions';
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output37 .= '</p>
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments42 = array();
$arguments42['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.aliases';
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output37 .= '</h2>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.aliases.intro';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output37 .= '</p>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments46 = array();
// Rendering Boolean node
$arguments46['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('isCompatibleCacheImplementation'));
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
		<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.url_cache';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '</h2>
		<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments51 = array();
$arguments51['value'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.url_cache.intro';
// Rendering Boolean node
$arguments53['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('false');
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '</p>
		<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.path_cache';
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output48 .= '</h2>
		<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments57 = array();
$arguments57['value'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.path_cache.intro';
// Rendering Boolean node
$arguments59['htmlEscape'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('false');
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output48 .= '</p>
	';
return $output48;
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output37 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments61 = array();
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments64 = array();
$arguments64['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.configuration';
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '</h2>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf:module.configuration.intro';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '</p>
	';
return $output63;
};

$output37 .= '';

$output37 .= '
';
return $output37;
};

$output31 .= '';


return $output31;
}


}
#1518174310    17838     