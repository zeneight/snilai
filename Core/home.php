<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "conn.php";
	$username=$_SESSION['username'];
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Sistem Informasi Manajemen Nilai Akademik</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
        <!--  jquery core -->
        <script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
        
        <!--  checkbox styling script -->
        <script src="js/jquery/ui.core.js" type="text/javascript"></script>
        <script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jspdf.debug.js"></script>
    	
        
    
        <script type="text/javascript">
        function demoFromHTML() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            // source can be HTML-formatted string, or a reference
            // to an actual DOM element from which the text will be scraped.
            source = $('#customers')[0];

            // we support special element handlers. Register them with jQuery-style 
            // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
            // There is no support for any other type of selectors 
            // (class, of compound) at this time.
            specialElementHandlers = {
                // element with id of "bypass" - jQuery style selector
                '#bypassme': function(element, renderer) {
                    // true = "handled elsewhere, bypass text extraction"
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            // all coords and widths are in jsPDF instance's declared units
            // 'inches' in this case
            pdf.fromHTML(
                    source, // HTML string or DOM elem ref.
                    margins.left, // x coord
                    margins.top, {// y coord
                        'width': margins.width, // max width of content on PDF
                        'elementHandlers': specialElementHandlers
                    },
            function(dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Laporan.pdf');
            }
            , margins);
        }
    </script>
        
        <script type="text/javascript">
        $(function(){
            $('input').checkBox();
            $('#toggle-all').click(function(){
            $('#toggle-all').toggleClass('toggle-checked');
            $('#mainform input[type=checkbox]').checkBox('toggle');
            return false;
            });
        });
        </script>  
        
        <![if !IE 7]>
        
        <!--  styled select box script version 1 -->
        <script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect').selectbox({ inputClass: "selectbox_styled" });
        });
        </script>
         
        
        <![endif]>
        
        <!--  styled select box script version 2 --> 
        <script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
            $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
        });
        </script>
        
        <!--  styled select box script version 3 --> 
        <script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
        });
        </script>
        
        <!--  styled file upload script --> 
        <script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
          $(function() {
              $("input.file_1").filestyle({ 
                  image: "images/forms/choose-file.gif",
                  imageheight : 21,
                  imagewidth : 78,
                  width : 310
              });
          });
        </script>
        
        <!-- Custom jquery scripts -->
        <script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
         
        <!-- Tooltips -->
        <script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            $('a.info-tooltip ').tooltip({
                track: true,
                delay: 0,
                fixPNG: true, 
                showURL: false,
                showBody: " - ",
                top: -35,
                left: 5
            });
        });
        </script> 
        
        
        <!--  date picker script -->
        <link rel="stylesheet" href="css/datePicker.css" type="text/css" />
        <script src="js/jquery/date.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
                $(function()
        {
        
        // initialise the "Select date" link
        $('#date-pick')
            .datePicker(
                // associate the link with a date picker
                {
                    createButton:false,
                    startDate:'01/01/2005',
                    endDate:'31/12/2020'
                }
            ).bind(
                // when the link is clicked display the date picker
                'click',
                function()
                {
                    updateSelects($(this).dpGetSelected()[0]);
                    $(this).dpDisplay();
                    return false;
                }
            ).bind(
                // when a date is selected update the SELECTs
                'dateSelected',
                function(e, selectedDate, $td, state)
                {
                    updateSelects(selectedDate);
                }
            ).bind(
                'dpClosed',
                function(e, selected)
                {
                    updateSelects(selected[0]);
                }
            );
            
        var updateSelects = function (selectedDate)
        {
            var selectedDate = new Date(selectedDate);
            $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
            $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
            $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
        }
        // listen for when the selects are changed and update the picker
        $('#d, #m, #y')
            .bind(
                'change',
                function()
                {
                    var d = new Date(
                                $('#y').val(),
                                $('#m').val()-1,
                                $('#d').val()
                            );
                    $('#date-pick').dpSetSelected(d.asString());
                }
            );
        
        // default the position of the selects to today
        var today = new Date();
        updateSelects(today.getTime());
        
        // and update the datePicker to reflect it...
        $('#d').trigger('change');
        });
        </script>
        
        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $(document).pngFix( );
        });
        </script>
    </head>
    
    <body> 
    <!-- Start: page-top-outer -->
    <div id="page-top-outer">    
    
    <!-- Start: page-top -->
    <div id="page-top">
    
        <!-- start logo -->
        <div id="logo">
        <a href=""><img src="images/shared/logo5.png" width="156" height="40" alt="" /></a>
        </div>
        <!-- end logo -->
        
        <!--  start top-search -->
        <div id="top-search">
        </div>
        <!--  end top-search -->
        <div class="clear"></div>
    
    </div>
    <!-- End: page-top -->
    
    </div>
    <!-- End: page-top-outer -->
        
    <div class="clear">&nbsp;</div>
     
    <!--  start nav-outer-repeat................................................................................................. START -->
    <div class="nav-outer-repeat"> 
    <!--  start nav-outer -->
    <div class="nav-outer"> 
    
            <!-- start nav-right -->
            <div id="nav-right">
            
                <div class="nav-divider">&nbsp;</div>
                <div class="nav-divider">&nbsp;</div>
                <a href="logout.php" id="logout" onclick="return confirm('Apakah Anda yakin?')"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
                <div class="clear">&nbsp;</div>
            
                <!--  start account-content -->	
                <div class="account-content">
                <div class="account-drop-inner">
                    <a href="" id="acc-settings">Settings</a>
                    <div class="clear">&nbsp;</div>
                    <div class="acc-line">&nbsp;</div>
                    <a href="" id="acc-inbox">Inbox</a>
                    <div class="clear">&nbsp;</div>
                </div>
                </div>
                <!--  end account-content -->
            
            </div>
            <!-- end nav-right -->
    
    
            <!--  start nav -->
            <div class="nav">
            <div class="table">

    		<?php 
			$domain=$_SESSION['domain'];
			
			if($domain=='admin'){
				include "menu-admin.php";
			}
			
			if($domain=='guru'){
				include "menu-guru.php";
			}
			
			if($domain=='siswa'){
				include "menu-siswa.php";
			}
			
			?>

            <div class="nav-divider">&nbsp;</div>
    
    
            <div class="clear"></div>
            </div>
            <div class="clear"></div>
            </div>
            <!--  start nav -->
    
    </div>
    <div class="clear"></div>
    <!--  start nav-outer -->
    </div>
    <!--  start nav-outer-repeat................................................... END -->
    
      <div class="clear"></div>
     
    <!-- start content-outer ........................................................................................................................START -->
    <div id="content-outer">
    <!-- start content -->
    <div id="content">
    
    	<?php include "content.php"; ?>
        
        <div class="clear">&nbsp;</div>
    
    </div>
    <!--  end content -->
    <div class="clear">&nbsp;</div>
    </div>
    <!--  end content-outer........................................................END -->
    
    <div class="clear">&nbsp;</div>
        
    <!-- start footer -->         
    <div id="footer">
    <!-- <div id="footer-pad">&nbsp;</div> -->
        <!--  start footer-left -->
        <div id="footer-left">
        Admin Skin by Adit.</div>
        <!--  end footer-left -->
        <div class="clear">&nbsp;</div>
    </div>
    <!-- end footer -->
     
    </body>
    </html>
    
<?php
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login');
}
?>	
