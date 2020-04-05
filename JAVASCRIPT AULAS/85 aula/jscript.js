var diryJ,dirxJ,jog,velJ,pjx,pjy;
var velT;
var tamTelaW,tamTelaH;
var jogo;
var frames;
var contBombas,painelContBombas,velB,tmpCriaBomba;
var bomasTotal;
var vidaPlaneta;
var ie,isom;

function teclaDw() {
	var tecla=event.keyCode;
	if (tecla == 38) { // cima
		diryJ=-1;
	} else if (tecla == 40) { // baixo
		diryJ=1;
	} else if (tecla == 37) { // esquerda
		dirxJ=-1;
	} else if (tecla == 39) { // direita
		dirxJ=1;
	} else if (tecla == 32) { // espaço // tiro 
		dirxJ=1;
		atira(pjx+17,pjy);
	}  
}

function teclaUp() {
	var tecla=event.keyCode;
	if ((tecla == 38)||(tecla == 40)) { // 
		diryJ=0;
	}
	if ((tecla == 37)||(tecla == 39)) { // 
		dirxJ=0;
	} 
}

function criaBomba() {
	if (jogo) {
		var y=0;
		var x=Math.random()*tamTelaW;
		var bomba=document.createElement("div");
		var att1=document.createAttribute("class");
		var att2=document.createAttribute("style");
		att1.value="bomba";
		att2.value="top:"+y+"px;left:"+x+"px;";
		bomba.setAttributeNode(att1);
		bomba.setAttributeNode(att2);
		document.body.appendChild(bomba);
		contBombas--; 
	}
}

function controlaBomba() {
	bombasTotal=document.getElementByClassName("bomba");
	var tam=bomasTotal.length;
	for (var i = 0; i < tam; i++) {
		if (bomasTotal[i]) {
			var pi=bomasTotal[i].offsetTop;
			pi+=velB;
			bomasTotal[i].style.top=pi+"px";
			if (pi>tamTelaH) {
				vidaPlaneta-=10;
				criaExplosao(2,bombasTotal[i].offsetLef,null);
				bombasTotal[i].remove();
			}
		}
	}
}

function atira(x,y) {
	var t=document.createElement("div");
	var att1=document.createAttribute("class");
	var att2=document.createAttribute("style");
	att1.value="tiroJog";
	att2.value="top:"+y+"px;left:"+x+"px";
	t.setAttributeNode(att1);
	t.setAttributeNode(att2);
	document.body.appendChild(t);
}

function controleTiros() {
	var tiros=document.getElementByClassName("tiroJog");
	var tam=tiros.length;
	for (var i = 0; i < tam; i++) {
		if (tiros[i]) {
			var pt=tiros[i].offsetTop;
			pt-=velT;
			tiros[i].style.top=pt+"px";
			colisaoTiroBomba(tiros[i]);
			if (pt<0) {
				//document.body.removeChild(tiros[i]);
				tiros[i].remove();
			}
		} 		
	}
}

function colisaoTiroBomba(tiro) {
	var tam=bombasTotal.length;
	for (var i = 0; i < tam; i++) {
		if (bombasTotal[i]) {
			if (
				(
					(tiro.offsetTop<=(bombasTotal[i].offsetTop+40))&&// cima tiro com baixo bomba 
					((tiro.offsetTop+6)>=(bombasTotal[i].offsetTop)) // baixo tiro com cima bomba
				)
				&&
				(
					(tiro.offsetLeft<=(bombasTotal[i].offsetLeft+24))&& // esuqerda tiro com direita bomba 
					((tiro.offsetLeft+6)>=(bombasTotal[i].offsetLeft))  // direita do tiro com esuqerda da bomba
				)
			) {
				criaExplosao(1,bombasTotal[i].offsetLef-25,bombasTotal[i].offsetTop);
				bombasTotal[i].remove();
				tiro.remove();
			}
		}
	}
}

function criaExplosao(tipo,x,y) { //tipo 1=Ar, 2=terra
	if (document.getElementById("explosao"+(ie-5))) {
		document.getElementById("explosao"+(ie-5)).remove();
	} 
	var explosao=document.createElement("div");
	var img=document.createElement("img");
	var som=document.createElement("audio");
	// Atributos para div
	var att1=document.createAttribute("class");
	var att2=document.createAttribute("style");
	var att3=document.createAttribute("id");
	// Atributo para a imagem
	var att4=document.createAttribute("src");
	// Atributos para audio
	var att5=document.createAttribute("src");
	var att6=document.createAttribute("id");

	att3.value="explosao"+ie;
	if (tipo==1) {
		att1.value="explosaoAr";
		att2.value="top:"+y+"px:left"+x+"px;";
		att4.value="explosao_ar.gif?"+new Date();
	} else {
		att1.value="explosaoChao";
		att2.value="top:"+(tamTelaH-57)+"px:left"+(x-17)+"px;";
		att4.value="explosao_chao.gif?"+new Date();
	}
	att5.value="exp1.mp3?"+new Date();
	att6.value="som"+isom;
	explosao.setAttributeNode(att1);
	explosao.setAttributeNode(att2);
	explosao.setAttributeNode(att3);
	img.setAttributeNode(att4);
	som.setAttributeNode(att5);
	som.setAttributeNode(att6);
	explosao.appendChild(img);
	explosao.appendChild(som);
	document.body.appendChild(explosao);
	document.getElementById("som"+isom).play();
	ie++;
	isom++;

}

function controlaJogador() {
	pjy+=diryJ*velJ;
	pjx+=dirxJ*velJ;
	jog.style.top=pjy+"px";
	jog.style.left=pjx+"px";
}

function gameLoop() {
	if (jogo) {
		// funções de controle
		controlaJogador();
		controleTiros();
		controlaBomba();
	} 
	frames=requestAnimationFrame(gameLoop);
}

function inicia() {
	jogo=true;

	// ini tela
	tamTelaH=window.innerHeight;
	tamTelaW=window.innerWidth;

	// ini jogador
	dirxJ=diryJ=0;
	pjx=tamTelaW/2;
	pjy=tamTelaH/2;
	velJ=velT=5;
	jog=document.getElementById("naveJog");
	jog.style.top=pjy+"px";
	jog.style.left=pjx+"px";

	// Controle das Bombas
	clearInterval(tmpCriaBomba);
	contBombas=150;
	velB=3;
	tmpCriaBomba=setInterval(criaBomba,1700);

	// Controles do planeta
	vidaPlaneta=300;

	// Controles de explosão 
	ie=isom=0;

	gameLoop();
}

window.addEventListener("load",inicia);
document.addEventListener("keydown",teclaDw);
document.addEventListener("keyup",teclaUp);