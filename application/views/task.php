<!DOCTYPE html>
<html>
<head>
	<title></title>
	!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	.main_2{ width: 16%; justify-content: center;

	}
	/****************************
    CONTENT BLOCKER
****************************/
#content_blocker {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
    font-size: 18px;
    display: none;
    left: 0;
    opacity: 0.75;
    position: absolute;
    text-align: center;
    top: 0;
    z-index: 998;
}
#content_blocker div {
    background-image: url('img/blocker.gif');
    background-position: top;
    background-repeat: no-repeat;
    background-size: 128px 15px;
    padding-top: 25px;
    position: absolute;
}
#scheduler_load_layout
{
    width: 100%;
    height: 100%;
    background-color: rgb(221, 221, 221);
    background-image: url('./img/loader.gif');
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    top: 0;
    opacity: 0.4;
    filter:alpha(opacity=40);
}

/**************************
        SCHEDULER
**************************/
#dhx_scheduler {
    border: 1px solid rgb(188, 188, 188);
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

/*** header ***/
#dhx_scheduler .dhx_cal_settings_button,
#dhx_scheduler .dhx_cal_new_button,
#dhx_scheduler .dhx_cal_today_button,
#dhx_scheduler .dhx_cal_prev_button,
#dhx_scheduler .dhx_cal_next_button {
    border-radius: 0;
    color: rgb(255, 255, 255);
    font-size: 16px;
    font-family: arial;
    font-weight: normal;
    height: 27px;
    line-height: 27px;
    text-align: center;
}
#dhx_scheduler .dhx_cal_prev_button {
    background: url(img/arrow_left-white.png) no-repeat center center;
}
#dhx_scheduler .dhx_cal_settings_button,
#dhx_scheduler .dhx_cal_new_button {
    background-color: rgb(170, 170, 170);
    position:  absolute;
    width: 80px;
    border: 1px solid rgb(150, 150, 150);
    cursor: pointer;
}
#dhx_scheduler .dhx_cal_settings_button {
    left: 10px;
}
#dhx_scheduler .dhx_cal_new_button {
    background-color: rgb(170, 170, 170) !important;
    border-color: rgb(150, 150, 150) !important;
    left: 110px;
}
#dhx_scheduler .dhx_cal_navline {
    width: 100%;
    min-height: 50px;
    background-color: rgb(188, 188, 188);
}
#dhx_scheduler .dhx_cal_header {
    background-color: rgb(188, 188, 188);
}
#dhx_scheduler .dhx_cal_date {
    color: rgb(255, 255, 255);
    font-size: 19px;
}
.dhx_cal_navline .dhx_cal_date, .dhx_cal_navline div {
    top:10px;
}
.dhx_matrix_scell {
    color: rgb(100, 100, 100);
    font-size: 15px;
}

/*** X-axis ***/
#dhx_scheduler .dhx_cal_header div div {
    border-color: rgb(255, 255, 255);
}
#dhx_scheduler .dhx_scale_bar {
    background-color: rgb(188, 188, 188);
    color: rgb(255, 255, 255);
    font-size: 14px;
}

/*** Y-axis ***/
.row_even {
    background-color: rgb(241, 241, 241);
}

.today_marker {
    background-color: #3333CC;
    opacity: 0.1;
    filter: alpha(opacity=10);
}
.holiday_section {
    background-color: #FF3366;
    opacity: 0.1;
    filter: alpha(opacity=10);
}

/*** events ***/
.full_time {
    background: #FF4D4D !important;
}
.part_time {
    background: #48ba68 !important;
}
.dhx_cal_event_line {
    background-color: #48ba68;
    border-radius: 2px;
    font-size: 14px;
    line-height: 20px;
}
.dhx_cal_event_line .dhx_event_resize {
    background: transparent;
}


.no_data {
    position: absolute;
    font-size: 16px;
    font-weight: bold;
    padding: 10px;
    display: none;
    top: 92px;
}

