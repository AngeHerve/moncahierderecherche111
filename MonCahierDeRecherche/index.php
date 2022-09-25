<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<title>welcome</title>
	<style type="text/css">
		*{
    list-style: none;
    text-decoration: none;
    margin: 0px;
    padding: 0px;
 
}

body{
    box-sizing: border-box;
    background-color: #2071DB;
    overflow-x: hidden;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
		.menu{
    background-color: white;
     color: #F7F6F6;padding: 40px;
     width: 60px;
     margin: auto;
     vertical-align: text-bottom;
     width: 400px;
     line-height: normal;
     display: flex;
     justify-content: center;
     align-items: center;
     border-radius: 10px;
     animation: sup 0.3s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;
}

@keyframes sup {
    0% {
      box-shadow: 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow;
      transform: translateX(0) translateY(0);
    }
    100% {
      box-shadow: -1px 1px yellow, -2px 2px yellow, -3px 3px yellow, -4px 4px yellow, -5px 5px yellow, -6px 6px yellow, -7px 7px yellow, -8px 8px yellow;
      transform: translateX(8px) translateY(-8px);
    }
  }
  .menu:active{
    animation: supe 0.3s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;
  }
  @keyframes supe {
    0% {
        box-shadow: -1px 1px yellow, -2px 2px yellow, -3px 3px yellow, -4px 4px yellow, -5px 5px yellow -6px 6px yellow, -7px 7px #yellow, -8px 8px yellow;
      transform: translateX(8px) translateY(-8px);
      
    }
    100% {
        box-shadow: 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow, 0 0 yellow;
        transform: translateX(0) translateY(0);
    }
  }
 .menu a{
     background-color: blue;
     padding: 10px;
     width: 35%;
     color: white;
     border-radius: 8px;
     user-select: none;
     border: transparent;
     margin: 5px;
     line-height: normal;
     list-style: none;
     transition: .3s ease;
      animation: mouvement 1.5s ease-in-out infinite both; 
 }
 .menu p a{
 	text-decoration: none;
    color: white;
 }
 img{
 display: block;
 margin: auto;
 	border-radius:50%;
 }
 /* #target{
 	margin-left:200px ;
 	font-size: 3rem;
 } */
 h2{
    width:60px;
 	margin: auto;
    margin-bottom:10px;
 	font-size: 2em;
 	width: 450px;
 	height: 70px;
 color:white;
 	text-align: center;
 	padding: 10px;
 }
 b{
    color: white;
 	margin-top: 330px;
 	margin-left: 400px;
 	position: absolute;
 }
	</style>
</head>
<body>
    <div class="container">

 <div class="mousemove"></div>
 <center><h2>Moncahierderecherche</h2></center>
 	<img src="Logo.jpeg" width="200px" height="200px">
 	        <div class="targets">
           
            <h3> <br><span id="target"></span></h3>
        </div>
        <div id="slider">
        <nav>
            <div class="menu">
                <a href="Professeur\prof_connexion.php" target="_blank">Professeur</a>
                <a href="Eleves\eleves_connexion.php" target="_blank">Eleve</a>
            </div>
        </nav> 
    <section>
        
 </div>
</section>
 

		<script type="text/javascript">
			const mousemove = document.querySelector(".mousemove")
const target= document.getElementById("target")

let wordIndex =0;
let letterIndex=0;
 
const createletter =()=>{
    const letter =document.createElement('span');
    target.appendChild(letter)
    letter.classList.add('letter');
    letter.style.animation= 'anim 10s ease forwards';
    letter.textContent=array[wordIndex][letterIndex]

    setTimeout(() => {
        letter.remove();
    }, 3000);
}

const loop = () =>{
    setTimeout(() => {
        if(wordIndex>=array.length){
            wordIndex=0;
            letterIndex=0;
            loop();
        }
       else if(letterIndex < array[wordIndex].length){
           createletter();
           letterIndex++;
           loop();
       }
       else{
        letterIndex =0;
        wordIndex++;
        setTimeout(() => {
            loop();
        }, 3000);
    }

    }, 100);
}
loop();
 
		</script>
        </div> 
</body>
</html>