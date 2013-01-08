<?php 
$themes = array(
	0 => 'Default',
	1 => 'Aluminium',
	2 => 'Blank',
	3 => 'Blue',
	4 => 'Blue 2',
	5 => 'Classic',
	6 => 'Green',
	7 => 'Green 2',
	8 => 'Navy',
	9 => 'Navy 2',
	10 => 'Orange',
	11 => 'Orange 2',
	12 => 'Organic',
	13 => 'Red',
	14 => 'Red 2',
	15 => 'Tech',
	16 => 'Zen'
); 
?>

<div class="selectTheme" id="selectThemeSection">

	<form name="Wizard2Form" method="POST" action="/akira/wizard2SaveQuestion.do" onsubmit="ajaxRequestV2({'divID':'addQRightDivID', 'url':this.action, 'htmlForm':this, 'spinnerDivID':'shadowedBoxBodyTitleSpinner'});return false;">

		<table width="100%">
			<tr>
				<td>

					<div class="colOptions">
						<p class="mt0">
							<label for="">Font</label>
							<select data-bind="options: fontFamily, value: selectedFontFamily"></select>
						</p>
						<p>
							<label for="">Font size</label>
							<select data-bind="options: fontSizes, value: selectedFontSize"></select>
						</p>
						<p>
							<label for="">Background</label>
							<input data-bind="value: backgroundColor" id="backgroundColor" name="backgroundColor" value="#8C8C8C" class="color {hash:true} colorLarge">
						</p>
						<p>
							<label for="">Title bars</label>
							<input data-bind="value: titleColor" value="#D55C5C" class="color {hash:true} colorLarge">
						</p>
						<p>
							<label for="">Hover</label>
							<button type="button" class="smallcolor" data-bind="click: setHoverColor" data-color="#CFCFCF" style="background:#CFCFCF;"></button>
							<button type="button" class="smallcolor" data-bind="click: setHoverColor" data-color="#BFDDE6" style="background:#BFDDE6;"></button>
							<button type="button" class="smallcolor" data-bind="click: setHoverColor" data-color="#E6BFBF" style="background:#E6BFBF;"></button>
							<button type="button" class="smallcolor" data-bind="click: setHoverColor" data-color="#CAE6BF" style="background:#CAE6BF;"></button>
						</p>
						<p>
							<label for="">Buttons</label>
							<input data-bind="value: buttonColor" value="#D55C5C" class="color {hash:true} colorLarge">
						</p>
						<p>
							<label for="">Progress Bar</label>
							<input data-bind="value: progressColor" value="#00D580" class="color {hash:true} colorLarge">
						</p>
					</div>
					<div class="colThumb">
						<div class="themePreview">
							<div data-bind="template: { name: 'themePreview' }"></div>
						</div>
					</div>

					<div class="clearBox"></div>

					<div class="dashedSingleLine createQAddAnotherAlign" style="width:101%;">
						<table width="100%">
							<tr>
								<td align="right">
									<a href="#" class="cancel">Cancel</a>
									&nbsp;
									<a class="upgrade-gray createQAddAnother" href="javascript:var frm =document.forms['Wizard2Form'];frm.saveNew.value='submit';ajaxRequestV2({'divID':'addQRightDivID', 'url':frm.action, 'htmlForm':frm, 'spinnerDivID':'shadowedBoxBodyTitleSpinner'});var func=function(){};func();">
										Preview
									</a>
									&nbsp;
									<input type="submit" name="submit" value="Save">
								</td>
							</tr>
						</table>
					</div>

				</td>
			</tr>
		</table>
	</form>                               
</div>

<script type="text/javascript">
$(document).ready(function() {
	function viewModel() {

		var self = this;

		self.fontSizes = ["Small", "Medium", "Large"];
		self.selectedFontSize = ko.observable('Medium');

		self.fontFamily = ["Verdana", "Arial", "Times News Roman"];
		self.selectedFontFamily = ko.observable('Aria;');

		self.backgroundColor = ko.observable("#8C8C8C");
		self.titleColor = ko.observable("#D55C5C");

		self.hoverColor = ["#CFCFCF", "#BFDDE6", "#E6BFBF", "#CAE6BF"];
		self.selectedHoverColor = ko.observable('#BFDDE6');

		self.buttonColor = ko.observable("#D55C5C");
		self.progressColor = ko.observable("#00D580");

		self.setHoverColor = function(data, event) {
			var target;

			if (event.target) target = event.target;
			else if (event.srcElement) target = event.srcElement;

			if (target.nodeType == 3) // defeat Safari bug
			target = target.parentNode;

			self.selectedHoverColor($(target).data('color'));
		}

		self.fontSizePx = ko.computed(function() {
			switch (self.selectedFontSize()) {
				case "Small":
					return "12px";
					break;
				case "Medium":
					return "14px";
					break;
				case "Large":
					return "16px";
					break;

			}
    	}, self);
	};

	ko.applyBindings(new viewModel);	
});
</script>

<script type="text/html" id="themePreview">
	<div class="bgContainer" data-bind="style: { backgroundColor: backgroundColor} ">
		<div class="previewContainer" data-bind="style: { fontFamily: selectedFontFamily, fontSize: fontSizePx} ">
			<h1 class="surveyTitle" data-bind="style: { backgroundColor: titleColor, fontFamily: selectedFontFamily} ">
				Survey Title
			</h1>
			<div class="progress">
				<div class="progressBar" data-bind="style: { backgroundColor: progressColor } "></div>
			</div>
			<div class="question">
				<h3>1. How long have you been our customer?</h3>
				<ul>
					<li>Less than 1 month</li>
					<li data-bind="style: { backgroundColor: selectedHoverColor } ">Between 1 and 6 months</li>
					<li>Between 1 year and 5 years</li>
					<li>More than 5 years</li>
				</ul>
			</div>
			<h4 class="subtitle" data-bind="style: { backgroundColor: titleColor } ">Section Heading</h4>
			<div class="question">
				<h3>2. How long have you been our customer?</h3>
				<ul>
					<li>Less than 1 month</li>
					<li data-bind="style: { backgroundColor: selectedHoverColor } ">Between 1 and 6 months</li>
					<li>Between 1 year and 5 years</li>
					<li>More than 5 years</li>
				</ul>
			</div>
			<div class="actions">
				<a class="next" data-bind="style: { backgroundColor: buttonColor } ">Next</a>
			</div>
		</div>
	</div>	
</script>