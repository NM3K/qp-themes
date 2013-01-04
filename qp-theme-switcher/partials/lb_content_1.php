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

					<div class="carousel-container">
						<div id="carousel">
							<?php foreach($themes as $key => $theme): ?>
								<div class="carousel-feature" data-theme="<?=$key?>">
									<a href="#">
										<img class="carousel-image" src="http://placehold.it/230x200&text=<?=urlencode($key . " - " . $theme)?>" alt="<?=$theme?>">
									</a>
									<div class="carousel-caption">
										<p>
											<?=$key . " - " . $theme?>
										</p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="multiThemeSelector">
						<select name="" id="" size="4">
							<?php foreach($themes as $key => $theme): ?>
								<option value="<?=$key?>"><?=$theme?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="dashedSingleLine createQAddAnotherAlign">
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