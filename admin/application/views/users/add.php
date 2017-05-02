<div class="col-md-10">
   <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">New Posts</h3>
      </div>
      <div class="panel-body">

    <?php echo $this->session->flashdata('success_msg'); ?>
    <!-- <?php echo validation_errors(); ?> -->
    <!-- <?php echo $this->session->flashdata('error_msg'); ?> -->
    <form role="form" method="post" enctype="multipart/form-data">
        <div class="panel">
            <div class="panel-body">
                <div class="form-group">
                    <label>Picture</label>
                    <input class="form-control" type="file" name="picture" />
                     <!-- <?php echo form_error('picture'); ?> -->
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Add title" />
                    <?php echo form_error('title'); ?>
                </div>
               <!--  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" id="dob" name="date" placeholder="Add Date"> -->
                    <!-- <?php echo form_error('title'); ?> -->
               <!--  </div> -->
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
