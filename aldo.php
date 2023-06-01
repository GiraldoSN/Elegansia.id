<?php
$nama_file = 'react.svg';
$lokasi_file = 'http://localhost/Projek%20Akhir/aldo.php/';

// Menggabungkan nama file dengan lokasi file
$path_gambar = $lokasi_file . $nama_file;
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Aldo Nainggolan" />
    <meta name="description" content="Developer Front-end e UI Designer." />
    <meta
      name="keywords"
      content="sites, web, desenvolvimento, frontend, aldo nainggolan, ui designer, programmer, aldo, front-end, designer, ui, stevanus, freelancer, freela, website, portfolio"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#6610F2" />
    <meta name="copyright" content="Aldo 2022" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta
      property="og:image"
     
    />
    <meta
      property="og:title"
      content="Aldo Nainggolan - Developer Front-end e UI Designer"
    />
    <meta
      property="og:description"
      content="Developer Front-end e UI Designer."
    />
    <title>Aldo Nainggolan - Front-end & UI Designer</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link
      rel="shortcut icon"
      href="aktif/gambar/icon-browser.svg"
      type="image/x-icon"
    />
    <link rel="apple-touch-icon" href="aktif/gambar/icon-browser.svg" />
    <link rel="canonical" href="https://www.blogger.com/u/1/blog/post/edit/5076404309638538989/6970501826978350715" />
  </head>

  <style>
    @font-face {
  font-family: "Circular Std";
  src: local("Circular Std Medium"), local("Circular-Std-Medium"), url("../fonts/CircularStd.ttf") format("woff2");
  font-weight: 500;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: "Circular Std Book";
  src: local("Circular Std Book"), local("Circular-Std-Book"), url("../fonts/CircularStd-Book.ttf") format("woff2");
  font-style: normal;
  font-display: swap;
}
* {
  padding: 0;
  margin: 0;
  font-family: "Circular Std";
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}

*,
::before,
::after {
  box-sizing: border-box;
}

ul,
ol {
  list-style: none;
  margin: 0;
  padding: 0;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

p,
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
}

button,
input {
  border: 0;
  font-family: "Circular Std";
}
button:focus,
input:focus {
  border: 0;
}

body {
  font-family: "Circular Std";
  background-color: #fefbfb;
}

html {
  scroll-behavior: smooth;
  font-size: 62.5%;
}

::-webkit-scrollbar {
  width: 12px;
}

::-webkit-scrollbar-track {
  background-color: #131219;
}

::-webkit-scrollbar-thumb {
  background-color: #6610f2;
  border-radius: 8px;
}

header {
  background-color: #17161d;
  z-index: 999;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
}
header .larguraMaxContainer nav {
  padding: 0px 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 10vh;
}
@media screen and (max-width: 1024px) {
  header .larguraMaxContainer nav {
    padding: 0px 25px;
  }
}
header .larguraMaxContainer nav img {
  width: 150px;
}
header .larguraMaxContainer nav .nav-list {
  list-style: none;
  display: flex;
}
header .larguraMaxContainer nav .nav-list li {
  margin-left: 50px;
}
header .larguraMaxContainer nav .nav-list li a {
  color: #c9c9c9;
  font-size: 2rem;
  position: relative;
  font-family: "Circular Std Book";
}
header .larguraMaxContainer nav .nav-list li a::after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 1px;
  bottom: -7px;
  left: 0;
  background: linear-gradient(270deg, #6610f2 0%, #17161d 100%);
  transform-origin: bottom right;
  transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
}
header .larguraMaxContainer nav .nav-list li a:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
header .larguraMaxContainer nav .nav-list li a:hover {
  color: #fefbfb;
}

.mobile-menu {
  display: none;
  cursor: pointer;
}
.mobile-menu div {
  width: 32px;
  height: 2px;
  background-color: #fefbfb;
  margin: 8px;
  transition: 0.3s;
}

.nav-list.active {
  visibility: initial;
  transition: 1s all ease;
}

