<?php
class FluidCache_SkkProvider_Page_partial_Header_7a45d10d9a432df596cc325a2d763d7e54903709 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<header>
  <div class="logo">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments1 = array();
$arguments1['pageUid'] = '1';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['additionalParams'] = array (
);
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments3 = array();
$arguments3['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_shortened.jpg';
$arguments3['alt'] = 'Skk 98 Poing Kegel Logo';
$arguments3['class'] = 'img-responsive';
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['width'] = NULL;
$arguments3['height'] = NULL;
$arguments3['minWidth'] = NULL;
$arguments3['minHeight'] = NULL;
$arguments3['maxWidth'] = NULL;
$arguments3['maxHeight'] = NULL;
$arguments3['treatIdAsReference'] = false;
$arguments3['image'] = NULL;
$arguments3['crop'] = NULL;
$arguments3['absolute'] = false;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['ismap'] = NULL;
$arguments3['longdesc'] = NULL;
$arguments3['usemap'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
return $viewHelper5->initializeArgumentsAndRender();
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper6->setArguments($arguments1);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
  </div>

  <div class="desktop-info">
    <ul>
      <li><h4>Trainigszeiten</h4>Di u. Do 15.-22.00 Uhr<br> Freitag 15-18.00 Uhr</li>
      <li><h4>Adresse</h4>Sportpark Poing - 85586 Poing, Plieningerstr. 24</li>
      <li><h4>Kontakt</h4>E-Mail: spielbericht@skk98.de </li>
    </ul>
  </div>

  <nav role="navigation" >
    <a href="javascript:void(0);" class="icon" id="bar" onclick="toggleMobile()">
      <div class="bar1"></div><div class="bar2"></div><div class="bar3"></div>
    </a>
    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['forceClosingTag'] = false;
$arguments7['hideIfEmpty'] = false;
$arguments7['contenteditable'] = NULL;
$arguments7['contextmenu'] = NULL;
$arguments7['draggable'] = NULL;
$arguments7['dropzone'] = NULL;
$arguments7['translate'] = NULL;
$arguments7['spellcheck'] = NULL;
$arguments7['hidden'] = NULL;
$arguments7['showAccessProtected'] = false;
$arguments7['classAccessProtected'] = 'protected';
$arguments7['classAccessGranted'] = 'access-granted';
$arguments7['useShortcutUid'] = NULL;
$arguments7['useShortcutTarget'] = NULL;
$arguments7['useShortcutData'] = false;
$arguments7['tagName'] = 'ul';
$arguments7['tagNameChildren'] = 'li';
$arguments7['entryLevel'] = 0;
$arguments7['levels'] = 1;
$arguments7['expandAll'] = false;
$arguments7['classFirst'] = '';
$arguments7['classLast'] = '';
$arguments7['classActive'] = 'active';
$arguments7['classCurrent'] = 'current';
$arguments7['classHasSubpages'] = 'sub';
$arguments7['substElementUid'] = false;
$arguments7['showHiddenInMenu'] = false;
$arguments7['showCurrent'] = true;
$arguments7['linkCurrent'] = true;
$arguments7['linkActive'] = true;
$arguments7['titleFields'] = 'nav_title,title';
$arguments7['includeAnchorTitle'] = true;
$arguments7['includeSpacers'] = false;
$arguments7['deferred'] = false;
$arguments7['as'] = 'menu';
$arguments7['rootLineAs'] = 'rootLine';
$arguments7['excludePages'] = '';
$arguments7['forceAbsoluteUrl'] = false;
$arguments7['doktypes'] = '';
$arguments7['divider'] = NULL;
$arguments7['pageUid'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
      <ul class="topnav" id="myTopnav">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
$arguments10['each'] = $currentVariableContainer->getOrNull('menu');
$arguments10['as'] = 'item';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'hasSubPages', $renderingContext));
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
              <li>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments19 = array();
$arguments19['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments19['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments19['onclick'] = 'event.preventDefault();';
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['additionalParams'] = array (
);
$arguments19['pageType'] = 0;
$arguments19['noCache'] = false;
$arguments19['noCacheHash'] = false;
$arguments19['section'] = '';
$arguments19['linkAccessRestrictedPages'] = false;
$arguments19['absolute'] = false;
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['target'] = NULL;
$arguments19['rel'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = NULL;
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() {return NULL;};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output21 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments22['encoding'] !== NULL ? $arguments22['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments22['doubleEncode']));

$output21 .= '</span>';
return $output21;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper25->setArguments($arguments19);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output18 .= $viewHelper25->initializeArgumentsAndRender();

$output18 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments26 = array();
$arguments26['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['forceClosingTag'] = false;
$arguments26['hideIfEmpty'] = false;
$arguments26['contenteditable'] = NULL;
$arguments26['contextmenu'] = NULL;
$arguments26['draggable'] = NULL;
$arguments26['dropzone'] = NULL;
$arguments26['translate'] = NULL;
$arguments26['spellcheck'] = NULL;
$arguments26['hidden'] = NULL;
$arguments26['showAccessProtected'] = false;
$arguments26['classAccessProtected'] = 'protected';
$arguments26['classAccessGranted'] = 'access-granted';
$arguments26['useShortcutUid'] = NULL;
$arguments26['useShortcutTarget'] = NULL;
$arguments26['useShortcutData'] = false;
$arguments26['tagName'] = 'ul';
$arguments26['tagNameChildren'] = 'li';
$arguments26['entryLevel'] = 0;
$arguments26['levels'] = 1;
$arguments26['expandAll'] = false;
$arguments26['classFirst'] = '';
$arguments26['classLast'] = '';
$arguments26['classActive'] = 'active';
$arguments26['classCurrent'] = 'current';
$arguments26['classHasSubpages'] = 'sub';
$arguments26['substElementUid'] = false;
$arguments26['showHiddenInMenu'] = false;
$arguments26['showCurrent'] = true;
$arguments26['linkCurrent'] = true;
$arguments26['linkActive'] = true;
$arguments26['titleFields'] = 'nav_title,title';
$arguments26['includeAnchorTitle'] = true;
$arguments26['includeSpacers'] = false;
$arguments26['deferred'] = false;
$arguments26['as'] = 'menu';
$arguments26['rootLineAs'] = 'rootLine';
$arguments26['excludePages'] = '';
$arguments26['forceAbsoluteUrl'] = false;
$arguments26['doktypes'] = '';
$arguments26['divider'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
                    <ul class="dropdown">
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments29 = array();
$arguments29['each'] = $currentVariableContainer->getOrNull('menu');
$arguments29['as'] = 'subItem';
$arguments29['key'] = '';
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
                        <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments32 = array();
$arguments32['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'uid', $renderingContext);
$arguments32['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'linktext', $renderingContext);
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['additionalParams'] = array (
);
$arguments32['pageType'] = 0;
$arguments32['noCache'] = false;
$arguments32['noCacheHash'] = false;
$arguments32['section'] = '';
$arguments32['linkAccessRestrictedPages'] = false;
$arguments32['absolute'] = false;
$arguments32['addQueryString'] = false;
$arguments32['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments32['addQueryStringMethod'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['target'] = NULL;
$arguments32['rel'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'linktext', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output34 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output34 .= '</span>';
return $output34;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper38->setArguments($arguments32);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output31 .= $viewHelper38->initializeArgumentsAndRender();

$output31 .= '</li>
                      ';
return $output31;
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                    </ul>
                  ';
return $output28;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper39->setArguments($arguments26);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output18 .= $viewHelper39->initializeArgumentsAndRender();

$output18 .= '
                </li>
              ';
return $output18;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments40 = array();
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
                  <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments43 = array();
$arguments43['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments43['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['additionalParams'] = array (
);
$arguments43['pageType'] = 0;
$arguments43['noCache'] = false;
$arguments43['noCacheHash'] = false;
$arguments43['section'] = '';
$arguments43['linkAccessRestrictedPages'] = false;
$arguments43['absolute'] = false;
$arguments43['addQueryString'] = false;
$arguments43['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['target'] = NULL;
$arguments43['rel'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = NULL;
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() {return NULL;};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output45 .= (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments46['encoding'] !== NULL ? $arguments46['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments46['doubleEncode']));

$output45 .= '</span>';
return $output45;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper49->setArguments($arguments43);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output42 .= $viewHelper49->initializeArgumentsAndRender();

$output42 .= '</li>
              ';
return $output42;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output15 .= '
          ';
return $output15;
};
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
              <li>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments51 = array();
$arguments51['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments51['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments51['onclick'] = 'event.preventDefault();';
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['additionalParams'] = array (
);
$arguments51['pageType'] = 0;
$arguments51['noCache'] = false;
$arguments51['noCacheHash'] = false;
$arguments51['section'] = '';
$arguments51['linkAccessRestrictedPages'] = false;
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['target'] = NULL;
$arguments51['rel'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output53 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output53 .= '</span>';
return $output53;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper57->setArguments($arguments51);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output50 .= $viewHelper57->initializeArgumentsAndRender();

$output50 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments58 = array();
$arguments58['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
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
                    <ul class="dropdown">
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments61 = array();
$arguments61['each'] = $currentVariableContainer->getOrNull('menu');
$arguments61['as'] = 'subItem';
$arguments61['key'] = '';
$arguments61['reverse'] = false;
$arguments61['iteration'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                        <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments64 = array();
$arguments64['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'uid', $renderingContext);
$arguments64['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'linktext', $renderingContext);
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['additionalParams'] = array (
);
$arguments64['pageType'] = 0;
$arguments64['noCache'] = false;
$arguments64['noCacheHash'] = false;
$arguments64['section'] = '';
$arguments64['linkAccessRestrictedPages'] = false;
$arguments64['absolute'] = false;
$arguments64['addQueryString'] = false;
$arguments64['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments64['addQueryStringMethod'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['target'] = NULL;
$arguments64['rel'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'linktext', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output66 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output66 .= '</span>';
return $output66;
};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper70->setArguments($arguments64);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output63 .= $viewHelper70->initializeArgumentsAndRender();

$output63 .= '</li>
                      ';
return $output63;
};

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                    </ul>
                  ';
return $output60;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper71->setArguments($arguments58);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output50 .= $viewHelper71->initializeArgumentsAndRender();

$output50 .= '
                </li>
              ';
return $output50;
};
$arguments13['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
                  <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments73 = array();
$arguments73['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments73['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['additionalParams'] = array (
);
$arguments73['pageType'] = 0;
$arguments73['noCache'] = false;
$arguments73['noCacheHash'] = false;
$arguments73['section'] = '';
$arguments73['linkAccessRestrictedPages'] = false;
$arguments73['absolute'] = false;
$arguments73['addQueryString'] = false;
$arguments73['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments73['addQueryStringMethod'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['target'] = NULL;
$arguments73['rel'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'linktext', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output75 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output75 .= '</span>';
return $output75;
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper79->setArguments($arguments73);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output72 .= $viewHelper79->initializeArgumentsAndRender();

$output72 .= '</li>
              ';
return $output72;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
        ';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
      </ul>
    ';
return $output9;
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper80->setArguments($arguments7);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output0 .= $viewHelper80->initializeArgumentsAndRender();

$output0 .= '
    <a href="javascript:void(0);" onclick="activateInfo()"><i>i</i></a>
  </nav>
</header>
';


return $output0;
}


}
#1539020354    33991     