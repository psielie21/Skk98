<?php
class FluidCache_SkkProvider_Standard_action__28f01d28968c885969eb3b106dc577834c442666 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'calendar';
// Rendering Array
$array2 = array();
$array2['group'] = 'SKK Spezialanfertigung';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_calendar.xlf';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments5 = array();
$arguments5['name'] = 'settings.date_section';
$arguments5['label'] = 'Termine';
$arguments5['variables'] = array (
);
$arguments5['extensionName'] = NULL;
$arguments5['inherit'] = false;
$arguments5['inheritEmpty'] = false;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output7 = '';

$output7 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments8 = array();
$arguments8['name'] = 'termin';
$arguments8['label'] = 'Termin';
$arguments8['variables'] = array (
);
$arguments8['extensionName'] = NULL;
$arguments8['inherit'] = false;
$arguments8['inheritEmpty'] = false;
$arguments8['transform'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments11 = array();
$arguments11['name'] = 'date';
$arguments11['eval'] = 'date';
$arguments11['label'] = 'Datum';
$arguments11['default'] = NULL;
$arguments11['required'] = false;
$arguments11['exclude'] = false;
$arguments11['transform'] = NULL;
$arguments11['enabled'] = true;
$arguments11['requestUpdate'] = false;
$arguments11['displayCond'] = NULL;
$arguments11['inherit'] = true;
$arguments11['inheritEmpty'] = true;
$arguments11['clear'] = false;
$arguments11['variables'] = array (
);
$arguments11['extensionName'] = NULL;
$arguments11['size'] = 32;
$arguments11['maxCharacters'] = NULL;
$arguments11['minimum'] = NULL;
$arguments11['maximum'] = NULL;
$arguments11['placeholder'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output10 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments13 = array();
$arguments13['name'] = 'name';
$arguments13['label'] = 'Name';
$arguments13['default'] = NULL;
$arguments13['required'] = false;
$arguments13['exclude'] = false;
$arguments13['transform'] = NULL;
$arguments13['enabled'] = true;
$arguments13['requestUpdate'] = false;
$arguments13['displayCond'] = NULL;
$arguments13['inherit'] = true;
$arguments13['inheritEmpty'] = true;
$arguments13['clear'] = false;
$arguments13['variables'] = array (
);
$arguments13['extensionName'] = NULL;
$arguments13['eval'] = 'trim';
$arguments13['size'] = 32;
$arguments13['maxCharacters'] = NULL;
$arguments13['minimum'] = NULL;
$arguments13['maximum'] = NULL;
$arguments13['placeholder'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output10 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '
        ';
return $output10;
};

$output7 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
      ';
return $output7;
};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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

$output15 = '';

$output15 .= '
		<strong>Kalender</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments16 = array();
$arguments16['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date_section', $renderingContext);
$arguments16['as'] = 'obj';
$arguments16['key'] = '';
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments19 = array();
$arguments19['format'] = 'Y-m-d';
$arguments19['date'] = NULL;
$arguments19['base'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.date', $renderingContext);
};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.name', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output18 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output18 .= ' <br>
		';
return $output18;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
	';


return $output15;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output24 = '';

$output24 .= '

  <script type="text/javascript" defer>
    events = [
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments25 = array();
$arguments25['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date_section', $renderingContext);
$arguments25['as'] = 'obj';
$arguments25['key'] = '';
$arguments25['reverse'] = false;
$arguments25['iteration'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
        ';

$output27 .= '  {   ';

$output27 .= '
          title: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.name', $renderingContext);
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = NULL;
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() {return NULL;};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output27 .= (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments28['encoding'] !== NULL ? $arguments28['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments28['doubleEncode']));

$output27 .= '",
          date: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments31 = array();
$arguments31['format'] = 'Y-m-d';
$arguments31['date'] = NULL;
$arguments31['base'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.date', $renderingContext);
};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output27 .= '"
      ';

$output27 .= '  },   ';

$output27 .= '
      ';
return $output27;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
    ]

    ';

$output24 .= '
      $(document).ready(function() {
        $(\'#calendar\').fullCalendar({
          events: events,
            header : {
              left: "prev,next",
              center : "title",
              right: "month, listMonth"
            }
        })
      });
    ';

$output24 .= '
  </script>



    <div id="calendar"></div>
	';


return $output24;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output33 = '';

$output33 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments34 = array();
$arguments34['name'] = 'Content';
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output33 .= $viewHelper36->initializeArgumentsAndRender();

$output33 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments37 = array();
$arguments37['name'] = 'Configuration';
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments40 = array();
$arguments40['id'] = 'calendar';
// Rendering Array
$array41 = array();
$array41['group'] = 'SKK Spezialanfertigung';
$arguments40['options'] = $array41;
$arguments40['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_calendar.xlf';
$arguments40['label'] = NULL;
$arguments40['description'] = NULL;
$arguments40['enabled'] = true;
$arguments40['compact'] = false;
$arguments40['variables'] = array (
);
$arguments40['extensionName'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments44 = array();
$arguments44['name'] = 'settings.date_section';
$arguments44['label'] = 'Termine';
$arguments44['variables'] = array (
);
$arguments44['extensionName'] = NULL;
$arguments44['inherit'] = false;
$arguments44['inheritEmpty'] = false;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output46 = '';

$output46 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments47 = array();
$arguments47['name'] = 'termin';
$arguments47['label'] = 'Termin';
$arguments47['variables'] = array (
);
$arguments47['extensionName'] = NULL;
$arguments47['inherit'] = false;
$arguments47['inheritEmpty'] = false;
$arguments47['transform'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments50 = array();
$arguments50['name'] = 'date';
$arguments50['eval'] = 'date';
$arguments50['label'] = 'Datum';
$arguments50['default'] = NULL;
$arguments50['required'] = false;
$arguments50['exclude'] = false;
$arguments50['transform'] = NULL;
$arguments50['enabled'] = true;
$arguments50['requestUpdate'] = false;
$arguments50['displayCond'] = NULL;
$arguments50['inherit'] = true;
$arguments50['inheritEmpty'] = true;
$arguments50['clear'] = false;
$arguments50['variables'] = array (
);
$arguments50['extensionName'] = NULL;
$arguments50['size'] = 32;
$arguments50['maxCharacters'] = NULL;
$arguments50['minimum'] = NULL;
$arguments50['maximum'] = NULL;
$arguments50['placeholder'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments52 = array();
$arguments52['name'] = 'name';
$arguments52['label'] = 'Name';
$arguments52['default'] = NULL;
$arguments52['required'] = false;
$arguments52['exclude'] = false;
$arguments52['transform'] = NULL;
$arguments52['enabled'] = true;
$arguments52['requestUpdate'] = false;
$arguments52['displayCond'] = NULL;
$arguments52['inherit'] = true;
$arguments52['inheritEmpty'] = true;
$arguments52['clear'] = false;
$arguments52['variables'] = array (
);
$arguments52['extensionName'] = NULL;
$arguments52['eval'] = 'trim';
$arguments52['size'] = 32;
$arguments52['maxCharacters'] = NULL;
$arguments52['minimum'] = NULL;
$arguments52['maximum'] = NULL;
$arguments52['placeholder'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output49 .= '
        ';
return $output49;
};

$output46 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
      ';
return $output46;
};

$output43 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
		';
return $output43;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments40, $renderChildrenClosure42, $renderingContext);

$output39 .= '
	';
return $output39;
};

$output33 .= '';

$output33 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments54 = array();
$arguments54['name'] = 'Preview';
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
		<strong>Kalender</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments57 = array();
$arguments57['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date_section', $renderingContext);
$arguments57['as'] = 'obj';
$arguments57['key'] = '';
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments60 = array();
$arguments60['format'] = 'Y-m-d';
$arguments60['date'] = NULL;
$arguments60['base'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.date', $renderingContext);
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.name', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output59 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output59 .= ' <br>
		';
return $output59;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
	';
return $output56;
};

$output33 .= '';

$output33 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments65 = array();
$arguments65['name'] = 'Main';
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '

  <script type="text/javascript" defer>
    events = [
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments68 = array();
$arguments68['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date_section', $renderingContext);
$arguments68['as'] = 'obj';
$arguments68['key'] = '';
$arguments68['reverse'] = false;
$arguments68['iteration'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
        ';

$output70 .= '  {   ';

$output70 .= '
          title: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.name', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output70 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));

$output70 .= '",
          date: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments74 = array();
$arguments74['format'] = 'Y-m-d';
$arguments74['date'] = NULL;
$arguments74['base'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('obj'), 'termin.date', $renderingContext);
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output70 .= '"
      ';

$output70 .= '  },   ';

$output70 .= '
      ';
return $output70;
};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
    ]

    ';

$output67 .= '
      $(document).ready(function() {
        $(\'#calendar\').fullCalendar({
          events: events,
            header : {
              left: "prev,next",
              center : "title",
              right: "month, listMonth"
            }
        })
      });
    ';

$output67 .= '
  </script>



    <div id="calendar"></div>
	';
return $output67;
};

$output33 .= '';

$output33 .= '
</div>
';


return $output33;
}


}
#1539020255    22984     