/********************************
        FILTER FORM
********************************/
.resource_tabbar{
	background-color: rgb(241, 241, 241);
}
.resource_tabbar .webix_el_tabbar{
	background-color: #bcbcbc !important;
	margin-top: 0 !important;
	padding-bottom: 10px !important;
	
}
.resource_tabbar .webix_item_tab{
	background-color: #bcbcbc !important;
	border-color: white !important;
	background-image: none !important;
    border-top: 1px solid rgb(255, 255, 255) !important;
	color: white !important;
	font-size: 16px !important;
	padding: 3px 0 !important;
	width: 80px !important;
}
.resource_tabbar .webix_selected{
	background-color: #bcbcbc !important;
	border-color: white !important;
	background-image: none !important;
    border-bottom: 0 !important;
    box-shadow: none;
}
.resource_tabbar .webix_tab_filler{
	display: none !important;
}
.resource_tabbar .webix_all_tabs:after{
	content: "";
    display: inline-block;

    width: 100%;
    height: 100%;

    margin-right: 140px;
    background: none;
	border-bottom: 1px solid #fff;
}

.filter_form {
    background-color: rgb(241, 241, 241) !important;
}
.filter_form .webix_control,
.filter_form .webix_spacer {
    background-color: rgb(241, 241, 241) !important;
}
.filter_form .webix_view>.webix_disabled {
    background: rgb(241, 241, 241) !important;
}
.filter_form label {
    font-size: 15px;
}
.positions_form
{
    overflow-y: auto !important;
}
.positions_form div {
    background-color: rgb(241, 241, 241) !important;
}
.positions_form label{
    font-size: 15px;
}
.webix_accordionitem_body .webix_view {
    /* DO NOT CREATE GLOBAL CSS RULES, OTHER APPLICATIONS HAVE OTHER STYLE ON THESE ELEMENTS, THANK YOU*/
    /*background-color: rgb(255, 255, 255) !important;*/
}
.resource_tabbar .webix_accordionitem_header
{
    box-shadow: none;
}
.resource_tabbar .webix_accordionitem_button
{
    background-image: url('./img/resourse_acc_item.png') !important;
}
.red_btn input,
.red_btn input:active
{
    width: 80px;
    height: 27px;
    padding: 0;
    margin: 0 17px;
    background: #e42750 !important;
    border-color: #bc2042;
    border-radius: 0;
    border-width: 0 0 1px 0;
    color: rgb(255, 255, 255);
    font-size: 15px;
    text-align: center;
}
.grey_btn input,
.grey_btn input:active {
    width: 120px;
    height: 27px;
    padding: 0;
    margin: 0;
    background: rgb(204, 204, 204) !important;
    border-color: rgb(172, 172, 172);
    border-radius: 0;
    border-width: 0 0 1px 0;
    color: rgb(255, 255, 255);
    font-size: 15px;
}

input[type=text],
.webix_inp_static,
input[type=combo]
{
    height:28px;
    border: 1px solid rgb(204, 204, 204);
}
.icon-calendar-alt:before,
.icon-down-open:before
{
    content: none;
}
.icon-calendar-alt {
    height: 26px;
    width: 26px;
    margin: 0;
    top: 4px;
    right: 3px !important;
    background-image: url('img/datepicker_icon.png') !important;
}

.filter_acc_header {
    border-color: rgb(204, 204, 204);
    border-radius: 0;
}
.filter_acc_header > div  {
    background: rgb(255, 255, 255);
    font-size: 15px;
    font-weight: normal;

}
.filter_acc_body div {
    background: rgb(255, 255, 255);
}

/********************************
         settings window
********************************/
.settings_window .webix_win_head>.webix_view>.webix_template{
    background: rgb(188, 188, 188) !important;
    color: rgb(255, 255, 255) !important;
    font-size: 20px;
    font-weight: normal;
    letter-spacing: 1px;
    padding: 10px 20px;
    text-align: left;

}

