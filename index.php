<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- CSS/LESS -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" />
<link rel="stylesheet" type="text/css" href="css/fontello.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:,400,300,600' rel='stylesheet' type='text/css'>
<!--
<link rel="stylesheet" href="css/farbtastic.css" type="text/css" />
-->
<!-- JS -->
<script type="text/javascript" src="js/jquery.min.js"></script><!-- JQUERY -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script><!-- JQUERY -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script><!-- JQUERY -->
<script src="js/custom.js" type="text/javascript"></script><!-- CUSTOM JS -->
<!--
<script type="text/javascript" src="js/farbtastic.js"></script>
-->
		<title>Jo Baka Online Creator</title>
<meta name="keywords" content="Jo Baka Meme Generator, Jo Baka Generator , Jo Baka Creator,Jo Baka Meme Creator, Jo Baka Meme , Jo Baka Meme download, Jo Baka Troll Generator, Jo Baka comments Generator,
 Jo Baka Comments">
		<meta name="description" content="Get Daily Dose of JoBaka Facts ! Get Simple, Hilarious Gujju Rules, Thoughts, Talks & Jokes in Single Line Punches. Jo Baka Like & Share To Karvu Pade !
Enjoy Jo Baka Meme Generator.">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		
		<script>
		$(document).bind('ready',function(){
			var isCreating=false;
			var startIndex = 1;
			$('.please_wait').hide();
			$('#createMeme').click(function(){
				//alert("clcdsfads");
				if(isCreating){
					//console.log('Retufn false');
					return false;
				}
				var mText = jQuery.trim( $('#mText').val() ) ;
				var mTag = jQuery.trim( $('#mTag').val() ) ;
				if( mTag.length <= 0){
					alert("Jo Baka.. Title to Lakhvu J Padse.");
				}else if( mTag.length > 20){
					alert("Jo Baka.. Title Ma Vartaa Nai Lakhwani.");
				}
				else if( mText.length <= 0){
					alert("Jo Baka.. Majak Karvi Hoi To Ghare Revanu.");
				}
				else if( mText.length > 100){
					alert("Jo Baka.. Varta Nai Lakhwani.");
				}else{
					$(this).val('Please Wait');
					$('.jb_wait').fadeIn();
					var formData = $('#memeFrom').serialize();
					//console.log("formData=>"+formData);
					var ajaxData = "action=createJoBakaMeme&"+formData;
					//console.log("ajaxData=>"+ajaxData);
					isCreating=true;
					//console.log('is going');
					jQuery.ajax({
						url:       	"http://www.jobaka.co/operation.php",       
						type:     	"POST",     
						dataType :  "json",    
						data:		ajaxData,
						success: function(res){
							$('#createMeme').val('Create');
							//console.log(JSON.stringify(res));
							var imgPath = 'http://www.jobaka.co/uploads/jobaka/'+res['mImageName'];
							//console.log("imgPath=>"+imgPath);
							jQuery('#jb_preview_image').attr('src',imgPath).load(function(){
								$('.jb_wait').fadeOut();
								$('.mobile_download_link').fadeIn();
								$('.jb_download, .jb_share').fadeIn().css('display','inline-block');
								$('.jb_download').attr('href' , imgPath );
								//$('.short_link').html('http://www.jobaka.co/u/'+res.mSURL);
								isCreating=false;
							});
						}
							
					});
					
				}
				return false;
			});
			
			
			$('#loadMore').click(function(){
				//console.log("startIndex [loadMore]"+startIndex);
				var ajaxData = "action=loadMeme&startIndex="+startIndex;
				$('.please_wait').show();
				jQuery.ajax({
					url:       	"http://www.jobaka.co/operation.php",       
					type:     	"POST",     
					dataType :  "json",    
					data:		ajaxData,
					success: function(res){
						//console.log("res=>"+res.length);
						if(res.length > 0 ){
							var dataHTML = '';
							$.each(res, function(i, v) {		
								dataHTML 	+= 	'<li><div class="jb_overlay"></div><div class="baka_image">';
								dataHTML 	+=	'<img src="http://www.jobaka.co/uploads/jobaka/'+v['mImageName']+'">';
								dataHTML 	+=	'</div><div class="jb_options">';
								dataHTML 	+=	'<a class="button jb_download" href="http://www.jobaka.co/uploads/jobaka/'+v['mImageName']+'">Download</a>';
								dataHTML 	+=	'</div>';
								dataHTML 	+=	'</li>';
							});
							var html = $(dataHTML);
							$('.baka_list').append(html);
							startIndex++;	
							$('.please_wait').hide();
						}
						if(res.length == 0 ){
							$('.zeroResult').show();
							$('#loadMore').hide();
							$('.noMoreResult').hide();
							$('.please_wait').hide();
						}else if(res.length < 8){
							$('.zeroResult').hide();
							$('#loadMore').hide();
							$('.noMoreResult').show();
							$('.please_wait').hide();
						}
					}
				});	
				
				//console.log("startIndex [after]"+startIndex);
			});
			
			$('.toon_list li').click(function(){
				$this = $(this);
				$('#mImageType').val($this.data('imagetype'));
				$('#mTag').val($this.data('tag'));
				$this.addClass('active').siblings().removeClass('active');
			});

			
		});
		
		
		</script>
		
		

    </head>
    <body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '358267837662162',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
   
        <!--content:starts-->
        <div class="content">
            
            <!--header:starts-->
            
            <!--header:ends-->
            
            <!--header:starts-->
            <div class="header">
				<div class="width900">
					<div class="header-left">
					
					</div>
					<div class="header-right">
						
						
					</div>
				</div>
				
			</div>
            <!--header:ends-->
			
            <div class="clear"></div>

            <!--container:starts-->
            <div class="container">
				<div class="index common_container">
   				<div class="main_title">
					Jo Baka Meme Creator
				</div>
					
				
				<div class="jb_container">
					
					<div class="jb_form">
						<form id="memeFrom">
							<ul class="form_fields">
						
							   <li> 
									<input type="text" class="jb_input" value="Jo Baka" name="mTag" id="mTag" maxlength="12">
									<input type="hidden" class="jb_input"  name="mImageType" id="mImageType" value="1" >
							   </li>
							   <li class="clear">
								   <ul class="toon_list clear">
									   <li class="active" data-imagetype="1" data-tag = "Jo Baka" ><img src="img/bako.png" >
										<div style="font-weight:bold; text-align:center">JO BAKA</div>
									   </li>
									   <li data-imagetype="2" data-tag = "Jo Bakudi"><img  src="img/bakudi.png">
										<div style="font-weight:bold; text-align:center">JO BAKUDI</div>
									   </li>
									   <li data-imagetype="3" data-tag = "Jo Bhura"><img  src="img/bhuro.png">
										<div style="font-weight:bold; text-align:center">JO BHURA</div>
									   </li>
									   <li data-imagetype="4" data-tag = "Jo Raavan" ><img src="img/raavan.png" >
										<div style="font-weight:bold; text-align:center">JO RAAVAN</div>
									   </li>
								   </ul>
							   </li>
							  
							   <li>
									<input type="text" class="jb_input" placeholder="Write Your Text." name="mText" id="mText">
							   </li>
					
							  
							
							   <li>
									<input type="submit" class="button jb_submit" value="Create" id="createMeme" >
									<a href="#nogo" class="button jb_submit jb_download hide">Download</a>
							   </li>
							   
							<li>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- JoBaka - 336 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-7703653472321146"
     data-ad-slot="3626662252"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></li>							
					   		</ul>
						</form>
					</div>
					
					<div class="jb_right">
						<div class="jb_preview_container">
							<div class="jb_preview">
								<img src="http://jobaka.co/images/preview_here.jpg" class="jb_download" id="jb_preview_image">
							</div>
							<div class="jb_wait">
								<img src="http://jobaka.co/images/wait.jpg">
							</div>
						</div>
						
						<ul class="share_box">
							<li>
								
								<div class="fb-like-box" data-href="https://www.facebook.com/jobakaissocial" data-width="388" data-height="210" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
							</li>

						</ul>
					</div>
				</div>
				<div class="clear"></div>	
				<div class="below_ad">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- JoBaka-728 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7703653472321146"
     data-ad-slot="2149929051"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
			</div> <!--ads end-->
			</div>
			<!--container:ends-->
			</div>
			
			<div class="footer">
				<div class="width900">
					
				  </div>
			</div>
			
				
		</div>
        <!--content:ends-->
      
    </body>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55209345-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
