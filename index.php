<?php

echo ' 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Rock+Salt&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<style>
  
    p {
        font-family: "Merienda", cursive;
      //  font-family: "Rock Salt", cursive;
        margin-bottom: 20px;
        margin-left: 100px;
        color: #123; /* Text color */
        font-size: 28px; /* Heading size */
        //  font-family: "Satisfy", cursive;
        //  font-family: "Shadows Into Light", cursive;
        //  font-family: Fertigo, sans-serif;
    }
    psmall {
        font-family: "Merienda", cursive;
        left: 10px;
        bottom: 10px;
        position: absolute;
        text-decoration: none;color: #FD6579;
        font-size: 12px; /* Heading size */
    }
    h1{
        font-family: "Merienda", cursive;
       // font-family: 'Helvetica Neue', sans-serif;
        margin-left: 50px;
        font-size: 4rem;
        //font-family: Arial, sans-serif;
        color: #FD6579; /* Romantic color */
        position: relative;
        text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }
    .caption-container {
        margin-left: 80px;
      //  text-align: center;
        padding: 20px;
        max-width: 800px;
        border-radius: 8px;
        background-color: #fff;
       // box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for elegance */
    }
    .caption-container:hover {
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); /* Slightly more shadow on hover */
        transform: translateY(-2px); /* Gentle hover effect */
        transition: all 0.3s ease-in-out; /* Smooth animation */
    }
    .floating-image {
        width: 150px; /* Set width */
        height: 150px; /* Set height */
        border-radius: 300px;
        object-fit: cover;
        overflow: hidden; /* Ensures image stays within bounds */
        box-shadow: 0 4px 8px rgba(10, 10, 20, 1.2); /* Shadow effect */
        transition: transform 0.2s; /* Smooth hover effect */
        margin-left: 800px;
    }
    .floating-image:hover {
        transform: scale(1.25); /* Slight zoom on hover */
    }
    .floating-image img {
       
        width: 100%; /* Makes image fill the container */
        height: 100%; /* Maintains aspect ratio */
        object-fit: cover; /* Ensures image covers the entire area */
    }
    .scattered-image {
                position: absolute; /* Positioning images absolutely */
                width: 300px; /* Set width */
                height: 300px; /* Set height */
                border-radius: 200px;
                object-fit: cover;
                overflow: hidden; /* Ensures image stays within bounds */
                box-shadow: 0 14px 8px rgba(5, 5, 10, 1.2); /* Shadow effect */
                transition: transform 0.2s; /* Smooth hover effect */
                
                --_m: radial-gradient(#000 69%,#0000 70%) 84.5%/50%;
                -webkit-mask-box-image: var(--_m);
                           mask-border: var(--_m);
                clip-path: polygon(-41% 0,50% 91%, 141% 0);
                
    }
    .scattered-image:hover {
        transform: scale(1.1);
    }
    img {
     // width: 100px;
      width: 300px; /* Set width */
      height: 300px; /* Set height */
      aspect-ratio: 1;
      object-fit: cover;
     
      box-shadow: 0 4px 8px rgba(10, 10, 20, 1.2); /* Shadow effect */
      --_m: radial-gradient(#000 69%,#0000 70%) 84.5%/50%;
      -webkit-mask-box-image: var(--_m);
                 mask-border: var(--_m);
      clip-path: polygon(-41% 0,50% 91%, 141% 0);
    }

    @supports not (-webkit-mask-box-image: var(--_m)) {
      img {
       --_m:
         radial-gradient(at 70% 31%,var(--c) 29%,#0000 30%),
         radial-gradient(at 30% 31%,var(--c) 29%,#0000 30%),
         linear-gradient(#000 0 0) bottom/100% 50% no-repeat;
       -webkit-mask: var(--_m);
               mask: var(--_m);
      }
    }
    
    @supports not (-webkit-mask-box-image: var(--_m)) {
      img {
       --_m:
            radial-gradient(at 70% 31%,var(--c) 29%,#0000 30%),
            radial-gradient(at 30% 31%,var(--c) 29%,#0000 30%),
            linear-gradient(#000 0 0) bottom/100% 50% no-repeat;
          -webkit-mask: var(--_m);
                  mask: var(--_m);
      }
    }
    </style>
    <title>plus1me</title>
  </head>
  <body>
      <a href="about.html" style="right: 170px;top: 10px;position: absolute; text-decoration: none;color: #007bff; " >About</a>
  
      <a href="contact.html" style="right: 100px;top: 10px;position: absolute; text-decoration: none;color: #007bff; " >Contact</a>
      <!--  <a  style="right: 50px;top: 10px;position: absolute; text-decoration: none;color: #007bff; " >Help</a>
   
      -->
   <br>
    <br>
    <br>
  
        <h1 >Meet Plus1me! </h1>
            <p >
                This space is for finding your Plus One!
            </p>
            <p>
                Coming soon.
            <p>


    <div class="scattered-image" style=" position: absolute;top: 15%; left: 68%;">
    <img src="beach.jpg" alt="Heart Image" style=" position: absolute;top:14%; left: 0%;">
    </div>
    <img src="fire.png" alt="Heart Image" style=" position: absolute;top: 40%; left: 50%;">
        
    <img src="couple.jpg" alt="Heart Image" style=" position: absolute;top: 55%; left: 70%;">
    <psmall >2024&copy;,All Rights Reserved</psmall>
  </body>
</html>

';

