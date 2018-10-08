<?php
class FluidCache_SkkProvider_Content_action_blogGroup_4121f0abee78b4d6715690d4c404394b79b97419 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output7 = '';

$output7 .= '
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments8 = array();
$arguments8['title'] = NULL;
$arguments8['maxDepth'] = 8;
$arguments8['plainText'] = false;
$arguments8['ansiColors'] = false;
$arguments8['inline'] = false;
$arguments8['blacklistedClassNames'] = NULL;
$arguments8['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = $currentVariableContainer->getOrNull('articles');
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());
return (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));
};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
	';


return $output7;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output13 = '';

$output13 .= '

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments14 = array();
$arguments14['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['forceClosingTag'] = false;
$arguments14['hideIfEmpty'] = false;
$arguments14['contenteditable'] = NULL;
$arguments14['contextmenu'] = NULL;
$arguments14['draggable'] = NULL;
$arguments14['dropzone'] = NULL;
$arguments14['translate'] = NULL;
$arguments14['spellcheck'] = NULL;
$arguments14['hidden'] = NULL;
$arguments14['showAccessProtected'] = false;
$arguments14['classAccessProtected'] = 'protected';
$arguments14['classAccessGranted'] = 'access-granted';
$arguments14['useShortcutUid'] = NULL;
$arguments14['useShortcutTarget'] = NULL;
$arguments14['useShortcutData'] = false;
$arguments14['tagName'] = 'ul';
$arguments14['tagNameChildren'] = 'li';
$arguments14['entryLevel'] = 0;
$arguments14['levels'] = 1;
$arguments14['expandAll'] = false;
$arguments14['classFirst'] = '';
$arguments14['classLast'] = '';
$arguments14['classActive'] = 'active';
$arguments14['classCurrent'] = 'current';
$arguments14['classHasSubpages'] = 'sub';
$arguments14['substElementUid'] = false;
$arguments14['showHiddenInMenu'] = false;
$arguments14['showCurrent'] = true;
$arguments14['linkCurrent'] = true;
$arguments14['linkActive'] = true;
$arguments14['titleFields'] = 'nav_title,title';
$arguments14['includeAnchorTitle'] = true;
$arguments14['includeSpacers'] = false;
$arguments14['deferred'] = false;
$arguments14['as'] = 'menu';
$arguments14['rootLineAs'] = 'rootLine';
$arguments14['excludePages'] = '';
$arguments14['forceAbsoluteUrl'] = false;
$arguments14['doktypes'] = '';
$arguments14['divider'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = $currentVariableContainer->getOrNull('menu');
$arguments17['as'] = 'item';
// Rendering Boolean node
$arguments17['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments17['iteration'] = 'iterator';
$arguments17['key'] = '';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments23 = array();
$arguments23['name'] = 'content';
$arguments23['value'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments25 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());
$arguments25['pageUid'] = (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));
$arguments25['column'] = '0';
$arguments25['order'] = 'sorting';
$arguments25['sortDirection'] = 'ASC';
$arguments25['contentUids'] = NULL;
$arguments25['sectionIndexOnly'] = false;
$arguments25['loadRegister'] = NULL;
$arguments25['render'] = false;
$arguments25['hideUntranslated'] = false;
$arguments25['limit'] = NULL;
$arguments25['slide'] = 0;
$arguments25['slideCollect'] = 0;
$arguments25['slideCollectReverse'] = false;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper30->setArguments($arguments25);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper30->initializeArgumentsAndRender();
};

$output22 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments23, isset($arguments23['value']) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24, $renderingContext);