.settings_form {
    color:rgb(100, 100, 100)
}
.settings_form .webix_el_checkbox .webix_label_right {
    margin-right: 0;
    padding-left: 10px;
}
.settings_form .webix_el_checkbox .webix_inp_label {
    width:0 !important;
}
.settings_form .webix_el_label {
    padding-left: 10px;
    font-weight: normal;
}
.settings_form .webix_fieldset fieldset {
    border: none;
    padding: 0;
}
.settings_form .webix_fieldset fieldset > div {
     padding-left: 15px;
 }
.settings_form .webix_fieldset legend {
    background: rgb(241, 241, 241);
    color: rgb(100, 100, 100);
    font-size: 16px;
    padding: 5px 20px;
    width: 100%;
}
.settings_form .webix_fieldset label {
    font-size: 15px;
}

.general_settings {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
}
.general_settings .webix_view {
    font-size: 15px;
}
.general_settings .webix_el_checkbox .webix_el_box {
    width:auto !important;
}

.general_settings .settings_top_line {
    border-top: 1px dashed rgb(188, 188, 188);
    margin-top: 5px !important;
}

.task_settings {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
}
.task_settings_label > div {
    color: rgb(100, 100, 100);
    font-size: 15px;
    font-weight: bold;
}

.settings_buttons {
    background: rgb(241, 241, 241);
    padding-top: 10px;
}
/********************************
        end settings window
********************************/

/********************************
         header
********************************/

.header {
    /*background-color: #fdf5f7;*/  /* this line breaks styles in PM HELPER*/
    background-image: none;
    border-color: #e9e9e9;
    border-width: 0 0 4px 0 !important;
}

.header_logo {
    background-image: url('img/Icon.png');
    background-repeat: no-repeat;
    background-position: 10px 6px;
}

div.header_title {
    font-size: 22px;
    color: #e4264f;
}

.header_user_name div {
    font-size: 18px;
}

.header_logout > div {
    font-size: 13px;
    cursor: pointer;
    background-image: url('img/header_line.png');
    background-repeat: no-repeat;
    background-position: 0 10px;
    padding: 0 12px;
}

/********************************
         end header
********************************/

/********************************
         webix
********************************/
.spinner .webix_disabled{
    background-image: url('img/loader.gif');
    background-position: center;
    background-repeat: no-repeat;
}
div[view_id='scheduler'] .webix_template{
	padding: 0 0 5px 5px;
}
/********************************
         end webix
********************************/


/*********************************
         tooltip
*********************************/
.dhtmlXTooltip.tooltip {
    color: #e42750;
    font-size: 14px;
    padding: 5px;
}
.dhtmlXTooltip.tooltip table {
    border: 1px solid #F1ADBD;
    padding: 2px 7px;
}
.dhtmlXTooltip.tooltip table td:first-child {
    color: #747473;
}

