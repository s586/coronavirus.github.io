<style type="text/css">

	html{
		scroll-behavior: smooth;
	}
	
	*{mrgin:0;
	 padding: 0;
	 box-sizing: border-box;
	 font-family: 'muli',sans-serif;
	}
	.nav_style{
		        background-color: #8E44AD ;
	}
	.nav_style a{ color: white; }

	.main_header{
		   height:450px;
		   width: 100%;
	}
	.rightside h1{
		         font-size: 3rem;
	}
	.corona_rotate img{
		animation: gocorona 3s linear infinite;
	}
	@keyframes gocorona{
		0%{transform: rotate(0);}
		100%{transform: rotate(360deg);}
	}
	.corona_rot img{
		animation: gocorona1 3s linear infinite;
	}
	@keyframes gocorona1{
		0%{transform: rotate(0);}
		100%{transform: rotate(360deg);}
	}



<!-- ******** corona apdate ******** ----->

	.corona_update{
		margin:0,0,30px,0;
	}

	.corona_update h3{
		color: #ff7675;
	}
	.corona_update{ font-size: 2rem; 
		text-align: center; }



		/* ******** About section  //////// */

  .sub_section{
  	background-color: #fbfafd;
  }
  .footer_style{
  	background-color: #a29bfe;
  }

  @media(max-width: 768px)
  {

  	.main_header{ height: 700px; text-align: center; }

  	.main_header h1{

  		text-align: center;
  		padding: 0;
  		width: 100px;
  		font-size: 30px;
  	}
  }


</style>