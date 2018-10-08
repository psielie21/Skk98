<?php
class FluidCache_SkkProvider_Standard_action__f0942368d6f37cc7a4c667f51bf2fca4fc4e76cb extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'bloggroup';
// Rendering Array
$array2 = array();
$array2['group'] = 'Mannschaften';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments5 = array();
$arguments5['name'] = 'articles';
$arguments5['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments5['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments5['size'] = '6';
$arguments5['condition'] = 'AND tx_fed_fcefile = \'Carlo.SkkProvider:BlogEintrag.html\' ';
$arguments5['table'] = 'tt_content';
$arguments5['minItems'] = '1';
$arguments5['maxItems'] = '5';
$arguments5['default'] = NULL;
$arguments5['required'] = false;
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
$arguments5['itemListStyle'] = NULL;
$arguments5['selectedListStyle'] = NULL;
$arguments5['items'] = NULL;
$arguments5['emptyOption'] = false;
$arguments5['translateCsvItems'] = NULL;
$arguments5['itemsProcFunc'] = NULL;
$arguments5['mm'] = NULL;
$arguments5['foreignField'] = '';
$arguments5['foreignLabel'] = '';
$arguments5['foreignSelector'] = NULL;
$arguments5['foreignSortby'] = '';
$arguments5['foreignDefaultSortby'] = '';
$arguments5['foreignTableField'] = '';
$arguments5['foreignUnique'] = NULL;
$arguments5['symmetricField'] = '';
$arguments5['symmetricLabel'] = '';
$arguments5['symmetricSortby'] = '';
$arguments5['localizationMode'] = '';
$arguments5['localizeChildrenAtParentLocalization'] = false;
$arguments5['disableMovingChildrenWithParent'] = false;
$arguments5['showThumbs'] = true;
$arguments5['matchFields'] = array (
);
$arguments5['oppositeField'] = '';
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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
		<strong>Bloggruppe</strong><br />
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
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments8 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = $currentVariableContainer->getOrNull('articles');
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());
$arguments8['content'] = (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));
$arguments8['glue'] = ',';
$arguments8['as'] = 'articles';
$renderChildrenClosure12 = function() {return NULL;};

$output7 .= FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper::renderStatic($arguments8, $renderChildrenClosure12, $renderingContext);

$output7 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments13 = array();
$arguments13['name'] = 'slides';
$arguments13['value'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments15 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = $currentVariableContainer->getOrNull('articles');
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());
$arguments15['contentUids'] = (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));
// Rendering Boolean node
$arguments15['render'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments15['column'] = NULL;
$arguments15['order'] = 'sorting';
$arguments15['sortDirection'] = 'ASC';
$arguments15['pageUid'] = 0;
$arguments15['sectionIndexOnly'] = false;
$arguments15['loadRegister'] = NULL;
$arguments15['hideUntranslated'] = false;
$arguments15['limit'] = NULL;
$arguments15['slide'] = 0;
$arguments15['slideCollect'] = 0;
$arguments15['slideCollectReverse'] = false;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper20->setArguments($arguments15);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper20->initializeArgumentsAndRender();
};

$output7 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments13, isset($arguments13['value']) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14, $renderingContext);

$output7 .= '
    <div class="blog-container" id="blog-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments21 = array();
