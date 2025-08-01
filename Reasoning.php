<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
        
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');

*
{
	margin: 0;
	padding: 0;
}

body
{
	font-family: 'Lato', sans-serif;
	font-size: 14px;
	color: #999999;
	word-wrap:break-word;
}

p
{
	margin: 0 0 10px;
}

ul
{
	list-style: none;
}

.container {
	width: 100%;
	margin: auto;
	font-weight: 900;
	text-transform: uppercase;
	text-align: center;
	padding: 0 0 200px;
}

/*.take-input {
  margin: 50px 0 0;
}

.take-input input {
  width: 400px;
  height: 35px;
  padding: 0 10px;
  border-radius: 5px;
  border: 1px solid #ececec;
  margin: 0 15px 0 0;
  font-size: 15px;
}*/

a, a:link, a:visited {
  text-decoration: none;
  padding: 9px 15px;
  border: 1px solid #ececec;
  border-radius: 5px;
  color: gray;
}

.animate {
	font-size: 80px;
	border-bottom: 2px solid #ccc;
    margin-left: 80px;
        margin-top: 150px;
}

.animate span {
	display: inline-block;
}

a.repeat {
  display: inline-block;
  font-size: 12px;
  text-transform: none;
  text-decoration: none;
  color: orange;
  padding: 5px 12px;
  border: 1px solid rgba(0, 0, 0, 0.15);
  font-weight: normal;
  margin: 0 0 0 50px;
  border-radius: 3px;
  position: relative;
  bottom: 15px;
}

a.repeat:hover {
  background: rgba(0, 0, 0, 0.7);
  color: white;
}

.animate span:nth-of-type(2) {
	animation-delay: .05s;
}
.animate span:nth-of-type(3) {
	animation-delay: .1s;
}
.animate span:nth-of-type(4) {
	animation-delay: .15s;
}
.animate span:nth-of-type(5) {
	animation-delay: .2s;
}
.animate span:nth-of-type(6) {
	animation-delay: .25s;
}
.animate span:nth-of-type(7) {
	animation-delay: .3s;
}
.animate span:nth-of-type(8) {
	animation-delay: .35s;
}
.animate span:nth-of-type(9) {
	animation-delay: .4s;
}
.animate span:nth-of-type(10) {
	animation-delay: .45s;
}
.animate span:nth-of-type(11) {
	animation-delay: .5s;
}
.animate span:nth-of-type(12) {
	animation-delay: .55s;
}
.animate span:nth-of-type(13) {
	animation-delay: .6s;
}
.animate span:nth-of-type(14) {
	animation-delay: .65s;
}
.animate span:nth-of-type(15) {
	animation-delay: .7s;
}
.animate span:nth-of-type(16) {
	animation-delay: .75s;
}
.animate span:nth-of-type(17) {
	animation-delay: .8s;
}
.animate span:nth-of-type(18) {
	animation-delay: .85s;
}
.animate span:nth-of-type(19) {
	animation-delay: .9s;
}
.animate span:nth-of-type(20) {
	animation-delay: .95s;
}

            .four span {
	color: #8d6a00;
	opacity: 0;
	transform: translate(0, -100px) rotate(360deg) scale(0);
	animation: revolveDrop .3s forwards;
}


@keyframes revolveDrop {
	30% {
		transform: translate(0, -50px) rotate(180deg) scale(1);
	}

	60% {
		transform: translate(0, 20px) scale(.8) rotate(0deg);
	}

	100% {
		transform: translate(0) scale(1) rotate(0deg);
		opacity: 1;
	}
}


        </style>
</head>
<body>
    
    <div class="animate four">
			<span>C</span><span>o</span><span>o</span><span>m</span><span>i</span><span>n</span><span>g</span>&nbsp;
            <span>S</span><span>o</span><span>o</span><span>n</span>
      		</div>
</body>
</html>