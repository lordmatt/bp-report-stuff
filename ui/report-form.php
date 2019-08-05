<?php

/** 
 * This form section injects at the footer of the page. After everything else 
 * has loaded. This requires JQuery UI which should be supplied by default by
 * WordPress. 
 * 
 * @todo Ensure that JQuery & JQuery UI are enqueued.
 * 
 * @See <https://jqueryui.com/dialog/#modal-form>
 * 
 * @todo Attach jquery event to form so we can submit via AJAX to the endpoint
 * @todo Update the form to display the endpoint response
 * @todo Display any defined community safty or further help links
 */

?>
<div id="dialog-form" title="Report something">
  <p class="validateTips">All form fields are required.</p>
 
  <form>
    <fieldset>
		<?php
			// we do hidden values here
			
		?>
		<input type="hidden" name="report" id="report" value="User Report"/>
		<?php
			// next we do reasons to report
			$bp_report_stuff_reasons = array();
			$bp_report_stuff_reasons['tos-breach']=_x("This is in breach of the site'sstated policies.",'policy breach','bp_report_stuff');
			$bp_report_stuff_reasons['spam-fraud']=_x("This is fraudulent or spam.",'spam or fraud','bp_report_stuff');
			$bp_report_stuff_reasons['strong-dislike']=_x("I don't like it or think it shouldn't be here.",'strong dislike report','bp_report_stuff');
			$bp_report_stuff_reasons['harrasement']=_x("This is harrassing me or someone I know.",'harrasment report','bp_report_stuff');
			$bp_report_stuff_reasons['copyright']=_x("This is breaches my intellectual property.",'copyright report','bp_report_stuff');
			$bp_report_stuff_reasons['other']=_x("I want to report this for some other reason.",'other report','bp_report_stuff');
			
			$bp_report_stuff_reasons = apply_filters( 'bp_report_stuff_reasons', $bp_report_stuff_reasons );
			
			foreach ( $bp_report_stuff_reasons as $bp_report_stuff_key => $bp_report_stuff_reason ) {
				?>
		<input type="radio" id="id_<?php echo $bp_report_stuff_key; ?>" name="report" value="<?php echo $bp_report_stuff_key; ?>" class="text ui-widget-content ui-corner-all">
		<label for="id_<?php echo $bp_report_stuff_key; ?>"><?php echo $bp_report_stuff_reason; ?></label>
				<?php
			}
		?>
		<label for="comment">Comments</label>
		<input type="text" name="comment" id="comment" value="" class="text ui-widget-content ui-corner-all">

		<!-- Allow form submission with keyboard without duplicating the dialog button -->
		<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>