@keyframes navLinkFade {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
.mobile-menu.active .line1 {
  transform: rotate(-45deg) translate(-8px, 8px);
}

.mobile-menu.active .line2 {
  opacity: 0;
}

.mobile-menu.active .line3 {
  transform: rotate(45deg) translate(-5px, -7px);
}

@media screen and (max-width: 1024px) {
  body {
    overflow-x: hidden;
  }
  .nav-list {
    text-align: center;
    position: absolute;
    top: 10vh;
    right: 0;
    width: 100vw;
    height: 100vh;
    z-index: 999;
    background-color: #17161d;
    flex-direction: column;
    padding-top: 100px;
    visibility: hidden;
  }
  header .larguraMaxContainer nav .nav-list li {
    opacity: 0;
    margin: 0px 0px 50px 0px;
  }
  header .larguraMaxContainer nav .nav-list li a {
    font-size: 2.4rem;
  }
  .mobile-menu {
    display: block;
  }
}
.maquina-escrever:after {
  content: "|";
  margin-left: 5px;
  opacity: 1;
  animation: pisca 1s infinite;
  color: #6610f2;
}

@keyframes pisca {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
}
.larguraMaxContainer {
  max-width: 1140px;
  margin: 0 auto;
}

main #apresentacaoPortfolio {
  background-color: #131219;
  position: relative;
}
@media screen and (max-width: 1024px) {
  main #apresentacaoPortfolio {
    padding: 0px 20px;
  }
}
main #apresentacaoPortfolio .larguraMaxContainer {
  display: flex;
  align-items: center;
  height: 90vh;
  overflow: hidden;
  width: 100%;
  padding: 0px 50px;
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto {
  width: 60%;
  flex-direction: column;
}
@media screen and (max-width: 1024px) {
  main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    text-align: center;
    padding: 0px;
  }
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto h2 {
  color: #fefbfb;
  font-size: 2.4rem;
  font-weight: 500;
  font-family: "Circular Std Book";
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto h2 #nome {
  font-size: 5.4rem;
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto h2 .maquina-escrever {
  font-family: "Circular Std Book";
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto a {
  background: linear-gradient(225deg, rgba(102, 16, 242, 0.3) 0%, rgba(102, 16, 242, 0) 100%);
  color: #fefbfb;
  -webkit-backdrop-filter: blur(10px);
          backdrop-filter: blur(10px);
  padding: 15px 30px;
  max-width: 250px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 4px;
  border: 1px solid rgba(102, 16, 242, 0.5);
  transition: all 0.7s ease;
  margin-top: 30px;
  font-size: 18px;
  font-weight: 500;
  font-family: "Circular Std Book";
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoTexto a:hover {
  padding: 15px 45px;
  cursor: pointer;
  max-width: 280px;
  background: linear-gradient(225deg, rgba(102, 16, 242, 0.6) 0%, rgba(102, 16, 242, 0) 100%);
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoFoto {
  width: 40%;
  height: 100vh;
}
@media screen and (max-width: 1024px) {
  main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoFoto {
    display: none;
  }
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoFoto #fundo {
  width: 100%;
  max-width: 600px;
  position: absolute;
  top: 10vh;
  right: 0;
}
@media screen and (max-width: 1024px) {
  main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoFoto #fundo {
    display: none;
  }
}
main #apresentacaoPortfolio .larguraMaxContainer #apresentacaoFoto .object {
  animation: MoveUpDown 2s linear infinite;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 4;
  max-width: 550px;
  width: 100%;
}
@keyframes MoveUpDown {
  0%, 100% {
    top: 0;
  }
  50% {
    top: 10px;
  }
}
main #apresentacaoPortfolio .mouse {
  width: 70px;
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translate(-50%, 0%);
}
main #sobre {
  background-color: #17161d;
}
main #sobre .larguraMaxContainer {
  padding: 100px 50px;
}
@media screen and (max-width: 1024px) {
  main #sobre .larguraMaxContainer {
    padding: 50px 20px;
  }
}
main #sobre .larguraMaxContainer #sobreMim {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
main #sobre .larguraMaxContainer #sobreFoto {
  width: 50%;
  padding-right: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  transition: 1s all ease;
}
main #sobre .larguraMaxContainer #sobreFoto #iuricode {
  width: 400px;
}
main #sobre .larguraMaxContainer #sobreFoto:hover {
  transform: scale(1.1);
}
main #sobre .larguraMaxContainer #sobreFoto div {
  display: flex;
  align-items: center;
  justify-content: center;
}
main #sobre .larguraMaxContainer #sobreFoto div img {
  width: 45px;
}
main #sobre .larguraMaxContainer #sobreFoto #figura1 {
  position: absolute;
  top: 40px;
  right: 430px;
  background-color: #131219;
  border-radius: 10px;
  width: 75px;
  height: 75px;
}
main #sobre .larguraMaxContainer #sobreFoto #figura2 {
  position: absolute;
  top: 100px;
  right: 150px;
  background-color: #131219;
  border-radius: 10px;
  width: 75px;
  height: 75px;
}
main #sobre .larguraMaxContainer #sobreFoto #figura3 {
  position: absolute;
  top: 250px;
  right: 450px;
  background-color: #131219;
  border-radius: 10px;
  width: 75px;
  height: 75px;
}
main #sobre .larguraMaxContainer #sobreFoto .icon1 {
  animation: icon-move 3s ease 2.9s infinite alternate;
}
main #sobre .larguraMaxContainer #sobreFoto .icon2 {
  animation: icon-move 3s ease 1.9s infinite alternate;
}
main #sobre .larguraMaxContainer #sobreFoto .icon3 {
  animation: icon-move 3s ease 0.6s infinite alternate;
}
@keyframes icon-move {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(10px, -40px, 0);
  }
}
main #sobre .larguraMaxContainer #sobreFoto img {
  width: 100%;
  max-width: 400px;
}
@media screen and (max-width: 1100px) {
  main #sobre .larguraMaxContainer #sobreFoto {
    display: none;
  }
}
main #sobre .larguraMaxContainer #sobreTexto {
  width: 50%;
}
@media screen and (max-width: 1100px) {
  main #sobre .larguraMaxContainer #sobreTexto {
    width: 100%;
    display: flex;
    flex-direction: column;
    padding-left: 0px;
  }
}
main #sobre .larguraMaxContainer #sobreTexto h2 {
  padding-bottom: 20px;
  color: #fefbfb;
  font-size: 3.2rem;
  font-weight: 500;
}
main #sobre .larguraMaxContainer #sobreTexto h2 span {
  color: #6610f2;
  font-size: 6rem;
}
main #sobre .larguraMaxContainer #sobreTexto p {
  line-height: 3.2rem;
  color: #c9c9c9;
  font-family: "Circular Std Book";
  font-size: 1.8rem;
}
main #sobre .larguraMaxContainer #sobreTexto p:nth-child(2) {
  padding-bottom: 20px;
}
main #projetos {
  padding: 100px 50px;
  text-align: center;
  background-color: #131219;
}
@media screen and (max-width: 1024px) {
  main #projetos {
    padding: 50px 20px;
  }
}
main #projetos .larguraMaxContainer h2 {
  padding-bottom: 20px;
  color: #fefbfb;
  font-size: 3.2rem;
  font-weight: 500;
}
main #projetos .larguraMaxContainer h2 span {
  color: #6610f2;
  font-size: 6rem;
}
main #projetos .larguraMaxContainer div {
  margin: 25px 0px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  text-align: left;
}
main #projetos .larguraMaxContainer div > article {
  height: auto;
  flex-grow: 1;
  flex-basis: calc(33% - 20px);
  background-color: #17161d;
  padding: 30px 25px;
  margin: 10px;
  border-radius: 5px;
  border: 2px solid #17161d;
}
main #projetos .larguraMaxContainer div > article:hover {
  border-radius: 5px;
  border: 2px solid #17161d;
  -o-border-image: linear-gradient(225deg, rgb(102, 16, 242) 0%, #17161d 100%) 1;
     border-image: linear-gradient(225deg, rgb(102, 16, 242) 0%, #17161d 100%) 1;
}
@media screen and (max-width: 1124px) {
  main #projetos .larguraMaxContainer div > article {
    flex-basis: calc(50% - 20px);
  }
}
@media screen and (max-width: 768px) {
  main #projetos .larguraMaxContainer div > article {
    flex-basis: calc(100% - 20px);
  }
}
main #projetos .larguraMaxContainer div > article img {
  margin: 20px 0;
  border-radius: 5px;
}
main #projetos .larguraMaxContainer div > article h3 {
  font-size: 2.4rem;
  color: #fefbfb;
  font-weight: 500;
}
main #projetos .larguraMaxContainer div > article p {
  line-height: 28px;
  margin-top: 20px;
  color: #c9c9c9;
  font-family: "Circular Std Book";
  font-size: 1.6rem;
}
main #projetos .larguraMaxContainer div > article > span {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  width: 100%;
}
main #projetos .larguraMaxContainer div > article > span a {
  width: 50%;
}
@media screen and (max-width: 1024px) {
  main #projetos .larguraMaxContainer div > article > span a {
    width: 100%;
  }
}
main #projetos .larguraMaxContainer div > article > span button {
  background-color: #6610f2;
  padding: 10px 25px;
  color: #fefbfb;
  border: 0;
  font-weight: 500;
  font-size: 14px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}