$output22 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments31 = array();
$arguments31['table'] = 'tt_content';
$arguments31['field'] = 'pi_flexform';
$arguments31['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments31['as'] = 'flexformData';
$arguments31['record'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
							';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments34 = array();
$arguments34['name'] = 'image';
$arguments34['value'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
$arguments36 = array();
$arguments36['haystack'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments38 = array();
$arguments38['field'] = 'flexformData.settings.image';
$arguments38['table'] = 'tt_content';
$arguments38['record'] = NULL;
$arguments38['uid'] = NULL;
$arguments38['as'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
return $viewHelper40->initializeArgumentsAndRender();
};
return FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper::renderStatic($arguments36, isset($arguments36['haystack']) ? function() use ($arguments36) { return $arguments36['haystack']; } : $renderChildrenClosure37, $renderingContext);
};

$output33 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments34, isset($arguments34['value']) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35, $renderingContext);

$output33 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments41 = array();
$arguments41['title'] = NULL;
$arguments41['maxDepth'] = 8;
$arguments41['plainText'] = false;
$arguments41['ansiColors'] = false;
$arguments41['inline'] = false;
$arguments41['blacklistedClassNames'] = NULL;
$arguments41['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = $currentVariableContainer->getOrNull('image');
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());
return (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output33 .= '
							<div class="blog">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments46 = array();
// Rendering Boolean node
$arguments46['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments46['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments46['class'] = 'img-responsive';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['width'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxWidth'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['image'] = NULL;
$arguments46['crop'] = NULL;
$arguments46['absolute'] = false;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['alt'] = NULL;
$arguments46['ismap'] = NULL;
$arguments46['longdesc'] = NULL;
$arguments46['usemap'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output33 .= $viewHelper48->initializeArgumentsAndRender();

$output33 .= '<br/>
								<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output33 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output33 .= '</h2>
								<p class="collapsed">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output33 .= (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode']));

$output33 .= '
								</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments55 = array();
$arguments55['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments55['target'] = '';
$arguments55['class'] = '';
$arguments55['title'] = '';
$arguments55['additionalParams'] = '';
$arguments55['additionalAttributes'] = array (
);
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output33 .= '
							</div>
						';
return $output33;
};

$output22 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output22 .= '
					';
return $output22;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
				';
return $output19;
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
			';
return $output16;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper57->setArguments($arguments14);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output13 .= $viewHelper57->initializeArgumentsAndRender();

$output13 .= '
  	</div>
	';


return $output13;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output58 = '';

$output58 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments59 = array();
$arguments59['name'] = 'Content';
$renderChildrenClosure60 = function() {return NULL;};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output58 .= $viewHelper61->initializeArgumentsAndRender();

$output58 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments62 = array();
$arguments62['name'] = 'Configuration';
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments65 = array();
$arguments65['id'] = 'bloggroup';
// Rendering Array
$array66 = array();
$array66['group'] = 'Mannschaften';
$arguments65['options'] = $array66;
$arguments65['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments65['label'] = NULL;
$arguments65['description'] = NULL;
$arguments65['enabled'] = true;
$arguments65['compact'] = false;
$arguments65['variables'] = array (
);
$arguments65['extensionName'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments69 = array();
$arguments69['name'] = 'articles';
$arguments69['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments69['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments69['size'] = '6';
$arguments69['condition'] = 'AND doktype = \'254\' ';
$arguments69['table'] = 'pages';
$arguments69['minItems'] = '1';
$arguments69['maxItems'] = '1';
$arguments69['default'] = NULL;
$arguments69['required'] = false;
$arguments69['exclude'] = false;
$arguments69['transform'] = NULL;
$arguments69['enabled'] = true;
$arguments69['requestUpdate'] = false;
$arguments69['displayCond'] = NULL;
$arguments69['inherit'] = true;
$arguments69['inheritEmpty'] = true;
$arguments69['clear'] = false;
$arguments69['variables'] = array (
);
$arguments69['extensionName'] = NULL;
$arguments69['validate'] = 'trim';
$arguments69['itemListStyle'] = NULL;
$arguments69['selectedListStyle'] = NULL;
$arguments69['items'] = NULL;
$arguments69['emptyOption'] = false;
$arguments69['translateCsvItems'] = NULL;
$arguments69['itemsProcFunc'] = NULL;
$arguments69['mm'] = NULL;
$arguments69['foreignField'] = '';
$arguments69['foreignLabel'] = '';
$arguments69['foreignSelector'] = NULL;
$arguments69['foreignSortby'] = '';
$arguments69['foreignDefaultSortby'] = '';
$arguments69['foreignTableField'] = '';
$arguments69['foreignUnique'] = NULL;
$arguments69['symmetricField'] = '';
$arguments69['symmetricLabel'] = '';
$arguments69['symmetricSortby'] = '';
$arguments69['localizationMode'] = '';
$arguments69['localizeChildrenAtParentLocalization'] = false;
$arguments69['disableMovingChildrenWithParent'] = false;
$arguments69['showThumbs'] = true;
$arguments69['matchFields'] = array (
);
$arguments69['oppositeField'] = '';
$renderChildrenClosure70 = function() {return NULL;};

$output68 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
		';
return $output68;
};

$output64 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments65, $renderChildrenClosure67, $renderingContext);

$output64 .= '
	';
return $output64;
};

$output58 .= '';

$output58 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments71 = array();
$arguments71['name'] = 'Preview';
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments74 = array();
$arguments74['title'] = NULL;
$arguments74['maxDepth'] = 8;
$arguments74['plainText'] = false;
$arguments74['ansiColors'] = false;
$arguments74['inline'] = false;
$arguments74['blacklistedClassNames'] = NULL;
$arguments74['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = $currentVariableContainer->getOrNull('articles');
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());
return (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
	';
return $output73;
};

$output58 .= '';

$output58 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments79 = array();
$arguments79['name'] = 'Main';
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments82 = array();
$arguments82['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['forceClosingTag'] = false;
$arguments82['hideIfEmpty'] = false;
$arguments82['contenteditable'] = NULL;
$arguments82['contextmenu'] = NULL;
$arguments82['draggable'] = NULL;
$arguments82['dropzone'] = NULL;
$arguments82['translate'] = NULL;
$arguments82['spellcheck'] = NULL;
$arguments82['hidden'] = NULL;
$arguments82['showAccessProtected'] = false;
$arguments82['classAccessProtected'] = 'protected';
$arguments82['classAccessGranted'] = 'access-granted';
$arguments82['useShortcutUid'] = NULL;
$arguments82['useShortcutTarget'] = NULL;
$arguments82['useShortcutData'] = false;
$arguments82['tagName'] = 'ul';
$arguments82['tagNameChildren'] = 'li';
$arguments82['entryLevel'] = 0;
$arguments82['levels'] = 1;
$arguments82['expandAll'] = false;
$arguments82['classFirst'] = '';
$arguments82['classLast'] = '';
$arguments82['classActive'] = 'active';
$arguments82['classCurrent'] = 'current';
$arguments82['classHasSubpages'] = 'sub';
$arguments82['substElementUid'] = false;
$arguments82['showHiddenInMenu'] = false;
$arguments82['showCurrent'] = true;
$arguments82['linkCurrent'] = true;
$arguments82['linkActive'] = true;
$arguments82['titleFields'] = 'nav_title,title';
$arguments82['includeAnchorTitle'] = true;
$arguments82['includeSpacers'] = false;
$arguments82['deferred'] = false;
$arguments82['as'] = 'menu';
$arguments82['rootLineAs'] = 'rootLine';
$arguments82['excludePages'] = '';
$arguments82['forceAbsoluteUrl'] = false;
$arguments82['doktypes'] = '';
$arguments82['divider'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments85 = array();
$arguments85['each'] = $currentVariableContainer->getOrNull('menu');
$arguments85['as'] = 'item';
// Rendering Boolean node
$arguments85['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments85['iteration'] = 'iterator';
$arguments85['key'] = '';
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments88 = array();
// Rendering Boolean node
$arguments88['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments91 = array();
$arguments91['name'] = 'content';
$arguments91['value'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments93 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() {return NULL;};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());
$arguments93['pageUid'] = (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));
$arguments93['column'] = '0';
$arguments93['order'] = 'sorting';
$arguments93['sortDirection'] = 'ASC';
$arguments93['contentUids'] = NULL;
$arguments93['sectionIndexOnly'] = false;
$arguments93['loadRegister'] = NULL;
$arguments93['render'] = false;
$arguments93['hideUntranslated'] = false;
$arguments93['limit'] = NULL;
$arguments93['slide'] = 0;
$arguments93['slideCollect'] = 0;
$arguments93['slideCollectReverse'] = false;
$renderChildrenClosure97 = function() {return NULL;};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper98->setArguments($arguments93);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper98->initializeArgumentsAndRender();
};

$output90 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments91, isset($arguments91['value']) ? function() use ($arguments91) { return $arguments91['value']; } : $renderChildrenClosure92, $renderingContext);

$output90 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments99 = array();
$arguments99['table'] = 'tt_content';
$arguments99['field'] = 'pi_flexform';
$arguments99['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments99['as'] = 'flexformData';
$arguments99['record'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
							';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments102 = array();
$arguments102['name'] = 'image';
$arguments102['value'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
$arguments104 = array();
$arguments104['haystack'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments106 = array();
$arguments106['field'] = 'flexformData.settings.image';
$arguments106['table'] = 'tt_content';
$arguments106['record'] = NULL;
$arguments106['uid'] = NULL;
$arguments106['as'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper108->setArguments($arguments106);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
return $viewHelper108->initializeArgumentsAndRender();
};
return FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper::renderStatic($arguments104, isset($arguments104['haystack']) ? function() use ($arguments104) { return $arguments104['haystack']; } : $renderChildrenClosure105, $renderingContext);
};

$output101 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments102, isset($arguments102['value']) ? function() use ($arguments102) { return $arguments102['value']; } : $renderChildrenClosure103, $renderingContext);

$output101 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments109 = array();
$arguments109['title'] = NULL;
$arguments109['maxDepth'] = 8;
$arguments109['plainText'] = false;
$arguments109['ansiColors'] = false;
$arguments109['inline'] = false;
$arguments109['blacklistedClassNames'] = NULL;
$arguments109['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = $currentVariableContainer->getOrNull('image');
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());
return (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output101 .= '
							<div class="blog">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments114['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments114['class'] = 'img-responsive';
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['width'] = NULL;
$arguments114['height'] = NULL;
$arguments114['minWidth'] = NULL;
$arguments114['minHeight'] = NULL;
$arguments114['maxWidth'] = NULL;
$arguments114['maxHeight'] = NULL;
$arguments114['image'] = NULL;
$arguments114['crop'] = NULL;
$arguments114['absolute'] = false;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['alt'] = NULL;
$arguments114['ismap'] = NULL;
$arguments114['longdesc'] = NULL;
$arguments114['usemap'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output101 .= $viewHelper116->initializeArgumentsAndRender();

$output101 .= '<br/>
								<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() {return NULL;};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output101 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));

$output101 .= '</h2>
								<p class="collapsed">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output101 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output101 .= '
								</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments123 = array();
$arguments123['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments123['target'] = '';
$arguments123['class'] = '';
$arguments123['title'] = '';
$arguments123['additionalParams'] = '';
$arguments123['additionalAttributes'] = array (
);
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output101 .= '
							</div>
						';
return $output101;
};

$output90 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output90 .= '
					';
return $output90;
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
				';
return $output87;
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
			';
return $output84;
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper125->setArguments($arguments82);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output81 .= $viewHelper125->initializeArgumentsAndRender();

$output81 .= '
  	</div>
	';
return $output81;
};

$output58 .= '';

$output58 .= '
</div>
';


return $output58;
}


}
#1517330409    43151     