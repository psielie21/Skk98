<?php
class FluidCache_SkkProvider_Content_action_mannschaft_b5583636ac801708979682c72d4983f2f86260d1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output26 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

$output26 .= '</h2>
    </section>

    <section id="hero-image">
      <div class="img-holder">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments27 = array();
$arguments27['column'] = '0';
$arguments27['order'] = 'sorting';
$arguments27['sortDirection'] = 'ASC';
$arguments27['pageUid'] = 0;
$arguments27['contentUids'] = NULL;
$arguments27['sectionIndexOnly'] = false;
$arguments27['loadRegister'] = NULL;
$arguments27['render'] = true;
$arguments27['hideUntranslated'] = false;
$arguments27['limit'] = NULL;
$arguments27['slide'] = 0;
$arguments27['slideCollect'] = 0;
$arguments27['slideCollectReverse'] = false;
$arguments27['as'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output26 .= $viewHelper29->initializeArgumentsAndRender();

$output26 .= '
      </div>
			<div class="img-description"></div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments30 = array();
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
				';

$output32 .= '
					<f:for each="{v:content.get(col: 5)}" as"element">
						<div class="img-description">{element}</div>
					</f:for>
				';

$output32 .= '
			';
return $output32;
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
$arguments33 = array();
$arguments33['column'] = '20';
$arguments33['order'] = 'sorting';
$arguments33['sortDirection'] = 'ASC';
$arguments33['pageUid'] = 0;
$arguments33['contentUids'] = NULL;
$arguments33['sectionIndexOnly'] = false;
$arguments33['loadRegister'] = NULL;
$arguments33['render'] = true;
$arguments33['hideUntranslated'] = false;
$arguments33['limit'] = NULL;
$arguments33['slide'] = 0;
$arguments33['slideCollect'] = 0;
$arguments33['slideCollectReverse'] = false;
$arguments33['as'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output26 .= $viewHelper35->initializeArgumentsAndRender();

$output26 .= '


        </aside>
        <main class="text-container pull-left">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments36 = array();
$arguments36['column'] = '10';
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

$output39 = '';

$output39 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments40 = array();
$arguments40['name'] = 'Page';
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output39 .= $viewHelper42->initializeArgumentsAndRender();

$output39 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments43 = array();
$arguments43['name'] = 'Configuration';
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments46 = array();
$arguments46['id'] = 'mannschaft';
$arguments46['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_mannschaft.xlf';
$arguments46['label'] = NULL;
$arguments46['description'] = NULL;
$arguments46['enabled'] = true;
$arguments46['compact'] = false;
$arguments46['variables'] = array (
);
$arguments46['options'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output45 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments48 = array();
$arguments48['name'] = 'grid';
$arguments48['label'] = NULL;
$arguments48['variables'] = array (
);
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments51 = array();
$arguments51['name'] = 'row';
$arguments51['label'] = NULL;
$arguments51['variables'] = array (
);
$arguments51['extensionName'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments54 = array();
$arguments54['colPos'] = '0';
$arguments54['colspan'] = '3';
$arguments54['name'] = 'hero_image';
$arguments54['label'] = 'Mannschaftsfoto';
$arguments54['rowspan'] = 1;
$arguments54['style'] = NULL;
$arguments54['variables'] = array (
);
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output53 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
			';
return $output53;
};

$output50 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments56 = array();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments59 = array();
$arguments59['name'] = 'row';
$arguments59['label'] = NULL;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments62 = array();
$arguments62['colPos'] = '5';
$arguments62['colspan'] = '3';
$arguments62['name'] = 'pic_desc';
$arguments62['label'] = 'Bildunterschriften';
$arguments62['rowspan'] = 1;
$arguments62['style'] = NULL;
$arguments62['variables'] = array (
);
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};

$output61 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
				';
return $output61;
};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
			';
return $output58;
};

$output50 .= '';

$output50 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments64 = array();
$arguments64['name'] = 'row';
$arguments64['label'] = NULL;
$arguments64['variables'] = array (
);
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments67 = array();
$arguments67['colPos'] = '10';
$arguments67['colspan'] = '2';
$arguments67['name'] = 'blogs';
$arguments67['label'] = 'Berichte';
$arguments67['rowspan'] = 1;
$arguments67['style'] = NULL;
$arguments67['variables'] = array (
);
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output66 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments69 = array();
$arguments69['colPos'] = '20';
$arguments69['colspan'] = '1';
$arguments69['name'] = 'spielplan';
$arguments69['label'] = 'Spielplan';
$arguments69['rowspan'] = 1;
$arguments69['style'] = NULL;
$arguments69['variables'] = array (
);
$arguments69['extensionName'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};

$output66 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output66 .= '
			';
return $output66;
};

$output50 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output50 .= '
		';
return $output50;
};

$output45 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output45 .= '
	';
return $output45;
};

$output39 .= '';

$output39 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments71 = array();
$arguments71['name'] = 'Main';
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
    <section id="title-bar">
      <h2>';

$output73 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

$output73 .= '</h2>
    </section>

    <section id="hero-image">
      <div class="img-holder">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments74 = array();
$arguments74['column'] = '0';
$arguments74['order'] = 'sorting';
$arguments74['sortDirection'] = 'ASC';
$arguments74['pageUid'] = 0;
$arguments74['contentUids'] = NULL;
$arguments74['sectionIndexOnly'] = false;
$arguments74['loadRegister'] = NULL;
$arguments74['render'] = true;
$arguments74['hideUntranslated'] = false;
$arguments74['limit'] = NULL;
$arguments74['slide'] = 0;
$arguments74['slideCollect'] = 0;
$arguments74['slideCollectReverse'] = false;
$arguments74['as'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output73 .= $viewHelper76->initializeArgumentsAndRender();

$output73 .= '
      </div>
			<div class="img-description"></div>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments77 = array();
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
				';

$output79 .= '
					<f:for each="{v:content.get(col: 5)}" as"element">
						<div class="img-description">{element}</div>
					</f:for>
				';

$output79 .= '
			';
return $output79;
};

$output73 .= '';

$output73 .= '
    </section>

    <section id="content">
      <div class="container">
        <h1>Damen 1</h1>
        <aside class="text-container pull-right">

	        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments80 = array();
$arguments80['column'] = '20';
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

$output73 .= $viewHelper82->initializeArgumentsAndRender();

$output73 .= '


        </aside>
        <main class="text-container pull-left">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments83 = array();
$arguments83['column'] = '10';
$arguments83['order'] = 'sorting';
$arguments83['sortDirection'] = 'ASC';
$arguments83['pageUid'] = 0;
$arguments83['contentUids'] = NULL;
$arguments83['sectionIndexOnly'] = false;
$arguments83['loadRegister'] = NULL;
$arguments83['render'] = true;
$arguments83['hideUntranslated'] = false;
$arguments83['limit'] = NULL;
$arguments83['slide'] = 0;
$arguments83['slideCollect'] = 0;
$arguments83['slideCollectReverse'] = false;
$arguments83['as'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output73 .= $viewHelper85->initializeArgumentsAndRender();

$output73 .= '
        </main>
      </div>
    </section>

	';
return $output73;
};

$output39 .= '';

$output39 .= '
</div>
';


return $output39;
}


}
#1517747652    23800     