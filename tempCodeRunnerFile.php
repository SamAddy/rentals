<?php
html,body{
	display: grid;
	height: 100%;
	width: 100%;
	place-items: center;
	background: -webkit-linear-gradient(left, #a445b2, #fa4299);
	background-image: url(photos/wall1.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}

	.login
	{
		
	}

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: #fff;
		margin: auto;
		width: 300px;
		padding: 20px;
		padding: 30px;
 	 	border-radius: 5px;
  		box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
	}

	form .field input
	{
		height: 100%;
		width: 100%;
		outline: none;
		padding-left: 15px;
		border-radius: 5px;
		border: 1px solid lightgrey;
		border-bottom-width: 2px;
		font-size: 17px;
		transition: all 0.3s ease;
	}

	form .pass-link
	{
		margin: 10px;
	}

	form .signup-link
	{
		text-align: center;
 	 	margin-top: 30px;
	}

	form .pass-link a,
	form .signup-link a
	{
		color: #fa4299;
  		text-decoration: none;
	}

	.pass-link a:hover
	{
		text-decoration: underline;
	}

	form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}

form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}

form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}