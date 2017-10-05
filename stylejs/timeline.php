<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timeline</title>
    <style>
        body{
            margin-top: 320px;
            background-color: black;
        }
        .bubble5 {
  height: 200px;
  width: 190px;
  padding: 20px;
  position: absolute;
  color: white;
  background-color: #697A8A;
  font-family: "Open Sans Condensed";
  border-top-left-radius: 30px;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 30px;
  border-bottom-left-radius: 0;
  top: 366px;
  left: 130px;
  z-index: -1;
}
        .bubble5 span.the-arrow5 {
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 0px solid #697A8A;
    /* border-bottom: 20px solid #697A8A; */
    border-top: 20px solid #697A8A;
    position: absolute;
    top: -7px;
    left: 93px;
    transform: rotate(304deg);
}
        
        .bubble4 {
    height: 198px;
    width: 185px;
    padding: 20px;
    position: absolute;
    color: white;
    background-color: #697A8A;
    font-family: "Open Sans Condensed";
    border-top-left-radius: 30px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 20px;
    top: 70px;
    left: 489px;
    z-index: -1;
}
        .bubble4 span.the-arrow4 {
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 0px solid #697A8A;
    border-bottom: 20px solid #697A8A;
    /* border-top: 20px solid #697A8A; */
    position: absolute;
    top: 226px;
    left: 97px;
    transform: rotate(46deg);
}
        
        .bubble3 {
    height: 198px;
    width: 185px;
    padding: 20px;
    position: absolute;
    color: white;
    background-color: #697A8A;
    font-family: "Open Sans Condensed";
    border-top-left-radius: 30px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 20px;
    top: 363px;
    left: 844px;
    z-index: -1
}
        .bubble3 span.the-arrow3 {
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 0px solid #697A8A;
    /* border-bottom: 20px solid #697A8A; */
    border-top: 20px solid #697A8A;
    position: absolute;
    top: -16px;
    left: 132px;
    transform: rotate(179deg);
}
                
        .bubble2 {
    height: 198px;
    width: 185px;
    padding: 20px;
    position: absolute;
    color: white;
    background-color: #697A8A;
    font-family: "Open Sans Condensed";
    border-top-left-radius: 0px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
    top: 70px;
    left: 1234px;
    z-index: -1;
}
        .bubble2 span.the-arrow2 {
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 0px solid #697A8A;
    border-bottom: 20px solid #697A8A;
    /* border-top: 20px solid #697A8A; */
    position: absolute;
    top: 234px;
    left: 103px;
    transform: rotate(179deg);
}
  .container {
      width: 1500px;
      margin: 100px auto; 
  }
  .progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 25%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: black;
  }
  .progressbar li.active:before {
      border-color: red;
  }
  .progressbar li.active + li:after {
      background-color: lawngreen;
  }
    </style>
</head>
<body>
     <div class="space_top">
      <div class="container">
      <ul class="progressbar">
          <li class="active"></li>
          <li class="active"></li>
          <li class="active"></li>
          <li class="active"></li>
      </ul>
    </div>
    
      <div class="bubble5">
     <span class="the-arrow5"></span>
     <span style="margin-left:70px;">FOUNDED</span><br><br><br>
    HIGH SCHOOL<br/>
    APS JANGLOT, J&K, India<br/>
    June 2014, GPA 8.2<br/><br/>
    UNIVERSITY <br/>
    SRM UNIVERSITY<br/>
    July 2015- Current
    
   </div>
         <div class="bubble4">
     <span class="the-arrow4"></span>     
     <span style="margin-left:50px;">OPEN SOURCE</span><br><br><br>
    HIGH SCHOOL<br/>
    APS JANGLOT, J&K, India<br/>
    June 2014, GPA 8.2<br/><br/>
    UNIVERSITY <br/>
    SRM UNIVERSITY<br/>
    July 2015- Current
    
   </div>
   
<div class="bubble3">
     <span class="the-arrow3"></span>     
     <span style="margin-left:50px;">NO CHARGES</span><br><br><br>
    HIGH SCHOOL<br/>
    APS JANGLOT, J&K, India<br/>
    June 2014, GPA 8.2<br/><br/>
    UNIVERSITY <br/>
    SRM UNIVERSITY<br/>
    July 2015- Current
    
   </div>
   
 <div class="bubble2">
     <span class="the-arrow2"></span>     
     <span style="margin-left:50px;">USERS 100,000 +</span><br><br><br>
    HIGH SCHOOL<br/>
    APS JANGLOT, J&K, India<br/>
    June 2014, GPA 8.2<br/><br/>
    UNIVERSITY <br/>
    SRM UNIVERSITY<br/>
    July 2015- Current
    
</div>
        </div>
</body>
</html>