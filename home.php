<?php
session_start();
$username = $_SESSION['user'];
$_SESSION['username'] = $username;
echo (
"<html>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
  <a class='navbar-brand' href='#'>Oxygen</a>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
    <li class='nav-item'>
        <a class='nav-link' href='home.php'>Home</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='SRF.php'>SRF</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='event.php'>History</a>
      </li>
	  <li class='nav-item'>
        <a class='nav-link' href='Login.php'>Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class='container'>

<h1>Need of Oxygen...</h1><br>
<center><img src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNIT9_kQg1wuNqLgBFvc2SgVJhrC5QlnM0BQ&usqp=CAU'></center>
<br>
<p><font face = 'Sans-serif' size = '4px'>The sudden surge of COVID infections and the subsequent need for supplemental oxygen in late March blindsided India’s health care network. The country had assumed the worst of the pandemic was over. But within two weeks, the daily demand for medical oxygen spiked to 12 times pre-COVID levels, leaving hospitals like Batra struggling to treat the rush of patients who were showing up, gasping for breath.
It wasn’t just acute need that caused the run on oxygen. Panic drove people to buy oxygen cylinders and machines like oxygen concentrators at three times their regular rate on the black market, even if the buyers didn’t immediately need them, according to anecdotes from consumers and media reports. The apparent shortage led to Indians begging for oxygen on social media and to stories like Himthani’s, in which COVID patients died because their need was never met.
In truth, India always had enough oxygen. But as the second wave hit, it was being used for industrial—not medical—purposes.Subscribe to Eastworld for weekly insight on what’s dominating business in Asia, delivered free to your inbox.Ordinarily, India produces 9,000 tons of liquid oxygen each day. Only 10% to 15% of that goes toward medical supplies. The rest is used in industry, such as steelmaking.At the height of India’s second wave, which is still ongoing, COVID patients needed between 9,000 and 11,000 tons of oxygen. India had the capacity to meet that demand, but it would require diverting up to 90% of the country’s oxygen supply from industrial sites.
Pulling that off took weeks—and government intervention.</font></p>
</div>
");
?>