/*********************************
        LIGHTBOX
*********************************/
.dhx_cal_light {
    background: rgb(241, 241, 241);
    border: none;
    border-radius: 0;
    font-family: Helvetica, Verdana;
}
.dhx_cal_light_wide {
    width: 530px;
}
.dhx_cal_light_wide .dhx_cal_larea {
    border: none;
    border-bottom: 1px solid #FFF;
    border-top: 1px solid #FFF;
    margin: 0;
    width: 100%;
}
.dhx_cal_light .dhx_cal_ltitle {
    background: rgb(188, 188, 188) !important;
    color: rgb(255, 255, 255) !important;
    font-size: 20px;
    font-weight: normal;
    letter-spacing: 1px;
    padding: 5px 10px;
    text-align: left;
}
.dhx_cal_light_wide .dhx_wrap_section {
    background: rgb(241, 241, 241);
    border: none;
    padding: 5px 10px;
}
.dhx_cal_light_wide .dhx_wrap_section div {
    background: rgb(241, 241, 241);
}
.dhx_cal_light_wide .dhx_wrap_section .dhx_cal_lsection {
    color: rgb(100, 100, 100);
    font-size: 15px;
    font-weight: normal;
    text-align: left;
    width: 110px;
}
.dhx_cal_light_wide .dhx_wrap_section .dhx_cal_ltext {
    padding: 0 10px 5px 20px;
    width: 350px;
}
.dhx_cal_light_wide .dhx_wrap_section .dhx_cal_ltext label {
    margin-right: 10px;
}
.dhx_cal_light_wide .dhx_wrap_section .dhx_cal_ltext textarea {
    background-color: rgb(255, 255, 255);
    width: 360px;;
}
.dhx_cal_light_wide .dhx_wrap_section .dhx_cal_ltext select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
	background-color: rgb(255, 255, 255);
    background-image: url('img/combo_icon.png');
    background-position: 333px;
    background-repeat: no-repeat;
    border: 1px solid rgb(180, 180, 180);
    height: 28px;
    padding: 2px 23px 2px 2px;
    width: 360px !important;
}
#ac_element
{
    width: auto;
    position: absolute;
    left:210px;
    top:0;
    z-index: 10005;
    background-color: rgb(240, 240, 240);
    font-size: 14px;
    border: 0 solid rgb(204, 204, 204);
    border-width: 0 1px 1px 1px;
}
#ac_element > div
{
    padding: 5px 10px;
    cursor: pointer;
}
#ac_element > div:hover
{
    background-color: rgb(180, 180, 180);
}
.dhx_cal_light_wide .dhx_wrap_section #lb_date_picker{
    margin-left:138px;
    margin-right: 9px;
}
#lb_date_picker .webix_el_checkbox {
    margin-left: -8px !important;
    margin-top: -2px !important;
}
#lb_date_picker .webix_inp_static {
    background: rgb(255, 255, 255);
}

.dhx_cal_light
{
    height: 450px !important;
}
.dhx_cal_larea
{
    height:350px !important;
    font-size: 14px !important;
}
.dhx_cal_larea .webix_el_datepicker .webix_inp_static
{
    font-size: 14px;
    padding-left: 5px;
}
.dhx_cal_light .webix_el_checkbox .webix_inp_label
{
    width:0 !important;
}
.webix_view.webix_window.webix_popup
{
    z-index: 10100 !important;
}
#lb_suggest{
    margin-left: 138px;
}
#lb_suggest_input {
    height: 22px;
    padding-left: 5px;
}
.dhx_cal_light.dhx_cal_light_wide select,
.dhx_cal_light.dhx_cal_light_wide textarea,
.dhx_cal_light.dhx_cal_light_wide input,
.dhx_cal_light.dhx_cal_light_wide label
{
    font-size: 14px;
}

.dhx_save_btn_set, .dhx_cancel_btn_set, .dhx_delete_btn_set {
    background: #e42750 !important;
    border-color: #bc2042;
    border-radius: 0;
    border-width: 0 0 1px 0;
    color: rgb(255, 255, 255);
    font-size: 15px;
    font-weight: normal;
    height: 27px;
    margin: 14px 0 0 20px;
    padding: 0;
    text-align: center;
    text-shadow: none;
    width: 80px;
}
.dhx_delete_btn_set {
    background: #7479EB !important;
    border-color: #3B41E2;
    margin: 14px 20px 0 0;
}

.xbs_resource input[type="checkbox"],
.settings_window input[type="checkbox"] {
    display: none;
}
.xbs_resource input[type="checkbox"] + label:before,
.settings_window input[type="checkbox"] + label:before {
    content: "";
    display: inline-block;

    width: 13px;
    height: 13px;

    margin-right: 10px;
    position: relative;
    left: 0;
    top: 2px;
    background-image: url(img/checkbox_off.png);
}
.xbs_resource input[type="checkbox"]:checked + label:before,
.settings_window input[type="checkbox"]:checked + label:before {
    content: "";
    display: inline-block;

    width: 13px;
    height: 13px;

    margin-right: 10px;
    position: relative;
    left: 0;
    top: 2px;
    background-image: url(img/checkbox_on.png);
}

