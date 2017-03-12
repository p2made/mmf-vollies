<?php
/**
 * _blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\helpers\Url;
use p2m\helpers\FA;

$this->title = 'Volunteer Application';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>

<div class="container">

	<div class="row">
		<div class="box">
			<div class="row">
				<div class="col-md-12">
					<hr>
						<h2 class="intro-text text-center">
							<?= Html::encode($this->title) ?>
						</h2>
					<hr>
				</div>
			</div>

			<form>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>You have entered these skills...</label>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="RSA" disabled>
									Responsible Service of Alcohol
								</label>
							</div><!-- / RSA -->
							<div class="checkbox">
								<label>
									<input type="checkbox" value="DL/C" checked disabled>
									Driver's Licence (car)
								</label>
							</div><!-- / DL/C -->
							<div class="checkbox">
								<label>
									<input type="checkbox" value="DL/H" checked disabled>
									Driver's Licence (LR or above)
								</label>
							</div><!-- / DL/H -->
							<div class="checkbox">
								<label>
									<input type="checkbox" value="CSE" disabled>
									Customer Service Experience
								</label>
							</div><!-- / CSE -->
							<div class="checkbox">
								<label>
									<input type="checkbox" value="OHS" checked disabled>
									OHS qualifications
								</label>
							</div><!-- / OHS -->
						</div>
					</div><!-- / Skills entered -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>Volunteer Work Areas</h4>
						<p>Work areas include...</p>
						<ul>
							<li>Set Up - some volunteers start from Wed August 30, more from Thursday till Friday afternoon</li>
							<li>Bar Service</li>
							<li>Bar Security - checking tickets at entrances</li>
							<li>Cleaning</li>
							<li>MC - experienced public speakers</li>
							<li>Stage Management</li>
							<li>Gates (ticketing, parking, campground)</li>
							<li>Shop</li>
							<li>Volunteer Hospitality</li>
							<li>Bump Out - from 5pm Sunday and all day Monday. Tuesday if necessary.</li>
						</ul>
						<p>Please nominate 3 preferred work areas...</p>
					</div><!-- / Volunteer Work Areas -->
					<div class="col-md-4">
						<div class="form-group">
							<label for="workPreference1">Preferred work area 1 <span>*</span></label>
							<select class="form-control" id="workPreference1">
								<option selected disabled>Select...</option>
								<option value="Set Up">Set Up</option>
								<option value="Bar Service">Bar Service</option>
								<option value="Bar Security">Bar Security</option>
								<option value="Cleaning">Cleaning</option>
								<option value="MC">MC</option>
								<option value="Stage Management">Stage Management</option>
								<option value="Gates">Gates</option>
								<option value="Shop">Shop</option>
								<option value="Volunteer Hospitality">Volunteer Hospitality</option>
								<option value="Bump Out">Bump Out</option>
							</select>
						</div>
					</div><!-- / Preferred work area 1 -->
					<div class="col-md-4">
						<div class="form-group">
							<label for="workPreference2">Preferred work area 2 <span>*</span></label>
							<select class="form-control" id="workPreference2">
								<option selected disabled>Select...</option>
								<option value="Set Up">Set Up</option>
								<option value="Bar Service">Bar Service</option>
								<option value="Bar Security">Bar Security</option>
								<option value="Cleaning">Cleaning</option>
								<option value="MC">MC</option>
								<option value="Stage Management">Stage Management</option>
								<option value="Gates">Gates</option>
								<option value="Shop">Shop</option>
								<option value="Volunteer Hospitality">Volunteer Hospitality</option>
								<option value="Bump Out">Bump Out</option>
							</select>
						</div>
					</div><!-- / Preferred work area 2 -->
					<div class="col-md-4">
						<div class="form-group">
							<label for="workPreference3">Preferred work area 3 <span>*</span></label>
							<select class="form-control" id="workPreference3">
								<option selected disabled>Select...</option>
								<option value="Set Up">Set Up</option>
								<option value="Bar Service">Bar Service</option>
								<option value="Bar Security">Bar Security</option>
								<option value="Cleaning">Cleaning</option>
								<option value="MC">MC</option>
								<option value="Stage Management">Stage Management</option>
								<option value="Gates">Gates</option>
								<option value="Shop">Shop</option>
								<option value="Volunteer Hospitality">Volunteer Hospitality</option>
								<option value="Bump Out">Bump Out</option>
							</select>
						</div>
					</div><!-- / Preferred work area 3 -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>Volunteer Availability</h4>
						<p>Pre and post-festival shift times are listed above. Festival volunteer shifts run from Friday morning to Sunday late afternoon, including late nights.</p>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="availableFromDate">Date available from <span>*</span></label>
							<select class="form-control" id="availableFromDate">
								<option selected disabled>Select...</option>
								<option value="08-30">Wednesday August 30</option>
								<option value="08-31">Thursday August 31</option>
								<option value="09-01">Friday September 1</option>
								<option value="09-02">Saturday September 2</option>
								<option value="09-03">Sunday September 3</option>
								<option value="09-04">Monday September 4</option>
								<option value="09-05">Tuesday September 5</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="availableFromTime">From time <span>*</span></label>
							<select class="form-control" id="availableFromTime">
								<option selected disabled>Select...</option>
								<option value="Early">Early, 6:00 AM</option>
								<option value="Midday">Midday, 12:00 PM</option>
								<option value="Evening">Evening, 6:00 PM</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="availableToDate">Date available to <span>*</span></label>
							<select class="form-control" id="availableToDate">
								<option selected disabled>Select...</option>
								<option value="08-30">Wednesday August 30</option>
								<option value="08-31">Thursday August 31</option>
								<option value="09-01">Friday September 1</option>
								<option value="09-02">Saturday September 2</option>
								<option value="09-03">Sunday September 3</option>
								<option value="09-04">Monday September 4</option>
								<option value="09-05">Tuesday September 5</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="availableToTime">To time <span>*</span></label>
							<select class="form-control" id="availableToTime">
								<option selected disabled>Select...</option>
								<option value="Midday">Midday, 12:00 PM</option>
								<option value="Evening">Evening, 6:00 PM</option>
								<option value="Late">Late, 12:00 AM</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="availableFromTime">I am...</label>
							<select class="form-control" id="availableFromTime">
								<option selected disabled>Select...</option>
								<option value="Early">an earlybird</option>
								<option value="Midday">a nightowl</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="availabilityNotes">Availability Notes</label>
							<textarea class="form-control" rows="3" id="availabilityNotes" aria-describedby="availabilityNotesHelp"></textarea>
							<span id="availabilityNotesHelp" class="help-block">Please tell us any times you are NOT available to work, along with anything else pertinant to your availability.</span>
						</div>
						<div class="form-group">
							<label for="availabilityOther">Any other comments or information we should know about you?</label>
							<textarea class="form-control" id="availabilityOther" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12"><br></div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<p>Once you're happy with everything above, go ahead and...</p>
					</div><!-- / Check -->
					<div class="col-md-4">
						<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit Your Application">
					</div><!-- / Submit -->
				</div>
<!--
				<div class="row">
					<div class="col-md-6">
					</div><!-- / formItem -->
					<div class="col-md-6">
					</div><!-- / formItem -->
				</div>
				<div class="row">
					<div class="col-md-12">
					</div><!-- / formItem -->
				</div>
-->
			</form>

			<div class="clearfix"></div>
		</div>
	</div>

</div>
<!-- /.container -->