@media screen and (max-width: 1024px) {
  main #projetos .larguraMaxContainer div > article > span button {
    width: 100%;
    justify-content: center;
  }
}
main #projetos .larguraMaxContainer div > article > span button:hover {
  cursor: pointer;
  background-color: #5429cf;
}
main #projetos .larguraMaxContainer div > article > span button .iconify {
  font-size: 20px;
}
main #projetos .larguraMaxContainer div > article .linguagensProjeto {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  width: 100%;
  height: auto;
}
main #projetos .larguraMaxContainer div > article .linguagensProjeto span {
  padding: 5px;
  background-color: #131219;
  border-radius: 5px;
  color: #fefbfb;
  margin-bottom: 5px;
}
main #projetos .larguraMaxContainer a {
  color: #6610f2;
  font-size: 18px;
  position: relative;
}
main #projetos .larguraMaxContainer a::after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 1px;
  bottom: -7px;
  left: 0;
  background: linear-gradient(270deg, #6610f2 0%, #17161d 100%);
  transform-origin: bottom right;
  transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
}
main #projetos .larguraMaxContainer a:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
main #servicos {
  padding: 100px 50px;
  text-align: center;
  background-color: #17161d;
}
@media screen and (max-width: 1024px) {
  main #servicos {
    padding: 50px 20px;
  }
}
main #servicos .larguraMaxContainer h2 {
  padding-bottom: 20px;
  color: #fefbfb;
  font-size: 3.2rem;
  font-weight: 500;
}
main #servicos .larguraMaxContainer h2 span {
  color: #6610f2;
  font-size: 6rem;
}
main #servicos .larguraMaxContainer div {
  display: flex;
  height: auto;
  flex-wrap: wrap;
  margin: 25px 0px;
}
main #servicos .larguraMaxContainer div article {
  text-align: center;
  height: auto;
  background-color: #131219;
  padding: 40px 30px;
  border-radius: 5px;
  margin: 10px;
  flex-basis: calc(25% - 20px);
  flex-grow: 1;
  border: 2px solid #17161d;
}
main #servicos .larguraMaxContainer div article:hover {
  border: 2px solid #17161d;
  -o-border-image: linear-gradient(225deg, rgb(102, 16, 242) 0%, #17161d 100%) 1;
     border-image: linear-gradient(225deg, rgb(102, 16, 242) 0%, #17161d 100%) 1;
}
main #servicos .larguraMaxContainer div article .image-servicos {
  width: 100px;
  margin: 0 auto;
}
@media screen and (max-width: 1124px) {
  main #servicos .larguraMaxContainer div article {
    flex-basis: calc(50% - 20px);
  }
}
@media screen and (max-width: 768px) {
  main #servicos .larguraMaxContainer div article {
    flex-basis: calc(100% - 20px);
  }
}
main #servicos .larguraMaxContainer div article .iconify {
  color: #6610f2;
  font-size: 50px;
  margin: 10px 0px;
}
main #servicos .larguraMaxContainer div article h3 {
  font-size: 1.8rem;
  padding: 20px 0px;
  color: #fefbfb;
  font-weight: 500;
}
main #servicos .larguraMaxContainer div article p {
  line-height: 28px;
  color: #c9c9c9;
  font-family: "Circular Std Book";
  font-size: 1.6rem;
}
main #conhecimentos {
  padding: 100px 75px;
  background-color: #131219;
}
@media screen and (max-width: 1024px) {
  main #conhecimentos {
    padding: 75px 20px 100px 20px;
  }
}
main #conhecimentos .larguraMaxContainer > div {
  display: flex;
  justify-content: space-between;
  height: auto;
  flex-wrap: wrap;
}
main #conhecimentos .larguraMaxContainer > div div,
main #conhecimentos .larguraMaxContainer > div article {
  width: 50%;
}
@media screen and (max-width: 1124px) {
  main #conhecimentos .larguraMaxContainer > div div,
  main #conhecimentos .larguraMaxContainer > div article {
    width: 100%;
  }
}
main #conhecimentos .larguraMaxContainer > div div h2 span,
main #conhecimentos .larguraMaxContainer > div article h2 span {
  color: #6610f2;
  font-size: 6rem;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}
