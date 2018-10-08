<?php
class FluidCache_SkkProvider_Content_action_blogGroup_4586cd2b2894da220d03e88643321240fdadc87c extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments14['pageUid'] = '13';
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
$arguments17['key'] = '';
$arguments17['iteration'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
				';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments20 = array();
$arguments20['name'] = 'content';
$arguments20['value'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments22 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());
$arguments22['pageUid'] = (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));
$arguments22['column'] = '0';
$arguments22['order'] = 'sorting';
$arguments22['sortDirection'] = 'ASC';
$arguments22['contentUids'] = NULL;
$arguments22['sectionIndexOnly'] = false;
$arguments22['loadRegister'] = NULL;
$arguments22['render'] = false;
$arguments22['hideUntranslated'] = false;
$arguments22['limit'] = NULL;
$arguments22['slide'] = 0;
$arguments22['slideCollect'] = 0;
$arguments22['slideCollectReverse'] = false;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper27->setArguments($arguments22);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper27->initializeArgumentsAndRender();
};

$output19 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments20, isset($arguments20['value']) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21, $renderingContext);

$output19 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments28 = array();
$arguments28['table'] = 'tt_content';
$arguments28['field'] = 'pi_flexform';
$arguments28['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments28['as'] = 'flexformData';
$arguments28['record'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments31 = array();
$arguments31['date'] = NULL;
$arguments31['format'] = '';
$arguments31['base'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments33 = array();
$arguments33['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments33['target'] = '';
$arguments33['class'] = '';
$arguments33['title'] = '';
$arguments33['additionalParams'] = '';
$arguments33['additionalAttributes'] = array (
);
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());
return (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '</td>
					</tr>
				';
return $output30;
};

$output19 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output19 .= '
			';
return $output19;
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
		';
return $output16;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper38->setArguments($arguments14);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output13 .= $viewHelper38->initializeArgumentsAndRender();

$output13 .= '

    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments39 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = $currentVariableContainer->getOrNull('articles');
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());
$arguments39['content'] = (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));
$arguments39['glue'] = ',';
$arguments39['as'] = 'articles';
$renderChildrenClosure43 = function() {return NULL;};

$output13 .= FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper::renderStatic($arguments39, $renderChildrenClosure43, $renderingContext);

$output13 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments44 = array();
$arguments44['name'] = 'slides';
$arguments44['value'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments46 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = $currentVariableContainer->getOrNull('articles');
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());
$arguments46['contentUids'] = (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode']));
// Rendering Boolean node
$arguments46['render'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments46['column'] = NULL;
$arguments46['order'] = 'sorting';
$arguments46['sortDirection'] = 'ASC';
$arguments46['pageUid'] = 0;
$arguments46['sectionIndexOnly'] = false;
$arguments46['loadRegister'] = NULL;
$arguments46['hideUntranslated'] = false;
$arguments46['limit'] = NULL;
$arguments46['slide'] = 0;
$arguments46['slideCollect'] = 0;
$arguments46['slideCollectReverse'] = false;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper51->setArguments($arguments46);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper51->initializeArgumentsAndRender();
};

$output13 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments44, isset($arguments44['value']) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45, $renderingContext);

$output13 .= '
    <div class="blog-container" id="blog-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments52 = array();
$arguments52['each'] = $currentVariableContainer->getOrNull('slides');
$arguments52['as'] = 'element';
$arguments52['key'] = '';
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments55 = array();
$arguments55['table'] = 'tt_content';
$arguments55['field'] = 'pi_flexform';
$arguments55['record'] = $currentVariableContainer->getOrNull('element');
$arguments55['as'] = 'flexformData';
$arguments55['uid'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
            <div class="blog">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments58 = array();
// Rendering Boolean node
$arguments58['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments58['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments58['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments58['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments58['class'] = 'img-responsive';
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['width'] = NULL;
$arguments58['height'] = NULL;
$arguments58['minWidth'] = NULL;
$arguments58['minHeight'] = NULL;
$arguments58['maxWidth'] = NULL;
$arguments58['maxHeight'] = NULL;
$arguments58['image'] = NULL;
$arguments58['crop'] = NULL;
$arguments58['absolute'] = false;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['ismap'] = NULL;
$arguments58['longdesc'] = NULL;
$arguments58['usemap'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output57 .= $viewHelper60->initializeArgumentsAndRender();

$output57 .= '<br/>
              <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());

$output57 .= (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));

$output57 .= '</h2>
              <p class="collapsed">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output57 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output57 .= '
              </p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments67 = array();
$arguments67['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('element'), 'pid', $renderingContext);
$arguments67['target'] = '';
$arguments67['class'] = '';
$arguments67['title'] = '';
$arguments67['additionalParams'] = '';
$arguments67['additionalAttributes'] = array (
);
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output57 .= '
            </div>
      ';
return $output57;
};

$output54 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
    ';
return $output54;
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

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

$output69 = '';

$output69 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments70 = array();
$arguments70['name'] = 'Content';
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output69 .= $viewHelper72->initializeArgumentsAndRender();

$output69 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments73 = array();
$arguments73['name'] = 'Configuration';
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments76 = array();
$arguments76['id'] = 'bloggroup';
// Rendering Array
$array77 = array();
$array77['group'] = 'Mannschaften';
$arguments76['options'] = $array77;
$arguments76['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments76['label'] = NULL;
$arguments76['description'] = NULL;
$arguments76['enabled'] = true;
$arguments76['compact'] = false;
$arguments76['variables'] = array (
);
$arguments76['extensionName'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments80 = array();
$arguments80['name'] = 'articles';
$arguments80['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments80['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments80['size'] = '6';
$arguments80['condition'] = 'AND doktype = \'254\' ';
$arguments80['table'] = 'pages';
$arguments80['minItems'] = '1';
$arguments80['maxItems'] = '1';
$arguments80['default'] = NULL;
$arguments80['required'] = false;
$arguments80['exclude'] = false;
$arguments80['transform'] = NULL;
$arguments80['enabled'] = true;
$arguments80['requestUpdate'] = false;
$arguments80['displayCond'] = NULL;
$arguments80['inherit'] = true;
$arguments80['inheritEmpty'] = true;
$arguments80['clear'] = false;
$arguments80['variables'] = array (
);
$arguments80['extensionName'] = NULL;
$arguments80['validate'] = 'trim';
$arguments80['itemListStyle'] = NULL;
$arguments80['selectedListStyle'] = NULL;
$arguments80['items'] = NULL;
$arguments80['emptyOption'] = false;
$arguments80['translateCsvItems'] = NULL;
$arguments80['itemsProcFunc'] = NULL;
$arguments80['mm'] = NULL;
$arguments80['foreignField'] = '';
$arguments80['foreignLabel'] = '';
$arguments80['foreignSelector'] = NULL;
$arguments80['foreignSortby'] = '';
$arguments80['foreignDefaultSortby'] = '';
$arguments80['foreignTableField'] = '';
$arguments80['foreignUnique'] = NULL;
$arguments80['symmetricField'] = '';
$arguments80['symmetricLabel'] = '';
$arguments80['symmetricSortby'] = '';
$arguments80['localizationMode'] = '';
$arguments80['localizeChildrenAtParentLocalization'] = false;
$arguments80['disableMovingChildrenWithParent'] = false;
$arguments80['showThumbs'] = true;
$arguments80['matchFields'] = array (
);
$arguments80['oppositeField'] = '';
$renderChildrenClosure81 = function() {return NULL;};

$output79 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
		';
return $output79;
};

$output75 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments76, $renderChildrenClosure78, $renderingContext);

$output75 .= '
	';
return $output75;
};

$output69 .= '';

$output69 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments82 = array();
$arguments82['name'] = 'Preview';
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments85 = array();
$arguments85['title'] = NULL;
$arguments85['maxDepth'] = 8;
$arguments85['plainText'] = false;
$arguments85['ansiColors'] = false;
$arguments85['inline'] = false;
$arguments85['blacklistedClassNames'] = NULL;
$arguments85['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = $currentVariableContainer->getOrNull('articles');
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());
return (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
	';
return $output84;
};

$output69 .= '';

$output69 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments90 = array();
$arguments90['name'] = 'Main';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments93 = array();
$arguments93['pageUid'] = '13';
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['forceClosingTag'] = false;
$arguments93['hideIfEmpty'] = false;
$arguments93['contenteditable'] = NULL;
$arguments93['contextmenu'] = NULL;
$arguments93['draggable'] = NULL;
$arguments93['dropzone'] = NULL;
$arguments93['translate'] = NULL;
$arguments93['spellcheck'] = NULL;
$arguments93['hidden'] = NULL;
$arguments93['showAccessProtected'] = false;
$arguments93['classAccessProtected'] = 'protected';
$arguments93['classAccessGranted'] = 'access-granted';
$arguments93['useShortcutUid'] = NULL;
$arguments93['useShortcutTarget'] = NULL;
$arguments93['useShortcutData'] = false;
$arguments93['tagName'] = 'ul';
$arguments93['tagNameChildren'] = 'li';
$arguments93['entryLevel'] = 0;
$arguments93['levels'] = 1;
$arguments93['expandAll'] = false;
$arguments93['classFirst'] = '';
$arguments93['classLast'] = '';
$arguments93['classActive'] = 'active';
$arguments93['classCurrent'] = 'current';
$arguments93['classHasSubpages'] = 'sub';
$arguments93['substElementUid'] = false;
$arguments93['showHiddenInMenu'] = false;
$arguments93['showCurrent'] = true;
$arguments93['linkCurrent'] = true;
$arguments93['linkActive'] = true;
$arguments93['titleFields'] = 'nav_title,title';
$arguments93['includeAnchorTitle'] = true;
$arguments93['includeSpacers'] = false;
$arguments93['deferred'] = false;
$arguments93['as'] = 'menu';
$arguments93['rootLineAs'] = 'rootLine';
$arguments93['excludePages'] = '';
$arguments93['forceAbsoluteUrl'] = false;
$arguments93['doktypes'] = '';
$arguments93['divider'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments96 = array();
$arguments96['each'] = $currentVariableContainer->getOrNull('menu');
$arguments96['as'] = 'item';
// Rendering Boolean node
$arguments96['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments96['key'] = '';
$arguments96['iteration'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
				';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments99 = array();
$arguments99['name'] = 'content';
$arguments99['value'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments101 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() {return NULL;};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());
$arguments101['pageUid'] = (!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode']));
$arguments101['column'] = '0';
$arguments101['order'] = 'sorting';
$arguments101['sortDirection'] = 'ASC';
$arguments101['contentUids'] = NULL;
$arguments101['sectionIndexOnly'] = false;
$arguments101['loadRegister'] = NULL;
$arguments101['render'] = false;
$arguments101['hideUntranslated'] = false;
$arguments101['limit'] = NULL;
$arguments101['slide'] = 0;
$arguments101['slideCollect'] = 0;
$arguments101['slideCollectReverse'] = false;
$renderChildrenClosure105 = function() {return NULL;};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper106->setArguments($arguments101);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure105);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper106->initializeArgumentsAndRender();
};

$output98 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments99, isset($arguments99['value']) ? function() use ($arguments99) { return $arguments99['value']; } : $renderChildrenClosure100, $renderingContext);

$output98 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments107 = array();
$arguments107['table'] = 'tt_content';
$arguments107['field'] = 'pi_flexform';
$arguments107['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments107['as'] = 'flexformData';
$arguments107['record'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments110 = array();
$arguments110['date'] = NULL;
$arguments110['format'] = '';
$arguments110['base'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments112 = array();
$arguments112['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments112['target'] = '';
$arguments112['class'] = '';
$arguments112['title'] = '';
$arguments112['additionalParams'] = '';
$arguments112['additionalAttributes'] = array (
);
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() {return NULL;};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());
return (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));
};

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output109 .= '</td>
					</tr>
				';
return $output109;
};

$output98 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output98 .= '
			';
return $output98;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
		';
return $output95;
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper117->setArguments($arguments93);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output92 .= $viewHelper117->initializeArgumentsAndRender();

$output92 .= '

    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments118 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments119 = array();
$arguments119['value'] = $currentVariableContainer->getOrNull('articles');
$arguments119['keepQuotes'] = false;
$arguments119['encoding'] = NULL;
$arguments119['doubleEncode'] = true;
$renderChildrenClosure120 = function() {return NULL;};
$value121 = ($arguments119['value'] !== NULL ? $arguments119['value'] : $renderChildrenClosure120());
$arguments118['content'] = (!is_string($value121) ? $value121 : htmlspecialchars($value121, ($arguments119['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments119['encoding'] !== NULL ? $arguments119['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments119['doubleEncode']));
$arguments118['glue'] = ',';
$arguments118['as'] = 'articles';
$renderChildrenClosure122 = function() {return NULL;};

$output92 .= FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper::renderStatic($arguments118, $renderChildrenClosure122, $renderingContext);

$output92 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments123 = array();
$arguments123['name'] = 'slides';
$arguments123['value'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments125 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments126 = array();
$arguments126['value'] = $currentVariableContainer->getOrNull('articles');
$arguments126['keepQuotes'] = false;
$arguments126['encoding'] = NULL;
$arguments126['doubleEncode'] = true;
$renderChildrenClosure127 = function() {return NULL;};
$value128 = ($arguments126['value'] !== NULL ? $arguments126['value'] : $renderChildrenClosure127());
$arguments125['contentUids'] = (!is_string($value128) ? $value128 : htmlspecialchars($value128, ($arguments126['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments126['encoding'] !== NULL ? $arguments126['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments126['doubleEncode']));
// Rendering Boolean node
$arguments125['render'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
$arguments125['column'] = NULL;
$arguments125['order'] = 'sorting';
$arguments125['sortDirection'] = 'ASC';
$arguments125['pageUid'] = 0;
$arguments125['sectionIndexOnly'] = false;
$arguments125['loadRegister'] = NULL;
$arguments125['hideUntranslated'] = false;
$arguments125['limit'] = NULL;
$arguments125['slide'] = 0;
$arguments125['slideCollect'] = 0;
$arguments125['slideCollectReverse'] = false;
$renderChildrenClosure129 = function() {return NULL;};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper130->setArguments($arguments125);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper130->initializeArgumentsAndRender();
};

$output92 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments123, isset($arguments123['value']) ? function() use ($arguments123) { return $arguments123['value']; } : $renderChildrenClosure124, $renderingContext);

$output92 .= '
    <div class="blog-container" id="blog-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments131 = array();
$arguments131['each'] = $currentVariableContainer->getOrNull('slides');
$arguments131['as'] = 'element';
$arguments131['key'] = '';
$arguments131['reverse'] = false;
$arguments131['iteration'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments134 = array();
$arguments134['table'] = 'tt_content';
$arguments134['field'] = 'pi_flexform';
$arguments134['record'] = $currentVariableContainer->getOrNull('element');
$arguments134['as'] = 'flexformData';
$arguments134['uid'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
            <div class="blog">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments137 = array();
// Rendering Boolean node
$arguments137['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments137['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments137['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments137['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments137['class'] = 'img-responsive';
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['width'] = NULL;
$arguments137['height'] = NULL;
$arguments137['minWidth'] = NULL;
$arguments137['minHeight'] = NULL;
$arguments137['maxWidth'] = NULL;
$arguments137['maxHeight'] = NULL;
$arguments137['image'] = NULL;
$arguments137['crop'] = NULL;
$arguments137['absolute'] = false;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['ismap'] = NULL;
$arguments137['longdesc'] = NULL;
$arguments137['usemap'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output136 .= $viewHelper139->initializeArgumentsAndRender();

$output136 .= '<br/>
              <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = NULL;
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() {return NULL;};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output136 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments140['encoding'] !== NULL ? $arguments140['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments140['doubleEncode']));

$output136 .= '</h2>
              <p class="collapsed">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() {return NULL;};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());

$output136 .= (!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode']));

$output136 .= '
              </p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments146 = array();
$arguments146['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('element'), 'pid', $renderingContext);
$arguments146['target'] = '';
$arguments146['class'] = '';
$arguments146['title'] = '';
$arguments146['additionalParams'] = '';
$arguments146['additionalAttributes'] = array (
);
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output136 .= '
            </div>
      ';
return $output136;
};

$output133 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
    ';
return $output133;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output92 .= '
    </div>
	';
return $output92;
};

$output69 .= '';

$output69 .= '
</div>
';


return $output69;
}


}
#1517329122    50261     