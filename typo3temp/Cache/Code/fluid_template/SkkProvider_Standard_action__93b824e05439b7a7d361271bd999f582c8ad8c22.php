<?php
class FluidCache_SkkProvider_Standard_action__93b824e05439b7a7d361271bd999f582c8ad8c22 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	            <div class="blog">
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments34 = array();
// Rendering Boolean node
$arguments34['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments34['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments34['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments34['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments34['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.crop', $renderingContext);
$arguments34['class'] = 'img-responsive';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['width'] = NULL;
$arguments34['height'] = NULL;
$arguments34['minWidth'] = NULL;
$arguments34['minHeight'] = NULL;
$arguments34['maxWidth'] = NULL;
$arguments34['maxHeight'] = NULL;
$arguments34['image'] = NULL;
$arguments34['absolute'] = false;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['ismap'] = NULL;
$arguments34['longdesc'] = NULL;
$arguments34['usemap'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output33 .= $viewHelper36->initializeArgumentsAndRender();

$output33 .= '<br/>
	              <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output33 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output33 .= '</h2>
	              <p class="collapsed">
	                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output33 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output33 .= '
	              </p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments43 = array();
$arguments43['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'pid', $renderingContext);
$arguments43['target'] = '';
$arguments43['class'] = '';
$arguments43['title'] = '';
$arguments43['additionalParams'] = '';
$arguments43['additionalAttributes'] = array (
);
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

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
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper45->setArguments($arguments14);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output13 .= $viewHelper45->initializeArgumentsAndRender();

$output13 .= '

    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments46 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = $currentVariableContainer->getOrNull('articles');
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());
$arguments46['content'] = (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode']));
$arguments46['glue'] = ',';
$arguments46['as'] = 'articles';
$renderChildrenClosure50 = function() {return NULL;};

$output13 .= FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper::renderStatic($arguments46, $renderChildrenClosure50, $renderingContext);

$output13 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments51 = array();
$arguments51['name'] = 'slides';
$arguments51['value'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments53 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = $currentVariableContainer->getOrNull('articles');
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());
$arguments53['contentUids'] = (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));
// Rendering Boolean node
$arguments53['render'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments53['column'] = NULL;
$arguments53['order'] = 'sorting';
$arguments53['sortDirection'] = 'ASC';
$arguments53['pageUid'] = 0;
$arguments53['sectionIndexOnly'] = false;
$arguments53['loadRegister'] = NULL;
$arguments53['hideUntranslated'] = false;
$arguments53['limit'] = NULL;
$arguments53['slide'] = 0;
$arguments53['slideCollect'] = 0;
$arguments53['slideCollectReverse'] = false;
$renderChildrenClosure57 = function() {return NULL;};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper58->setArguments($arguments53);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper58->initializeArgumentsAndRender();
};

$output13 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments51, isset($arguments51['value']) ? function() use ($arguments51) { return $arguments51['value']; } : $renderChildrenClosure52, $renderingContext);

$output13 .= '
    <div class="blog-container" id="blog-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments59 = array();
$arguments59['each'] = $currentVariableContainer->getOrNull('slides');
$arguments59['as'] = 'element';
$arguments59['key'] = '';
$arguments59['reverse'] = false;
$arguments59['iteration'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

    ';
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

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

$output61 = '';

$output61 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments62 = array();
$arguments62['name'] = 'Content';
$renderChildrenClosure63 = function() {return NULL;};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output61 .= $viewHelper64->initializeArgumentsAndRender();

$output61 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments65 = array();
$arguments65['name'] = 'Configuration';
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments68 = array();
$arguments68['id'] = 'bloggroup';
// Rendering Array
$array69 = array();
$array69['group'] = 'Mannschaften';
$arguments68['options'] = $array69;
$arguments68['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments68['label'] = NULL;
$arguments68['description'] = NULL;
$arguments68['enabled'] = true;
$arguments68['compact'] = false;
$arguments68['variables'] = array (
);
$arguments68['extensionName'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments72 = array();
$arguments72['name'] = 'articles';
$arguments72['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments72['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments72['size'] = '6';
$arguments72['condition'] = 'AND doktype = \'254\' ';
$arguments72['table'] = 'pages';
$arguments72['minItems'] = '1';
$arguments72['maxItems'] = '1';
$arguments72['default'] = NULL;
$arguments72['required'] = false;
$arguments72['exclude'] = false;
$arguments72['transform'] = NULL;
$arguments72['enabled'] = true;
$arguments72['requestUpdate'] = false;
$arguments72['displayCond'] = NULL;
$arguments72['inherit'] = true;
$arguments72['inheritEmpty'] = true;
$arguments72['clear'] = false;
$arguments72['variables'] = array (
);
$arguments72['extensionName'] = NULL;
$arguments72['validate'] = 'trim';
$arguments72['itemListStyle'] = NULL;
$arguments72['selectedListStyle'] = NULL;
$arguments72['items'] = NULL;
$arguments72['emptyOption'] = false;
$arguments72['translateCsvItems'] = NULL;
$arguments72['itemsProcFunc'] = NULL;
$arguments72['mm'] = NULL;
$arguments72['foreignField'] = '';
$arguments72['foreignLabel'] = '';
$arguments72['foreignSelector'] = NULL;
$arguments72['foreignSortby'] = '';
$arguments72['foreignDefaultSortby'] = '';
$arguments72['foreignTableField'] = '';
$arguments72['foreignUnique'] = NULL;
$arguments72['symmetricField'] = '';
$arguments72['symmetricLabel'] = '';
$arguments72['symmetricSortby'] = '';
$arguments72['localizationMode'] = '';
$arguments72['localizeChildrenAtParentLocalization'] = false;
$arguments72['disableMovingChildrenWithParent'] = false;
$arguments72['showThumbs'] = true;
$arguments72['matchFields'] = array (
);
$arguments72['oppositeField'] = '';
$renderChildrenClosure73 = function() {return NULL;};

$output71 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
		';
return $output71;
};

$output67 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments68, $renderChildrenClosure70, $renderingContext);

$output67 .= '
	';
return $output67;
};

$output61 .= '';

$output61 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments74 = array();
$arguments74['name'] = 'Preview';
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments77 = array();
$arguments77['title'] = NULL;
$arguments77['maxDepth'] = 8;
$arguments77['plainText'] = false;
$arguments77['ansiColors'] = false;
$arguments77['inline'] = false;
$arguments77['blacklistedClassNames'] = NULL;
$arguments77['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = $currentVariableContainer->getOrNull('articles');
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());
return (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
	';
return $output76;
};

$output61 .= '';

$output61 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments82 = array();
$arguments82['name'] = 'Main';
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments85 = array();
$arguments85['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['forceClosingTag'] = false;
$arguments85['hideIfEmpty'] = false;
$arguments85['contenteditable'] = NULL;
$arguments85['contextmenu'] = NULL;
$arguments85['draggable'] = NULL;
$arguments85['dropzone'] = NULL;
$arguments85['translate'] = NULL;
$arguments85['spellcheck'] = NULL;
$arguments85['hidden'] = NULL;
$arguments85['showAccessProtected'] = false;
$arguments85['classAccessProtected'] = 'protected';
$arguments85['classAccessGranted'] = 'access-granted';
$arguments85['useShortcutUid'] = NULL;
$arguments85['useShortcutTarget'] = NULL;
$arguments85['useShortcutData'] = false;
$arguments85['tagName'] = 'ul';
$arguments85['tagNameChildren'] = 'li';
$arguments85['entryLevel'] = 0;
$arguments85['levels'] = 1;
$arguments85['expandAll'] = false;
$arguments85['classFirst'] = '';
$arguments85['classLast'] = '';
$arguments85['classActive'] = 'active';
$arguments85['classCurrent'] = 'current';
$arguments85['classHasSubpages'] = 'sub';
$arguments85['substElementUid'] = false;
$arguments85['showHiddenInMenu'] = false;
$arguments85['showCurrent'] = true;
$arguments85['linkCurrent'] = true;
$arguments85['linkActive'] = true;
$arguments85['titleFields'] = 'nav_title,title';
$arguments85['includeAnchorTitle'] = true;
$arguments85['includeSpacers'] = false;
$arguments85['deferred'] = false;
$arguments85['as'] = 'menu';
$arguments85['rootLineAs'] = 'rootLine';
$arguments85['excludePages'] = '';
$arguments85['forceAbsoluteUrl'] = false;
$arguments85['doktypes'] = '';
$arguments85['divider'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments88 = array();
$arguments88['each'] = $currentVariableContainer->getOrNull('menu');
$arguments88['as'] = 'item';
// Rendering Boolean node
$arguments88['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments88['iteration'] = 'iterator';
$arguments88['key'] = '';
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments91 = array();
// Rendering Boolean node
$arguments91['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments94 = array();
$arguments94['name'] = 'content';
$arguments94['value'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments96 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());
$arguments96['pageUid'] = (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));
$arguments96['column'] = '0';
$arguments96['order'] = 'sorting';
$arguments96['sortDirection'] = 'ASC';
$arguments96['contentUids'] = NULL;
$arguments96['sectionIndexOnly'] = false;
$arguments96['loadRegister'] = NULL;
$arguments96['render'] = false;
$arguments96['hideUntranslated'] = false;
$arguments96['limit'] = NULL;
$arguments96['slide'] = 0;
$arguments96['slideCollect'] = 0;
$arguments96['slideCollectReverse'] = false;
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper101->setArguments($arguments96);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper101->initializeArgumentsAndRender();
};

$output93 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments94, isset($arguments94['value']) ? function() use ($arguments94) { return $arguments94['value']; } : $renderChildrenClosure95, $renderingContext);

$output93 .= '
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments102 = array();
$arguments102['table'] = 'tt_content';
$arguments102['field'] = 'pi_flexform';
$arguments102['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments102['as'] = 'flexformData';
$arguments102['record'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
	            <div class="blog">
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments105 = array();
// Rendering Boolean node
$arguments105['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments105['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments105['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments105['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments105['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.crop', $renderingContext);
$arguments105['class'] = 'img-responsive';
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['width'] = NULL;
$arguments105['height'] = NULL;
$arguments105['minWidth'] = NULL;
$arguments105['minHeight'] = NULL;
$arguments105['maxWidth'] = NULL;
$arguments105['maxHeight'] = NULL;
$arguments105['image'] = NULL;
$arguments105['absolute'] = false;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['ismap'] = NULL;
$arguments105['longdesc'] = NULL;
$arguments105['usemap'] = NULL;
$renderChildrenClosure106 = function() {return NULL;};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output104 .= $viewHelper107->initializeArgumentsAndRender();

$output104 .= '<br/>
	              <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() {return NULL;};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output104 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output104 .= '</h2>
	              <p class="collapsed">
	                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output104 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output104 .= '
	              </p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments114 = array();
$arguments114['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'pid', $renderingContext);
$arguments114['target'] = '';
$arguments114['class'] = '';
$arguments114['title'] = '';
$arguments114['additionalParams'] = '';
$arguments114['additionalAttributes'] = array (
);
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output104 .= '
	            </div>
	      ';
return $output104;
};

$output93 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output93 .= '
				';
return $output93;
};

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '

			';
return $output90;
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
		';
return $output87;
};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper116->setArguments($arguments85);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output84 .= $viewHelper116->initializeArgumentsAndRender();

$output84 .= '

    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments117 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = $currentVariableContainer->getOrNull('articles');
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = NULL;
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() {return NULL;};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());
$arguments117['content'] = (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments118['encoding'] !== NULL ? $arguments118['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments118['doubleEncode']));
$arguments117['glue'] = ',';
$arguments117['as'] = 'articles';
$renderChildrenClosure121 = function() {return NULL;};

$output84 .= FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper::renderStatic($arguments117, $renderChildrenClosure121, $renderingContext);

$output84 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments122 = array();
$arguments122['name'] = 'slides';
$arguments122['value'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments124 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = $currentVariableContainer->getOrNull('articles');
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() {return NULL;};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());
$arguments124['contentUids'] = (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));
// Rendering Boolean node
$arguments124['render'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments124['column'] = NULL;
$arguments124['order'] = 'sorting';
$arguments124['sortDirection'] = 'ASC';
$arguments124['pageUid'] = 0;
$arguments124['sectionIndexOnly'] = false;
$arguments124['loadRegister'] = NULL;
$arguments124['hideUntranslated'] = false;
$arguments124['limit'] = NULL;
$arguments124['slide'] = 0;
$arguments124['slideCollect'] = 0;
$arguments124['slideCollectReverse'] = false;
$renderChildrenClosure128 = function() {return NULL;};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper129->setArguments($arguments124);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper129->initializeArgumentsAndRender();
};

$output84 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments122, isset($arguments122['value']) ? function() use ($arguments122) { return $arguments122['value']; } : $renderChildrenClosure123, $renderingContext);

$output84 .= '
    <div class="blog-container" id="blog-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments130 = array();
$arguments130['each'] = $currentVariableContainer->getOrNull('slides');
$arguments130['as'] = 'element';
$arguments130['key'] = '';
$arguments130['reverse'] = false;
$arguments130['iteration'] = NULL;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

    ';
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output84 .= '
    </div>
	';
return $output84;
};

$output61 .= '';

$output61 .= '
</div>
';


return $output61;
}


}
#1517329465    46030     