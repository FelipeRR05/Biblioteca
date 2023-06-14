<html>
    <head>
        <title>.: Login :.</title>
    
		<style>
			body {
			font-family: Arial;
			font-size: 17px;
			padding: 8px;
			}

			* {
			box-sizing: border-box;
			}

			.row {
			display: -ms-flexbox; /* IE10 */
			display: flex;
			-ms-flex-wrap: wrap; /* IE10 */
			flex-wrap: wrap;
			margin: 0 -16px;
			}

			.col-25 {
			-ms-flex: 25%; /* IE10 */
			flex: 25%;
			}

			.col-50 {
			-ms-flex: 50%; /* IE10 */
			flex: 50%;
			}

			.col-75 {
			-ms-flex: 75%; /* IE10 */
			flex: 75%;
			}

			.col-25,
			.col-50,
			.col-75 {
			padding: 0 16px;
			}

			.container {
			background-color: #f2f2f2;
			padding: 5px 20px 15px 20px;
			border: 1px solid lightgrey;
			border-radius: 3px;
			}

			input{
			width: 100%;
			margin-bottom: 20px;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 3px;
			}

			label {
			margin-bottom: 10px;
			display: block;
			}

			.icon-container {
			margin-bottom: 20px;
			padding: 7px 0;
			font-size: 24px;
			}

			.btn {
			background-color: #04AA6D;
			color: white;
			padding: 12px;
			margin: 10px 0;
			border: none;
			width: 100%;
			border-radius: 3px;
			cursor: pointer;
			font-size: 17px;
			}

			.btn:hover {
			background-color: #45a049;
			}

			a {
			color: #2196F3;
			}

			hr {
			border: 1px solid lightgrey;
			}

			span.price {
			float: right;
			color: grey;
			}

			/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
			@media (max-width: 800px) {
			.row {
				flex-direction: column-reverse;
			}
			.col-25 {
				margin-bottom: 20px;
			}
			}

			.imagemLogo{
				width:8%;
				height:12%;
			}
			
			.tituloSite{
				position:absolute;
				top:22px;
				font-size:44px;
				text-shadow:2px 2px #ff0000;
			}

			
			.myDiv {
			padding: 12px;
			border: 5px outset black;
			background-color: lightgray;    
			text-align: center;
			width:40%;
			height:31%;
			margin-top: 5%;
			}
		</style>
	</head>
	
    <body>
		
	<center>
	<div class="myDiv">
			<form method="post" action="verificaLogin.php" id="formlogin" name="formlogin" >
				<input type="text" name="nome" id="nome" placeholder="E-mail*" size="35">
				<br>
				<input type="password" name="senha" id="senha" placeholder="Senha*" size="35">
				<br>
				<br>
					<input type="submit" value="LOGAR"/>
					<br><br>
					<p> Novo na  <a href="index.php"> CADASTRE-SE </a> </p>
		</div>
				</center>
			</form>
		</div>
	</body>
</html>