.dhx_combo_list {
    border: 1px solid rgb(180, 180, 180);
    color: rgb(46, 46, 46);
    font-family: Tahoma;
    font-size: 14px;
    height: 130px;
    width: 357px !important;
}
.dhx_combo_list .dhx_selected_option {
    background-color: rgb(204, 204, 204);
}
.dhx_cal_light_wide .dhx_combo_box {
    border: none;
    height: 28px;
    left: 20px;
    width: 359px !important;
}
.dhx_cal_light_wide .dhx_combo_box .dhx_combo_input {
    color: rgb(46, 46, 46);
    height: 26px;
    padding: 0 5px;
    width: 359px;
}
.dhx_cal_light_wide .dhx_combo_box .dhx_combo_img {
    height: 26px;
    top: 1px;
    width: 26px;
}

/**********************
	DHX POP-UP
**********************/
.dhtmlx_modal_box{
	border-radius: 0;
	width: 300px;
}
.dhtmlx_popup_text{
	border: 1px solid #f8c9d3;
	border-bottom: none;
	border-radius: 0;
	color: #646464;
	margin: 5px 5px 0 5px;
	padding: 10px 5px;
}
.dhtmlx_popup_controls{
	border: 1px solid #f8c9d3;
	border-top: none;
	border-radius: 0;
	margin: 0 5px 5px 5px;
}
.dhtmlx_popup_button.dhtmlx_yes_button{
	background: #e42750;
	border: none; 
	border-radius: 0;
}
.dhtmlx_popup_button.dhtmlx_yes_button div{
	background: #e42750;
	border-color: #bc2042; 
	border-radius: 0;
	color: #FFF;
	font-size: 16px;
	text-shadow: none;
}
.dhtmlx_popup_button.dhtmlx_no_button{
	background: #e42750;
	border: none;
	border-radius:0;
}
.dhtmlx_popup_button.dhtmlx_no_button div{
	background: #e42750;
	border-color: #bc2042;
	border-radius:0;
	color: #FFF;
	font-size: 16px;
	text-shadow: none;
}
.radio_fix
{
    height: 65px !important;
}
.filter_acc_body > div.webix_control,
.filter_acc_body > div
{
    height: auto !important;
    background-color: rgb(255, 255, 255) !important;
}
.filter_acc_body > div > div,
.lang_filter
{
    height: auto !important;
}

</style>
</head>
<body>