$arguments21['each'] = $currentVariableContainer->getOrNull('slides');
$arguments21['as'] = 'element';
$arguments21['key'] = '';
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments24 = array();
$arguments24['table'] = 'tt_content';
$arguments24['field'] = 'pi_flexform';
$arguments24['record'] = $currentVariableContainer->getOrNull('element');
$arguments24['as'] = 'flexformData';
$arguments24['uid'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
            <div class="blog">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments27['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments27['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments27['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments27['class'] = 'img-responsive';
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['width'] = NULL;
$arguments27['height'] = NULL;
$arguments27['minWidth'] = NULL;
$arguments27['minHeight'] = NULL;
$arguments27['maxWidth'] = NULL;
$arguments27['maxHeight'] = NULL;
$arguments27['image'] = NULL;
$arguments27['crop'] = NULL;
$arguments27['absolute'] = false;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['ismap'] = NULL;
$arguments27['longdesc'] = NULL;
$arguments27['usemap'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output26 .= $viewHelper29->initializeArgumentsAndRender();

$output26 .= '<br/>
              <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output26 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output26 .= '</h2>
              <p class="collapsed">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output26 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output26 .= '
              </p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments36 = array();
$arguments36['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('element'), 'pid', $renderingContext);
$arguments36['target'] = '';
$arguments36['class'] = '';
$arguments36['title'] = '';
$arguments36['additionalParams'] = '';
$arguments36['additionalAttributes'] = array (
);
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output26 .= '
            </div>
      ';
return $output26;
};

$output23 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
    ';
return $output23;
};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output7 .= '
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

$output38 = '';

$output38 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments39 = array();
$arguments39['name'] = 'Content';
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output38 .= $viewHelper41->initializeArgumentsAndRender();

$output38 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments42 = array();
$arguments42['name'] = 'Configuration';
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments45 = array();
$arguments45['id'] = 'bloggroup';
// Rendering Array
$array46 = array();
$array46['group'] = 'Mannschaften';
$arguments45['options'] = $array46;
$arguments45['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments45['label'] = NULL;
$arguments45['description'] = NULL;
$arguments45['enabled'] = true;
$arguments45['compact'] = false;
$arguments45['variables'] = array (
);
$arguments45['extensionName'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments49 = array();
$arguments49['name'] = 'articles';
$arguments49['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments49['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments49['size'] = '6';
$arguments49['condition'] = 'AND tx_fed_fcefile = \'Carlo.SkkProvider:BlogEintrag.html\' ';
$arguments49['table'] = 'tt_content';
$arguments49['minItems'] = '1';
$arguments49['maxItems'] = '5';
$arguments49['default'] = NULL;
$arguments49['required'] = false;
$arguments49['exclude'] = false;
$arguments49['transform'] = NULL;
$arguments49['enabled'] = true;
$arguments49['requestUpdate'] = false;
$arguments49['displayCond'] = NULL;
$arguments49['inherit'] = true;
$arguments49['inheritEmpty'] = true;
$arguments49['clear'] = false;
$arguments49['variables'] = array (
);
$arguments49['extensionName'] = NULL;
$arguments49['validate'] = 'trim';
$arguments49['itemListStyle'] = NULL;
$arguments49['selectedListStyle'] = NULL;
$arguments49['items'] = NULL;
$arguments49['emptyOption'] = false;
$arguments49['translateCsvItems'] = NULL;
$arguments49['itemsProcFunc'] = NULL;
$arguments49['mm'] = NULL;
$arguments49['foreignField'] = '';
$arguments49['foreignLabel'] = '';
$arguments49['foreignSelector'] = NULL;
$arguments49['foreignSortby'] = '';
$arguments49['foreignDefaultSortby'] = '';
$arguments49['foreignTableField'] = '';
$arguments49['foreignUnique'] = NULL;
$arguments49['symmetricField'] = '';
$arguments49['symmetricLabel'] = '';
$arguments49['symmetricSortby'] = '';
$arguments49['localizationMode'] = '';
$arguments49['localizeChildrenAtParentLocalization'] = false;
$arguments49['disableMovingChildrenWithParent'] = false;
$arguments49['showThumbs'] = true;
$arguments49['matchFields'] = array (
);
$arguments49['oppositeField'] = '';
$renderChildrenClosure50 = function() {return NULL;};

$output48 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
		';
return $output48;
};

$output44 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments45, $renderChildrenClosure47, $renderingContext);

$output44 .= '
	';
return $output44;
};

$output38 .= '';

$output38 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments51 = array();
$arguments51['name'] = 'Preview';
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<strong>Bloggruppe</strong><br />
	';
};

$output38 .= '';

$output38 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments53 = array();
$arguments53['name'] = 'Main';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output55 = '';

$output55 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments56 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = $currentVariableContainer->getOrNull('articles');
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());
$arguments56['content'] = (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));
$arguments56['glue'] = ',';
$arguments56['as'] = 'articles';
$renderChildrenClosure60 = function() {return NULL;};

$output55 .= FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper::renderStatic($arguments56, $renderChildrenClosure60, $renderingContext);

$output55 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments61 = array();
$arguments61['name'] = 'slides';
$arguments61['value'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments63 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = $currentVariableContainer->getOrNull('articles');
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());
$arguments63['contentUids'] = (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));
// Rendering Boolean node
$arguments63['render'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments63['column'] = NULL;
$arguments63['order'] = 'sorting';
$arguments63['sortDirection'] = 'ASC';
$arguments63['pageUid'] = 0;
$arguments63['sectionIndexOnly'] = false;
$arguments63['loadRegister'] = NULL;
$arguments63['hideUntranslated'] = false;
$arguments63['limit'] = NULL;
$arguments63['slide'] = 0;
$arguments63['slideCollect'] = 0;
$arguments63['slideCollectReverse'] = false;
$renderChildrenClosure67 = function() {return NULL;};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper68->setArguments($arguments63);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper68->initializeArgumentsAndRender();
};

$output55 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments61, isset($arguments61['value']) ? function() use ($arguments61) { return $arguments61['value']; } : $renderChildrenClosure62, $renderingContext);

$output55 .= '
    <div class="blog-container" id="blog-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments69 = array();
$arguments69['each'] = $currentVariableContainer->getOrNull('slides');
$arguments69['as'] = 'element';
$arguments69['key'] = '';
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments72 = array();
$arguments72['table'] = 'tt_content';
$arguments72['field'] = 'pi_flexform';
$arguments72['record'] = $currentVariableContainer->getOrNull('element');
$arguments72['as'] = 'flexformData';
$arguments72['uid'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
            <div class="blog">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments75 = array();
// Rendering Boolean node
$arguments75['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments75['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments75['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments75['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments75['class'] = 'img-responsive';
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['width'] = NULL;
$arguments75['height'] = NULL;
$arguments75['minWidth'] = NULL;
$arguments75['minHeight'] = NULL;
$arguments75['maxWidth'] = NULL;
$arguments75['maxHeight'] = NULL;
$arguments75['image'] = NULL;
$arguments75['crop'] = NULL;
$arguments75['absolute'] = false;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['ismap'] = NULL;
$arguments75['longdesc'] = NULL;
$arguments75['usemap'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output74 .= $viewHelper77->initializeArgumentsAndRender();

$output74 .= '<br/>
              <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output74 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output74 .= '</h2>
              <p class="collapsed">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output74 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output74 .= '
              </p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments84 = array();
$arguments84['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('element'), 'pid', $renderingContext);
$arguments84['target'] = '';
$arguments84['class'] = '';
$arguments84['title'] = '';
$arguments84['additionalParams'] = '';
$arguments84['additionalAttributes'] = array (
);
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output74 .= '
            </div>
      ';
return $output74;
};

$output71 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
    ';
return $output71;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output55 .= '
    </div>
	';
return $output55;
};

$output38 .= '';

$output38 .= '
</div>
';


return $output38;
}


}
#1517257562    29235     