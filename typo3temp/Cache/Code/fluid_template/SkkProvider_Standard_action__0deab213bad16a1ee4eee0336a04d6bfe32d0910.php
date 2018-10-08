<?php
class FluidCache_SkkProvider_Standard_action__0deab213bad16a1ee4eee0336a04d6bfe32d0910 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Content';
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
$arguments1['id'] = 'slider';
// Rendering Array
$array2 = array();
$array2['group'] = 'SKK Spezialanfertigung';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_slider.xlf';
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['extensionName'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output4 = '';

$output4 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$arguments5 = array();
$arguments5['name'] = 'settings.images';
$arguments5['allowedExtensions'] = 'jpg,jpeg,gif,png';
// Rendering Boolean node
$arguments5['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
// Rendering Boolean node
$arguments5['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments5['maxItems'] = '4';
$arguments5['minItems'] = '1';
$arguments5['label'] = 'Bilder';
$arguments5['default'] = NULL;
$arguments5['exclude'] = false;
$arguments5['transform'] = NULL;
$arguments5['enabled'] = true;
$arguments5['requestUpdate'] = false;
$arguments5['displayCond'] = NULL;
$arguments5['inherit'] = true;
$arguments5['inheritEmpty'] = true;
$arguments5['clear'] = false;
$arguments5['variables'] = array (
);
$arguments5['extensionName'] = NULL;
$arguments5['validate'] = 'trim';
$arguments5['size'] = 1;
$arguments5['itemListStyle'] = NULL;
$arguments5['selectedListStyle'] = NULL;
$arguments5['items'] = NULL;
$arguments5['emptyOption'] = false;
$arguments5['translateCsvItems'] = NULL;
$arguments5['itemsProcFunc'] = NULL;
$arguments5['table'] = 'sys_file_reference';
$arguments5['condition'] = NULL;
$arguments5['mm'] = NULL;
$arguments5['foreignField'] = 'uid_foreign';
$arguments5['foreignLabel'] = 'uid_local';
$arguments5['foreignSelector'] = 'uid_local';
$arguments5['foreignSortby'] = 'sorting_foreign';
$arguments5['foreignDefaultSortby'] = '';
$arguments5['foreignTableField'] = 'tablenames';
$arguments5['foreignUnique'] = NULL;
$arguments5['symmetricField'] = '';
$arguments5['symmetricLabel'] = '';
$arguments5['symmetricSortby'] = '';
$arguments5['localizationMode'] = 'select';
$arguments5['localizeChildrenAtParentLocalization'] = true;
$arguments5['disableMovingChildrenWithParent'] = false;
$arguments5['showThumbs'] = true;
$arguments5['matchFields'] = array (
);
$arguments5['oppositeField'] = '';
$arguments5['collapseAll'] = false;
$arguments5['expandSingle'] = false;
$arguments5['newRecordLinkAddTitle'] = true;
$arguments5['newRecordLinkPosition'] = 'top';
$arguments5['useCombination'] = false;
$arguments5['useSortable'] = true;
$arguments5['showPossibleLocalizationRecords'] = false;
$arguments5['showRemovedLocalizationRecords'] = false;
$arguments5['showAllLocalizationLink'] = false;
$arguments5['showSynchronizationLink'] = false;
$arguments5['enabledControls'] = false;
$arguments5['headerThumbnail'] = false;
$arguments5['foreignMatchFields'] = false;
$arguments5['foreignTypes'] = NULL;
$arguments5['levelLinksPosition'] = 'both';
$arguments5['disallowedExtensions'] = '';
$arguments5['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		';
return $output4;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '
	';


return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
		<strong>Slider</strong>
	';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output7 = '';

$output7 .= '
		<div class="slider-holder">
  		<div class="carusel">
    		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments8 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments9 = array();
$arguments9['field'] = 'settings.images';
$arguments9['table'] = 'tt_content';
$arguments9['record'] = NULL;
$arguments9['uid'] = NULL;
$arguments9['as'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments8['each'] = $viewHelper11->initializeArgumentsAndRender();
$arguments8['as'] = 'image';
$arguments8['key'] = '';
$arguments8['reverse'] = false;
$arguments8['iteration'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
      		<div class="slide fade">
        		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments14 = array();
// Rendering Boolean node
$arguments14['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments14['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'id', $renderingContext);
$arguments14['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments14['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'alternative', $renderingContext);
$arguments14['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'crop', $renderingContext);
$arguments14['class'] = 'img-responsive';
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['width'] = NULL;
$arguments14['height'] = NULL;
$arguments14['minWidth'] = NULL;
$arguments14['minHeight'] = NULL;
$arguments14['maxWidth'] = NULL;
$arguments14['maxHeight'] = NULL;
$arguments14['image'] = NULL;
$arguments14['absolute'] = false;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['ismap'] = NULL;
$arguments14['longdesc'] = NULL;
$arguments14['usemap'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output13 .= $viewHelper16->initializeArgumentsAndRender();

$output13 .= '
      		</div>
    		';
return $output13;
};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure12, $renderingContext);

$output7 .= '
  		</div>
  	<a class="left-button" onclick="plusSlides(-1)">❮</a>
  	<a class="right-button" onclick="plusSlides(1)">❯</a>
		</div>
	';


return $output7;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output17 = '';

$output17 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments18 = array();
$arguments18['name'] = 'Content';
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();

$output17 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments21 = array();
$arguments21['name'] = 'Configuration';
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments24 = array();
$arguments24['id'] = 'slider';
// Rendering Array
$array25 = array();
$array25['group'] = 'SKK Spezialanfertigung';
$arguments24['options'] = $array25;
$arguments24['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_slider.xlf';
$arguments24['label'] = NULL;
$arguments24['description'] = NULL;
$arguments24['enabled'] = true;
$arguments24['compact'] = false;
$arguments24['variables'] = array (
);
$arguments24['extensionName'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$arguments28 = array();
$arguments28['name'] = 'settings.images';
$arguments28['allowedExtensions'] = 'jpg,jpeg,gif,png';
// Rendering Boolean node
$arguments28['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
// Rendering Boolean node
$arguments28['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments28['maxItems'] = '4';
$arguments28['minItems'] = '1';
$arguments28['label'] = 'Bilder';
$arguments28['default'] = NULL;
$arguments28['exclude'] = false;
$arguments28['transform'] = NULL;
$arguments28['enabled'] = true;
$arguments28['requestUpdate'] = false;
$arguments28['displayCond'] = NULL;
$arguments28['inherit'] = true;
$arguments28['inheritEmpty'] = true;
$arguments28['clear'] = false;
$arguments28['variables'] = array (
);
$arguments28['extensionName'] = NULL;
$arguments28['validate'] = 'trim';
$arguments28['size'] = 1;
$arguments28['itemListStyle'] = NULL;
$arguments28['selectedListStyle'] = NULL;
$arguments28['items'] = NULL;
$arguments28['emptyOption'] = false;
$arguments28['translateCsvItems'] = NULL;
$arguments28['itemsProcFunc'] = NULL;
$arguments28['table'] = 'sys_file_reference';
$arguments28['condition'] = NULL;
$arguments28['mm'] = NULL;
$arguments28['foreignField'] = 'uid_foreign';
$arguments28['foreignLabel'] = 'uid_local';
$arguments28['foreignSelector'] = 'uid_local';
$arguments28['foreignSortby'] = 'sorting_foreign';
$arguments28['foreignDefaultSortby'] = '';
$arguments28['foreignTableField'] = 'tablenames';
$arguments28['foreignUnique'] = NULL;
$arguments28['symmetricField'] = '';
$arguments28['symmetricLabel'] = '';
$arguments28['symmetricSortby'] = '';
$arguments28['localizationMode'] = 'select';
$arguments28['localizeChildrenAtParentLocalization'] = true;
$arguments28['disableMovingChildrenWithParent'] = false;
$arguments28['showThumbs'] = true;
$arguments28['matchFields'] = array (
);
$arguments28['oppositeField'] = '';
$arguments28['collapseAll'] = false;
$arguments28['expandSingle'] = false;
$arguments28['newRecordLinkAddTitle'] = true;
$arguments28['newRecordLinkPosition'] = 'top';
$arguments28['useCombination'] = false;
$arguments28['useSortable'] = true;
$arguments28['showPossibleLocalizationRecords'] = false;
$arguments28['showRemovedLocalizationRecords'] = false;
$arguments28['showAllLocalizationLink'] = false;
$arguments28['showSynchronizationLink'] = false;
$arguments28['enabledControls'] = false;
$arguments28['headerThumbnail'] = false;
$arguments28['foreignMatchFields'] = false;
$arguments28['foreignTypes'] = NULL;
$arguments28['levelLinksPosition'] = 'both';
$arguments28['disallowedExtensions'] = '';
$arguments28['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$renderChildrenClosure29 = function() {return NULL;};

$output27 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
		';
return $output27;
};

$output23 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments24, $renderChildrenClosure26, $renderingContext);

$output23 .= '
	';
return $output23;
};

$output17 .= '';

$output17 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments30 = array();
$arguments30['name'] = 'Preview';
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<strong>Slider</strong>
	';
};

$output17 .= '';

$output17 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments32 = array();
$arguments32['name'] = 'Main';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
		<div class="slider-holder">
  		<div class="carusel">
    		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments35 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments36 = array();
$arguments36['field'] = 'settings.images';
$arguments36['table'] = 'tt_content';
$arguments36['record'] = NULL;
$arguments36['uid'] = NULL;
$arguments36['as'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments35['each'] = $viewHelper38->initializeArgumentsAndRender();
$arguments35['as'] = 'image';
$arguments35['key'] = '';
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
      		<div class="slide fade">
        		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments41 = array();
// Rendering Boolean node
$arguments41['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments41['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'id', $renderingContext);
$arguments41['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments41['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'alternative', $renderingContext);
$arguments41['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'crop', $renderingContext);
$arguments41['class'] = 'img-responsive';
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['width'] = NULL;
$arguments41['height'] = NULL;
$arguments41['minWidth'] = NULL;
$arguments41['minHeight'] = NULL;
$arguments41['maxWidth'] = NULL;
$arguments41['maxHeight'] = NULL;
$arguments41['image'] = NULL;
$arguments41['absolute'] = false;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['ismap'] = NULL;
$arguments41['longdesc'] = NULL;
$arguments41['usemap'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output40 .= $viewHelper43->initializeArgumentsAndRender();

$output40 .= '
      		</div>
    		';
return $output40;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure39, $renderingContext);

$output34 .= '
  		</div>
  	<a class="left-button" onclick="plusSlides(-1)">❮</a>
  	<a class="right-button" onclick="plusSlides(1)">❯</a>
		</div>
	';
return $output34;
};

$output17 .= '';

$output17 .= '
';


return $output17;
}


}
#1539020255    19119     