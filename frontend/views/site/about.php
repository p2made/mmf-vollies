<?php
/**
 * about.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$this->title = 'Volunteers';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-md-8">
			<p class="lead">Thanks for helping!</p>
			<p>Volunteering is a great way to support and get involved with the Maleny Music Festival.</p>
			<p>We  offer volunteers a 3 day Festival pass in return for working 8 hours during the event, or for helping set up/take down the Festival (hours as required during the week before the event).</p>
			<p>We also provide a dedicated volunteer tent where you can recharge and refresh before or after your shifts. All volunteers have to complete a brief Safety Induction before they start work.</p>
			<p>Just complete the form below to register your interest.</p>
			<h3><span style="color: #ff0000;"><strong>* <a style="color: #ff0000;" href="http://www.malenymusicfestival.com/returning-volunteers/">Returning vollies click here for super fast re-registration!</a></strong></span></h3>
			<p><strong>Important notes for volunteering</strong> &#8211; Volunteers need to:</p>
			<ul>
				<li>be over 18 years of age</li>
				<li>complete a brief safety induction before starting work</li>
				<li>provide a photo/ID before starting work</li>
			</ul>
			<p>Thanks again for your help – we couldn’t do it without you!</p>
		</div>
		<div class="col-md-4">
			<img src="http://www.malenymusicfestival.com/country/wp-content/uploads/2012/04/vollies-300x225.jpg" alt="vollies" width="300" height="225">
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<form>
		<div class="row">
			<div class="col-md-12">
				<h3>Volunteer Application</h3>
			</div>
			<div class="col-md-12">
				<hr><h4>Personal Details</h4>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="givenName">Given Name <span>*</span></label>
					<input type="text" class="form-control" id="givenName" placeholder="Given Name" aria-describedby="givenNameHelp">
					<span id="givenNameHelp" class="help-block"><strong>Legal</strong> given name.</span>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="familyName">Family Name <span>*</span></label>
					<input type="text" class="form-control" id="familyName" placeholder="Family Name" aria-describedby="familyNameHelp">
					<span id="familyNameHelp" class="help-block"><strong>Legal</strong> family name.</span>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="preferredName">Preferred Name/Nickname</label>
					<input type="text" class="form-control" id="preferredName" placeholder="Preferred Name/Nickname" aria-describedby="preferredNameHelp">
					<span id="preferredNameHelp" class="help-block">What you prefer to be called (optional)</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="emailAddress">Email Address <span>*</span></label>
					<input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="homePhone">Home Phone</label>
					<input type="tel" class="form-control" id="homePhone" placeholder="Home Phone">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="mobilePhone">Mobile Phone</label>
					<input type="tel" class="form-control" id="mobilePhone" placeholder="Mobile Phone">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="addressLine1">Address <span>*</span></label>
					<input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
				</div>
			</div>
			<div class="col-md-8">
				<div class="form-group">
					<input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ">
				<div class="form-group">
					<label for="addressLocality">Suburb/Town/locality <span>*</span></label>
					<input type="text" class="form-control" id="addressLocality" placeholder="Suburb/Town/locality">
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="addressState">State <span>*</span></label>
					<select class="form-control" id="addressState">
						<option value="ACT">ACT</option>
						<option value="NSW">NSW</option>
						<option value="NT">NT</option>
						<option value="Qld" selected>Qld</option>
						<option value="SA">SA</option>
						<option value="Tas">Tas</option>
						<option value="Vic">Vic</option>
						<option value="WA">WA</option>
						<option data-divider="true"></option>
						<option value="International">International</option>
					</select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="addressPostcode">Postcode <span>*</span></label>
					<input type="text" class="form-control" id="addressPostcode" placeholder="Postcode">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="emergencyContactName">Emergency Contact Name <span>*</span></label>
					<input type="text" class="form-control" id="emergencyContactName" placeholder="Emergency Contact Name ">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="emergencyContactPhone">Emergency Contact's Phone <span>*</span></label>
					<input type="text" class="form-control" id="emergencyContactPhone" placeholder="Emergency Contact's Phone ">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<hr><h4>Volunteering @ Maleny Music Festival</h4>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Your Skills</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="RSA">
							Responsible Service of Alcohol
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="DL/C">
							Driver's Licence (car)
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="DL/H">
							Driver's Licence (LR or above)
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="CSE">
							Customer Service Experience
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="OHS">
							OHS qualifications
						</label>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Volunteer Experience</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="Volunteered">
							Have you volunteered before?
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="Volunteered MMF">
							Have you volunteered for this festival before?
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="Attended MMF">
							Have you been to this festival before?
						</label>
					</div>
				</div>
			</div>
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
			</div>
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
			</div>
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
			</div>
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
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4>Volunteer Work Areas</h4>
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
					<label for="availableFromTime">I am an...</label>
					<select class="form-control" id="availableFromTime">
						<option selected disabled>Select...</option>
						<option value="Early">Earlybird</option>
						<option value="Midday">Nightowl</option>
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
			<div class="form-group">
				<div class="col-md-12">
					<label for="volDiscovery">How did you hear about volunteering for Maleny Music Festival?</label>
				</div>
				<div class="col-md-3">
					<select class="form-control" id="availableFromTime">
						<option selected disabled>Select...</option>
						<option value="Facebook">Facebook</option>
						<option value="Leaflet">Leaflet</option>
						<option value="Friend">Friend</option>
						<option value="Media">Media</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" placeholder="Details (optional)">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br>
				<p>Once you're happy with everything above, go ahead and...</p>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Submit Your Application">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
		<div class="row">
		</div>
	</form>


<!--
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">File input</label>
						<input type="file" id="exampleInputFile">
						<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Check me out
						</label>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>

				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon">
								<input type="checkbox" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-addon">
								<input type="radio" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">
						</div>
					</div>
				</div>
-->




	<div class="row">
		<div class="col-md-12">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		</div>
	</div>

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
