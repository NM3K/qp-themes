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

					<div class="dropdown">
						<p>
							Load a theme to customize:
							<select name="" id="">
								<option value="">
									<?php foreach($themes as $key => $theme): ?>
										<option value="<?=$key?>"><?=$theme?></option>
									<?php endforeach; ?>
								</option>
							</select>
						</p>
					</div>

					<div class="textarea">
						<textarea name="" id="">
body {
	font-size: 62.5%;
	background:#000;
}

table {
	font-size: 1em;
}

h1 {
  color:#fff;
  font-size:30px;
  letter-spacing:-1px;
  font-family:Arial;
  text-align:center;
}

/* Site
   -------------------------------- */

body {
	font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
}

						</textarea>
					</div>

					<div class="dashedSingleLine createQAddAnotherAlign" style="width:101%;">
						<table width="100%">
							<tr>
								<td align="right">
									<div class="saveAs">
										<p>
											Save as: 
											<select name="" id="">
												<option value="">My Theme 1</option>
											</select>
										</p>
									</div>

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