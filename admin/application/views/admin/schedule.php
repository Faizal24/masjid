<div class="col-md-10">
   <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">New Schedule</h3>
      </div>
      <div class="panel-body">

        <?php echo $this->session->flashdata('success_msg'); ?>
        <?php echo $this->session->flashdata('error_msg'); ?>
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Picture</label>
                        <input class="form-control" type="file" name="picture" />
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" placeholder="Add title" />
                        <?php echo form_error('title'); ?>
                    </div>
                     <div class="form-group">
                        <label>Date</label>
                        <div class="form-inline">   
                            <div class="form-group">
                                <input class="form-control" type="text" name="day" placeholder="Day" />
                                <?php echo form_error('day'); ?>
                            </div>
                            <div class="form-group">
                               <span> / </span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="month" placeholder="Month" />
                                <?php echo form_error('month'); ?>
                            </div>
                             <div class="form-group">
                               <span> / </span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="year" placeholder="Year" />
                                <?php echo form_error('year'); ?>
                            </div>
                        </div>
                    </div>
                     <!-- <div class="form-group">
                        <label>Month</label>
                        <input class="form-control" type="text" name="month" />
                    </div>
                     <div class="form-group">
                        <label>Year</label>
                        <input class="form-control" type="text" name="year" />
                    </div> -->
                    <div class="form-group">
                        <label>Time</label>
                        <div class="form-inline">   
                            <div class="form-group">
                                <input class="form-control" type="text" name="start" placeholder="Start" />
                                <?php echo form_error('start'); ?>
                            </div>
                            <div class="form-group">
                               <span> until </span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="end" placeholder="End" />
                                <?php echo form_error('end'); ?>
                            </div>
                        </div>
                    </div>


                     <!-- <div class="form-group">
                        <label>Start</label>
                        <input class="form-control" type="text" name="start" />
                    </div>
                     <div class="form-group">
                        <label>End</label>
                        <input class="form-control" type="text" name="end" />
                    </div> -->
                     <div class="form-group">
                        <label>Place</label>
                        <input class="form-control" type="text" name="place" placeholder="Add place" />
                        <?php echo form_error('place'); ?>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" type="text" name="content" placeholder="Add Content"></textarea>
                        <?php echo form_error('content'); ?>
                    </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-default" name="userSubmit" value="Add">
                    </div>
                </div>
            </div>
        </form>
       </div>
    </div>
</div>

        <script>
            CKEDITOR.replace( 'content' );
        </script>