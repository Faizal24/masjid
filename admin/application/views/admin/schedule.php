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
                                <select class="form-control" name="day" style="width:150px;" data-dropup-auto="false">
                                  <option value="">Day</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>          
                                </select>
                                <?php echo form_error('day'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="month" style="width:170px;">
                                  <option value="">Month</option>
                                  <option value="Jan">Januari</option>
                                  <option value="Feb">Februari</option>
                                  <option value="Mac">Mac</option>
                                  <option value="April">April</option>
                                  <option value="Mei">Mei</option>
                                  <option value="Jun">Jun</option>
                                  <option value="Julai">Julai</option>
                                  <option value="Ogos">Ogos</option>
                                  <option value="Sep">September</option>
                                  <option value="Okt">Oktober</option>
                                  <option value="Nov">November</option>
                                  <option value="Dis">Disember</option>
                                </select>
                                <?php echo form_error('month'); ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="year" placeholder="Year" style="width:150px;"/>
                                <?php echo form_error('year'); ?>
                            </div>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label>Time</label>
                        <div class="form-inline">   
                            <div class="form-group">
                                <div class="bootstrap-timepicker">
                                    <input id="timepicker" type="text" name="start" class="form-control" style="width:200px;">
                                    <i class="icon-time"></i>
                                </div>
 
                                <script type="text/javascript">
                                    $('#timepicker').timepicker({
                                        template: 'dropdown',
                                        showInputs: false,
                                        defaultTime: false,
                                        minuteStep: 5

                                    });
                                </script>

                                <!-- input class="form-control" type="text" name="start" placeholder="Start" style="width:125px;"/>
                                <select class="form-control" name="time-start">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select> -->
                                <?php echo form_error('start'); ?>
                            </div>
                            <div class="form-group">
                               <span> until </span>
                            </div>
                            <div class="form-group">
                                <div class="bootstrap-timepicker">
                                    <input id="timepicker2" type="text" name="end" class="form-control" style="width:200px;">
                                    <i class="icon-time"></i>
                                </div>

                                <script type="text/javascript">
                                    $('#timepicker2').timepicker({
                                        template: 'dropdown',
                                        showInputs: false,
                                        defaultTime: false,
                                        minuteStep: 5

                                    });
                                </script>
                                <!-- <input class="form-control" type="text" name="end" placeholder="End" style="width:125px;"/>
                                <select class="form-control" name="time-end">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select> -->
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

        <script type="text/javascript">
            $('.selectpicker').selectpicker({
              style: 'btn-info',
              size: 4
            });

        </script>