@media screen and (max-width: 1124px) {
  main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos {
    margin-top: 50px;
  }
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:hover .cards-nomes,
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:hover .cards-nomes-baixo {
  display: block;
  text-align: center;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:hover {
  border: 2px solid #17161d;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:before,
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:after {
  content: "";
  position: absolute;
  border: 2px solid transparent;
  height: 0;
  width: 0;
  top: 0px;
  right: 0px;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:hover {
  animation: buttonColorChange 1s ease-out forwards;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:hover:before {
  animation: buttonBeforeColorChange 1s ease-out forwards;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article:hover:after {
  animation: buttonAfterColorChange 1s ease-out forwards;
}
@keyframes buttonColorChange {
  100% {
    color: #6610f2;
  }
}
@keyframes buttonBeforeColorChange {
  50% {
    width: 100%;
    height: 0%;
    border-top-color: #6610f2;
  }
  100% {
    width: 100%;
    height: 100%;
    border-top-color: #6610f2;
    border-left-color: #6610f2;
  }
}
@keyframes buttonAfterColorChange {
  50% {
    width: 0%;
    height: 100%;
    border-right-color: #6610f2;
  }
  100% {
    width: 100%;
    height: 100%;
    border-right-color: #6610f2;
    border-bottom-color: #6610f2;
  }
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article {
  width: 20%;
  flex-grow: 1;
  height: 130px;
  background-color: #17161d;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
@media screen and (max-width: 768px) {
  main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article {
    width: 40%;
    margin: 20px 0px;
  }
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article .cards-nomes {
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translate(-50%, 0%);
  background-color: #17161d;
  padding: 5px;
  height: 30px;
  width: 125px;
  border-radius: 4px;
  color: #fefbfb;
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
  font-size: 1.8rem;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article .cards-nomes-baixo {
  position: absolute;
  bottom: -50px;
  left: 50%;
  transform: translate(-50%, 0%);
  background-color: #17161d;
  padding: 5px;
  height: auto;
  width: 125px;
  border-radius: 4px;
  color: #fefbfb;
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
  font-size: 1.8rem;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article .aumento-hover {
  bottom: -75px;
}
main #conhecimentos .larguraMaxContainer > div #cards-conhecimentos article .icon-conhecimentos {
  width: 60px;
}
main #conhecimentos .larguraMaxContainer > div #texto-conhecimentos {
  height: 300px;
}
main #conhecimentos .larguraMaxContainer > div #texto-conhecimentos h2 {
  margin-bottom: 30px;
  color: #fefbfb;
  font-size: 3.2rem;
  font-weight: 500;
}
main #conhecimentos .larguraMaxContainer > div #texto-conhecimentos p {
  max-width: 500px;
  line-height: 32px;
  color: #c9c9c9;
  font-family: "Circular Std Book";
  font-size: 1.8rem;
}

footer {
  padding: 50px 10px;
  text-align: center;
  background-color: #131219;
  color: #fefbfb;
}
footer > a {
  background-color: #17161d;
  padding: 10px 20px;
  border-radius: 20px;
  color: #fefbfb;
  font-size: 1.6rem;
}
footer > a:hover {
  opacity: 1;
}
footer h2 {
  color: #fefbfb;
  font-weight: 500;
  font-size: 3.2rem;
}
footer p {
  color: #fefbfb;
  opacity: 0.5;
  padding: 25px;
  font-family: "Circular Std Book";
  font-size: 1.8rem;
}
footer p:nth-child(2) {
  margin-bottom: 25px;
}
footer p:nth-child(5) {
  opacity: 1;
}
footer div {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  margin: 30px;
}
footer div a {
  background-color: #17161d;
  padding: 15px 25px;
  margin: 10px;
  border-radius: 5px;
  color: #fefbfb;
  opacity: 0.5;
  font-size: 1.6rem;
}
footer div a:hover {
  opacity: 1;
}/*# sourceMappingURL=style.css.map */
  </style>

  <body>
  
  <div>
    <!--Menu-->
    <header>
      <div class="larguraMaxContainer">
        <nav>
          <img src="aktif/gambar/logo.svg" alt="Logo Aldo Nainggolan" />
          <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
          <ul class="nav-list">
            <li><a href="#sobre">Who I am</a></li>
            <li><a href="#projetos">Projects</a></li>
            <li><a href="#servicos">Services</a></li>
            <li><a href="#conhecimentos">Knowledge</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <!--Home-->
      <section id="apresentacaoPortfolio">
        <div class="larguraMaxContainer">
          <div id="apresentacaoTexto">
            <h2 class="imagem-delay">
              Hello, I'm<br />
              <span id="nome">Aldo Nainggolan.</span><br />
              <span class="maquina-escrever">
                Front-End Developer.
              </span>
            </h2>
            <a
              href="https://www.instagram.com/uwagolan/?hl=en"
              rel="noopener"
              target="_blank"
              class="button"
            >
              Instagram
            </a>
          </div>
          <div id="apresentacaoFoto">
            <img
              src="aktif/gambar/espaco.svg"
              alt="foto de um espaço"
              id="fundo"
              class="imagem-espaco-delay"
            />
            <img
              src="aktif/gambar/iuri-flutuando.svg"
              alt="personagem flutuando"
              class="object imagem-iuri-delay"
            />
          </div>
        </div>

        <img
          src="aktif/gambar/Screenshot_1.png"
          width="70px"
          height="70px"
          alt="ícone mouse"
          class="mouse scroll-delay"
        />
      </section>

      <!--Quem sou-->
      <section id="sobre">
        <div class="larguraMaxContainer">
          <section id="sobreMim">
            <div id="sobreFoto">
              <img
                src="aktif/gambar/iuricode.svg"
                width="400px"
                height="400px"
                alt="ilustração do iuricode"
                class="imagem-delay"
                id="iuricode"
              />
              <div id="figura1" class="icon1 descricao-delay">
                <img
                  src="aktif/gambar/icon-html-cor.svg"
                  width="45px"
                  height="45px"
                  alt="ícone html"
                />
              </div>
              <div id="figura2" class="icon2 descricao-delay">
                <img
                  src="aktif/gambar/icon-css-cor.svg"
                  width="45px"
                  height="45px"
                  alt="ícone css"
                />
              </div>
              <div id="figura3" class="icon3 descricao-delay">
                <img
                  src="aktif/gambar/icon-js-cor.svg"
                  width="45px"
                  height="45px"
                  alt="ícone javascript"
                />
              </div>
            </div>
            <article id="sobreTexto">
              <h2 class="titulo-delay">Who I'm<span>.</span></h2>
              <p class="descricao-delay">
                My name is Giraldo Nainggolan. You can call me Aldo or whatever you want. I am a freelancer as a Front-end developer and UI Designer. I am currently pursuing my first year undergraduate studies at the Faculty of Engineering, majoring in Information Systems at Trunojoyo State University Madura.
              </p>
              <p class="descricao-delay">
                I started as front-end developer in 2022 and UI Designer in 2023. I see that I am on the right track because I understand the results in my developed services. 
              </p>
            </article>
          </section>
        </div>
      </section>

      <!--Projetos-->
      <section id="projetos">
        <div class="larguraMaxContainer">
          <h2 class="titulo-delay">Projects <span>.</span></h2>
          <div>
            <article class="cards-interval">
              <h3>Portfolio</h3>
              
            </article>

            <article class="cards-interval">
              <h3>Profile Card</h3>
              <a href="file:///D:/PBW/Profile%20Card/index.html"></a>
            </article>

            <article class="cards-interval">
              <h3>Music App</h3>
              
            </article>

            <article class="cards-interval">
              <h3>Event Websites</h3>
              
            </article>

            <article class="cards-interval">
              <h3>Resume</h3>
              
            </article>

            <article class="cards-interval">
              <h3>Education Blog</h3>
              
            </article>
          </div>
          <a
            href="https://github.com/GiraldoSN" 
            rel="noopener"
            target="_blank"
            class="descricao-delay"
            >Repositories no GitHub</a
          >
        </div>
      </section>

      <!--Serviços-->
      <section id="servicos">
        <div class="larguraMaxContainer">
          <h2 class="titulo-delay">Services<span>.</span></h2>
          <div>
            <article class="cards-interval draw meet">
              <img
                src="aktif/gambar/icon-computer.svg"
                width="100px"
                height="100px"
                alt="ícone computador"
                class="image-servicos"
              />
              <h3>Site Creation</h3>
              <p>
                Development of professional websites, web systems, blogs and virtual stores. 
              </p>
            </article>

            <article class="cards-interval">
              <img
                src="aktif/gambar/icon-image.svg"
                width="100px"
                height="100px"
                alt="ícone imagem"
                class="image-servicos"
              />
              <h3>Responsive Sites</h3>
              <p>
                Creating responsive websites for the best visualization in all resolutions. 
              </p>
            </article>

            <article class="cards-interval">
              <img
                src="aktif/gambar/icon-layers.svg"
                width="100px"
                height="100px"
                alt="ícone layers"
                class="image-servicos"
              />
              <h3>UI Design</h3>
              <p>
                Design of layouts that suit your business in a professional and faithful way in development. 
              </p>
            </article>

            <article class="cards-interval">
              <img
                src="aktif/gambar/icon-codigo.svg"
                width="100px"
                height="100px"
                alt="ícone código"
                class="image-servicos"
              />
              <h3>Clean Code</h3>
              <p>
                Strategy and monitoring for your business, making your site appear better and better in searches. 
              </p>
            </article>
          </div>
        </div>
      </section>

      <!--Conhecimentos-->
      <section id="conhecimentos">
        <div class="larguraMaxContainer">
          <div>
            <article id="texto-conhecimentos">
              <h2 class="titulo-delay">Knowledge<span>.</span></h2>
              <p class="descricao-delay mudarTextoDescricao">
                *Hover the card to Read*
              </p>
            </article>

            <div id="cards-conhecimentos">
              <article class="html sairCaixa">
                <span class="cards-nomes">HTML</span>
                <img
                  src="aktif/gambar/icon-html-cor.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do html"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="css sairCaixa">
                <span class="cards-nomes">CSS</span>
                <img
                  src="aktif/gambar/icon-css-cor.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do css"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="js sairCaixa">
                <span class="cards-nomes">Javascript</span>
                <img
                  src="aktif/gambar/icon-js-cor.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do javascript"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="cards-interval sass sairCaixa">
                <span class="cards-nomes">ReactJS</span>
                <img
                  src="aktif/gambar/react.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do sass"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="cards-interval react sairCaixa">
                <span class="cards-nomes-baixo">Git</span>
                <img
                  src="aktif/gambar/git.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do react"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="cards-interval next sairCaixa">
                <span class="cards-nomes-baixo">Canva</span>
                <img
                  src="aktif/gambar/canva.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do next"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="cards-interval styled sairCaixa">
                <span class="cards-nomes-baixo aumento-hover"
                  >Microsoft Office</span
                >
                <img
                  src="aktif/gambar/microsoftoffice.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do styled"
                  class="icon-conhecimentos"
                />
              </article>
              <article class="cards-interval tailwind sairCaixa">
                <span class="cards-nomes-baixo">Matlab</span>
                <img
                  src="aktif/gambar/matlab.svg"
                  width="60px"
                  height="60px"
                  alt="ícone do tailwind"
                  class="icon-conhecimentos"
                />
              </article>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--Rodapé-->
    <footer class="footer">
      <h2>Hello World!🌎</h2>
      <p>
        If you want to chat with me, don't hesitate to send me a message. 
      </p>

      <a href="mailto:220441100064@student.trunojoyo.ac.id">💌 Mail Me</a>

      <div>
        <a href="https://github.com/GiraldoSN/The.Web.For.Christmas" target="_blank" rel="noopener">
          🌎 Portfolio 
        </a>
        <a
          href="https://www.linkedin.com/in/geraldo-stevanus-435826245/" 
          target="_blank"
          rel="noopener"
        >
          💼 Linkedin
        </a>
        <a
          href="https://twitter.com/GolanUwaDo?t=3svipfDXKHKaGXVjsTryKA&s=09"
          target="_blank"
          rel="noopener"
        >
          <b>@</b> Twitter
        </a>
        <a href="https://www.youtube.com/channel/UC7KRVNkXq_WyhegWcphUh0g" target="_blank" rel="noopener">
          📺 YouTube
        </a>
      </div>

      <p>Made by Aldo</p>
    </footer>

    <!--Script da animação de Scroll-->
    <!-- <script src="https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.min.js"></script> -->
    <!--Scripts-->
    <!-- <script src="main.js"></script> -->

    <script>
    //Menu
class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li"
  );
  mobileNavbar.init();
  
  //Maquina de escrever
  function typeWrite(elemento) {
    const textoArray = elemento.innerHTML.split("");
    elemento.innerHTML = " ";
    textoArray.forEach(function (letra, i) {
      setTimeout(function () {
        elemento.innerHTML += letra;
      }, 100 * i);
    });
  }
  const titulo = document.querySelector(".maquina-escrever");
  typeWrite(titulo);
  
  //Revelar animação
  const sr = ScrollReveal({
    origin: "top",
    distance: "50px",
    duration: 2000,
  });
  
  //Home delay
  sr.reveal(".button", { delay: 200 });
  sr.reveal(".linguagensProjeto", { delay: 400 });
  sr.reveal(".imagem-espaco-delay", { delay: 200 });
  sr.reveal(".imagem-iuri-delay", { delay: 600 });
  sr.reveal(".scroll-delay", { delay: 1000 });
  //Sobre mim delay
  sr.reveal(".imagem-delay", {});
  sr.reveal(".titulo-delay", { delay: 200 });
  sr.reveal(".descricao-delay", { delay: 400 });
  sr.reveal(".cards-interval", { interval: 400 });
  
  //Animação conhecimentos
  var texto1 = document.querySelector(".mudarTextoDescricao");
  
  document.querySelector(".html").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "HTML is a marking-based language, where we mark the elements to define which information the page will display.";
  });
  
  document.querySelector(".css").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "CSS is a style sheet language composed of layers, created with the purpose of stylizing HTML pages.";
  });
  
  document.querySelector(".js").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "JavaScript is a structured interpreted programming language, high-level script with weak and multiparadigm dynamic typing.";
  });
  
  document.querySelector(".tailwind").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "MATLAB is a programming platform designed specifically for engineers and scientists to analyze and design systems and products that transform our world.";
  });
  
  document.querySelector(".sass").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "React is an open source JavaScript library focused on creating user interfaces on web pages.";
  });
  
  document.querySelector(".react").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "Git is a DevOps tool used for source code management. It is a free and open-source version control system used to handle small to very large projects efficiently. Git is used to tracking changes in the source code, enabling multiple developers to work together on non-linear development.";
  });
  
  document.querySelector(".next").addEventListener("mouseover", function () {
    texto1.innerHTML =
      "Canva is a free graphic design platform that's great for making invitations, business cards, Instagram posts, and more. A drag and drop interface makes customizing thousands of templates simple and easy.";
  });
  
  document
    .querySelector(".styled")
    .addEventListener("mouseover", function mudarTexto8() {
      texto1.innerHTML =
        "Microsoft Office is a set of computer applications mainly used for business or office purposes.MS Office helps simplify basic office tasks and improve work productivity.";
    });
  
  var sairCaixa = document.getElementsByClassName("sairCaixa");
  
  for (i = 0; i < sairCaixa.length; i++) {
    sairCaixa[i].addEventListener("mouseout", function mudarTextoNormal() {
      texto1.innerHTML = `*Hover the card to Read*`;
    });
  }
  </script>

  </body>
</html>