<div class="dhx_cal_light dhx_cal_light_wide" style="visibility: visible;height: 440px;/* display: block; */top: 181px;left: 535px;">
	<div class="dhx_cal_ltitle" style="cursor: pointer;">
		<span class="dhx_mark">&nbsp;</span>
		<span class="dhx_time"></span>
		<span class="dhx_title">New Task</span>
	</div>
	<div class="dhx_cal_larea" style="height: 350px;">
		<div class="dhx_wrap_section">
			<div id="area_1531830007965" class="dhx_cal_lsection">Project name</div>
			<div class="dhx_cal_ltext" style="height:30px;">
				<select style="width:100%;" id="lb_project_name">
					<option value="0"></option>
					<option value="1">Salon</option>
					<option value="2">Bugtracker</option>
					<option value="3">Any other project</option>
				</select>
			</div>
		</div>
		<div class="dhx_wrap_section">
			<div id="area_1531830007966" class="dhx_cal_lsection">Customer name</div>
			<div class="dhx_cal_ltext" style="height:30px;">
				<select style="width:100%;" id="lb_customer_name">
					<option value="0"></option>
					<option value="1">Adam Johnson</option>
					<option value="2">Valery Karpin</option>
				</select>
			</div>
		</div>
		<div class="dhx_wrap_section">
			<div id="area_1531830007967" class="dhx_cal_lsection">Manager</div>
			<div class="dhx_cal_ltext" style="height:23px;">
				<select style="width:100%;" id="lb_manager">
					<option value="0"></option>
					<option value="3">Phil Jones</option>
					<option value="6">Turner Sarah</option>
				</select>
			</div>
		</div>
		<div class="dhx_wrap_section">
			<div id="area_1531830007968" class="dhx_cal_lsection">Notes</div>
			<div class="dhx_cal_ltext" style="height:50px;">
				<textarea></textarea>
			</div>
		</div>
		<div class="dhx_wrap_section">
			<div id="area_1531830007969" class="dhx_cal_lsection">Task type</div>
			<div class="dhx_cal_ltext dhx_cal_radio" style="height:23px;">
				<input id="1531830007970" type="radio" name="type" value="0">
					<label for="1531830007970"> Part-time</label>
					<input id="1531830007971" type="radio" name="type" value="1">
						<label for="1531830007971"> Full-time</label>
					</div>
				</div>
				<div class="dhx_wrap_section">
					<div id="area_1531830007972" class="dhx_cal_lsection">Assigned to</div>
					<div class="dhx_cal_ltext" style="height:30px;">
						<select style="width:100%;" id="lb_holder">
							<option value="0"></option>
							<option value="2">John Smith</option>
							<option value="3">Phil Jones</option>
							<option value="4">Brad Williams</option>
							<option value="5">Adam Martin</option>
							<option value="6">Sarah Turner</option>
							<option value="7">Greg Watkinson</option>
							<option value="8">James Miller</option>
							<option value="9">Fred Curbs</option>
							<option value="10">Marla Petrova</option>
							<option value="11">Greg Tomson</option>
							<option value="12">Phil Tomson</option>
							<option value="13">Neil Bronson</option>
							<option value="14">Taylor Weasley</option>
							<option value="15">Wayne Baling</option>
						</select>
					</div>
				</div>
				<div class="dhx_wrap_section" style="height: 100px;">
					<div id="area_1531830007973" class="dhx_cal_lsection">Time period</div>
					<div id="lb_date_picker">
						<div class="webix_view webix_layout_line" view_id="$layout164" style="width: 363px; ">
							<div class="webix_view webix_layout_line" view_id="$layout165" style="white-space: nowrap; border-top-width: 0px; border-left-width: 0px; border-right-width: 0px; margin-top: 0px; width: 363px; height: 35px;">
								<div class="webix_view webix_control webix_el_datepicker" view_id="lb_start_date" style="display: inline-block; vertical-align: top; border-width: 0px; margin-left: 0px; width: 168px; height: 35px;">
									<div class="webix_el_box" style="width:168px; height:35px">
										<div class="webix_inp_static" tabindex="0" onclick="" style="width: 164px; text-align: left;">17 July, 2018</div>
										<span class="webix_input_icon icon-calendar-alt"></span>
									</div>
								</div>
								<div class="webix_view" view_id="$template59" style="display: inline-block; vertical-align: top; border-width: 0px; margin-left: -1px; width: 30px; height: 35px;">
									<div class=" webix_template">--</div>
								</div>
								<div class="webix_view webix_control webix_el_datepicker" view_id="lb_end_date" style="display: inline-block; vertical-align: top; border-width: 0px; margin-left: -1px; width: 167px; height: 35px;">
									<div class="webix_el_box" style="width:167px; height:35px">
										<div class="webix_inp_static" tabindex="0" onclick="" style="width: 163px; text-align: left;">18 July, 2018</div>
										<span class="webix_input_icon icon-calendar-alt"></span>
									</div>
										
								</div>
							</div>
						<button class="btn btn-success" style="float: right;"> Save</button>
							</div>
						</div>
					</div>
				</div>
			
				
			</div>
</body>
</html>