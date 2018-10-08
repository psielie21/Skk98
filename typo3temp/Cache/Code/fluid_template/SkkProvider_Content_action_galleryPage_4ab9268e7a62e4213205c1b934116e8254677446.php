<?php
class FluidCache_SkkProvider_Content_action_galleryPage_4ab9268e7a62e4213205c1b934116e8254677446 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'gallerypage';
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_gallerypage.xlf';
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
$arguments9['name'] = 'main';
$arguments9['label'] = 'Gallerie';
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
        <div class="gallery-navigation">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments12 = array();
$arguments12['name'] = 'categories';
$arguments12['value'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments14 = array();
$arguments14['column'] = '0';
$arguments14['order'] = 'sorting';
$arguments14['sortDirection'] = 'ASC';
$arguments14['pageUid'] = 0;
$arguments14['contentUids'] = NULL;
$arguments14['sectionIndexOnly'] = false;
$arguments14['loadRegister'] = NULL;
$arguments14['render'] = false;
$arguments14['hideUntranslated'] = false;
$arguments14['limit'] = NULL;
$arguments14['slide'] = 0;
$arguments14['slideCollect'] = 0;
$arguments14['slideCollectReverse'] = false;
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper16->initializeArgumentsAndRender();
};

$output11 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments12, isset($arguments12['value']) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13, $renderingContext);

$output11 .= '
          <ul class="sorting">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = $currentVariableContainer->getOrNull('categories');
