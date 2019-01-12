<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Pemerintah Kota Jambi</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/horizontal/css/style.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/fullcalendar/dist/fullcalendar.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">
    </head>
    <body>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
         
          <center>
              <a href="https://fullcalendar.io/">
                <img id="logo" src="https://fullcalendar.io/images/logo.svg" width="58" height="48">
              </a>
              +
              <a href="https://fullcalendar.io/">
                <img id="logo" src="https://www.codeigniter.com/assets/images/ci-logo-white.png" width="58" height="48">
              </a>
          </center>
      </div>
    </nav>        

    <div class="container">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="alert notification" style="display: none;">
                    <button class="close" data-close="alert"></button>
                    <p></p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light bordered">
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-primary add_calendar"> ADD NEW EVENT
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- place -->
                                <div id="calendarIO"></div>
                                <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form class="form-horizontal" method="POST" action="POST" id="form_create">
                                                <input type="hidden" name="calendar_id" value="0">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Create calendar event</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                         <div class="alert alert-danger" style="display: none;"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">Title  <span class="required"> * </span></label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="title" class="form-control" placeholder="Title">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">Description</label>
                                                        <div class="col-sm-10">
                                                            <textarea name="description" rows="3" class="form-control"  placeholder="Enter description"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="color" class="col-sm-2 control-label">Color</label>
                                                        <div class="col-sm-10">
                                                            <select name="color" class="form-control">
                                                                <option value="">Choose</option>
                                                                <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                                                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                                                <option style="color:#008000;" value="#008000">&#9724; Green</option>                       
                                                                <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                                                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                                                <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                                                <option style="color:#000;" value="#000">&#9724; Black</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">Start Date</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                <input type="text" name="start_date" class="form-control" readonly>
                                                                <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">End Date</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                <input type="text" name="end_date" class="form-control" readonly>
                                                                <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript::void" class="btn default" data-dismiss="modal">Cancel</a>
                                                    <a class="btn btn-danger delete_calendar" style="display: none;">Delete</a>
                                                    <button type="submit" class="btn green">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end place -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'assets/js/moment.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/fullcalendar/dist/fullcalendar.js'; ?>"></script>
	<script src="<?php echo base_url('/assets/plugins/fullcalendar/dist/locale/id.js')?>"></script>	
	<script type="text/javascript" src="<?php echo base_url().'assets/js/cal-init.js'; ?>"></script> 
    </body>
</html>