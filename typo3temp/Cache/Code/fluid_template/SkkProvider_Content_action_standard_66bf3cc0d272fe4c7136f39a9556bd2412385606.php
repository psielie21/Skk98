<?php
class FluidCache_SkkProvider_Content_action_standard_66bf3cc0d272fe4c7136f39a9556bd2412385606 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Page';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['id'] = 'standard';
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments3 = array();
$arguments3['name'] = 'grid';
$arguments3['label'] = NULL;
$arguments3['variables'] = array (
);
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments6 = array();
$arguments6['name'] = 'row';
$arguments6['label'] = NULL;
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments9 = array();
$arguments9['colPos'] = '0';
$arguments9['colspan'] = '3';
$arguments9['name'] = 'main';
$arguments9['label'] = 'Hauptinhalt';
$arguments9['rowspan'] = 1;
$arguments9['style'] = NULL;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
return $output8;
};

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		';
return $output5;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	';


return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output11 = '';

$output11 .= '
		<section id="title-bar">
			<h2>';

$output11 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

$output11 .= '</h2>
		</section>

		<section id="content">
			<div class="text-container">
				';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments12 = array();
$arguments12['column'] = '0';
$arguments12['order'] = 'sorting';
$arguments12['sortDirection'] = 'ASC';
$arguments12['pageUid'] = 0;
$arguments12['contentUids'] = NULL;
$arguments12['sectionIndexOnly'] = false;
$arguments12['loadRegister'] = NULL;
$arguments12['render'] = true;
$arguments12['hideUntranslated'] = false;
$arguments12['limit'] = NULL;
$arguments12['slide'] = 0;
$arguments12['slideCollect'] = 0;
$arguments12['slideCollectReverse'] = false;
$arguments12['as'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output11 .= $viewHelper14->initializeArgumentsAndRender();

$output11 .= '
			</div>
		</section>

	';


return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output15 = '';

$output15 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments16 = array();
$arguments16['name'] = 'Page';
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments19 = array();
$arguments19['name'] = 'Configuration';
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments22 = array();
$arguments22['id'] = 'standard';
$arguments22['label'] = NULL;
$arguments22['description'] = NULL;
$arguments22['enabled'] = true;
$arguments22['compact'] = false;
$arguments22['variables'] = array (
);
$arguments22['options'] = NULL;
$arguments22['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output21 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments24 = array();
$arguments24['name'] = 'grid';
$arguments24['label'] = NULL;
$arguments24['variables'] = array (
);
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments27 = array();
$arguments27['name'] = 'row';
$arguments27['label'] = NULL;
$arguments27['variables'] = array (
);
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments30 = array();
$arguments30['colPos'] = '0';
$arguments30['colspan'] = '3';
$arguments30['name'] = 'main';
$arguments30['label'] = 'Hauptinhalt';
$arguments30['rowspan'] = 1;
$arguments30['style'] = NULL;
$arguments30['variables'] = array (
);
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};

$output29 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
			';
return $output29;
};

$output26 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
		';
return $output26;
};

$output21 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output21 .= '
	';
return $output21;
};

$output15 .= '';

$output15 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments32 = array();
$arguments32['name'] = 'Main';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
		<section id="title-bar">
			<h2>';

$output34 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

$output34 .= '</h2>
		</section>

		<section id="content">
			<div class="text-container">
				';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments35 = array();
$arguments35['column'] = '0';
$arguments35['order'] = 'sorting';
$arguments35['sortDirection'] = 'ASC';
$arguments35['pageUid'] = 0;
$arguments35['contentUids'] = NULL;
$arguments35['sectionIndexOnly'] = false;
$arguments35['loadRegister'] = NULL;
$arguments35['render'] = true;
$arguments35['hideUntranslated'] = false;
$arguments35['limit'] = NULL;
$arguments35['slide'] = 0;
$arguments35['slideCollect'] = 0;
$arguments35['slideCollectReverse'] = false;
$arguments35['as'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output34 .= $viewHelper37->initializeArgumentsAndRender();

$output34 .= '
			</div>
		</section>

	';
return $output34;
};

$output15 .= '';

$output15 .= '
</div>
';


return $output15;
}


}
#1520096812    11022     