$arguments17['as'] = 'category';
$arguments17['iteration'] = 'iterator';
$arguments17['key'] = '';
$arguments17['reverse'] = false;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 0);
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments23 = array();
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments26 = array();
$arguments26['table'] = 'tt_content';
$arguments26['field'] = 'pi_flexform';
$arguments26['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments26['as'] = 'data';
$arguments26['record'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
                    <li class="active" data-filter=".';

$output28 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output28 .= '">';

$output28 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output28 .= '</li>
                  ';
return $output28;
};

$output25 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                ';
return $output25;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments29 = array();
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments32 = array();
$arguments32['table'] = 'tt_content';
$arguments32['field'] = 'pi_flexform';
$arguments32['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments32['as'] = 'data';
$arguments32['record'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
                    <li data-filter=".';

$output34 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output34 .= '">';

$output34 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output34 .= '</li>
                  ';
return $output34;
};

$output31 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                ';
return $output31;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output22 .= '
              ';
return $output22;
};
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments36 = array();
$arguments36['table'] = 'tt_content';
$arguments36['field'] = 'pi_flexform';
$arguments36['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments36['as'] = 'data';
$arguments36['record'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                    <li class="active" data-filter=".';

$output38 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output38 .= '">';

$output38 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output38 .= '</li>
                  ';
return $output38;
};

$output35 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                ';
return $output35;
};
$arguments20['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments40 = array();
$arguments40['table'] = 'tt_content';
$arguments40['field'] = 'pi_flexform';
$arguments40['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments40['as'] = 'data';
$arguments40['record'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
                    <li data-filter=".';

$output42 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output42 .= '">';

$output42 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output42 .= '</li>
                  ';
return $output42;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                ';
return $output39;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '

            ';
return $output19;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output11 .= '
          </ul>
        </div>
        <div class="gallery">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments43 = array();
$arguments43['column'] = '0';
$arguments43['order'] = 'sorting';
$arguments43['sortDirection'] = 'ASC';
$arguments43['pageUid'] = 0;
$arguments43['contentUids'] = NULL;
$arguments43['sectionIndexOnly'] = false;
$arguments43['loadRegister'] = NULL;
$arguments43['render'] = true;
$arguments43['hideUntranslated'] = false;
$arguments43['limit'] = NULL;
$arguments43['slide'] = 0;
$arguments43['slideCollect'] = 0;
$arguments43['slideCollectReverse'] = false;
$arguments43['as'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output11 .= $viewHelper45->initializeArgumentsAndRender();

$output11 .= '
        </div>

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

$output46 = '';

$output46 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments47 = array();
$arguments47['name'] = 'Page';
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments50 = array();
$arguments50['name'] = 'Configuration';
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments53 = array();
$arguments53['id'] = 'gallerypage';
$arguments53['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_gallerypage.xlf';
$arguments53['label'] = NULL;
$arguments53['description'] = NULL;
$arguments53['enabled'] = true;
$arguments53['compact'] = false;
$arguments53['variables'] = array (
);
$arguments53['options'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output52 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments55 = array();
$arguments55['name'] = 'grid';
$arguments55['label'] = NULL;
$arguments55['variables'] = array (
);
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments58 = array();
$arguments58['name'] = 'row';
$arguments58['label'] = NULL;
$arguments58['variables'] = array (
);
$arguments58['extensionName'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments61 = array();
$arguments61['colPos'] = '0';
$arguments61['colspan'] = '3';
$arguments61['name'] = 'main';
$arguments61['label'] = 'Gallerie';
$arguments61['rowspan'] = 1;
$arguments61['style'] = NULL;
$arguments61['variables'] = array (
);
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
			';
return $output60;
};

$output57 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
		';
return $output57;
};

$output52 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output52 .= '
	';
return $output52;
};

$output46 .= '';

$output46 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments63 = array();
$arguments63['name'] = 'Main';
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
		<section id="title-bar">
			<h2>';

$output65 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

$output65 .= '</h2>
		</section>

		<section id="content">
			<div class="text-container">
        <div class="gallery-navigation">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments66 = array();
$arguments66['name'] = 'categories';
$arguments66['value'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments68 = array();
$arguments68['column'] = '0';
$arguments68['order'] = 'sorting';
$arguments68['sortDirection'] = 'ASC';
$arguments68['pageUid'] = 0;
$arguments68['contentUids'] = NULL;
$arguments68['sectionIndexOnly'] = false;
$arguments68['loadRegister'] = NULL;
$arguments68['render'] = false;
$arguments68['hideUntranslated'] = false;
$arguments68['limit'] = NULL;
$arguments68['slide'] = 0;
$arguments68['slideCollect'] = 0;
$arguments68['slideCollectReverse'] = false;
$renderChildrenClosure69 = function() {return NULL;};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper70->setArguments($arguments68);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper70->initializeArgumentsAndRender();
};

$output65 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments66, isset($arguments66['value']) ? function() use ($arguments66) { return $arguments66['value']; } : $renderChildrenClosure67, $renderingContext);

$output65 .= '
          <ul class="sorting">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments71 = array();
$arguments71['each'] = $currentVariableContainer->getOrNull('categories');
$arguments71['as'] = 'category';
$arguments71['iteration'] = 'iterator';
$arguments71['key'] = '';
$arguments71['reverse'] = false;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments74 = array();
// Rendering Boolean node
$arguments74['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 0);
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments77 = array();
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments80 = array();
$arguments80['table'] = 'tt_content';
$arguments80['field'] = 'pi_flexform';
$arguments80['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments80['as'] = 'data';
$arguments80['record'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
                    <li class="active" data-filter=".';

$output82 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output82 .= '">';

$output82 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output82 .= '</li>
                  ';
return $output82;
};

$output79 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                ';
return $output79;
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments83 = array();
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments86 = array();
$arguments86['table'] = 'tt_content';
$arguments86['field'] = 'pi_flexform';
$arguments86['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments86['as'] = 'data';
$arguments86['record'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
                    <li data-filter=".';

$output88 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output88 .= '">';

$output88 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output88 .= '</li>
                  ';
return $output88;
};

$output85 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
                ';
return $output85;
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output76 .= '
              ';
return $output76;
};
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments90 = array();
$arguments90['table'] = 'tt_content';
$arguments90['field'] = 'pi_flexform';
$arguments90['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments90['as'] = 'data';
$arguments90['record'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
                    <li class="active" data-filter=".';

$output92 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output92 .= '">';

$output92 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output92 .= '</li>
                  ';
return $output92;
};

$output89 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                ';
return $output89;
};
$arguments74['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments94 = array();
$arguments94['table'] = 'tt_content';
$arguments94['field'] = 'pi_flexform';
$arguments94['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments94['as'] = 'data';
$arguments94['record'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
                    <li data-filter=".';

$output96 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output96 .= '">';

$output96 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);

$output96 .= '</li>
                  ';
return $output96;
};

$output93 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
                ';
return $output93;
};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '

            ';
return $output73;
};

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output65 .= '
          </ul>
        </div>
        <div class="gallery">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments97 = array();
$arguments97['column'] = '0';
$arguments97['order'] = 'sorting';
$arguments97['sortDirection'] = 'ASC';
$arguments97['pageUid'] = 0;
$arguments97['contentUids'] = NULL;
$arguments97['sectionIndexOnly'] = false;
$arguments97['loadRegister'] = NULL;
$arguments97['render'] = true;
$arguments97['hideUntranslated'] = false;
$arguments97['limit'] = NULL;
$arguments97['slide'] = 0;
$arguments97['slideCollect'] = 0;
$arguments97['slideCollectReverse'] = false;
$arguments97['as'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper99->setArguments($arguments97);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output65 .= $viewHelper99->initializeArgumentsAndRender();

$output65 .= '
        </div>

			</div>
		</section>

	';
return $output65;
};

$output46 .= '';

$output46 .= '
</div>
';


return $output46;
}


}
#1539020717    30465     