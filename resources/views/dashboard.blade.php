<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard</title>
<style>
  .container {
            text-align: right; 
            padding: 20px;
        }
  .highlight-text {
      font-size: 48px;
      font-weight: bold;
      color: #ff6347;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
      animation: glow 1.5s ease-in-out infinite;
      text-align: center;
  }

  @keyframes glow {
      0% {
          text-shadow: 0 0 10px #ff6347, 0 0 20px #ff6347, 0 0 30px #ff6347;
      }
      50% {
          text-shadow: 0 0 20px #ff4500, 0 0 30px #ff4500, 0 0 40px #ff4500;
      }
      100% {
          text-shadow: 0 0 10px #ff6347, 0 0 20px #ff6347, 0 0 30px #ff6347;
      }
  }
  .button {
  background-color: blue; 
  border: none;
  color: rgb(0, 0, 0);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  }
  .button2 {background-color: green;}
  .button3 {background-color: rgb(255, 0, 0);}

    
       
</style>
</head>

<body style="background-color:#000000;">

<div class="highlight-text"> Welcome, {{ Auth::user()->nama }}</div> 

<div class="container">
  <button class="button button3" ><a style="color:white" href="{{ route('logout') }}">Log Out</a></button>
</div>
<h1 style="color:white;">Dashboard</h1>

<button class="button" ><a style="color:white" href="{{ route('barang') }}">Barang</a></button><br>
@if (auth()->user()->level == 'Admin')
<button class="button button2" ><a style="color:white" href="{{ route('kategori') }}">Kategori</a></button>
@endif
</body>
