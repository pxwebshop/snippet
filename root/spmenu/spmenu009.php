<?php 
$pageid = "spmenu009";
$scss = "dev/scss/3_project/_spmenu.scss";
$myPath = __FILE__;
$menuOff = true;
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<div class="page-spmenu009__btn">
	<div class="c-icon1 c-icon1--spmenu">
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
		<span class="c-icon1__line"></span>
	</div>
</div>
<div class="c-spmenu009">
	<div class="c-spmenu009__bg"></div>
	<nav class="c-spmenu009__navi">
		<ul>
		    <li><a href="" title="">Lorem ipsum</a></li>
			<li><a href="" title="">Duis vestibulum</a></li>
			<li><a href="" title="">Donec efficitur</a></li>
			<li><a href="" title="">Nunc viverra</a></li>
			<li><a href="" title="">Nulla rutrum</a></li>
			<li><a href="" title="">Aenean fringilla</a></li>
			<li><a href="" title="">Donec pharetra</a></li>
			<li><a href="" title="">Quisque rhoncus</a></li>
		</ul>
	</nav>
</div>
<div style="height: 1280px;background-color: #999"></div>
<script>
	$(function(){
		$('.c-icon1').on('click',function(){
			$(this).toggleClass('is-active');
			$('.c-spmenu009').toggleClass('is-open');
			if ($(this).hasClass("is-active")) {
				$('html,body').css('overflow-y', 'hidden');
				$('.c-spmenu009__bg').removeClass('is-ani');
			} else {
				$('html').css('overflow-y', 'scroll');
				$('body').css('overflow-y', 'auto');
				$('.c-spmenu009__bg').addClass('is-ani');
			}
		});
	});
</script>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>