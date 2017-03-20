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
                <input class="form-control" type="text" name="title" />
            </div>
             <div class="form-group">
                <label>Day</label>
                <input class="form-control" type="text" name="day" />
            </div>
             <div class="form-group">
                <label>Month</label>
                <input class="form-control" type="text" name="month" />
            </div>
             <div class="form-group">
                <label>Year</label>
                <input class="form-control" type="text" name="year" />
            </div>
             <div class="form-group">
                <label>Start</label>
                <input class="form-control" type="text" name="start" />
            </div>
             <div class="form-group">
                <label>End</label>
                <input class="form-control" type="text" name="end" />
            </div>
             <div class="form-group">
                <label>Place</label>
                <input class="form-control" type="text" name="place" />
            </div>
            <div class="form-group">
                <label>Content</label>
                <input class="form-control" type="text" name="content" />
            </div>
             <div class="form-group">
                <input type="submit" class="btn btn-warning" name="userSubmit" value="Add">
            </div>
        </div>
    </div>
</form>