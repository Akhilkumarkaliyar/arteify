<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=(@$title) ? $title : DEFAULT_TITLE ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=base_url()?>frontend_assets/favicon.ico" type="image/ico" sizes="16x16">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="<?php echo base_url(); ?>frontend_assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>frontend_assets/js/index.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>frontend_assets/datepicker/jquery-ui.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/gauge.js_files/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/gauge.js_files/main.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/gauge.js_files/prettify.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/gauge.js_files/fd-slider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/gauge.js_files/fd-slider-tooltip.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>frontend_assets/gauge.js_files/ga.js.download"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend_assets/gauge.js_files/prettify.js.download"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend_assets/gauge.js_files/jscolor.js.download"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend_assets/gauge.js_files/fd-slider.js.download"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend_assets/gauge.js_files/gauge.js.download"></script>


  <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/css/layout.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>frontend_assets/css/layout_responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend_assets/datepicker/jquery-ui.css"/>
  
</head>
<body>

<div class="container-fluid navbar-wrapper">
        <div class="wrap-custom">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="navbar-header">
                   <a class="brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>frontend_assets/images/logo.png"></a>

                </div>

				<?php if (isset(currentuserinfo()->id)) {
    $this->load->model('profile_mod');
    $img = $this->profile_mod->user_info();
    if (file_exists('./uploads/profile_img/compress/' . $img->profile_image) && $img->profile_image != '') {
        $image = base_url() . 'uploads/profile_img/compress/' . $img->profile_image;
    } else {
        $image = base_url() . 'frontend_assets/images/profile-pic.png';
    }
    ?>
				<div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active event-hold"><a href="javascript:void(0);" class="nva_li_cls" ><img src="<?=$image?>" style="width: 100%;"></a></li>
							<li><a href="" class="icon_cls" data-toggle="dropdown" ><span class="glyphicon glyphicon-menu-down"></span></a>
							 <ul class="dropdown-menu">
							  <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
							  <li><a href="<?php echo base_url(); ?>profile/change_password">Change Password</a></li>
							  <li><a href="<?php echo base_url(); ?>auth/logout">Logout</a></li>

							</ul>
						</li>

                    </ul>
                </div>
				<?php }?>
            </nav>

        </div>
    </div>

<div class="wide">

</div>
<?=$this->load->view($page)?>
</body>
				
<script type="text/javascript">
  //initZones('canvas-preview','preview-textfield');
   
  function initZones(canvas_preview,red,ambre,green,total, total_count_category ){
      //alert(total);
	  var strArray_red = red.split("-");
	  var strArray_ambre = ambre.split("-");
	 // alert(strArray_red[0]);
	  var max_red =parseInt(strArray_red[1]);
	  var min_red =parseInt(strArray_red[0]);
	  var max_ambre =parseInt(strArray_ambre[1]);
	  var min_ambre =parseInt(strArray_ambre[0]);
	  var max_green =parseInt(total_count_category);
	  //alert(min_red+"="+max_red+"="+min_ambre+"="+max_ambre+"="+green+"="+30);
	  console.log(strArray_red);
	  console.log(strArray_ambre);
	  console.log(green);
	  //alert(max);
	  
	 //alert(strArray)
   // document.getElementById("class-code-name").innerHTML = "Gauge";
    demoGauge = new Gauge(document.getElementById(canvas_preview));
    var opts = {
      angle: 0,
      lineWidth: 0.2,
      radiusScale:0.9,
      pointer: {
        length: 0.6,
        strokeWidth: 0.05,
        color: '#000000'
      },
      staticLabels: {
        font: "10px sans-serif",
        labels: [min_red,max_red,max_ambre,max_green],
        fractionDigits: 0
      },
      staticZones: [
         {strokeStyle: "#F03E3E", min: min_red, max:max_red },
         {strokeStyle: "#106710", min: max_red, max: max_ambre},
         {strokeStyle: "#FFDD00", min: max_ambre, max: total_count_category}
      ],
      limitMax: false,
      limitMin: false,
      highDpiSupport: true
    };
    demoGauge.setOptions(opts);
    demoGauge.minValue = min_red;
    demoGauge.maxValue = total_count_category;
    demoGauge.set(total);
  };
  
</script>

</html>
