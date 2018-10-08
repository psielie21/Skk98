<?php
class FluidCache_SkkProvider_Standard_action__50589b72605819687944b21eeaa3da056d411a96 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments5['condition'] = 'AND doktype = \'254\' ';
$arguments5['table'] = 'pages';
$arguments5['minItems'] = '1';
$arguments5['maxItems'] = '1';
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

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments8 = array();
$arguments8['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['forceClosingTag'] = false;
$arguments8['hideIfEmpty'] = false;
$arguments8['contenteditable'] = NULL;
$arguments8['contextmenu'] = NULL;
$arguments8['draggable'] = NULL;
$arguments8['dropzone'] = NULL;
$arguments8['translate'] = NULL;
$arguments8['spellcheck'] = NULL;
$arguments8['hidden'] = NULL;
$arguments8['showAccessProtected'] = false;
$arguments8['classAccessProtected'] = 'protected';
$arguments8['classAccessGranted'] = 'access-granted';
$arguments8['useShortcutUid'] = NULL;
$arguments8['useShortcutTarget'] = NULL;
$arguments8['useShortcutData'] = false;
$arguments8['tagName'] = 'ul';
$arguments8['tagNameChildren'] = 'li';
$arguments8['entryLevel'] = 0;
$arguments8['levels'] = 1;
$arguments8['expandAll'] = false;
$arguments8['classFirst'] = '';
$arguments8['classLast'] = '';
$arguments8['classActive'] = 'active';
$arguments8['classCurrent'] = 'current';
$arguments8['classHasSubpages'] = 'sub';
$arguments8['substElementUid'] = false;
$arguments8['showHiddenInMenu'] = false;
$arguments8['showCurrent'] = true;
$arguments8['linkCurrent'] = true;
$arguments8['linkActive'] = true;
$arguments8['titleFields'] = 'nav_title,title';
$arguments8['includeAnchorTitle'] = true;
$arguments8['includeSpacers'] = false;
$arguments8['deferred'] = false;
$arguments8['as'] = 'menu';
$arguments8['rootLineAs'] = 'rootLine';
$arguments8['excludePages'] = '';
$arguments8['forceAbsoluteUrl'] = false;
$arguments8['doktypes'] = '';
$arguments8['divider'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments11 = array();
$arguments11['each'] = $currentVariableContainer->getOrNull('menu');
$arguments11['as'] = 'item';
// Rendering Boolean node
$arguments11['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments11['iteration'] = 'iterator';
$arguments11['key'] = '';
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments14 = array();
// Rendering Boolean node
$arguments14['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments17 = array();
$arguments17['name'] = 'content';
$arguments17['value'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments19 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = NULL;
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() {return NULL;};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());
$arguments19['pageUid'] = (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments20['encoding'] !== NULL ? $arguments20['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments20['doubleEncode']));
$arguments19['column'] = '0';
$arguments19['order'] = 'sorting';
$arguments19['sortDirection'] = 'ASC';
$arguments19['contentUids'] = NULL;
$arguments19['sectionIndexOnly'] = false;
$arguments19['loadRegister'] = NULL;
$arguments19['render'] = false;
$arguments19['hideUntranslated'] = false;
$arguments19['limit'] = NULL;
$arguments19['slide'] = 0;
$arguments19['slideCollect'] = 0;
$arguments19['slideCollectReverse'] = false;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper24->setArguments($arguments19);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper24->initializeArgumentsAndRender();
};

$output16 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments17, isset($arguments17['value']) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18, $renderingContext);

$output16 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments25 = array();
$arguments25['table'] = 'tt_content';
$arguments25['field'] = 'pi_flexform';
$arguments25['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments25['as'] = 'flexformData';
$arguments25['record'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
							<div class="blog">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments28 = array();
// Rendering Boolean node
$arguments28['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments28['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments28['class'] = 'img-responsive';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['absolute'] = false;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['alt'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();

$output27 .= '<br/>
								<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output27 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output27 .= '</h2>
								<p class="collapsed">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output27 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output27 .= '
								</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments37 = array();
$arguments37['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments37['target'] = '';
$arguments37['class'] = '';
$arguments37['title'] = '';
$arguments37['additionalParams'] = '';
$arguments37['additionalAttributes'] = array (
);
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output27 .= '
							</div>
						';
return $output27;
};

$output16 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output16 .= '
					';
return $output16;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
				';
return $output13;
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
			';
return $output10;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper39->setArguments($arguments8);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output7 .= $viewHelper39->initializeArgumentsAndRender();

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

$output40 = '';

$output40 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments41 = array();
$arguments41['name'] = 'Content';
$renderChildrenClosure42 = function() {return NULL;};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output40 .= $viewHelper43->initializeArgumentsAndRender();

$output40 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments44 = array();
$arguments44['name'] = 'Configuration';
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments47 = array();
$arguments47['id'] = 'bloggroup';
// Rendering Array
$array48 = array();
$array48['group'] = 'Mannschaften';
$arguments47['options'] = $array48;
$arguments47['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments47['label'] = NULL;
$arguments47['description'] = NULL;
$arguments47['enabled'] = true;
$arguments47['compact'] = false;
$arguments47['variables'] = array (
);
$arguments47['extensionName'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments51 = array();
$arguments51['name'] = 'articles';
$arguments51['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments51['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments51['size'] = '6';
$arguments51['condition'] = 'AND doktype = \'254\' ';
$arguments51['table'] = 'pages';
$arguments51['minItems'] = '1';
$arguments51['maxItems'] = '1';
$arguments51['default'] = NULL;
$arguments51['required'] = false;
$arguments51['exclude'] = false;
$arguments51['transform'] = NULL;
$arguments51['enabled'] = true;
$arguments51['requestUpdate'] = false;
$arguments51['displayCond'] = NULL;
$arguments51['inherit'] = true;
$arguments51['inheritEmpty'] = true;
$arguments51['clear'] = false;
$arguments51['variables'] = array (
);
$arguments51['extensionName'] = NULL;
$arguments51['validate'] = 'trim';
$arguments51['itemListStyle'] = NULL;
$arguments51['selectedListStyle'] = NULL;
$arguments51['items'] = NULL;
$arguments51['emptyOption'] = false;
$arguments51['translateCsvItems'] = NULL;
$arguments51['itemsProcFunc'] = NULL;
$arguments51['mm'] = NULL;
$arguments51['foreignField'] = '';
$arguments51['foreignLabel'] = '';
$arguments51['foreignSelector'] = NULL;
$arguments51['foreignSortby'] = '';
$arguments51['foreignDefaultSortby'] = '';
$arguments51['foreignTableField'] = '';
$arguments51['foreignUnique'] = NULL;
$arguments51['symmetricField'] = '';
$arguments51['symmetricLabel'] = '';
$arguments51['symmetricSortby'] = '';
$arguments51['localizationMode'] = '';
$arguments51['localizeChildrenAtParentLocalization'] = false;
$arguments51['disableMovingChildrenWithParent'] = false;
$arguments51['showThumbs'] = true;
$arguments51['matchFields'] = array (
);
$arguments51['oppositeField'] = '';
$renderChildrenClosure52 = function() {return NULL;};

$output50 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
		';
return $output50;
};

$output46 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments47, $renderChildrenClosure49, $renderingContext);

$output46 .= '
	';
return $output46;
};

$output40 .= '';

$output40 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments53 = array();
$arguments53['name'] = 'Preview';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<strong>Bloggruppe</strong><br />
	';
};

$output40 .= '';

$output40 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments55 = array();
$arguments55['name'] = 'Main';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments58 = array();
$arguments58['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['forceClosingTag'] = false;
$arguments58['hideIfEmpty'] = false;
$arguments58['contenteditable'] = NULL;
$arguments58['contextmenu'] = NULL;
$arguments58['draggable'] = NULL;
$arguments58['dropzone'] = NULL;
$arguments58['translate'] = NULL;
$arguments58['spellcheck'] = NULL;
$arguments58['hidden'] = NULL;
$arguments58['showAccessProtected'] = false;
$arguments58['classAccessProtected'] = 'protected';
$arguments58['classAccessGranted'] = 'access-granted';
$arguments58['useShortcutUid'] = NULL;
$arguments58['useShortcutTarget'] = NULL;
$arguments58['useShortcutData'] = false;
$arguments58['tagName'] = 'ul';
$arguments58['tagNameChildren'] = 'li';
$arguments58['entryLevel'] = 0;
$arguments58['levels'] = 1;
$arguments58['expandAll'] = false;
$arguments58['classFirst'] = '';
$arguments58['classLast'] = '';
$arguments58['classActive'] = 'active';
$arguments58['classCurrent'] = 'current';
$arguments58['classHasSubpages'] = 'sub';
$arguments58['substElementUid'] = false;
$arguments58['showHiddenInMenu'] = false;
$arguments58['showCurrent'] = true;
$arguments58['linkCurrent'] = true;
$arguments58['linkActive'] = true;
$arguments58['titleFields'] = 'nav_title,title';
$arguments58['includeAnchorTitle'] = true;
$arguments58['includeSpacers'] = false;
$arguments58['deferred'] = false;
$arguments58['as'] = 'menu';
$arguments58['rootLineAs'] = 'rootLine';
$arguments58['excludePages'] = '';
$arguments58['forceAbsoluteUrl'] = false;
$arguments58['doktypes'] = '';
$arguments58['divider'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments61 = array();
$arguments61['each'] = $currentVariableContainer->getOrNull('menu');
$arguments61['as'] = 'item';
// Rendering Boolean node
$arguments61['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments61['iteration'] = 'iterator';
$arguments61['key'] = '';
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments64 = array();
// Rendering Boolean node
$arguments64['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments67 = array();
$arguments67['name'] = 'content';
$arguments67['value'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments69 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());
$arguments69['pageUid'] = (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));
$arguments69['column'] = '0';
$arguments69['order'] = 'sorting';
$arguments69['sortDirection'] = 'ASC';
$arguments69['contentUids'] = NULL;
$arguments69['sectionIndexOnly'] = false;
$arguments69['loadRegister'] = NULL;
$arguments69['render'] = false;
$arguments69['hideUntranslated'] = false;
$arguments69['limit'] = NULL;
$arguments69['slide'] = 0;
$arguments69['slideCollect'] = 0;
$arguments69['slideCollectReverse'] = false;
$renderChildrenClosure73 = function() {return NULL;};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper74->setArguments($arguments69);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper74->initializeArgumentsAndRender();
};

$output66 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments67, isset($arguments67['value']) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68, $renderingContext);

$output66 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments75 = array();
$arguments75['table'] = 'tt_content';
$arguments75['field'] = 'pi_flexform';
$arguments75['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments75['as'] = 'flexformData';
$arguments75['record'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
							<div class="blog">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments78 = array();
// Rendering Boolean node
$arguments78['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments78['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments78['class'] = 'img-responsive';
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['minWidth'] = NULL;
$arguments78['minHeight'] = NULL;
$arguments78['maxWidth'] = NULL;
$arguments78['maxHeight'] = NULL;
$arguments78['image'] = NULL;
$arguments78['crop'] = NULL;
$arguments78['absolute'] = false;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['alt'] = NULL;
$arguments78['ismap'] = NULL;
$arguments78['longdesc'] = NULL;
$arguments78['usemap'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output77 .= $viewHelper80->initializeArgumentsAndRender();

$output77 .= '<br/>
								<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = NULL;
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() {return NULL;};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output77 .= (!is_string($value83) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments81['encoding'] !== NULL ? $arguments81['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments81['doubleEncode']));

$output77 .= '</h2>
								<p class="collapsed">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output77 .= (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));

$output77 .= '
								</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments87 = array();
$arguments87['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments87['target'] = '';
$arguments87['class'] = '';
$arguments87['title'] = '';
$arguments87['additionalParams'] = '';
$arguments87['additionalAttributes'] = array (
);
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output77 .= '
							</div>
						';
return $output77;
};

$output66 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output66 .= '
					';
return $output66;
};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
				';
return $output63;
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
			';
return $output60;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper89->setArguments($arguments58);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output57 .= $viewHelper89->initializeArgumentsAndRender();

$output57 .= '
  	</div>
	';
return $output57;
};

$output40 .= '';

$output40 .= '
</div>
';


return $output40;
}


}
#1539020255    33481     