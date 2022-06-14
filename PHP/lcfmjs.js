// JavaScript Document

var menu = new Array();
menu[0]="<ul><li>Analyse de l'eau</li><li>Potabilité</li></ul>";

var liste;

var ancIndex=-1;
var ancLigne="";

function init()
{
	liste=document.getElementById("menu").getElementsByTagName("Li");
}

function debut(i)
{	
			if (ancIndex>=0)
			{
				liste[ancIndex].innerHTML=ancLigne;
			}
			ancLigne=liste[i].innerHTML
			ancIndex=i;
			liste[i].innerHTML+=menu[i];
}