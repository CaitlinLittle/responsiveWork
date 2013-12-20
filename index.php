<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	body {
		background-color:#DCDBD9;
		color:#2C2C2C;
		font: normal 100% Cambria, Georgia, serif;
	}
	
	#page {
	  margin: 36px auto;
	  width: 90%;
	}
	.blog {
		background-color:white;
	  margin: 0 auto 53px;
	  width: 93.75%; /* 900px / 960px */
	}
	.blog .main {
	 background-color:blue;
	 float: left;
	 width: 62.888889%; /* 566px / 900px */
	}
	.blog .other {
		background-color:red;
	  float: right;
	  width: 36.777778%; /* 331px / 900px */
	}
	
	.lede {
		padding: 0.8em 5.33333333%; /* 48px / 900px */
	}

	h1 {
		font-size: 1.5em; /* 24/16 px */
		font-style:italic;
		font-weight:normal;
	}
	
	h1 a {
		font: bold 0.458333333333333em Calibri, Optima, »
	      Arial, sans-serif;  /* 11px / 24px */
	    color: #747474;
	    letter-spacing: 0.15em;
	    text-transform: uppercase;
	    text-decoration: none;
	}
</style>
<title>Responsive</title>
</head>
<body>
	<div id="page">
			<div class="blog section">
				<h1 class="lede">Recently in <a href="#">The Bot
				Blog</a></h1>
				<div class="main">
					...
				</div><!-- /end .main -->
				<div class="other">
					...
				</div><!-- /end .other -->
			</div><!-- /end .blog.section -->
		</div><!-- /end #page -->
	
</body>
</html>
