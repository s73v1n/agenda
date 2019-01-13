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
		<link href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/horizontal/css/style.css'; ?>">
		<link href="<?php echo base_url('/assets/horizontal/css/colors/blue.css')?>" id="theme" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/fullcalendar/dist/fullcalendar.css'; ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
<?php
$this->load->view('template/header');
?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php
$this->load->view('template/menu');
?>  
   
<div class="page-wrapper">       
    <div class="container-fluid">
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
															<div class="input-group date" id="datetimepicker2" data-target-input="nearest">
																<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
																<div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
																	<div class="input-group-text"><i class="fa fa-calendar"></i></div>
																</div>
															</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">End Date</label>
                                                        <div class="col-sm-10">
															<div class="input-group date" id="datetimepicker2" data-target-input="nearest">
																<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
																<div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
																	<div class="input-group-text"><i class="fa fa-calendar"></i></div>
																</div>
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
</div>
    <!--<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'; ?>"></script>-->
	<script src="<?php echo base_url('/assets/plugins/jquery/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/plugins/popper/popper.min.js')?>"></script>
    <script src="<?php echo base_url('/assets/horizontal/js/jquery.slimscroll.js')?>"></script>	 
	<script src="<?php echo base_url('/assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <script src="<?php echo base_url('/assets/plugins/sparkline/jquery.sparkline.min.js')?>"></script>	
	<script src="<?php echo base_url('/assets/horizontal/js/sidebarmenu.js')?>"></script>
    <script src="<?php echo base_url('/assets/horizontal/js/custom.min.js')?>"></script>	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>      
    <script src="<?php echo base_url('/assets/plugins/moment/moment.js')?>"></script>
    <script src="<?php echo base_url('/assets/plugins/calendar/dist/fullcalendar.min.js')?>"</script>
    <script src="<?php echo base_url('/assets/plugins/calendar/dist/jquery.fullcalendar.js')?>"</script>
	<script src="<?php echo base_url('/assets/plugins/calendar/dist/locale/id.js')?>"></script>
    <script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        var backend_url     = '<?php echo base_url(); ?>';

        $(document).ready(function() {
            $('#datetimepicker2').datetimepicker();
            $('#calendarIO').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
                defaultDate: moment().format('YYYY-MM-DD'),                
				slotDuration: '00:30:00',  
				minTime: '06:00:00',
				maxTime: '22:00:00',
				handleWindowResize: true,
				editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                    $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                    $('#create_modal').modal('show');
                    save();
                    $('#calendarIO').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    editDropResize(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                    editDropResize(event);
                },
                eventClick: function(event, element)
                {
                    deteil(event);
                    editData(event);
                    deleteData(event);
                },
                events: JSON.parse(get_data)
            });
        });

        $(document).on('click', '.add_calendar', function(){
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');  
        })

        $(document).on('submit', '#form_create', function(){

            var element = $(this);
            var eventData;
            $.ajax({
                url     : backend_url+'calendar/save',
                type    : element.attr('method'),
                data    : element.serialize(),
                dataType: 'JSON',
                beforeSend: function()
                {
                    element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                },
                success: function(data)
                {
                    if(data.status)
                    {   
                        eventData = {
                            id          : data.id,
                            title       : $('#create_modal input[name=title]').val(),
                            description : $('#create_modal textarea[name=description]').val(),
                            start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            color       : $('#create_modal select[name=color]').val()
                        };
                        $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                        $('#create_modal').modal('hide');
                        element[0].reset();
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                    }
                    else
                    {
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html(data.notif);
                    }
                    element.find('button[type=submit]').html('Submit');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    element.find('button[type=submit]').html('Submit');
                    element.find('.alert').css('display', 'block');
                    element.find('.alert').html('Wrong server, please save again');
                }         
            });
            return false;
        })

        function editDropResize(event)
        {
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end)
            {
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }
            else
            {
                end = start;
            }
         
            $.ajax({
                url     : backend_url+'calendar/save',
                type    : 'POST',
                data    : 'calendar_id='+event.id+'&title='+event.title+'&start_date='+start+'&end_date='+end,
                dataType: 'JSON',
                beforeSend: function()
                {
                },
                success: function(data)
                {
                    if(data.status)
                    {   
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
                    }
                    else
                    {
                        $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
                    }
             
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
                }         
            });
        }

        function save()
        {
            $('#form_create').submit(function(){
                var element = $(this);
                var eventData;
                $.ajax({
                    url     : backend_url+'calendar/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {   
                            eventData = {
                                id          : data.id,
                                title       : $('#create_modal input[name=title]').val(),
                                description : $('#create_modal textarea[name=description]').val(),
                                start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                color       : $('#create_modal select[name=color]').val()
                            };
                            $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }         
                });
                return false;
            })
        }

        function deteil(event)
        {
            $('#create_modal input[name=calendar_id]').val(event.id);
            $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD HH:mm:ss'));
            $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD HH:mm:ss'));
            $('#create_modal input[name=title]').val(event.title);
            $('#create_modal input[name=description]').val(event.description);
            $('#create_modal select[name=color]').val(event.color);
            $('#create_modal .delete_calendar').show();
            $('#create_modal').modal('show');
        }

        function editData(event)
        {
            $('#form_create').submit(function(){
                var element = $(this);
                var eventData;
                $.ajax({
                    url     : backend_url+'calendar/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {   
                            event.title         = $('#create_modal input[name=title]').val();
                            event.description   = $('#create_modal textarea[name=description]').val();
                            event.start         = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.end           = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.color         = $('#create_modal select[name=color]').val();
                            $('#calendarIO').fullCalendar('updateEvent', event);

                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }         
                });
                return false;
            })
        }

        function deleteData(event)
        {
            $('#create_modal .delete_calendar').click(function(){
                $.ajax({
                    url     : backend_url+'calendar/delete',
                    type    : 'POST',
                    data    : 'id='+event.id,
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {   
                            $('#calendarIO').fullCalendar('removeEvents',event._id);
                            $('#create_modal').modal('hide');
                            $('#form_create')[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            $('#form_create').find('.alert').css('display', 'block');
                            $('#form_create').find('.alert').html(data.notif);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#form_create').find('.alert').css('display', 'block');
                        $('#form_create').find('.alert').html('Wrong server, please save again');
                    }         
                });
            })
        }

    </script>
	<script src="<?php echo base_url('/assets/plugins/styleswitcher/jQuery.style.switcher.js')?>"></script>
    </body>
</html>