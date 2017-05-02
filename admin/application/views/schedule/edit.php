<div class="col-md-10">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Schedule</h3>
      </div>
      <div class="panel-body">


		<?php echo validation_errors(); ?>

		<!-- Using form helper -->
		<?php echo form_open('schedule/update'); ?>
		<input type="hidden" name="id" value="<?php echo $schedule['id']; ?>">
			        <div class="form-group">
                        <label>Picture</label>
                        <input class="form-control" type="file" name="picture" />
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" value="<?php echo $schedule['title']; ?>" />
                        <?php echo form_error('title'); ?>
                    </div>
                     <div class="form-group">
                        <label>Date</label>
                        <div class="form-inline">   
                            <div class="form-group">
                                <input class="form-control" type="text" name="day" value="<?php echo $schedule['day']; ?>" />
                                <?php echo form_error('day'); ?>
                            </div>
                            <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="month" value="<?php echo $schedule['month']; ?>" />
                                <?php echo form_error('month'); ?>
                            </div>
                             <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="year" value="<?php echo $schedule['year']; ?>" />
                                <?php echo form_error('year'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <div class="form-inline">   
                            <div class="form-group">
                                 <input id="timepicker" type="text" name="start" class="form-control" style="width:200px;" value="<?php echo $schedule['start']; ?>">
                                <?php echo form_error('start'); ?>
                            </div>
                            <div class="form-group">
                               <span> until </span>
                            </div>
                            <div class="form-group">
                                <input id="timepicker2" type="text" name="end" class="form-control" style="width:200px;" value="<?php echo $schedule['end']; ?>">
                                <?php echo form_error('end'); ?>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $('#timepicker').timepicker({
                            template: 'dropdown',
                            showInputs: false,
                            defaultTime: false,
                            minuteStep: 5
                        });

                        $('#timepicker2').timepicker({
                            template: 'dropdown',
                            showInputs: false,
                            defaultTime: false,
                            minuteStep: 5
                        });
                    </script>

                     
                     <div class="form-group">
                        <label>Place</label>
                        <input class="form-control" type="text" name="place" value="<?php echo $schedule['place']; ?>" />
                        <?php echo form_error('place'); ?>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" placeholder="What is in your mind?"><?php echo $schedule['content']; ?></textarea> 
                        <?php echo form_error('content'); ?>
                    </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-default">Edit</button>
                    </div>
		</form>
		</div>
	</div>

</div>

		<script>
            CKEDITOR.replace( 'content' );
        </script>