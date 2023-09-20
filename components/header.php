<?php 
// mi prendo i dati 


?>

<header >
  <h1 class="text-center p-4 bg-gray-200 m-2 rounded-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, tempora.</h1>
  <ul class="flex items-center justify-between"> 

  <li class="hover:text-[90px]" onclick="cliccato(1,2,34)">
      <span href="/">Home 1</span>
    </li>

    <li onclick="cliccato(1,2,34)">
      <span href="/">Home 1</span>
    </li>
    <li onclick="cliccato(1,2,34)">
      <span href="/">Home 1</span>
    </li>


  </ul>
</header>

<script>
  function cliccato(primo,secondo,terzo){
    alert("cliccato")
  }
</script>
