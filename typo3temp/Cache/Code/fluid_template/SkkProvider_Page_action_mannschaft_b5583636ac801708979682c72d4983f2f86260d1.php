<?php
class FluidCache_SkkProvider_Page_action_mannschaft_b5583636ac801708979682c72d4983f2f86260d1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'mannschaft';
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_mannschaft.xlf';
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
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
$arguments9['name'] = 'hero_image';
$arguments9['label'] = 'Mannschaftsfoto';
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments14 = array();
$arguments14['name'] = 'row';
$arguments14['label'] = NULL;
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments17 = array();
$arguments17['colPos'] = '5';
$arguments17['colspan'] = '3';
$arguments17['name'] = 'pic_desc';
$arguments17['label'] = 'Bildunterschriften';
$arguments17['rowspan'] = 1;
$arguments17['style'] = NULL;
$arguments17['variables'] = array (
);
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output16 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
				';
return $output16;
};

$output13 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
			';
return $output13;
};

$output5 .= '';

$output5 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments19 = array();
$arguments19['name'] = 'row';
$arguments19['label'] = NULL;
$arguments19['variables'] = array (
);
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments22 = array();
$arguments22['colPos'] = '10';
$arguments22['colspan'] = '2';
$arguments22['name'] = 'blogs';
$arguments22['label'] = 'Berichte';
$arguments22['rowspan'] = 1;
$arguments22['style'] = NULL;
$arguments22['variables'] = array (
);
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output21 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments24 = array();
$arguments24['colPos'] = '20';
$arguments24['colspan'] = '1';
$arguments24['name'] = 'spielplan';
$arguments24['label'] = 'Spielplan';
$arguments24['rowspan'] = 1;
$arguments24['style'] = NULL;
$arguments24['variables'] = array (
);
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output21 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output21 .= '
			';
return $output21;
};

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

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

$output26 = '';

$output26 .= '
    <section id="title-bar">
      <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output26 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output26 .= '</h2>
    </section>

    <section id="hero-image">
      <div class="img-holder">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments30 = array();
$arguments30['column'] = '0';
$arguments30['order'] = 'sorting';
$arguments30['sortDirection'] = 'ASC';
$arguments30['pageUid'] = 0;
$arguments30['contentUids'] = NULL;
$arguments30['sectionIndexOnly'] = false;
$arguments30['loadRegister'] = NULL;
$arguments30['render'] = true;
$arguments30['hideUntranslated'] = false;
$arguments30['limit'] = NULL;
$arguments30['slide'] = 0;
$arguments30['slideCollect'] = 0;
$arguments30['slideCollectReverse'] = false;
$arguments30['as'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output26 .= $viewHelper32->initializeArgumentsAndRender();

$output26 .= '
      </div>
			<div class="img-description"></div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments33 = array();
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
				';

$output35 .= '
					<f:for each="{v:content.get(col: 5)}" as"element">
						<div class="img-description">{element}</div>
					</f:for>
				';

$output35 .= '
			';
return $output35;
};

$output26 .= '';

$output26 .= '
    </section>

    <section id="content">
      <div class="container">
        <h1>Damen 1</h1>
        <aside class="text-container pull-right">

	        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments36 = array();
$arguments36['column'] = '20';
$arguments36['order'] = 'sorting';
$arguments36['sortDirection'] = 'ASC';
$arguments36['pageUid'] = 0;
$arguments36['contentUids'] = NULL;
$arguments36['sectionIndexOnly'] = false;
$arguments36['loadRegister'] = NULL;
$arguments36['render'] = true;
$arguments36['hideUntranslated'] = false;
$arguments36['limit'] = NULL;
$arguments36['slide'] = 0;
$arguments36['slideCollect'] = 0;
$arguments36['slideCollectReverse'] = false;
$arguments36['as'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output26 .= $viewHelper38->initializeArgumentsAndRender();

$output26 .= '


        </aside>
        <main class="text-container pull-left">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments39 = array();
$arguments39['column'] = '10';
$arguments39['order'] = 'sorting';
$arguments39['sortDirection'] = 'ASC';
$arguments39['pageUid'] = 0;
$arguments39['contentUids'] = NULL;
$arguments39['sectionIndexOnly'] = false;
$arguments39['loadRegister'] = NULL;
$arguments39['render'] = true;
$arguments39['hideUntranslated'] = false;
$arguments39['limit'] = NULL;
$arguments39['slide'] = 0;
$arguments39['slideCollect'] = 0;
$arguments39['slideCollectReverse'] = false;
$arguments39['as'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output26 .= $viewHelper41->initializeArgumentsAndRender();

$output26 .= '
        </main>
      </div>
    </section>

	';


return $output26;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output42 = '';

$output42 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments43 = array();
$arguments43['name'] = 'Page';
$renderChildrenClosure44 = function() {return NULL;};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output42 .= $viewHelper45->initializeArgumentsAndRender();

$output42 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments46 = array();
$arguments46['name'] = 'Configuration';
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments49 = array();
$arguments49['id'] = 'mannschaft';
$arguments49['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_mannschaft.xlf';
$arguments49['label'] = NULL;
$arguments49['description'] = NULL;
$arguments49['enabled'] = true;
$arguments49['compact'] = false;
$arguments49['variables'] = array (
);
$arguments49['options'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output48 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments51 = array();
$arguments51['name'] = 'grid';
$arguments51['label'] = NULL;
$arguments51['variables'] = array (
);
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments54 = array();
$arguments54['name'] = 'row';
$arguments54['label'] = NULL;
$arguments54['variables'] = array (
);
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments57 = array();
$arguments57['colPos'] = '0';
$arguments57['colspan'] = '3';
$arguments57['name'] = 'hero_image';
$arguments57['label'] = 'Mannschaftsfoto';
$arguments57['rowspan'] = 1;
$arguments57['style'] = NULL;
$arguments57['variables'] = array (
);
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};

$output56 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
			';
return $output56;
};

$output53 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments62 = array();
$arguments62['name'] = 'row';
$arguments62['label'] = NULL;
$arguments62['variables'] = array (
);
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments65 = array();
$arguments65['colPos'] = '5';
$arguments65['colspan'] = '3';
$arguments65['name'] = 'pic_desc';
$arguments65['label'] = 'Bildunterschriften';
$arguments65['rowspan'] = 1;
$arguments65['style'] = NULL;
$arguments65['variables'] = array (
);
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output64 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
				';
return $output64;
};

$output61 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
			';
return $output61;
};

