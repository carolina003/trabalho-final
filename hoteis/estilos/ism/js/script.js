

(function($) {
	"use strict";

	/*
	 * Customly Styled Select input field
	 */
	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx(el);
	} );

	/*
	 * On Parallax for .parallax class
	 */
	$('.parallax').parallax("50%", 0.2);

	
	/*
	 * Custom Data Fixed
	 */
	$('.beactive').addClass('active');
	$('.beactive').removeClass('beactive');

	
	
	
	/*
	 * Main Menu dropdown at Hover
	 */
	if ($(window).width() >= 768) {
		$('.dropdown').hover(
			function () {
				$(this).addClass('open');
			},
			function() {
				$(this).removeClass('open');
			}
		);
	}

	$(window).resize(function () {
		if ($(window).width() >= 768) {
			$('.dropdown').hover(
				function () {
					$(this).addClass('open');
				},
				function() {
					$(this).removeClass('open');
				}
			);
		}
	});


	

	

	/*
	 * Room Search form Check in and out Datepicker
	 */
	$('.input-group.check-in').datepicker({
		startDate: "dateToday",
		autoclose: true
	});

	$('.input-group.check-in').on('hide', function (e) {


		if (e.dates.length) {
			var strDate = e.date;
			strDate.setDate(strDate.getDate() + 1);

			// $('.check-out').datepicker('clearDates');
			$('.check-out').datepicker('setStartDate', strDate);
		}

		$(e.currentTarget).removeClass('focus');
		
	});

	$('.input-group.check-in').on('show', function (e) {

		$(e.currentTarget).addClass('focus');
		
	});

	$('.input-group.check-out').on('show', function (e) {

		$(e.currentTarget).addClass('focus');
		
	});

	$('.input-group.check-out').on('hide', function (e) {

		$(e.currentTarget).removeClass('focus');
		
	});

	$('.input-group.check-in').on('changeDate', function (e) {

		if (e.dates.length) {
			var inDate = e.date,
				outDate = $('.check-out').datepicker('getDate');

			if (outDate && inDate >= outDate) {
				$('.check-out').datepicker('clearDates');
			}

		} else {
			$('.check-out').datepicker('clearDates');
		}
	});

	$('.input-group.check-out').datepicker({
		startDate: "dateToday",
		autoclose: true
	});


	// Sticky Header
	$(window).ready(function () {
		sticky_check(this);
	});
	$(window).scroll(function() {
		sticky_check(this);
	});

	$(window).resize(function() {
		sticky_check(this);
	});

	function sticky_check ($this) {
		if ($(window).width() >= 767) {
			if ($($this).scrollTop() > 150){
				if (!$('.sticky-on-fixed').length && !$('.header.sticky').hasClass('transp') ) {
					$('body').prepend('<div class="sticky-on-fixed" style="height:'+$('.header.sticky').height()+'px"></div>');
				};
				
				$('.header.sticky').addClass("sticky-on");
			}
			else{
				$('.header.sticky').removeClass("sticky-on");

				$('.sticky-on-fixed').remove();
			}
		} else {
			$('.header.sticky').removeClass("sticky-on");
			$('.sticky-on-fixed').remove();
		}
	}
	
	

})(jQuery);

$(window).load(function () {
	
});

/*
 * Preloader
 */
$(window).load(function () {
	$('.preloader').fadeOut("slow");
});


function GoBack()
{
	history.back();
}

function SuggestLocation(obj)
{
	if(obj.id=="book_location")
    {
		RequestSuggestions(obj.value,"location","","en")
	}
}


function SuggestWord(obj,s_type,lang="en")
{
	RequestWordSuggestions(obj.value,"word","",lang,s_type)
}


function RequestWordSuggestions(selected_location,type,selected_value,lang,s_type)
{
	lang = typeof lang !== 'undefined' ? lang : "en";
	
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			FillWordSuggestions(xmlhttp.responseText,type,selected_value,selected_location,lang);
		}
	}
	
	xmlhttp.open("GET","include/suggest_"+type+"2.php?q="+selected_location+"&lang="+lang+"&type="+s_type,true);
	xmlhttp.send(null);

}

