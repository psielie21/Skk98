<?php
class FluidCache_SkkProvider_Standard_action__6693b65ffaa6690cb0c073555b0107bb66c8c0e2 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'spielplan';
// Rendering Array
$array2 = array();
$array2['group'] = 'Mannschaften';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_spielplan.xlf';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments5 = array();
$arguments5['name'] = 'settings.season';
$arguments5['label'] = 'Saison';
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
$arguments5['eval'] = 'trim';
$arguments5['size'] = 32;
$arguments5['maxCharacters'] = NULL;
$arguments5['minimum'] = NULL;
$arguments5['maximum'] = NULL;
$arguments5['placeholder'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments7 = array();
$arguments7['name'] = 'settings.ansprechpartner_name';
$arguments7['label'] = 'Name des Ansprechpartners';
$arguments7['default'] = NULL;
$arguments7['required'] = false;
$arguments7['exclude'] = false;
$arguments7['transform'] = NULL;
$arguments7['enabled'] = true;
$arguments7['requestUpdate'] = false;
$arguments7['displayCond'] = NULL;
$arguments7['inherit'] = true;
$arguments7['inheritEmpty'] = true;
$arguments7['clear'] = false;
$arguments7['variables'] = array (
);
$arguments7['extensionName'] = NULL;
$arguments7['eval'] = 'trim';
$arguments7['size'] = 32;
$arguments7['maxCharacters'] = NULL;
$arguments7['minimum'] = NULL;
$arguments7['maximum'] = NULL;
$arguments7['placeholder'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments9 = array();
$arguments9['name'] = 'settings.ansprechpartner_tel';
$arguments9['label'] = 'Tel. des Ansprechpartners';
$arguments9['default'] = NULL;
$arguments9['required'] = false;
$arguments9['exclude'] = false;
$arguments9['transform'] = NULL;
$arguments9['enabled'] = true;
$arguments9['requestUpdate'] = false;
$arguments9['displayCond'] = NULL;
$arguments9['inherit'] = true;
$arguments9['inheritEmpty'] = true;
$arguments9['clear'] = false;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['eval'] = 'trim';
$arguments9['size'] = 32;
$arguments9['maxCharacters'] = NULL;
$arguments9['minimum'] = NULL;
$arguments9['maximum'] = NULL;
$arguments9['placeholder'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments11 = array();
$arguments11['name'] = 'settings.date_section';
$arguments11['label'] = 'Spieltermine';
$arguments11['variables'] = array (
);
$arguments11['extensionName'] = NULL;
$arguments11['inherit'] = false;
$arguments11['inheritEmpty'] = false;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments14 = array();
$arguments14['name'] = 'termin';
$arguments14['label'] = 'Spiel';
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$arguments14['inherit'] = false;
$arguments14['inheritEmpty'] = false;
$arguments14['transform'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments17 = array();
$arguments17['name'] = 'date';
$arguments17['eval'] = 'date';
$arguments17['label'] = 'Datum';
$arguments17['default'] = NULL;
$arguments17['required'] = false;
$arguments17['exclude'] = false;
$arguments17['transform'] = NULL;
$arguments17['enabled'] = true;
$arguments17['requestUpdate'] = false;
$arguments17['displayCond'] = NULL;
$arguments17['inherit'] = true;
$arguments17['inheritEmpty'] = true;
$arguments17['clear'] = false;
$arguments17['variables'] = array (
);
$arguments17['extensionName'] = NULL;
$arguments17['size'] = 32;
$arguments17['maxCharacters'] = NULL;
$arguments17['minimum'] = NULL;
$arguments17['maximum'] = NULL;
$arguments17['placeholder'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output16 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments19 = array();
$arguments19['name'] = 'name';
$arguments19['label'] = 'Gegner';
$arguments19['default'] = NULL;
$arguments19['required'] = false;
$arguments19['exclude'] = false;
$arguments19['transform'] = NULL;
$arguments19['enabled'] = true;
$arguments19['requestUpdate'] = false;
$arguments19['displayCond'] = NULL;
$arguments19['inherit'] = true;
$arguments19['inheritEmpty'] = true;
$arguments19['clear'] = false;
$arguments19['variables'] = array (
);
$arguments19['extensionName'] = NULL;
$arguments19['eval'] = 'trim';
$arguments19['size'] = 32;
$arguments19['maxCharacters'] = NULL;
$arguments19['minimum'] = NULL;
$arguments19['maximum'] = NULL;
$arguments19['placeholder'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output16 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments21 = array();
$arguments21['name'] = 'ergebnis';
$arguments21['label'] = 'Ergebnis';
$arguments21['default'] = NULL;
$arguments21['required'] = false;
$arguments21['exclude'] = false;
$arguments21['transform'] = NULL;
$arguments21['enabled'] = true;
$arguments21['requestUpdate'] = false;
$arguments21['displayCond'] = NULL;
$arguments21['inherit'] = true;
$arguments21['inheritEmpty'] = true;
$arguments21['clear'] = false;
$arguments21['variables'] = array (
);
$arguments21['extensionName'] = NULL;
$arguments21['eval'] = 'trim';
$arguments21['size'] = 32;
$arguments21['maxCharacters'] = NULL;
$arguments21['minimum'] = NULL;
$arguments21['maximum'] = NULL;
$arguments21['placeholder'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output16 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper
$arguments23 = array();
$arguments23['name'] = 'home';
$arguments23['label'] = 'Heimspiel';
$arguments23['default'] = NULL;
$arguments23['required'] = false;
$arguments23['exclude'] = false;
$arguments23['transform'] = NULL;
$arguments23['enabled'] = true;
$arguments23['requestUpdate'] = false;
$arguments23['displayCond'] = NULL;
$arguments23['inherit'] = true;
$arguments23['inheritEmpty'] = true;
$arguments23['clear'] = false;
$arguments23['variables'] = array (
);
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output16 .= FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output16 .= '
        ';
return $output16;
};

$output13 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
      ';
return $output13;
};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

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

$output25 = '';

$output25 .= '
		<strong>Spielplan ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output25 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));

$output25 .= '</strong><br />
	';


return $output25;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output29 = '';

$output29 .= '
    <div class="table">
      <table>
        <caption><h3>Spielplan ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output29 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output29 .= '</h3></caption>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments33 = array();
$arguments33['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date_section', $renderingContext);
$arguments33['as'] = 'obj';
$arguments33['key'] = '';
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
          <tr ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.home', $renderingContext));
$arguments36['then'] = 'class="home"';
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments38 = array();
$arguments38['format'] = 'd.m.Y';
$arguments38['date'] = NULL;
$arguments38['base'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.date', $renderingContext);
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '</td>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.name', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output35 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output35 .= '</td>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.ergebnis', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output35 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output35 .= '</td>
          </tr>
        ';
return $output35;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '
        <tr>
          <td colspan="3">Alle roten Felder sind Heimspiele</td>
        </tr>
      </table>
    </div>

    <div class="ansprechpartner">
      <div class="table">
        <table>
          <caption><h3>Ansprechpartner</h3></caption>
          <tr>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'ansprechpartner_name', $renderingContext);
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = NULL;
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() {return NULL;};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output29 .= (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments46['encoding'] !== NULL ? $arguments46['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments46['doubleEncode']));

$output29 .= '</td>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'ansprechpartner_tel', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output29 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output29 .= '</td>
          </tr>
        </table>
      </div>
    </div>

	';


return $output29;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output52 = '';

$output52 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments53 = array();
$arguments53['name'] = 'Content';
$renderChildrenClosure54 = function() {return NULL;};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output52 .= $viewHelper55->initializeArgumentsAndRender();

$output52 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments56 = array();
$arguments56['name'] = 'Configuration';
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments59 = array();
$arguments59['id'] = 'spielplan';
// Rendering Array
$array60 = array();
$array60['group'] = 'Mannschaften';
$arguments59['options'] = $array60;
$arguments59['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_spielplan.xlf';
$arguments59['label'] = NULL;
$arguments59['description'] = NULL;
$arguments59['enabled'] = true;
$arguments59['compact'] = false;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments63 = array();
$arguments63['name'] = 'settings.season';
$arguments63['label'] = 'Saison';
$arguments63['default'] = NULL;
$arguments63['required'] = false;
$arguments63['exclude'] = false;
$arguments63['transform'] = NULL;
$arguments63['enabled'] = true;
$arguments63['requestUpdate'] = false;
$arguments63['displayCond'] = NULL;
$arguments63['inherit'] = true;
$arguments63['inheritEmpty'] = true;
$arguments63['clear'] = false;
$arguments63['variables'] = array (
);
$arguments63['extensionName'] = NULL;
$arguments63['eval'] = 'trim';
$arguments63['size'] = 32;
$arguments63['maxCharacters'] = NULL;
$arguments63['minimum'] = NULL;
$arguments63['maximum'] = NULL;
$arguments63['placeholder'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output62 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments65 = array();
$arguments65['name'] = 'settings.ansprechpartner_name';
$arguments65['label'] = 'Name des Ansprechpartners';
$arguments65['default'] = NULL;
$arguments65['required'] = false;
$arguments65['exclude'] = false;
$arguments65['transform'] = NULL;
$arguments65['enabled'] = true;
$arguments65['requestUpdate'] = false;
$arguments65['displayCond'] = NULL;
$arguments65['inherit'] = true;
$arguments65['inheritEmpty'] = true;
$arguments65['clear'] = false;
$arguments65['variables'] = array (
);
$arguments65['extensionName'] = NULL;
$arguments65['eval'] = 'trim';
$arguments65['size'] = 32;
$arguments65['maxCharacters'] = NULL;
$arguments65['minimum'] = NULL;
$arguments65['maximum'] = NULL;
$arguments65['placeholder'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output62 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output62 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments67 = array();
$arguments67['name'] = 'settings.ansprechpartner_tel';
$arguments67['label'] = 'Tel. des Ansprechpartners';
$arguments67['default'] = NULL;
$arguments67['required'] = false;
$arguments67['exclude'] = false;
$arguments67['transform'] = NULL;
$arguments67['enabled'] = true;
$arguments67['requestUpdate'] = false;
$arguments67['displayCond'] = NULL;
$arguments67['inherit'] = true;
$arguments67['inheritEmpty'] = true;
$arguments67['clear'] = false;
$arguments67['variables'] = array (
);
$arguments67['extensionName'] = NULL;
$arguments67['eval'] = 'trim';
$arguments67['size'] = 32;
$arguments67['maxCharacters'] = NULL;
$arguments67['minimum'] = NULL;
$arguments67['maximum'] = NULL;
$arguments67['placeholder'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output62 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output62 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments69 = array();
$arguments69['name'] = 'settings.date_section';
$arguments69['label'] = 'Spieltermine';
$arguments69['variables'] = array (
);
$arguments69['extensionName'] = NULL;
$arguments69['inherit'] = false;
$arguments69['inheritEmpty'] = false;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments72 = array();
$arguments72['name'] = 'termin';
$arguments72['label'] = 'Spiel';
$arguments72['variables'] = array (
);
$arguments72['extensionName'] = NULL;
$arguments72['inherit'] = false;
$arguments72['inheritEmpty'] = false;
$arguments72['transform'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments75 = array();
$arguments75['name'] = 'date';
$arguments75['eval'] = 'date';
$arguments75['label'] = 'Datum';
$arguments75['default'] = NULL;
$arguments75['required'] = false;
$arguments75['exclude'] = false;
$arguments75['transform'] = NULL;
$arguments75['enabled'] = true;
$arguments75['requestUpdate'] = false;
$arguments75['displayCond'] = NULL;
$arguments75['inherit'] = true;
$arguments75['inheritEmpty'] = true;
$arguments75['clear'] = false;
$arguments75['variables'] = array (
);
$arguments75['extensionName'] = NULL;
$arguments75['size'] = 32;
$arguments75['maxCharacters'] = NULL;
$arguments75['minimum'] = NULL;
$arguments75['maximum'] = NULL;
$arguments75['placeholder'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};

$output74 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments77 = array();
$arguments77['name'] = 'name';
$arguments77['label'] = 'Gegner';
$arguments77['default'] = NULL;
$arguments77['required'] = false;
$arguments77['exclude'] = false;
$arguments77['transform'] = NULL;
$arguments77['enabled'] = true;
$arguments77['requestUpdate'] = false;
$arguments77['displayCond'] = NULL;
$arguments77['inherit'] = true;
$arguments77['inheritEmpty'] = true;
$arguments77['clear'] = false;
$arguments77['variables'] = array (
);
$arguments77['extensionName'] = NULL;
$arguments77['eval'] = 'trim';
$arguments77['size'] = 32;
$arguments77['maxCharacters'] = NULL;
$arguments77['minimum'] = NULL;
$arguments77['maximum'] = NULL;
$arguments77['placeholder'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};

$output74 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output74 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments79 = array();
$arguments79['name'] = 'ergebnis';
$arguments79['label'] = 'Ergebnis';
$arguments79['default'] = NULL;
$arguments79['required'] = false;
$arguments79['exclude'] = false;
$arguments79['transform'] = NULL;
$arguments79['enabled'] = true;
$arguments79['requestUpdate'] = false;
$arguments79['displayCond'] = NULL;
$arguments79['inherit'] = true;
$arguments79['inheritEmpty'] = true;
$arguments79['clear'] = false;
$arguments79['variables'] = array (
);
$arguments79['extensionName'] = NULL;
$arguments79['eval'] = 'trim';
$arguments79['size'] = 32;
$arguments79['maxCharacters'] = NULL;
$arguments79['minimum'] = NULL;
$arguments79['maximum'] = NULL;
$arguments79['placeholder'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};

$output74 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output74 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper
$arguments81 = array();
$arguments81['name'] = 'home';
$arguments81['label'] = 'Heimspiel';
$arguments81['default'] = NULL;
$arguments81['required'] = false;
$arguments81['exclude'] = false;
$arguments81['transform'] = NULL;
$arguments81['enabled'] = true;
$arguments81['requestUpdate'] = false;
$arguments81['displayCond'] = NULL;
$arguments81['inherit'] = true;
$arguments81['inheritEmpty'] = true;
$arguments81['clear'] = false;
$arguments81['variables'] = array (
);
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};

$output74 .= FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output74 .= '
        ';
return $output74;
};

$output71 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
      ';
return $output71;
};

$output62 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output62 .= '
		';
return $output62;
};

$output58 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments59, $renderChildrenClosure61, $renderingContext);

$output58 .= '
	';
return $output58;
};

$output52 .= '';

$output52 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments83 = array();
$arguments83['name'] = 'Preview';
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
		<strong>Spielplan ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());

$output85 .= (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));

$output85 .= '</strong><br />
	';
return $output85;
};

$output52 .= '';

$output52 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments89 = array();
$arguments89['name'] = 'Main';
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
    <div class="table">
      <table>
        <caption><h3>Spielplan ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() {return NULL;};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output91 .= (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode']));

$output91 .= '</h3></caption>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments95 = array();
$arguments95['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date_section', $renderingContext);
$arguments95['as'] = 'obj';
$arguments95['key'] = '';
$arguments95['reverse'] = false;
$arguments95['iteration'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
          <tr ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$arguments98['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.home', $renderingContext));
$arguments98['then'] = 'class="home"';
$arguments98['else'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments100 = array();
$arguments100['format'] = 'd.m.Y';
$arguments100['date'] = NULL;
$arguments100['base'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.date', $renderingContext);
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output97 .= '</td>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.name', $renderingContext);
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() {return NULL;};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());

$output97 .= (!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode']));

$output97 .= '</td>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.ergebnis', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() {return NULL;};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output97 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output97 .= '</td>
          </tr>
        ';
return $output97;
};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output91 .= '
        <tr>
          <td colspan="3">Alle roten Felder sind Heimspiele</td>
        </tr>
      </table>
    </div>

    <div class="ansprechpartner">
      <div class="table">
        <table>
          <caption><h3>Ansprechpartner</h3></caption>
          <tr>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'ansprechpartner_name', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() {return NULL;};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output91 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output91 .= '</td>
            <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'ansprechpartner_tel', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output91 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output91 .= '</td>
          </tr>
        </table>
      </div>
    </div>

	';
return $output91;
};

$output52 .= '';

$output52 .= '
</div>
';


return $output52;
}


}
#1539020255    38307     