$output53 .= '';

$output53 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments67 = array();
$arguments67['name'] = 'row';
$arguments67['label'] = NULL;
$arguments67['variables'] = array (
);
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments70 = array();
$arguments70['colPos'] = '10';
$arguments70['colspan'] = '2';
$arguments70['name'] = 'blogs';
$arguments70['label'] = 'Berichte';
$arguments70['rowspan'] = 1;
$arguments70['style'] = NULL;
$arguments70['variables'] = array (
);
$arguments70['extensionName'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};

$output69 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments72 = array();
$arguments72['colPos'] = '20';
$arguments72['colspan'] = '1';
$arguments72['name'] = 'spielplan';
$arguments72['label'] = 'Spielplan';
$arguments72['rowspan'] = 1;
$arguments72['style'] = NULL;
$arguments72['variables'] = array (
);
$arguments72['extensionName'] = NULL;
$renderChildrenClosure73 = function() {return NULL;};

$output69 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output69 .= '
			';
return $output69;
};

$output53 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output53 .= '
		';
return $output53;
};

$output48 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '
	';
return $output48;
};

$output42 .= '';

$output42 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments74 = array();
$arguments74['name'] = 'Main';
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
    <section id="title-bar">
      <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output76 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode']));

$output76 .= '</h2>
    </section>

    <section id="hero-image">
      <div class="img-holder">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments80 = array();
$arguments80['column'] = '0';
$arguments80['order'] = 'sorting';
$arguments80['sortDirection'] = 'ASC';
$arguments80['pageUid'] = 0;
$arguments80['contentUids'] = NULL;
$arguments80['sectionIndexOnly'] = false;
$arguments80['loadRegister'] = NULL;
$arguments80['render'] = true;
$arguments80['hideUntranslated'] = false;
$arguments80['limit'] = NULL;
$arguments80['slide'] = 0;
$arguments80['slideCollect'] = 0;
$arguments80['slideCollectReverse'] = false;
$arguments80['as'] = NULL;
$renderChildrenClosure81 = function() {return NULL;};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output76 .= $viewHelper82->initializeArgumentsAndRender();

$output76 .= '
      </div>
			<div class="img-description"></div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments83 = array();
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
				';

$output85 .= '
					<f:for each="{v:content.get(col: 5)}" as"element">
						<div class="img-description">{element}</div>
					</f:for>
				';

$output85 .= '
			';
return $output85;
};

$output76 .= '';

$output76 .= '
    </section>

    <section id="content">
      <div class="container">
        <h1>Damen 1</h1>
        <aside class="text-container pull-right">

	        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments86 = array();
$arguments86['column'] = '20';
$arguments86['order'] = 'sorting';
$arguments86['sortDirection'] = 'ASC';
$arguments86['pageUid'] = 0;
$arguments86['contentUids'] = NULL;
$arguments86['sectionIndexOnly'] = false;
$arguments86['loadRegister'] = NULL;
$arguments86['render'] = true;
$arguments86['hideUntranslated'] = false;
$arguments86['limit'] = NULL;
$arguments86['slide'] = 0;
$arguments86['slideCollect'] = 0;
$arguments86['slideCollectReverse'] = false;
$arguments86['as'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper88->setArguments($arguments86);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output76 .= $viewHelper88->initializeArgumentsAndRender();

$output76 .= '


        </aside>
        <main class="text-container pull-left">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments89 = array();
$arguments89['column'] = '10';
$arguments89['order'] = 'sorting';
$arguments89['sortDirection'] = 'ASC';
$arguments89['pageUid'] = 0;
$arguments89['contentUids'] = NULL;
$arguments89['sectionIndexOnly'] = false;
$arguments89['loadRegister'] = NULL;
$arguments89['render'] = true;
$arguments89['hideUntranslated'] = false;
$arguments89['limit'] = NULL;
$arguments89['slide'] = 0;
$arguments89['slideCollect'] = 0;
$arguments89['slideCollectReverse'] = false;
$arguments89['as'] = NULL;
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output76 .= $viewHelper91->initializeArgumentsAndRender();

$output76 .= '
        </main>
      </div>
    </section>

	';
return $output76;
};

$output42 .= '';

$output42 .= '
</div>
';


return $output42;
}


}
#1517747652    25181     