function RequestSuggestions(selected_location,type,selected_value,lang)
{
	lang = typeof lang !== 'undefined' ? lang : "en";
	
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			FillSuggestions(xmlhttp.responseText,type,selected_value,selected_location,lang);
		}
	}
	
	xmlhttp.open("GET","include/suggest_"+type+"2.php?q="+selected_location+"&lang="+lang,true);
	xmlhttp.send(null);

}


function clear_selections()
{
	document.getElementById("word_suggest").style.display="none";
}

function FillSuggestions(text,type,selected_value,selected_location,lang)
{
	
	if(text!="" && text!="no suggestion")
	{
		lang = typeof lang !== 'undefined' ? lang : "en";
		
		
		var new_html="";
		var splitArray = text.split("~");

		var j = 0;
	
		var suggest_html="";
		
		for(j = 0; j < splitArray.length; j++)
		{
			var location = splitArray[j].split("#");
		
			if(location[0]=="no suggestion"||location[1]=="no suggestion"||location[0]=="")
			continue;
			
			suggest_html+='<a class="dropdown-item" href="javascript:SelectLocation(\''+location[0]+'\',\''+location[1]+'\')">'+location[1]+'</a>';
		
		}
				
		document.getElementById(type+"_suggest").innerHTML=suggest_html;
		document.getElementById(type+"_suggest").style.display="block";
		
	}
}

function SelectLocation(location_id,location_name)
{
	document.getElementById("location").value=location_id;
	document.getElementById("book_location").value=location_name;
	document.getElementById("location_suggest").style.display="none";
}

function SelectWord(word)
{
	document.getElementById("job_title").value=word;
	document.getElementById("word_suggest").style.display="none";
}




function sub_loc_select(x,field_name,suggest_url)
{
	if(x=="") return;
	
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			show_sub_locs(xmlhttp.responseText,x,field_name,suggest_url);
		}
	}
	
	if(suggest_url.indexOf("lang=") !=-1)
	{
		xmlhttp.open("GET",suggest_url+"&location="+x+"&q=",true);
	}
	else
	{
		xmlhttp.open("GET",suggest_url+"?location="+x+"&q=",true);
	}	
	xmlhttp.send(null);
	
	
}
var up_html = new Array();
var i_last_level = -1;
function show_sub_locs(text,x,field_name,suggest_url)
{
	var i_level = (x.split(".").length - 1);

	for(i=i_level;i<=4;i++)
	{
		document.getElementById("s_"+field_name+"_"+i).innerHTML="";	
	}
	
	var new_html="";
	var splitArray = text.split("~");

	var j = 0;
	for(j = 0; j < splitArray.length; j++)
	{
		var location = splitArray[j].split("#");
		 
		if(location[0]=="no suggestion")
		{
			
			
		}
		else
		{
			new_html += "<option value=\""+location[1]+"\">"+location[0]+"</option>";
		}
	}
	
	if(new_html!="")
	{
		new_html ='<select '+(field_name=="category_1"?'required':'')+' onChange="sub_loc_select(this.value,\''+field_name+'\',\''+suggest_url+'\')" type="text" class="form-control input-sm" id="'+field_name+'_'+(i_level+1)+'" name="'+field_name+'_'+(i_level+1)+'">'
		+'<option value="">'+m_all+'</option>'+new_html+'</select>';
		document.getElementById("s_"+field_name+"_"+i_level).innerHTML=new_html;
	}
	
	i_last_level = i_level
}	



function ShowHide(div_name)
{

	if(document.getElementById(div_name).style.display=="block")
	{
		document.getElementById(div_name).style.display="none";
	}
	else
	{
		document.getElementById(div_name).style.display="block";
	}

}



function number_format (number, decimals, dec_point, thousands_sep) {
   
   number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
   
   s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}